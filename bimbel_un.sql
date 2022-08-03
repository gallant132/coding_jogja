-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 03:31 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bimbel_un`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(102, 'amikom', 'a3e1100d6e60ffdac3c22044ae6518b7'),
(103, 'asd', '7815696ecbf1c96e6894b779456d330e');

-- --------------------------------------------------------

--
-- Table structure for table `paket_kelas`
--

CREATE TABLE `paket_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket_kelas`
--

INSERT INTO `paket_kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'Java'),
(2, 'Phyton'),
(3, 'PHP');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id_pendaftar` int(20) NOT NULL,
  `nama_pendaftar` varchar(100) NOT NULL,
  `email_pendaftar` varchar(100) NOT NULL,
  `no_wa` varchar(50) NOT NULL,
  `alamat_pendaftar` text NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `paket_bimbel` varchar(20) NOT NULL,
  `pembayaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id_pendaftar`, `nama_pendaftar`, `email_pendaftar`, `no_wa`, `alamat_pendaftar`, `asal_sekolah`, `paket_bimbel`, `pembayaran`) VALUES
(1213, 'Budi', 'asd@gmail.com', '45345', 'jl.navgstavs', 'SMA N 1 Yogyakarta', 'Phyton', 'BELUM'),
(1214, 'Budi', 'asd@gmail.com', '23423', 'jl.navgstavs', 'Sma', 'Java', 'SUDAH'),
(1215, 'asd', 'asd@gmail.com', '123123', 'jl.navgstavs', 'Sma', 'PHP', 'BELUM'),
(1217, 'Budi', 'asd@gmail.com', '1234', 'jl.Ambarbinangun', 'SMA N 1 Yogyakarta', 'Phyton', 'BELUM'),
(1218, 'asd', 'asd@gmail.com', '4234', 'jl.Ambarbinangun', 'SMA N 1 Yogyakarta', 'Phyton', 'BELUM'),
(1219, 'asd', 'asd@gmail.com', '123123', 'qwqwe', 'SMA N 1 Yogyakarta', 'Phyton', 'BELUM'),
(1220, 'werwer', 'asd@gmail.com', '456456', 'jl.Ambarbinangun', 'SMA N 1 Yogyakarta', 'Java', 'BELUM'),
(1221, 'werwer', 'asd@gmail.com', '456456', 'jl.Ambarbinangun', 'SMA N 1 Yogyakarta', 'Java', 'BELUM'),
(1222, 'vfggg', 'asd@gmail.com', '2444', 'jl.Ambarbinangun', 'Sma', 'Java', 'BELUM'),
(1223, 'bhjauu', 'asd@gmail.com', '34534534', 'jl.Ambarbinangun', 'SMA N 1 Yogyakarta', 'Phyton', 'BELUM'),
(1224, 'Budi', 'asd@gmail.com', '456456', 'jl.Ambarbinangun', 'SMA N 1 Yogyakarta', 'PHP', 'BELUM'),
(1225, 'werwer', 'asd@gmail.com', '565646', 'jl.Ambarbinangun', 'SMA N 1 Yogyakarta', 'PHP', 'BELUM'),
(1226, 'Budi', 'asd@gmail.com', '34545', 'qwqwe', 'SMA N 1 Yogyakarta', 'PHP', 'BELUM'),
(1227, 'Budi', 'asd@gmail.com', '34545', 'qwqwe', 'SMA N 1 Yogyakarta', 'PHP', 'BELUM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `paket_kelas`
--
ALTER TABLE `paket_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `paket_kelas`
--
ALTER TABLE `paket_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id_pendaftar` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1228;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
