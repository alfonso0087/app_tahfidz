<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Target_ujian_M extends CI_Model
{
  public function getAllTargetUjian()
  {
    $this->db->select('tu.*,ju.NamaUjian');
    $this->db->from('targetujian tu');
    $this->db->join('jenisujian ju', 'ju.IdJenisUjian = tu.IdJenisUjian', 'left');
    return $this->db->get()->result_array();
  }

  public function addTargetUjian($data)
  {
    $this->db->insert('targetujian', $data);
  }

  public function updateTargetUjian($data)
  {
    $this->db->where('IdTargetUjian', $data['IdTargetUjian']);
    $this->db->update('targetujian', $data);
  }

  public function deleteTargetUjian($data)
  {
    $this->db->where('IdTargetUjian', $data['IdTargetUjian']);
    $this->db->delete('targetujian', $data);
  }
}

/* End of file Target_ujian_M.php */
