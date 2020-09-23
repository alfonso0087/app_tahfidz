<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_ujian_M extends CI_Model
{
  public function getAllJenisUjian()
  {
    return $this->db->get('jenisujian')->result_array();
  }

  public function addJenisUjian($data)
  {
    $this->db->insert('jenisujian', $data);
  }

  public function updateJenisUjian($data)
  {
    $this->db->where('IdJenisUjian', $data['IdJenisUjian']);
    $this->db->update('jenisujian', $data);
  }

  public function deleteJenisUjian($data)
  {
    $this->db->where('IdJenisUjian', $data['IdJenisUjian']);
    $this->db->delete('jenisujian', $data);
  }
}

/* End of file Jenis_ujian_M.php */
