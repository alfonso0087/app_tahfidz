<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Catatan_santri_M extends CI_Model
{
  public function getAllCatatanSantri()
  {
    $this->db->select('dc.*,s.NamaLengkap,jc.JenisCatatan,p.Periode');
    $this->db->from('detailcatatan dc');
    $this->db->join('siswa s', 's.IdSiswa = dc.IdSiswa', 'left');
    $this->db->join('jeniscatatan jc', 'jc.IdJenisCatatan = dc.IdJenisCatatan', 'left');
    $this->db->join('periode p', 'p.IdPeriode = dc.IdPeriode', 'left');
    return $this->db->get()->result_array();
  }

  public function addCatatanSantri($data)
  {
    $this->db->insert('detailcatatan', $data);
  }

  public function updateCatatanSantri($data)
  {
    $this->db->where('IdCatatan', $data['IdCatatan']);
    $this->db->update('detailcatatan', $data);
  }

  public function deleteCatatanSantri($data)
  {
    $this->db->where('IdCatatan', $data['IdCatatan']);
    $this->db->delete('detailcatatan', $data);
  }
}

/* End of file Catatan_santri_M.php */
