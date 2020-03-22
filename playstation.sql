-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2020 at 07:37 AM
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
-- Database: `playstation`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE `detail_order` (
  `id_detail_order` varchar(20) NOT NULL,
  `id_order` varchar(10) NOT NULL,
  `id_playstation` varchar(10) NOT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `status_detail_order` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` varchar(50) NOT NULL,
  `nama_level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
('A001', 'admin'),
('K001', 'kasir'),
('W001', 'client');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `status_order` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `tanggal`, `id_user`, `alamat`, `status_order`) VALUES
('0010', '2019-12-20', '0010', 'pakem\r\n', 'Dibayar'),
('002', '2019-12-20', '003', 'kimpulan', 'Dibayar'),
('003', '2019-12-20', '005', 'kopatan', 'Dibayar'),
('004', '2019-12-20', '006', 'lodadi', 'Dibayar'),
('006', '2019-12-20', '006', 'kimpulan', 'Dibayar'),
('007', '2019-12-20', '002', 'kimpulan', 'Dibayar'),
('008', '2019-12-20', '0010', 'degolan', 'Dibayar'),
('009', '2019-12-20', '0010', 'joglo', 'Dibayar');

-- --------------------------------------------------------

--
-- Table structure for table `playstation`
--

CREATE TABLE `playstation` (
  `id_playstation` varchar(10) NOT NULL,
  `nama_playstation` varchar(20) NOT NULL,
  `harga` int(25) NOT NULL,
  `status_playstation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playstation`
--

INSERT INTO `playstation` (`id_playstation`, `nama_playstation`, `harga`, `status_playstation`) VALUES
('001', 'PS4  pro 2016', 70000, 'ada'),
('003', 'PS4 fat 2017', 30000, 'ada'),
('004', 'PS3 CFW 2009', 20000, 'disewa'),
('005', 'PS3 OFW 2009', 20000, 'ada'),
('006', 'ps3 slim 2009', 10000, 'disewa'),
('007', 'PS2 matrix 2006', 5000, 'disewa'),
('008', 'PS4 slim 2018', 30000, 'disewa');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(20) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `id_order` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `total_bayar` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_order`, `tanggal`, `total_bayar`) VALUES
('002', '007', '002', '2019-12-20', 70000),
('003', '002', '006', '2019-12-20', 70000),
('004', '0010', '007', '2019-12-20', 800000),
('005', '0010', '008', '2019-12-20', 800000),
('006', '0010', '009', '2019-12-20', 800000),
('007', '0010', '0010', '2019-12-20', 70000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `id_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`, `id_level`) VALUES
('0010', 'joko', 'joko', 'joko anwar', 'W001'),
('002', 'fadhil', 'fadhil', 'fadhil albar', 'A001'),
('003', 'tukiman', 'tukiman', 'tukiman ganteng', 'W001'),
('005', 'bejo', 'bejo', 'bejo bejonan', 'W001'),
('006', 'ijul', 'ijul', 'ijul yakin', 'K001'),
('007', 'agus', 'agus', 'agus weng', 'K001'),
('008', 'ihdi', 'ihdi', 'idhi weng', 'K001'),
('009', 'hayat', 'hayat', 'hayat weng', 'K001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`id_detail_order`),
  ADD KEY `fk_detai_playstation` (`id_playstation`),
  ADD KEY `FK_detail_order_order` (`id_order`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `FK_order_user` (`id_user`);

--
-- Indexes for table `playstation`
--
ALTER TABLE `playstation`
  ADD PRIMARY KEY (`id_playstation`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `FK_transaksi_user` (`id_user`),
  ADD KEY `FK_transaksi_order` (`id_order`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `FK_user_level` (`id_level`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD CONSTRAINT `FK_detail_order_order` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_detai_playstation` FOREIGN KEY (`id_playstation`) REFERENCES `playstation` (`id_playstation`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_order_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `FK_transaksi_order` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_transaksi_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_user_level` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
