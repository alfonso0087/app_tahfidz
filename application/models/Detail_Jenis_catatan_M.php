<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Detail_Jenis_catatan_M extends CI_Model
{
  public function getAllDetailJenisCatatan()
  {
    $this->db->select('djc.*,jc.JenisCatatan');
    $this->db->from('detailjeniscatatan djc');
    $this->db->join('jeniscatatan jc', 'jc.IdJenisCatatan = djc.IdJeniscatatan', 'left');
    $this->db->order_by('djc.IdJenisCatatan', 'ASC');
    return $this->db->get()->result_array();
  }

  public function addDetailJenisCatatan($data)
  {
    $this->db->insert('detailjeniscatatan', $data);
  }

  public function updateDetailJenisCatatan($data)
  {
    $this->db->where('IdDetailJenisCatatan', $data['IdDetailJenisCatatan']);
    $this->db->update('detailjeniscatatan', $data);
  }

  public function deleteDetailJenisCatatan($data)
  {
    $this->db->where('IdDetailJenisCatatan', $data['IdDetailJenisCatatan']);
    $this->db->delete('detailjeniscatatan', $data);
  }
}

/* End of file Detail_Jenis_catatan.php */
