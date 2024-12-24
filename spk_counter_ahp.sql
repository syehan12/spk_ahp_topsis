-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 04, 2024 at 09:26 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_counter_ahp`
--

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kiteria` int NOT NULL,
  `kriteria_1` varchar(255) NOT NULL,
  `kriteria_2` varchar(255) NOT NULL,
  `kriteria_value` float NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kiteria`, `kriteria_1`, `kriteria_2`, `kriteria_value`, `description`) VALUES
(26, 'Penyimpanan', 'Baterai', 7, 'Penyimpanan lebih penting dari Baterai'),
(27, 'Processor', 'Berat', 9, 'Processor lebih penting dari Berat'),
(28, 'Memory', 'Penyimpanan', 0.333333, 'Memory sedikit lebih penting dari Penyimpanan'),
(29, 'Berat', 'Processor', 0.142857, 'Berat lebih rendah penting dibandingkan Processor'),
(30, 'Penyimpanan', 'Baterai', 5, 'Penyimpanan lebih penting dari Baterai'),
(31, 'Baterai', 'Memory', 1, 'Baterai lebih penting dari Memory'),
(32, 'Processor', 'Baterai', 8, 'Processor lebih penting dari Baterai'),
(33, 'Penyimpanan', 'Berat', 4, 'Penyimpanan lebih penting dari Berat'),
(34, 'Memory', 'Penyimpanan', 0.333333, 'Memory sedikit lebih penting dari Penyimpanan'),
(35, 'Berat', 'Baterai', 0.2, 'Berat kurang penting dari Baterai'),
(36, 'Baterai', 'Processor', 0.142857, 'Baterai lebih rendah penting dibandingkan Processor'),
(37, 'Processor', 'Memory', 3, 'Processor lebih penting dari Memory'),
(38, 'Berat', 'Penyimpanan', 9, 'Berat lebih penting dari Penyimpanan'),
(39, 'Memory', 'Berat', 0.111111, 'Memory lebih rendah penting dibandingkan Berat'),
(40, 'Penyimpanan', 'Baterai', 0.2, 'Penyimpanan kurang penting dibandingkan Baterai'),
(41, 'Baterai', 'Penyimpanan', 5, 'Baterai lebih penting dari Penyimpanan'),
(42, 'Processor', 'Berat', 7, 'Processor lebih penting dari Berat'),
(43, 'Memory', 'Processor', 0.2, 'Memory lebih penting dari Processor'),
(44, 'Berat', 'Memory', 3, 'Berat lebih penting dari Memory'),
(45, 'Penyimpanan', 'Processor', 0.111111, 'Penyimpanan lebih rendah penting dibandingkan Processor'),
(46, 'Baterai', 'Berat', 7, 'Baterai lebih penting dari Berat'),
(47, 'Processor', 'Penyimpanan', 0.2, 'Processor lebih penting dari Penyimpanan'),
(48, 'Memory', 'Baterai', 7, 'Memory lebih penting dari Baterai'),
(49, 'Berat', 'Processor', 2, 'Berat sedikit lebih penting dibandingkan Processor'),
(50, 'Penyimpanan', 'Memory', 0.5, 'Penyimpanan lebih penting dari Memory'),
(51, 'Baterai', 'Processor', 9, 'Baterai lebih penting dari Processor'),
(52, 'Processor', 'Memory', 5, 'Processor lebih penting dari Memory'),
(53, 'Penyimpanan', 'Berat', 0.111111, 'Penyimpanan lebih rendah penting dibandingkan Berat'),
(54, 'Memory', 'Processor', 0.142857, 'Memory lebih rendah penting dari Processor'),
(55, 'Berat', 'Baterai', 0.333333, 'Berat sedikit lebih penting dari Baterai'),
(56, 'Penyimpanan', 'Baterai', 3, 'Penyimpanan lebih penting dari Baterai'),
(57, 'Baterai', 'Processor', 3, 'asdawd asd awda sd a'),
(58, 'Processor', 'Penyimpanan', 5, 'asdawda sdasda wdasd '),
(59, 'Berat', 'Baterai', 2, 'asdawd asda wdas dawd'),
(60, 'Memory', 'Processor', 0.111111, 'asdawda sdawda sdawd asd'),
(61, 'Penyimpanan', 'Baterai', 7, 'Penyimpanan lebih penting dari Baterai'),
(62, 'Baterai', 'Penyimpanan', 0.111111, 'edit Test\r\n'),
(63, 'Baterai', 'Processor', 5, 'baterai lebih penting di  bandingkan processor'),
(64, 'Penyimpanan', 'Processor', 3, 'penyimpanan sedikit lebih penting');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `laptop_id` varchar(50) NOT NULL,
  `nama_laptop` varchar(100) NOT NULL,
  `baterai_laptop` varchar(100) NOT NULL,
  `procesor_laptop` varchar(100) NOT NULL,
  `memori_laptop` varchar(100) NOT NULL,
  `penyimpanan_laptop` varchar(100) NOT NULL,
  `berat_laptop` varchar(100) NOT NULL,
  `profile` varchar(100) NOT NULL,
  `bat` int NOT NULL DEFAULT '0',
  `proc` int NOT NULL DEFAULT '0',
  `memo` int NOT NULL DEFAULT '0',
  `penyim` int NOT NULL DEFAULT '0',
  `berat` int NOT NULL DEFAULT '0',
  `total_bobot` int NOT NULL DEFAULT '0',
  `bat_nilai` float NOT NULL DEFAULT '0',
  `proc_nilai` float DEFAULT '0',
  `memo_nilai` float DEFAULT '0',
  `penyim_nilai` float DEFAULT '0',
  `berat_nilai` float DEFAULT '0',
  `total_nilai` float DEFAULT '0',
  `normalized_bat` float NOT NULL DEFAULT '0',
  `normalized_proc` float NOT NULL DEFAULT '0',
  `normalized_memo` float NOT NULL DEFAULT '0',
  `normalized_penyim` float NOT NULL DEFAULT '0',
  `normalized_berat` float NOT NULL DEFAULT '0',
  `total_normalize` float NOT NULL DEFAULT '0',
  `normalized_bat_nilai` float NOT NULL DEFAULT '0',
  `normalized_proc_nilai` float NOT NULL DEFAULT '0',
  `normalized_memo_nilai` float NOT NULL DEFAULT '0',
  `normalized_penyim_nilai` float NOT NULL DEFAULT '0',
  `normalized_berat_nilai` float NOT NULL DEFAULT '0',
  `total_normalize_nilai` float NOT NULL DEFAULT '0',
  `nilai_ranking` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`laptop_id`, `nama_laptop`, `baterai_laptop`, `procesor_laptop`, `memori_laptop`, `penyimpanan_laptop`, `berat_laptop`, `profile`, `bat`, `proc`, `memo`, `penyim`, `berat`, `total_bobot`, `bat_nilai`, `proc_nilai`, `memo_nilai`, `penyim_nilai`, `berat_nilai`, `total_nilai`, `normalized_bat`, `normalized_proc`, `normalized_memo`, `normalized_penyim`, `normalized_berat`, `total_normalize`, `normalized_bat_nilai`, `normalized_proc_nilai`, `normalized_memo_nilai`, `normalized_penyim_nilai`, `normalized_berat_nilai`, `total_normalize_nilai`, `nilai_ranking`) VALUES
('LAP35', 'HP Pavilion 14 inch Laptop 14-dv2000TX', '65 W Smart AC power adapter', '12th Generation Intel® Core™ i7-1255U', '16 GB DDR4-3200 MHz RAM (1 x 16 GB)', '512 GB PCIe® NVMe™ M.2 SSD', '180 g', 'hp_pavilion.png', 100, 90, 80, 70, 60, 0, 0.142857, 3, 7, 3, 9, 22.1429, 0.358423, 0.302013, 0.25641, 0.228758, 0.244898, 1.3905, 0.0116279, 0.197368, 0.492188, 0.1875, 0.5625, 1.45118, 0.370625),
('LAP51', 'lenovo', '30000 mah', 'intel core 1i5', '4GB', '1TB HDD', '1kg', 'download.jpeg', 20, 50, 75, 80, 30, 0, 0.142857, 9, 0.111111, 7, 0.142857, 16.3968, 0.0716846, 0.167785, 0.240385, 0.261438, 0.122449, 0.863741, 0.0116279, 0.592105, 0.00781249, 0.4375, 0.00892856, 1.05797, 0.21753),
('LAP64', 'Lenovo IdeaPad Flex 5', 'Up to 9 hours* (MM18)', 'AMD Ryzen™ 7 7730U processor', '16GB DDR4', '1TB SSD M.2 PCIe', '1.55kg / 3.42lbs', 'Lenovo IdeaPad Flex 5.png', 60, 70, 80, 90, 100, 0, 7, 3, 7, 3, 9, 29, 0.215054, 0.234899, 0.25641, 0.294118, 0.408163, 1.40864, 0.569767, 0.197368, 0.492188, 0.1875, 0.5625, 2.00932, 0.579833),
('LAP87', 'Acer Swift 5 (SF514-55T)', 'Lithium Ion (Li-Ion) 15 Hours 56 Wh', 'Intel®Core™ i5-1135G7', '8 GB LPDDR4X', '256 GB', '1 kg', 'AcerSwift.jpeg', 99, 88, 77, 66, 55, 0, 5, 0.2, 0.111111, 3, 3, 11.3111, 0.354839, 0.295302, 0.246795, 0.215686, 0.22449, 1.33711, 0.406977, 0.0131579, 0.00781249, 0.1875, 0.1875, 0.802947, 0.232758);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `pengguna_id` varchar(50) NOT NULL,
  `nama_pengguna` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`pengguna_id`, `nama_pengguna`, `username`, `password`, `profile`) VALUES
('PE01', 'Nama Satu', 'admin', '123456', 'c8.png'),
('PENG29', 'Test User Edit', 'Test User', 'Test User', 'c10.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kiteria`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`laptop_id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kiteria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
