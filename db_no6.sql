-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2022 at 07:42 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_no6`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) DEFAULT NULL,
  `gaji` int(11) DEFAULT NULL,
  `jabatan` varchar(225) DEFAULT NULL,
  `region` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `gaji`, `jabatan`, `region`, `created_at`, `updated_at`) VALUES
(1, 'Agus', 8000000, 'Junior Officer', 'Semarang', '2022-02-24 03:49:39', NULL),
(2, 'Dina', 15000000, 'Ass. Manager', 'Bandung', '2022-02-24 03:46:27', NULL),
(3, 'Joko', 25000000, 'Manager', 'Jakarta', '2022-02-24 03:47:21', NULL),
(4, 'Ahmad', 13000000, 'Middle Officer', 'Jakarta', '2022-02-24 03:47:21', NULL),
(5, 'Felicia', 12500000, 'Middle Officer', 'Bandung', '2022-02-24 03:48:31', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
