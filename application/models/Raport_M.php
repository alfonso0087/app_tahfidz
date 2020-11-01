<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Raport_M extends CI_Model
{

  public function getRaportIdentitasSantri($id_siswa, $id_periode_ujian)
  {
    $query = $this->db->query('SELECT `siswa`.`NIS`,`siswa`.`NamaLengkap`,`kelas`.`NamaKelas`,`kelas`.`Tingkat`,`kelompokhalaqoh`.`NamaKelompok`,`musyrif`.`NamaMusyrif`,`musyrif`.`NoHp`,`musyrif`.`Ttd`,`semester`.`Semester`,`periodeujian`.`KetPeriode`,`ajaran`.`ThAjaran`,`periode`.`Periode`
    FROM `detailkelompok`
    JOIN `siswa` ON `siswa`.`IdSiswa`=`detailkelompok`.`IdSiswa`
    JOIN `kelas` ON `kelas`.`IdKelas`=`siswa`.`IdKelas`
    JOIN `kelompokhalaqoh` ON `kelompokhalaqoh`.`IdKelompok`=`detailkelompok`.`IdKelompok`
    JOIN `musyrif` ON `musyrif`.`IdMusyrif`=`detailkelompok`.`IdMusyrif`
    JOIN `periodeujian` ON `kelas`.`IdKelas`=`periodeujian`.`IdKelas`
    JOIN `semester` ON `semester`.`IdSemester`=`periodeujian`.`IdSemester`
    JOIN `ajaran` ON `ajaran`.`IdAjaran`=`periodeujian`.`IdAjaran`
    JOIN `periode` ON `periode`.`IdPeriode`=`periodeujian`.`IdPeriode`
    WHERE `siswa`.`IdSiswa`="' . $id_siswa . '"
    AND `periodeujian`.`IdPeriodeUjian`="' . $id_periode_ujian . '"');
    return $query->row_array();
  }

  public function getRaportIdentitasSantriPjHalaqoh($id_siswa)
  {
    $query = 'SELECT `musyrif`.`NamaMusyrif` AS PJHalaqoh 
    FROM `pjmusyrif`
    JOIN `musyrif` ON `musyrif`.`IdMusyrif`=`pjmusyrif`.`IdMusyrif`
    JOIN `detailkelompok` ON detailkelompok.IdKelompok=`pjmusyrif`.`IdKelompok`
    JOIN `siswa` ON `siswa`.`IdSiswa`=`detailkelompok`.`IdSiswa`
    WHERE `siswa`.`IdSiswa`="' . $id_siswa . '"';
    return $this->db->query($query)->row_array();
  }

  public function getRaportHasilUjian($id_siswa, $id_periode_ujian)
  {
    $query = 'SELECT `rekapsetoran`.`Prosentase`,`jenisujian`.`NamaUjian`,`rekapujian`.`Nilai`,`rekapujian`.`Predikat`,`rekapujian`.`Keterangan` AS Ket_RekapUjian,`targetujian`.`Keterangan`,`hasilujian`.`Total`,`hasilujian`.`Rata-rata`,`hasilujian`.`Rangking`,`hasilujian`.`Reward`
    FROM `rekapsetoran`
    JOIN `siswa` ON `siswa`.`IdSiswa`=`rekapsetoran`.`IdSiswa`
    JOIN `rekapujian` ON `siswa`.`IdSiswa`=`rekapujian`.`IdSiswa`
    JOIN `targetujian` ON `targetujian`.`IdTargetUjian`=`rekapujian`.`IdTargetUjian`
    JOIN `jenisujian` ON `jenisujian`.`IdJenisUjian`=`targetujian`.`IdJenisUjian`
    JOIN `hasilujian` ON `siswa`.`IdSiswa`=`hasilujian`.`IdSiswa`
    WHERE `siswa`.`IdSiswa`="' . $id_siswa . '"
    AND `hasilujian`.`IdPeriodeUjian`="' . $id_periode_ujian . '"';
    return $this->db->query($query)->result_array();
  }

  public function getRaport_Prosentase($id_siswa, $id_periode_ujian)
  {
    $query = 'SELECT `rekapsetoran`.`Prosentase`
    FROM `rekapsetoran`
    JOIN `siswa` ON `siswa`.`IdSiswa`=`rekapsetoran`.`IdSiswa`
    JOIN `hasilujian` ON `siswa`.`IdSiswa`=`hasilujian`.`IdSiswa`
    WHERE `siswa`.`IdSiswa`="' . $id_siswa . '"
    AND `hasilujian`.`IdPeriodeUjian`="' . $id_periode_ujian . '"';
    return $this->db->query($query)->result_array();
  }

  public function getRaport_NilaiUjian($id_siswa, $id_periode_ujian)
  {
    $query = 'SELECT `jenisujian`.`NamaUjian`,`targetujian`.`Keterangan`,`rekapujian`.`Nilai`,`rekapujian`.`Predikat`,`rekapujian`.`Keterangan` AS Keterangan_Ujian
    FROM `rekapujian`
    JOIN `targetujian` ON `targetujian`.`IdTargetUjian`=`rekapujian`.`IdTargetUjian`
    JOIN `jenisujian` ON `jenisujian`.`IdJenisUjian`=`targetujian`.`IdJenisUjian`
    JOIN `siswa` ON `siswa`.`IdSiswa`=`rekapujian`.`IdSiswa`
    WHERE `rekapujian`.`IdSiswa`="' . $id_siswa . '"
    AND `rekapujian`.`IdPeriodeUjian`="' . $id_periode_ujian . '"';
    return $this->db->query($query)->result_array();
  }

  public function getRaport_Total_Avg_Rank($id_siswa, $id_periode_ujian)
  {
    $query = 'SELECT `hasilujian`.`Total`,`hasilujian`.`Rata-rata`,`hasilujian`.`Rangking`
    FROM `hasilujian`
    WHERE `hasilujian`.`IdSiswa`="' . $id_siswa . '"
    AND `hasilujian`.`IdPeriodeUjian`="' . $id_periode_ujian . '"';
    return $this->db->query($query)->result_array();
  }

  public function getRaport_JmlSiswaPerKelas($id_kelas)
  {
    $query = 'SELECT COUNT(`siswa`.`NamaLengkap`) AS Jumlah_Siswa
    FROM `siswa`
    WHERE `siswa`.`IdKelas`="' . $id_kelas . '"';
    return $this->db->query($query)->row_array();
  }

  public function getRaport_TotalPointPelanggaranIbadah($id_siswa)
  {
    $query = 'SELECT SUM(`pelanggaran`.`Points`) AS Total_Points
    FROM `pelanggaran`
    JOIN `jenispelanggaran` ON `jenispelanggaran`.`IdJenisIqob`=`pelanggaran`.`IdJenisIqob`
    WHERE `pelanggaran`.`IdSiswa`="' . $id_siswa . '"
    AND `jenispelanggaran`.`Kategori`="Ibadah"';
    return $this->db->query($query)->row_array();
  }
  public function getRaport_TotalPointPelanggaranBahasa($id_siswa)
  {
    $query = 'SELECT SUM(`pelanggaran`.`Points`) AS Total_Points
    FROM `pelanggaran`
    JOIN `jenispelanggaran` ON `jenispelanggaran`.`IdJenisIqob`=`pelanggaran`.`IdJenisIqob`
    WHERE `pelanggaran`.`IdSiswa`="' . $id_siswa . '"
    AND `jenispelanggaran`.`Kategori`="Bahasa"';
    return $this->db->query($query)->row_array();
  }

  public function getRaport_KeteranganPelanggaranIbadah($id_siswa)
  {
    $query = 'SELECT `jenispelanggaran`.`JenisIqob`,`pelanggaran`.`Points`
    FROM `pelanggaran`
    JOIN `jenispelanggaran` ON `jenispelanggaran`.`IdJenisIqob`=`pelanggaran`.`IdJenisIqob`
    WHERE `pelanggaran`.`IdSiswa`="' . $id_siswa . '"
    AND `jenispelanggaran`.`Kategori`="Ibadah"';
    return $this->db->query($query)->result_array();
  }

  public function getRaport_KeteranganPelanggaranBahasa($id_siswa)
  {
    $query = 'SELECT `jenispelanggaran`.`JenisIqob`,`pelanggaran`.`Points`
    FROM `pelanggaran`
    JOIN `jenispelanggaran` ON `jenispelanggaran`.`IdJenisIqob`=`pelanggaran`.`IdJenisIqob`
    WHERE `pelanggaran`.`IdSiswa`="' . $id_siswa . '"
    AND `jenispelanggaran`.`Kategori`="Bahasa"';
    return $this->db->query($query)->result_array();
  }

  public function getRaport_Catatan_PerkembanganTarget($id_siswa, $id_periode_ujian)
  {
    $query = 'SELECT `detailcatatan`.`IdPeriode`,`periode`.`Periode`,`detailcatatan`.`IdJenisCatatan`,`detailcatatan`.`IsiCatatan`,`detailcatatan`.`CatatanMusyrif`
    FROM `detailcatatan`
    JOIN `periode` ON `periode`.`IdPeriode`=`detailcatatan`.`IdPeriode`
    JOIN `periodeujian` ON `periode`.`IdPeriode`=`periodeujian`.`IdPeriode`
    WHERE `detailcatatan`.`IdSiswa`="' . $id_siswa . '"
    AND `periodeujian`.`IdPeriodeUjian`="' . $id_periode_ujian . '"
    AND `detailcatatan`.`IdJenisCatatan`=1';
    return $this->db->query($query)->row_array();
  }

  public function getRaport_Catatan_SikapSantri($id_siswa, $id_periode_ujian)
  {
    $query = 'SELECT `detailcatatan`.`IdPeriode`,`periode`.`Periode`,`detailcatatan`.`IdJenisCatatan`,`detailcatatan`.`IsiCatatan`,`detailcatatan`.`CatatanMusyrif`
    FROM `detailcatatan`
    JOIN `periode` ON `periode`.`IdPeriode`=`detailcatatan`.`IdPeriode`
    JOIN `periodeujian` ON `periode`.`IdPeriode`=`periodeujian`.`IdPeriode`
    WHERE `detailcatatan`.`IdSiswa`="' . $id_siswa . '"
    AND `periodeujian`.`IdPeriodeUjian`="' . $id_periode_ujian . '"
    AND `detailcatatan`.`IdJenisCatatan`=2';
    return $this->db->query($query)->row_array();
  }

  public function getRaport_Catatan_AkhlaqPerilaku($id_siswa, $id_periode_ujian)
  {
    $query = 'SELECT `detailcatatan`.`IdPeriode`,`periode`.`Periode`,`detailcatatan`.`IdJenisCatatan`,`detailcatatan`.`IsiCatatan`,`detailcatatan`.`CatatanMusyrif`
    FROM `detailcatatan`
    JOIN `periode` ON `periode`.`IdPeriode`=`detailcatatan`.`IdPeriode`
    JOIN `periodeujian` ON `periode`.`IdPeriode`=`periodeujian`.`IdPeriode`
    WHERE `detailcatatan`.`IdSiswa`="' . $id_siswa . '"
    AND `periodeujian`.`IdPeriodeUjian`="' . $id_periode_ujian . '"
    AND `detailcatatan`.`IdJenisCatatan`=3';
    return $this->db->query($query)->row_array();
  }

  public function getRaport_Catatan_KerapianKebersihan($id_siswa, $id_periode_ujian)
  {
    $query = 'SELECT `detailcatatan`.`IdPeriode`,`periode`.`Periode`,`detailcatatan`.`IdJenisCatatan`,`detailcatatan`.`IsiCatatan`,`detailcatatan`.`CatatanMusyrif`
    FROM `detailcatatan`
    JOIN `periode` ON `periode`.`IdPeriode`=`detailcatatan`.`IdPeriode`
    JOIN `periodeujian` ON `periode`.`IdPeriode`=`periodeujian`.`IdPeriode`
    WHERE `detailcatatan`.`IdSiswa`="' . $id_siswa . '"
    AND `periodeujian`.`IdPeriodeUjian`="' . $id_periode_ujian . '"
    AND `detailcatatan`.`IdJenisCatatan`=4';
    return $this->db->query($query)->row_array();
  }

  public function getRaport_Catatan_CatatanMusyrif($id_siswa, $id_periode_ujian)
  {
    $query = 'SELECT `detailcatatan`.`IdPeriode`,`periode`.`Periode`,`detailcatatan`.`IdJenisCatatan`,`detailcatatan`.`IsiCatatan`,`detailcatatan`.`CatatanMusyrif`
    FROM `detailcatatan`
    JOIN `periode` ON `periode`.`IdPeriode`=`detailcatatan`.`IdPeriode`
    JOIN `periodeujian` ON `periode`.`IdPeriode`=`periodeujian`.`IdPeriode`
    WHERE `detailcatatan`.`IdSiswa`="' . $id_siswa . '"
    AND `periodeujian`.`IdPeriodeUjian`="' . $id_periode_ujian . '"
    AND `detailcatatan`.`IdJenisCatatan`=5';
    return $this->db->query($query)->row_array();
  }

  public function getRaport_Reward_Ujian($id_siswa, $id_periode_ujian)
  {
    $query = 'SELECT `Reward`
    FROM `hasilujian`
    WHERE `IdSiswa`="' . $id_siswa . '"
    AND `IdPeriodeUjian`="' . $id_periode_ujian . '"';
    return $this->db->query($query)->row_array();
  }

  public function getRaport_Pengesahan_Pengasuh()
  {
    $jabatan = 'Pengasuh PP Taruna Al Quran';
    $Status  = 'Aktif';
    $query = 'SELECT * 
    FROM `pengesahan` 
    WHERE `Jabatan`="' . $jabatan . '"
    AND`Status`= "' . $Status . '"';
    return $this->db->query($query)->row_array();
  }

  public function getRaport_Pengesahan_Direktur()
  {
    $jabatan = 'Direktur Tahfidzul Quran';
    $Status  = 'Aktif';
    $query = 'SELECT * 
    FROM `pengesahan` 
    WHERE `Jabatan`="' . $jabatan . '"
    AND`Status`= "' . $Status . '"';
    return $this->db->query($query)->row_array();
  }
}

/* End of file Raport_M.php */
