<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal_M extends CI_Model
{
  public function getAllJadwal()
  {
    return $this->db->get('jadwalhalaqoh')->result_array();
  }

  public function addJadwal($data)
  {
    $this->db->insert('jadwalhalaqoh', $data);
  }

  public function updateJadwal($data)
  {
    $this->db->where('IdJadwal', $data['IdJadwal']);
    $this->db->update('jadwalhalaqoh', $data);
  }

  public function deleteJadwal($data)
  {
    $this->db->where('IdJadwal', $data['IdJadwal']);
    $this->db->delete('jadwalhalaqoh', $data);
  }
}

/* End of file Jadwal_M.php */
