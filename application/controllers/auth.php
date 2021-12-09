<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {

        if ($this->input->post() && ($this->input->post('captcha') == $this->session->userdata('mycaptcha'))) {
            $this->_login();
        } else {
            $path = './assets/captcha/';
            $vals = array(
                'img_path'     => $path,
                'img_url'     => base_url() . 'assets/captcha/',
                'img_width'     => '200',
                'img_height' => 30,
                'border' => 0,
                'expiration' => 7200
            );

            // create captcha image
            $cap = create_captcha($vals);

            // store image html code in a variable
            $data['image'] = $cap['image'];

            // store the captcha word in a session
            $this->session->set_userdata('mycaptcha', $cap['word']);
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('captcha', 'Captcha', 'required');

        //validasi
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $post_captcha = $this->input->post('captcha');
        $captcha = $this->session->userdata('mycaptcha');

        $user = $this->db->get_where('users', ['email' => $email])->row_array();
        if ($user != NULL) {
            if (password_verify($password, $user['password'])) {
                if ($this->session->userdata('mycaptcha') == true) {
                    if ($post_captcha == $captcha) {

                        $data = [
                            'email' => $user['email'],
                            'role_id' => $user['role_id']
                        ];
                        $this->session->set_userdata($data);
                        if ($user['role_id'] == 1) {
                            redirect('Admin');
                        } else {
                            redirect('Welcome');
                        }
                    } else {
                        $this->session->set_flashdata('captcha', '<div class="row mt-3">
                    <div class="col-md-12">
                        <div class="alert alert-danger" role="alert">
                            Captcha salah!
                        </div>
                    </div>
                    </div>
                    </div>');
                        redirect('auth');
                    }
                } else {
                    echo 'Captcha salah';
                }
            } else {
                $this->session->set_flashdata('password', '<div class="row mt-3">
                    <div class="col-md-12">
                        <div class="alert alert-danger" role="alert">
                            Password salah!
                        </div>
                    </div>
                    </div>
                    </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('aktif', '<div class="row mt-3">
                <div class="col-md-12">
                    <div class="alert alert-danger" role="alert">
                        Email belum Aktif!
                    </div>
                </div>
                </div>
                </div>');
            redirect('auth');
        }
    }
    public function registrasi()
    {
        //validasi
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim');
        $this->form_validation->set_rules('tanggal', 'Tanggal lahir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('kota', 'Kota', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[confirm_password]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|trim|min_length[3]|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', ['is_unique' => 'Email ini sudah pernah dipakai!']);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registrasi';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registrasi');
            $this->load->view('templates/auth_footer');
        } else {
            $email=$this->input->post('email');
            $data = [
                'username' => $this->input->post('username', true),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'email' => $email,
                'alamat' => $this->input->post('alamat'),
                'kota' => $this->input->post('kota'),
                'tanggallahir' => $this->input->post('tanggal'),
                'phone' => $this->input->post('phone'),
                'role_id' => 2,
                'is_active' => 0

            ];

            //Siapkan token

            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' =>  $token,
                'date_created' => time()
            ];

            $this->db->insert('users', $data);
            $this->db->insert('user_token', $user_token);


            $this->_sendEmail($token, 'verify');


            $this->session->set_flashdata('message', '<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
              <img src="..." class="rounded mr-2" alt="...">
              <strong class="mr-auto">Mampars Hotel</strong>
              <small class="text-muted">Anda telah berhasil mendaftarkan akun. Aktivasi akun anda! </small>
              <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
          </div>');
            redirect('auth');
        }
    }

    private function _sendEmail($token, $type){
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'diansitanggang161201@gmail.com',
            'smtp_pass' => 'hbrddsm12',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n",


        ];

        $this->load->library('email', $config);

        $this->email->from('diansitanggang161201@gmail.com', 'Mampars Hotel');
        $this->email->to($this->input->post('email'));

        if($type == 'verify'){
            $this->email->subject('Account Verification MamparsHotel');
            $this->email->message('Click this link to verify your account : <a href="'.base_url(). 'auth/verify?email='. $this->input->post('email'). '&token='.$token.'">Activate</a>');
        }
        
        if($this->email->send()){
            return true;
        }else{
            echo $this->email->print_debugger();
            die;
        }
    }

    public function verify(){

        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('users', ['email' => $email])->row_array();
        if($user){
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if($user_token){
                if(time() - $user_token['date_created']< (60*60*24)){
                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('users');
                    $this->db->delete('user_token', ['email' => $email]);
                    $this->session->set_flashdata('message', '<dic class="alert alert-success" role="alert">Account Activation Failed!  Token Expired.</div>');
                    redirect('auth');
                }else{
                    $this->db->delete('users', ['email' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);
                    $this->session->set_flashdata('message', '<dic class="alert alert-danger" role="alert">Your email has been activated. Please Login!</div>');
                    redirect('auth');
                }

            }else{
                $this->session->set_flashdata('message', '<dic class="alert alert-danger" role="alert">Account Activation Failed! Wrong Token.</div>');
                    redirect('auth');
            }
        }else{
             $this->session->set_flashdata('message', '<dic class="alert alert-danger" role="alert">Account Activation Failed! Wrong Email.</div>');
             redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('logout', '<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
              <img src="..." class="rounded mr-2" alt="...">
              <strong class="mr-auto">Mampars Hotel</strong>
              <small class="text-muted">Anda telah Logout</small>
              <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
          </div>');
        redirect('auth');
    }
    public function create_captcha()
    {
        $path = './assets/captcha/';
        $options = array(
            'img_path' => $path,
            'img_url' => base_url('assets/captcha/'),
            'img_width' => '150',
            'img_height' => '30',
            'expiration' => 7200
        );

        $cap = create_captcha($options);
        $image = $cap['image'];

        $this->session->set_userdata('captchaword', $cap['word']);
        return $image;
    }

    public function check_captcha()
    {
        if ($this->input->post('captcha') == $this->session->userdata('captchaword')) {
            return true;
        } else {
            $this->form_validation->set_message('check_captcha', 'Captcha is wrong');
            return false;
        }
    }
    public function index2()
    {
        $path = './assets/captcha/';
        $options = array(
            'img_path' => $path,
            'img_url' => base_url('assets/captcha/'),
            'img_width' => '150',
            'img_height' => '30',
            'expiration' => 7200
        );

        $cap = create_captcha($options);
        $image = $cap['image'];

        $this->session->set_userdata('captchaword', $cap['word']);
        return $image;
        $this->form_validation->set_rules('captcha', 'captcha', 'trim|callback_check_captcha|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login', array('img' => $this->create_captcha()));
        } else {
            echo 'Success Captcha Code';
        }
    }
}
