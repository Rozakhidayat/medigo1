<?php
class M_auth extends CI_Model
{
    public function create($data)
    {
        return $this->db->insert('user', $data);
    }
}
