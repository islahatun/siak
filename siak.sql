-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 10:54 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

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
  `id_acc` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `surat` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `status` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acc_surat`
--

INSERT INTO `acc_surat` (`id_acc`, `nik`, `surat`, `tanggal`, `status`) VALUES
(2, '3601204107740005', 'ktp', '2021-07-30', ''),
(3, '3601204107740005', 'nikah', '2021-07-30', ''),
(4, '3601204107740005', 'nikah', '2021-07-31', ''),
(5, '3601204107740005', 'usaha', '2021-07-30', ''),
(6, '3601204107740005', 'sktm', '2021-07-30', ''),
(7, '3601204107740005', 'sktm', '2021-07-30', ''),
(8, '3601204107740005', 'nikah', '2021-08-02', ''),
(9, '3601204107740005', 'nikah', '2021-08-02', ''),
(10, '3601204107740005', 'ktp', '2021-08-05', ''),
(11, '3601204107740005', 'domisili', '2021-08-05', '');

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
(2, 8, 'masyarakat'),
(3, 2, 'masyarakat'),
(4, 3, 'masyarakat'),
(5, 4, 'masyarakat'),
(6, 5, 'masyarakat'),
(7, 6, 'masyarakat'),
(8, 7, 'masyarakat'),
(10, 11, 'masyarakat'),
(11, 10, 'masyarakat'),
(12, 9, 'admin'),
(13, 18, 'admin'),
(14, 19, 'admin'),
(15, 20, 'admin'),
(16, 21, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`, `foto`) VALUES
(2, 'Kegitan Sosialisasi Usaha Kecil Menengah', '<p>Salah satunya adalah pelatihan kewirausahaan yang diselenggarakan bg UMKM di desa Banjar. Acara pelatihan dimulai dengan Registrasi oleh peserta pada pukul 08.00 WIB. Peserta mengisi daftar hadir, penerimaan modul, ATK, dan materi. Adapun pPelaksanaan kegiatan pelatihan kewirausahaan bagi UMKM di wilayah Desa Banjar diawali dengan acara pembukaan. Pelatihan dibuka oleh Kepala Dinas Koperasi UKM dan ditemani oleh  Kepala Desa.Para peserta diseleksi melalui koordinasi antara padukuhan, desa,serta Dinas Koperasi Usaha Kecil dan Menengah  berdasarkan kriteria yang telah disusun dan disosialisasikan kepada masyarakat melalui rapat koordinasi dengan perangkat desa.</p>', 'WhatsApp_Image_2021-04-15_at_15_30_111.jpeg'),
(5, 'Kapolsek Banjar Hadiri “Panen Cabai Merah” Bersama Bupati Pandeglang Di Desa Banjar', '<p>Untuk mengawal kegiatan pemerintah tentang produksi tanaman sayuran yang bersumber dari dana APBN tahun 2017 Kapolsek Banjar AKP Reni Widowati hadiri panen cabai merah bersama Bupati Pandeglang Hj.Irna narulita di Desa Sukamanah kec.Kaduhejo kab.Pandeglang.Rabu 29/11. Dalam kesempatan tersebut Bupati Irna mengatakan bahwa cabai merah merupakan salah satu komoditas tanaman holtikultura yang sangat dibutuhkan dan merupakan kebutuhan pokok masyarakat banyak.&nbsp;Kapolsek Banjar bersama Bupati Pandeglang berkesempatan untuk memetik Cabai merah, kemudian acara dilanjutkan dengan Acara di lanjutkan dengan Penyerahan bantuan bibit tanaman Hortikultura untuk kelompok tani dalam program One Village One Product&nbsp;berupa bibit rambutan, bibit durian serta bibit cabai, untuk dibagikan dan ditanam dipekarangan rumah warga.</p>\r\n\r\n<p>&nbsp;</p>', 'foto_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ikut_pindah`
--

CREATE TABLE `ikut_pindah` (
  `nik_surat` varchar(16) NOT NULL,
  `nama_ikut` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ikut_pindah`
--

INSERT INTO `ikut_pindah` (`nik_surat`, `nama_ikut`) VALUES
('3601204107740005', 'Islahatun nufusi'),
('3601204107740005', 'Tania');

-- --------------------------------------------------------

--
-- Table structure for table `kampung`
--

CREATE TABLE `kampung` (
  `id` int(11) NOT NULL,
  `kampung` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kampung`
--

INSERT INTO `kampung` (`id`, `kampung`) VALUES
(1, 'Kadu Gedong'),
(2, 'Kukupu'),
(3, 'Pabuaran'),
(4, 'Duku Yasih'),
(5, 'Banjar'),
(6, 'Warnasan'),
(7, 'Kadu Kupa'),
(8, 'Cinunggal'),
(9, 'Bareno'),
(10, 'Kadu Jangkung'),
(11, 'Mengger'),
(12, 'Kadu Bale'),
(13, 'Kompleks Empang Sari');

-- --------------------------------------------------------

--
-- Table structure for table `ktp`
--

CREATE TABLE `ktp` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `surat` varchar(30) NOT NULL,
  `tanggal_surat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ktp`
--

INSERT INTO `ktp` (`id`, `nik`, `surat`, `tanggal_surat`) VALUES
(2, '3601204107740005', 'ktp', '2021-07-30'),
(3, '3601204107740005', 'ktp', '2021-08-05');

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
('3601204107740005', 'TITIN', '$2y$10$O.f4X.lKfOuSDBYFLD2mhewhbvLRsg/mAKP296fDIdSZ.WlqIdIka', 'masyarakat', '1'),
('123', 'SISKA', '$2y$10$Hj1cC2G9bD/osGC4kCE/H.OZKAe9yq17E1i3tFnEFrNdOUTButWu2', 'admin', '1'),
('3601204107740037', 'RENDI', '$2y$10$eJnTiaWxPX/gJyZ9qIIkjeAUt12kKOekl.fZvPZxxv3AVdDS/8xti', 'masyarakat', '1');

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
  `jk` varchar(15) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `rt/rw` varchar(10) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kabupaten` varchar(30) NOT NULL,
  `pendidikan_terakhir` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `kewarganegaraan` varchar(30) NOT NULL,
  `gol` varchar(3) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`id`, `kk`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jk`, `agama`, `alamat`, `rt/rw`, `desa`, `kecamatan`, `kabupaten`, `pendidikan_terakhir`, `pekerjaan`, `status`, `kewarganegaraan`, `gol`, `gambar`) VALUES
(3, '3601200801080513', '3601204107740005', 'TITIN', 'Pandeglang', '1974-01-07', 'LAKI LAKI', 'ISLAM', 'KP KUKUPU KUPU', '005/0021', 'BANJAR', 'BANJAR', 'PANDEGLANG', 'SMk', 'IBU RUMAH TANGGA', 'BELUM MENIKAH', 'INDONESIA', 'O', 'download.jpg'),
(8, '3601200801080541', '3601205107000002', 'AYUNI', 'PANDEGLANG', '2000-07-11', 'Perempuan', 'ISLAM', 'KP. KUKUPU', '005', '001', 'BANJAR', 'PANDEGLANG', 'SMA', 'PELAJAR/MAHASISWA', 'Belum Menikah', 'INDONESIA', 'B', 'default.jpg'),
(9, '3601200801080556', '3601204107740037', 'RENDI', 'PANDEGLANG', '1998-08-06', 'LAKI LAKI', 'ISLAM', 'KP. BANJAR', '002/001', 'BANJAR', 'BANJAR', 'PANDEGLANG', 'SMA', 'PELAJAR/MAHASISWA', 'BELUM MENIKAH', 'INDONESIA', 'O', 'default.jpg');

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
(1, 'Dashboard', 'admin'),
(2, 'Dashboard', 'masyarakat'),
(3, 'Profil', 'masyarakat/profil'),
(4, 'Surat Pengantar Perekaman KTP', 'surat/surat_ktp'),
(5, 'Surat SKTM', 'surat/surat_sktm'),
(6, 'Surat Izin Rame-Rame', 'surat/surat_rame'),
(7, 'Surat Izin Usaha', 'surat/surat_keterangan_usaha'),
(8, 'Surat Pindah', 'surat/surat_pindah'),
(9, 'Data Penduduk', 'admin/penduduk'),
(10, 'Surat Domisili', 'surat/surat_domisili'),
(11, 'Surat Tumpang Nikah', 'surat/surat_nikah'),
(18, 'Surat', 'admin/surat'),
(19, 'Tentang Desa', 'admin/desa'),
(20, 'Artikel', 'admin/artikel'),
(21, 'Admin', 'admin/admin');

-- --------------------------------------------------------

--
-- Table structure for table `struktur-organisasi`
--

CREATE TABLE `struktur-organisasi` (
  `id` int(11) NOT NULL,
  `lurah` varchar(50) NOT NULL,
  `sekretaris` varchar(50) NOT NULL,
  `bendahara` varchar(50) NOT NULL,
  `kasi_pelayanan` varchar(50) NOT NULL,
  `kasi_pemerintahan` varchar(50) NOT NULL,
  `kasi_pemberdayaan` varchar(50) NOT NULL,
  `kaur_perencanaan` varchar(50) NOT NULL,
  `kaur_keuangan` varchar(50) NOT NULL,
  `kaur_umum` varchar(50) NOT NULL,
  `kadus1` varchar(50) NOT NULL,
  `kadus2` varchar(50) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `struktur-organisasi`
--

INSERT INTO `struktur-organisasi` (`id`, `lurah`, `sekretaris`, `bendahara`, `kasi_pelayanan`, `kasi_pemerintahan`, `kasi_pemberdayaan`, `kaur_perencanaan`, `kaur_keuangan`, `kaur_umum`, `kadus1`, `kadus2`, `visi`, `misi`) VALUES
(1, 'umam', 'Santi Nurafrida', 'Rina Nuraini', 'Andri Putra', 'Imam', 'Candra', 'Sisi', 'Intan', 'Rima', 'Siska', 'Dwi Cahya', '<ol>\r\n	<li>pelayanan yang bagusmmmmmmmm</li>\r\n	<li>mmmmmmmmmmmmm</li>\r\n	<li>mmmmmmmmmmmmmmmmmmmmmmm</li>\r\n	<li>mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm mmmmmmmmmmmmmmmmm</li>\r\n</ol>', '<ol>\r\n	<li>melayani masyarakatg gggg</li>\r\n	<li>ggggggggggg ghrth dferg dfgffdgfxcvrtdcv xfertbaHAT G HAguihaOHkg67qw5</li>\r\n</ol>');

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
  `alamat_domisili` varchar(50) NOT NULL,
  `tanggal_surat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_domisili`
--

INSERT INTO `surat_domisili` (`id`, `nik`, `surat`, `alamat_domisili`, `tanggal_surat`) VALUES
(9, '3601204107740005', 'domisili', 'Serang', '2021-08-05');

-- --------------------------------------------------------

--
-- Table structure for table `surat_izin_rame`
--

CREATE TABLE `surat_izin_rame` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `surat` varchar(30) NOT NULL,
  `maksud` varchar(30) NOT NULL,
  `hiburan` varchar(100) NOT NULL,
  `tanggal_pelaksanaan` date NOT NULL,
  `waktu` time NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal_surat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `surat_nikah`
--

CREATE TABLE `surat_nikah` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `surat` varchar(30) NOT NULL,
  `pasangan` varchar(30) NOT NULL,
  `alamat_pasangan` varchar(200) NOT NULL,
  `tanggal_surat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_nikah`
--

INSERT INTO `surat_nikah` (`id`, `nik`, `surat`, `pasangan`, `alamat_pasangan`, `tanggal_surat`) VALUES
(1, '3601204107740005', 'nikah', 'Ardi', 'Kampung', '2021-07-30'),
(2, '3601204107740005', 'nikah', 'TATAN', 'Kota', '2021-07-31'),
(3, '3601204107740005', 'nikah', 'TATAN', 'kota', '2021-08-02'),
(4, '3601204107740005', 'nikah', 'Roni', 'Kabupaten', '2021-08-02');

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
  `alasan_pindah` varchar(100) NOT NULL,
  `tanggal_surat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `surat_sktm`
--

CREATE TABLE `surat_sktm` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `surat` varchar(20) NOT NULL,
  `alasan` varchar(225) NOT NULL,
  `tanggal_surat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_sktm`
--

INSERT INTO `surat_sktm` (`id`, `nik`, `surat`, `alasan`, `tanggal_surat`) VALUES
(1, '3601204107740005', 'sktm', 'Dana Bantuan', '2021-07-30'),
(2, '3601204107740005', 'sktm', 'Baksos', '2021-07-30');

-- --------------------------------------------------------

--
-- Table structure for table `surat_usaha`
--

CREATE TABLE `surat_usaha` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `surat` varchar(30) NOT NULL,
  `jenis_usaha` varchar(50) NOT NULL,
  `tempat_usaha` varchar(50) NOT NULL,
  `tanggal_surat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_usaha`
--

INSERT INTO `surat_usaha` (`id`, `nik`, `surat`, `jenis_usaha`, `tempat_usaha`, `tanggal_surat`) VALUES
(1, '3601204107740005', 'usaha', 'Toko Agen', 'Desa', '2021-07-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acc_surat`
--
ALTER TABLE `acc_surat`
  ADD PRIMARY KEY (`id_acc`);

--
-- Indexes for table `akses_menu`
--
ALTER TABLE `akses_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kampung`
--
ALTER TABLE `kampung`
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
-- Indexes for table `struktur-organisasi`
--
ALTER TABLE `struktur-organisasi`
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
  MODIFY `id_acc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `akses_menu`
--
ALTER TABLE `akses_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kampung`
--
ALTER TABLE `kampung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ktp`
--
ALTER TABLE `ktp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `masyarakat`
--
ALTER TABLE `masyarakat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `struktur-organisasi`
--
ALTER TABLE `struktur-organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `surat_domisili`
--
ALTER TABLE `surat_domisili`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `surat_izin_rame`
--
ALTER TABLE `surat_izin_rame`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surat_nikah`
--
ALTER TABLE `surat_nikah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `surat_pindah`
--
ALTER TABLE `surat_pindah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surat_sktm`
--
ALTER TABLE `surat_sktm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surat_usaha`
--
ALTER TABLE `surat_usaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
