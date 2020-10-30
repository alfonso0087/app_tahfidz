-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2020 at 11:58 AM
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

--
-- Dumping data for table `detailcatatan`
--

INSERT INTO `detailcatatan` (`IdCatatan`, `IdSiswa`, `IdPeriode`, `IdJenisCatatan`, `IsiCatatan`, `CatatanMusyrif`) VALUES
(6, 1, 1, 1, 'Masih kesulitan mengejar target,Seringkali menunda-nunda waktu setoran', ''),
(7, 1, 1, 2, 'Kebiasaan melamun harus segera ditinggalkan,Seringkali ditegur karena terlalu banyak bercanda dengan kawannya,Seringkali terlambat datang halaqoh', ''),
(8, 1, 1, 3, 'Alhamdulillah akhlak dengan ustadz sangat baik,Sudah menunjukkan sikap yang baik, semoga istiqomah', ''),
(9, 1, 1, 4, 'Alhamdulillah cara berpakaian sudah cukup rapi', ''),
(12, 1, 1, 5, NULL, 'Sudah bagus, semoga istiqomah');

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
(17, 1, 1, 23),
(18, 1, 2, 23),
(19, 1, 3, 23),
(20, 1, 4, 23),
(21, 1, 5, 23),
(22, 2, 6, 24),
(23, 2, 7, 24),
(24, 2, 8, 24),
(25, 2, 9, 24),
(26, 2, 10, 24),
(27, 3, 11, 25),
(28, 3, 12, 25),
(29, 3, 13, 25),
(30, 3, 14, 25),
(31, 3, 15, 25),
(32, 4, 16, 26),
(33, 4, 17, 26),
(34, 4, 18, 26),
(35, 4, 19, 26),
(36, 4, 20, 26),
(37, 5, 21, 27),
(38, 5, 22, 27),
(39, 5, 23, 27),
(40, 5, 24, 27),
(41, 5, 25, 27),
(42, 6, 26, 28),
(43, 6, 27, 28),
(44, 6, 28, 28),
(45, 6, 29, 28),
(46, 6, 30, 28),
(47, 7, 31, 29),
(48, 7, 32, 29),
(49, 7, 33, 29),
(50, 7, 34, 29),
(51, 7, 35, 29),
(52, 6, 36, 28),
(53, 6, 37, 28),
(54, 6, 38, 28),
(55, 6, 39, 28),
(56, 6, 40, 28),
(57, 7, 41, 29),
(58, 7, 42, 29),
(59, 7, 43, 29),
(60, 7, 44, 29),
(61, 7, 45, 29);

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
(60, 33, 'Murojaah 1 Juz', 'Sendiri', '2020-08-18');

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

--
-- Dumping data for table `hasilujian`
--

