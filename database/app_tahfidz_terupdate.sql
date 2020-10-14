-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2020 at 08:48 AM
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
  `IsiCatatan` text NOT NULL,
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
(8, 7, 19, 23),
(9, 7, 20, 23),
(10, 7, 37, 23),
(11, 7, 38, 24),
(12, 7, 39, 24),
(13, 7, 40, 24),
(14, 7, 41, 25),
(15, 7, 42, 25),
(16, 7, 43, 25);

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
(12, 6, 'Tugas 1 An-Naba\' ayat 1-16', 'Setoran, tikror 3x', '2020-08-17'),
(13, 6, 'Tugas 2 An-Naba\' ayat 1-30', 'Setoran, tikror 3x', '2020-08-17'),
(14, 6, 'Tugas 3 An-Naba\' ayat 1-40', 'Setoran, tikror 3x', '2020-08-17'),
(15, 6, 'Tugas 4 An-Nazi\'at ayat 1-46', 'Talqin, tahsin', '2020-08-17'),
(17, 6, 'Tugas 1 An-Naba\' ayat 1-13, An-Nazi\'at ayat 1-13', 'Setoran, tikror 3x', '2020-08-18'),
(18, 6, 'Tugas 1 An-Naba\' ayat 1-31, An-Nazi\'at ayat 1-31', 'Setoran, tikror 3x', '2020-08-18'),
(19, 6, 'Tugas 1 An-Naba\' ayat 1-40, An-Nazi\'at ayat 1-46', 'Setoran, tikror 3x', '2020-08-18'),
(20, 6, 'Tugas 4 An-Nazi\'at', 'Talqin', '2020-08-18'),
(21, 10, 'Tugas 1 An-Naba\' ayat 1-11', 'Setoran, tikror 3x', '2020-08-17'),
(22, 10, 'Tugas 2 An-Naba\' ayat 1-20', 'Setoran, tikror 3x', '2020-08-17'),
(23, 10, 'Tugas 3 An-Naba\' ayat 1-30', 'Setoran, tikror 3x', '2020-08-17'),
(24, 10, 'Tugas 4 Halaman 583', 'Talqin, tahsin', '2020-08-17'),
(25, 10, 'Tugas 1 An-Naba\' ayat 1-37', 'Setoran, tikror 3x', '2020-08-18'),
(26, 10, 'Tugas 2 An-Naba\' ayat 1-4, An-Nazi\'at ayat 1-4', 'Setoran, tikror 3x', '2020-08-18'),
(27, 10, 'Tugas 3 An-Naba\' ayat 1-16, An-Nazi\'at ayat 1-16', 'Setoran, tikror 3x', '2020-08-18'),
(28, 10, 'Tugas 4 Halaman 585', 'Talqin, tahsin', '2020-08-18'),
(29, 18, 'Tugas 1 Juz 22', 'Simakan', '2020-08-17'),
(30, 18, 'Tugas 2 halaman 208-209, 1/2 halaman', 'Setoran, tikror 3x', '2020-08-17'),
(31, 18, 'Tugas 1 Juz 25', 'Simakan', '2020-08-18'),
(32, 18, 'Tugas 2 halaman 208-210', 'Setoran, tikror 3x', '2020-08-18'),
(33, 18, 'Tugas 3 Juz 23', 'Simakan', '2020-08-18'),
(34, 18, 'Tugas 4 Juz 24', 'Simakan', '2020-08-18'),
(35, 22, 'Tugas 1 Juz 27', 'Simakan', '2020-08-17'),
(36, 22, 'Tugas 2 halaman 2-4', 'Setoran, tikror 3x', '2020-08-17'),
(37, 22, 'Tugas 3 Juz 27', 'Simakan', '2020-08-17'),
(38, 22, 'Tugas 4 Juz 26', 'Simakan', '2020-08-17'),
(39, 22, 'Tugas 1 Juz 28', 'Simakan', '2020-08-18'),
(40, 22, 'Tugas 2 halaman 2-5', 'Setoran, tikror 3x', '2020-08-18'),
(41, 22, 'Tugas 3 Juz 28', 'Simakan', '2020-08-18'),
(42, 22, 'Tugas 4 Juz 26', 'Simakan', '2020-08-18'),
(43, 26, 'Tugas 1 Juz 11', 'Simakan', '2020-08-17'),
(44, 26, 'Tugas 2 Juz 12', 'Simakan', '2020-08-17'),
(45, 26, 'Tugas 3 halaman 17-23', 'Setoran, tikror 3x', '2020-08-17'),
(46, 26, 'Tugas 4 Juz 27', 'Sendiri', '2020-08-17'),
(47, 26, 'Tugas 1 Juz 13', 'Simakan', '2020-08-18'),
(48, 26, 'Tugas 2 Juz 14', 'Simakan', '2020-08-18'),
(49, 26, 'Tugas 3 halaman 19-25', 'Setoran, tikror 3x', '2020-08-18'),
(50, 26, 'Tugas 4 Juz 28', 'Sendiri', '2020-08-18');

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
(9, 19, 8, 365, 91.25, 'PULANG', 2),
(10, 20, 8, 345, 86.25, 'RIHLAH', 5),
(11, 37, 8, 379, 94.75, 'PULANG', 1),
(12, 38, 8, 359, 89.75, 'RIHLAH', 4),
(13, 39, 8, 297, 74.25, 'RIHLAH', 6),
(14, 40, 8, 363, 90.75, 'PULANG', 3);

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
(8, 1, 3, 3, 1, 'I (Kesatu)');

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
(21, 19, 2, 2, 6, 'Selesai', 100, 'Reward'),
(22, 20, 2, 1, 6, 'Tidak Selesai', 50, 'Tidak Dapat Reward'),
(23, 37, 2, 2, 6, 'Selesai', 100, 'Reward'),
(24, 38, 2, 2, 6, 'Selesai', 100, 'Reward'),
(25, 39, 2, 1, 6, 'Tidak Selesai', 50, 'Tidak Dapat Reward'),
(26, 40, 2, 2, 6, 'Selesai', 100, 'Reward'),
(27, 41, 2, 2, 6, 'Selesai', 100, 'Reward'),
(28, 42, 2, 2, 6, 'Selesai', 100, 'Reward'),
(29, 43, 2, 2, 6, 'Selesai', 100, 'Reward');

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
(10, 2, 19, 8, 95, 'A+', 'Istimewa'),
(11, 3, 19, 8, 88, 'B+', 'Baik'),
(12, 4, 19, 8, 82, 'B', 'Baik'),
(13, 5, 19, 8, 100, 'A+', 'Istimewa'),
(14, 2, 20, 8, 87, 'B+', 'Baik'),
(15, 3, 20, 8, 93, 'A', 'Sangat Baik'),
(16, 4, 20, 8, 65, 'D', 'Kurang'),
(17, 5, 20, 8, 100, 'A+', 'Istimewa'),
(18, 2, 37, 8, 92, 'A', 'Sangat Baik'),
(19, 3, 37, 8, 100, 'A+', 'Istimewa'),
(20, 4, 37, 8, 87, 'B+', 'Baik'),
(21, 5, 37, 8, 100, 'A+', 'Istimewa'),
(22, 2, 38, 8, 77, 'C+', 'Cukup'),
(23, 3, 38, 8, 90, 'A', 'Sangat Baik'),
(24, 4, 38, 8, 92, 'A', 'Sangat Baik'),
(25, 5, 38, 8, 100, 'A+', 'Istimewa'),
(26, 2, 39, 8, 65, 'D', 'Kurang'),
(27, 3, 39, 8, 99, 'A+', 'Istimewa'),
(28, 4, 39, 8, 52, 'E', 'Sangat Kurang'),
(29, 5, 39, 8, 81, 'B', 'Baik'),
(30, 2, 40, 8, 82, 'B', 'Baik'),
(31, 3, 40, 8, 90, 'A', 'Sangat Baik'),
(32, 4, 40, 8, 100, 'A+', 'Istimewa'),
(33, 5, 40, 8, 91, 'A', 'Sangat Baik');

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
(1, 12, 1, 8, 'Masuk', 'Selesai'),
(2, 12, 1, 9, 'Masuk', 'Selesai'),
(3, 12, 1, 10, 'Masuk', 'Selesai'),
(4, 12, 1, 11, 'Masuk', 'Selesai'),
(5, 12, 1, 12, 'Masuk', 'Selesai'),
(6, 12, 1, 13, 'Masuk', 'Selesai'),
(7, 12, 1, 14, 'Masuk', 'Selesai'),
(8, 12, 1, 15, 'Masuk', 'Selesai'),
(9, 12, 1, 16, 'Masuk', 'Selesai'),
(10, 13, 2, 8, 'Masuk', 'Selesai'),
(11, 13, 2, 9, 'Izin', 'Belum Selesai'),
(12, 13, 2, 10, 'Masuk', 'Selesai'),
(13, 13, 2, 11, 'Masuk', 'Selesai'),
(14, 13, 2, 12, 'Izin', 'Belum Selesai'),
(15, 13, 2, 13, 'Masuk', 'Selesai'),
(16, 13, 2, 14, 'Masuk', 'Selesai'),
(17, 13, 2, 15, 'Masuk', 'Selesai'),
(18, 13, 2, 16, 'Masuk', 'Selesai');

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
(19, '18219', 'Nama Santri 1', 'Aktif', 1),
(20, '18220', 'Nama Santri 2', 'Aktif', 1),
(21, '19269', 'Nama Santri 3', 'Aktif', 2),
(22, '19271', 'Nama Santri 4', 'Aktif', 2),
(23, '19281', 'Nama Santri 5', 'Aktif', 3),
(24, '19282', 'Nama Santri 6', 'Aktif', 3),
(25, '18230', 'Nama Santri 7', 'Aktif', 4),
(26, '18231', 'Nama Santri 8', 'Aktif', 4),
(27, '18241', 'Nama Santri 9', 'Aktif', 5),
(28, '18242', 'Nama Santri 10', 'Aktif', 5),
(29, '17161', 'Nama Santri 11', 'Aktif', 6),
(30, '17162', 'Nama Santri 12', 'Aktif', 6),
(31, '16120', 'Nama Santri 13', 'Aktif', 7),
(32, '16121', 'Nama Santri 14', 'Aktif', 7),
(33, '15086', 'Nama Santri 15', 'Aktif', 8),
(34, '15087', 'Nama Santri 16', 'Aktif', 8),
(35, '14059', 'Nama Santri 17', 'Aktif', 9),
(36, '14060', 'Nama Santri 18', 'Aktif', 9),
(37, '18220', 'Nama Santri 19', 'Aktif', 1),
(38, '18221', 'Nama Santri 20', 'Aktif', 1),
(39, '18222', 'Nama Santri 21', 'Aktif', 1),
(40, '18223', 'Nama Santri 22', 'Aktif', 1),
(41, '18224', 'Nama Santri 23', 'Aktif', 1),
(42, '18225', 'Nama Santri 24', 'Aktif', 1),
(43, '18226', 'Nama Santri 25', 'Aktif', 1),
(44, '19271', 'Nama Santri 26', 'Aktif', 2),
(45, '19272', 'Nama Santri 27', 'Aktif', 2),
(46, '19273', 'Nama Santri 28', 'Aktif', 2),
(47, '19274', 'Nama Santri 29', 'Aktif', 2),
(48, '19275', 'Nama Santri 30', 'Aktif', 2),
(49, '19276', 'Nama Santri 31', 'Aktif', 2),
(50, '19282', 'Nama Santri 32', 'Aktif', 3),
(51, '19283', 'Nama Santri 33', 'Aktif', 3),
(52, '19284', 'Nama Santri 34', 'Aktif', 3),
(53, '19285', 'Nama Santri 35', 'Aktif', 3),
(54, '19286', 'Nama Santri 36', 'Aktif', 3),
(55, '19287', 'Nama Santri 37', 'Aktif', 3),
(56, '19288', 'Nama Santri 38', 'Aktif', 3),
(57, '19289', 'Nama Santri 39', 'Aktif', 3),
(58, '18231', 'Nama Santri 40', 'Aktif', 4),
(59, '18232', 'Nama Santri 41', 'Aktif', 4),
(60, '18233', 'Nama Santri 42', 'Aktif', 4),
(61, '18234', 'Nama Santri 43', 'Aktif', 4),
(62, '18235', 'Nama Santri 44', 'Aktif', 4),
(63, '18236', 'Nama Santri 45', 'Aktif', 4),
(64, '18237', 'Nama Santri 46', 'Aktif', 4),
(65, '18242', 'Nama Santri 47', 'Aktif', 5),
(66, '18243', 'Nama Santri 48', 'Aktif', 5),
(67, '18244', 'Nama Santri 49', 'Aktif', 5),
(68, '18245', 'Nama Santri 50', 'Aktif', 5),
(69, '18246', 'Nama Santri 51', 'Aktif', 5),
(70, '18247', 'Nama Santri 52', 'Aktif', 5),
(71, '18248', 'Nama Santri 53', 'Aktif', 5),
(72, '18249', 'Nama Santri 54', 'Aktif', 5),
(73, '17162', 'Nama Santri 55', 'Aktif', 6),
(74, '17163', 'Nama Santri 56', 'Aktif', 6),
(75, '17164', 'Nama Santri 57', 'Aktif', 6),
(76, '17165', 'Nama Santri 58', 'Aktif', 6),
(77, '17166', 'Nama Santri 59', 'Aktif', 6),
(78, '17167', 'Nama Santri 60', 'Aktif', 6),
(79, '17168', 'Nama Santri 61', 'Aktif', 6),
(80, '17169', 'Nama Santri 62', 'Aktif', 6),
(81, '16120', 'Nama Santri 63', 'Aktif', 7),
(82, '16121', 'Nama Santri 64', 'Aktif', 7),
(83, '16122', 'Nama Santri 65', 'Aktif', 7),
(84, '16123', 'Nama Santri 66', 'Aktif', 7),
(85, '16124', 'Nama Santri 67', 'Aktif', 7),
(86, '16125', 'Nama Santri 68', 'Aktif', 7),
(87, '16126', 'Nama Santri 69', 'Aktif', 7),
(88, '16127', 'Nama Santri 70', 'Aktif', 7),
(89, '15087', 'Nama Santri 71', 'Aktif', 8),
(90, '15088', 'Nama Santri 72', 'Aktif', 8),
(91, '15089', 'Nama Santri 73', 'Aktif', 8),
(92, '15090', 'Nama Santri 74', 'Aktif', 8),
(93, '15091', 'Nama Santri 75', 'Aktif', 8),
(94, '15092', 'Nama Santri 76', 'Aktif', 8),
(95, '15093', 'Nama Santri 77', 'Aktif', 8),
(96, '14060', 'Nama Santri 78', 'Aktif', 9),
(97, '14061', 'Nama Santri 79', 'Aktif', 9),
(98, '14062', 'Nama Santri 80', 'Aktif', 9),
(99, '14063', 'Nama Santri 81', 'Aktif', 9),
(100, '14064', 'Nama Santri 82', 'Aktif', 9),
(101, '14065', 'Nama Santri 83', 'Aktif', 9),
(102, '14066', 'Nama Santri 84', 'Aktif', 9);

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
(6, 1, 1, 3, 3, '2020-08-17', '2020-08-23', 6),
(7, 1, 1, 3, 3, '2020-08-24', '2020-08-30', 7),
(8, 1, 1, 3, 3, '2020-08-31', '2020-09-06', 8),
(9, 1, 1, 3, 3, '2020-09-07', '2020-09-13', 9),
(10, 2, 1, 3, 3, '2020-08-17', '2020-08-23', 6),
(11, 2, 1, 3, 3, '2020-08-24', '2020-08-30', 7),
(12, 2, 1, 3, 3, '2020-08-31', '2020-09-06', 8),
(13, 2, 1, 3, 3, '2020-09-07', '2020-09-13', 9),
(14, 3, 1, 3, 3, '2020-08-17', '2020-08-23', 6),
(15, 3, 1, 3, 3, '2020-08-24', '2020-08-30', 7),
(16, 3, 1, 3, 3, '2020-08-31', '2020-09-06', 8),
(17, 3, 1, 3, 3, '2020-09-07', '2020-09-13', 9),
(18, 4, 1, 3, 3, '2020-08-17', '2020-08-23', 6),
(19, 4, 1, 3, 3, '2020-08-24', '2020-08-30', 7),
(20, 4, 1, 3, 3, '2020-08-31', '2020-09-06', 8),
(21, 4, 1, 3, 3, '2020-09-07', '2020-09-13', 9),
(22, 5, 1, 3, 3, '2020-08-17', '2020-08-23', 6),
(23, 5, 1, 3, 3, '2020-08-24', '2020-08-30', 7),
(24, 5, 1, 3, 3, '2020-08-31', '2020-09-06', 8),
(25, 5, 1, 3, 3, '2020-09-07', '2020-09-13', 9),
(26, 6, 1, 3, 3, '2020-08-17', '2020-08-23', 6),
(27, 6, 1, 3, 3, '2020-08-24', '2020-08-30', 7),
(28, 6, 1, 3, 3, '2020-08-31', '2020-09-06', 8),
(29, 6, 1, 3, 3, '2020-09-07', '2020-09-13', 9),
(30, 7, 1, 3, 3, '2020-08-17', '2020-08-23', 6),
(31, 7, 1, 3, 3, '2020-08-24', '2020-08-30', 7),
(32, 7, 1, 3, 3, '2020-08-31', '2020-09-06', 8),
(33, 7, 1, 3, 3, '2020-09-07', '2020-09-13', 9),
(34, 8, 1, 3, 3, '2020-08-17', '2020-08-23', 6),
(35, 8, 1, 3, 3, '2020-08-24', '2020-08-30', 7),
(36, 8, 1, 3, 3, '2020-08-31', '2020-09-06', 8),
(37, 8, 1, 3, 3, '2020-09-07', '2020-09-13', 9),
(38, 9, 1, 3, 3, '2020-08-17', '2020-08-23', 6),
(39, 9, 1, 3, 3, '2020-08-24', '2020-08-30', 7),
(40, 9, 1, 3, 3, '2020-08-31', '2020-09-06', 8),
(41, 9, 1, 3, 3, '2020-09-07', '2020-09-13', 9);

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
  MODIFY `IdCatatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `detailjeniscatatan`
--
ALTER TABLE `detailjeniscatatan`
  MODIFY `IdDetailJenisCatatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `detailkelompok`
--
ALTER TABLE `detailkelompok`
  MODIFY `IdDetailKelompok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `detailtarget`
--
ALTER TABLE `detailtarget`
  MODIFY `IdDetailTarget` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `hasilujian`
--
ALTER TABLE `hasilujian`
  MODIFY `IdHasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  MODIFY `IdMusyrif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

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
  MODIFY `IdPeriodeUjian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `IdRekap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `rekapujian`
--
ALTER TABLE `rekapujian`
  MODIFY `IdUjian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `IdSemester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `setorantarget`
--
ALTER TABLE `setorantarget`
  MODIFY `IdSetoran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `IdSiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `target`
--
ALTER TABLE `target`
  MODIFY `IdTarget` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
