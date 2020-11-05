-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 06:00 AM
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
(1, 1, 1, 23),
(2, 1, 2, 23),
(3, 1, 3, 23),
(4, 2, 4, 24),
(5, 2, 5, 24),
(6, 2, 6, 24),
(7, 2, 7, 24),
(8, 2, 8, 24),
(9, 2, 9, 24),
(10, 3, 10, 25),
(11, 3, 11, 25),
(12, 3, 12, 25),
(13, 4, 13, 26),
(14, 4, 14, 26),
(15, 4, 15, 26),
(16, 5, 16, 27),
(17, 5, 17, 27),
(18, 5, 18, 27),
(19, 6, 19, 28),
(20, 6, 20, 28),
(21, 6, 21, 28),
(22, 7, 22, 29),
(23, 7, 23, 29),
(24, 7, 24, 29),
(25, 7, 25, 29),
(26, 7, 26, 29),
(27, 7, 27, 29);

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
(1, 1, 8, 340, 85, 'RIHLAH', 1),
(2, 2, 8, 333, 83.25, 'PULANG', 2),
(3, 3, 8, 331, 82.75, 'RIHLAH', 3),
(4, 4, 9, 343, 85.75, 'PULANG', 2),
(5, 5, 9, 337, 84.25, 'RIHLAH', 3),
(6, 6, 9, 347, 86.75, 'RIHLAH', 1),
(7, 10, 10, 347, 86.75, 'RIHLAH', 1),
(8, 11, 10, 347, 86.75, 'RIHLAH', 2),
(9, 12, 10, 324, 81, 'RIHLAH', 3),
(10, 13, 11, 284, 71, 'RIHLAH', 3),
(11, 14, 11, 342, 85.5, 'PULANG', 1),
(12, 15, 11, 332, 83, 'RIHLAH', 2),
(13, 16, 12, 579, 82.71428571428571, 'PULANG', 3),
(14, 17, 12, 583, 83.28571428571429, 'RIHLAH', 2),
(15, 18, 12, 596, 85.14285714285714, 'PULANG', 1),
(16, 19, 13, 591, 84.42857142857143, 'RIHLAH', 2),
(17, 20, 13, 596, 85.14285714285714, 'PULANG', 1),
(18, 21, 13, 544, 77.71428571428571, 'PULANG', 3),
(19, 22, 14, 853, 85.3, 'PULANG', 1),
(20, 23, 14, 845, 84.5, 'PULANG', 2),
(21, 24, 14, 838, 83.8, 'PULANG', 3),
(22, 25, 15, 808, 80.8, 'PULANG', 3),
(23, 26, 15, 838, 83.8, 'PULANG', 2),
(24, 27, 15, 878, 87.8, 'PULANG', 1);

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
  `IdSiswa` int(11) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('Admin','Wali','Bagian Administrasi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`IdUser`, `IdSiswa`, `username`, `password`, `level`) VALUES
(1, NULL, 'Admin', '$2y$10$s2IRer8VRU/4MKoe5lkhq.tv8rVKETj2TzbaiiJ6VgCO2Duc2jOQW', 'Admin'),
(2, NULL, 'Administrasi', '$2y$10$bVZnG1pjfEFdsAdiITWiVOpg8skctbmxAPRl8SKngb2J3KEzU.aO2', 'Bagian Administrasi'),
(3, NULL, 'wali 1', '$2y$10$6icO8bQeTILh3Pg7RBxhjed8cVof4W.WP9i57ZoMN9QtZ1GFUfI.C', 'Wali'),
(4, 1, 'santri1@gmail.com', '$2y$10$XcyHHQi3I.dgl0C7VrJDfOS0qGcZ3Ga4BfxK9ESleDX5xR..c5s8m', 'Wali'),
(5, 2, 'santri2@gmail.com', '$2y$10$Cz1Hi3slbYiGlmqMD5yPMuaMFKlJfEM9cKNA82lM.2UdkvnJ3oGF6', 'Wali'),
(6, 3, 'santri3@gmail.com', '$2y$10$jfaAYdaamE7RnFIBBKYcUOIlDLR55NV52GZDm9gM/NgBMrDEd14bu', 'Wali'),
(7, 4, 'santri4@gmail.com', '$2y$10$jNJNHj3cyqwp/FP78R647..z4w9/1QadgdCcGlDIA0Yq./W1p.eyy', 'Wali'),
(8, 5, 'santri5@gmail.com', '$2y$10$fxfuyR16n01WJyCHIS02IO3QAWYA9Dp9hvVEaptgVvEl5TgCfS2Y.', 'Wali'),
(9, 6, 'santri6@gmail.com', '$2y$10$ewNcvYoAH80j7P6NaGD9IeHDu8CI992ZDu/F5v6ABxgbCGeoNHauu', 'Wali'),
(10, 7, 'santri7@gmail.com', '$2y$10$R1kSz/6cshclemaIu7lf/ORhF9fbu.hRP11//E/DLmeRYdRjOae9W', 'Wali'),
(11, 8, 'santri8@gmail.com', '$2y$10$Aaa5HtArq/Vt9R432devX.qi7Hk7jecBfzcNwp2GIjfO6KGmDRCJ6', 'Wali'),
(12, 9, 'santri9@gmail.com', '$2y$10$CF5XnIPQLK2KrAXXfcS3guc4gukyFw8jeXXO0QgbKEinBQwWBlQ1m', 'Wali'),
(13, 10, 'santri10@gmail.com', '$2y$10$UmR.xqwFoFNnH7lhjLBV1.kRnNPzgxb/74v1d9ZTrbkbryo9JrHCC', 'Wali'),
(14, 11, 'santri11@gmail.com', '$2y$10$aJnIrfs/1KyrnT3ClJ1TxOiD1X7tmVFUKgPQiE9GRTD8cHv2nOnK.', 'Wali'),
(15, 12, 'santri12@gmail.com', '$2y$10$78vZs1knqJxGlWx9u4k9GO7P0fzHWLSDiyV1unJL1cfVAnzTaUZVu', 'Wali'),
(16, 13, 'santri13@gmail.com', '$2y$10$9eHdEX88MMMGsA2aw.MQS.uOg7RDGavKw8133O/pBuQMz70gYurrS', 'Wali'),
(17, 14, 'santri14@gmail.com', '$2y$10$nlTAA2aO5p9c20lXiu0w9uc9QM0mZI84y5j/z52AFBMXdAT3mXN5u', 'Wali'),
(18, 15, 'santri15@gmail.com', '$2y$10$vvxFLcZ/PKmjBO2OTb8EqueO4aMQpFyqIe4U9TeLTldAnIOW8f3fO', 'Wali'),
(19, 16, 'santri16@gmail.com', '$2y$10$Arx2k7Uiy9po3uIs2GcyUuH//i42dGbxLKay.X9/oFPqNLwsK/hte', 'Wali'),
(20, 17, 'santri17@gmail.com', '$2y$10$3N/eecL6vLnzwbdsFABpcO.uFRwuSw/4XyOkR36u1qNWZXPapy0VO', 'Wali'),
(21, 18, 'santri18@gmail.com', '$2y$10$19gDBrqGnoupFnlDQ4A6ZeGV/9tSTNMqhSga.AW7T8ak2Ufo3Qpcq', 'Wali'),
(22, 19, 'santri19@gmail.com', '$2y$10$DXg/NcKXJ0mSD3n627FdJunQw57v.kqw8QRsiIHwOjTNRf4/xarFS', 'Wali'),
(23, 20, 'santri20@gmail.com', '$2y$10$igMTk3m2VNYTwbgg9Y8Pa.zFvUo/qZlp4xnpcwVkoFqjgTne7a3KS', 'Wali'),
(24, 21, 'santri21@gmail.com', '$2y$10$QdYn.Sa4LDTCMGH7l9qqq.02sAlJdJ6AfMVIjV87CvmiQ8z5diwTO', 'Wali'),
(25, 22, 'santri22@gmail.com', '$2y$10$lgM00nJpvkWcBy266lt9Zeufom10OdMYB0ScyBOQ8OBncQBB.i5j6', 'Wali'),
(26, 23, 'santri23@gmail.com', '$2y$10$lc6N/pehwvW626M86cL.FuKU/z605NZlbN7/ExdScfM2mvP/671uu', 'Wali'),
(27, 24, 'santri24@gmail.com', '$2y$10$1D2DsfBrdk27WlYfB0r3zONoK1QYewoFwUTh6MQsisa7BS/ycUZmC', 'Wali'),
(28, 25, 'santri25@gmail.com', '$2y$10$2dfY1bQ4zlVU4ZNX4xNc7eBhWQbexKlC6YDS/uNClbsUA/M3Suqvq', 'Wali'),
(29, 26, 'santri26@gmail.com', '$2y$10$Nwh7raSQ.sATWYTywJdgSujELJu0lG5OhH3PLKeefe7WII.xhVQci', 'Wali'),
(30, 27, 'santri27@gmail.com', '$2y$10$IGZazZfYLiMVbt3iAuWCoOvTMJHRaz9lng1xU20R.BtAwY0v2a.fG', 'Wali');

-- --------------------------------------------------------

--
-- Table structure for table `musyrif`
--

CREATE TABLE `musyrif` (
  `IdMusyrif` int(11) NOT NULL,
  `NamaMusyrif` varchar(50) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `NoHp` varchar(12) NOT NULL,
  `Ttd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `musyrif`
--

INSERT INTO `musyrif` (`IdMusyrif`, `NamaMusyrif`, `Email`, `NoHp`, `Ttd`) VALUES
(23, 'Musyrif 1', 'musyrif1@osnofla.tec', '089906796755', 'TTD_Musyrif_1.jpg'),
(24, 'Musyrif 2', 'musyrif2@osnofla.tec', '089906796756', 'TTD_Musyrif_2.jpg'),
(25, 'Musyrif 3', 'musyrif3@osnofla.tec', '089906796757', ''),
(26, 'Musyrif 4', 'musyrif4@osnofla.tec', '089906796758', ''),
(27, 'Musyrif 5', 'musyrif5@osnofla.tec', '089906796759', ''),
(28, 'Musyrif 6', 'musyrif6@osnofla.tec', '089906796760', ''),
(29, 'Musyrif 7', 'musyrif7@osnofla.tec', '089906796761', ''),
(30, 'Musyrif 8', 'musyrif8@osnofla.tec', '089906796762', ''),
(31, 'Musyrif 9', 'musyrif9@osnofla.tec', '089906796763', ''),
(32, 'Musyrif 10', 'musyrif10@osnofla.te', '089906796764', ''),
(33, 'Musyrif 11', 'musyrif11@osnofla.te', '089906796765', ''),
(34, 'Musyrif 12', 'musyrif12@osnofla.te', '089906796766', ''),
(35, 'Musyrif 13', 'musyrif13@osnofla.te', '089906796767', ''),
(36, 'Musyrif 14', 'musyrif14@osnofla.te', '089906796768', ''),
(37, 'Musyrif 15', 'musyrif15@osnofla.te', '089906796769', ''),
(38, 'Musyrif 16', 'musyrif16@osnofla.te', '089906796770', ''),
(39, 'Musyrif 17', 'musyrif17@osnofla.te', '089906796771', ''),
(40, 'Musyrif 18', 'musyrif18@osnofla.te', '089906796772', ''),
(41, 'Musyrif 19', 'musyrif19@osnofla.te', '089906796773', ''),
(42, 'Musyrif 20', 'musyrif20@osnofla.te', '089906796774', ''),
(43, 'Musyrif 21', 'musyrif21@osnofla.te', '089906796775', ''),
(44, 'Musyrif 22', 'musyrif22@osnofla.te', '089906796776', ''),
(45, 'Musyrif 23', 'musyrif23@osnofla.te', '089906796777', '');

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
(1, 'Ustadz Umar Budihargo, Lc., MA', 'Pengasuh PP Taruna Al Quran', '1701900107101051', 'TTD_Ustadz_Umar_Budihargo,_Lc.,_MA', 'Aktif'),
(2, 'Ustadz Fadli Nasokha, A.Md', 'Direktur Tahfidzul Quran', '-', 'TTD_Ustadz_Fadli_Nasokha,_A.Md', 'Aktif');

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

--
-- Dumping data for table `pjmusyrif`
--

INSERT INTO `pjmusyrif` (`IdPjMusyrif`, `IdMusyrif`, `JabatanMusyrif`, `JabatanTambahan`, `IdKelompok`) VALUES
(1, 32, 'PJ Musyrif', 'Tidak Ada', 1),
(2, 32, 'PJ Musyrif', 'Tidak Ada', 2),
(3, 33, 'PJ Musyrif', 'Tidak Ada', 3),
(4, 33, 'PJ Musyrif', 'Tidak Ada', 4),
(5, 34, 'PJ Musyrif', 'Tidak Ada', 5),
(6, 34, 'PJ Musyrif', 'Tidak Ada', 6),
(7, 35, 'PJ Musyrif', 'Tidak Ada', 7);

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
(1, 1, 4, 3, 6, 'Tidak Selesai', 75, 'Tidak Dapat Reward'),
(2, 2, 4, 4, 6, 'Selesai', 100, 'Reward'),
(3, 3, 4, 4, 6, 'Selesai', 100, 'Reward'),
(4, 4, 4, 4, 6, 'Selesai', 100, 'Reward'),
(5, 5, 4, 3, 6, 'Tidak Selesai', 75, 'Tidak Dapat Reward'),
(6, 6, 4, 3, 6, 'Tidak Selesai', 75, 'Tidak Dapat Reward'),
(7, 10, 4, 4, 6, 'Selesai', 100, 'Reward'),
(8, 11, 4, 4, 6, 'Selesai', 100, 'Reward'),
(9, 12, 4, 3, 6, 'Tidak Selesai', 75, 'Tidak Dapat Reward'),
(10, 13, 4, 3, 6, 'Tidak Selesai', 75, 'Tidak Dapat Reward'),
(11, 14, 4, 4, 6, 'Selesai', 100, 'Reward'),
(12, 15, 4, 4, 6, 'Selesai', 100, 'Reward'),
(13, 16, 4, 4, 6, 'Selesai', 100, 'Reward'),
(14, 17, 4, 4, 6, 'Selesai', 100, 'Reward'),
(15, 18, 4, 4, 6, 'Selesai', 100, 'Reward'),
(16, 19, 2, 1, 6, 'Tidak Selesai', 50, 'Tidak Dapat Reward'),
(17, 20, 2, 2, 6, 'Selesai', 100, 'Reward'),
(18, 21, 2, 2, 6, 'Selesai', 100, 'Reward'),
(19, 22, 2, 2, 6, 'Selesai', 100, 'Reward'),
(20, 23, 2, 2, 6, 'Selesai', 100, 'Reward'),
(21, 24, 2, 2, 6, 'Selesai', 100, 'Reward'),
(22, 25, 2, 2, 6, 'Selesai', 100, 'Reward'),
(23, 26, 2, 2, 6, 'Selesai', 100, 'Reward'),
(24, 27, 2, 2, 6, 'Selesai', 100, 'Reward');

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
(2, 3, 1, 8, 90, 'A', 'Sangat Baik'),
(4, 4, 1, 8, 90, 'A', 'Sangat Baik'),
(5, 5, 1, 8, 72, 'C', 'Cukup'),
(6, 2, 2, 8, 87, 'B+', 'Baik'),
(7, 3, 2, 8, 83, 'B', 'Baik'),
(8, 4, 2, 8, 90, 'A', 'Sangat Baik'),
(9, 5, 2, 8, 73, 'C', 'Cukup'),
(10, 2, 3, 8, 77, 'C+', 'Cukup'),
(11, 3, 3, 8, 67, 'D', 'Kurang'),
(12, 4, 3, 8, 87, 'B+', 'Baik'),
(13, 5, 3, 8, 100, 'A+', 'Istimewa'),
(14, 2, 4, 9, 80, 'B', 'Baik'),
(15, 3, 4, 9, 88, 'B+', 'Baik'),
(16, 4, 4, 9, 94, 'A', 'Sangat Baik'),
(17, 5, 4, 9, 81, 'B', 'Baik'),
(20, 2, 5, 9, 87, 'B+', 'Baik'),
(21, 3, 5, 9, 75, 'C+', 'Cukup'),
(22, 4, 5, 9, 85, 'B+', 'Baik'),
(23, 5, 5, 9, 90, 'A', 'Sangat Baik'),
(24, 2, 6, 9, 77, 'C+', 'Cukup'),
(25, 3, 6, 9, 85, 'B+', 'Baik'),
(26, 4, 6, 9, 85, 'B+', 'Baik'),
(27, 5, 6, 9, 100, 'A+', 'Istimewa'),
(29, 7, 10, 10, 77, 'C+', 'Cukup'),
(30, 3, 10, 10, 85, 'B+', 'Baik'),
(31, 4, 10, 10, 85, 'B+', 'Baik'),
(32, 5, 10, 10, 100, 'A+', 'Istimewa'),
(33, 7, 11, 10, 67, 'D', 'Kurang'),
(34, 3, 11, 10, 85, 'B+', 'Baik'),
(35, 4, 11, 10, 95, 'A+', 'Istimewa'),
(36, 5, 11, 10, 100, 'A+', 'Istimewa'),
(37, 7, 12, 10, 77, 'C+', 'Cukup'),
(38, 3, 12, 10, 85, 'B+', 'Baik'),
(39, 4, 12, 10, 95, 'A+', 'Istimewa'),
(40, 5, 12, 10, 67, 'D', 'Kurang'),
(45, 7, 13, 11, 37, 'E', 'Sangat Kurang'),
(46, 3, 13, 11, 85, 'B+', 'Baik'),
(47, 4, 13, 11, 75, 'C+', 'Cukup'),
(48, 5, 13, 11, 87, 'B+', 'Baik'),
(49, 7, 14, 11, 90, 'A', 'Sangat Baik'),
(50, 3, 14, 11, 90, 'A', 'Sangat Baik'),
(51, 4, 14, 11, 75, 'C+', 'Cukup'),
(52, 5, 14, 11, 87, 'B+', 'Baik'),
(53, 7, 15, 11, 70, 'D', 'Kurang'),
(54, 3, 15, 11, 80, 'B', 'Baik'),
(55, 4, 15, 11, 95, 'A+', 'Istimewa'),
(56, 5, 15, 11, 87, 'B+', 'Baik'),
(57, 8, 16, 12, 80, 'B', 'Baik'),
(58, 3, 16, 12, 77, 'C+', 'Cukup'),
(59, 9, 16, 12, 90, 'A', 'Sangat Baik'),
(60, 10, 16, 12, 64, 'D', 'Kurang'),
(61, 11, 16, 12, 95, 'A+', 'Istimewa'),
(62, 4, 16, 12, 90, 'A', 'Sangat Baik'),
(63, 5, 16, 12, 83, 'B', 'Baik'),
(64, 8, 17, 12, 70, 'D', 'Kurang'),
(65, 3, 17, 12, 80, 'B', 'Baik'),
(66, 9, 17, 12, 95, 'A+', 'Istimewa'),
(67, 10, 17, 12, 87, 'B+', 'Baik'),
(68, 11, 17, 12, 87, 'B+', 'Baik'),
(69, 4, 17, 12, 77, 'C+', 'Cukup'),
(70, 5, 17, 12, 87, 'B+', 'Baik'),
(71, 8, 18, 12, 80, 'B', 'Baik'),
(72, 3, 18, 12, 60, 'D', 'Kurang'),
(73, 9, 18, 12, 95, 'A+', 'Istimewa'),
(74, 10, 18, 12, 87, 'B+', 'Baik'),
(75, 11, 18, 12, 87, 'B+', 'Baik'),
(76, 4, 18, 12, 100, 'A+', 'Istimewa'),
(77, 5, 18, 12, 87, 'B+', 'Baik'),
(78, 12, 19, 13, 80, 'B', 'Baik'),
(80, 3, 19, 13, 100, 'A+', 'Istimewa'),
(81, 9, 19, 13, 83, 'B', 'Baik'),
(82, 10, 19, 13, 77, 'C+', 'Cukup'),
(83, 11, 19, 13, 90, 'A', 'Sangat Baik'),
(84, 14, 19, 13, 81, 'B', 'Baik'),
(85, 5, 19, 13, 80, 'B', 'Baik'),
(86, 12, 20, 13, 80, 'B', 'Baik'),
(87, 3, 20, 13, 60, 'D', 'Kurang'),
(88, 9, 20, 13, 95, 'A+', 'Istimewa'),
(89, 10, 20, 13, 87, 'B+', 'Baik'),
(90, 11, 20, 13, 87, 'B+', 'Baik'),
(91, 14, 20, 13, 100, 'A+', 'Istimewa'),
(92, 5, 20, 13, 87, 'B+', 'Baik'),
(93, 12, 21, 13, 80, 'B', 'Baik'),
(94, 3, 21, 13, 60, 'D', 'Kurang'),
(95, 9, 21, 13, 65, 'D', 'Kurang'),
(96, 10, 21, 13, 87, 'B+', 'Baik'),
(97, 11, 21, 13, 77, 'C+', 'Cukup'),
(98, 14, 21, 13, 88, 'B+', 'Baik'),
(99, 5, 21, 13, 87, 'B+', 'Baik'),
(101, 13, 22, 14, 88, 'B+', 'Baik'),
(102, 3, 22, 14, 66, 'D', 'Kurang'),
(103, 9, 22, 14, 80, 'B', 'Baik'),
(104, 10, 22, 14, 71, 'C', 'Cukup'),
(105, 11, 22, 14, 100, 'A+', 'Istimewa'),
(106, 14, 22, 14, 90, 'A', 'Sangat Baik'),
(107, 15, 22, 14, 100, 'A+', 'Istimewa'),
(108, 16, 22, 14, 93, 'A', 'Sangat Baik'),
(109, 17, 22, 14, 80, 'B', 'Baik'),
(110, 5, 22, 14, 85, 'B+', 'Baik'),
(111, 13, 23, 14, 80, 'B', 'Baik'),
(112, 3, 23, 14, 100, 'A+', 'Istimewa'),
(113, 9, 23, 14, 65, 'D', 'Kurang'),
(114, 10, 23, 14, 87, 'B+', 'Baik'),
(115, 11, 23, 14, 77, 'C+', 'Cukup'),
(116, 14, 23, 14, 88, 'B+', 'Baik'),
(117, 15, 23, 14, 97, 'A+', 'Istimewa'),
(118, 16, 23, 14, 87, 'B+', 'Baik'),
(119, 17, 23, 14, 77, 'C+', 'Cukup'),
(120, 5, 23, 14, 87, 'B+', 'Baik'),
(121, 13, 24, 14, 100, 'A+', 'Istimewa'),
(122, 3, 24, 14, 80, 'B', 'Baik'),
(123, 9, 24, 14, 65, 'D', 'Kurang'),
(124, 10, 24, 14, 87, 'B+', 'Baik'),
(125, 11, 24, 14, 100, 'A+', 'Istimewa'),
(126, 14, 24, 14, 88, 'B+', 'Baik'),
(127, 15, 24, 14, 97, 'A+', 'Istimewa'),
(128, 16, 24, 14, 87, 'B+', 'Baik'),
(129, 17, 24, 14, 37, 'E', 'Sangat Kurang'),
(130, 5, 24, 14, 97, 'A+', 'Istimewa'),
(131, 13, 25, 15, 90, 'A', 'Sangat Baik'),
(132, 18, 25, 15, 70, 'D', 'Kurang'),
(133, 9, 25, 15, 77, 'C+', 'Cukup'),
(134, 10, 25, 15, 80, 'B', 'Baik'),
(135, 11, 25, 15, 90, 'A', 'Sangat Baik'),
(136, 14, 25, 15, 83, 'B', 'Baik'),
(137, 15, 25, 15, 63, 'D', 'Kurang'),
(138, 16, 25, 15, 90, 'A', 'Sangat Baik'),
(139, 17, 25, 15, 73, 'C', 'Cukup'),
(140, 5, 25, 15, 92, 'A', 'Sangat Baik'),
(141, 13, 26, 15, 100, 'A+', 'Istimewa'),
(142, 18, 26, 15, 80, 'B', 'Baik'),
(143, 9, 26, 15, 65, 'D', 'Kurang'),
(144, 10, 26, 15, 87, 'B+', 'Baik'),
(145, 11, 26, 15, 100, 'A+', 'Istimewa'),
(146, 14, 26, 15, 88, 'B+', 'Baik'),
(147, 15, 26, 15, 97, 'A+', 'Istimewa'),
(148, 16, 26, 15, 87, 'B+', 'Baik'),
(149, 17, 26, 15, 37, 'E', 'Sangat Kurang'),
(150, 5, 26, 15, 97, 'A+', 'Istimewa'),
(151, 13, 27, 15, 100, 'A+', 'Istimewa'),
(152, 18, 27, 15, 80, 'B', 'Baik'),
(153, 9, 27, 15, 65, 'D', 'Kurang'),
(154, 10, 27, 15, 87, 'B+', 'Baik'),
(155, 11, 27, 15, 90, 'A', 'Sangat Baik'),
(156, 14, 27, 15, 88, 'B+', 'Baik'),
(157, 15, 27, 15, 97, 'A+', 'Istimewa'),
(158, 16, 27, 15, 87, 'B+', 'Baik'),
(159, 17, 27, 15, 87, 'B+', 'Baik'),
(160, 5, 27, 15, 97, 'A+', 'Istimewa');

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
(1, 1, 1, 1, 'Masuk', 'Selesai'),
(2, 1, 1, 2, 'Masuk', 'Selesai'),
(3, 1, 1, 3, 'Masuk', 'Selesai'),
(4, 8, 2, 1, 'Masuk', 'Tidak Selesai'),
(5, 8, 2, 2, 'Masuk', 'Selesai'),
(6, 8, 2, 3, 'Masuk', 'Selesai'),
(7, 7, 3, 1, 'Masuk', 'Selesai'),
(8, 7, 3, 2, 'Masuk', 'Selesai'),
(9, 7, 3, 3, 'Masuk', 'Selesai'),
(10, 6, 4, 1, 'Masuk', 'Selesai'),
(11, 6, 4, 2, 'Masuk', 'Selesai'),
(12, 6, 4, 3, 'Masuk', 'Selesai'),
(13, 9, 1, 4, 'Masuk', 'Selesai'),
(14, 9, 1, 5, 'Masuk', 'Tidak Selesai'),
(15, 9, 1, 6, 'Masuk', 'Selesai'),
(16, 10, 2, 4, 'Masuk', 'Selesai'),
(17, 10, 2, 5, 'Masuk', 'Selesai'),
(18, 10, 2, 6, 'Masuk', 'Tidak Selesai'),
(19, 11, 3, 4, 'Masuk', 'Selesai'),
(20, 11, 3, 5, 'Masuk', 'Selesai'),
(21, 11, 3, 6, 'Masuk', 'Selesai'),
(22, 12, 4, 4, 'Masuk', 'Selesai'),
(23, 12, 4, 5, 'Masuk', 'Selesai'),
(24, 12, 4, 6, 'Masuk', 'Selesai'),
(25, 19, 5, 10, 'Masuk', 'Selesai'),
(26, 19, 5, 11, 'Masuk', 'Selesai'),
(27, 19, 5, 12, 'Masuk', 'Selesai'),
(28, 20, 6, 10, 'Masuk', 'Selesai'),
(29, 20, 6, 11, 'Masuk', 'Selesai'),
(30, 20, 6, 12, 'Masuk', 'Selesai'),
(31, 21, 7, 10, 'Masuk', 'Selesai'),
(32, 21, 7, 11, 'Masuk', 'Selesai'),
(33, 21, 7, 12, 'Masuk', 'Selesai'),
(34, 22, 8, 10, 'Masuk', 'Selesai'),
(35, 22, 8, 11, 'Masuk', 'Selesai'),
(36, 22, 8, 12, 'Masuk', 'Tidak Selesai'),
(37, 23, 2, 13, 'Masuk', 'Selesai'),
(38, 23, 2, 14, 'Masuk', 'Selesai'),
(39, 23, 2, 15, 'Masuk', 'Selesai'),
(40, 24, 3, 13, 'Masuk', 'Tidak Selesai'),
(41, 24, 3, 14, 'Masuk', 'Selesai'),
(42, 24, 3, 15, 'Masuk', 'Selesai'),
(43, 25, 4, 13, 'Masuk', 'Selesai'),
(44, 25, 4, 14, 'Masuk', 'Selesai'),
(45, 25, 4, 15, 'Masuk', 'Selesai'),
(46, 26, 5, 13, 'Masuk', 'Selesai'),
(47, 26, 5, 14, 'Masuk', 'Selesai'),
(48, 26, 5, 15, 'Masuk', 'Selesai'),
(49, 35, 7, 16, 'Masuk', 'Selesai'),
(50, 35, 7, 17, 'Masuk', 'Selesai'),
(51, 35, 7, 18, 'Masuk', 'Selesai'),
(52, 36, 8, 16, 'Masuk', 'Selesai'),
(53, 36, 8, 17, 'Masuk', 'Selesai'),
(54, 36, 8, 18, 'Masuk', 'Selesai'),
(55, 37, 9, 16, 'Masuk', 'Selesai'),
(56, 37, 9, 17, 'Masuk', 'Selesai'),
(57, 37, 9, 18, 'Masuk', 'Selesai'),
(58, 38, 9, 16, 'Masuk', 'Selesai'),
(59, 38, 9, 17, 'Masuk', 'Selesai'),
(60, 38, 9, 18, 'Masuk', 'Selesai'),
(61, 46, 10, 19, 'Masuk', 'Selesai'),
(62, 46, 10, 20, 'Masuk', 'Selesai'),
(63, 46, 10, 21, 'Masuk', 'Selesai'),
(64, 45, 4, 19, 'Masuk', 'Tidak Selesai'),
(65, 45, 4, 20, 'Masuk', 'Selesai'),
(66, 45, 4, 21, 'Masuk', 'Selesai'),
(67, 54, 7, 22, 'Masuk', 'Selesai'),
(68, 54, 7, 23, 'Masuk', 'Selesai'),
(69, 54, 7, 24, 'Masuk', 'Selesai'),
(70, 53, 9, 22, 'Masuk', 'Selesai'),
(71, 53, 9, 23, 'Masuk', 'Selesai'),
(72, 53, 9, 24, 'Masuk', 'Selesai'),
(73, 59, 9, 25, 'Masuk', 'Selesai'),
(74, 59, 9, 26, 'Masuk', 'Selesai'),
(75, 59, 9, 27, 'Masuk', 'Selesai'),
(76, 58, 10, 25, 'Masuk', 'Selesai'),
(77, 58, 10, 26, 'Masuk', 'Selesai'),
(78, 58, 10, 27, 'Masuk', 'Selesai');

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
(1, '020219', 'Nama Santri 1', 'Aktif', 1),
(2, '020220', 'Nama Santri 2', 'Aktif', 1),
(3, '019269', 'Nama Santri 3', 'Aktif', 1),
(4, '019271', 'Nama Santri 4', 'Aktif', 2),
(5, '019281', 'Nama Santri 5', 'Aktif', 2),
(6, '019282', 'Nama Santri 6', 'Aktif', 2),
(7, '018230', 'Nama Santri 7', 'Aktif', 3),
(8, '018231', 'Nama Santri 8', 'Aktif', 3),
(9, '018241', 'Nama Santri 9', 'Aktif', 3),
(10, '018242', 'Nama Santri 10', 'Aktif', 4),
(11, '017161', 'Nama Santri 11', 'Aktif', 4),
(12, '017162', 'Nama Santri 12', 'Aktif', 4),
(13, '016120', 'Nama Santri 13', 'Aktif', 5),
(14, '016121', 'Nama Santri 14', 'Aktif', 5),
(15, '015086', 'Nama Santri 15', 'Aktif', 5),
(16, '015087', 'Nama Santri 16', 'Aktif', 6),
(17, '014059', 'Nama Santri 17', 'Aktif', 6),
(18, '014060', 'Nama Santri 18', 'Aktif', 6),
(19, '018220', 'Nama Santri 19', 'Aktif', 7),
(20, '018221', 'Nama Santri 20', 'Aktif', 7),
(21, '018222', 'Nama Santri 21', 'Aktif', 7),
(22, '018223', 'Nama Santri 22', 'Aktif', 8),
(23, '018224', 'Nama Santri 23', 'Aktif', 8),
(24, '018225', 'Nama Santri 24', 'Aktif', 8),
(25, '018226', 'Nama Santri 25', 'Aktif', 9),
(26, '019271', 'Nama Santri 26', 'Aktif', 9),
(27, '019272', 'Nama Santri 27', 'Aktif', 9);

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
  MODIFY `IdCatatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detailjeniscatatan`
--
ALTER TABLE `detailjeniscatatan`
  MODIFY `IdDetailJenisCatatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `detailkelompok`
--
ALTER TABLE `detailkelompok`
  MODIFY `IdDetailKelompok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `detailtarget`
--
ALTER TABLE `detailtarget`
  MODIFY `IdDetailTarget` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `hasilujian`
--
ALTER TABLE `hasilujian`
  MODIFY `IdHasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `musyrif`
--
ALTER TABLE `musyrif`
  MODIFY `IdMusyrif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `IdIqob` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `IdPjMusyrif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `IdRekap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `rekapujian`
--
ALTER TABLE `rekapujian`
  MODIFY `IdUjian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `IdSemester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `setorantarget`
--
ALTER TABLE `setorantarget`
  MODIFY `IdSetoran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `IdSiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
  ADD CONSTRAINT `detailkelompok_ibfk_5` FOREIGN KEY (`IdKelompok`) REFERENCES `kelompokhalaqoh` (`IdKelompok`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detailkelompok_ibfk_6` FOREIGN KEY (`IdSiswa`) REFERENCES `siswa` (`IdSiswa`) ON DELETE CASCADE ON UPDATE CASCADE;

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