INSERT INTO `hasilujian` (`IdHasil`, `IdSiswa`, `IdPeriodeUjian`, `Total`, `Rata-rata`, `Reward`, `Rangking`) VALUES
(1, 1, 8, 319, 79.75, 'PULANG', NULL),
(2, 2, 8, 344, 86, 'RIHLAH', NULL),
(3, 3, 8, 324, 81, 'PULANG', NULL),
(4, 4, 8, 326, 81.5, 'RIHLAH', NULL),
(5, 5, 8, 339, 84.75, 'RIHLAH', NULL),
(6, 16, 10, 260, 65, 'PULANG', NULL),
(7, 17, 10, 325, 81.25, 'PULANG', NULL),
(8, 18, 10, 331, 82.75, 'PULANG', NULL),
(9, 19, 10, 256, 85.33333333333333, 'RIHLAH', NULL),
(10, 20, 10, 217, 72.33333333333333, 'PULANG', NULL),
(11, 26, 12, 620, 88.57142857142857, 'PULANG', NULL),
(12, 27, 12, 571, 81.57142857142857, 'PULANG', NULL),
(13, 28, 12, 561, 80.14285714285714, 'RIHLAH', NULL),
(14, 29, 12, 569, 81.28571428571429, 'PULANG', NULL),
(15, 30, 12, 596, 85.14285714285714, 'PULANG', NULL),
(16, 31, 13, 596, 85.14285714285714, 'PULANG', NULL),
(17, 32, 13, 566, 80.85714285714286, 'PULANG', NULL),
(18, 33, 13, 561, 80.14285714285714, 'RIHLAH', NULL),
(19, 34, 13, 546, 78, 'PULANG', NULL),
(20, 35, 13, 586, 83.71428571428571, 'RIHLAH', NULL),
(21, 36, 14, 898, 89.8, 'PULANG', NULL),
(22, 37, 14, 868, 86.8, 'RIHLAH', NULL),
(23, 38, 14, 817, 81.7, 'RIHLAH', NULL),
(24, 39, 14, 840, 84, 'PULANG', NULL),
(25, 40, 14, 765, 76.5, 'PULANG', NULL),
(26, 41, 15, 886, 88.6, 'PULANG', NULL),
(27, 42, 15, 831, 83.1, 'PULANG', NULL),
(28, 43, 15, 880, 88, 'PULANG', NULL),
(29, 44, 15, 850, 85, 'RIHLAH', NULL),
(30, 45, 15, 837, 83.7, 'PULANG', NULL);

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
(23, 'Musyrif 1', 'musyrif1@osnofla.tec', '089906796755'),
(24, 'Musyrif 2', 'musyrif2@osnofla.tec', '089906796756'),
(25, 'Musyrif 3', 'musyrif3@osnofla.tec', '089906796757'),
(26, 'Musyrif 4', 'musyrif4@osnofla.tec', '089906796758'),
(27, 'Musyrif 5', 'musyrif5@osnofla.tec', '089906796759'),
(28, 'Musyrif 6', 'musyrif6@osnofla.tec', '089906796760'),
(29, 'Musyrif 7', 'musyrif7@osnofla.tec', '089906796761'),
(30, 'Musyrif 8', 'musyrif8@osnofla.tec', '089906796762'),
(31, 'Musyrif 9', 'musyrif9@osnofla.tec', '089906796763'),
(32, 'Musyrif 10', 'musyrif10@osnofla.te', '089906796764'),
(33, 'Musyrif 11', 'musyrif11@osnofla.te', '089906796765'),
(34, 'Musyrif 12', 'musyrif12@osnofla.te', '089906796766'),
(35, 'Musyrif 13', 'musyrif13@osnofla.te', '089906796767'),
(36, 'Musyrif 14', 'musyrif14@osnofla.te', '089906796768'),
(37, 'Musyrif 15', 'musyrif15@osnofla.te', '089906796769'),
(38, 'Musyrif 16', 'musyrif16@osnofla.te', '089906796770'),
(39, 'Musyrif 17', 'musyrif17@osnofla.te', '089906796771'),
(40, 'Musyrif 18', 'musyrif18@osnofla.te', '089906796772'),
(41, 'Musyrif 19', 'musyrif19@osnofla.te', '089906796773'),
(42, 'Musyrif 20', 'musyrif20@osnofla.te', '089906796774'),
(43, 'Musyrif 21', 'musyrif21@osnofla.te', '089906796775'),
(44, 'Musyrif 22', 'musyrif22@osnofla.te', '089906796776'),
(45, 'Musyrif 23', 'musyrif23@osnofla.te', '089906796777');

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

--
-- Dumping data for table `pelanggaran`
--

