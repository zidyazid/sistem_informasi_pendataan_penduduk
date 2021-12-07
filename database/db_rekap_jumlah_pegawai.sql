-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Des 2021 pada 14.10
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rekap_jumlah_pegawai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kode_rw`
--

CREATE TABLE `kode_rw` (
  `id` int(11) NOT NULL,
  `rw` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kode_rw`
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
-- Struktur dari tabel `penduduk_awal_pencatatan`
--

CREATE TABLE `penduduk_awal_pencatatan` (
  `id` int(11) NOT NULL,
  `id_rw` int(11) NOT NULL,
  `nik` int(16) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tgl_lahir` varchar(128) NOT NULL,
  `umur` varchar(128) NOT NULL,
  `status_kawin` varchar(24) NOT NULL,
  `kewarganegaraan` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penduduk_awal_pencatatan`
--

INSERT INTO `penduduk_awal_pencatatan` (`id`, `id_rw`, `nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `umur`, `status_kawin`, `kewarganegaraan`, `jenis_kelamin`) VALUES
(16, 2, 3, 'hima', 'jaber', '12-09-1999', '21', 'belum', 'wni', 'laki-laki'),
(17, 3, 1, 'rika', 'jatim', '21-02-1998', '22', 'belum', 'wni', 'perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk_sekarang`
--

CREATE TABLE `penduduk_sekarang` (
  `id` int(11) NOT NULL,
  `id_rw` int(11) NOT NULL,
  `nik` int(16) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tgl_lahir` varchar(128) NOT NULL,
  `umur` int(11) NOT NULL,
  `kewarganegaraan` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `status_kawin` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penduduk_sekarang`
--

INSERT INTO `penduduk_sekarang` (`id`, `id_rw`, `nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `umur`, `kewarganegaraan`, `jenis_kelamin`, `status_kawin`) VALUES
(48, 2, 3, 'hima', 'jaber', '12-09-1999', 21, 'wni', 'laki-laki', 'belum'),
(49, 3, 1, 'rika', 'jatim', '21-02-1998', 22, 'wna', 'perempuan', 'belum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengurangan_penduduk`
--

CREATE TABLE `pengurangan_penduduk` (
  `id` int(11) NOT NULL,
  `id_rw` int(11) NOT NULL,
  `nik` int(16) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tgl_lahir` varchar(128) NOT NULL,
  `umur` int(11) NOT NULL,
  `status_kawin` varchar(128) NOT NULL,
  `kategori_perpindahan` varchar(35) NOT NULL,
  `kewarganegaraan` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengurangan_penduduk`
--

INSERT INTO `pengurangan_penduduk` (`id`, `id_rw`, `nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `umur`, `status_kawin`, `kategori_perpindahan`, `kewarganegaraan`, `jenis_kelamin`) VALUES
(95, 6, 0, 'eri zul amdi', 'bukit tinggi', '13 februari 1999', 12, 'Belum', 'Mati', 'Wni', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertambahan_penduduk`
--

CREATE TABLE `pertambahan_penduduk` (
  `id` int(11) NOT NULL,
  `id_rw` int(11) NOT NULL,
  `nik` int(16) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tgl_lahir` varchar(128) NOT NULL,
  `umur` int(11) NOT NULL,
  `status_kawin` varchar(128) NOT NULL,
  `kategori_pertambahan` varchar(35) NOT NULL,
  `kewarganegaraan` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pertambahan_penduduk`
--

INSERT INTO `pertambahan_penduduk` (`id`, `id_rw`, `nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `umur`, `status_kawin`, `kategori_pertambahan`, `kewarganegaraan`, `jenis_kelamin`) VALUES
(126, 6, 1231, 'eri zul amdi', 'bukit tinggi', '13 februari 1999', 12, 'Belum', 'Lahir', 'Wni', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(28, 'Admin', 'admin', 'default.jpg', '$2y$10$fJDaCQ3.DpW.ONngwgLx2Ole9Vs8CiiokHdpXbuHYdYZzPmHK3MzC', 1, 1, '1630320959'),
(33, 'User', 'user', 'default.jpg', '$2y$10$dOmofXFS28O5iisKz9jteeHgND4OyjVt288hAZcFLcz1h312skuPq', 3, 1, '1636619773');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(7, 3, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admincontroller'),
(5, 'Usercontroller');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(3, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
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
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Info', 'index', 'fas fa-database', 1),
(7, 1, 'Penduduk Awal Pencatatan', 'data_awal', 'fas fa-user', 1),
(8, 1, 'Pertambahan Penduduk', 'data_pertambahan_penduduk', 'fas fa-user-plus', 1),
(9, 1, 'Pengurangan Penduduk', 'data_pengurangan_penduduk', 'fas fa-user-minus', 1),
(10, 1, 'Penduduk Sekarang', 'data_penduduk_sekarang', 'fas fa-users', 1),
(12, 5, 'Dashboard', 'index', 'fas fa-database', 1),
(13, 5, 'Penduduk Awal Pencatatan', 'data_awal', 'fas fa-users', 1),
(14, 5, 'Pertambahan Penduduk', 'data_pertambahan_penduduk', 'fas fa-user-plus', 1),
(15, 5, 'Pengurangan Penduduk', 'data_pengurangan_penduduk', 'fas fa-user-minus', 1),
(16, 5, 'Data Penduduk Sekarang', 'data_penduduk_sekarang', 'fas fa-user', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kode_rw`
--
ALTER TABLE `kode_rw`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penduduk_awal_pencatatan`
--
ALTER TABLE `penduduk_awal_pencatatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rw` (`id_rw`);

--
-- Indeks untuk tabel `penduduk_sekarang`
--
ALTER TABLE `penduduk_sekarang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rw` (`id_rw`);

--
-- Indeks untuk tabel `pengurangan_penduduk`
--
ALTER TABLE `pengurangan_penduduk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rw` (`id_rw`);

--
-- Indeks untuk tabel `pertambahan_penduduk`
--
ALTER TABLE `pertambahan_penduduk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rw` (`id_rw`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kode_rw`
--
ALTER TABLE `kode_rw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `penduduk_awal_pencatatan`
--
ALTER TABLE `penduduk_awal_pencatatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `penduduk_sekarang`
--
ALTER TABLE `penduduk_sekarang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `pengurangan_penduduk`
--
ALTER TABLE `pengurangan_penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT untuk tabel `pertambahan_penduduk`
--
ALTER TABLE `pertambahan_penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `penduduk_awal_pencatatan`
--
ALTER TABLE `penduduk_awal_pencatatan`
  ADD CONSTRAINT `penduduk_awal_pencatatan_ibfk_1` FOREIGN KEY (`id_rw`) REFERENCES `kode_rw` (`id`);

--
-- Ketidakleluasaan untuk tabel `penduduk_sekarang`
--
ALTER TABLE `penduduk_sekarang`
  ADD CONSTRAINT `penduduk_sekarang_ibfk_1` FOREIGN KEY (`id_rw`) REFERENCES `kode_rw` (`id`);

--
-- Ketidakleluasaan untuk tabel `pengurangan_penduduk`
--
ALTER TABLE `pengurangan_penduduk`
  ADD CONSTRAINT `pengurangan_penduduk_ibfk_1` FOREIGN KEY (`id_rw`) REFERENCES `kode_rw` (`id`);

--
-- Ketidakleluasaan untuk tabel `pertambahan_penduduk`
--
ALTER TABLE `pertambahan_penduduk`
  ADD CONSTRAINT `pertambahan_penduduk_ibfk_1` FOREIGN KEY (`id_rw`) REFERENCES `kode_rw` (`id`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`);

--
-- Ketidakleluasaan untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD CONSTRAINT `user_access_menu_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`),
  ADD CONSTRAINT `user_access_menu_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `user_menu` (`id`);

--
-- Ketidakleluasaan untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD CONSTRAINT `user_sub_menu_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `user_menu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
