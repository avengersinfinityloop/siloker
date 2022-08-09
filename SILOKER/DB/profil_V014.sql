-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2022 at 04:47 PM
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
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `nik` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  `kebangsaan` varchar(17) NOT NULL,
  `gaji_harapan` int(10) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `lokasi` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` int(7) NOT NULL,
  `pendidikan` varchar(10) NOT NULL,
  `nama_sekolah` varchar(20) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `prestasi` text NOT NULL,
  `tahun_lulus` int(5) NOT NULL,
  `nilai` int(5) NOT NULL,
  `nama_perusahaan` varchar(20) NOT NULL,
  `jabatan` varchar(10) NOT NULL,
  `bidang` varchar(10) NOT NULL,
  `lokasi_kerja` varchar(15) NOT NULL,
  `gaji_pengalaman` int(10) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tipe_kontrak` varchar(15) NOT NULL,
  `nama_organisasi` varchar(20) NOT NULL,
  `posisi` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `periode` int(7) NOT NULL,
  `pelatihan` varchar(30) NOT NULL,
  `deskripsi_pelatihan` varchar(30) NOT NULL,
  `penyelenggara` varchar(30) NOT NULL,
  `tanggal_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`nik`, `username`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `status`, `kebangsaan`, `gaji_harapan`, `telepon`, `hp`, `email`, `lokasi`, `alamat`, `kode_pos`, `pendidikan`, `nama_sekolah`, `jurusan`, `prestasi`, `tahun_lulus`, `nilai`, `nama_perusahaan`, `jabatan`, `bidang`, `lokasi_kerja`, `gaji_pengalaman`, `tanggal_mulai`, `tipe_kontrak`, `nama_organisasi`, `posisi`, `deskripsi`, `periode`, `pelatihan`, `deskripsi_pelatihan`, `penyelenggara`, `tanggal_keluar`) VALUES
('11111', 'coba1', 'Andy', '2022-08-17', 'Pria', 'Lajang', 'Indonesia', 1000000, '66778899', '8912345', 'andy@email.com', 'Surabaya', 'jl maju terus pantang mundur nomer 123\r\n', 40123, 'Sarjana/S1', 'unikom', 'Elektro', 'juara 1 pencak silat\r\n', 2019, 3, 'pt tujuh sembilan', 'Manager', 'Komputer', 'Jakarta', 1000000, '2022-08-17', 'Kontrak', 'bem unikom', 'Sekretaris', 'mengolah dokumen bem\r\n', 2017, 'blk bekasi', 'pelatihan dari kementrian tena', 'kementrian tenaga kerja', '2022-08-16');

--
-- Indexes for dumped tables
--

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
-- Constraints for table `profil`
--
ALTER TABLE `profil`
  ADD CONSTRAINT `profil_ibfk_1` FOREIGN KEY (`username`) REFERENCES `login` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
