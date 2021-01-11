<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekap_setoran_M extends CI_Model
{
  // public function getAllRekapSetoran()
  // {
  //   $this->db->select('rs.*,s.NamaLengkap,k.NamaKelas');
  //   $this->db->from('rekapsetoran rs');
  //   $this->db->join('siswa s', 's.IdSiswa = rs.IdSiswa', 'left');
  //   $this->db->join('kelas k', 'k.IdKelas = rs.IdKelas', 'left');
  //   return $this->db->get()->result_array();
  // }

  public function getAllRekapSetoran()
  {
    $query = 'SELECT `rs`.*,`s`.`NamaLengkap`,`k`.`NamaKelas`,(SELECT COUNT(`IdKelas`) FROM `rekapsetoran` WHERE `IdKelas`=`rs`.`IdKelas`) AS jumlah_kelas
    FROM `rekapsetoran` rs
    JOIN `siswa` s ON rs.IdSiswa = s.IdSiswa
    JOIN `kelas` k ON rs.IdKelas = k.IdKelas';
    return $this->db->query($query)->result_array();
  }

  public function getRekapSetoranByNamaSantri($nama_santri)
  {
    $query = 'SELECT `rs`.*,`s`.`NamaLengkap`,`k`.`NamaKelas`,(SELECT COUNT(`IdKelas`) FROM `rekapsetoran` WHERE `IdKelas`=`rs`.`IdKelas`) AS jumlah_kelas
    FROM `rekapsetoran` rs
    JOIN `siswa` s ON rs.IdSiswa = s.IdSiswa
    JOIN `kelas` k ON rs.IdKelas = k.IdKelas
    WHERE `s`.`NamaLengkap` LIKE "%'  . $nama_santri .  '%"';
    return $this->db->query($query)->result_array();
    // $this->db->select('rs.*,s.NamaLengkap,COUNT(`IdKelas`) FROM `rekapsetoran` WHERE `IdKelas`=`rs`.`IdKelas`) AS jumlah_kelas');
    // $this->db->from('rekapsetoran rs');
    // $this->db->join('siswa s', 's.IdSiswa = rs.IdSiswa', 'left');
    // $this->db->like('s.NamaLengkap', $nama_santri);
    // return $this->db->get()->result_array();
  }

  //* Reset Data
  public function kosongkanRekapSetoran()
  {
    return $this->db->truncate('rekapsetoran');
  }

  public function countKeterangan($idSiswa, $pekan)
  {
    $this->db->select('`setorantarget`.`IdDetailKelompok`,`detailkelompok`.`IdSiswa`, `siswa`.*,`target`.`Pekan`, COALESCE(COUNT(*),0) jumlah_setoran');
    $this->db->from('setorantarget');
    $this->db->join('detailkelompok', 'detailkelompok.IdDetailKelompok = setorantarget.IdDetailKelompok');
    $this->db->join('siswa', 'siswa.IdSiswa = detailkelompok.IdSiswa', 'left');
    $this->db->join('detailtarget', 'detailtarget.IdDetailTarget = setorantarget.IdDetailTarget', 'left');
    $this->db->join('target', 'target.IdTarget = detailtarget.IdTarget', 'left');
    $this->db->where('setorantarget.Keterangan', "Selesai");
    $this->db->where('target.Pekan', $pekan);
    $this->db->where_in('siswa.IdSiswa', $idSiswa);
    $this->db->group_by('siswa.IdSiswa');
    return $this->db->get()->result_array();
  }

  public function addRekapSetoran($data)
  {
    $this->db->insert_batch('rekapsetoran', $data);
  }

  public function deleteByKelas($data)
  {
    $this->db->where('IdKelas', $data['IdKelas']);
    $this->db->delete('rekapsetoran', $data);
  }


  public function getRekapSetoranBy_Kelompok_Periode($IdPeriode, $IdKelompok)
  {
    $query = 'SELECT `siswa`.`NamaLengkap`,`rekapsetoran`.`JmlTugas`,`rekapsetoran`.`JmlSetoran`,(SELECT `rekapsetoran`.`JmlTugas`-`rekapsetoran`.`JmlSetoran`)AS "Tidak_Selesai",`rekapsetoran`.`PekanRekap`,`rekapsetoran`.`Prosentase`,`rekapsetoran`.`Hasil`
    FROM `rekapsetoran`
    JOIN `siswa` ON `siswa`.`IdSiswa`=`rekapsetoran`.`IdSiswa`
    JOIN `detailkelompok` ON `siswa`.`IdSiswa`=`detailkelompok`.`IdSiswa`
    JOIN `kelompokhalaqoh` ON `kelompokhalaqoh`.`IdKelompok`=`detailkelompok`.`IdKelompok`
    JOIN `target` ON `target`.`IdKelas`=`siswa`.`IdKelas`
    JOIN `periode` ON `periode`.`IdPeriode`=`target`.`IdPeriode`
    JOIN `periodeujian` ON `periode`.`IdPeriode`=`periodeujian`.`IdPeriode`
    WHERE `target`.`IdPeriode`="' . $IdPeriode . '"
    AND `detailkelompok`.`IdKelompok`="' . $IdKelompok . '"
    GROUP BY `siswa`.`IdSiswa`';
    return $this->db->query($query)->result_array();
  }
}

// COALESCE(COUNT(*),0) jumlah_setoran
/* End of file Rekap_setoran_M.php */
