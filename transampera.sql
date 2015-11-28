-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 28 Nov 2015 pada 06.03
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transampera`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bus`
--

CREATE TABLE IF NOT EXISTS `tb_bus` (
  `no_bus` varchar(3) NOT NULL,
  `kapasitas` int(2) NOT NULL,
  `plat` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_bus`
--

INSERT INTO `tb_bus` (`no_bus`, `kapasitas`, `plat`) VALUES
('001', 35, 'BG2336OD'),
('002', 35, 'BG5674DH'),
('003', 35, 'BG3254AD'),
('004', 35, 'BG7856HG'),
('005', 35, 'BG4321NM'),
('006', 35, 'BG9876KL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_keberangkatan`
--

CREATE TABLE IF NOT EXISTS `tb_keberangkatan` (
  `id_keberangkatan` varchar(4) NOT NULL,
  `id_bus` varchar(3) NOT NULL,
  `kota_asal` varchar(100) NOT NULL,
  `kota_tujuan` varchar(100) NOT NULL,
  `jam_berangkat` time NOT NULL,
  `harga` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_keberangkatan`
--

INSERT INTO `tb_keberangkatan` (`id_keberangkatan`, `id_bus`, `kota_asal`, `kota_tujuan`, `jam_berangkat`, `harga`) VALUES
('001', '001', 'Palembang', 'Prabumulih', '08:00:00', 25000),
('002', '001', 'Prabumulih', 'Palembang', '11:00:00', 25000),
('003', '002', 'Palembang', 'Muaraenim', '08:00:00', 45000),
('004', '002', 'Muaraenim', 'Palembang', '13:00:00', 45000),
('005', '003', 'Palembang', 'Lahat', '08:00:00', 65000),
('006', '003', 'Lahat', 'Palembang', '14:00:00', 65000),
('007', '004', 'Palembang', 'Pagaralam', '09:00:00', 75000),
('008', '004', 'Pagaralam', 'Palembang', '18:00:00', 75000),
('009', '005', 'Palembang', 'OKI', '07:00:00', 120000),
('010', '005', 'OKI', 'Palembang', '14:00:00', 120000),
('011', '006', 'Palembang', 'OKU', '07:00:00', 180000),
('012', '006', 'Palemabng', 'OKU', '15:00:00', 180000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE IF NOT EXISTS `tb_login` (
  `Nama` varchar(30) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Status` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`Nama`, `Username`, `Password`, `Status`, `Email`) VALUES
('Admin', 'ADM', '1234', 'Admin', 'transampera@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tiket`
--

CREATE TABLE IF NOT EXISTS `tb_tiket` (
  `no_tiket` varchar(3) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `KTP` varchar(15) NOT NULL,
  `Alamat` text NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_keberangkatan` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tiket`
--

INSERT INTO `tb_tiket` (`no_tiket`, `Nama`, `KTP`, `Alamat`, `telepon`, `tanggal`, `kode_keberangkatan`) VALUES
('311', 'Idham', '09021081319001', 'Jalan Shirotolmustakim', '08123456789', '2015-12-01', '003');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bus`
--
ALTER TABLE `tb_bus`
  ADD PRIMARY KEY (`no_bus`);

--
-- Indexes for table `tb_keberangkatan`
--
ALTER TABLE `tb_keberangkatan`
  ADD PRIMARY KEY (`id_keberangkatan`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `tb_tiket`
--
ALTER TABLE `tb_tiket`
  ADD PRIMARY KEY (`no_tiket`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
