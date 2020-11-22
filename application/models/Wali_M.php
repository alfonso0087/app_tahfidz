<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Wali_M extends CI_Model
{
  public function getDataWali($username)
  {
    $query = 'SELECT `login`.*,`siswa`.`IdSiswa`,`siswa`.`NamaLengkap`,`siswa`.`IdKelas`,`kelas`.`NamaKelas`
    FROM `login`
    JOIN `siswa` ON `siswa`.`IdUser`=`login`.`IdUser`
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

  public function getDataRekapSetoranSantri($IdSiswa, $IdPeriode)
  {
    $query = 'SELECT `siswa`.`NamaLengkap`,`detailtarget`.`IsiTarget`,`detailtarget`.`Keterangan`,`target`.`Pekan`
    FROM `setorantarget`
    JOIN `detailtarget` ON `detailtarget`.`IdDetailTarget`=`setorantarget`.`IdDetailTarget`
    JOIN `target` ON `target`.`IdTarget` = `detailtarget`.`IdTarget`
    JOIN `detailkelompok` ON `detailkelompok`.`IdDetailKelompok`=`setorantarget`.`IdDetailKelompok`
    JOIN `siswa` ON `siswa`.`IdSiswa`=`detailkelompok`.`IdSiswa`
    WHERE `siswa`.`IdSiswa`="' . $IdSiswa . '"
    AND `target`.`IdPeriode`="' . $IdPeriode . '"';
    return $this->db->query($query)->result_array();
  }

  public function getJumlahSetoranSantri($IdSiswa, $IdPeriode)
  {
    $query = 'SELECT COUNT(`setorantarget`.`IdDetailTarget`) AS Jumlah_Setoran
    FROM `setorantarget`
    JOIN `detailtarget` ON `detailtarget`.`IdDetailTarget`=`setorantarget`.`IdDetailTarget`
    JOIN `target` ON `target`.`IdTarget` = `detailtarget`.`IdTarget`
    JOIN `detailkelompok` ON `detailkelompok`.`IdDetailKelompok`=`setorantarget`.`IdDetailKelompok`
    JOIN `siswa` ON `siswa`.`IdSiswa`=`detailkelompok`.`IdSiswa`
    WHERE `siswa`.`IdSiswa`="' . $IdSiswa . '"
    AND `target`.`IdPeriode`="' . $IdPeriode . '"';
    return $this->db->query($query)->row_array();
  }

  public function getJumlahSetoranSelesai($IdSiswa, $IdPeriode)
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
    AND `setorantarget`.`Keterangan`="' . $keterangan . '"';
    return $this->db->query($query)->row_array();
  }

  public function getJumlahSetoranTidakSelesai($IdSiswa, $IdPeriode)
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
    AND `setorantarget`.`Keterangan`="' . $keterangan . '"';
    return $this->db->query($query)->row_array();
  }

  public function getSetoranSantri($IdSiswa, $IdPeriode)
  {
    $query = 'SELECT `detailtarget`.`IsiTarget`,`setorantarget`.`Keterangan`,`target`.`Pekan`,`detailtarget`.`Tgl`
    FROM `setorantarget`
    JOIN `detailtarget` ON `detailtarget`.`IdDetailTarget`=`setorantarget`.`IdDetailTarget`
    JOIN `target` ON `target`.`IdTarget` = `detailtarget`.`IdTarget`
    JOIN `detailkelompok` ON `detailkelompok`.`IdDetailKelompok`=`setorantarget`.`IdDetailKelompok`
    JOIN `siswa` ON `siswa`.`IdSiswa`=`detailkelompok`.`IdSiswa`
    WHERE `siswa`.`IdSiswa`= "' . $IdSiswa . '"
    AND `target`.`IdPeriode`= "' . $IdPeriode . '"';
    return $this->db->query($query)->result_array();
  }

  public function getSetoranSantri_TidakSelesai($IdSiswa, $IdPeriode)
  {
    $keterangan = "Tidak Selesai";
    $query = 'SELECT `detailtarget`.`IsiTarget`,`setorantarget`.`Keterangan`,`target`.`Pekan`,`detailtarget`.`Tgl`
    FROM `setorantarget`
    JOIN `detailtarget` ON `detailtarget`.`IdDetailTarget`=`setorantarget`.`IdDetailTarget`
    JOIN `target` ON `target`.`IdTarget` = `detailtarget`.`IdTarget`
    JOIN `detailkelompok` ON `detailkelompok`.`IdDetailKelompok`=`setorantarget`.`IdDetailKelompok`
    JOIN `siswa` ON `siswa`.`IdSiswa`=`detailkelompok`.`IdSiswa`
    WHERE `siswa`.`IdSiswa`= "' . $IdSiswa . '"
    AND `target`.`IdPeriode`= "' . $IdPeriode . '"
    AND `setorantarget`.`Keterangan`="' . $keterangan . '"';
    return $this->db->query($query)->result_array();
  }

  public function getSetoranSantri_Selesai($IdSiswa, $IdPeriode)
  {
    $keterangan = "Selesai";
    $query = 'SELECT `detailtarget`.`IsiTarget`,`setorantarget`.`Keterangan`,`target`.`Pekan`,`detailtarget`.`Tgl`
    FROM `setorantarget`
    JOIN `detailtarget` ON `detailtarget`.`IdDetailTarget`=`setorantarget`.`IdDetailTarget`
    JOIN `target` ON `target`.`IdTarget` = `detailtarget`.`IdTarget`
    JOIN `detailkelompok` ON `detailkelompok`.`IdDetailKelompok`=`setorantarget`.`IdDetailKelompok`
    JOIN `siswa` ON `siswa`.`IdSiswa`=`detailkelompok`.`IdSiswa`
    WHERE `siswa`.`IdSiswa`= "' . $IdSiswa . '"
    AND `target`.`IdPeriode`= "' . $IdPeriode . '"
    AND `setorantarget`.`Keterangan`="' . $keterangan . '"';
    return $this->db->query($query)->result_array();
  }
}

/* End of file Wali_M.php */
