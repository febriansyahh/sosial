-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jul 2021 pada 11.53
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sosial`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dana`
--

CREATE TABLE `dana` (
  `id` int(11) NOT NULL,
  `idProgram` int(11) DEFAULT NULL,
  `jumlah` bigint(20) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `donatur`
--

CREATE TABLE `donatur` (
  `id` int(11) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `jekel` enum('P','L') DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `no_hp` varchar(14) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(45) NOT NULL,
  `status` enum('Aktif','Nonaktif') NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `donatur`
--

INSERT INTO `donatur` (`id`, `nama`, `jekel`, `alamat`, `no_hp`, `username`, `password`, `status`, `tgl_daftar`) VALUES
(1, 'Febrian', 'L', 'Ds. Golantepus RT 01', '08980695197', 'riani', 'riani', 'Aktif', '2021-07-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lembaga`
--

CREATE TABLE `lembaga` (
  `id` int(11) NOT NULL,
  `kdLembaga` varchar(10) NOT NULL,
  `nmLembaga` varchar(60) NOT NULL,
  `jenis` enum('Sosial','Bencana','Yatim-Lansia') NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nmPimpinan` varchar(40) NOT NULL,
  `berkas` text NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `kdProgram` varchar(20) NOT NULL,
  `nmProgram` varchar(75) NOT NULL,
  `idLembaga` int(11) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `donasi` varchar(50) NOT NULL,
  `status` enum('T','P','A') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `super_user`
--

CREATE TABLE `super_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(20) NOT NULL,
  `idLembaga` int(11) DEFAULT NULL,
  `level` int(11) NOT NULL,
  `status` enum('Aktif','Nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `super_user`
--

INSERT INTO `super_user` (`id`, `nama`, `username`, `password`, `idLembaga`, `level`, `status`) VALUES
(1, 'Administrator Sistem', 'admin', 'admin', 0, 0, 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `idProgram` int(11) NOT NULL,
  `idDonatur` int(11) NOT NULL,
  `nominal` bigint(20) NOT NULL,
  `status` enum('K','T') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dana`
--
ALTER TABLE `dana`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lembaga`
--
ALTER TABLE `lembaga`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `super_user`
--
ALTER TABLE `super_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dana`
--
ALTER TABLE `dana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `donatur`
--
ALTER TABLE `donatur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `lembaga`
--
ALTER TABLE `lembaga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `super_user`
--
ALTER TABLE `super_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
