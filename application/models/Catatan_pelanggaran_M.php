<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Catatan_pelanggaran_M extends CI_Model
{
  public function getAllCatatanPelanggaran()
  {
    $this->db->select('p.*,s.NamaLengkap,jp.JenisIqob');
    $this->db->from('pelanggaran p');
    $this->db->join('siswa s', 's.IdSiswa = p.IdSiswa', 'left');
    $this->db->join('jenispelanggaran jp', 'jp.IdJenisIqob = p.IdJenisIqob', 'left');
    return $this->db->get()->result_array();
  }

  public function addCatatanPelanggaran($data)
  {
    $this->db->insert('pelanggaran', $data);
  }

  public function updateCatatanPelanggaran($data)
  {
    $this->db->where('IdIqob', $data['IdIqob']);
    $this->db->update('pelanggaran', $data);
  }

  public function deleteCatatanPelanggaran($data)
  {
    $this->db->where('IdIqob', $data['IdIqob']);
    $this->db->delete('pelanggaran', $data);
  }
}

/* End of file Catatan_pelanggaran_M.php */
