<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Santri_M extends CI_Model
{

  public function getAllSantri()
  {
    $this->db->select('*');
    $this->db->from('siswa');
    $this->db->join('kelas', 'kelas.IdKelas = siswa.IdKelas');
    $this->db->order_by('siswa.IdKelas', 'asc');
    return $this->db->get()->result_array();
  }

  public function getSantriByNama($nama_santri)
  {
    $this->db->select('*');
    $this->db->from('siswa');
    $this->db->join('kelas', 'kelas.IdKelas = siswa.IdKelas');
    $this->db->order_by('siswa.IdKelas', 'asc');
    $this->db->like('NamaLengkap', $nama_santri);
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

  public function getSantri_Periode_Nilai($IdSiswa, $periode_ujian)
  {
    // check($kelas);
    // $this->db->select('s.*,kelas.*,pu.*,p.Periode,aj.ThAjaran,smt.Semester');
    // $this->db->from('siswa s');
    // $this->db->join('kelas', 'kelas.IdKelas = s.IdKelas');
    // $this->db->join('periodeujian pu', 'pu.IdKelas = kelas.IdKelas', 'left');
    // $this->db->join('periode p', 'p.IdPeriode = pu.IdPeriode', 'left');
    // $this->db->join('ajaran aj', 'aj.IdAjaran = pu.IdAjaran', 'left');
    // $this->db->join('semester smt', 'smt.IdSemester = pu.IdSemester', 'left');
    // $this->db->order_by('s.NIS', 'asc');
    // $this->db->where('s.IdSiswa', $IdSiswa);
    // $this->db->where('pu.IdPeriodeUjian', $periode_ujian);
    // return $this->db->get()->result_array();
    // return $this->db->get_where('siswa', ['IdKelas' => $kelas])->result_array();

    $query = $this->db->query('
    SELECT `rekapujian`.`IdSiswa`,`rekapujian`.`IdPeriodeUjian`,`rekapujian`.`Nilai`,SUM(`rekapujian`.`Nilai`) AS TotalNilai,AVG(`rekapujian`.`Nilai`) AS rata_rata,`siswa`.`NamaLengkap`,`kelas`.`NamaKelas`,`periode`.`Periode`,`rekapsetoran`.`Prosentase`
    FROM `rekapujian`
    JOIN `siswa` ON `rekapujian`.`IdSiswa` = `siswa`.`IdSiswa`
    JOIN `kelas` ON `siswa`.`IdKelas` = `kelas`.`IdKelas`
    JOIN `periodeujian` ON `rekapujian`.`IdPeriodeUjian` = `periodeujian`.`IdPeriodeUjian`
    JOIN `periode` ON `periodeujian`.`IdPeriode` = `periode`.`IdPeriode`
    JOIN `rekapsetoran` ON `rekapsetoran`.`IdSiswa` = `siswa`.`IdSiswa`
    WHERE `rekapujian`.`IdSiswa` ="' . $IdSiswa . '" AND `rekapujian`.`IdPeriodeUjian` = "' . $periode_ujian . '"');
    return $query->result_array();
  }

  public function getSantri_Periode($idKelas, $idPeriodeUjian)
  {
    $this->db->select('s.*,kelas.*,pu.*,p.Periode,aj.ThAjaran,smt.Semester');
    $this->db->from('siswa s');
    $this->db->join('kelas', 'kelas.IdKelas = s.IdKelas');
    $this->db->join('periodeujian pu', 'pu.IdKelas = kelas.IdKelas', 'left');
    $this->db->join('periode p', 'p.IdPeriode = pu.IdPeriode', 'left');
    $this->db->join('ajaran aj', 'aj.IdAjaran = pu.IdAjaran', 'left');
    $this->db->join('semester smt', 'smt.IdSemester = pu.IdSemester', 'left');
    $this->db->order_by('s.NIS', 'asc');
    $this->db->where('s.IdKelas', $idKelas);
    $this->db->where('pu.IdPeriodeUjian', $idPeriodeUjian);
    return $this->db->get()->result_array();
  }

  public function nilai_santri($idKelas, $idPeriodeUjian)
  {
    $query = $this->db->query('SELECT `rekapujian`.`IdSiswa`,`rekapujian`.`Nilai`,SUM(`rekapujian`.`Nilai`) AS total_nilai,AVG(`rekapujian`.`Nilai`) AS rata_rata,`siswa`.`NamaLengkap`,`kelas`.`NamaKelas`,`periodeujian`.*,`periode`.`Periode`,`ajaran`.`ThAjaran`,`semester`.`Semester`,`rekapsetoran`.`Prosentase`
    FROM `rekapujian`
    JOIN `siswa` ON `siswa`.`IdSiswa` = `rekapujian`.`IdSiswa`
    JOIN `kelas` ON `kelas`.`IdKelas`=`siswa`.`IdKelas`
    JOIN `periodeujian` ON `periodeujian`.`IdKelas`= `kelas`.`IdKelas`
    JOIN `periode` ON `periode`.`IdPeriode` = `periodeujian`.`IdPeriode`
    JOIN `ajaran` ON `ajaran`.`IdAjaran` = `periodeujian`.`IdAjaran`
    JOIN `semester` ON `semester`.`IdSemester` = `periodeujian`.`IdSemester`
    JOIN `rekapsetoran` ON `rekapsetoran`.`IdSiswa` = `siswa`.`IdSiswa`
    WHERE `siswa`.`IdKelas` = "' . $idKelas . '"
    AND `rekapujian`.`IdPeriodeUjian` = "' . $idPeriodeUjian . '"
    GROUP BY (`rekapujian`.`IdSiswa`)');
    return $query->result_array();
  }

  public function addSantri($data)
  {
    $this->db->insert('siswa', $data);
  }

  public function addWaliSantri($dataWali)
  {
    $this->db->insert('login', $dataWali);
    return $this->db->insert_id();
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