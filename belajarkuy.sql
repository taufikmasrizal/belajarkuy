-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jan 2021 pada 12.49
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajarkuy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(40) NOT NULL,
  `jenis_buku` char(30) NOT NULL,
  `pengarang` char(20) NOT NULL,
  `penerbit` char(30) NOT NULL,
  `file_buku` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `nama_buku`, `jenis_buku`, `pengarang`, `penerbit`, `file_buku`) VALUES
(2001, 'Rangkuman APSI', 'Materi Kompre paket 3', 'Taufik', 'Taufik', 'Rangkuman_APSI.pdf'),
(2002, 'Rangkuman IMK', 'Materi Kompre Paket 3', 'Taufik', 'Taufik', 'Rangkuman_IMK.pdf'),
(2003, 'Rangkuman SBD 2', 'Materi Kompre Paket 3', 'Taufik', 'Taufik', 'Rangkuman_SBD_2.pdf'),
(2004, 'Pengertian Sistem Dan Analisis Sistem', 'APSI', 'Gunadarma', 'Gunadarma', '1_Pengertian_Sistem_dan_Analisis_Sistem.pdf'),
(2005, 'Analisis Sistem', 'APSI', 'Gunadarma', 'Gunadarma', '2-3_Analisis_Sistem.pdf'),
(2006, 'Perancangan Sistem Secara Umum', 'APSI', 'Gunadarma', 'Gunadarma', '4_Perancangan_Sistem_Secara_Umum.pdf'),
(2007, 'Pendekatan Sistem Terstruktur DFD', 'APSI', 'Gunadarma', 'Gunadarma', '5-6_Pendekatan_Sistem_Terstruktur_DFD.pdf'),
(2008, 'Flowchart', 'APSI', 'Gunadarma', 'Gunadarma', '7_Flowchart.pdf'),
(2009, 'Perancangan Sistem Terinci', 'APSI', 'Gunadarma', 'Gunadarma', '8_Perancangan_Sistem_Secara_Terinci.pdf'),
(2010, 'Perancangan Sistem Terinci Database (nor', 'APSI', 'Gunadarma', 'Gunadarma', '9-10_Perancangan_SistemTerinci_Database.pdf'),
(2011, 'Perancangan Berorientasi Objek', 'APSI', 'Gunadarma', 'Gunadarma', '11_Perancangan_Berorientasi_Objek.pdf'),
(2012, 'Unified Modelling Language (UML)', 'APSI', 'Gunadarma', 'Gunadarma', '12_Unified_Modeling_Language.pdf'),
(2013, 'Perencanaan Sistem', 'APSI', 'Gunadarma', 'Gunadarma', 'Perencanaan_Sistem.pdf'),
(2014, 'Prinsip dan paragdima', 'IMK', 'Gunadarma', 'Gunadarma', 'M3-Prinsip,_paradigma.PDF'),
(2015, 'Model User', 'IMK', 'Gunadarma', 'Gunadarma', 'M4-Model_User.pdf'),
(2016, 'Notasi Dialog Dan Desain', 'IMK', 'Gunadarma', 'Gunadarma', 'M6-Notasi_Dialog_dan_Desain.PDF'),
(2017, 'Pendukung Implementasi', 'IMK', 'Gunadarma', 'Gunadarma', 'M9-Pendukung_Implementasi.PDF'),
(2018, 'Groupware', 'IMK', 'Gunadarma', 'Gunadarma', 'M10-Groupware.PDF'),
(2019, 'Model EER', 'SBD 2', 'Gunadarma', 'Gunadarma', '1._Model_EER_.pdf'),
(2020, 'Proses Perancangan Database', 'SBD 2', 'Gunadarma', 'Gunadarma', '2._proses_perancangan_database_.pdf'),
(2021, 'EER Diagram', 'SBD 2', 'Gunadarma', 'Gunadarma', '2-3_EER_diagram.pdf'),
(2022, 'Database Control', 'SBD 2', 'Gunadarma', 'Gunadarma', '3._DATABASE_CONTROL_.pdf'),
(2023, 'Object Oriented Database', 'SBD 2', 'Gunadarma', 'Gunadarma', '4._object_oriented_database_.pdf'),
(2024, 'Database Terdistribusi', 'SBD 2', 'Gunadarma', 'Gunadarma', '5._Database_Terdistribusi_.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `user_id` int(11) NOT NULL,
  `password` varchar(30) NOT NULL,
  `username` varchar(23) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`user_id`, `password`, `username`, `nama`) VALUES
(1001, 'admin', 'admin', 'taufik masrizal');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
