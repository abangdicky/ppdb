-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2019 at 10:23 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mugas`
--

-- --------------------------------------------------------

--
-- Table structure for table `ntz_data_siswa`
--

CREATE TABLE `ntz_data_siswa` (
  `id` int(10) NOT NULL,
  `nopes` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `NIPD` varchar(10) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `NISN` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `kebutuhan_khusus` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `RT` varchar(10) NOT NULL,
  `RW` varchar(10) NOT NULL,
  `dusun` varchar(20) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `alat_transportasi` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis_tinggal` varchar(50) NOT NULL,
  `anak_ke` int(10) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `SKHUN` varchar(20) NOT NULL,
  `penerima_KPS` enum('Ya','Tidak') NOT NULL,
  `no_KPS` varchar(20) NOT NULL,
  `rombel_saat_ini` varchar(10) NOT NULL,
  `status` enum('baru','lama') NOT NULL,
  `jalur` varchar(15) NOT NULL,
  `log` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ntz_data_siswa`
--

INSERT INTO `ntz_data_siswa` (`id`, `nopes`, `nama_lengkap`, `NIPD`, `jk`, `NISN`, `tempat_lahir`, `tgl_lahir`, `NIK`, `agama`, `kebutuhan_khusus`, `kewarganegaraan`, `alamat`, `RT`, `RW`, `dusun`, `kelurahan`, `kecamatan`, `alat_transportasi`, `telepon`, `hp`, `email`, `jenis_tinggal`, `anak_ke`, `kode_pos`, `SKHUN`, `penerima_KPS`, `no_KPS`, `rombel_saat_ini`, `status`, `jalur`, `log`) VALUES
(1, '2718809079374', 'Tsitna Fatimatuz Zahroh', '12345', 'P', '1234566789', 'Malang', '1997-07-31', '79283795823', 'Islam', 'Tidak', 'Indonesia', 'Tangkilsari', '16', '04', 'Tangkilsari', 'Tangkilsari', 'Tajinan', 'Kendaraan Pribadi', '083835963117', '083835963117', 'ntizzt@gmail.com', 'Bersama Orang Tua', 0, '64571', 'N', '', '', '', 'baru', '', '2019-12-23 15:05:16');

-- --------------------------------------------------------

--
-- Table structure for table `ntz_data_user`
--

CREATE TABLE `ntz_data_user` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `log` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ntz_data_user`
--

INSERT INTO `ntz_data_user` (`id`, `username`, `password`, `nama_lengkap`, `level`, `log`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'Administrator', 'admin', '2019-12-23 15:19:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ntz_data_siswa`
--
ALTER TABLE `ntz_data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ntz_data_user`
--
ALTER TABLE `ntz_data_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ntz_data_siswa`
--
ALTER TABLE `ntz_data_siswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ntz_data_user`
--
ALTER TABLE `ntz_data_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
