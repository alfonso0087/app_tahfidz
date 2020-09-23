<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_target_M extends CI_Model
{
  public function getAllDetailTarget()
  {
    $this->db->select('*');
    $this->db->from('detailtarget det');
    $this->db->join('target tgt', 'det.IdTarget = tgt.IdTarget', 'left');
    $this->db->join('kelas kls', 'kls.IdKelas = tgt.IdKelas', 'left');

    return $this->db->get()->result_array();
  }

  public function addDetailTarget($data)
  {
    $this->db->insert('detailtarget', $data);
  }

  public function updateDetailTarget($data)
  {
    $this->db->where('IdDetailTarget', $data['IdDetailTarget']);
    $this->db->update('detailtarget', $data);
  }

  public function deleteDetailTarget($data)
  {
    $this->db->where('IdDetailTarget', $data['IdDetailTarget']);
    $this->db->delete('detailtarget', $data);
  }
}

/* End of file Detail_target_M.php */
