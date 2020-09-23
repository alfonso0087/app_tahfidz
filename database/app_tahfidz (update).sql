-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2020 at 06:53 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_tahfidz`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajaran`
--

CREATE TABLE `ajaran` (
  `IdAjaran` int(11) NOT NULL,
  `ThAjaran` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ajaran`
--

INSERT INTO `ajaran` (`IdAjaran`, `ThAjaran`) VALUES
(3, '2017/2018'),
(4, '2018/2019'),
(5, '2019/2020');

-- --------------------------------------------------------

--
-- Table structure for table `detailcatatan`
--

CREATE TABLE `detailcatatan` (
  `IdSiswa` int(11) NOT NULL,
  `IdJenisCatatan` int(11) NOT NULL,
  `IsiCatatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detailkelompok`
--

CREATE TABLE `detailkelompok` (
  `IdDetailKelompok` int(11) NOT NULL,
  `IdKelompok` int(11) NOT NULL,
  `IdSiswa` int(11) NOT NULL,
  `IdMusyrif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detailtarget`
--

CREATE TABLE `detailtarget` (
  `IdDetailTarget` int(11) NOT NULL,
  `IdTarget` int(11) NOT NULL,
  `IsiTarget` varchar(30) NOT NULL,
  `Keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hasilujian`
--

CREATE TABLE `hasilujian` (
  `IdHasil` int(11) NOT NULL,
  `IdSiswa` int(11) NOT NULL,
  `Total` double NOT NULL,
  `Rata-rata` double NOT NULL,
  `Predikat` varchar(2) NOT NULL,
  `Keterangan` varchar(20) NOT NULL,
  `Reward` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jadwalhalaqoh`
--

CREATE TABLE `jadwalhalaqoh` (
  `IdJadwal` int(11) NOT NULL,
  `Waktu` date NOT NULL,
  `Ket` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jeniscatatan`
--

CREATE TABLE `jeniscatatan` (
  `IdJenisCatatan` int(11) NOT NULL,
  `JenisCatatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jenispelanggaran`
--

CREATE TABLE `jenispelanggaran` (
  `IdJenisIqob` int(11) NOT NULL,
  `JenisIqob` varchar(100) NOT NULL,
  `Poin` double NOT NULL,
  `Kategori` enum('Ibadah','Bahasa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jenisujian`
--

CREATE TABLE `jenisujian` (
  `IdJenisUjian` int(11) NOT NULL,
  `NamaUjian` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `IdKelas` int(11) NOT NULL,
  `NamaKelas` char(2) NOT NULL,
  `Tingkat` enum('MTs','MA') NOT NULL,
  `Kampus` enum('Kampus 1','Kampus 2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`IdKelas`, `NamaKelas`, `Tingkat`, `Kampus`) VALUES
(1, 'A', 'MA', 'Kampus 1'),
(2, 'B', 'MA', 'Kampus 2');

-- --------------------------------------------------------

--
-- Table structure for table `kelompokhalaqoh`
--

CREATE TABLE `kelompokhalaqoh` (
  `IdKelompok` int(11) NOT NULL,
  `NamaKelompok` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `IdUser` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('Admin','Wali','Bagian Administrasi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`IdUser`, `username`, `password`, `level`) VALUES
(1, 'Admin', '$2y$10$s2IRer8VRU/4MKoe5lkhq.tv8rVKETj2TzbaiiJ6VgCO2Duc2jOQW', 'Admin'),
(2, 'Administrasi', '$2y$10$Jj3IRxIVnoNoZ1XECNNf2Ob92cqaGt9F4kYwPTdU1Gx.i1Rq4hbZy', 'Bagian Administrasi');

-- --------------------------------------------------------

--
-- Table structure for table `musyrif`
--

CREATE TABLE `musyrif` (
  `IdMusyrif` int(11) NOT NULL,
  `NamaMusyrif` varchar(50) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `NoHp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `musyrif`
--

INSERT INTO `musyrif` (`IdMusyrif`, `NamaMusyrif`, `Email`, `NoHp`) VALUES
(1, 'Alfonso Aryando', 'Musyrif@osnofla.tech', '086754533321');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `IdIqob` int(11) NOT NULL,
  `IdSiswa` int(11) NOT NULL,
  `IdJenisIqob` int(11) NOT NULL,
  `Tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE `periode` (
  `IdPeriode` int(11) NOT NULL,
  `Periode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`IdPeriode`, `Periode`) VALUES
(1, 'Periode Pertama'),
(3, 'Periode Kedua'),
(4, 'Periode Ketiga');

-- --------------------------------------------------------

--
-- Table structure for table `periodeujian`
--

CREATE TABLE `periodeujian` (
  `IdPeriodeUjian` int(11) NOT NULL,
  `IdPeriode` int(11) NOT NULL,
  `IdAjaran` int(11) NOT NULL,
  `IdSemester` int(11) NOT NULL,
  `IdKelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rekapsetoran`
--

CREATE TABLE `rekapsetoran` (
  `IdRekap` int(11) NOT NULL,
  `IdSiswa` int(11) NOT NULL,
  `BatasLulus` double NOT NULL,
  `BatasWaktuRekap` int(11) NOT NULL,
  `Hasil` varchar(20) NOT NULL,
  `RewardRekap` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rekapujian`
--

CREATE TABLE `rekapujian` (
  `IdUjian` int(11) NOT NULL,
  `IdTargetUjian` int(11) NOT NULL,
  `IdSiswa` int(11) NOT NULL,
  `IdPeriodeUjian` int(11) NOT NULL,
  `Nilai` double NOT NULL,
  `Predikat` varchar(2) NOT NULL,
  `Keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `IdSemester` int(11) NOT NULL,
  `Semester` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`IdSemester`, `Semester`) VALUES
(1, 'Ganjil'),
(3, 'Genap');

-- --------------------------------------------------------

--
-- Table structure for table `setorantarget`
--

CREATE TABLE `setorantarget` (
  `IdDetailTarget` int(11) NOT NULL,
  `IdJadwal` int(11) NOT NULL,
  `IdDetailKelompok` int(11) NOT NULL,
  `Presensi` varchar(5) NOT NULL,
  `TglSetoran` date NOT NULL,
  `Keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `IdSiswa` int(11) NOT NULL,
  `NIS` varchar(10) NOT NULL,
  `NamaLengkap` varchar(25) NOT NULL,
  `Status` enum('Aktif','Non Aktif','Lulus') NOT NULL,
  `IdKelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`IdSiswa`, `NIS`, `NamaLengkap`, `Status`, `IdKelas`) VALUES
(1, '1234567890', 'Sampel Santri', 'Aktif', 1),
(2, '17120087', 'Alfonso Aryando S', 'Lulus', 2);

-- --------------------------------------------------------

--
-- Table structure for table `target`
--

CREATE TABLE `target` (
  `IdTarget` int(11) NOT NULL,
  `IdKelas` int(11) NOT NULL,
  `IdPeriode` int(11) NOT NULL,
  `IdAjaran` int(11) NOT NULL,
  `IdSemester` int(11) NOT NULL,
  `TglMulai` date NOT NULL,
  `TglSelesai` date NOT NULL,
  `Pekan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `target`
--

INSERT INTO `target` (`IdTarget`, `IdKelas`, `IdPeriode`, `IdAjaran`, `IdSemester`, `TglMulai`, `TglSelesai`, `Pekan`) VALUES
(1, 1, 1, 5, 1, '2020-09-06', '2020-09-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `targetujian`
--

CREATE TABLE `targetujian` (
  `IdTargetUjian` int(11) NOT NULL,
  `IdJenisUjian` int(11) NOT NULL,
  `Keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajaran`
--
ALTER TABLE `ajaran`
  ADD PRIMARY KEY (`IdAjaran`);

--
-- Indexes for table `detailcatatan`
--
ALTER TABLE `detailcatatan`
  ADD KEY `IdJenisCatatan` (`IdJenisCatatan`),
  ADD KEY `IdSiswa` (`IdSiswa`);

--
-- Indexes for table `detailkelompok`
--
ALTER TABLE `detailkelompok`
  ADD PRIMARY KEY (`IdDetailKelompok`),
  ADD KEY `IdKelompok` (`IdKelompok`),
  ADD KEY `IdMusyrif` (`IdMusyrif`),
  ADD KEY `IdSiswa` (`IdSiswa`);

--
-- Indexes for table `detailtarget`
--
ALTER TABLE `detailtarget`
  ADD PRIMARY KEY (`IdDetailTarget`),
  ADD KEY `IdTarget` (`IdTarget`);

--
-- Indexes for table `hasilujian`
--
ALTER TABLE `hasilujian`
  ADD PRIMARY KEY (`IdHasil`),
  ADD KEY `IdSiswa` (`IdSiswa`);

--
-- Indexes for table `jadwalhalaqoh`
--
ALTER TABLE `jadwalhalaqoh`
  ADD PRIMARY KEY (`IdJadwal`);

--
-- Indexes for table `jeniscatatan`
--
ALTER TABLE `jeniscatatan`
  ADD PRIMARY KEY (`IdJenisCatatan`);

--
-- Indexes for table `jenispelanggaran`
--
ALTER TABLE `jenispelanggaran`
  ADD PRIMARY KEY (`IdJenisIqob`);

--
-- Indexes for table `jenisujian`
--
ALTER TABLE `jenisujian`
  ADD PRIMARY KEY (`IdJenisUjian`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`IdKelas`);

--
-- Indexes for table `kelompokhalaqoh`
--
ALTER TABLE `kelompokhalaqoh`
  ADD PRIMARY KEY (`IdKelompok`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`IdUser`);

--
-- Indexes for table `musyrif`
--
ALTER TABLE `musyrif`
  ADD PRIMARY KEY (`IdMusyrif`);

--
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`IdIqob`),
  ADD KEY `IdJenisIqob` (`IdJenisIqob`),
  ADD KEY `IdSiswa` (`IdSiswa`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`IdPeriode`);

--
-- Indexes for table `periodeujian`
--
ALTER TABLE `periodeujian`
  ADD PRIMARY KEY (`IdPeriodeUjian`),
  ADD KEY `IdAjaran` (`IdAjaran`),
  ADD KEY `IdKelas` (`IdKelas`),
  ADD KEY `IdPeriode` (`IdPeriode`),
  ADD KEY `IdSemester` (`IdSemester`);

--
-- Indexes for table `rekapsetoran`
--
ALTER TABLE `rekapsetoran`
  ADD PRIMARY KEY (`IdRekap`),
  ADD KEY `IdSiswa` (`IdSiswa`);

--
-- Indexes for table `rekapujian`
--
ALTER TABLE `rekapujian`
  ADD PRIMARY KEY (`IdUjian`),
  ADD KEY `IdTargetUjian` (`IdTargetUjian`),
  ADD KEY `IdPeriodeUjian` (`IdPeriodeUjian`),
  ADD KEY `IdSiswa` (`IdSiswa`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`IdSemester`);

--
-- Indexes for table `setorantarget`
--
ALTER TABLE `setorantarget`
  ADD KEY `IdDetailKelompok` (`IdDetailKelompok`),
  ADD KEY `IdDetailTarget` (`IdDetailTarget`),
  ADD KEY `IdJadwal` (`IdJadwal`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`IdSiswa`),
  ADD KEY `IdKelas` (`IdKelas`);

--
-- Indexes for table `target`
--
ALTER TABLE `target`
  ADD PRIMARY KEY (`IdTarget`),
  ADD KEY `IdKelas` (`IdKelas`),
  ADD KEY `IdAjaran` (`IdAjaran`),
  ADD KEY `IdPeriode` (`IdPeriode`),
  ADD KEY `IdSemester` (`IdSemester`);

--
-- Indexes for table `targetujian`
--
ALTER TABLE `targetujian`
  ADD PRIMARY KEY (`IdTargetUjian`),
  ADD KEY `IdJenisUjian` (`IdJenisUjian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ajaran`
--
ALTER TABLE `ajaran`
  MODIFY `IdAjaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detailkelompok`
--
ALTER TABLE `detailkelompok`
  MODIFY `IdDetailKelompok` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detailtarget`
--
ALTER TABLE `detailtarget`
  MODIFY `IdDetailTarget` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasilujian`
--
ALTER TABLE `hasilujian`
  MODIFY `IdHasil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwalhalaqoh`
--
ALTER TABLE `jadwalhalaqoh`
  MODIFY `IdJadwal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jeniscatatan`
--
ALTER TABLE `jeniscatatan`
  MODIFY `IdJenisCatatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenispelanggaran`
--
ALTER TABLE `jenispelanggaran`
  MODIFY `IdJenisIqob` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenisujian`
--
ALTER TABLE `jenisujian`
  MODIFY `IdJenisUjian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `IdKelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelompokhalaqoh`
--
ALTER TABLE `kelompokhalaqoh`
  MODIFY `IdKelompok` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `musyrif`
--
ALTER TABLE `musyrif`
  MODIFY `IdMusyrif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `IdIqob` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `IdPeriode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `periodeujian`
--
ALTER TABLE `periodeujian`
  MODIFY `IdPeriodeUjian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekapsetoran`
--
ALTER TABLE `rekapsetoran`
  MODIFY `IdRekap` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekapujian`
--
ALTER TABLE `rekapujian`
  MODIFY `IdUjian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `IdSemester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `IdSiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `target`
--
ALTER TABLE `target`
  MODIFY `IdTarget` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `targetujian`
--
ALTER TABLE `targetujian`
  MODIFY `IdTargetUjian` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detailcatatan`
--
ALTER TABLE `detailcatatan`
  ADD CONSTRAINT `detailcatatan_ibfk_2` FOREIGN KEY (`IdJenisCatatan`) REFERENCES `jeniscatatan` (`IdJenisCatatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detailcatatan_ibfk_3` FOREIGN KEY (`IdSiswa`) REFERENCES `siswa` (`IdSiswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detailkelompok`
--
ALTER TABLE `detailkelompok`
  ADD CONSTRAINT `detailkelompok_ibfk_2` FOREIGN KEY (`IdKelompok`) REFERENCES `kelompokhalaqoh` (`IdKelompok`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detailkelompok_ibfk_3` FOREIGN KEY (`IdMusyrif`) REFERENCES `musyrif` (`IdMusyrif`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detailkelompok_ibfk_4` FOREIGN KEY (`IdSiswa`) REFERENCES `siswa` (`IdSiswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detailtarget`
--
ALTER TABLE `detailtarget`
  ADD CONSTRAINT `detailtarget_ibfk_1` FOREIGN KEY (`IdTarget`) REFERENCES `target` (`IdTarget`);

--
-- Constraints for table `hasilujian`
--
ALTER TABLE `hasilujian`
  ADD CONSTRAINT `hasilujian_ibfk_1` FOREIGN KEY (`IdSiswa`) REFERENCES `siswa` (`IdSiswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD CONSTRAINT `pelanggaran_ibfk_1` FOREIGN KEY (`IdJenisIqob`) REFERENCES `jenispelanggaran` (`IdJenisIqob`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pelanggaran_ibfk_2` FOREIGN KEY (`IdSiswa`) REFERENCES `siswa` (`IdSiswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `periodeujian`
--
ALTER TABLE `periodeujian`
  ADD CONSTRAINT `periodeujian_ibfk_1` FOREIGN KEY (`IdAjaran`) REFERENCES `ajaran` (`IdAjaran`),
  ADD CONSTRAINT `periodeujian_ibfk_2` FOREIGN KEY (`IdKelas`) REFERENCES `kelas` (`IdKelas`),
  ADD CONSTRAINT `periodeujian_ibfk_3` FOREIGN KEY (`IdPeriode`) REFERENCES `periode` (`IdPeriode`),
  ADD CONSTRAINT `periodeujian_ibfk_4` FOREIGN KEY (`IdSemester`) REFERENCES `semester` (`IdSemester`);

--
-- Constraints for table `rekapsetoran`
--
ALTER TABLE `rekapsetoran`
  ADD CONSTRAINT `rekapsetoran_ibfk_1` FOREIGN KEY (`IdSiswa`) REFERENCES `siswa` (`IdSiswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rekapujian`
--
ALTER TABLE `rekapujian`
  ADD CONSTRAINT `rekapujian_ibfk_1` FOREIGN KEY (`IdTargetUjian`) REFERENCES `targetujian` (`IdTargetUjian`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rekapujian_ibfk_3` FOREIGN KEY (`IdPeriodeUjian`) REFERENCES `periodeujian` (`IdPeriodeUjian`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rekapujian_ibfk_4` FOREIGN KEY (`IdSiswa`) REFERENCES `siswa` (`IdSiswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `setorantarget`
--
ALTER TABLE `setorantarget`
  ADD CONSTRAINT `setorantarget_ibfk_1` FOREIGN KEY (`IdDetailKelompok`) REFERENCES `detailkelompok` (`IdDetailKelompok`),
  ADD CONSTRAINT `setorantarget_ibfk_2` FOREIGN KEY (`IdDetailTarget`) REFERENCES `detailtarget` (`IdDetailTarget`),
  ADD CONSTRAINT `setorantarget_ibfk_3` FOREIGN KEY (`IdJadwal`) REFERENCES `jadwalhalaqoh` (`IdJadwal`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`IdKelas`) REFERENCES `kelas` (`IdKelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `target`
--
ALTER TABLE `target`
  ADD CONSTRAINT `target_ibfk_1` FOREIGN KEY (`IdKelas`) REFERENCES `kelas` (`IdKelas`),
  ADD CONSTRAINT `target_ibfk_2` FOREIGN KEY (`IdAjaran`) REFERENCES `ajaran` (`IdAjaran`),
  ADD CONSTRAINT `target_ibfk_3` FOREIGN KEY (`IdPeriode`) REFERENCES `periode` (`IdPeriode`),
  ADD CONSTRAINT `target_ibfk_4` FOREIGN KEY (`IdSemester`) REFERENCES `semester` (`IdSemester`);

--
-- Constraints for table `targetujian`
--
ALTER TABLE `targetujian`
  ADD CONSTRAINT `targetujian_ibfk_1` FOREIGN KEY (`IdJenisUjian`) REFERENCES `jenisujian` (`IdJenisUjian`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
