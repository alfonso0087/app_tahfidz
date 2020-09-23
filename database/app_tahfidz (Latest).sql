-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2020 at 06:24 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

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
(3, '2019/2020'),
(4, '2020/2021');

-- --------------------------------------------------------

--
-- Table structure for table `detailcatatan`
--

CREATE TABLE `detailcatatan` (
  `IdCatatan` int(11) NOT NULL,
  `IdSiswa` int(11) NOT NULL,
  `IdJenisCatatan` int(11) NOT NULL,
  `IsiCatatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detailcatatan`
--

INSERT INTO `detailcatatan` (`IdCatatan`, `IdSiswa`, `IdJenisCatatan`, `IsiCatatan`) VALUES
(1, 3, 1, '  Alhamdulillah bisa mengikuti target dengan baik. Alhamdulillah bacaan semakin membaik perlu ditingkatkan lagi. Tugas tikror masih harus sering diingatkan. Alhamdulillah bisa menyelesaikan target dengan baik semoga tetap istiqomah.'),
(2, 3, 2, 'Alhamdulillah sudah menunjukkan sikap yang baik ketika halaqoh harap dipertahankan. Alhamdulillah mudah diberikan masukan. Alhamdulillah sikap dengan ustadz cukup baik. Alhamdulillah anaknya optimis dan semangat. Seringkali ditegur karena terlalu banyak bercanda dengan kawannya.');

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

--
-- Dumping data for table `detailkelompok`
--

INSERT INTO `detailkelompok` (`IdDetailKelompok`, `IdKelompok`, `IdSiswa`, `IdMusyrif`) VALUES
(1, 2, 1, 10),
(3, 2, 2, 10),
(4, 2, 3, 10),
(5, 5, 4, 15),
(6, 5, 5, 15),
(7, 5, 6, 15);

-- --------------------------------------------------------

--
-- Table structure for table `detailtarget`
--

CREATE TABLE `detailtarget` (
  `IdDetailTarget` int(11) NOT NULL,
  `IdTarget` int(11) NOT NULL,
  `IsiTarget` varchar(30) NOT NULL,
  `Keterangan` varchar(50) NOT NULL,
  `Tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detailtarget`
--

INSERT INTO `detailtarget` (`IdDetailTarget`, `IdTarget`, `IsiTarget`, `Keterangan`, `Tgl`) VALUES
(4, 4, 'Tugas 1 Juz 11', 'Simakan', '2020-08-17'),
(5, 4, 'Tugas 2 Juz 12', 'Simakan', '2020-08-17'),
(6, 4, 'Tugas 3 hal. 17-23', 'Setoran, tikror 3x', '2020-08-17'),
(7, 4, 'Tugas 4 Juz 27', 'Sendiri', '2020-08-17'),
(8, 4, 'Tugas 1 Juz 13', 'Simakan', '2020-08-18'),
(9, 4, 'Tugas 2 Juz 14', 'Simakan', '2020-08-18'),
(10, 4, 'Tugas 3 hal. 19-25', 'Setoran, tikror 3x', '2020-08-18'),
(11, 4, 'Tugas 4 Juz 28', 'Sendiri', '2020-08-18');

-- --------------------------------------------------------

--
-- Table structure for table `hasilujian`
--

CREATE TABLE `hasilujian` (
  `IdHasil` int(11) NOT NULL,
  `IdSiswa` int(11) NOT NULL,
  `IdPeriodeUjian` int(11) NOT NULL,
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
  `Waktu` varchar(30) NOT NULL,
  `Ket` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwalhalaqoh`
--

INSERT INTO `jadwalhalaqoh` (`IdJadwal`, `Waktu`, `Ket`) VALUES
(1, 'Subuh - 06.15 (I)', 'Bersama Musyrif'),
(2, '07.45 - 09.15 (II)', 'Bersama Musyrif'),
(3, '08.45 - 10.15', 'Bersama Musyrif'),
(4, '09.15 - 10.30', 'Tahfidz Class'),
(5, '10.30 - Dzuhur (III)', 'Bersama Musyrif'),
(6, '09.30 - 11.00', 'Bersama Musyrif'),
(7, 'Ba\'da Ashar - 16.30 (IV)', 'Tahfidz Class'),
(8, 'Ba\'da Ashar - 16.30 (IV)', 'Bersama Musyrif'),
(9, '19.30 - 20.30 (V)', 'Tahfidz Class'),
(10, '19.30 - 20.30 (V)', 'Tahfidz Class (Maghrib - Isya)');

-- --------------------------------------------------------

--
-- Table structure for table `jeniscatatan`
--

CREATE TABLE `jeniscatatan` (
  `IdJenisCatatan` int(11) NOT NULL,
  `JenisCatatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jeniscatatan`
--

INSERT INTO `jeniscatatan` (`IdJenisCatatan`, `JenisCatatan`) VALUES
(1, 'Perkembangan Target'),
(2, 'Sikap Santri Ketika Halaqoh Tahfidz'),
(3, 'Penilaian Akhlak Perilaku'),
(4, 'Kerapian dan Kebersihan'),
(5, 'Catatan Musyrif');

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

--
-- Dumping data for table `jenispelanggaran`
--

INSERT INTO `jenispelanggaran` (`IdJenisIqob`, `JenisIqob`, `Poin`, `Kategori`) VALUES
(1, 'Datang setelah adzan', 30, 'Ibadah'),
(2, 'Datang setelah iqomah', 40, 'Ibadah'),
(3, 'Tidak mengikuti kegiatann ibadah', 50, 'Ibadah'),
(4, 'Tidak sholat berjama\'ah di masjid tanpa izin', 150, 'Ibadah'),
(5, 'Tidak memakai peci saat sholat', 30, 'Ibadah'),
(6, 'Bercanda atau bergurau setelah adzan', 30, 'Ibadah');

-- --------------------------------------------------------

--
-- Table structure for table `jenisujian`
--

CREATE TABLE `jenisujian` (
  `IdJenisUjian` int(11) NOT NULL,
  `NamaUjian` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenisujian`
--

INSERT INTO `jenisujian` (`IdJenisUjian`, `NamaUjian`) VALUES
(1, 'Tahfidzul Qur\'an'),
(2, 'Hafalan Matan'),
(3, 'Bahasa Arab');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `IdKelas` int(11) NOT NULL,
  `NamaKelas` varchar(5) NOT NULL,
  `Tingkat` enum('MTs','MA') NOT NULL,
  `Kampus` enum('Kampus 1','Kampus 2') NOT NULL,
  `SebutanKelas` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`IdKelas`, `NamaKelas`, `Tingkat`, `Kampus`, `SebutanKelas`) VALUES
(1, 'VIIC', 'MTs', 'Kampus 1', '1'),
(2, 'VIID', 'MTs', 'Kampus 2', '1'),
(3, 'VIIE', 'MTs', 'Kampus 2', '1'),
(4, 'VIIIC', 'MTs', 'Kampus 1', '2'),
(5, 'VIIID', 'MTs', 'Kampus 2', '2'),
(6, 'IXC', 'MTs', 'Kampus 1', '3'),
(7, 'XC', 'MA', 'Kampus 1', '4'),
(8, 'XIC', 'MA', 'Kampus 1', '5'),
(9, 'XIIC', 'MA', 'Kampus 1', '6');

-- --------------------------------------------------------

--
-- Table structure for table `kelompokhalaqoh`
--

CREATE TABLE `kelompokhalaqoh` (
  `IdKelompok` int(11) NOT NULL,
  `NamaKelompok` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelompokhalaqoh`
--

INSERT INTO `kelompokhalaqoh` (`IdKelompok`, `NamaKelompok`) VALUES
(1, 'Kholaf'),
(2, 'Hamzah'),
(3, 'Kholad'),
(4, 'Khafs'),
(5, 'Syu\'bath'),
(6, 'Hisyam'),
(7, 'Qolun');

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
(2, 'Administrasi', '$2y$10$bVZnG1pjfEFdsAdiITWiVOpg8skctbmxAPRl8SKngb2J3KEzU.aO2', 'Bagian Administrasi'),
(3, 'wali 1', '$2y$10$6icO8bQeTILh3Pg7RBxhjed8cVof4W.WP9i57ZoMN9QtZ1GFUfI.C', 'Wali');

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
(1, 'Sample Musyrif', 'musyrif0@osnofla.tec', '086754533322'),
(3, 'INDRA RASENDRIYA', 'musyrif1@osnofla.tec', '089906796756'),
(4, 'AVIGA AJI HARIA FRESA', 'musyrif2@osnofla.tec', '089906796756'),
(5, 'ILYAS IBRAHIM', 'musyrif3@osnofla.tec', '089906796756'),
(6, 'RONAL CHOMSA PUTRA', 'musyrif4@osnofla.tec', '089906796756'),
(7, 'MIFTHA TRI NUGROHO', 'musyrif5@osnofla.tec', '089906796756'),
(8, 'RESI HANIF ISMAWANSYAH', 'musyrif6@osnofla.tec', '089906796756'),
(9, 'NISA KARIMA BUDIYATI', 'musyrif7@osnofla.tec', '089906796756'),
(10, 'NARIS SEFRI SYAIFUDDIN', 'musyrif8@osnofla.tec', '089906796756'),
(11, 'ASWIN DWI AYUNDA', 'musyrif9@osnofla.tec', '089906796756'),
(12, 'ANDRI YANSAH', 'musyrif10@osnofla.te', '089906796756'),
(13, 'YULIYATI', 'musyrif11@osnofla.te', '089906796756'),
(14, 'MUHAMMAD ANANG RIVHALDY', 'musyrif12@osnofla.te', '089906796756'),
(15, 'ALFONSO ARYANDO SABILILLAH', 'musyrif13@osnofla.te', '089906796756'),
(16, 'SITI AULIA FADIRAH', 'musyrif14@osnofla.te', '089906796756'),
(17, 'ARI OKTARIANTO', 'musyrif15@osnofla.te', '089906796756'),
(18, 'IVAN LATIF PRADANA', 'musyrif16@osnofla.te', '089906796756'),
(19, 'HERNI FAJAR SANTI', 'musyrif17@osnofla.te', '089906796756'),
(20, 'SABDA DWI UNTORO', 'musyrif18@osnofla.te', '089906796756'),
(21, 'GILANG RAFLY AYYUBI', 'musyrif19@osnofla.te', '089906796756'),
(22, 'HAIRUL JANUAR', 'musyrif20@osnofla.te', '089906796756');

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

--
-- Dumping data for table `pelanggaran`
--

INSERT INTO `pelanggaran` (`IdIqob`, `IdSiswa`, `IdJenisIqob`, `Tgl`) VALUES
(1, 1, 1, '2020-09-07'),
(3, 3, 2, '2020-09-20');

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
(1, 'Agustus - September 2020'),
(3, 'Oktober - November 2020'),
(4, 'Januari - Februari 2020'),
(6, 'Maret - April 2020');

-- --------------------------------------------------------

--
-- Table structure for table `periodeujian`
--

CREATE TABLE `periodeujian` (
  `IdPeriodeUjian` int(11) NOT NULL,
  `IdPeriode` int(11) NOT NULL,
  `IdAjaran` int(11) NOT NULL,
  `IdSemester` int(11) NOT NULL,
  `IdKelas` int(11) NOT NULL,
  `KetPeriode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `periodeujian`
--

INSERT INTO `periodeujian` (`IdPeriodeUjian`, `IdPeriode`, `IdAjaran`, `IdSemester`, `IdKelas`, `KetPeriode`) VALUES
(4, 1, 4, 1, 6, 'I (Kesatu)'),
(6, 1, 4, 1, 1, 'I (Kesatu)'),
(7, 1, 4, 1, 2, 'I (Kesatu)');

-- --------------------------------------------------------

--
-- Table structure for table `predikathasil1`
--

CREATE TABLE `predikathasil1` (
  `IdPredikatHasil1` int(11) NOT NULL,
  `BatasNilaiBawah1` double NOT NULL,
  `BatasNilaiAtas1` double NOT NULL,
  `PredikatHasil1` varchar(2) NOT NULL,
  `KetHasil1` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `predikathasil1`
--

INSERT INTO `predikathasil1` (`IdPredikatHasil1`, `BatasNilaiBawah1`, `BatasNilaiAtas1`, `PredikatHasil1`, `KetHasil1`) VALUES
(1, 375, 400, 'A+', 'ISTIMEWA'),
(2, 350, 374, 'A', 'SANGAT BAIK'),
(3, 325, 349, 'B+', 'BAIK'),
(4, 300, 324, 'B', 'BAIK'),
(5, 275, 299, 'C+', 'CUKUP'),
(6, 250, 274, 'C', 'CUKUP'),
(7, 150, 249, 'D', 'KURANG'),
(8, 0, 149, 'E', 'SANGAT KURANG');

-- --------------------------------------------------------

--
-- Table structure for table `predikathasil2`
--

CREATE TABLE `predikathasil2` (
  `IdPredikatHasil2` int(11) NOT NULL,
  `BatasNilaiBawah2` double NOT NULL,
  `BatasNilaiAtas2` double NOT NULL,
  `PredikatHasil2` varchar(2) NOT NULL,
  `KetHasil2` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `predikathasil2`
--

INSERT INTO `predikathasil2` (`IdPredikatHasil2`, `BatasNilaiBawah2`, `BatasNilaiAtas2`, `PredikatHasil2`, `KetHasil2`) VALUES
(1, 675, 700, 'A+', 'ISTIMEWA'),
(2, 650, 674, 'A', 'SANGAT BAIK'),
(3, 525, 549, 'B+', 'BAIK'),
(4, 500, 524, 'B', 'CUKUP'),
(5, 475, 499, 'C+', 'CUKUP'),
(6, 450, 474, 'C', 'CUKUP'),
(7, 400, 449, 'D', 'KURANG'),
(8, 0, 399, 'E', 'SANGAT KURANG');

-- --------------------------------------------------------

--
-- Table structure for table `predikathasil3`
--

CREATE TABLE `predikathasil3` (
  `IdPredikatHasil3` int(11) NOT NULL,
  `BatasBawahHasil3` double NOT NULL,
  `BatasAtasHasil3` double NOT NULL,
  `PredikatHasil3` varchar(2) NOT NULL,
  `KetHasil3` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `predikatnilai`
--

CREATE TABLE `predikatnilai` (
  `IdPredikatNilai` int(11) NOT NULL,
  `BatasNilaiBawah` double NOT NULL,
  `BatasNilaiAtas` double NOT NULL,
  `PredikatNilai` varchar(2) NOT NULL,
  `KetNilai` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `predikatnilai`
--

INSERT INTO `predikatnilai` (`IdPredikatNilai`, `BatasNilaiBawah`, `BatasNilaiAtas`, `PredikatNilai`, `KetNilai`) VALUES
(3, 95, 100, 'A+', 'Istimewa'),
(4, 90, 94, 'A', 'Sangat Baik'),
(5, 85, 89, 'B+', 'Baik'),
(6, 80, 84, 'B', 'Baik'),
(7, 75, 79, 'C+', 'Cukup'),
(8, 71, 74, 'C', 'Cukup'),
(9, 60, 70, 'D', 'Kurang'),
(10, 0, 59, 'E', 'Sangat Kurang');

-- --------------------------------------------------------

--
-- Table structure for table `rekapsetoran`
--

CREATE TABLE `rekapsetoran` (
  `IdRekap` int(11) NOT NULL,
  `IdSiswa` int(11) NOT NULL,
  `JmlTugas` double NOT NULL,
  `JmlSetoran` int(11) NOT NULL,
  `PekanRekap` int(11) NOT NULL,
  `Hasil` varchar(20) DEFAULT NULL,
  `Prosentase` double DEFAULT NULL,
  `Reward` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekapsetoran`
--

INSERT INTO `rekapsetoran` (`IdRekap`, `IdSiswa`, `JmlTugas`, `JmlSetoran`, `PekanRekap`, `Hasil`, `Prosentase`, `Reward`) VALUES
(1, 1, 2, 2, 6, 'Selesai', 100, 'Reward'),
(2, 2, 2, 1, 6, 'Tidak Selesai', 50, 'Tidak Dapat Reward');

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

--
-- Dumping data for table `rekapujian`
--

INSERT INTO `rekapujian` (`IdUjian`, `IdTargetUjian`, `IdSiswa`, `IdPeriodeUjian`, `Nilai`, `Predikat`, `Keterangan`) VALUES
(1, 2, 1, 6, 88, 'B+', 'Baik'),
(2, 3, 1, 6, 97, 'A+', 'Istimewa'),
(3, 4, 1, 6, 99, 'A+', 'Istimewa'),
(4, 5, 1, 6, 35, 'E', 'Sangat Kurang'),
(5, 2, 2, 6, 90, 'A', 'Sangat Baik'),
(6, 3, 2, 6, 95, 'A+', 'Istimewa'),
(7, 4, 2, 6, 100, 'A+', 'Istimewa'),
(8, 5, 2, 6, 89, 'B+', 'Baik');

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
(1, 'I/Ganjil'),
(3, 'II/Genap');

-- --------------------------------------------------------

--
-- Table structure for table `setorantarget`
--

CREATE TABLE `setorantarget` (
  `IdSetoran` int(11) NOT NULL,
  `IdDetailTarget` int(11) NOT NULL,
  `IdJadwal` int(11) NOT NULL,
  `IdDetailKelompok` int(11) NOT NULL,
  `Presensi` varchar(5) NOT NULL,
  `Keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setorantarget`
--

INSERT INTO `setorantarget` (`IdSetoran`, `IdDetailTarget`, `IdJadwal`, `IdDetailKelompok`, `Presensi`, `Keterangan`) VALUES
(1, 4, 1, 1, 'Masuk', 'Selesai'),
(3, 4, 1, 5, 'Masuk', 'Selesai'),
(4, 5, 2, 1, 'Masuk', 'Selesai'),
(5, 5, 2, 5, 'Masuk', 'Belum'),
(6, 4, 1, 3, 'Masuk', 'Selesai');

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
(1, '18219', 'Nama Santri 1', 'Aktif', 1),
(2, '18220', 'Nama Santri 2', 'Aktif', 1),
(3, '19269', 'Nama Santri 3', 'Aktif', 2),
(4, '19271', 'Nama Santri 4', 'Aktif', 2),
(5, '19281', 'Nama Santri 5', 'Aktif', 3),
(6, '19282', 'Nama Santri 6', 'Aktif', 3),
(7, '18230', 'Nama Santri 7', 'Aktif', 4),
(8, '18231', 'Nama Santri 8', 'Aktif', 4),
(9, '18241', 'Nama Santri 9', 'Aktif', 5),
(10, '18242', 'Nama Santri 10', 'Aktif', 5),
(11, '17161', 'Nama Santri 11', 'Aktif', 6),
(12, '17162', 'Nama Santri 12', 'Aktif', 6),
(13, '16120', 'Nama Santri 13', 'Aktif', 7),
(14, '16121', 'Nama Santri 14', 'Aktif', 7),
(15, '15086', 'Nama Santri 15', 'Aktif', 8),
(16, '15087', 'Nama Santri 16', 'Aktif', 8),
(17, '14059', 'Nama Santri 17', 'Aktif', 9),
(18, '14060', 'Nama Santri 18', 'Aktif', 9);

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
(4, 2, 1, 3, 3, '2020-08-17', '2020-08-23', 6),
(5, 6, 1, 3, 3, '2020-08-24', '2020-08-30', 7);

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
-- Dumping data for table `targetujian`
--

INSERT INTO `targetujian` (`IdTargetUjian`, `IdJenisUjian`, `Keterangan`) VALUES
(1, 1, 'Prosentase Target Tahfidz'),
(2, 1, '1 juz (juz 27, 5-26, 5) & Tasmi\' 4.5 juz)'),
(3, 2, '100 Hadits'),
(4, 3, 'Tes Lisan'),
(5, 3, 'Tes Tulis');

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
  ADD PRIMARY KEY (`IdCatatan`),
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
  ADD KEY `IdSiswa` (`IdSiswa`),
  ADD KEY `IdPeriodeUjian` (`IdPeriodeUjian`);

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
-- Indexes for table `predikathasil1`
--
ALTER TABLE `predikathasil1`
  ADD PRIMARY KEY (`IdPredikatHasil1`);

--
-- Indexes for table `predikathasil2`
--
ALTER TABLE `predikathasil2`
  ADD PRIMARY KEY (`IdPredikatHasil2`);

--
-- Indexes for table `predikathasil3`
--
ALTER TABLE `predikathasil3`
  ADD PRIMARY KEY (`IdPredikatHasil3`);

--
-- Indexes for table `predikatnilai`
--
ALTER TABLE `predikatnilai`
  ADD PRIMARY KEY (`IdPredikatNilai`);

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
  ADD PRIMARY KEY (`IdSetoran`),
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
  MODIFY `IdAjaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `detailcatatan`
--
ALTER TABLE `detailcatatan`
  MODIFY `IdCatatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `detailkelompok`
--
ALTER TABLE `detailkelompok`
  MODIFY `IdDetailKelompok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `detailtarget`
--
ALTER TABLE `detailtarget`
  MODIFY `IdDetailTarget` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hasilujian`
--
ALTER TABLE `hasilujian`
  MODIFY `IdHasil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwalhalaqoh`
--
ALTER TABLE `jadwalhalaqoh`
  MODIFY `IdJadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jeniscatatan`
--
ALTER TABLE `jeniscatatan`
  MODIFY `IdJenisCatatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jenispelanggaran`
--
ALTER TABLE `jenispelanggaran`
  MODIFY `IdJenisIqob` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jenisujian`
--
ALTER TABLE `jenisujian`
  MODIFY `IdJenisUjian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `IdKelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kelompokhalaqoh`
--
ALTER TABLE `kelompokhalaqoh`
  MODIFY `IdKelompok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `musyrif`
--
ALTER TABLE `musyrif`
  MODIFY `IdMusyrif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `IdIqob` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `IdPeriode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `periodeujian`
--
ALTER TABLE `periodeujian`
  MODIFY `IdPeriodeUjian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `predikathasil1`
--
ALTER TABLE `predikathasil1`
  MODIFY `IdPredikatHasil1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `predikathasil2`
--
ALTER TABLE `predikathasil2`
  MODIFY `IdPredikatHasil2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `predikathasil3`
--
ALTER TABLE `predikathasil3`
  MODIFY `IdPredikatHasil3` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `predikatnilai`
--
ALTER TABLE `predikatnilai`
  MODIFY `IdPredikatNilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rekapsetoran`
--
ALTER TABLE `rekapsetoran`
  MODIFY `IdRekap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rekapujian`
--
ALTER TABLE `rekapujian`
  MODIFY `IdUjian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `IdSemester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `setorantarget`
--
ALTER TABLE `setorantarget`
  MODIFY `IdSetoran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `IdSiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `target`
--
ALTER TABLE `target`
  MODIFY `IdTarget` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `targetujian`
--
ALTER TABLE `targetujian`
  MODIFY `IdTargetUjian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detailcatatan`
--
ALTER TABLE `detailcatatan`
  ADD CONSTRAINT `detailcatatan_ibfk_2` FOREIGN KEY (`IdJenisCatatan`) REFERENCES `jeniscatatan` (`IdJenisCatatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detailkelompok`
--
ALTER TABLE `detailkelompok`
  ADD CONSTRAINT `detailkelompok_ibfk_3` FOREIGN KEY (`IdMusyrif`) REFERENCES `musyrif` (`IdMusyrif`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detailkelompok_ibfk_4` FOREIGN KEY (`IdSiswa`) REFERENCES `siswa` (`IdSiswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detailkelompok_ibfk_5` FOREIGN KEY (`IdKelompok`) REFERENCES `kelompokhalaqoh` (`IdKelompok`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detailtarget`
--
ALTER TABLE `detailtarget`
  ADD CONSTRAINT `detailtarget_ibfk_1` FOREIGN KEY (`IdTarget`) REFERENCES `target` (`IdTarget`);

--
-- Constraints for table `hasilujian`
--
ALTER TABLE `hasilujian`
  ADD CONSTRAINT `hasilujian_ibfk_1` FOREIGN KEY (`IdSiswa`) REFERENCES `siswa` (`IdSiswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hasilujian_ibfk_2` FOREIGN KEY (`IdPeriodeUjian`) REFERENCES `periodeujian` (`IdPeriodeUjian`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `setorantarget_ibfk_1` FOREIGN KEY (`IdDetailKelompok`) REFERENCES `detailkelompok` (`IdDetailKelompok`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `setorantarget_ibfk_2` FOREIGN KEY (`IdDetailTarget`) REFERENCES `detailtarget` (`IdDetailTarget`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `setorantarget_ibfk_3` FOREIGN KEY (`IdJadwal`) REFERENCES `jadwalhalaqoh` (`IdJadwal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `target`
--
ALTER TABLE `target`
  ADD CONSTRAINT `target_ibfk_2` FOREIGN KEY (`IdAjaran`) REFERENCES `ajaran` (`IdAjaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `target_ibfk_3` FOREIGN KEY (`IdPeriode`) REFERENCES `periode` (`IdPeriode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `target_ibfk_4` FOREIGN KEY (`IdSemester`) REFERENCES `semester` (`IdSemester`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `targetujian`
--
ALTER TABLE `targetujian`
  ADD CONSTRAINT `targetujian_ibfk_1` FOREIGN KEY (`IdJenisUjian`) REFERENCES `jenisujian` (`IdJenisUjian`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
