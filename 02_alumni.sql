-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2020 at 09:58 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `02_alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_alumni`
--

CREATE TABLE `tb_alumni` (
  `id_alumni` int(11) NOT NULL,
  `nis` varchar(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `tempat_lhr` varchar(100) NOT NULL,
  `tgl_lhr` varchar(100) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `id_jur` int(11) NOT NULL,
  `marhalah` varchar(100) NOT NULL,
  `no` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `poto` text NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `id_kec` int(11) NOT NULL,
  `id_kab` int(11) NOT NULL,
  `id_prov` int(11) NOT NULL,
  `lattitude` text NOT NULL,
  `longitude` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `creat_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_alumni`
--

INSERT INTO `tb_alumni` (`id_alumni`, `nis`, `nama`, `jk`, `tempat_lhr`, `tgl_lhr`, `angkatan`, `id_jur`, `marhalah`, `no`, `email`, `poto`, `pekerjaan`, `alamat`, `id_kec`, `id_kab`, `id_prov`, `lattitude`, `longitude`, `password`, `creat_at`) VALUES
(1, '10', 'AMELINA', '', 'selong', '2020-08-13', 2016, 0, 'dsd', '2323', '1@gmail.com', '001_login-admin.png', 'dsd', 'dsd', 0, 0, 0, '-8.881332808743238', '117.23448407656389', '12', '2020-08-25 16:28:57'),
(4, '2002', 'HGUSNUL KHATIMAH', 'Perempuan', 'ewewewe', '2020-08-18', 3232, 2, 'dsds', '232323', 'berugakitlombok@gmail.com', '01_login-alumni.png', 'ewe', 'ewe', 0, 0, 0, '-8.451839568457657', '117.2417736802276', '2002', '2020-08-29 08:58:56'),
(5, '12', 'MUHAMMAD FAHRURROZI', '', '', '', 0, 1, '', '', '', '', '', '', 0, 0, 0, '', '', '12', '2020-09-01 14:16:22');

-- --------------------------------------------------------

--
-- Table structure for table `tb_info`
--

CREATE TABLE `tb_info` (
  `id_info` int(11) NOT NULL,
  `nama_info` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `info` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_info`
--

INSERT INTO `tb_info` (`id_info`, `nama_info`, `gambar`, `info`, `create_at`) VALUES
(1, 'INFO ALUMNI', '001_login-admin.png', 'Assalamualaiku.Wr.Wb', '2020-08-28 07:25:45'),
(2, 'dewew', '005_halaman-data-info-alumni1.png', 'ewewew', '2020-08-29 09:02:38');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id_jur` int(11) NOT NULL,
  `kode_jurusan` varchar(50) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jur`, `kode_jurusan`, `jurusan`) VALUES
(1, '001', 'IPS'),
(2, '002', 'IPA\r\n'),
(3, '003', 'BAHASA INDONESIA'),
(4, '004', 'AGAMA ISLAM');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kabupaten`
--

CREATE TABLE `tb_kabupaten` (
  `id_kab` int(11) NOT NULL,
  `id_prov` int(11) NOT NULL,
  `kabupaten` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kabupaten`
--

INSERT INTO `tb_kabupaten` (`id_kab`, `id_prov`, `kabupaten`) VALUES
(1, 1, 'LOMBOK TIMUR'),
(2, 1, 'LOMBOK BARAT'),
(3, 1, 'LOMOBOK TENGAH'),
(4, 1, 'LOMBOK UTARA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kecamatan`
--

CREATE TABLE `tb_kecamatan` (
  `id_kec` int(11) NOT NULL,
  `id_kab` int(11) NOT NULL,
  `kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kecamatan`
--

INSERT INTO `tb_kecamatan` (`id_kec`, `id_kab`, `kecamatan`) VALUES
(1, 1, 'JEROWARU'),
(2, 1, 'SELONG'),
(3, 1, 'KERUAK');

-- --------------------------------------------------------

--
-- Table structure for table `tb_provinsi`
--

CREATE TABLE `tb_provinsi` (
  `id_prov` int(11) NOT NULL,
  `provinsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_provinsi`
--

INSERT INTO `tb_provinsi` (`id_prov`, `provinsi`) VALUES
(1, 'NTB');

-- --------------------------------------------------------

--
-- Table structure for table `tb_wali`
--

CREATE TABLE `tb_wali` (
  `id_wali` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibuk` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `pekerjaan_ibuk` varchar(100) NOT NULL,
  `no_wali` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_wali`
--

INSERT INTO `tb_wali` (`id_wali`, `id_alumni`, `nama_ayah`, `nama_ibuk`, `pekerjaan_ayah`, `pekerjaan_ibuk`, `no_wali`) VALUES
(5, 1, 'UDIN asasa', 'SANTI', 'da', 'GURU', '08786330141');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_alumni`
--
ALTER TABLE `tb_alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `tb_info`
--
ALTER TABLE `tb_info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id_jur`);

--
-- Indexes for table `tb_kabupaten`
--
ALTER TABLE `tb_kabupaten`
  ADD PRIMARY KEY (`id_kab`);

--
-- Indexes for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  ADD PRIMARY KEY (`id_kec`);

--
-- Indexes for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  ADD PRIMARY KEY (`id_prov`);

--
-- Indexes for table `tb_wali`
--
ALTER TABLE `tb_wali`
  ADD PRIMARY KEY (`id_wali`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_alumni`
--
ALTER TABLE `tb_alumni`
  MODIFY `id_alumni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_info`
--
ALTER TABLE `tb_info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id_jur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_kabupaten`
--
ALTER TABLE `tb_kabupaten`
  MODIFY `id_kab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  MODIFY `id_kec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  MODIFY `id_prov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_wali`
--
ALTER TABLE `tb_wali`
  MODIFY `id_wali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
