<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ajaran_M extends CI_Model
{
  public function getAllAjaran()
  {
    $this->db->select('*');
    $this->db->from('ajaran');
    return $this->db->get()->result_array();
  }

  public function addAjaran($data)
  {
    $this->db->insert('ajaran', $data);
  }

  public function updateAjaran($data)
  {
    $this->db->where('IdAjaran', $data['IdAjaran']);
    $this->db->update('ajaran', $data);
  }

  public function deleteAjaran($data)
  {
    $this->db->where('IdAjaran', $data['IdAjaran']);
    $this->db->delete('ajaran', $data);
  }
}

/* End of file Ajaran_M.php */