INSERT INTO `pelanggaran` (`IdIqob`, `IdSiswa`, `IdJenisIqob`, `Tgl`, `Points`) VALUES
(5, 1, 1, '2020-08-16', 30),
(6, 1, 2, '2020-08-18', 40),
(7, 16, 2, '2020-08-25', 40),
(8, 26, 1, '2020-08-24', 30),
(9, 31, 6, '2020-10-11', 30),
(10, 36, 2, '2020-10-13', 40),
(11, 41, 4, '2020-10-14', 150),
(12, 1, 8, '2020-08-25', 30);

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
(1, 1, 4, 4, 6, 'Selesai', 100, 'Reward'),
(2, 2, 4, 2, 6, 'Tidak Selesai', 50, 'Tidak Dapat Reward'),
(3, 3, 4, 4, 6, 'Selesai', 100, 'Reward'),
(4, 4, 4, 3, 6, 'Tidak Selesai', 75, 'Tidak Dapat Reward'),
(5, 5, 4, 3, 6, 'Tidak Selesai', 75, 'Tidak Dapat Reward'),
(6, 6, 4, 4, 6, 'Selesai', 100, 'Reward'),
(7, 7, 4, 4, 6, 'Selesai', 100, 'Reward'),
(8, 8, 4, 4, 6, 'Selesai', 100, 'Reward'),
(9, 9, 4, 4, 6, 'Selesai', 100, 'Reward'),
(10, 10, 4, 4, 6, 'Selesai', 100, 'Reward'),
(11, 16, 4, 4, 6, 'Selesai', 100, 'Reward'),
(12, 17, 4, 4, 6, 'Selesai', 100, 'Reward'),
(13, 18, 4, 4, 6, 'Selesai', 100, 'Reward'),
(14, 19, 4, 4, 6, 'Selesai', 100, 'Reward'),
(15, 20, 4, 4, 6, 'Selesai', 100, 'Reward'),
(16, 26, 4, 4, 6, 'Selesai', 100, 'Reward'),
(17, 27, 4, 4, 6, 'Selesai', 100, 'Reward'),
(18, 28, 4, 4, 6, 'Selesai', 100, 'Reward'),
(19, 29, 4, 4, 6, 'Selesai', 100, 'Reward'),
(20, 30, 4, 4, 6, 'Selesai', 100, 'Reward'),
(21, 31, 2, 2, 6, 'Selesai', 100, 'Reward'),
(22, 32, 2, 2, 6, 'Selesai', 100, 'Reward'),
(23, 33, 2, 2, 6, 'Selesai', 100, 'Reward'),
(24, 34, 2, 2, 6, 'Selesai', 100, 'Reward'),
(25, 35, 2, 2, 6, 'Selesai', 100, 'Reward'),
(26, 36, 2, 2, 6, 'Selesai', 100, 'Reward'),
(27, 37, 2, 2, 6, 'Selesai', 100, 'Reward'),
(28, 38, 2, 2, 6, 'Selesai', 100, 'Reward'),
(29, 39, 2, 2, 6, 'Selesai', 100, 'Reward'),
(30, 40, 2, 2, 6, 'Selesai', 100, 'Reward'),
(31, 41, 2, 2, 6, 'Selesai', 100, 'Reward'),
(32, 42, 2, 2, 6, 'Selesai', 100, 'Reward'),
(33, 43, 2, 2, 6, 'Selesai', 100, 'Reward'),
(34, 44, 2, 2, 6, 'Selesai', 100, 'Reward'),
(35, 45, 2, 2, 6, 'Selesai', 100, 'Reward');

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
(1, 2, 1, 8, 88, 'B+', 'Baik'),
(2, 3, 1, 8, 97, 'A+', 'Istimewa'),
(3, 4, 1, 8, 99, 'A+', 'Istimewa'),
(4, 5, 1, 8, 35, 'E', 'Sangat Kurang'),
(5, 2, 2, 8, 84, 'B', 'Baik'),
(6, 3, 2, 8, 93, 'A', 'Sangat Baik'),
(7, 4, 2, 8, 90, 'A', 'Sangat Baik'),
(8, 5, 2, 8, 77, 'C+', 'Cukup'),
(9, 2, 3, 8, 80, 'B', 'Baik'),
(10, 3, 3, 8, 66, 'D', 'Kurang'),
(11, 4, 3, 8, 89, 'B+', 'Baik'),
(12, 5, 3, 8, 89, 'B+', 'Baik'),
(13, 2, 4, 8, 77, 'C+', 'Cukup'),
(14, 3, 4, 8, 90, 'A', 'Sangat Baik'),
(15, 4, 4, 8, 88, 'B+', 'Baik'),
(16, 5, 4, 8, 71, 'C', 'Cukup'),
(17, 2, 5, 8, 88, 'B+', 'Baik'),
(18, 3, 5, 8, 94, 'A', 'Sangat Baik'),
(19, 4, 5, 8, 80, 'B', 'Baik'),
(20, 5, 5, 8, 77, 'C+', 'Cukup'),
(21, 7, 16, 10, 85, 'B+', 'Baik'),
(22, 3, 16, 10, 90, 'A', 'Sangat Baik'),
(23, 4, 16, 10, 75, 'C+', 'Cukup'),
(24, 5, 16, 10, 10, 'E', 'Sangat Kurang'),
(25, 7, 17, 10, 87, 'B+', 'Baik'),
(26, 3, 17, 10, 77, 'C+', 'Cukup'),
(27, 4, 17, 10, 88, 'B+', 'Baik'),
(28, 5, 17, 10, 73, 'C', 'Cukup'),
(29, 7, 18, 10, 90, 'A', 'Sangat Baik'),
(30, 3, 18, 10, 84, 'B', 'Baik'),
(31, 4, 18, 10, 77, 'C+', 'Cukup'),
(32, 5, 18, 10, 80, 'B', 'Baik'),
(33, 7, 19, 10, 79, 'C+', 'Cukup'),
(34, 3, 19, 10, 94, 'A', 'Sangat Baik'),
(35, 4, 19, 11, 83, 'B', 'Baik'),
(36, 5, 19, 10, 83, 'B', 'Baik'),
(37, 7, 20, 8, 80, 'B', 'Baik'),
(38, 3, 20, 10, 81, 'B', 'Baik'),
(39, 4, 20, 10, 80, 'B', 'Baik'),
(40, 5, 20, 10, 56, 'E', 'Sangat Kurang'),
(41, 8, 26, 12, 90, 'A', 'Sangat Baik'),
(42, 3, 26, 12, 90, 'A', 'Sangat Baik'),
(43, 9, 26, 12, 88, 'B+', 'Baik'),
(44, 10, 26, 12, 95, 'A+', 'Istimewa'),
(45, 11, 26, 12, 90, 'A', 'Sangat Baik'),
(46, 4, 26, 12, 87, 'B+', 'Baik'),
(47, 5, 26, 12, 80, 'B', 'Baik'),
(48, 8, 27, 12, 87, 'B+', 'Baik'),
(49, 3, 27, 12, 77, 'C+', 'Cukup'),
(50, 9, 27, 12, 84, 'B', 'Baik'),
(51, 10, 27, 12, 45, 'E', 'Sangat Kurang'),
(52, 11, 27, 12, 87, 'B+', 'Baik'),
(53, 4, 27, 12, 97, 'A+', 'Istimewa'),
(54, 5, 27, 12, 94, 'A', 'Sangat Baik'),
(55, 8, 28, 12, 77, 'C+', 'Cukup'),
(56, 3, 28, 12, 57, 'E', 'Sangat Kurang'),
(57, 9, 28, 12, 84, 'B', 'Baik'),
(58, 10, 28, 12, 85, 'B+', 'Baik'),
(59, 11, 28, 12, 87, 'B+', 'Baik'),
(60, 4, 28, 12, 97, 'A+', 'Istimewa'),
(61, 5, 28, 12, 74, 'C', 'Cukup'),
(62, 8, 29, 12, 89, 'B+', 'Baik'),
(63, 3, 29, 12, 67, 'D', 'Kurang'),
(64, 9, 29, 12, 93, 'A', 'Sangat Baik'),
(65, 10, 29, 12, 77, 'C+', 'Cukup'),
(66, 11, 29, 12, 88, 'B+', 'Baik'),
(67, 4, 29, 12, 78, 'C+', 'Cukup'),
(68, 5, 29, 12, 77, 'C+', 'Cukup'),
(69, 8, 30, 12, 89, 'B+', 'Baik'),
(70, 3, 30, 12, 93, 'A', 'Sangat Baik'),
(71, 9, 30, 12, 66, 'D', 'Kurang'),
(72, 10, 30, 12, 96, 'A+', 'Istimewa'),
(73, 11, 30, 12, 84, 'B', 'Baik'),
(74, 4, 30, 12, 78, 'C+', 'Cukup'),
(75, 5, 30, 12, 90, 'A', 'Sangat Baik'),
(76, 3, 31, 13, 97, 'A+', 'Istimewa'),
(77, 12, 31, 13, 88, 'B+', 'Baik'),
(78, 9, 31, 13, 82, 'B', 'Baik'),
(79, 10, 31, 13, 75, 'C+', 'Cukup'),
(80, 11, 31, 13, 90, 'A', 'Sangat Baik'),
(81, 14, 31, 13, 86, 'B+', 'Baik'),
(82, 5, 31, 13, 78, 'C+', 'Cukup'),
(83, 3, 32, 13, 89, 'B+', 'Baik'),
(84, 12, 32, 13, 78, 'C+', 'Cukup'),
(85, 9, 32, 13, 78, 'C+', 'Cukup'),
(86, 10, 32, 13, 61, 'D', 'Kurang'),
(87, 11, 32, 13, 89, 'B+', 'Baik'),
(88, 14, 32, 13, 94, 'A', 'Sangat Baik'),
(89, 5, 32, 13, 77, 'C+', 'Cukup'),
(90, 3, 33, 13, 77, 'C+', 'Cukup'),
(91, 12, 33, 13, 57, 'E', 'Sangat Kurang'),
(92, 9, 33, 13, 84, 'B', 'Baik'),
(93, 10, 33, 13, 85, 'B+', 'Baik'),
(94, 11, 33, 13, 87, 'B+', 'Baik'),
(95, 14, 33, 13, 97, 'A+', 'Istimewa'),
(96, 5, 33, 13, 74, 'C', 'Cukup'),
(97, 3, 34, 13, 87, 'B+', 'Baik'),
(98, 12, 34, 13, 77, 'C+', 'Cukup'),
(99, 9, 34, 13, 84, 'B', 'Baik'),
(100, 10, 34, 13, 70, 'D', 'Kurang'),
(101, 11, 34, 13, 87, 'B+', 'Baik'),
(102, 14, 34, 13, 47, 'E', 'Sangat Kurang'),
(103, 5, 34, 13, 94, 'A', 'Sangat Baik'),
(104, 3, 35, 13, 67, 'D', 'Kurang'),
(105, 12, 35, 13, 77, 'C+', 'Cukup'),
(106, 9, 35, 13, 84, 'B', 'Baik'),
(107, 10, 35, 13, 90, 'A', 'Sangat Baik'),
(108, 11, 35, 13, 87, 'B+', 'Baik'),
(109, 14, 35, 13, 87, 'B+', 'Baik'),
(110, 5, 35, 13, 94, 'A', 'Sangat Baik'),
(111, 13, 36, 14, 90, 'A', 'Sangat Baik'),
(112, 3, 36, 14, 98, 'A+', 'Istimewa'),
(113, 9, 36, 14, 88, 'B+', 'Baik'),
(114, 10, 36, 14, 87, 'B+', 'Baik'),
(115, 11, 36, 14, 99, 'A+', 'Istimewa'),
(116, 15, 36, 14, 94, 'A', 'Sangat Baik'),
(117, 14, 36, 14, 82, 'B', 'Baik'),
(118, 16, 36, 14, 82, 'B', 'Baik'),
(119, 17, 36, 14, 88, 'B+', 'Baik'),
(120, 5, 36, 14, 90, 'A', 'Sangat Baik'),
(121, 13, 37, 14, 67, 'D', 'Kurang'),
(122, 3, 37, 14, 77, 'C+', 'Cukup'),
(123, 9, 37, 14, 84, 'B', 'Baik'),
(124, 10, 37, 14, 90, 'A', 'Sangat Baik'),
(125, 11, 37, 14, 87, 'B+', 'Baik'),
(126, 15, 37, 14, 87, 'B+', 'Baik'),
(127, 14, 37, 14, 94, 'A', 'Sangat Baik'),
(128, 16, 37, 14, 94, 'A', 'Sangat Baik'),
(129, 17, 37, 14, 94, 'A', 'Sangat Baik'),
(130, 5, 37, 14, 94, 'A', 'Sangat Baik'),
(131, 13, 38, 14, 77, 'C+', 'Cukup'),
(132, 3, 38, 14, 77, 'C+', 'Cukup'),
(133, 9, 38, 14, 84, 'B', 'Baik'),
(134, 10, 38, 14, 80, 'B', 'Baik'),
(135, 11, 38, 14, 87, 'B+', 'Baik'),
(136, 15, 38, 14, 67, 'D', 'Kurang'),
(137, 14, 38, 14, 94, 'A', 'Sangat Baik'),
(138, 16, 38, 14, 73, 'C', 'Cukup'),
(139, 17, 38, 14, 94, 'A', 'Sangat Baik'),
(140, 5, 38, 14, 84, 'B', 'Baik'),
(141, 13, 39, 14, 87, 'B+', 'Baik'),
(142, 3, 39, 14, 77, 'C+', 'Cukup'),
(143, 9, 39, 14, 84, 'B', 'Baik'),
(144, 10, 39, 14, 100, 'A+', 'Istimewa'),
(145, 11, 39, 14, 87, 'B+', 'Baik'),
(146, 15, 39, 14, 100, 'A+', 'Istimewa'),
(147, 14, 39, 14, 94, 'A', 'Sangat Baik'),
(148, 16, 39, 14, 33, 'E', 'Sangat Kurang'),
(149, 17, 39, 14, 94, 'A', 'Sangat Baik'),
(150, 5, 39, 14, 84, 'B', 'Baik'),
(151, 13, 40, 14, 87, 'B+', 'Baik'),
(152, 3, 40, 14, 67, 'D', 'Kurang'),
(153, 9, 40, 14, 84, 'B', 'Baik'),
(154, 10, 40, 14, 80, 'B', 'Baik'),
(155, 11, 40, 14, 87, 'B+', 'Baik'),
(156, 15, 40, 14, 81, 'B', 'Baik'),
(157, 14, 40, 14, 78, 'C+', 'Cukup'),
(158, 16, 40, 14, 33, 'E', 'Sangat Kurang'),
(159, 17, 40, 14, 94, 'A', 'Sangat Baik'),
(160, 5, 40, 14, 74, 'C', 'Cukup'),
(161, 13, 41, 15, 100, 'A+', 'Istimewa'),
(162, 18, 41, 15, 89, 'B+', 'Baik'),
(163, 9, 41, 15, 90, 'A', 'Sangat Baik'),
(164, 10, 41, 15, 88, 'B+', 'Baik'),
(165, 11, 41, 15, 92, 'A', 'Sangat Baik'),
(166, 15, 41, 15, 88, 'B+', 'Baik'),
(167, 14, 41, 15, 89, 'B+', 'Baik'),
(168, 16, 41, 15, 83, 'B', 'Baik'),
(169, 17, 41, 15, 67, 'D', 'Kurang'),
(170, 5, 41, 15, 100, 'A+', 'Istimewa'),
(171, 13, 42, 15, 87, 'B+', 'Baik'),
(172, 18, 42, 15, 67, 'D', 'Kurang'),
(173, 9, 42, 15, 84, 'B', 'Baik'),
(174, 10, 42, 15, 80, 'B', 'Baik'),
(175, 11, 42, 15, 87, 'B+', 'Baik'),
(176, 15, 42, 15, 81, 'B', 'Baik'),
(177, 14, 42, 15, 94, 'A', 'Sangat Baik'),
(178, 16, 42, 15, 83, 'B', 'Baik'),
(179, 17, 42, 15, 94, 'A', 'Sangat Baik'),
(180, 5, 42, 15, 74, 'C', 'Cukup'),
(181, 13, 43, 15, 100, 'A+', 'Istimewa'),
(182, 18, 43, 15, 87, 'B+', 'Baik'),
(183, 9, 43, 15, 84, 'B', 'Baik'),
(184, 10, 43, 15, 80, 'B', 'Baik'),
(185, 11, 43, 15, 87, 'B+', 'Baik'),
(186, 15, 43, 15, 81, 'B', 'Baik'),
(187, 14, 43, 15, 94, 'A', 'Sangat Baik'),
(188, 16, 43, 15, 83, 'B', 'Baik'),
(189, 17, 43, 15, 94, 'A', 'Sangat Baik'),
(190, 5, 43, 15, 90, 'A', 'Sangat Baik'),
(191, 13, 44, 15, 70, 'D', 'Kurang'),
(192, 18, 44, 15, 87, 'B+', 'Baik'),
(193, 9, 44, 15, 84, 'B', 'Baik'),
(194, 10, 44, 15, 80, 'B', 'Baik'),
(195, 11, 44, 15, 87, 'B+', 'Baik'),
(196, 15, 44, 15, 81, 'B', 'Baik'),
(197, 14, 44, 15, 88, 'B+', 'Baik'),
(198, 16, 44, 15, 83, 'B', 'Baik'),
(199, 17, 44, 15, 100, 'A+', 'Istimewa'),
(200, 5, 44, 15, 90, 'A', 'Sangat Baik'),
(201, 13, 45, 15, 90, 'A', 'Sangat Baik'),
(202, 18, 45, 15, 87, 'B+', 'Baik'),
(203, 9, 45, 15, 84, 'B', 'Baik'),
(204, 10, 45, 15, 80, 'B', 'Baik'),
(205, 11, 45, 15, 87, 'B+', 'Baik'),
(206, 15, 45, 15, 60, 'D', 'Kurang'),
(207, 14, 45, 15, 88, 'B+', 'Baik'),
(208, 16, 45, 15, 83, 'B', 'Baik'),
(209, 17, 45, 15, 88, 'B+', 'Baik'),
(210, 5, 45, 15, 90, 'A', 'Sangat Baik');

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
(1, 1, 1, 17, 'Masuk', 'Selesai'),
(2, 1, 1, 18, 'Masuk', 'Tidak Selesai'),
(3, 1, 1, 19, 'Masuk', 'Selesai'),
(4, 1, 1, 20, 'Masuk', 'Selesai'),
(5, 1, 1, 21, 'Masuk', 'Selesai'),
(6, 8, 2, 17, 'Masuk', 'Selesai'),
(7, 8, 2, 18, 'Masuk', 'Tidak Selesai'),
(8, 8, 2, 19, 'Masuk', 'Selesai'),
(9, 8, 2, 20, 'Masuk', 'Selesai'),
(10, 8, 2, 21, 'Masuk', 'Selesai'),
(11, 7, 5, 17, 'Masuk', 'Selesai'),
(12, 7, 5, 18, 'Masuk', 'Selesai'),
(13, 7, 5, 19, 'Masuk', 'Selesai'),
(14, 7, 5, 20, 'Masuk', 'Tidak Selesai'),
(16, 7, 5, 21, 'Masuk', 'Selesai'),
(17, 6, 7, 17, 'Masuk', 'Selesai'),
(18, 6, 7, 18, 'Masuk', 'Selesai'),
(19, 6, 7, 19, 'Masuk', 'Selesai'),
(20, 6, 7, 20, 'Masuk', 'Selesai'),
(21, 6, 7, 21, 'Masuk', 'Tidak Selesai'),
(42, 9, 1, 22, 'Masuk', 'Selesai'),
(43, 9, 1, 23, 'Masuk', 'Selesai'),
(44, 9, 1, 24, 'Masuk', 'Selesai'),
(45, 9, 1, 25, 'Masuk', 'Selesai'),
(46, 9, 1, 26, 'Masuk', 'Selesai'),
(47, 10, 1, 22, 'Masuk', 'Selesai'),
(48, 10, 1, 23, 'Masuk', 'Selesai'),
(49, 10, 1, 24, 'Masuk', 'Selesai'),
(50, 10, 1, 25, 'Masuk', 'Selesai'),
(51, 10, 1, 26, 'Masuk', 'Selesai'),
(52, 11, 2, 22, 'Masuk', 'Selesai'),
(53, 11, 2, 23, 'Masuk', 'Selesai'),
(54, 11, 2, 24, 'Masuk', 'Selesai'),
(55, 11, 2, 25, 'Masuk', 'Selesai'),
(56, 11, 2, 26, 'Masuk', 'Selesai'),
(57, 12, 5, 22, 'Masuk', 'Selesai'),
(58, 12, 5, 23, 'Masuk', 'Selesai'),
(59, 12, 5, 24, 'Masuk', 'Selesai'),
(60, 12, 5, 25, 'Masuk', 'Selesai'),
(61, 12, 5, 26, 'Masuk', 'Selesai'),
(67, 19, 4, 32, 'Masuk', 'Selesai'),
(68, 19, 4, 33, 'Masuk', 'Selesai'),
(69, 19, 4, 34, 'Masuk', 'Selesai'),
(70, 19, 4, 35, 'Masuk', 'Selesai'),
(71, 19, 4, 36, 'Masuk', 'Selesai'),
(72, 20, 7, 32, 'Masuk', 'Selesai'),
(73, 20, 7, 33, 'Masuk', 'Selesai'),
(74, 20, 7, 34, 'Masuk', 'Selesai'),
(75, 20, 7, 35, 'Masuk', 'Selesai'),
(76, 20, 7, 36, 'Masuk', 'Selesai'),
(77, 21, 6, 32, 'Masuk', 'Selesai'),
(78, 21, 6, 33, 'Masuk', 'Selesai'),
(79, 21, 6, 34, 'Masuk', 'Selesai'),
(80, 21, 6, 35, 'Masuk', 'Selesai'),
(81, 21, 6, 36, 'Masuk', 'Selesai'),
(82, 22, 5, 32, 'Masuk', 'Selesai'),
(83, 22, 5, 33, 'Masuk', 'Selesai'),
(84, 22, 5, 34, 'Masuk', 'Selesai'),
(85, 22, 5, 35, 'Masuk', 'Selesai'),
(86, 22, 5, 36, 'Masuk', 'Selesai'),
(87, 35, 3, 42, 'Masuk', 'Selesai'),
(88, 35, 3, 43, 'Masuk', 'Selesai'),
(89, 35, 3, 44, 'Masuk', 'Selesai'),
(90, 35, 3, 45, 'Masuk', 'Selesai'),
(91, 35, 3, 46, 'Masuk', 'Selesai'),
(92, 36, 5, 42, 'Masuk', 'Selesai'),
(93, 36, 5, 43, 'Masuk', 'Selesai'),
(94, 36, 5, 44, 'Masuk', 'Selesai'),
(95, 36, 5, 45, 'Masuk', 'Selesai'),
(96, 36, 5, 46, 'Masuk', 'Selesai'),
(97, 37, 8, 42, 'Masuk', 'Selesai'),
(98, 37, 8, 43, 'Masuk', 'Selesai'),
(99, 37, 8, 44, 'Masuk', 'Selesai'),
(100, 37, 8, 45, 'Masuk', 'Selesai'),
(101, 37, 8, 46, 'Masuk', 'Selesai'),
(102, 38, 4, 42, 'Masuk', 'Selesai'),
(103, 38, 4, 43, 'Masuk', 'Selesai'),
(104, 38, 4, 44, 'Masuk', 'Selesai'),
(105, 38, 4, 45, 'Masuk', 'Selesai'),
(106, 38, 4, 46, 'Masuk', 'Selesai'),
(107, 46, 1, 47, 'Masuk', 'Selesai'),
(108, 46, 1, 48, 'Masuk', 'Selesai'),
(109, 46, 1, 49, 'Masuk', 'Selesai'),
(110, 46, 1, 50, 'Masuk', 'Selesai'),
(111, 46, 1, 51, 'Masuk', 'Selesai'),
(112, 45, 2, 47, 'Masuk', 'Selesai'),
(113, 45, 2, 48, 'Masuk', 'Selesai'),
(114, 45, 2, 49, 'Masuk', 'Selesai'),
(115, 45, 2, 50, 'Masuk', 'Selesai'),
(116, 45, 2, 51, 'Masuk', 'Selesai'),
(117, 54, 9, 52, 'Masuk', 'Selesai'),
(118, 54, 9, 53, 'Masuk', 'Selesai'),
(119, 54, 9, 54, 'Masuk', 'Selesai'),
(120, 54, 9, 55, 'Masuk', 'Selesai'),
(121, 54, 9, 56, 'Masuk', 'Selesai'),
(122, 53, 10, 52, 'Masuk', 'Selesai'),
(123, 53, 10, 53, 'Masuk', 'Selesai'),
(124, 53, 10, 54, 'Masuk', 'Selesai'),
(125, 53, 10, 55, 'Masuk', 'Selesai'),
(126, 53, 10, 56, 'Masuk', 'Selesai'),
(127, 59, 7, 57, 'Masuk', 'Selesai'),
(128, 59, 7, 58, 'Masuk', 'Selesai'),
(129, 59, 7, 59, 'Masuk', 'Selesai'),
(130, 59, 7, 60, 'Masuk', 'Selesai'),
(131, 59, 7, 61, 'Masuk', 'Selesai'),
(132, 58, 10, 57, 'Masuk', 'Selesai'),
(133, 58, 10, 58, 'Masuk', 'Selesai'),
(134, 58, 10, 59, 'Masuk', 'Selesai'),
(135, 58, 10, 60, 'Masuk', 'Selesai'),
(136, 58, 10, 61, 'Masuk', 'Selesai');

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
(3, '19269', 'Nama Santri 3', 'Aktif', 1),
(4, '19271', 'Nama Santri 4', 'Aktif', 1),
(5, '19281', 'Nama Santri 5', 'Aktif', 1),
(6, '19282', 'Nama Santri 6', 'Aktif', 2),
(7, '18230', 'Nama Santri 7', 'Aktif', 2),
(8, '18231', 'Nama Santri 8', 'Aktif', 2),
(9, '18241', 'Nama Santri 9', 'Aktif', 2),
(10, '18242', 'Nama Santri 10', 'Aktif', 2),
(11, '17161', 'Nama Santri 11', 'Aktif', 3),
(12, '17162', 'Nama Santri 12', 'Aktif', 3),
(13, '16120', 'Nama Santri 13', 'Aktif', 3),
(14, '16121', 'Nama Santri 14', 'Aktif', 3),
(15, '15086', 'Nama Santri 15', 'Aktif', 3),
(16, '15087', 'Nama Santri 16', 'Aktif', 4),
(17, '14059', 'Nama Santri 17', 'Aktif', 4),
(18, '14060', 'Nama Santri 18', 'Aktif', 4),
(19, '18220', 'Nama Santri 19', 'Aktif', 4),
(20, '18221', 'Nama Santri 20', 'Aktif', 4),
(21, '18222', 'Nama Santri 21', 'Aktif', 5),
(22, '18223', 'Nama Santri 22', 'Aktif', 5),
(23, '18224', 'Nama Santri 23', 'Aktif', 5),
(24, '18225', 'Nama Santri 24', 'Aktif', 5),
(25, '18226', 'Nama Santri 25', 'Aktif', 5),
(26, '19271', 'Nama Santri 26', 'Aktif', 6),
(27, '19272', 'Nama Santri 27', 'Aktif', 6),
(28, '19273', 'Nama Santri 28', 'Aktif', 6),
(29, '19274', 'Nama Santri 29', 'Aktif', 6),
(30, '19275', 'Nama Santri 30', 'Aktif', 6),
(31, '19276', 'Nama Santri 31', 'Aktif', 7),
(32, '19282', 'Nama Santri 32', 'Aktif', 7),
(33, '19283', 'Nama Santri 33', 'Aktif', 7),
(34, '19284', 'Nama Santri 34', 'Aktif', 7),
(35, '19285', 'Nama Santri 35', 'Aktif', 7),
(36, '19286', 'Nama Santri 36', 'Aktif', 8),
(37, '19287', 'Nama Santri 37', 'Aktif', 8),
(38, '19288', 'Nama Santri 38', 'Aktif', 8),
(39, '19289', 'Nama Santri 39', 'Aktif', 8),
(40, '18231', 'Nama Santri 40', 'Aktif', 8),
(41, '18232', 'Nama Santri 41', 'Aktif', 9),
(42, '18233', 'Nama Santri 42', 'Aktif', 9),
(43, '18234', 'Nama Santri 43', 'Aktif', 9),
(44, '18235', 'Nama Santri 44', 'Aktif', 9),
(45, '18236', 'Nama Santri 45', 'Aktif', 9);

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
  MODIFY `IdCatatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `detailjeniscatatan`
--
ALTER TABLE `detailjeniscatatan`
  MODIFY `IdDetailJenisCatatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `detailkelompok`
--
ALTER TABLE `detailkelompok`
  MODIFY `IdDetailKelompok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `detailtarget`
--
ALTER TABLE `detailtarget`
  MODIFY `IdDetailTarget` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `hasilujian`
--
ALTER TABLE `hasilujian`
  MODIFY `IdHasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `musyrif`
--
ALTER TABLE `musyrif`
  MODIFY `IdMusyrif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `IdIqob` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `IdRekap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `rekapujian`
--
ALTER TABLE `rekapujian`
  MODIFY `IdUjian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `IdSemester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `setorantarget`
--
ALTER TABLE `setorantarget`
  MODIFY `IdSetoran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `IdSiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

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
