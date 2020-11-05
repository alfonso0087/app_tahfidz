<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Periode_ujian_M extends CI_Model
{
  public function getAllPeriodeUjian()
  {
    $this->db->select('pu.*,p.Periode,aj.ThAjaran,smt.Semester,kls.*');
    $this->db->from('periodeujian pu');
    $this->db->join('periode p', 'p.IdPeriode = pu.IdPeriode', 'left');
    $this->db->join('ajaran aj', 'aj.IdAjaran = pu.IdAjaran', 'left');
    $this->db->join('semester smt', 'smt.IdSemester = pu.IdSemester', 'left');
    $this->db->join('kelas kls', 'kls.IdKelas = pu.IdKelas', 'left');
    $this->db->order_by('pu.IdKelas', 'asc');
    return $this->db->get()->result_array();
  }

  public function getPeriodeUjianById($IdPeriodeUjian)
  {
    $query = 'SELECT `periodeujian`.*,`ajaran`.`ThAjaran`,`semester`.`Semester`,`kelas`.`IdKelas`,`kelas`.`NamaKelas`
    FROM `periodeujian`
    JOIN `periode` ON `periode`.`IdPeriode`=`periodeujian`.`IdPeriode`
    JOIN `ajaran` ON `ajaran`.`IdAjaran`=`periodeujian`.`IdAjaran`
    JOIN `semester` ON `semester`.`IdSemester`=`periodeujian`.`IdSemester`
    JOIN `kelas` ON `kelas`.`IdKelas`=`periodeujian`.`IdKelas`
    WHERE `periodeujian`.`IdPeriodeUjian`="' . $IdPeriodeUjian . '"';
    return $this->db->query($query)->row_array();
  }


  public function addPeriodeUjian($data)
  {
    $this->db->insert('periodeujian', $data);
  }

  public function updatePeriodeUjian($data)
  {
    $this->db->where('IdPeriodeUjian', $data['IdPeriodeUjian']);
    $this->db->update('periodeujian', $data);
  }

  public function deletePeriodeUjian($data)
  {
    $this->db->where('IdPeriodeUjian', $data['IdPeriodeUjian']);
    $this->db->delete('periodeujian', $data);
  }
}

/* End of file Periode_ujian_M.php */
