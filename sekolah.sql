-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 03:51 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftar`
--

CREATE TABLE `tb_daftar` (
  `id_daftar` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jk` varchar(5) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(30) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `jalan` varchar(150) NOT NULL,
  `rt` int(11) NOT NULL,
  `rw` int(11) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `emai` varchar(100) NOT NULL,
  `asal_smp` varchar(100) NOT NULL,
  `nisn` int(11) NOT NULL,
  `no_kk` int(11) NOT NULL,
  `nik_siswa` int(11) NOT NULL,
  `nik_ayah` int(11) NOT NULL,
  `nik_ibu` int(11) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `minat_program` varchar(100) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `anak_ke` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_daftar`
--

INSERT INTO `tb_daftar` (`id_daftar`, `nama_lengkap`, `jk`, `tanggal_lahir`, `agama`, `nama_ayah`, `nama_ibu`, `telp`, `jalan`, `rt`, `rw`, `desa`, `kelurahan`, `kecamatan`, `kabupaten`, `kode_pos`, `emai`, `asal_smp`, `nisn`, `no_kk`, `nik_siswa`, `nik_ayah`, `nik_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `minat_program`, `berat_badan`, `anak_ke`) VALUES
(4, 'rizky', 'lk', '2020-04-08', 'islam', 'miftah', 'sinta', '081315006236', 'jalan raya ', 2, 9, 'benda', 'benda', 'cicurug', 'sukabumi', 123, 'risky.mpangestu@gmail.com', 'smpn 1 cicurug', 1211, 3545, 3424, 342, 243, 'wiraswasta', 'ibu rumah tangga', 'rpl', 75, 1),
(5, 'kristian', 'p', '2020-04-01', 'kristen', 'ini nama ayah,', 'ini nama ibu', '1213', 'dfs', 21, 12, 'ds', 'ini kelurahan,', 'ini kecamatan,', 'ini kabupaten,', 1232, 'risky.mpangestu@gmail.com', 'smp bpk penabur', 6567, 765, 876, 7654, 8765, 'ini pekerjaan ayah,', 'ini pekerjaan ibu,', 'tkj', 45, 2),
(8, 'Ucok ', 'lk', '2020-04-14', 'islam', 'sdfsdf', 'sfd', '324', 'okjh', 87, 765, 'kjhg', 'lkjhg', 'kjhgf', 'olkjhg', 5454, 'risky.mpangestu@gmail.com', 'smpn 1 cicurug', 987, 98, 876, 876, 876, 'wiraswasta', 'ibu rumah tangga', 'rpl', 435, 6),
(9, 'panestu', 'lk', '2020-04-14', 'islam', 'sdfsdf', 'sfd', '324', 'okjh', 87, 765, 'kjhg', 'lkjhg', 'kjhgf', 'olkjhg', 5454, 'risky.mpangestu@gmail.com', 'smpn 1 cicurug', 987, 98, 876, 876, 876, 'wiraswasta', 'ibu rumah tangga', 'rpl', 435, 6),
(10, 'lalla', 'lk', '2020-04-14', 'islam', 'sdfsdf', 'sfd', '324', 'okjh', 87, 765, 'kjhg', 'lkjhg', 'kjhgf', 'olkjhg', 5454, 'risky.mpangestu@gmail.com', 'smpn 1 cicurug', 987, 98, 876, 876, 876, 'wiraswasta', 'ibu rumah tangga', 'rpl', 435, 6),
(11, 'Syakira', 'p', '2020-04-06', 'islam', 'miftah', 'sinta', '08128282635', 'jln.siliwangi', 2, 9, 'benda', 'benda', 'cicurug', 'sukabumi', 43359, 'syakira@gmail.com', 'smp al husna', 123392, 3242, 43532, 24234, 2342, 'wiraswasta', 'ibu rumah tangga', 'rpl', 30, 3),
(14, 'ahmad', 'lk', '2020-04-06', 'islam', 'abram', 'siti', '0812373737', 'jln.cigombong', 9, 11, 'bojong kiharib', 'bojong', 'cigombong', 'bogor', 43357, 'ahmedtulang@gmail.com', 'smp mega mendung', 12383, 11213122, 333233, 142314, 14144, 'wiraswasta', 'ibu rumah tangga', 'rpl', 32, 1),
(15, 'Honda Tohru', 'p', '2020-04-25', 'islam', 'honda tsukisima', 'honda hanazawa', '08128282633', 'jln.kyoto', 2, 9, 'kyoto', 'kyoto', 'kyoto', 'kyoto', 12323, 'tohruhonda@gmail.com', 'smp kyoto', 12232, 12123, 234234, 2312, 3213, 'Karyawan', 'Ibu Rumah Tangga', 'tkj', 38, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_daftar`
--
ALTER TABLE `tb_daftar`
  ADD PRIMARY KEY (`id_daftar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_daftar`
--
ALTER TABLE `tb_daftar`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
