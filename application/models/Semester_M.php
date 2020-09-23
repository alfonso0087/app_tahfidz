<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Semester_M extends CI_Model
{

  public function getAllSemester()
  {
    $this->db->select('*');
    $this->db->from('semester');
    return $this->db->get()->result_array();
  }

  public function addSemester($data)
  {
    $this->db->insert('semester', $data);
  }

  public function updateSemester($data)
  {
    $this->db->where('IdSemester', $data['IdSemester']);
    $this->db->update('semester', $data);
  }

  public function deleteSemester($data)
  {
    $this->db->where('IdSemester', $data['IdSemester']);
    $this->db->delete('semester', $data);
  }
}

/* End of file Semester_M.php */
