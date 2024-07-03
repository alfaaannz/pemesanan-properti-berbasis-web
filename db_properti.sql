-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2024 at 05:57 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_properti`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan_properti`
--

CREATE TABLE `pemesanan_properti` (
  `id` int(11) NOT NULL,
  `nama_pemesanan` varchar(255) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `durasi_sewa` int(11) DEFAULT NULL,
  `unit_properti` varchar(50) DEFAULT NULL,
  `harga_paket` decimal(10,2) DEFAULT NULL,
  `jml_tagihan` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan_properti`
--

INSERT INTO `pemesanan_properti` (`id`, `nama_pemesanan`, `no_hp`, `tanggal`, `durasi_sewa`, `unit_properti`, `harga_paket`, `jml_tagihan`) VALUES
(1, 'alfan', '085163221648', '2024-06-29', 2, '1500000', 3000000.00, 3000000.00),
(2, 'alfan', '085163221648', '2024-06-29', 2, '1500000', 3000000.00, 3000000.00),
(3, 'alfan', '085163221648', '2024-06-28', 2, '2000000', 4000000.00, 4000000.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesanan_properti`
--
ALTER TABLE `pemesanan_properti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesanan_properti`
--
ALTER TABLE `pemesanan_properti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
