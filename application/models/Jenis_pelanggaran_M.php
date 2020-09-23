<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_pelanggaran_M extends CI_Model
{
  public function getAllJenisPelanggaran()
  {
    return $this->db->get('jenispelanggaran')->result_array();
  }

  public function addJenisPelanggaran($data)
  {
    $this->db->insert('jenispelanggaran', $data);
  }

  public function updateJenisPelanggaran($data)
  {
    $this->db->where('IdJenisIqob', $data['IdJenisIqob']);
    $this->db->update('jenispelanggaran', $data);
  }

  public function deleteJenisPelanggaran($data)
  {
    $this->db->where('IdJenisIqob', $data['IdJenisIqob']);
    $this->db->delete('jenispelanggaran', $data);
  }
}

/* End of file Jenis_pelanggaran_M.php */
