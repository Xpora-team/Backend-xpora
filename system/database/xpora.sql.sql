-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2022 at 04:27 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xpora`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `user_id` int(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `region` varchar(15) NOT NULL,
  `commodity_category` varchar(50) NOT NULL,
  `user_type` varchar(15) NOT NULL,
  `create_date` date NOT NULL,
  `verifikasi` varchar(20) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`user_id`, `user_name`, `company_name`, `region`, `commodity_category`, `user_type`, `create_date`, `verifikasi`, `picture`) VALUES
(1, 'Mandin Penyaluhan', 'asasapo', 'Indonesia', 'asasasa', 'Seller', '2022-03-11', 'Not Verified', 'Mermaid.png'),
(2, 'modal_test', 'asasapoasasa', 'Malaysia', 'asasasa', 'Buyer', '2022-03-11', 'Not Verified', '37_Short_Motivational_Quotes_To_Light_Up_Your_Fire_In_6_Words.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `commodities_post`
--

CREATE TABLE `commodities_post` (
  `id_commoditi` int(15) NOT NULL,
  `nama_komoditas` varchar(50) NOT NULL,
  `qty_komoditas` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_diri`
--

CREATE TABLE `data_diri` (
  `id_diri` int(10) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `npwp` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(70) NOT NULL,
  `alamat` text NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_diri`
--

INSERT INTO `data_diri` (`id_diri`, `nama_pemilik`, `nik`, `npwp`, `no_telp`, `email`, `alamat`, `user_type`) VALUES
(1, 'Mandin Penyaluhan', '112120812012', '1121208120', '08121282445', 'jpema@gmail.com', 'asasas', 'Seller'),
(2, 'modal_test', '1121208120111', '1121208120111', '08121281111', 'admin@gmail.co', '1121208120111', 'Buyer');

-- --------------------------------------------------------

--
-- Table structure for table `data_usaha`
--

CREATE TABLE `data_usaha` (
  `id_usaha` int(10) NOT NULL,
  `nama_usaha` varchar(50) NOT NULL,
  `domisili` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `website` text NOT NULL,
  `bidang_usaha` varchar(50) NOT NULL,
  `komoditi` varchar(50) NOT NULL,
  `skala` varchar(50) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `nib` varchar(50) NOT NULL,
  `npwp_perusahaan` varchar(50) NOT NULL,
  `no_siup` varchar(50) NOT NULL,
  `no_peb` varchar(50) NOT NULL,
  `no_akta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_usaha`
--

INSERT INTO `data_usaha` (`id_usaha`, `nama_usaha`, `domisili`, `email`, `website`, `bidang_usaha`, `komoditi`, `skala`, `satuan`, `nib`, `npwp_perusahaan`, `no_siup`, `no_peb`, `no_akta`) VALUES
(1, 'asasapo', 'popipiasasa', 'jpem@gmail.comaas', 'asasasa', 'sas', 'asasasa', 'sds', 'cm', '12121212121', '121211212121', '11212081', '11212081', '11212081'),
(2, 'asasapoasasa', 'popipiasasaqq', 'jpem@gmail.coma', 'asasasa', 'sasasa', 'asasasa', 'sds', 'cm', '112120', '112120', '112120', '112120', '112120');

-- --------------------------------------------------------

--
-- Table structure for table `inspirasi`
--

CREATE TABLE `inspirasi` (
  `id_inspirasi` int(10) NOT NULL,
  `nama_kelas` varchar(75) NOT NULL,
  `kategory` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `start_date` date NOT NULL,
  `progres` varchar(10) NOT NULL,
  `finish_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kuantitas`
--

CREATE TABLE `kuantitas` (
  `id_kuantitas` int(11) NOT NULL,
  `nama_komoditas` varchar(50) NOT NULL,
  `kuantitas` varchar(50) NOT NULL,
  `kestabilan_gradeone` varchar(50) NOT NULL,
  `kestabilan_gradetwo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `matchmaking_log`
--

CREATE TABLE `matchmaking_log` (
  `id_matchmaking` int(11) NOT NULL,
  `komoditas` varchar(50) NOT NULL,
  `buyer` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penggunaan_produk`
--

CREATE TABLE `penggunaan_produk` (
  `id_produkbni` int(25) NOT NULL,
  `tabungan_bisnis` varchar(30) NOT NULL,
  `nomor_rekening` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `request_post`
--

CREATE TABLE `request_post` (
  `id_request` int(15) NOT NULL,
  `nama_komoditas` varchar(50) NOT NULL,
  `qty_komoditas` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_ekspor`
--

CREATE TABLE `riwayat_ekspor` (
  `id_riwayat` int(15) NOT NULL,
  `komoditas` varchar(50) NOT NULL,
  `qty` varchar(15) NOT NULL,
  `frekuensi` varchar(20) NOT NULL,
  `incoterm` varchar(50) NOT NULL,
  `shipment` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi_legalitas`
--

CREATE TABLE `verifikasi_legalitas` (
  `nib` varchar(50) NOT NULL,
  `npwp` varchar(50) NOT NULL,
  `no_siup` varchar(50) NOT NULL,
  `no_peb` varchar(50) NOT NULL,
  `no_akta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`user_id`) USING BTREE;

--
-- Indexes for table `commodities_post`
--
ALTER TABLE `commodities_post`
  ADD PRIMARY KEY (`id_commoditi`);

--
-- Indexes for table `data_diri`
--
ALTER TABLE `data_diri`
  ADD PRIMARY KEY (`id_diri`);

--
-- Indexes for table `data_usaha`
--
ALTER TABLE `data_usaha`
  ADD PRIMARY KEY (`id_usaha`);

--
-- Indexes for table `inspirasi`
--
ALTER TABLE `inspirasi`
  ADD PRIMARY KEY (`id_inspirasi`);

--
-- Indexes for table `kuantitas`
--
ALTER TABLE `kuantitas`
  ADD PRIMARY KEY (`id_kuantitas`);

--
-- Indexes for table `matchmaking_log`
--
ALTER TABLE `matchmaking_log`
  ADD PRIMARY KEY (`id_matchmaking`);

--
-- Indexes for table `penggunaan_produk`
--
ALTER TABLE `penggunaan_produk`
  ADD PRIMARY KEY (`id_produkbni`);

--
-- Indexes for table `request_post`
--
ALTER TABLE `request_post`
  ADD PRIMARY KEY (`id_request`);

--
-- Indexes for table `riwayat_ekspor`
--
ALTER TABLE `riwayat_ekspor`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indexes for table `verifikasi_legalitas`
--
ALTER TABLE `verifikasi_legalitas`
  ADD PRIMARY KEY (`nib`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `commodities_post`
--
ALTER TABLE `commodities_post`
  MODIFY `id_commoditi` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_diri`
--
ALTER TABLE `data_diri`
  MODIFY `id_diri` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_usaha`
--
ALTER TABLE `data_usaha`
  MODIFY `id_usaha` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inspirasi`
--
ALTER TABLE `inspirasi`
  MODIFY `id_inspirasi` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kuantitas`
--
ALTER TABLE `kuantitas`
  MODIFY `id_kuantitas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matchmaking_log`
--
ALTER TABLE `matchmaking_log`
  MODIFY `id_matchmaking` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penggunaan_produk`
--
ALTER TABLE `penggunaan_produk`
  MODIFY `id_produkbni` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request_post`
--
ALTER TABLE `request_post`
  MODIFY `id_request` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `riwayat_ekspor`
--
ALTER TABLE `riwayat_ekspor`
  MODIFY `id_riwayat` int(15) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
