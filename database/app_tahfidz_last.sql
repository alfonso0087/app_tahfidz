-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2020 at 09:30 AM
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
(3, '2019/2020'),
(4, '2020/2021');

-- --------------------------------------------------------

--
-- Table structure for table `detailcatatan`
--

CREATE TABLE `detailcatatan` (
  `IdCatatan` int(11) NOT NULL,
  `IdSiswa` int(11) NOT NULL,
  `IdPeriode` int(11) NOT NULL,
  `IdJenisCatatan` int(11) NOT NULL,
  `IsiCatatan` text DEFAULT NULL,
  `CatatanMusyrif` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detailjeniscatatan`
--

CREATE TABLE `detailjeniscatatan` (
  `IdDetailJenisCatatan` int(11) NOT NULL,
  `IdJenisCatatan` int(11) NOT NULL,
  `DetailCatatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detailjeniscatatan`
--

INSERT INTO `detailjeniscatatan` (`IdDetailJenisCatatan`, `IdJenisCatatan`, `DetailCatatan`) VALUES
(1, 1, 'Alhamdulillah bisa mengikuti target dengan baik.'),
(2, 1, 'Masih kesulitan mengejar target'),
(3, 1, 'Jarang menyetorkan hafalan ke musyrif'),
(4, 2, 'Alhamdulillah sudah menunjukkan sikap yang baik ketika halaqoh harap dipertahankan.'),
(6, 2, ' Alhamdulillah mudah diberikan masukan.'),
(7, 1, 'Seringkali menunda-nunda waktu setoran'),
(8, 1, ' Alhamdulillah bacaan semakin membaik, perlu ditingkatkan lagi'),
(9, 1, 'Dari segi bacaan masih kurang, perlu perbaikan lebih lanjut'),
(10, 1, 'Masih kesulitan dalam menghafal'),
(11, 1, 'Cara membaca dinilai masih terlalu cepat, kebiasaan ini sebaiknya diubah'),
(12, 1, 'Alhamdulillah bisa mengejar target meskipun sebelumnya banyak tertinggal'),
(13, 1, 'Tugas tikror masih harus sering diingatkan'),
(14, 1, 'Ketika setoran masih kurang lancar, perlu diperbaiki dan disiapkan lebih baik lagi'),
(15, 1, 'Hafalan di juz-juz tertentu masih kurang lancar, perlu ditingkatkan lagi'),
(16, 1, 'Alhamdulillah bisa menyelesaikan target dengan baik semoga tetap istiqomah'),
(17, 1, 'Seringkali tertinggal target dan setoran tidak tepat waktunya'),
(18, 1, 'Seringkali meninggalkan tugas tikror, padahal ini sangat penting dalam membentuk kualitas hafalan'),
(19, 1, 'Sikap malas masih mendominasi, perlu semangat lebih'),
(20, 1, 'Kualitas hafalan masih kurang lancar, perlu ditingkatkan lagi'),
(21, 2, 'Alhamdulillah sikap dengan ustadz cukup baik'),
(22, 2, 'Alhamdulillah anaknya optimis dan semangat'),
(23, 2, 'Kebiasaan melamun harus segera ditinggalkan'),
(24, 2, 'Seringkali ditegur karena terlalu banyak bercanda dengan kawannya'),
(25, 2, 'Seringkali tertidur saat halaqoh, padahal sudah dibangunkan'),
(26, 2, 'Seringkali tertidur saat halaqoh, terutama waktu subuh'),
(27, 2, 'Seringkali terlambat datang halaqoh'),
(28, 2, 'Beberapa kali membantah dan mengemukakan alasan yang kurang tepat'),
(29, 2, 'Kebiasaan izin ke kamar mandi dan kembali dalam waktu yang lama'),
(30, 2, 'Berbaiklah kepada teman sesama kelompok, jangan suka bertengkar'),
(31, 2, 'Pernah meninggalkan kegiatan halaqoh tanpa izin'),
(32, 2, 'Butuh perhatian khusus untuk diberikan nasehat'),
(33, 2, 'Sibuk dengan aktivitas yang lain selain halaqoh'),
(34, 2, 'Sikap yang ta\'dzim kepada uastadz masih kurang'),
(35, 2, 'Butuh semangat, karena mudah putus asa'),
(36, 3, 'Alhamdulillah akhlak dengan ustadz sangat baik'),
(37, 3, 'Alhamdulillah pergaulan dengan kakak kelas cukup baik'),
(38, 3, 'Alhamdulillah pergaulan dengan teman se-kelas cukup baik'),
(39, 3, 'Sudah menunjukkan sikap yang baik, semoga istiqomah'),
(40, 3, 'Alhamdulillah sudah cukup tertib dan disiplin'),
(41, 3, 'Perlu ditingkatkan lagi akhlak dan adab terhadap teman, terlebih kepada kakak kelas'),
(42, 3, 'Sikap ta\'dzim kepada ustadz dinilai masih kurang'),
(43, 3, 'Pendiam dan rasa percaya diri masih kurang'),
(44, 3, 'Seringkali menjawab ketika diberikan masukan atau teguran'),
(45, 3, 'Perlu ditingkatkan lagi dalam bertutur kata yang baik'),
(46, 4, 'Alhamdulillah cara berpakaian sudah cukup rapi'),
(47, 4, 'Alhamdulillah rambut rapi karena sering disisir'),
(48, 4, 'Alhamdulillah sering mengenakan minyak wangi'),
(49, 4, 'Alhamdulillah kebersihan gigi terawat dengan baik'),
(50, 4, 'Potongan rambut dinilai terlalu panjang, harap segera potong menyesuaikan dengan standar pondok'),
(51, 4, 'Cara berpakaian masih kurang rapi/balapan'),
(52, 4, 'Serinngkali tidak mengenakan peci'),
(53, 4, 'Seringkali diingatkan karena perkara isbal'),
(54, 4, 'Potongan rambut kurang rapi'),
(55, 4, 'Perlu perhatian dalam hal menyisir rambut'),
(56, 4, 'Cara berpakaian tidak sinkron antara atasan dengan bawahan'),
(57, 4, 'Seringkali tercium bau badan yang tidak sedap'),
(58, 4, 'Perlu diperhatikan lagi kebersihan gigi dan bau mulut'),
(59, 4, 'Terlihat bagian tubuh ada yang gatal, harus segera diperiksakan');

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
(28, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `detailtarget`
--

CREATE TABLE `detailtarget` (
  `IdDetailTarget` int(11) NOT NULL,
  `IdTarget` int(11) NOT NULL,
  `IsiTarget` varchar(50) NOT NULL,
  `Keterangan` varchar(50) NOT NULL,
  `Tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detailtarget`
--

INSERT INTO `detailtarget` (`IdDetailTarget`, `IdTarget`, `IsiTarget`, `Keterangan`, `Tgl`) VALUES
(1, 1, 'Tugas 1 An-Naba\' ayat 1-16', 'Setoran, tikror 3x', '2020-08-17'),
(2, 1, 'Tugas 4 An-Nazi\'at', 'Setoran, tikror 3x', '2020-08-18'),
(3, 1, 'Tugas 3 An-Naba\' ayat 1-46, An-Nazi\'at ayat 1-46', 'Setoran, Tikror 3x', '2020-08-18'),
(4, 1, 'Tugas 2 An-Naba\' ayat 1-31, An-Nazi\'at ayat 1-31', 'Setoran, Tikror 3x', '2020-08-18'),
(5, 1, 'Tugas 1 An-Naba\' ayat 1-13, An-Naziat ayat 1-13', 'Setoran, Tikror 3x', '2020-08-18'),
(6, 1, 'Tugas 4  An-Nazi\'at ayat 1-46', 'Setoran, Tikror 3x', '2020-08-17'),
(7, 1, 'Tugas 3 An-Naba\' ayat 1-40', 'Setoran, Tikror 3x', '2020-08-17'),
(8, 1, 'Tugas 2 An-Naba\' ayat 1-30', 'Setoran, Tikror 3x', '2020-08-17'),
(9, 5, 'Tugas 1 An-Naba\' ayat 1-11', 'Setoran, Tikror 3x', '2020-08-17'),
(10, 5, 'Tugas 2 An-Naba\' ayat 1-20', 'Setoran, Tikror 3x', '2020-08-17'),
(11, 5, 'Tugas 3 An-Naba\' ayat 1-30', 'Setoran, Tikror 3x', '2020-08-17'),
(12, 5, 'Tugas 4 Halaman 583', 'Talqin, Tahsin', '2020-08-17'),
(13, 5, 'Tugas 1 An-Naba\' ayat 1-37', 'Setoran, Tikror 3x', '2020-08-18'),
(14, 5, 'Tugas 2 An-Naba\' ayat 1-4, An-Nazi\'at ayat 1-4', 'Setoran, Tikror 3x', '2020-08-18'),
(15, 5, 'Tugas 3 An-Naba\' ayat 1-16, An-Nazi\'at ayat 1-16', 'Setoran, Tikror 3x', '2020-08-18'),
(16, 5, 'Tugas 4 Halaman 585', 'Talqin, Tahsin', '2020-08-18'),
(17, 13, 'Tugas 1 Juz 22', 'Simakan', '2020-08-17'),
(18, 13, 'Tugas 2 halaman 208-209, 1/2 halaman', 'Setoran, Tikror 3x', '2020-08-17'),
(19, 13, 'Tugas 1 Juz 25', 'Simakan', '2020-08-18'),
(20, 13, 'Tugas 2 halaman 208-210', 'Setoran, Tikror 3x', '2020-08-18'),
(21, 13, 'Tugas 3 Juz 23', 'Simakan', '2020-08-18'),
(22, 13, 'Tugas 4 Juz 24', 'Simakan', '2020-08-18'),
(23, 17, 'Tugas 1 Juz 27', 'Simakan', '2020-08-17'),
(24, 17, 'Tugas 2 halaman 2-4', 'Setoran, Tikror 3x', '2020-08-17'),
(25, 17, 'Tugas 3 Juz 27', 'Simakan', '2020-08-17'),
(26, 17, 'Tugas 4 Juz 26', 'Simakan', '2020-08-17'),
(27, 17, 'Tugas 1 Juz 28', 'Simakan', '2020-08-18'),
(28, 17, 'Tugas 2 halaman 2-5', 'Setoran, Tikror 3x', '2020-08-18'),
(29, 17, 'Tugas 3 Juz 28', 'Simakan', '2020-08-18'),
(30, 17, 'Tugas 4 Juz 26', 'Simakan', '2020-08-18'),
(31, 21, 'Tugas 1 Juz 11', 'Simakan', '2020-08-17'),
(32, 21, 'Tugas 2 Juz 12', 'Simakan', '2020-08-17'),
(33, 21, 'Tugas 3 Hal. 17-23', 'Setoran, Tikror 3x', '2020-08-17'),
(34, 21, 'Tugas 4 Juz 27', 'Sendiri', '2020-08-17'),
(35, 21, 'Tugas 1 Juz 13', 'Simakan', '2020-08-18'),
(36, 21, 'Tugas 2 Juz 14', 'Simakan', '2020-08-18'),
(37, 21, 'Tugas 3 Hal.19-25', 'Setoran, Tikror 3x', '2020-08-18'),
(38, 21, 'Tugas 4 Juz 28', 'Sendiri', '2020-08-18'),
(39, 25, 'Murojaah 1 Juz', 'Sendiri', '2020-08-17'),
(40, 25, 'Murojaah 1 Juz', 'Sendiri', '2020-08-17'),
(41, 25, 'Murojaah 1 Juz', 'Sendiri', '2020-08-17'),
(42, 25, 'Murojaah 1 Juz', 'Sendiri', '2020-08-17'),
(43, 25, 'Murojaah 1 Juz', 'Sendiri', '2020-08-18'),
(44, 25, 'Murojaah 1 Juz', 'Sendiri', '2020-08-18'),
(45, 25, 'Murojaah 1 Juz', 'Sendiri', '2020-08-18'),
(46, 25, 'Murojaah 1 Juz', 'Sendiri', '2020-08-18'),
(47, 29, 'Murojaah 1 Juz', 'Sendiri', '2020-08-17'),
(48, 29, 'Murojaah 1 Juz', 'Sendiri', '2020-08-17'),
(49, 29, 'Murojaah 1 Juz', 'Sendiri', '2020-08-17'),
(50, 29, 'Murojaah 1 Juz', 'Sendiri', '2020-08-17'),
(51, 29, 'Murojaah 1 Juz', 'Sendiri', '2020-08-18'),
(52, 29, 'Murojaah 1 Juz', 'Sendiri', '2020-08-18'),
(53, 29, 'Murojaah 1 Juz', 'Sendiri', '2020-08-18'),
(54, 29, 'Murojaah 1 Juz', 'Sendiri', '2020-08-18'),
(55, 33, 'Murojaah 1 Juz', 'Sendiri', '2020-08-17'),
(56, 33, 'Murojaah 1 Juz', 'Sendiri', '2020-08-17'),
(57, 33, 'Murojaah 1 Juz', 'Sendiri', '2020-08-17'),
(58, 33, 'Murojaah 1 Juz', 'Sendiri', '2020-08-18'),
(59, 33, 'Murojaah 1 Juz', 'Sendiri', '2020-08-18'),
(60, 33, 'Murojaah 1 Juz', 'Sendiri', '2020-08-18'),
(61, 2, 'Test Tugas Pekan 7', 'Keterangan Pekan 7', '2020-11-30');

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
  `Reward` varchar(200) NOT NULL,
  `Rangking` int(11) DEFAULT NULL
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
(6, 'Bercanda atau bergurau setelah adzan', 30, 'Ibadah'),
(8, 'Berbicara dengan bahasa indonesia', 30, 'Bahasa'),
(9, 'Berbahasa daerah', 50, 'Bahasa');

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
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('Admin','Wali','Bagian Administrasi','Musyrif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`IdUser`, `username`, `password`, `level`) VALUES
(1, 'Admin', '$2y$10$s2IRer8VRU/4MKoe5lkhq.tv8rVKETj2TzbaiiJ6VgCO2Duc2jOQW', 'Admin'),
(2, 'Administrasi', '$2y$10$bVZnG1pjfEFdsAdiITWiVOpg8skctbmxAPRl8SKngb2J3KEzU.aO2', 'Bagian Administrasi'),
(32, 'santri1@gmail.com', '$2y$10$BeC/p57b1sfLC.HNKJf.y.0ekaUDG3ND/fDc83dPFr1ER8csj4Z/i', 'Wali'),
(33, 'musyrif1@gmail.com', '$2y$10$egCMzdfXMVrUaGPTYYvyieZxJ/3.I.uEHxJHV7uo8CVnEKh37c70q', 'Musyrif');

-- --------------------------------------------------------

--
-- Table structure for table `musyrif`
--

CREATE TABLE `musyrif` (
  `IdMusyrif` int(11) NOT NULL,
  `IdUser` int(11) NOT NULL,
  `NamaMusyrif` varchar(50) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `NoHp` varchar(12) NOT NULL,
  `Ttd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `musyrif`
--

INSERT INTO `musyrif` (`IdMusyrif`, `IdUser`, `NamaMusyrif`, `Email`, `NoHp`, `Ttd`) VALUES
(1, 33, 'Musyrif 1', 'musyrif1@gmail.com', '081657235783', 'TTD_Musyrif_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `IdIqob` int(11) NOT NULL,
  `IdSiswa` int(11) NOT NULL,
  `IdJenisIqob` int(11) NOT NULL,
  `Tgl` date NOT NULL,
  `Points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengesahan`
--

CREATE TABLE `pengesahan` (
  `IdPengesahan` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Jabatan` varchar(50) NOT NULL,
  `Nip` varchar(20) NOT NULL,
  `Ttd` varchar(100) NOT NULL,
  `Status` enum('Aktif','Tidak Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengesahan`
--

INSERT INTO `pengesahan` (`IdPengesahan`, `Nama`, `Jabatan`, `Nip`, `Ttd`, `Status`) VALUES
(1, 'Ustadz Umar Budihargo, Lc., MA', 'Pengasuh PP Taruna Al Quran', '1701900107101051', 'Paraf_Ustadz_Umar_+_Stempel.png', 'Aktif'),
(2, 'Ustadz Fadli Nasokha, A.Md', 'Direktur Tahfidzul Quran', '-', 'Paraf_Ust._Fadhli_Nasokha.png', 'Aktif');

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
(8, 1, 3, 3, 1, 'I (Kesatu)'),
(9, 1, 3, 3, 2, 'I (Kesatu)'),
(10, 1, 3, 3, 4, 'I (Kesatu)'),
(11, 1, 3, 3, 5, 'I (Kesatu)'),
(12, 1, 3, 3, 6, 'I (Kesatu)'),
(13, 1, 3, 3, 7, 'I (Kesatu)'),
(14, 1, 3, 3, 8, 'I (Kesatu)'),
(15, 1, 3, 3, 9, 'I (Kesatu)');

-- --------------------------------------------------------

--
-- Table structure for table `pjmusyrif`
--

CREATE TABLE `pjmusyrif` (
  `IdPjMusyrif` int(11) NOT NULL,
  `IdMusyrif` int(11) NOT NULL,
  `JabatanMusyrif` enum('PJ Musyrif') NOT NULL,
  `JabatanTambahan` enum('Wali Kelas','Tidak Ada') NOT NULL,
  `IdKelompok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(3, 1, 2, 1, 6, 'Tidak Selesai', 50, 'Tidak Dapat Reward');

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
(4, 1, 2, 28, 'Masuk', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `IdSiswa` int(11) NOT NULL,
  `IdUser` int(11) NOT NULL,
  `NIS` varchar(10) NOT NULL,
  `NamaLengkap` varchar(25) NOT NULL,
  `Status` enum('Aktif','Non Aktif','Lulus') NOT NULL,
  `IdKelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`IdSiswa`, `IdUser`, `NIS`, `NamaLengkap`, `Status`, `IdKelas`) VALUES
(1, 32, '020219', 'Nama Santri 1', 'Aktif', 1);

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
(1, 1, 1, 3, 3, '2020-08-17', '2020-08-23', 6),
(2, 1, 1, 3, 1, '2020-08-24', '2020-08-30', 7),
(3, 1, 1, 3, 3, '2020-08-31', '2020-09-06', 8),
(4, 1, 1, 3, 3, '2020-09-07', '2020-09-13', 9),
(5, 2, 1, 3, 3, '2020-08-17', '2020-08-23', 6),
(6, 2, 1, 3, 3, '2020-08-24', '2020-08-30', 7),
(7, 2, 1, 3, 3, '2020-08-31', '2020-09-06', 8),
(8, 2, 1, 3, 3, '2020-09-07', '2020-09-13', 9),
(9, 3, 1, 3, 3, '2020-08-17', '2020-08-23', 6),
(10, 3, 1, 3, 3, '2020-08-24', '2020-08-30', 7),
(11, 3, 1, 3, 3, '2020-08-31', '2020-09-06', 8),
(12, 3, 1, 3, 3, '2020-09-07', '2020-09-13', 9),
(13, 4, 1, 3, 3, '2020-08-17', '2020-08-23', 6),
(14, 4, 1, 3, 3, '2020-08-24', '2020-08-30', 7),
(15, 4, 1, 3, 3, '2020-08-31', '2020-09-06', 8),
(16, 4, 1, 3, 3, '2020-09-07', '2020-09-13', 9),
(17, 5, 1, 3, 3, '2020-08-17', '2020-08-23', 6),
(18, 5, 1, 3, 3, '2020-08-24', '2020-08-30', 7),
(19, 5, 1, 3, 3, '2020-08-31', '2020-09-06', 8),
(20, 5, 1, 3, 3, '2020-09-07', '2020-09-13', 9),
(21, 6, 1, 3, 3, '2020-08-17', '2020-08-23', 6),
(22, 6, 1, 3, 3, '2020-08-24', '2020-08-30', 7),
(23, 6, 1, 3, 3, '2020-08-31', '2020-09-06', 8),
(24, 6, 1, 3, 3, '2020-09-07', '2020-09-13', 9),
(25, 7, 1, 3, 3, '2020-08-17', '2020-08-23', 6),
(26, 7, 1, 3, 3, '2020-08-24', '2020-08-30', 7),
(27, 7, 1, 3, 3, '2020-08-31', '2020-09-06', 8),
(28, 7, 1, 3, 3, '2020-09-07', '2020-09-13', 9),
(29, 8, 1, 3, 3, '2020-08-17', '2020-08-23', 6),
(30, 8, 1, 3, 3, '2020-08-24', '2020-08-30', 7),
(31, 8, 1, 3, 3, '2020-08-31', '2020-09-06', 8),
(32, 8, 1, 3, 3, '2020-09-07', '2020-09-13', 9),
(33, 9, 1, 3, 3, '2020-08-17', '2020-08-23', 6),
(34, 9, 1, 3, 3, '2020-08-24', '2020-08-30', 7),
(35, 9, 1, 3, 3, '2020-08-31', '2020-09-06', 8),
(36, 9, 1, 3, 3, '2020-09-07', '2020-09-13', 9);

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
(2, 1, 'Tasmi\' 4.5 juz Dan 1 juz (juz 27, 5-26, 5)'),
(3, 2, '100 Hadits'),
(4, 3, 'Tes Lisan'),
(5, 3, 'Tes Tulis'),
(7, 1, 'Tasmi\' 13 Juz 18-19 (Baru), 2 Juz (Baru), 16-17, 2'),
(8, 1, 'Tasmi\' 20 Juz (Juz 1-2), 2 Juz, Juz 11-30'),
(9, 2, 'Nawaqidzul Islam'),
(10, 2, 'Qowaidul Arba\''),
(11, 2, 'Al Ushulu Ats Tsalatsah'),
(12, 1, 'Tasmi\' 20 Juz (Juz 1-20)'),
(13, 1, 'Tasmi\' 30 Juz (Juz 1-30)'),
(14, 2, 'Al Arba\'in Nawawiyah'),
(15, 2, 'Al Mandzumah Al Baiquniyyah'),
(16, 2, 'Jazariyah'),
(17, 2, 'Abi Syuja\''),
(18, 2, 'Hadits Umdatul Ahkam');

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
-- Indexes for table `detailjeniscatatan`
--
ALTER TABLE `detailjeniscatatan`
  ADD PRIMARY KEY (`IdDetailJenisCatatan`);

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
-- Indexes for table `pengesahan`
--
ALTER TABLE `pengesahan`
  ADD PRIMARY KEY (`IdPengesahan`);

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
-- Indexes for table `pjmusyrif`
--
ALTER TABLE `pjmusyrif`
  ADD PRIMARY KEY (`IdPjMusyrif`);

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
  MODIFY `IdCatatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detailjeniscatatan`
--
ALTER TABLE `detailjeniscatatan`
  MODIFY `IdDetailJenisCatatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `detailkelompok`
--
ALTER TABLE `detailkelompok`
  MODIFY `IdDetailKelompok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `detailtarget`
--
ALTER TABLE `detailtarget`
  MODIFY `IdDetailTarget` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

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
  MODIFY `IdJenisIqob` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `musyrif`
--
ALTER TABLE `musyrif`
  MODIFY `IdMusyrif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `IdIqob` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengesahan`
--
ALTER TABLE `pengesahan`
  MODIFY `IdPengesahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `IdPeriode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `periodeujian`
--
ALTER TABLE `periodeujian`
  MODIFY `IdPeriodeUjian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pjmusyrif`
--
ALTER TABLE `pjmusyrif`
  MODIFY `IdPjMusyrif` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `IdRekap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `setorantarget`
--
ALTER TABLE `setorantarget`
  MODIFY `IdSetoran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `IdSiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `target`
--
ALTER TABLE `target`
  MODIFY `IdTarget` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `targetujian`
--
ALTER TABLE `targetujian`
  MODIFY `IdTargetUjian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  ADD CONSTRAINT `detailkelompok_ibfk_5` FOREIGN KEY (`IdKelompok`) REFERENCES `kelompokhalaqoh` (`IdKelompok`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detailkelompok_ibfk_7` FOREIGN KEY (`IdMusyrif`) REFERENCES `musyrif` (`IdMusyrif`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detailkelompok_ibfk_8` FOREIGN KEY (`IdSiswa`) REFERENCES `siswa` (`IdSiswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detailtarget`
--
ALTER TABLE `detailtarget`
  ADD CONSTRAINT `detailtarget_ibfk_1` FOREIGN KEY (`IdTarget`) REFERENCES `target` (`IdTarget`);

--
-- Constraints for table `hasilujian`
--
ALTER TABLE `hasilujian`
  ADD CONSTRAINT `hasilujian_ibfk_2` FOREIGN KEY (`IdPeriodeUjian`) REFERENCES `periodeujian` (`IdPeriodeUjian`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hasilujian_ibfk_3` FOREIGN KEY (`IdSiswa`) REFERENCES `siswa` (`IdSiswa`) ON DELETE CASCADE ON UPDATE CASCADE;

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
