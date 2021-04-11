-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 04:49 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ibnurus`
--

-- --------------------------------------------------------

--
-- Table structure for table `hijab`
--

CREATE TABLE `hijab` (
  `id` int(11) NOT NULL,
  `img` varchar(150) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `informasi produk` varchar(255) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hijab`
--

INSERT INTO `hijab` (`id`, `img`, `nama`, `informasi produk`, `jenis`, `harga`) VALUES
(1, 'hijab1.jpg', '\r\nMonochrome Scarlet Black\r\n', '- Bahan: Voal Premium', 'Printed Hijab Square', 225000),
(2, 'hijab2.jpg', '\r\nHannah Set Peach\r\n', 'Special Anniversary Edition', 'Printed Hijab Square', 224000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hijab`
--
ALTER TABLE `hijab`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hijab`
--
ALTER TABLE `hijab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
