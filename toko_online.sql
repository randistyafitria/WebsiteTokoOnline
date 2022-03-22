-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 03:44 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pembelian_produk`
--

CREATE TABLE `detail_pembelian_produk` (
  `id_detail_pembelian_produk` int(11) NOT NULL,
  `id_pembelian_produk` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_pembelian_produk`
--

INSERT INTO `detail_pembelian_produk` (`id_detail_pembelian_produk`, `id_pembelian_produk`, `id_produk`, `qty`) VALUES
(1, 1, 3, 1),
(2, 2, 3, 2),
(3, 3, 4, 3),
(4, 4, 4, 3),
(5, 4, 4, 3),
(6, 5, 4, 1),
(7, 6, 4, 2),
(8, 7, 7, 1),
(9, 7, 7, 1),
(10, 7, 7, 1),
(11, 8, 4, 1),
(12, 9, 4, 1),
(13, 10, 3, 1),
(14, 10, 3, 1),
(15, 10, 3, 1),
(16, 10, 3, 1),
(17, 11, 3, 2),
(18, 12, 8, 2),
(19, 13, 3, 1),
(20, 13, 4, 1),
(21, 13, 3, 1),
(22, 14, 3, 1),
(23, 15, 8, 1),
(24, 16, 4, 1),
(25, 17, 4, 2),
(26, 18, 7, 1),
(27, 18, 7, 1),
(28, 19, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail_transaksi`, `id_transaksi`, `id_produk`, `qty`, `subtotal`) VALUES
(1, 0, 0, 1, 0),
(2, 0, 0, 1, 0),
(3, 0, 0, 1, 0),
(4, 0, 0, 2, 0),
(5, 0, 3, 1, 0),
(6, 0, 4, 1, 0),
(7, 0, 4, 1, 0),
(8, 1, 3, 1, 0),
(9, 2, 4, 1, 0),
(10, 3, 4, 1, 0),
(11, 4, 4, 2, 0),
(12, 5, 4, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text DEFAULT NULL,
  `telp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `alamat`, `telp`) VALUES
(1, 'Randistya Fitria', 'jl. groningen', '0844678910'),
(5, 'Randistya ', 'jl. nijmegen', '086439274785'),
(7, 'sha', 'jl. utrecht', '086291748291');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `tanggal_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_produk`, `id_pelanggan`, `tanggal_beli`, `tanggal_bayar`) VALUES
(1, 6, 0, '2021-10-18', '2021-10-18'),
(2, 6, 0, '2021-10-18', '2021-10-18'),
(3, 6, 0, '2021-10-18', '2021-10-18'),
(4, 6, 0, '2021-10-18', '2021-10-18'),
(5, 6, 0, '2021-10-18', '2021-10-18'),
(6, 6, 0, '2021-10-18', '2021-10-18'),
(7, 6, 0, '2021-10-18', '2021-10-18'),
(8, 6, 0, '2021-10-18', '2021-10-18'),
(9, 6, 0, '2021-10-19', '2021-10-19'),
(10, 6, 0, '2021-10-21', '2021-10-21'),
(11, 6, 0, '2021-10-21', '2021-10-21'),
(12, 6, 0, '2021-10-21', '2021-10-21'),
(13, 6, 0, '2021-10-21', '2021-10-21'),
(14, 6, 0, '2021-10-21', '2021-10-21'),
(15, 6, 0, '2021-10-21', '2021-10-21'),
(16, 6, 0, '2021-10-22', '2021-10-22'),
(17, 6, 0, '2021-10-22', '2021-10-22'),
(18, 6, 0, '2021-10-22', '2021-10-22'),
(19, 7, 0, '2021-10-22', '2021-10-22');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `level`) VALUES
(6, 'dede', 'dedebedak', 'b4be1c568a6dc02dcaf2849852bdb13e', '89'),
(7, 'aye', 'aye', '15be96c681f86d5e22721a05dda30a5f', '77'),
(8, 'boya', 'boya', '123c104a3766752bce5aceb4960f0c4b', '54');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `foto_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi`, `harga`, `foto_produk`) VALUES
(3, 'springles', 'lezat', 89000, 'rs=w_1200,h_1200.jpg'),
(4, 'aqua', 'segar & menyehatkan', 5000, 'Products_466837_image_B420_1028184013.jpg'),
(7, 'susu greenfields', 'Susu Greenfield kotak 1 liter adalah susu kemasan yang terdiri dari berbagai jenis susu seperti susu UHT, susu skim, dan susu low fat (low fat).', 30000, '20033350_1.jpg'),
(8, 'G-shock Jam Tangan DW-5900DN-3DR Pink Blue', 'Jam tangan digital kasual desain square case', 1609000, 'casio.jpg'),
(9, 'LOGITECH Pebble Wireless Bluetooth Mouse M350', 'Wireless Mouse', 320000, 'logi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `tgl_transaksi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `id_petugas`, `tgl_transaksi`) VALUES
(1, 0, 6, '2021-10-16'),
(2, 0, 6, '2021-10-16'),
(3, 0, 6, '2021-10-16'),
(4, 0, 6, '2021-10-16'),
(5, 0, 6, '2021-10-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pembelian_produk`
--
ALTER TABLE `detail_pembelian_produk`
  ADD PRIMARY KEY (`id_detail_pembelian_produk`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pembelian_produk`
--
ALTER TABLE `detail_pembelian_produk`
  MODIFY `id_detail_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
