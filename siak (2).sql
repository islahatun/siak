-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 04:37 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siak`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc_surat`
--

CREATE TABLE `acc_surat` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `surat` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `status` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acc_surat`
--

INSERT INTO `acc_surat` (`id`, `nik`, `surat`, `tanggal`, `status`) VALUES
(1, '1234567890111213', 'ktp', '2018-06-21', ''),
(2, '1234567890111213', 'ktp', '2018-06-21', ''),
(3, '1234567890111213', 'usaha', '2018-06-21', ''),
(4, '1234567890111213', 'domisili', '2018-06-21', ''),
(5, '1234567890111213', 'domisili', '2018-06-21', ''),
(6, '1234567890111213', 'domisili', '2018-06-21', ''),
(7, '1234567890111213', 'rame', '2019-06-21', ''),
(8, '1234567890111213', 'usaha', '2019-06-21', ''),
(11, '1234567890111213', 'usaha', '2021-06-19', ''),
(12, '1234567890111213', 'nikah', '2021-06-19', ''),
(13, '1234567890111213', 'pindah', '2021-06-19', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nama` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `jabatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `akses_menu`
--

CREATE TABLE `akses_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akses_menu`
--

INSERT INTO `akses_menu` (`id`, `menu_id`, `level`) VALUES
(1, 1, 'admin'),
(2, 8, 'admin'),
(3, 2, 'masyarakat'),
(4, 3, 'masyarakat'),
(5, 4, 'masyarakat'),
(6, 5, 'masyarakat'),
(7, 6, 'masyarakat'),
(8, 7, 'masyarakat'),
(10, 11, 'masyarakat'),
(11, 10, 'masyarakat');

-- --------------------------------------------------------

--
-- Table structure for table `ktp`
--

CREATE TABLE `ktp` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `surat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ktp`
--

INSERT INTO `ktp` (`id`, `nik`, `surat`) VALUES
(2, '1234567890111213', 'ktp'),
(3, '1234567890111213', 'ktp');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `sandi` varchar(255) NOT NULL,
  `level` varchar(15) NOT NULL,
  `aktif` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`nik`, `nama`, `sandi`, `level`, `aktif`) VALUES
('120698', '', '$2y$10$EY9CtmpkT.6P15kd0.IUb.jcpYoIcp3oiJq8m5cAMYwhIPUyjIJZy', 'admin', '1'),
('1233', '', '$2y$10$JA5xYgGhyDttOnscD.fRIu3d5p14ibZZRP0/pMOmrUCnsmMZLZEr6', 'masyarakat', '1'),
('1234567890111213', 'Sifa', '$2y$10$5jX6JFUuJguuNtZwGVzTFeDmY2T6gw866V9idgbuUCVqFz0nWrD1.', 'masyarakat', '1'),
('3601204107740005', 'TITIN', '$2y$10$sVkioiTDf8atG8YiLdTg.ednAMHxDq2yU3BxjjvayPFkcltCWi3Oi', 'masyarakat', '1');

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `id` int(11) NOT NULL,
  `kk` varchar(16) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `rt/rw` varchar(10) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kabupaten` varchar(30) NOT NULL,
  `pendidikan_terakhir` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `status` enum('Belum Menikah','Menikah','','') NOT NULL,
  `kewarganegaraan` varchar(30) NOT NULL,
  `gol` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`id`, `kk`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jk`, `agama`, `alamat`, `rt/rw`, `desa`, `kecamatan`, `kabupaten`, `pendidikan_terakhir`, `pekerjaan`, `status`, `kewarganegaraan`, `gol`) VALUES
(3, '3601200801080513', '3601204107740005', 'TITIN', 'Pandeglang', '1974-01-07', 'Perempuan', 'Islam', 'KP KUKUPU', '005/001', 'BANJAR', 'BANJAR', 'PANDEGLANG', 'SMK', 'IBU RUMAH TANGGA', 'Menikah', 'indonesia', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama`, `url`) VALUES
(1, 'Dashboard', 'admin/dashboard'),
(2, 'Dashboard', 'masyarakat'),
(3, 'Profil', 'masyarakat/profil'),
(4, 'Surat Pengantar Perekaman KTP', 'surat/surat_ktp'),
(5, 'Surat SKTM', 'surat/surat_sktm'),
(6, 'Surat Izin Rame-Rame', 'surat/surat_rame'),
(7, 'Surat Izin Usaha', 'surat/surat_keterangan_usaha'),
(8, 'Surat Pindah', 'surat/surat_pindah'),
(9, 'Data Penduduk', 'admin'),
(10, 'Surat Domisili', 'surat/surat_domisili'),
(11, 'Surat Tumpang Nikah', 'surat/surat_nikah');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id` int(11) NOT NULL,
  `surat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id`, `surat`) VALUES
(1, 'ktp'),
(2, 'domisili'),
(3, 'rame'),
(4, 'pindah'),
(5, 'sktm'),
(6, 'usaha');

-- --------------------------------------------------------

--
-- Table structure for table `surat_domisili`
--

CREATE TABLE `surat_domisili` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `surat` varchar(16) NOT NULL,
  `alamat_domisili` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_domisili`
