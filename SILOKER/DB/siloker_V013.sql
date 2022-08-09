-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2022 at 11:32 AM
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
('coba1', 'coba1'),
('mulhan123', 'mulhan123'),
('superadm', 'superadm');

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

--
-- Dumping data for table `loker`
--

INSERT INTO `loker` (`idloker`, `logo`, `nama_pt`, `bidang_kerja`, `lulusan_min`, `gender`, `usia_max`, `durasi`, `gaji`, `lokasi`, `deskripsi`, `link_pt`, `desk_lengkap`, `nik`) VALUES
(1, 'multimedia/image/mainloker/len.jpg', 'PT.LEN INDUSTRI (PERSERO)', 'IT MANAGER', 'S2', 'Pria', 30, 'Full TIme', '8000000', 'Bandung', 'Mampu bekerja sama dalam Tim, baik secara penampilan dan sikap, disiplin ilmu dan mampu memimpin suatu Divisi. Menguasai Managerial IT.', 'https://www.len.co.id/', 'https://www.len.co.id/karir/', '11111'),
(2, 'multimedia/image/mainloker/bell.jpg', 'PT. Trisulla Textille Industries, Tbk.', 'QC Passing', 'SMA/K/MA', 'All Gender', 25, 'Part TIme', '2500000', 'Jakarta', 'Mampu melakukan QC pass dengan teliti serta berpengalaman pada QC Tekstil. Mampu bekerja dalam rentang waktu yang ditentukan.', 'https://www.trisulatextile.com/', 'https://www.trisulatextile.com/karir/', '11111'),
(3, 'multimedia/image/mainloker/ateja.jpg', 'PT. Ateja Trinunggal', 'MESIN BOIL-UP', 'SMA/K/MA', 'All Gender', 35, 'Full TIme', '4500000', 'Purwakarta', 'Berpengalaman pada teknikal Boiling/Boiler, Mengutamakan K3LH dan mampu bekerja sama dalam Tim.', 'https://www.ateja.co.id/', 'https://www.career.ateja.co.id', '11111');

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
  `metode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `telepon` int(15) NOT NULL,
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
('11111', 'coba1', 'Andy', '2022-08-17', 'Pria', 'Lajang', 'Indonesia', 1000000, 66778899, '8912345', 'andy@email.com', 'Surabaya', 'jl maju terus pantang mundur nomer 123\r\n', 40123, 'Sarjana/S1', 'unikom', 'Elektro', 'juara 1 pencak silat\r\n', 2019, 3, 'pt tujuh sembilan', 'Manager', 'Komputer', 'Jakarta', 1000000, '2022-08-17', 'Kontrak', 'bem unikom', 'Sekretaris', 'mengolah dokumen bem\r\n', 2017, 'blk bekasi', 'pelatihan dari kementrian tena', 'kementrian tenaga kerja', '2022-08-16');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loker`
--
ALTER TABLE `loker`
  MODIFY `idloker` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
