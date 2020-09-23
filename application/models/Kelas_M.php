<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kelas_M extends CI_Model
{

  public function getAllKelas()
  {
    $this->db->select('*');
    $this->db->from('kelas');
    return $this->db->get()->result_array();
  }

  public function addKelas($data)
  {
    $this->db->insert('kelas', $data);
  }

  public function updateKelas($data)
  {
    $this->db->where('IdKelas', $data['IdKelas']);
    $this->db->update('kelas', $data);
  }

  public function deleteKelas($data)
  {
    $this->db->where('IdKelas', $data['IdKelas']);
    $this->db->delete('kelas', $data);
  }
}

/* End of file Kelas_M.php */
