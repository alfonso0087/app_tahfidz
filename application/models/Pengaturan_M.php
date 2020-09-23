<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan_M extends CI_Model
{
  public function getAllPengguna()
  {
    $this->db->select('*');
    $this->db->from('login');
    return $this->db->get()->result_array();
  }

  public function addUser($data)
  {
    $this->db->insert('login', $data);
  }

  public function updatePengguna($data)
  {
    $this->db->where('IdUser', $data['IdUser']);
    $this->db->update('login', $data);
  }

  public function deletePengguna($data)
  {
    $this->db->where('IdUser', $data['IdUser']);
    $this->db->delete('login', $data);
  }
}

/* End of file Pengaturan_M.php */
