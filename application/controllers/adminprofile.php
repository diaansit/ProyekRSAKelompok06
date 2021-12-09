<?php
defined('BASEPATH') or exit('No direct script access allowed');

class adminprofile extends CI_Controller
{
    public function index()
    {
        $this->load->model('adminprofile_model');
        $data['title'] = 'Admin Profile';
        $data['Anggota'] = $this->db->get('users')->result_array();

        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        $data['users'] = $this->adminprofile_model->getAllUser();


        $this->load->view('admin/adminprofile', $data);
    }
    public function utama()
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Halaman Utama";
        $this->load->view('admin/utama', $data);
    }
    public function hapuss($id)
    {
        $this->adminprofile_model->hapusUser($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('index');
    }
    public function hapus($username)
    {
        $this->db->where('username', $username);
        $this->db->delete('users');
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('adminprofile/index');
    }
    public function edit($id)
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['id'] = $this->db->get_where('users', ['user_id' => $id])->row_array();
        $this->load->model('m_anggota');
        $where = array('user_id' => $id);
        $data['anggota'] = $this->m_anggota->edit_data($where, 'users')->result();
        $this->load->view('admin/edit_profile', $data);
    }
    public function update()
    {
        $this->load->model('m_anggota');
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $alamat = $this->input->post('alamat');
        $kota = $this->input->post('kota');
        // $foto = $this->input->post('foto');

        $data = array(
            'username' => $username,
            'phone' => $phone,
            'email' => $email,
            'password' => $password,
            'alamat' => $alamat,
            'kota' => $kota

            // 'foto' => $nama

        );

        $where = array(
            'user_id' => $id
        );

        $this->m_anggota->update_data($where, $data, 'users');
        $this->session->set_flashdata('edit', 'Dilakukan');
        redirect('adminprofile');
    }
    public function DaftarOrang()
    {
        $this->load->model('m_cari');
        $member['title'] = "Result";
        $member['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $member['Anggota'] = $this->db->get('users')->result_array();
        if ($this->input->post('cariorang')) {
            $member['Anggota'] = $this->m_cari->cariorang();
        }
        $this->load->view('admin/adminprofile', $member);
    }
    public function cari()
    {
        $this->load->model('m_cari');
        $cari = $this->input->post('cari');

        $data['cari'] = $this->m_cari->get_keyword($cari);
        $this->load->view('admin/adminprofile', $data);
    }
}
