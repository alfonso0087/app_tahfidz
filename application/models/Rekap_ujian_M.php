<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekap_ujian_M extends CI_Model
{

  public function getAllRekapUjian()
  {
    $this->db->select('ru.*,ru.Keterangan ket_rekap,tu.*,ju.NamaUjian,s.NamaLengkap,pu.*,p.Periode,aj.ThAjaran,smt.Semester,kls.NamaKelas');
    $this->db->from('rekapujian ru');
    $this->db->join('targetujian tu', 'tu.IdTargetUjian = ru.IdTargetUjian', 'left');
    $this->db->join('jenisujian ju', 'ju.IdJenisUjian = tu.IdJenisUjian', 'left');
    $this->db->join('siswa s', 's.IdSiswa = ru.IdSiswa', 'left');
    $this->db->join('periodeujian pu', 'pu.IdPeriodeUjian = ru.IdPeriodeUjian', 'left');
    $this->db->join('periode p', 'p.IdPeriode = pu.IdPeriode', 'left');
    $this->db->join('ajaran aj', 'aj.IdAjaran = pu.IdAjaran', 'left');
    $this->db->join('semester smt', 'smt.IdSemester = pu.IdSemester', 'left');
    $this->db->join('kelas kls', 'kls.IdKelas = pu.IdKelas', 'left');
    return $this->db->get()->result_array();
  }

  public function getRekapUjianByNamaSantri($nama_santri)
  {
    $this->db->select('ru.*,ru.Keterangan ket_rekap,tu.*,ju.NamaUjian,s.NamaLengkap,pu.*,p.Periode,aj.ThAjaran,smt.Semester,kls.NamaKelas');
    $this->db->from('rekapujian ru');
    $this->db->join('targetujian tu', 'tu.IdTargetUjian = ru.IdTargetUjian', 'left');
    $this->db->join('jenisujian ju', 'ju.IdJenisUjian = tu.IdJenisUjian', 'left');
    $this->db->join('siswa s', 's.IdSiswa = ru.IdSiswa', 'left');
    $this->db->join('periodeujian pu', 'pu.IdPeriodeUjian = ru.IdPeriodeUjian', 'left');
    $this->db->join('periode p', 'p.IdPeriode = pu.IdPeriode', 'left');
    $this->db->join('ajaran aj', 'aj.IdAjaran = pu.IdAjaran', 'left');
    $this->db->join('semester smt', 'smt.IdSemester = pu.IdSemester', 'left');
    $this->db->join('kelas kls', 'kls.IdKelas = pu.IdKelas', 'left');
    $this->db->like('s.NamaLengkap', $nama_santri);
    return $this->db->get()->result_array();
  }

  public function getRekapUjian($id)
  {
    $this->db->select('ru.*,ru.Keterangan ket_rekap,tu.*,ju.NamaUjian,s.NamaLengkap,pu.*,p.Periode,aj.ThAjaran,smt.Semester,kls.NamaKelas');
    $this->db->from('rekapujian ru');
    $this->db->join('targetujian tu', 'tu.IdTargetUjian = ru.IdTargetUjian', 'left');
    $this->db->join('jenisujian ju', 'ju.IdJenisUjian = tu.IdJenisUjian', 'left');
    $this->db->join('siswa s', 's.IdSiswa = ru.IdSiswa', 'left');
    $this->db->join('periodeujian pu', 'pu.IdPeriodeUjian = ru.IdPeriodeUjian', 'left');
    $this->db->join('periode p', 'p.IdPeriode = pu.IdPeriode', 'left');
    $this->db->join('ajaran aj', 'aj.IdAjaran = pu.IdAjaran', 'left');
    $this->db->join('semester smt', 'smt.IdSemester = pu.IdSemester', 'left');
    $this->db->join('kelas kls', 'kls.IdKelas = pu.IdKelas', 'left');
    $this->db->where('ru.IdUjian', $id);
    return $this->db->get()->row_array();
  }

  public function betwenNilai($nilai)
  {
    $Nilai = $nilai;
    $query = $this->db->query("SELECT *
    FROM `predikatnilai`
    WHERE' $Nilai' BETWEEN `BatasNilaiBawah`AND`BatasNilaiAtas`");
    return $query->row_array();
  }

  // public function sumNilai()
  // {
  // }

  public function addRekapUjian($data)
  {
    return $this->db->insert('rekapujian', $data);
  }

  public function updateRekapUjian($data)
  {
    $this->db->where('IdUjian', $data['IdUjian']);
    $this->db->update('rekapujian', $data);
  }

  public function deleteRekapUjian($data)
  {
    $this->db->where('IdUjian', $data['IdUjian']);
    $this->db->delete('rekapujian', $data);
  }
}

/* End of file Rekap_ujian_M.php */
