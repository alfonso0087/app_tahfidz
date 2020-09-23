<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_catatan_M extends CI_Model
{

  public function getAllJenisCatatan()
  {
    return $this->db->get('jeniscatatan')->result_array();
  }

  public function addJenisCatatan($data)
  {
    $this->db->insert('jeniscatatan', $data);
  }

  public function updateJenisCatatan($data)
  {
    $this->db->where('IdJenisCatatan', $data['IdJenisCatatan']);
    $this->db->update('jeniscatatan', $data);
  }

  public function deleteJenisCatatan($data)
  {
    $this->db->where('IdJenisCatatan', $data['IdJenisCatatan']);
    $this->db->delete('jeniscatatan', $data);
  }
}

/* End of file Jenis_catatan_M.php */
