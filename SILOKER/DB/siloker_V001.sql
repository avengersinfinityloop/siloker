-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 07:38 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

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
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `nik` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `gender` varchar(2) NOT NULL,
  `usia_max` int(2) NOT NULL,
  `durasi` varchar(20) NOT NULL,
  `gaji` varchar(50) NOT NULL,
  `lokasi` varchar(15) NOT NULL,
  `deskripsi` text NOT NULL,
  `link_pt` varchar(20) NOT NULL,
  `desk_lengkap` text NOT NULL,
  `nik` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `online`
--

CREATE TABLE `online` (
  `nik` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL
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

--
-- Dumping data for table `pasang_iklan`
--

INSERT INTO `pasang_iklan` (`idIklan`, `tanggal`, `namaKursus`, `bidang`, `harga`, `wilayah`, `onlineOffline`, `imageRegister`, `nik`) VALUES
(1, '2022-07-22', 'IKLAN KURSUS 002', 'BAHASA INGGRIS', 'IKLAN KURSUS 002', 'IKLAN KURSUS 002', 'IKLAN KURSUS 002', 'multimedia/image/LibraryImage/1.jpg', '10121901');

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
  `metode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `nik` varchar(30) NOT NULL,
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

INSERT INTO `profil` (`nik`, `nama`, `tanggal-lahir`, `jenis-kelamin`, `status`, `kebangsaan`, `gaji-harapan`, `telepon`, `hp`, `email`, `lokasi`, `alamat`, `kode-pos`, `pendidikan`, `nama-sekolah`, `jurusan`, `prestasi`, `tahun-lulus`, `nilai`, `nama-perusahaan`, `jabatan`, `bidang`, `lokasi-kerja`, `gaji-pengalaman`, `tanggal-mulai`, `tipe-kontrak`, `nama-organisasi`, `posisi`, `deskripsi`, `periode`, `pelatihan`, `deskripsi-pelatihan`, `penyelenggara`, `tanggal-keluar`) VALUES
('10121901', 'Mulhan', '2022-07-19', 'Wanita', 'Menikah', 'Indonesia', 10000000, 14436, 2147483647, 'khaerunnisa@corp.bri.co.id', 'jakarta', 'ege', 3462, 'sd', 'sma ceria', 'komputer', 'aegef', 2019, 8, 'qwf', 'supervisio', 'ilmuwan', 'jakarta', 253466, '2022-07-17', 'paruh', 'bem', 'asff', 'afwef', 2017, 'asfwef', 'aefewf', 'aeegweg', '2022-07-13'),
('1673056603000002', 'Ayu Karmila', '2022-07-03', 'Pria', 'Menikah', 'Indonesia', 1221212, 14436, 2147483647, 'khaerunnisa203768@corp.bri.co.', 'surabaya', 'qwf', 3462, 'sederajat', 'sma ceria', 'industri', 'wqdqf', 2018, 8, 'qwf', 'manager', 'ilmuwan', 'jakarta', 253466, '2022-07-19', 'magang', 'bem', 'asff', 'qwfwe', 2019, 'asfwef', 'wefwe', 'aeegweg', '2022-07-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_kursus`
--
ALTER TABLE `daftar_kursus`
  ADD PRIMARY KEY (`idDaftar`),
  ADD KEY `idIklan` (`idIklan`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`) USING HASH,
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`idloker`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `online`
--
ALTER TABLE `online`
  ADD KEY `online_ibfk_2` (`username`),
  ADD KEY `online_ibfk_1` (`nik`);

--
-- Indexes for table `pasang_iklan`
--
ALTER TABLE `pasang_iklan`
  ADD PRIMARY KEY (`idIklan`);

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
  ADD PRIMARY KEY (`nik`);

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
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `profil` (`nik`);

--
-- Constraints for table `loker`
--
ALTER TABLE `loker`
  ADD CONSTRAINT `loker_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `profil` (`nik`);

--
-- Constraints for table `online`
--
ALTER TABLE `online`
  ADD CONSTRAINT `online_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `profil` (`nik`);

--
-- Constraints for table `pesertabootcamp`
--
ALTER TABLE `pesertabootcamp`
  ADD CONSTRAINT `pesertabootcamp_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `profil` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
