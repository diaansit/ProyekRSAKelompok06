<?php
class adminprofile_model extends CI_model
{
    public function getAllUser()
    {
        $query = $this->db->get('users');
        return $query->result_array();
    }
    public function hapusUser($id)
    {
        $this->db->where('user_id', $id);
        $this->db->delete('users');
    }
}
