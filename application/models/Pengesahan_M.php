<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengesahan_M extends CI_Model
{
  public function getAllPengesahan()
  {
    return $this->db->get('pengesahan')->result_array();
  }

  public function add_pengesahan($data)
  {
    $this->db->insert('pengesahan', $data);
  }

  public function update_pengesahan($data_pengesahan)
  {
    $this->db->where('IdPengesahan', $data_pengesahan['IdPengesahan']);
    $this->db->update('pengesahan', $data_pengesahan);
  }

  public function delete_pengesahan($data_pengesahan)
  {
    $this->db->where('IdPengesahan', $data_pengesahan['IdPengesahan']);
    $this->db->delete('pengesahan', $data_pengesahan);
  }
}

/* End of file Pengesahan_M.php */
