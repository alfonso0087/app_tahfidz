<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Wali_M extends CI_Model
{
  public function getDataWali($username)
  {
    $query = 'SELECT `login`.*,`siswa`.`NamaLengkap`,`siswa`.`IdKelas`,`kelas`.`NamaKelas`
    FROM `login`
    JOIN `siswa` ON `siswa`.`IdSiswa`=`login`.`IdSiswa`
    JOIN `kelas` ON `siswa`.`IdKelas`=`Kelas`.`IdKelas`
    WHERE `login`.`username`="' . $username . '"';
    return $this->db->query($query)->row_array();
  }

  public function getPekanSetoran()
  {
    $query = 'SELECT `target`.`Pekan`
    FROM `target`
    GROUP BY `target`.`Pekan`';
    return $this->db->query($query)->result_array();
  }

  public function getDataRekapSetoranSantri($IdSiswa, $IdPeriode, $Pekan)
  {
    $query = 'SELECT `siswa`.`NamaLengkap`,`detailtarget`.`IsiTarget`,`detailtarget`.`Keterangan`
    FROM `setorantarget`
    JOIN `detailtarget` ON `detailtarget`.`IdDetailTarget`=`setorantarget`.`IdDetailTarget`
    JOIN `target` ON `target`.`IdTarget` = `detailtarget`.`IdTarget`
    JOIN `detailkelompok` ON `detailkelompok`.`IdDetailKelompok`=`setorantarget`.`IdDetailKelompok`
    JOIN `siswa` ON `siswa`.`IdSiswa`=`detailkelompok`.`IdSiswa`
    WHERE `siswa`.`IdSiswa`="' . $IdSiswa . '"
    AND `target`.`IdPeriode`="' . $IdPeriode . '"
    AND `target`.`Pekan`="' . $Pekan . '"';
    return $this->db->query($query)->result_array();
  }

  public function getJumlahSetoranSantri($IdSiswa, $IdPeriode, $Pekan)
  {
    $query = 'SELECT COUNT(`setorantarget`.`IdDetailTarget`) AS Jumlah_Setoran
    FROM `setorantarget`
    JOIN `detailtarget` ON `detailtarget`.`IdDetailTarget`=`setorantarget`.`IdDetailTarget`
    JOIN `target` ON `target`.`IdTarget` = `detailtarget`.`IdTarget`
    JOIN `detailkelompok` ON `detailkelompok`.`IdDetailKelompok`=`setorantarget`.`IdDetailKelompok`
    JOIN `siswa` ON `siswa`.`IdSiswa`=`detailkelompok`.`IdSiswa`
    WHERE `siswa`.`IdSiswa`="' . $IdSiswa . '"
    AND `target`.`IdPeriode`="' . $IdPeriode . '"
    AND `target`.`Pekan`="' . $Pekan . '"';
    return $this->db->query($query)->row_array();
  }

  public function getJumlahSetoranSelesai($IdSiswa, $IdPeriode, $Pekan)
  {
    $keterangan = 'Selesai';
    $query = 'SELECT COUNT(`setorantarget`.`IdDetailTarget`) AS Jumlah_Setoran_Selesai
    FROM `setorantarget`
    JOIN `detailtarget` ON `detailtarget`.`IdDetailTarget`=`setorantarget`.`IdDetailTarget`
    JOIN `target` ON `target`.`IdTarget` = `detailtarget`.`IdTarget`
    JOIN `detailkelompok` ON `detailkelompok`.`IdDetailKelompok`=`setorantarget`.`IdDetailKelompok`
    JOIN `siswa` ON `siswa`.`IdSiswa`=`detailkelompok`.`IdSiswa`
    WHERE `siswa`.`IdSiswa`="' . $IdSiswa . '"
    AND `target`.`IdPeriode`="' . $IdPeriode . '"
    AND `target`.`Pekan`="' . $Pekan . '"
    AND `setorantarget`.`Keterangan`="' . $keterangan . '"';
    return $this->db->query($query)->row_array();
  }

  public function getJumlahSetoranTidakSelesai($IdSiswa, $IdPeriode, $Pekan)
  {
    $keterangan = 'Tidak Selesai';
    $query = 'SELECT COUNT(`setorantarget`.`IdDetailTarget`) AS Jumlah_Setoran_Tidak_Selesai
    FROM `setorantarget`
    JOIN `detailtarget` ON `detailtarget`.`IdDetailTarget`=`setorantarget`.`IdDetailTarget`
    JOIN `target` ON `target`.`IdTarget` = `detailtarget`.`IdTarget`
    JOIN `detailkelompok` ON `detailkelompok`.`IdDetailKelompok`=`setorantarget`.`IdDetailKelompok`
    JOIN `siswa` ON `siswa`.`IdSiswa`=`detailkelompok`.`IdSiswa`
    WHERE `siswa`.`IdSiswa`="' . $IdSiswa . '"
    AND `target`.`IdPeriode`="' . $IdPeriode . '"
    AND `target`.`Pekan`="' . $Pekan . '"
    AND `setorantarget`.`Keterangan`="' . $keterangan . '"';
    return $this->db->query($query)->row_array();
  }

  public function getSetoranSantri($IdSiswa, $IdPeriode, $Pekan)
  {
    $query = 'SELECT `detailtarget`.`IsiTarget`,`setorantarget`.`Keterangan`,`target`.`Pekan`,`detailtarget`.`Tgl`
    FROM `setorantarget`
    JOIN `detailtarget` ON `detailtarget`.`IdDetailTarget`=`setorantarget`.`IdDetailTarget`
    JOIN `target` ON `target`.`IdTarget` = `detailtarget`.`IdTarget`
    JOIN `detailkelompok` ON `detailkelompok`.`IdDetailKelompok`=`setorantarget`.`IdDetailKelompok`
    JOIN `siswa` ON `siswa`.`IdSiswa`=`detailkelompok`.`IdSiswa`
    WHERE `siswa`.`IdSiswa`= "' . $IdSiswa . '"
    AND `target`.`IdPeriode`= "' . $IdPeriode . '"
    AND `target`.`Pekan`= "' . $Pekan . '"';
    return $this->db->query($query)->result_array();
  }
}

/* End of file Wali_M.php */
