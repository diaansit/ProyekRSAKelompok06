-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2020 at 09:15 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psw`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `no_kamar` char(5) NOT NULL,
  `harga_kamar` bigint(15) NOT NULL,
  `fasilitas_kamar` text NOT NULL,
  `status_kamar` int(2) NOT NULL,
  `id_kelas_kamar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `no_kamar`, `harga_kamar`, `fasilitas_kamar`, `status_kamar`, `id_kelas_kamar`) VALUES
(1, '110', 981818, '<p><span style=\"font-size: 1rem;\">Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain.&nbsp;</span><br></p><p>Fasilitas Kamar :&nbsp;</p> AC&nbsp;, TV, Minibar,&nbsp;Brankas,&nbsp;Tempat tidur yang nyaman, Kamar mandi, Akses internet', 1, 1),
(2, '118', 981818, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet', 0, 1),
(3, '210', 981818, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet', 0, 1),
(4, '218', 981818, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet', 0, 1),
(5, '309', 981818, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet', 0, 1),
(6, '316', 981818, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet', 1, 1),
(7, '109', 454545, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet dan Tanpa Sarapan', 0, 3),
(8, '209', 454545, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet dan Tanpa Sarapan', 0, 3),
(9, '101', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(10, '102', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(11, '103', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(12, '105', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(13, '106', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(14, '107', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(15, '108', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(16, '111', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(17, '112', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(18, '115', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(19, '116', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(20, '117', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(21, '201', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(22, '202', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain.&nbsp;</p><p><br></p><p>Fasilitas Kamar :&nbsp;</p><p>- AC&nbsp;</p><p>- TV&nbsp;</p><p>- Minibar&nbsp;</p><p>- Brankas&nbsp;</p><p>- Tempat tidur yang nyaman&nbsp;</p><p>- Kamar mandi&nbsp;</p><p>- Akses internet</p><p>- Dengan sarapan</p>', 0, 2),
(23, '203', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(24, '205', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(25, '206', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(26, '207', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain.&nbsp;</p><p><br></p><p>Fasilitas Kamar :&nbsp;</p><p>- AC&nbsp;</p><p>- TV&nbsp;</p><p>- Minibar&nbsp;</p><p>- Brankas&nbsp;</p><p>- Tempat tidur yang nyaman&nbsp;</p><p>- Kamar mandi&nbsp;</p><p>- Akses internet</p><p>- Dengan sarapan</p>', 0, 2),
(27, '208', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(28, '211', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(29, '212', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(30, '215', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(31, '216', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(32, '217', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(33, '301', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(34, '302', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(35, '303', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(36, '305', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(37, '306', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(38, '307', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(39, '308', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(40, '311', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(41, '312', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(42, '315', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 1, 2),
(43, '316', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2),
(44, '317', 568595, '<p>Kamar dirancang demi kenyamanan anda selama menginap . Dilengkapi fasilitas seperti AC, TV dan lain-lain. </p><p>Fasilitas Kamar : </p> AC , TV, Minibar, Brankas, Tempat tidur yang nyaman, Kamar mandi, Akses internet, Dengan Sarapan', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `kamar_gambar`
--

CREATE TABLE `kamar_gambar` (
  `id_kamar_gambar` int(11) NOT NULL,
  `nama_kamar_gambar` varchar(50) NOT NULL,
  `id_kamar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar_gambar`
--

INSERT INTO `kamar_gambar` (`id_kamar_gambar`, `nama_kamar_gambar`, `id_kamar`) VALUES
(1, 'nama_kamar_gambar1574452364.jpg', 1),
(4, 'nama_kamar_gambar1574464177.jpg', 2),
(5, 'nama_kamar_gambar1574464197.jpeg', 3),
(6, 'nama_kamar_gambar1574464209.jpg', 4),
(7, 'nama_kamar_gambar1574464217.jpg', 5),
(8, 'nama_kamar_gambar1574464228.jpg', 6),
(9, 'nama_kamar_gambar1574464551.jpg', 2),
(10, 'nama_kamar_gambar1574692697.jpg', 7),
(11, 'nama_kamar_gambar1574692704.jpg', 8),
(12, 'nama_kamar_gambar1574692715.jpg', 9),
(13, 'nama_kamar_gambar1574692739.jpg', 10),
(14, 'nama_kamar_gambar1574700111.jpg', 11),
(15, 'nama_kamar_gambar1574700126.jpg', 12),
(16, 'nama_kamar_gambar1574700138.jpg', 13),
(17, 'nama_kamar_gambar1574700156.jpg', 14),
(18, 'nama_kamar_gambar1574700164.jpg', 15),
(19, 'nama_kamar_gambar1574700173.jpg', 16),
(20, 'nama_kamar_gambar1574700183.jpg', 17),
(21, 'nama_kamar_gambar1574700195.jpeg', 18),
(22, 'nama_kamar_gambar1574700204.jpg', 19),
(23, 'nama_kamar_gambar1574700212.jpg', 20),
(24, 'nama_kamar_gambar1574700221.jpg', 21),
(25, 'nama_kamar_gambar1574700229.jpg', 22),
(26, 'nama_kamar_gambar1574700237.jpg', 23),
(27, 'nama_kamar_gambar1574700247.jpg', 24),
(28, 'nama_kamar_gambar1574700254.jpg', 25),
(29, 'nama_kamar_gambar1574700263.jpg', 26),
(30, 'nama_kamar_gambar1574700274.jpg', 27),
(31, 'nama_kamar_gambar1574700281.jpg', 28),
(32, 'nama_kamar_gambar1574700289.jpg', 29),
(33, 'nama_kamar_gambar1574700298.jpeg', 30),
(34, 'nama_kamar_gambar1574700306.jpeg', 31),
(35, 'nama_kamar_gambar1574700314.jpg', 32),
(36, 'nama_kamar_gambar1574700322.jpg', 33),
(37, 'nama_kamar_gambar1574700331.jpg', 34),
(38, 'nama_kamar_gambar1574700338.jpg', 35),
(39, 'nama_kamar_gambar1574700345.jpg', 36),
(40, 'nama_kamar_gambar1574700353.jpg', 37),
(41, 'nama_kamar_gambar1574700360.jpg', 38),
(42, 'nama_kamar_gambar1574700367.jpg', 39),
(43, 'nama_kamar_gambar1574700377.jpg', 40),
(44, 'nama_kamar_gambar1574700387.jpg', 41),
(45, 'nama_kamar_gambar1574700395.jpg', 42),
(46, 'nama_kamar_gambar1574700403.jpg', 43),
(47, 'nama_kamar_gambar1574700410.jpg', 44),
(48, 'nama_kamar_gambar1574752414.jpg', 1),
(49, 'nama_kamar_gambar1574752424.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kelas_kamar`
--

CREATE TABLE `kelas_kamar` (
  `id_kelas_kamar` int(11) NOT NULL,
  `nama_kelas_kamar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas_kamar`
--

INSERT INTO `kelas_kamar` (`id_kelas_kamar`, `nama_kelas_kamar`) VALUES
(1, 'KELAS SUITE'),
(2, 'KELAS DELUXE'),
(3, 'KELAS DELUXE ROOM ONLY');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `nama_reservasi` varchar(25) NOT NULL,
  `tlp_reservasi` varchar(12) NOT NULL,
  `alamat_reservasi` text NOT NULL,
  `tgl_reservasi_masuk` date NOT NULL,
  `tgl_reservasi_keluar` date NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `status_reservasi` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `nama_reservasi`, `tlp_reservasi`, `alamat_reservasi`, `tgl_reservasi_masuk`, `tgl_reservasi_keluar`, `id_kamar`, `status_reservasi`) VALUES
(1, 'yoga', '085210662437', 'river valley\r\n', '2019-11-27', '2019-11-28', 1, 2),
(2, 'alamaheyyy', '098760987', 'semlaheyy', '2019-11-28', '2019-11-30', 44, 2),
(3, 'anjay', '0862628682', 'anjay mabar\r\n', '2019-11-28', '2019-12-01', 43, 2),
(4, 'tegetrg', '0850805', 'cfdsfds', '2019-11-29', '2019-11-30', 35, 2),
(5, 'yoga', '085210662437', 'river valley\r\n', '2019-12-04', '2019-12-31', 1, 1),
(6, 'malih', '0876788768', 'ciputat', '2019-12-05', '2019-12-07', 7, 2),
(7, 'yoga', '085210662437', 'river valley', '2019-12-06', '2019-12-10', 42, 1),
(8, 'Ahmad Sentosa', '08519283912', 'Jl. Hoseruya', '2019-12-10', '2019-12-11', 6, 1),
(9, 'SarjanaKomedi', '0851928391', 'Jl. Hello World', '2020-01-01', '2020-01-02', 5, 0),
(0, 'Pahala', '081370972651', 'Jalan atser raya no.169', '2020-06-07', '2020-06-10', 4, 0),
(0, 'Pahala', '081370972651', 'Jalan Aster raya no.169', '2020-06-13', '2020-06-11', 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reservasi_pembayaran`
--

CREATE TABLE `reservasi_pembayaran` (
  `id_reservasi_pembayaran` int(11) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `nominal_pembayaran` int(11) NOT NULL,
  `uang_bayar` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL,
  `id_reservasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservasi_pembayaran`
--

INSERT INTO `reservasi_pembayaran` (`id_reservasi_pembayaran`, `tgl_pembayaran`, `nominal_pembayaran`, `uang_bayar`, `kembalian`, `id_reservasi`) VALUES
(1, '2019-11-27', 981818, 1000000, 18182, 1),
(2, '2019-11-28', 1137190, 2000000, 862810, 2),
(3, '2019-11-28', 1705785, 1800000, 94215, 3),
(4, '2019-12-03', 568595, 600000, 31405, 4),
(5, '2019-12-05', 909090, 1000000, 90910, 6);

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL,
  `nama_saran` varchar(50) NOT NULL,
  `email_saran` varchar(25) NOT NULL,
  `tlp_saran` bigint(15) NOT NULL,
  `isi_saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id_saran`, `nama_saran`, `email_saran`, `tlp_saran`, `isi_saran`) VALUES
(1, 'test saran', 'test@saran.com', 1282381239, 'ini adalah percobaan untuk saran');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `username` varchar(25) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `username`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Mohamad Muqiit Faturrahman', 'mmuqiit.f14@gmail.com', 'mmuqiit', '7H.jpg', '$2y$10$mTfO4jnUarsSJHPk8ElqdOOkMd9cJo.whKU/VUtgf0IBh/D0hU0tu', 1, 1, 1560266129),
(3, 'Syifaa', 'Ipaa2240@gmail.com', 'sipaa', 'default.jpg', '$2y$10$toNUiK/n2LPee1FLIZEha.4ph87tQxBIMwpNTbJ9VcRmGrlEGsPey', 2, 1, 1560692251),
(5, 'Fatur', 'fmohamadmuqiit@yahoo.com', 'fmuqiit', 'default.jpg', '$2y$10$05h7FBK9WCPMyHuLTaAkXOkIveyM.fWlQksYnjQs.BjwbjixUg.Ty', 2, 1, 1561043938);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `tanggallahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `phone`, `tanggallahir`, `alamat`, `kota`, `role_id`, `is_active`) VALUES
(14, 'asidopanjaitan', '$2y$10$41wfM14FKO8bIO.7VPGlQ.XziKRLK1C8QUJ0NEhH1GmBLZDLTPv5e', 'asidopanjaitan67@gmail.com', '081314668846', '2002-02-20', 'Jalan Patuan Anggi No.45', 'Porsea', 2, 1),
(15, 'asidoganteng', '$2y$10$CBQBmFC.KoUjhswwmolXOuo6txhbzzlXYUybtqE4OTWbbJxslHjFu', 'asidoganteng@gmail.com', '081314668846', '2002-02-20', 'Jalan Patuan Anggi No.45', 'Porsea', 2, 1),
(16, 'pahala', '$2y$10$fy5sKF3wfBcZstboX0TF9O1BLWBGJ2Hdh0KDOu52N/9qvHfmpRxya', 'pahala.picauly@gmail.com', '081370972651', '2001-12-11', 'jln.aster raya no.101', 'Medan', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(6, 1, 3),
(7, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepass', 'fas fa-fw fa-key', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
