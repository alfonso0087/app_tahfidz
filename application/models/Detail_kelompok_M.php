<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_kelompok_M extends CI_Model
{
  public function getAllDetailKelompok()
  {
    $this->db->select('dk.*,k.NamaKelompok,s.NamaLengkap,m.NamaMusyrif');
    $this->db->from('detailkelompok dk');
    $this->db->join('kelompokhalaqoh k', 'k.IdKelompok = dk.IdKelompok', 'left');
    $this->db->join('siswa s', 's.IdSiswa = dk.IdSiswa', 'left');
    $this->db->join('musyrif m', 'm.IdMusyrif = dk.IdMusyrif', 'left');
    $this->db->order_by('k.NamaKelompok', 'asc');
    return $this->db->get()->result_array();
  }

  public function filterDetailKelompok()
  {
    $this->db->select('dk.*,k.NamaKelompok,s.NamaLengkap,m.NamaMusyrif');
    $this->db->from('detailkelompok dk');
    $this->db->join('kelompokhalaqoh k', 'k.IdKelompok = dk.IdKelompok', 'left');
    $this->db->join('siswa s', 's.IdSiswa = dk.IdSiswa', 'left');
    $this->db->join('musyrif m', 'm.IdMusyrif = dk.IdMusyrif', 'left');
    $this->db->group_by('dk.IdKelompok');
    $this->db->order_by('k.NamaKelompok', 'asc');
    return $this->db->get()->result_array();
  }

  public function addDetailKelompok($data)
  {
    $this->db->insert('detailkelompok', $data);
  }

  public function updateDetailKelompok($data)
  {
    $this->db->where('IdDetailKelompok', $data['IdDetailKelompok']);
    $this->db->update('detailkelompok', $data);
  }

  public function deleteDetailKelompok($data)
  {
    $this->db->where('IdDetailKelompok', $data['IdDetailKelompok']);
    $this->db->delete('detailkelompok', $data);
  }
}

/* End of file Detail_kelompok_M.php */