--

INSERT INTO `surat_domisili` (`id`, `nik`, `surat`, `alamat_domisili`) VALUES
(1, '1234567890111213', 'domisili', ''),
(2, '1234567890111213', 'domisili', ''),
(3, '1234567890111213', 'domisili', ''),
(4, '1234567890111213', 'rame', ''),
(5, '1234567890111213', 'nikah', '');

-- --------------------------------------------------------

--
-- Table structure for table `surat_izin_rame`
--

CREATE TABLE `surat_izin_rame` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `surat` varchar(30) NOT NULL,
  `maksud` varchar(30) NOT NULL,
  `tanggal_pelaksanaan` date NOT NULL,
  `waktu` time NOT NULL,
  `tempat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `surat_nikah`
--

CREATE TABLE `surat_nikah` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `surat` varchar(30) NOT NULL,
  `pasangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `surat_pindah`
--

CREATE TABLE `surat_pindah` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `surat` varchar(30) NOT NULL,
  `alamat_pindah` varchar(30) NOT NULL,
  `rt/rw_pindah` varchar(3) NOT NULL,
  `desa_pindah` varchar(30) NOT NULL,
  `kecamatan_pindah` varchar(30) NOT NULL,
  `kabupaten/kota_pindah` varchar(30) NOT NULL,
  `provinsi_pindah` varchar(30) NOT NULL,
  `alasan_pindah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_pindah`
--

INSERT INTO `surat_pindah` (`id`, `nik`, `surat`, `alamat_pindah`, `rt/rw_pindah`, `desa_pindah`, `kecamatan_pindah`, `kabupaten/kota_pindah`, `provinsi_pindah`, `alasan_pindah`) VALUES
(1, '1234567890111213', 'pindah', 'Kalapa Lima', '001', 'Sukamanah', 'Baros', 'Serang', 'Banten', 'Sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `surat_sktm`
--

CREATE TABLE `surat_sktm` (
  `id` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `id_surat` int(11) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `alasan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `surat_usaha`
--

CREATE TABLE `surat_usaha` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `surat` varchar(30) NOT NULL,
  `jenis_usaha` varchar(50) NOT NULL,
  `tempat_usaha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_usaha`
--

INSERT INTO `surat_usaha` (`id`, `nik`, `surat`, `jenis_usaha`, `tempat_usaha`) VALUES
(1, '1234567890111213', 'usaha', 'Agen Sembako', 'Serang'),
(2, '1234567890111213', 'usaha', 'jualan kramik', 'baros'),
(3, '1234567890111213', 'usaha', 'jualan kramik', 'baros'),
(4, '1234567890111213', 'usaha', 'jualan baju', 'baros'),
(5, '1234567890111213', 'usaha', 'jualan baju', 'baros'),
(6, '1234567890111213', 'usaha', 'jualan baju', 'baros');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acc_surat`
--
ALTER TABLE `acc_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akses_menu`
--
ALTER TABLE `akses_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ktp`
--
ALTER TABLE `ktp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_domisili`
--
ALTER TABLE `surat_domisili`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_izin_rame`
--
ALTER TABLE `surat_izin_rame`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_nikah`
--
ALTER TABLE `surat_nikah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_pindah`
--
ALTER TABLE `surat_pindah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_sktm`
--
ALTER TABLE `surat_sktm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_usaha`
--
ALTER TABLE `surat_usaha`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acc_surat`
--
ALTER TABLE `acc_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `akses_menu`
--
ALTER TABLE `akses_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ktp`
--
ALTER TABLE `ktp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `masyarakat`
--
ALTER TABLE `masyarakat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `surat_domisili`
--
ALTER TABLE `surat_domisili`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `surat_izin_rame`
--
ALTER TABLE `surat_izin_rame`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surat_nikah`
--
ALTER TABLE `surat_nikah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surat_pindah`
--
ALTER TABLE `surat_pindah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `surat_sktm`
--
ALTER TABLE `surat_sktm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surat_usaha`
--
ALTER TABLE `surat_usaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
