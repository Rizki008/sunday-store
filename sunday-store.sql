-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2023 at 12:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
('1', '20230623MGAJS612', 1, 3),
('10', '20230623MGAHAS1', 10, 2),
('11', '20230623MGAJS617', 11, 3),
('12', '20230623MGALAKR1', 12, 1),
('13', '20230623MGAJS618', 13, 1),
('14', '20230623MGAPL12D', 14, 1),
('15', '20230623MGAJS619', 15, 1),
('16', '20230623MGPLT81D', 16, 1),
('17', '20230623MGAJS620', 17, 3),
('18', '20230623AAMJS81D', 18, 1),
('19', '20230623MGAJS621', 19, 13),
('2', '20230623MGAJS816', 2, 1),
('20', '20230623MLMQS81D', 20, 3),
('21', '20230623MGAJS622', 21, 1),
('22', '20230623MBFJS81D', 22, 1),
('23', '20230623MGAJS623', 23, 3),
('24', '20230623MGPLQ81D', 24, 1),
('25', '20230623MGAJS624', 25, 1),
('26', '20230623MGLQS81D', 26, 1),
('27', '20230623MGAJS625', 27, 1),
('28', '20230623MGAMVN1D', 28, 1),
('29', '20230623MGAJS626', 29, 2),
('3', '20230623MGAJS613', 3, 1),
('30', '20230623MLHM81D', 30, 2),
('31', '20230623MGAJS627', 31, 9),
('32', '20230623MZ12S81D', 32, 39),
('33', '20230623MGAJS628', 33, 5),
('34', '20230623MGAJSLAD', 34, 2),
('35', '20230623MGAJS629', 35, 4),
('36', '20230623MGAJSALX', 36, 5),
('37', '20230623MGAJS630', 37, 14),
('38', '20230623MGAJ10AZ', 38, 12),
('39', '20230623MGAJS631', 39, 1),
('4', '20230623MASM81D', 4, 3),
('40', '20230623MGAJS10A', 40, 1),
('41', '20230623MGAJS632', 41, 1),
('42', '20230623MLQMZ81D', 42, 4),
('43', '20230623MGAJS633', 43, 1),
('44', '20230623MPQM81D', 44, 9),
('45', '20230623MGAJS634', 45, 1),
('46', '20230623MLAKQ81D', 46, 2),
('47', '20230623MGAJS635', 47, 2),
('48', '20230623MGKAJS12', 1, 1),
('49', '20230709AJR7TUCL', 2, 1),
('5', '20230623MGAJS614', 5, 1),
('50', '20230709BHVQGCAJ', 2, 1),
('51', '20230709MIMRRBT9', 2, 1),
('6', '20230623LASQJS81D', 6, 2),
('7', '20230623MGAJS615', 7, 2),
('8', '20230623MGSDK1D', 8, 1),
('9', '20230623MGAJS616', 9, 4),
('YUJlQ', '20230709VDOFRPXE', 3, 1);

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
(2, 'elsa', '089121219218', 'perempuan', 'elsa@gmail.com', '12341234', 'kuningan');

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
(42, '20230623MLQMZ81D', 'WhatsApp_Image_2023-07-09_at_16_40_26_(1).jpeg', 'Jamal', 1),
(43, '20230623MGAJS633', '0', '0', 0),
(44, '20230623MPQM81D', '1-107.jpg', 'Jamal', 1),
(45, '20230623MGAJS634', '0', '0', 0),
(46, '20230623MLAKQ81D', '0', '0', 0),
(47, '20230623MGAJS635', '0', '0', 0),
(48, '20230623MGKAJS12', '0', '0', 0),
(49, '20230709AJR7TUCL', '0', '0', 0),
(50, '20230709BHVQGCAJ', '0', '0', 0),
(51, '20230709MIMRRBT9', '0', '0', 0),
(52, '20230709VDOFRPXE', '0', '0', 0);

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
('20230623AAMJS81D', 1, '2023-06-27', '1234123412', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 4, 1),
('20230623LASQJS81D', 2, '2023-06-27', '1234123412', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 2),
('20230623MASM81D', 2, '2023-06-27', '1234123412', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 2),
('20230623MBFJS81D', 1, '2023-06-27', '1234123412', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MGAHAS1', 1, '2023-06-27', '1234123412', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 2),
('20230623MGAJ10AZ', 1, '2023-06-27', '1234123412', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MGAJS10A', 1, '2023-06-27', '1234123412', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MGAJS612', 2, '2023-06-27', '1234123412', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 2),
('20230623MGAJS613', 2, '2023-06-27', '1234123412', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 2),
('20230623MGAJS614', 2, '2023-05-27', '1234123412', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 2),
('20230623MGAJS615', 2, '2023-05-27', '1234123412', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 2),
('20230623MGAJS616', 2, '2023-05-27', '1234123412', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 2),
('20230623MGAJS617', 2, '2023-05-27', '1234123412', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 2),
('20230623MGAJS618', 2, '2023-05-27', '1234123412', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 2),
('20230623MGAJS619', 2, '2023-05-27', '1234123412', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS620', 2, '2023-05-27', '1234123412', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS621', 2, '2023-05-27', '1234123412', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS622', 2, '2023-05-27', '1234123412', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS623', 2, '2023-05-27', '1234123412', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS624', 2, '2023-05-27', '1234123412', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS625', 2, '2023-04-27', '1234123412', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS626', 2, '2023-04-27', '1234123412', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS627', 2, '2023-04-27', '1234123412', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS628', 2, '2023-04-27', '1234123412', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS629', 2, '2023-04-27', '1234123412', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS630', 2, '2023-04-27', '1234123412', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS631', 2, '2023-04-27', '1234123412', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 1),
('20230623MGAJS632', 2, '2023-04-27', '1234123412', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 2),
('20230623MGAJS633', 2, '2023-04-27', '1234123412', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 2),
('20230623MGAJS634', 2, '2023-04-27', '1234123412', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 2),
('20230623MGAJS635', 2, '2023-04-27', '1234123412', '2', '28', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 41500, 75, 338000, 379500, 1, 2),
('20230623MGAJS816', 1, '2023-04-27', '1234123412', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 2),
('20230623MGAJSALX', 1, '2023-04-27', '1234123412', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MGAJSLAD', 1, '2023-04-27', '1234123412', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MGALAKR1', 1, '2023-04-27', '1234123412', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 2),
('20230623MGAMVN1D', 1, '2023-04-27', '1234123412', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MGAPL12D', 1, '2023-04-27', '1234123412', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 2),
('20230623MGKAJS12', 1, '2023-04-27', '1234123412', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 4, 2),
('20230623MGLQS81D', 1, '2023-04-27', '1234123412', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MGPLQ81D', 1, '2023-06-27', '1234123412', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MGPLT81D', 1, '2023-06-27', '1234123412', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MGSDK1D', 1, '2023-06-27', '1234123412', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 2),
('20230623MLAKQ81D', 1, '2023-06-27', '1234123412', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 2),
('20230623MLHM81D', 1, '2023-06-27', '1234123412', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MLMQS81D', 1, '2023-06-27', '1234123412', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230623MLQMZ81D', 1, '2023-06-27', '1234123412', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 2, 2),
('20230623MPQM81D', 1, '2023-06-27', '1234123412', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 4, 2),
('20230623MZ12S81D', 1, '2023-06-27', '1234123412', '8', '156', '12341', 'ok', 'tiki', 'ECO', '4 Hari', 26000, 54, 242000, 268000, 1, 1),
('20230709AJR7TUCL', 1, '2023-07-09', '1234123412', '2', '27', '12341', 'ok', 'pos', 'Pos Reguler', '8 HARI Hari', 38500, 12, 105800, 144300, 4, 1),
('20230709BHVQGCAJ', 1, '2023-07-09', '1234123412', '18', '496', '12341', 'ok', 'pos', 'Pos Reguler', '6 HARI Hari', 42000, 12, 105800, 147800, 1, 1),
('20230709MIMRRBT9', 1, '2023-07-09', '1234123412', '16', '96', '12341', 'ok', 'pos', 'Pos Reguler', '6 HARI Hari', 66000, 12, 105800, 171800, 1, 1),
('20230709VDOFRPXE', 1, '2023-07-09', '1234123412', '2', '28', '12341', 'ok', 'jne', 'OKE', '3-6 Hari', 44000, 32, 541000, 585000, 4, 1);

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
(1, 2, 'Adidas Boost', 120000, 12, 12, 100, 'product-1.jpg', 'Sepatu', 2),
(2, 3, 'Adidas CF Superhoops', 230000, 12, 54, 100, 'product-2.jpg', 'Sepatu', 2),
(3, 2, 'Adidas Court Furry', 541000, 32, 0, 100, 'product-3.jpg', 'Sepatu', 2),
(4, 3, 'Adidas Derrick Rose 9', 123000, 21, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(5, 2, 'Adidas Don Issue', 430000, 12, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(6, 3, 'Adidas Explosive', 442700, 12, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(7, 2, 'Adidas Mens Pro Bounce', 494000, 23, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(8, 3, 'Adidas Nets Brokylin', 545300, 32, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(9, 2, 'Adidas Pro Converence', 596600, 42, 21, 100, 'product-7.jpg', 'Sepatu', 1),
(10, 3, 'Adidas X 16.1', 647900, 12, 12, 100, 'product-7.jpg', 'Sepatu', 1),
(11, 2, 'Adidas Yezzy', 699200, 54, 41, 100, 'product-7.jpg', 'Sepatu', 1),
(12, 3, 'Converse All Star', 750500, 41, 35, 100, 'product-7.jpg', 'Sepatu', 1),
(13, 2, 'Diadora Diaga Running', 801800, 64, 34, 100, 'product-7.jpg', 'Sepatu', 1),
(14, 3, 'New Balance 237', 853100, 12, 21, 100, 'product-7.jpg', 'Sepatu', 1),
(15, 2, 'New Balance 300', 904400, 21, 31, 100, 'product-7.jpg', 'Sepatu', 1),
(16, 3, 'New Balance 327', 955700, 22, 64, 100, 'product-7.jpg', 'Sepatu', 1),
(17, 2, 'New Balance 420', 1007000, 23, 23, 100, 'product-7.jpg', 'Sepatu', 1),
(18, 3, 'New Balance 530', 1058300, 32, 19, 100, 'product-7.jpg', 'Sepatu', 1),
(19, 2, 'New Balance 574', 1109600, 22, 12, 100, 'product-7.jpg', 'Sepatu', 1),
(20, 3, 'New Balance 580', 1160900, 31, 19, 100, 'product-7.jpg', 'Sepatu', 1),
(21, 2, 'New Balance 850', 1212200, 14, 33, 100, 'product-7.jpg', 'Sepatu', 1),
(22, 3, 'New Balance 878', 1263500, 13, 12, 100, 'product-7.jpg', 'Sepatu', 1),
(23, 2, 'New Balance 997', 1314800, 15, 41, 100, 'product-7.jpg', 'Sepatu', 1),
(24, 3, 'New Balance 998', 1366100, 16, 34, 100, 'product-7.jpg', 'Sepatu', 1),
(25, 2, 'New Balance Pro Court', 1417400, 12, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(26, 3, 'New Balance Proctsac', 1468700, 42, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(27, 2, 'New Balance Women\'s D Wide', 1520000, 43, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(28, 3, 'New Balance X90', 1571300, 15, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(29, 2, 'Nike Air Flight', 1622600, 54, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(30, 3, 'Nike Air Foamposite', 1673900, 43, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(31, 2, 'Nike Air Force', 1725200, 23, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(32, 3, 'Nike Air Jordan', 1776500, 51, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(33, 2, 'Nike Air Max', 1827800, 31, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(34, 3, 'Nike Blazer', 1879100, 32, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(35, 2, 'Nike Kevin Durant', 1930400, 31, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(36, 3, 'Nike Kobe ', 1981700, 13, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(37, 2, 'Nike Kyrie', 2033000, 41, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(38, 3, 'Nike Lebron James', 2084300, 41, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(39, 2, 'Nike Paul George', 2135600, 43, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(40, 3, 'Nike Renew Elevate', 2186900, 15, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(41, 2, 'Nike Running Structure', 2238200, 13, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(42, 3, 'Nike Zoom', 2289500, 51, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(43, 2, 'Onitsuka Kill Bill', 2340800, 52, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(44, 3, 'Onitsuka Tiger', 2392100, 53, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(45, 2, 'Puma Ignite', 2443400, 51, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(46, 3, 'Skecher Go Walk', 2494700, 23, 0, 100, 'product-7.jpg', 'Sepatu', 1),
(47, 2, 'Under Armour Stephen', 2546000, 12, 0, 100, 'WhatsApp_Image_2023-07-09_at_16_40_26_(1)1.jpeg', 'Sepatu', 1);

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
-- Dumping data for table `ulasan`
--

INSERT INTO `ulasan` (`id_ulasan`, `id_detail`, `id_produk`, `ulasan`, `tanggal_ulasan`, `status_ulasan`) VALUES
(1, NULL, 32, 'ok sangat bagus', '2023-07-08 22:29:35', 1),
(2, NULL, 2, '0', '0000-00-00 00:00:00', 0),
(3, 'YUJlQ', 3, 'ok', '2023-07-09 05:40:25', 1),
(4, NULL, 3, 'ok', '2023-07-09 05:26:50', 1);

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
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
