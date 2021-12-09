<?php

class Auth_Model extends CI_Model
{


    public function tambahAkun()
    {
        $data = [
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true),
            "email" => $this->input->post('email', true),
            "phone" => $this->input->post('phone', true),
            "tanggallahir" => $this->input->post('tanggal', true),
            "alamat" => $this->input->post('alamat', true),
            "kota" => $this->input->post('kota', true)

        ];

        $this->db->insert('users', $data);
    }
}
