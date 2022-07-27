-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 05:33 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siloker`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_kursus`
--

CREATE TABLE `daftar_kursus` (
  `idDaftar` int(30) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `idIklan` int(30) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `freetrialbootcamp`
--

CREATE TABLE `freetrialbootcamp` (
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('mulhan123', 'mulhan123'),
('qwe', 'qwe');

-- --------------------------------------------------------

--
-- Table structure for table `loker`
--

CREATE TABLE `loker` (
  `idloker` int(20) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `nama_pt` varchar(100) NOT NULL,
  `bidang_kerja` varchar(50) NOT NULL,
  `lulusan_min` varchar(11) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `usia_max` int(2) NOT NULL,
  `durasi` varchar(20) NOT NULL,
  `gaji` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `link_pt` varchar(100) NOT NULL,
  `desk_lengkap` varchar(100) NOT NULL,
  `nik` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pasang_iklan`
--

CREATE TABLE `pasang_iklan` (
  `idIklan` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `namaKursus` varchar(50) NOT NULL,
  `bidang` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `wilayah` text NOT NULL,
  `onlineOffline` varchar(50) NOT NULL,
  `imageRegister` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pesertabootcamp`
--

CREATE TABLE `pesertabootcamp` (
  `nik` varchar(30) NOT NULL,
  `namaLengkap` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `noHP` int(20) NOT NULL,
  `kota` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(15) NOT NULL,
  `namaBootcamp` varchar(15) NOT NULL,
  `metode` varchar(20) NOT NULL,
  `freeTrialBootcamp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `nik` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `tanggal-lahir` date NOT NULL,
  `jenis-kelamin` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  `kebangsaan` varchar(17) NOT NULL,
  `gaji-harapan` int(10) NOT NULL,
  `telepon` int(15) NOT NULL,
  `hp` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `lokasi` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `kode-pos` int(7) NOT NULL,
  `pendidikan` varchar(10) NOT NULL,
  `nama-sekolah` varchar(20) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `prestasi` text NOT NULL,
  `tahun-lulus` int(5) NOT NULL,
  `nilai` int(5) NOT NULL,
  `nama-perusahaan` varchar(20) NOT NULL,
  `jabatan` varchar(10) NOT NULL,
  `bidang` varchar(10) NOT NULL,
  `lokasi-kerja` varchar(15) NOT NULL,
  `gaji-pengalaman` int(10) NOT NULL,
  `tanggal-mulai` date NOT NULL,
  `tipe-kontrak` varchar(15) NOT NULL,
  `nama-organisasi` varchar(20) NOT NULL,
  `posisi` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `periode` int(7) NOT NULL,
  `pelatihan` varchar(30) NOT NULL,
  `deskripsi-pelatihan` varchar(30) NOT NULL,
  `penyelenggara` varchar(30) NOT NULL,
  `tanggal-keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`nik`, `username`, `nama`, `tanggal-lahir`, `jenis-kelamin`, `status`, `kebangsaan`, `gaji-harapan`, `telepon`, `hp`, `email`, `lokasi`, `alamat`, `kode-pos`, `pendidikan`, `nama-sekolah`, `jurusan`, `prestasi`, `tahun-lulus`, `nilai`, `nama-perusahaan`, `jabatan`, `bidang`, `lokasi-kerja`, `gaji-pengalaman`, `tanggal-mulai`, `tipe-kontrak`, `nama-organisasi`, `posisi`, `deskripsi`, `periode`, `pelatihan`, `deskripsi-pelatihan`, `penyelenggara`, `tanggal-keluar`) VALUES
('3277 0127 0700 0017', 'mulhan123', 'DikyDbangkong', '2022-07-18', 'Pria', 'Janda/Duda', 'Indonesia', 10000000, 2147483647, 2147483647, 'khaerunnisa@corp.bri.co.id', 'jakarta', 'kbefe', 3462, 'diploma', 'sma ceria', 'manajemen', 'jkbfqlwf', 2017, 8, 'qwf', 'supervisio', 'ilmuwan', 'jakarta', 253466, '2022-07-06', 'magang', 'bem', 'asff', 'lanscklqwn', 2019, 'asfwef', 'NCKLNQF', 'aeegweg', '2022-07-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_kursus`
--
ALTER TABLE `daftar_kursus`
  ADD PRIMARY KEY (`idDaftar`),
  ADD KEY `nik` (`nik`),
  ADD KEY `daftar_kursus_ibfk_2` (`idIklan`);

--
-- Indexes for table `freetrialbootcamp`
--
ALTER TABLE `freetrialbootcamp`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`idloker`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `pasang_iklan`
--
ALTER TABLE `pasang_iklan`
  ADD PRIMARY KEY (`idIklan`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `pesertabootcamp`
--
ALTER TABLE `pesertabootcamp`
  ADD PRIMARY KEY (`noHP`),
  ADD KEY `pesertabootcamp_ibfk_1` (`nik`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `username` (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_kursus`
--
ALTER TABLE `daftar_kursus`
  ADD CONSTRAINT `daftar_kursus_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `profil` (`nik`),
  ADD CONSTRAINT `daftar_kursus_ibfk_2` FOREIGN KEY (`idIklan`) REFERENCES `pasang_iklan` (`idIklan`);

--
-- Constraints for table `loker`
--
ALTER TABLE `loker`
  ADD CONSTRAINT `loker_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `profil` (`nik`);

--
-- Constraints for table `pasang_iklan`
--
ALTER TABLE `pasang_iklan`
  ADD CONSTRAINT `pasang_iklan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `profil` (`nik`);

--
-- Constraints for table `pesertabootcamp`
--
ALTER TABLE `pesertabootcamp`
  ADD CONSTRAINT `pesertabootcamp_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `profil` (`nik`);

--
-- Constraints for table `profil`
--
ALTER TABLE `profil`
  ADD CONSTRAINT `profil_ibfk_1` FOREIGN KEY (`username`) REFERENCES `login` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
