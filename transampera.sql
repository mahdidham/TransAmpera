-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Nov 2015 pada 04.49
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `transampera`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bus`
--

CREATE TABLE IF NOT EXISTS `tb_bus` (
  `ID_bus` varchar(3) NOT NULL,
  `Kelas_bus` varchar(50) NOT NULL,
  `asal_bus` varchar(100) NOT NULL,
  `tujuan_bus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_destinasi`
--

CREATE TABLE IF NOT EXISTS `tb_destinasi` (
  `ID_pesanan` varchar(5) NOT NULL,
  `Kota_asal` varchar(100) NOT NULL,
  `Kota_tujuan` int(100) NOT NULL,
  `Tanggal_berangkat` date NOT NULL,
  `Tanggal_pulang` date NOT NULL,
  `Penumpang_dewasa` int(5) NOT NULL,
  `Penumpang_bayi` int(5) NOT NULL,
  `ID_bus` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tiket`
--

CREATE TABLE IF NOT EXISTS `tb_tiket` (
  `no_tiket` varchar(3) NOT NULL,
  `ID_pesanan` varchar(5) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `KTP` varchar(15) NOT NULL,
  `Alamat` text NOT NULL,
  `telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
