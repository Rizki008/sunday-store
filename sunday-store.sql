-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2023 at 08:01 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sunday-store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'sandi', '12341234', 1),
(2, 'ajeng', '12341234', 2);

-- --------------------------------------------------------

--
-- Table structure for table `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `id_detail` varchar(50) NOT NULL,
  `id_pesanan` varchar(50) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_pesanan`
--

INSERT INTO `detail_pesanan` (`id_detail`, `id_pesanan`, `id_produk`, `qty`) VALUES
('1', '20230623MGAJS612', 1, 1),
('10', '20230623MGAHAS1', 10, 2),
('11', '20230623MGAJS617', 11, 3),
('12', '20230623MGALAKR1', 12, 4),
('13', '20230623MGAJS618', 13, 1),
('14', '20230623MGAPL12D', 14, 1),
('15', '20230623MGAJS619', 15, 2),
('16', '20230623MGPLT81D', 16, 1),
('17', '20230623MGAJS620', 17, 4),
('18', '20230623AAMJS81D', 18, 1),
('19', '20230623MGAJS621', 19, 1),
('2', '20230623MGAJS816', 1, 6),
('20', '20230623MLMQS81D', 20, 1),
('21', '20230623MGAJS622', 21, 1),
('22', '20230623MBFJS81D', 22, 2),
('23', '20230623MGAJS623', 23, 4),
('24', '20230623MGPLQ81D', 24, 1),
('25', '20230623MGAJS624', 25, 2),
('26', '20230623MGLQS81D', 26, 1),
('27', '20230623MGAJS625', 27, 1),
('28', '20230623MGAMVN1D', 28, 1),
('29', '20230623MGAJS626', 29, 2),
('3', '20230623MGAJS613', 1, 1),
('30', '20230623MLHM81D', 30, 1),
('31', '20230623MGAJS627', 31, 1),
('32', '20230623MZ12S81D', 32, 1),
('33', '20230623MGAJS628', 33, 3),
('34', '20230623MGAJSLAD', 34, 1),
('35', '20230623MGAJS629', 35, 15),
('36', '20230623MGAJSALX', 36, 3),
('37', '20230623MGAJS630', 37, 1),
('38', '20230623MGAJ10AZ', 38, 1),
('39', '20230623MGAJS631', 39, 1),
('4', '20230623MASM81D', 2, 1),
('40', '20230623MGAJS10A', 40, 1),
('41', '20230623MGAJS632', 41, 3),
('42', '20230623MLQMZ81D', 42, 1),
('43', '20230623MGAJS633', 43, 1),
('44', '20230623MPQM81D', 44, 2),
('45', '20230623MGAJS634', 45, 1),
('46', '20230623MLAKQ81D', 46, 2),
('47', '20230623MGAJS635', 47, 1),
('48', '20230623MGKAJS12', 48, 2),
('49', '20230623MGAJS636', 49, 2),
('5', '20230623MGAJS614', 5, 3),
('50', '20230623MGKAJS13', 50, 1),
('51', '20230623MGAJS637', 51, 9),
('52', '20230623MGKAJS14', 52, 4),
('53', '20230623MGAJS638', 53, 19),
('54', '20230623MGKAJS15', 54, 3),
('55', '20230623MGAJS639', 55, 111),
('56', '20230623MGKAJS16', 56, 16),
('57', '20230623MGAJS640', 57, 9),
('58', '20230623MGKAJS17', 58, 3),
('59', '20230623MGAJS641', 59, 1),
('6', '20230623LASQJS81D', 9, 2),
('60', '20230623MGKAJS18', 60, 1),
('61', '20230623MGAJS642', 61, 7),
('62', '20230623MGKAJS19', 62, 4),
('63', '20230623MGAJS643', 63, 3),
('64', '20230623MGKAJS20', 64, 1),
('65', '20230623MGAJS644', 65, 26),
('66', '20230623MGKAJS21', 66, 13),
('67', '20230623MGAJS645', 67, 1),
('68', '20230623MGKAJS22', 68, 41),
('69', '20230623MGAJS646', 69, 18),
('7', '20230623MGAJS615', 7, 3),
('70', '20230623MGKAJS23', 70, 1),
('71', '20230623MGAJS647', 71, 1),
('72', '20230623MGKAJS24', 72, 2),
('73', '20230623MGAJS648', 73, 1),
('74', '20230623MGKAJS25', 74, 1),
('75', '20230623MGAJS649', 75, 10),
('76', '20230623MGKAJS26', 76, 2),
('77', '20230623MGAJS650', 77, 1),
('78', '20230623MGKAJS27', 78, 14),
('79', '20230623MGAJS651', 79, 1),
('8', '20230623MGSDK1D', 11, 1),
('80', '20230623MGKAJS28', 80, 1),
('81', '20230623MGAJS652', 81, 4),
('82', '20230623MGKAJS29', 82, 2),
('83', '20230623MGAJS653', 83, 4),
('84', '20230623MGKAJS30', 84, 1),
('85', '20230623MGAJS654', 85, 3),
('86', '20230623MGKAJS31', 86, 4),
('87', '20230623MGAJS655', 87, 1),
('9', '20230623MGAJS616', 1, 5),
('oPrB3', '202307200N7ZEIVO', 86, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `produk` int(11) DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `produk`, `gambar`, `keterangan`) VALUES
(5, 1, 'product-detalis-l1.jpg', 'gambar 1'),
(6, 1, 'product-detalis-l2.jpg', 'gambar 2'),
(7, 1, 'product-detalis-l3.jpg', 'gambar 3'),
(8, 1, 'product-detalis-s4.jpg', 'gambar 4'),
(9, 1, 'product-detalis-s1.jpg', 'gambar 5'),
(10, 3, 'product-detalis-l11.jpg', 'gambar 1'),
(12, 3, 'product-detalis-l22.jpg', 'gambar 2'),
(14, 47, 'WhatsApp_Image_2023-07-09_at_16_40_26_(2)1.jpeg', 'gambar 1'),
(15, 47, 'WhatsApp_Image_2023-07-09_at_16_40_26.jpeg', 'gambar 2');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(2, 'sepatu'),
(3, 'topi');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) DEFAULT NULL,
  `nohp_pelanggan` varchar(17) DEFAULT NULL,
  `jenis_kelamin` varchar(11) DEFAULT NULL,
  `email_pelanggan` varchar(50) DEFAULT NULL,
  `password_pelanggan` varchar(50) DEFAULT NULL,
  `alamat_pelanggan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `nohp_pelanggan`, `jenis_kelamin`, `email_pelanggan`, `password_pelanggan`, `alamat_pelanggan`) VALUES
(1, 'nazar', '089121219218', 'laki-laki', 'nazar@gmail.com', '12341234', 'kuningan'),
(2, 'elsa', '089121219218', 'perempuan', 'elsa@gmail.com', '12341234', 'kuningan'),
(3, 'sandi', '089121219218', 'laki-laki', 'sandi@gmail.com', '12341234', 'kuningan');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pesanan` varchar(50) DEFAULT NULL,
  `bukti_bayar` text DEFAULT NULL,
  `atas_nama` varchar(50) DEFAULT NULL,
  `status_pembayaran` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pesanan`, `bukti_bayar`, `atas_nama`, `status_pembayaran`) VALUES
(1, '20230623MGAJS612', '0', '0', 0),
(2, '20230623MGAJS816', '0', '0', 0),
(3, '20230623MGAJS613', '0', '0', 0),
(4, '20230623MASM81D', '0', '0', 0),
(5, '20230623MGAJS614', '0', '0', 0),
(6, '20230623LASQJS81D', '0', '0', 0),
(7, '20230623MGAJS615', '0', '0', 0),
(8, '20230623MGSDK1D', '0', '0', 0),
(9, '20230623MGAJS616', '0', '0', 0),
(10, '20230623MGAHAS1', '0', '0', 0),
(11, '20230623MGAJS617', '0', '0', 0),
(12, '20230623MGALAKR1', '0', '0', 0),
(13, '20230623MGAJS618', '0', '0', 0),
(14, '20230623MGAPL12D', '0', '0', 0),
(15, '20230623MGAJS619', '0', '0', 0),
(16, '20230623MGPLT81D', '0', '0', 0),
(17, '20230623MGAJS620', '0', '0', 0),
(18, '20230623AAMJS81D', '0', '0', 0),
(19, '20230623MGAJS621', '0', '0', 0),
(20, '20230623MLMQS81D', '0', '0', 0),
(21, '20230623MGAJS622', '0', '0', 0),
(22, '20230623MBFJS81D', '0', '0', 0),
(23, '20230623MGAJS623', '0', '0', 0),
(24, '20230623MGPLQ81D', '0', '0', 0),
(25, '20230623MGAJS624', '0', '0', 0),
(26, '20230623MGLQS81D', '0', '0', 0),
(27, '20230623MGAJS625', '0', '0', 0),
(28, '20230623MGAMVN1D', '0', '0', 0),
(29, '20230623MGAJS626', '0', '0', 0),
(30, '20230623MLHM81D', '0', '0', 0),
(31, '20230623MGAJS627', '0', '0', 0),
(32, '20230623MZ12S81D', '0', '0', 0),
(33, '20230623MGAJS628', '0', '0', 0),
(34, '20230623MGAJSLAD', '0', '0', 0),
(35, '20230623MGAJS629', '0', '0', 0),
(36, '20230623MGAJSALX', '0', '0', 0),
(37, '20230623MGAJS630', '0', '0', 0),
(38, '20230623MGAJ10AZ', '0', '0', 0),
(39, '20230623MGAJS631', '0', '0', 0),
(40, '20230623MGAJS10A', '0', '0', 0),
(41, '20230623MGAJS632', '0', '0', 0),
(42, '20230623MLQMZ81D', '0', '0', 0),
(43, '20230623MGAJS633', '0', '0', 0),
(44, '20230623MPQM81D', 'sd1.jpeg', 'Sandi', 1),
(45, '20230623MGAJS634', '0', '0', 0),
(46, '20230623MLAKQ81D', '0', '0', 0),
(47, '20230623MGAJS635', '0', '0', 0),
(48, '20230623MGKAJS12', '0', '0', 0),
(49, '20230623MGAJS636', '0', '0', 0),
(50, '20230623MGKAJS13', '0', '0', 0),
(51, '20230623MGAJS637', '0', '0', 0),
(52, '20230623MGKAJS14', '0', '0', 0),
(53, '20230623MGAJS638', '0', '0', 0),
(54, '20230623MGKAJS15', '0', '0', 0),
(55, '20230623MGAJS639', '0', '0', 0),
(56, '20230623MGKAJS16', '0', '0', 0),
(57, '20230623MGAJS640', '0', '0', 0),
(58, '20230623MGKAJS17', '0', '0', 0),
(59, '20230623MGAJS641', '0', '0', 0),
(60, '20230623MGKAJS18', '0', '0', 0),
(61, '20230623MGAJS642', '0', '0', 0),
(62, '20230623MGKAJS19', '0', '0', 0),
(63, '20230623MGAJS643', '0', '0', 0),
(64, '20230623MGKAJS20', '0', '0', 0),
(65, '20230623MGAJS644', '0', '0', 0),
(66, '20230623MGKAJS21', '0', '0', 0),
(67, '20230623MGAJS645', '0', '0', 0),
(68, '20230623MGKAJS22', '0', '0', 0),
(69, '20230623MGAJS646', '0', '0', 0),
(70, '20230623MGKAJS23', '0', '0', 0),
(71, '20230623MGAJS647', '0', '0', 0),
(72, '20230623MGKAJS24', '0', '0', 0),
(73, '20230623MGAJS648', '0', '0', 0),
(74, '20230623MGKAJS25', '0', '0', 0),
(75, '20230623MGAJS649', '0', '0', 0),
(76, '20230623MGKAJS26', '0', '0', 0),
(77, '20230623MGAJS650', '0', '0', 0),
(78, '20230623MGKAJS27', '0', '0', 0),
(79, '20230623MGAJS651', '0', '0', 0),
(80, '20230623MGKAJS28', '0', '0', 0),
(81, '20230623MGAJS652', '0', '0', 0),
(82, '20230623MGKAJS29', '0', '0', 0),
(83, '20230623MGAJS653', '0', '0', 0),
(84, '20230623MGKAJS30', '0', '0', 0),
(85, '20230623MGAJS654', '0', '0', 0),
(86, '20230623MGKAJS31', '0', '0', 0),
(87, '20230623MGAJS655', '0', '0', 0),
(88, '202307200N7ZEIVO', '0', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` varchar(50) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tanggal_pesanan` date NOT NULL,
  `nohp_penerima` varchar(15) DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `kode_post` varchar(10) DEFAULT NULL,
  `alamat_penerima` text DEFAULT NULL,
  `expedisi` varchar(255) DEFAULT NULL,
  `paket` varchar(255) DEFAULT NULL,
  `estimasi` varchar(255) DEFAULT NULL,
  `ongkir` bigint(20) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `total_harga` bigint(20) DEFAULT NULL,
  `total_bayar` bigint(255) DEFAULT NULL,
  `status_order` int(255) DEFAULT NULL,
  `metode_bayar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_pelanggan`, `tanggal_pesanan`, `nohp_penerima`, `provinsi`, `kota`, `kode_post`, `alamat_penerima`, `expedisi`, `paket`, `estimasi`, `ongkir`, `berat`, `total_harga`, `total_bayar`, `status_order`, `metode_bayar`) VALUES
('20230623AAMJS81D', 1, '2023-02-23', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623LASQJS81D', 2, '2023-02-11', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 2),
('20230623MASM81D', 2, '2023-02-09', '08998767656', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 2),
('20230623MBFJS81D', 1, '2023-02-27', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MGAHAS1', 1, '2023-02-15', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 2),
('20230623MGAJ10AZ', 1, '2023-03-15', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MGAJS10A', 1, '2023-03-17', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MGAJS612', 2, '2023-02-06', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 2),
('20230623MGAJS613', 2, '2023-02-08', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 2),
('20230623MGAJS614', 2, '2023-02-10', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 2),
('20230623MGAJS615', 2, '2023-02-12', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 2),
('20230623MGAJS616', 2, '2023-02-14', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 2),
('20230623MGAJS617', 2, '2023-02-16', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 2),
('20230623MGAJS618', 2, '2023-02-18', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 2),
('20230623MGAJS619', 2, '2023-02-20', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS620', 2, '2023-02-22', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS621', 2, '2023-02-24', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS622', 2, '2023-02-26', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS623', 2, '2023-02-28', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS624', 2, '2023-03-02', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS625', 2, '2023-03-04', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS626', 2, '2023-03-06', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS627', 2, '2023-03-08', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS628', 2, '2023-03-10', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS629', 2, '2023-03-12', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS630', 2, '2023-03-14', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS631', 2, '2023-03-16', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS632', 2, '2023-03-18', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 2),
('20230623MGAJS633', 2, '2023-03-20', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 2),
('20230623MGAJS634', 2, '2023-03-22', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 2),
('20230623MGAJS635', 2, '2023-03-24', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 2),
('20230623MGAJS636', 2, '2023-03-26', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 2),
('20230623MGAJS637', 2, '2023-03-28', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 2),
('20230623MGAJS638', 2, '2023-03-30', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 2),
('20230623MGAJS639', 2, '2023-04-01', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 2),
('20230623MGAJS640', 2, '2023-04-03', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 2),
('20230623MGAJS641', 2, '2023-04-05', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 2),
('20230623MGAJS642', 2, '2023-04-07', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 2),
('20230623MGAJS643', 2, '2023-04-09', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS644', 2, '2023-04-11', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS645', 2, '2023-04-13', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS646', 2, '2023-04-15', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS647', 2, '2023-04-17', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS648', 2, '2023-04-19', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS649', 2, '2023-04-21', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS650', 2, '2023-04-23', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS651', 2, '2023-04-25', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS652', 2, '2023-04-27', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS653', 2, '2023-04-29', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS654', 2, '2023-05-01', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS655', 2, '2023-05-03', '08998767656', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS816', 1, '2023-02-07', '08998767656', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 2),
('20230623MGAJSALX', 1, '2023-03-13', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MGAJSLAD', 1, '2023-03-11', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MGALAKR1', 1, '2023-02-17', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 2),
('20230623MGAMVN1D', 1, '2023-03-05', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MGAPL12D', 1, '2023-02-19', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 2),
('20230623MGKAJS12', 1, '2023-03-25', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 2),
('20230623MGKAJS13', 1, '2023-03-27', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 2),
('20230623MGKAJS14', 2, '2023-03-29', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 2),
('20230623MGKAJS15', 2, '2023-03-31', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 2),
('20230623MGKAJS16', 1, '2023-04-02', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 2),
('20230623MGKAJS17', 1, '2023-04-04', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 2),
('20230623MGKAJS18', 1, '2023-04-06', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 2),
('20230623MGKAJS19', 1, '2023-04-08', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 2),
('20230623MGKAJS20', 1, '2023-04-10', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MGKAJS21', 1, '2023-04-12', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MGKAJS22', 1, '2023-04-14', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MGKAJS23', 1, '2023-04-16', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MGKAJS24', 1, '2023-04-18', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MGKAJS25', 1, '2023-04-20', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MGKAJS26', 1, '2023-04-22', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MGKAJS27', 1, '2023-04-24', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MGKAJS28', 1, '2023-04-26', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MGKAJS29', 1, '2023-04-28', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MGKAJS30', 1, '2023-04-30', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MGKAJS31', 1, '2023-05-02', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MGLQS81D', 1, '2023-03-03', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MGPLQ81D', 1, '2023-03-01', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MGPLT81D', 1, '2023-02-21', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MGSDK1D', 1, '2023-02-13', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 2),
('20230623MLAKQ81D', 1, '2023-03-23', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 2),
('20230623MLHM81D', 1, '2023-03-07', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MLMQS81D', 1, '2023-02-25', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MLQMZ81D', 1, '2023-03-19', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 2),
('20230623MPQM81D', 1, '2023-03-21', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 4, 2),
('20230623MZ12S81D', 1, '2023-03-09', '08567898767', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `kategori` int(11) DEFAULT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `harga` bigint(20) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `diskon` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `kategori`, `nama_produk`, `harga`, `berat`, `diskon`, `stok`, `foto`, `deskripsi`, `status`) VALUES
(1, 2, 'Adidas Blade Spring', 120000, 12, 12, 100, 'product-1.jpg', 'Sepatu', 2),
(2, 3, 'Adidas Boost', 230000, 12, 54, 100, 'product-2.jpg', 'Sepatu', 2),
(3, 2, 'Adidas Cloudfoam', 541000, 32, 0, 100, 'product-3.jpg', 'Sepatu', 3),
(4, 3, 'Adidas Cosmic', 123000, 21, 0, 100, 'product-7.jpg', 'Sepatu', 3),
(5, 2, 'Adidas Court Furry', 430000, 12, 0, 100, 'product-7.jpg', 'Sepatu', 2),
(6, 3, 'Adidas Crazy Explosive', 442700, 12, 0, 100, 'product-7.jpg', 'Sepatu', 3),
(7, 2, 'Adidas Dame', 494000, 23, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(8, 3, 'Adidas Derby', 545300, 32, 0, 100, 'product-7.jpg', 'Sepatu', 3),
(9, 2, 'Adidas Derrick Rose 9', 596600, 42, 21, 100, 'product-7.jpg', 'Sepatu', 1),
(10, 3, 'Adidas Don Issue', 647900, 12, 12, 100, 'product-7.jpg', 'Sepatu', 1),
(11, 2, 'Adidas Explosive', 699200, 54, 41, 100, 'product-7.jpg', 'Sepatu', 1),
(12, 3, 'Adidas Gazelle', 750500, 41, 35, 100, 'product-7.jpg', 'Sepatu', 1),
(13, 2, 'Adidas Goletto', 801800, 64, 34, 100, 'product-7.jpg', 'Sepatu', 1),
(14, 3, 'Adidas Harden', 853100, 12, 21, 100, 'product-7.jpg', 'Sepatu', 1),
(15, 2, 'Adidas Mens Pro Bounce', 904400, 21, 31, 100, 'product-7.jpg', 'Sepatu', 1),
(16, 3, 'Adidas Nets Brokylin', 955700, 22, 64, 100, 'product-7.jpg', 'Sepatu', 1),
(17, 2, 'Adidas Pro Converence', 1007000, 23, 23, 100, 'product-7.jpg', 'Sepatu', 1),
(18, 3, 'Adidas Supernova', 1058300, 32, 19, 100, 'product-7.jpg', 'Sepatu', 1),
(19, 2, 'Adidas Superstar', 1109600, 22, 12, 100, 'product-7.jpg', 'Sepatu', 1),
(20, 3, 'Adidas T-Mac', 1160900, 31, 19, 100, 'product-7.jpg', 'Sepatu', 1),
(21, 2, 'Adidas Treziod', 1212200, 14, 33, 100, 'product-7.jpg', 'Sepatu', 1),
(22, 3, 'Adidas X 16.1', 1263500, 13, 12, 100, 'product-7.jpg', 'Sepatu', 1),
(23, 2, 'Adidas Yezzy', 1314800, 15, 41, 100, 'product-7.jpg', 'Sepatu', 1),
(24, 3, 'Asics Running', 1366100, 16, 34, 100, 'product-7.jpg', 'Sepatu', 1),
(25, 2, 'Converse All Star', 1417400, 12, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(26, 3, 'Diadora Diaga Running', 1468700, 42, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(27, 2, 'Diadora Futsal', 1520000, 43, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(28, 3, 'Li-ning', 1571300, 15, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(29, 2, 'New Balance 220', 1622600, 54, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(30, 3, 'New Balance 237', 1673900, 43, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(31, 2, 'New Balance 300', 1725200, 23, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(32, 3, 'New Balance 327', 1776500, 51, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(33, 2, 'New Balance 420', 1827800, 31, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(34, 3, 'New Balance 530', 1879100, 32, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(35, 2, 'New Balance 574', 1930400, 31, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(36, 3, 'New Balance 580', 1981700, 13, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(37, 2, 'New Balance 608', 2033000, 41, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(38, 3, 'New Balance 850', 2084300, 41, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(39, 2, 'New Balance 860', 2135600, 43, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(40, 3, 'New Balance 878', 2186900, 15, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(41, 2, 'New Balance 997', 2238200, 13, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(42, 3, 'New Balance 998', 2289500, 51, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(43, 2, 'New Balance Coast Ultra', 2340800, 52, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(44, 3, 'New Balance Pro Court', 2392100, 53, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(45, 2, 'New Balance Proctsac', 2443400, 51, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(46, 3, 'New Balance Running', 2494700, 23, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(47, 2, 'New Balance Vazee', 2546000, 12, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(48, 2, 'New Balance Women\'s ', 596600, 12, 12, 100, 'product-1.jpg', 'Sepatu', 1),
(49, 3, 'New Balance X90', 647900, 23, 54, 100, 'product-2.jpg', 'Sepatu', 1),
(50, 2, 'Nike ACG', 699200, 32, 0, 100, 'product-3.jpg', 'Sepatu', 1),
(51, 3, 'Nike Air Flight', 750500, 42, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(52, 2, 'Nike Air Foamposite', 801800, 12, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(53, 3, 'Nike Air Force', 853100, 54, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(54, 2, 'Nike Air Huarache', 904400, 41, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(55, 3, 'Nike Air Jordan', 955700, 64, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(56, 2, 'Nike Air Max', 1007000, 12, 21, 100, 'product-7.jpg', 'Sepatu', 1),
(57, 3, 'Nike Air Zoom', 1058300, 21, 12, 100, 'product-7.jpg', 'Sepatu', 1),
(58, 2, 'Nike Blazer', 1109600, 22, 41, 100, 'product-7.jpg', 'Sepatu', 1),
(59, 3, 'Nike Cortez', 1160900, 23, 35, 100, 'product-7.jpg', 'Sepatu', 1),
(60, 2, 'Nike Court', 1212200, 32, 34, 100, 'product-7.jpg', 'Sepatu', 1),
(61, 3, 'Nike Dunk Low', 1263500, 22, 21, 100, 'product-7.jpg', 'Sepatu', 1),
(62, 2, 'Nike Freak', 1314800, 31, 31, 100, 'product-7.jpg', 'Sepatu', 1),
(63, 3, 'Nike Hyperdunk', 1366100, 14, 64, 100, 'product-7.jpg', 'Sepatu', 1),
(64, 2, 'Nike Intermasioanlist', 1417400, 13, 23, 100, 'product-7.jpg', 'Sepatu', 1),
(65, 3, 'Nike Kevin Durant', 1468700, 15, 19, 100, 'product-7.jpg', 'Sepatu', 1),
(66, 2, 'Nike Kobe ', 1520000, 16, 12, 100, 'product-7.jpg', 'Sepatu', 1),
(67, 3, 'Nike Kwazi', 1571300, 12, 19, 100, 'product-7.jpg', 'Sepatu', 1),
(68, 2, 'Nike Kyrie', 1622600, 42, 33, 100, 'product-7.jpg', 'Sepatu', 1),
(69, 3, 'Nike Lebron James', 1673900, 43, 12, 100, 'product-7.jpg', 'Sepatu', 1),
(70, 2, 'Nike M2K', 1725200, 15, 41, 100, 'product-7.jpg', 'Sepatu', 1),
(71, 3, 'Nike Mercurial', 1776500, 54, 34, 100, 'product-7.jpg', 'Sepatu', 1),
(72, 2, 'Nike Paul George', 1827800, 43, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(73, 3, 'Nike Renew Elevate', 1879100, 23, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(74, 2, 'Nike Roshe One', 1930400, 51, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(75, 3, 'Nike Running ', 1981700, 31, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(76, 2, 'Nike Tiempo', 2033000, 32, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(77, 3, 'Onitsuka Tiger Kill Bill', 2084300, 31, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(78, 2, 'Onitsuka Tiger Meksiko', 2135600, 13, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(79, 3, 'Puma Fusion', 2186900, 41, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(80, 2, 'Puma Ignite', 2238200, 41, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(81, 3, 'Puma TX', 2289500, 43, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(82, 2, 'Skecher D\'Lite', 2340800, 15, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(83, 3, 'Skecher Go Walk', 2392100, 13, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(84, 2, 'Soucony Cohesion', 2443400, 51, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(85, 3, 'Timberland', 2494700, 52, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(86, 2, 'Under Armour Stephen', 2546000, 53, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(87, 3, 'Vans SK', 2546000, 51, 0, 100, 'product-7.jpg', 'Sepatu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(1) NOT NULL,
  `nama_toko` varchar(50) DEFAULT NULL,
  `lokasi` int(11) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_telpon` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `nama_toko`, `lokasi`, `alamat`, `no_telpon`) VALUES
(1, 'Sunday Store', 211, 'Kuningan', '085754785529');

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `id_detail` varchar(50) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `ulasan` text DEFAULT NULL,
  `tanggal_ulasan` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status_ulasan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id_ulasan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
