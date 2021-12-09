<?php

class m_cari extends CI_Model
{
    public function cariorang()
    {
        $katakunci = $this->input->post('cariorang', true);
        $this->db->like('user_id', $katakunci);
        $this->db->or_like('username', $katakunci);
        $this->db->or_like('email', $katakunci);
        $this->db->or_like('phone', $katakunci);
        return $this->db->get('users')->result_array();
    }
}
