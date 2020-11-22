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

  public function getDataMusyrif($username)
  {
    $query = 'SELECT `login`.*,`musyrif`.*
    FROM `login`
    JOIN `musyrif` ON `musyrif`.`IdUser`=`login`.`IdUser`
    WHERE `login`.`username`="' . $username . '"';
    return $this->db->query($query)->row_array();
  }

  public function addLoginMusyrif($data_login)
  {
    $this->db->insert('login', $data_login);
    return $this->db->insert_id();
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
