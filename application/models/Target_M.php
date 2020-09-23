<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Target_M extends CI_Model
{

  public function getAllTarget()
  {
    $this->db->select('t.*,kls.NamaKelas,p.Periode,a.ThAjaran,smt.Semester');
    $this->db->from('target t');
    $this->db->join('kelas kls', 'kls.IdKelas = t.IdKelas', 'left');
    $this->db->join('periode p', 'p.IdPeriode = t.IdPeriode', 'left');
    $this->db->join('ajaran a', 'a.IdAjaran = t.IdAjaran', 'left');
    $this->db->join('semester smt', 'smt.IdSemester = t.IdSemester', 'left');
    return $this->db->get()->result_array();
  }

  public function addTarget($data)
  {
    $this->db->insert('target', $data);
  }

  public function updateTarget($data)
  {
    // ! Gagal update
    $this->db->where('IdTarget', $data['IdTarget']);
    $this->db->update('target', $data);
  }

  public function deleteTarget($data)
  {
    $this->db->where('IdTarget', $data['IdTarget']);
    $this->db->delete('target', $data);
  }
}

/* End of file Target_M.php */
