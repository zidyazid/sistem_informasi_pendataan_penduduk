-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2021 at 02:14 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rekap_jumlah_penduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `kode_rw`
--

CREATE TABLE `kode_rw` (
  `id` int(11) NOT NULL,
  `rw` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kode_rw`
--

INSERT INTO `kode_rw` (`id`, `rw`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9);

-- --------------------------------------------------------

--
-- Table structure for table `penduduk_awal_pencatatan`
--

CREATE TABLE `penduduk_awal_pencatatan` (
  `id` int(11) NOT NULL,
  `id_rw` int(11) NOT NULL,
  `wni_l` int(11) NOT NULL,
  `wni_p` int(11) NOT NULL,
  `wna_l` int(11) NOT NULL,
  `wna_p` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk_awal_pencatatan`
--

INSERT INTO `penduduk_awal_pencatatan` (`id`, `id_rw`, `wni_l`, `wni_p`, `wna_l`, `wna_p`, `jumlah`) VALUES
(7, 1, 190, 263, 0, 0, 453),
(8, 2, 410, 424, 0, 0, 834),
(9, 3, 552, 676, 1, 0, 1229),
(10, 4, 794, 1012, 0, 0, 1806),
(11, 5, 264, 233, 0, 0, 497),
(12, 6, 726, 839, 0, 0, 1565),
(13, 7, 312, 435, 0, 0, 747),
(14, 8, 501, 517, 0, 0, 1018),
(15, 9, 466, 532, 0, 0, 998);

-- --------------------------------------------------------

--
-- Table structure for table `penduduk_sekarang`
--

CREATE TABLE `penduduk_sekarang` (
  `id` int(11) NOT NULL,
  `id_rw` int(11) NOT NULL,
  `wni_l` int(11) NOT NULL,
  `wni_p` int(11) NOT NULL,
  `wna_l` int(11) NOT NULL,
  `wna_p` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk_sekarang`
--

INSERT INTO `penduduk_sekarang` (`id`, `id_rw`, `wni_l`, `wni_p`, `wna_l`, `wna_p`, `jumlah`) VALUES
(1, 2, 3, 2, 3, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pengurangan_penduduk`
--

CREATE TABLE `pengurangan_penduduk` (
  `id` int(11) NOT NULL,
  `id_rw` int(11) NOT NULL,
  `mati_l` int(11) NOT NULL,
  `mati_p` int(11) NOT NULL,
  `pindah_l` int(11) NOT NULL,
  `pindah_p` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengurangan_penduduk`
--

INSERT INTO `pengurangan_penduduk` (`id`, `id_rw`, `mati_l`, `mati_p`, `pindah_l`, `pindah_p`, `jumlah`) VALUES
(5, 1, 0, 0, 0, 0, 0),
(6, 2, 0, 0, 1, 0, 1),
(7, 3, 0, 0, 0, 0, 0),
(8, 4, 0, 2, 3, 1, 6),
(9, 5, 1, 1, 1, 1, 4),
(10, 6, 0, 0, 1, 0, 1),
(11, 7, 0, 0, 1, 0, 1),
(12, 8, 1, 0, 0, 0, 1),
(13, 9, 0, 0, 0, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `pertambahan_penduduk`
--

CREATE TABLE `pertambahan_penduduk` (
  `id` int(11) NOT NULL,
  `id_rw` int(11) NOT NULL,
  `lahir_l` int(11) NOT NULL,
  `lahir_p` int(11) NOT NULL,
  `datang_l` int(11) NOT NULL,
  `datang_p` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pertambahan_penduduk`
--

INSERT INTO `pertambahan_penduduk` (`id`, `id_rw`, `lahir_l`, `lahir_p`, `datang_l`, `datang_p`, `jumlah`) VALUES
(4, 1, 0, 0, 0, 0, 0),
(5, 2, 0, 0, 0, 0, 0),
(6, 3, 0, 0, 0, 0, 0),
(7, 4, 0, 2, 0, 1, 3),
(8, 5, 0, 0, 0, 0, 0),
(9, 6, 0, 0, 0, 0, 0),
(10, 7, 0, 0, 0, 0, 0),
(11, 8, 0, 1, 0, 0, 1),
(12, 9, 1, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) DEFAULT NULL,
  `username` varchar(128) DEFAULT NULL,
  `image` varchar(128) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `is_active` int(2) DEFAULT NULL,
  `date_created` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(23, 'yazid kurnia', 'admin', 'default.jpg', '$2y$10$cD3sL2kun7V4zMFfevUblOXoT.B3blD9wk.QpXTBhb3zPGWbpR/vW', 1, 1, '1630318966'),
(26, 'eko kurniawan', 'eko', 'default.jpg', '$2y$10$X2spJ3qTdMjGSed64k4fXuXAZOtXX5QhBNPb0gXGtfY9cmT8ftBIG', 1, 1, '1630320063'),
(28, 'yazid', 'admin11', 'default.jpg', '$2y$10$fJDaCQ3.DpW.ONngwgLx2Ole9Vs8CiiokHdpXbuHYdYZzPmHK3MzC', 1, 1, '1630320959'),
(29, 'alessandro', 'admin', 'default.jpg', '$2y$10$8B53IT7CJApjxO6TggAcVO0mhtS8qYEBvXpyrbTcfu9a0id4AGaa2', 3, 0, '1631014251');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admincontroller');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(3, 'kasir');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `url` varchar(25) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'index', 'fas fa-database', 1),
(7, 1, 'Penduduk Awal Pencatatan', 'data_awal', 'fas fa-user', 1),
(8, 1, 'Pertambahan Penduduk', 'data_pertambahan_penduduk', 'fas fa-user-plus', 1),
(9, 1, 'Pengurangan Penduduk', 'data_pengurangan_penduduk', 'fas fa-user-minus', 1),
(10, 1, 'Penduduk Sekarang', 'data_penduduk_sekarang', 'fas fa-users', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kode_rw`
--
ALTER TABLE `kode_rw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk_awal_pencatatan`
--
ALTER TABLE `penduduk_awal_pencatatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rw` (`id_rw`);

--
-- Indexes for table `penduduk_sekarang`
--
ALTER TABLE `penduduk_sekarang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rw` (`id_rw`);

--
-- Indexes for table `pengurangan_penduduk`
--
ALTER TABLE `pengurangan_penduduk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rw` (`id_rw`);

--
-- Indexes for table `pertambahan_penduduk`
--
ALTER TABLE `pertambahan_penduduk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rw` (`id_rw`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kode_rw`
--
ALTER TABLE `kode_rw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `penduduk_awal_pencatatan`
--
ALTER TABLE `penduduk_awal_pencatatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `penduduk_sekarang`
--
ALTER TABLE `penduduk_sekarang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengurangan_penduduk`
--
ALTER TABLE `pengurangan_penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pertambahan_penduduk`
--
ALTER TABLE `pertambahan_penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penduduk_awal_pencatatan`
--
ALTER TABLE `penduduk_awal_pencatatan`
  ADD CONSTRAINT `penduduk_awal_pencatatan_ibfk_1` FOREIGN KEY (`id_rw`) REFERENCES `kode_rw` (`id`);

--
-- Constraints for table `penduduk_sekarang`
--
ALTER TABLE `penduduk_sekarang`
  ADD CONSTRAINT `penduduk_sekarang_ibfk_1` FOREIGN KEY (`id_rw`) REFERENCES `kode_rw` (`id`);

--
-- Constraints for table `pengurangan_penduduk`
--
ALTER TABLE `pengurangan_penduduk`
  ADD CONSTRAINT `pengurangan_penduduk_ibfk_1` FOREIGN KEY (`id_rw`) REFERENCES `kode_rw` (`id`);

--
-- Constraints for table `pertambahan_penduduk`
--
ALTER TABLE `pertambahan_penduduk`
  ADD CONSTRAINT `pertambahan_penduduk_ibfk_1` FOREIGN KEY (`id_rw`) REFERENCES `kode_rw` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`);

--
-- Constraints for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD CONSTRAINT `user_access_menu_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`),
  ADD CONSTRAINT `user_access_menu_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `user_menu` (`id`);

--
-- Constraints for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD CONSTRAINT `user_sub_menu_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `user_menu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
