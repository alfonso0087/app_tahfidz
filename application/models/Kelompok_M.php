<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelompok_M extends CI_Model
{
  public function getAllKelompok()
  {
    return $this->db->get('kelompokhalaqoh')->result_array();
  }

  public function addKelompok($data)
  {
    $this->db->insert('kelompokhalaqoh', $data);
  }

  public function updateKelompok($data)
  {
    $this->db->where('IdKelompok', $data['IdKelompok']);
    $this->db->update('kelompokhalaqoh', $data);
  }

  public function deleteKelompok($data)
  {
    $this->db->where('IdKelompok', $data['IdKelompok']);
    $this->db->delete('kelompokhalaqoh', $data);
  }
}

/* End of file Kelompok_M.php */
