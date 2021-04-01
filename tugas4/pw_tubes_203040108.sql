-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2021 at 06:46 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040108`
--

-- --------------------------------------------------------

--
-- Table structure for table `vga`
--

CREATE TABLE `vga` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nama` varchar(10) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `category` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vga`
--

INSERT INTO `vga` (`id`, `img`, `nama`, `description`, `price`, `category`) VALUES
(1, 'rtx3090.jpg', 'RTX 3090', 'GPU dengan performa kelas TITAN,didukung oleh Ampere, arsitektur ke-2 NVIDIA', 'Rp 35.000.000', 'VGA CARD'),
(2, 'rx6900xt.jpg', 'RX 6900XT', 'Menggunakan arsitektur baru RDNA2 dan fabrikasi 7nm', 'Rp 28.000.000', 'VGA CARD'),
(3, 'rtx3080.png', 'RTX 3080', 'Didukung oleh ampere yaitu arsitektur ke-2 NVIDIA', 'Rp 28.000.000', 'VGA CARD'),
(4, 'rx6800.png', 'RX 6800', 'Menggunakan arsitektur baru RDNA2 dan fabrikasi 7nm', 'Rp 23.000.000', 'VGA CARD'),
(5, 'rtx3070.jpg', 'RTX 3070', 'Didukung oleh ampere yaitu arsitektur ke-2 NVIDIA', 'Rp 21.000.000', 'VGA CARD'),
(6, 'rtx3060.jpg', 'RTX 3060', 'Didukung oleh ampere yaitu arsitektur ke-2 NVIDIA', 'Rp 12.000.000', 'VGA CARD'),
(7, 'rtx2080ti.jpg', 'RTX 2080TI', 'Menggunakan arsitektur turing dengan memori GDDR6 dan fitur ray tracing', 'Rp 22.000.000', 'VGA CARD'),
(8, 'rtx2080super.jpg', 'RTX 2080 S', 'Menggunakan arsitektur turing dengan memori GDDR6 dan fitur ray tracing', 'Rp 14.000.000', 'VGA CARD'),
(9, 'rtx2070.jpg', 'RTX 2070', 'Menggunakan arsitektur turing dengan memori GDDR6 dan fitur ray tracing', 'Rp 10.600.000', 'VGA CARD'),
(10, 'rtx2060.jpg', 'RTX 2060', 'Menggunakan arsitektur turing dengan memori GDDR6 dan fitur ray tracing', 'Rp 6.000.000', 'VGA CARD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vga`
--
ALTER TABLE `vga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vga`
--
ALTER TABLE `vga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
