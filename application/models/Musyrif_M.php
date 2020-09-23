<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Musyrif_M extends CI_Model
{

  public function getAllMusyrif()
  {
    $this->db->select('*');
    $this->db->from('musyrif');
    return $this->db->get()->result_array();
  }

  public function addMusyrif($data)
  {
    $this->db->insert('musyrif', $data);
  }

  public function updateMusyrif($data)
  {
    $this->db->where('IdMusyrif', $data['IdMusyrif']);
    $this->db->update('musyrif', $data);
  }

  public function deleteMusyrif($data)
  {
    $this->db->where('IdMusyrif', $data['IdMusyrif']);
    $this->db->delete('musyrif', $data);
  }

  public function importMusyrif($data)
  {
    $jumlah = count($data);
    if ($jumlah > 0) {
      for ($i = 0; $i < $jumlah; $i++) {
        $this->db->insert('musyrif', $data[$i]);
      }
    }
  }
}

/* End of file Musyrif_M.php */
