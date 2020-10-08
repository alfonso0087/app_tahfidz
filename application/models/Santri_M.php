<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Santri_M extends CI_Model
{

  public function getAllSantri()
  {
    $this->db->select('*');
    $this->db->from('siswa');
    $this->db->join('kelas', 'kelas.IdKelas = siswa.IdKelas');
    $this->db->order_by('siswa.IdSiswa', 'asc');
    return $this->db->get()->result_array();
  }

  public function getSantriKelas($kelas)
  {
    // check($kelas);
    $this->db->select('*');
    $this->db->from('siswa');
    $this->db->join('kelas', 'kelas.IdKelas = siswa.IdKelas');
    $this->db->order_by('siswa.IdSiswa', 'asc');
    $this->db->where('siswa.IdKelas', $kelas);
    return $this->db->get()->result_array();
    // return $this->db->get_where('siswa', ['IdKelas' => $kelas])->result_array();
  }

  public function getSantriKelas_Periode($kelas, $periode_ujian)
  {
    // check($kelas);
    $this->db->select('s.*,kelas.*,pu.*,p.Periode,aj.ThAjaran,smt.Semester');
    $this->db->from('siswa s');
    $this->db->join('kelas', 'kelas.IdKelas = s.IdKelas');
    $this->db->join('periodeujian pu', 'pu.IdKelas = kelas.IdKelas', 'left');
    $this->db->join('periode p', 'p.IdPeriode = pu.IdPeriode', 'left');
    $this->db->join('ajaran aj', 'aj.IdAjaran = pu.IdAjaran', 'left');
    $this->db->join('semester smt', 'smt.IdSemester = pu.IdSemester', 'left');
    $this->db->order_by('s.NIS', 'asc');
    $this->db->where('s.IdKelas', $kelas);
    $this->db->where('pu.IdPeriodeUjian', $periode_ujian);
    return $this->db->get()->result_array();
    // return $this->db->get_where('siswa', ['IdKelas' => $kelas])->result_array();
  }

  public function addSantri($data)
  {
    $this->db->insert('siswa', $data);
  }

  public function updateSantri($data)
  {
    $this->db->where('IdSiswa', $data['IdSiswa']);
    $this->db->update('siswa', $data);
  }

  public function deleteSantri($data)
  {
    $this->db->where('IdSiswa', $data['IdSiswa']);
    $this->db->delete('siswa', $data);
  }

  public function importSantri($data)
  {
    $jumlah = count($data);
    if ($jumlah > 0) {
      for ($i = 0; $i < $jumlah; $i++) {
        $this->db->insert('siswa', $data[$i]);
      }
    }
  }
}

/* End of file Santri_M.php */