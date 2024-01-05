-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2021 at 10:30 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bayar_spp_tugasakhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(8) NOT NULL,
  `jurusan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `jurusan`) VALUES
(1, '12 rpl 3', 'Rekayasa Perangkat Lunak'),
(2, '12 rpl2', 'Rekayasa Perangkat Lunak '),
(3, '12 rpl 1', 'Rekayasa Perangkat Lunak'),
(5, '12 TKJ 1', 'Teknik Komputer Jaringan'),
(6, '12 TKJ 2', 'Teknik Komputer Jaringan');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `tgl_bayar` varchar(20) NOT NULL,
  `bulan_bayar` varchar(10) NOT NULL,
  `tahun_bayar` varchar(4) NOT NULL,
  `id_spp` int(11) NOT NULL,
  `jumlah_bayar` int(20) NOT NULL,
  `jumlah_kembalian` int(20) NOT NULL,
  `jam_bayar` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_petugas`, `id_siswa`, `tgl_bayar`, `bulan_bayar`, `tahun_bayar`, `id_spp`, `jumlah_bayar`, `jumlah_kembalian`, `jam_bayar`) VALUES
(1, 1, 1, '25 mar 2021', 'maret', '2021', 1, 200000, 65000, '20:59:28'),
(9, 1, 1, '26 Mar 2021', 'februari', '2021', 1, 200000, 65000, '14:29:30'),
(12, 1, 2, '26 Mar 2021', 'januari', '2021', 1, 300000, 165000, '16:52:47'),
(13, 1, 2, '27 Mar 2021', 'desember', '2020', 2, 200000, 75000, '14:53:06'),
(14, 1, 2, '27 Mar 2021', 'januari', '2021', 1, 200000, 65000, '19:19:19'),
(15, 1, 1, '28 Mar 2021', 'januari', '2021', 1, 140000, 5000, '10:28:48'),
(16, 1, 4, '28 Mar 2021', 'februari', '2021', 1, 140000, 5000, '10:53:03'),
(17, 2, 4, '28 Mar 2021', 'februari', '2021', 1, 140000, 5000, '14:57:21'),
(18, 1, 5, '29 Mar 2021', 'januari', '2021', 1, 140000, 5000, '15:39:17'),
(19, 1, 5, '29 Mar 2021', 'februari', '2021', 1, 135000, 0, '15:43:53'),
(20, 1, 5, '29 Mar 2021', 'maret', '2021', 1, 140000, 5000, '15:44:42'),
(21, 1, 4, '29 Mar 2021', 'maret', '2021', 1, 135000, 0, '15:55:49'),
(23, 1, 2, '29 Mar 2021', 'maret', '2021', 1, 135000, 0, '15:59:21'),
(24, 2, 5, '29 Mar 2021', 'april', '2021', 1, 135000, 0, '20:53:45');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `level` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`) VALUES
(1, 'admin', 'admin', 'Bambang suherdi', 'admin'),
(2, 'petugas', 'petugas', 'Awaludin nasution', 'petugas'),
(3, 'bambang', 'bambang123', 'bambang', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nisn` char(11) NOT NULL,
  `nis` char(8) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nisn`, `nis`, `password`, `nama`, `id_kelas`, `alamat`, `no_telp`) VALUES
(1, '0897364', '12000333', 'riski123', 'Riski maulana', 1, 'tjanom', '088123'),
(2, '06588023527', '98098098', 'bambang123', 'bambang', 2, 'tjgunting', '0835372990'),
(4, '0158642689', '18574362', 'bandi123', 'bandi', 1, 'sri gunting', '081567892468'),
(5, '90859898899', '88757649', 'titi123', 'titi', 5, 'mencirim', '089677463728');

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id_spp` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id_spp`, `tahun`, `nominal`) VALUES
(1, 2021, 135000),
(2, 2020, 125000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
