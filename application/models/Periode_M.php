<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Periode_M extends CI_Model
{

  public function getAllPeriode()
  {
    $this->db->select('*');
    $this->db->from('periode');
    return $this->db->get()->result_array();
  }

  public function addPeriode($data)
  {
    $this->db->insert('periode', $data);
  }

  public function updatePeriode($data)
  {
    $this->db->where('IdPeriode', $data['IdPeriode']);
    $this->db->update('periode', $data);
  }

  public function deletePeriode($data)
  {
    $this->db->where('IdPeriode', $data['IdPeriode']);
    $this->db->delete('periode', $data);
  }
}

/* End of file Periode_M.php */
