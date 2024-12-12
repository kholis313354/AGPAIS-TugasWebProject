-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 12, 2024 at 12:54 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `presensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id_absen` int NOT NULL,
  `nip` int NOT NULL,
  `id_status` int DEFAULT NULL,
  `id_jadwal` int DEFAULT NULL,
  `tanggal_absen` date DEFAULT NULL,
  `jam_masuk` time DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `jam_keluar` time DEFAULT NULL,
  `keterangan` varchar(55) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foto_absen` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `latlong` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id_absen`, `nip`, `id_status`, `id_jadwal`, `tanggal_absen`, `jam_masuk`, `tgl_keluar`, `jam_keluar`, `keterangan`, `foto_absen`, `latlong`) VALUES
(227, 124, 1, 3, '2024-11-20', '08:32:32', '2024-11-20', '12:37:07', '183 kilometer, TERLAMBAT 33 menit', '124_2024-11-20.png', '-6.1537, 106.7425'),
(228, 123, 1, 6, '2024-11-23', '14:20:36', NULL, NULL, '15 kilometer', '123_2024-11-23.png', '-6.358519000000001, 107.28351750000002'),
(229, 123, 1, 1, '2024-11-25', '17:49:02', NULL, NULL, '23 kilometer', '123_2024-11-25.png', '-6.2898352391837395, 107.29223770790995'),
(230, 123, 2, NULL, '2024-11-26', '13:23:07', '2024-11-26', NULL, '', NULL, NULL),
(233, 123, 1, 3, '2024-11-27', '18:03:55', '2024-11-27', '18:12:32', '15 kilometer', '123_2024-11-27.png', '-6.3591224, 107.2838651'),
(234, 123, 2, NULL, '2024-12-05', '12:31:11', '2024-12-05', NULL, 'acara keluarga', '123_2024-12-05.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(30) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`) VALUES
(1, 'admin', '04108db789b7bca1d2298a6ff8cfea95', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `jabatan_id` int NOT NULL,
  `jabatan_nama` varchar(30) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`jabatan_id`, `jabatan_nama`) VALUES
(1, 'SMP 2 RENGASDENGLOK'),
(2, 'SMAN 3 RENGASDENGLOK'),
(3, 'SMKN 3 PEDES');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int NOT NULL,
  `nama_hari` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `waktu_masuk` time NOT NULL,
  `waktu_pulang` time NOT NULL,
  `status` varchar(11) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `nama_hari`, `waktu_masuk`, `waktu_pulang`, `status`) VALUES
(1, 'Senin', '18:45:00', '12:45:00', 'Aktif'),
(2, 'Selasa', '07:00:00', '12:00:00', 'Aktif'),
(3, 'Rabu', '19:00:00', '12:00:00', 'Aktif'),
(4, 'Kamis', '07:15:00', '12:45:00', 'Aktif'),
(5, 'Jumat', '07:15:00', '12:45:00', 'Aktif'),
(6, 'Sabtu', '15:15:00', '12:45:00', 'Aktif'),
(7, 'Minggu', '14:00:00', '12:00:00', 'Nonaktif');

-- --------------------------------------------------------

--
-- Table structure for table `penempatan`
--

CREATE TABLE `penempatan` (
  `penempatan_id` int NOT NULL,
  `penempatan_nama` varchar(11) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penempatan`
--

INSERT INTO `penempatan` (`penempatan_id`, `penempatan_nama`) VALUES
(1, '10'),
(2, '11'),
(3, '12'),
(4, 'DUA ORANG');

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id_pengaturan` int NOT NULL,
  `batas_telat` int NOT NULL,
  `jarak` int NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `fitur_foto` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`id_pengaturan`, `batas_telat`, `jarak`, `latitude`, `longitude`, `fitur_foto`) VALUES
(1, 190, 100, '-6.500362442242321', '107.30289953645705', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int NOT NULL,
  `nip` int NOT NULL,
  `nama` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `jabatan_id` int NOT NULL,
  `penempatan_id` int NOT NULL,
  `foto_profil` varchar(225) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nip`, `nama`, `password`, `jabatan_id`, `penempatan_id`, `foto_profil`) VALUES
(1, 123, 'Fitri handayani', '81dc9bdb52d04dc20036dbd8313ed055', 3, 3, '123_675144c003de4.png'),
(2, 124, 'kholis kamaluddin wahib', '202cb962ac59075b964b07152d234b70', 2, 3, '124_2203072.jpg'),
(50, 11231, 'annisa nurbaiti', '202cb962ac59075b964b07152d234b70', 2, 1, '11231_6742add88b9e7.png'),
(51, 313354, 'salsabila', '202cb962ac59075b964b07152d234b70', 1, 2, NULL),
(52, 2209, 'Ginnasyafa', '202cb962ac59075b964b07152d234b70', 2, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status_absen`
--

CREATE TABLE `status_absen` (
  `id_status` int NOT NULL,
  `nama_status` varchar(11) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status_absen`
--

INSERT INTO `status_absen` (`id_status`, `nama_status`) VALUES
(1, 'Hadir'),
(2, 'Izin'),
(3, 'Sakit'),
(4, 'Cuti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `nip` (`nip`),
  ADD KEY `id_jadwal` (`id_jadwal`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`jabatan_id`),
  ADD KEY `jabatan_id` (`jabatan_id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_jadwal` (`id_jadwal`);

--
-- Indexes for table `penempatan`
--
ALTER TABLE `penempatan`
  ADD PRIMARY KEY (`penempatan_id`),
  ADD KEY `penempatan_id` (`penempatan_id`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id_pengaturan`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`),
  ADD KEY `jabatan_id` (`jabatan_id`),
  ADD KEY `penempatan_id` (`penempatan_id`);

--
-- Indexes for table `status_absen`
--
ALTER TABLE `status_absen`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `jabatan_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `penempatan`
--
ALTER TABLE `penempatan`
  MODIFY `penempatan_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id_pengaturan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `status_absen`
--
ALTER TABLE `status_absen`
  MODIFY `id_status` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen`
--
ALTER TABLE `absen`
  ADD CONSTRAINT `absen_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `status_absen` (`id_status`),
  ADD CONSTRAINT `absen_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `pengguna` (`nip`),
  ADD CONSTRAINT `absen_ibfk_3` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`);

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatan` (`jabatan_id`),
  ADD CONSTRAINT `pengguna_ibfk_2` FOREIGN KEY (`penempatan_id`) REFERENCES `penempatan` (`penempatan_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
