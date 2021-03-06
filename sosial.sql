-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jul 2021 pada 13.58
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
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `status` enum('Aktif','Nonaktif') NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `donatur`
--

INSERT INTO `donatur` (`id`, `nama`, `jekel`, `alamat`, `no_hp`, `username`, `password`, `status`, `tgl_daftar`) VALUES
(2, 'Febrian', 'L', 'Ds. Golantepus RT 01', '08980695197', 'febrian', 'febrian', 'Nonaktif', '2021-07-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lembaga`
--

CREATE TABLE `lembaga` (
  `id` int(11) NOT NULL,
  `kdLembaga` varchar(10) NOT NULL,
  `nmLembaga` varchar(60) NOT NULL,
  `idJenis` int(2) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nmPimpinan` varchar(40) NOT NULL,
  `berkas` text DEFAULT NULL,
  `no_hp` varchar(14) NOT NULL,
  `no_rek` varchar(30) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lembaga`
--

INSERT INTO `lembaga` (`id`, `kdLembaga`, `nmLembaga`, `idJenis`, `alamat`, `nmPimpinan`, `berkas`, `no_hp`, `no_rek`, `tgl`) VALUES
(5, 'LMB003', 'Yayasan Pelita Hati Ku', 3, 'Ds. Mlati Kidul RT 01 RW 04 Kec. Kota Kudus', 'H. Nooryanto', 'Lembaga_Yayasan Pelita Hati Ku.zip', '0898767234', '088891817', '2021-07-09'),
(6, 'LMB004', 'Yayasan Pita Kuning', 4, 'Ds. Mlati Kidul RT 01 RW 04 Kec. Kota Kudus', 'Sunardi ', 'Lembaga_Yayasan Pita Kuning.zip', '0898767234', '088857444', '2021-07-09'),
(7, 'LMB005', 'Yayasan Pelita Hati Ku', 3, 'Ds. Golantepus RT 01', 'H. Nooryanto', 'Lembaga_Yayasan Pelita Hati Ku.zip', '0898767234', '131414144', '2021-07-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_jenis`
--

CREATE TABLE `mst_jenis` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `jenis` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mst_jenis`
--

INSERT INTO `mst_jenis` (`id`, `nama`, `jenis`) VALUES
(2, 'Bencana', 1),
(3, 'Yatim', 1),
(4, 'Lansia', 1),
(5, 'Perseorangan', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `perseorangan`
--

CREATE TABLE `perseorangan` (
  `id` int(11) NOT NULL,
  `kdPerseorangan` varchar(20) DEFAULT NULL,
  `nama` varchar(70) NOT NULL,
  `jekel` enum('P','L') NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `idJenis` int(2) NOT NULL,
  `berkas` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `no_rek` varchar(30) NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perseorangan`
--

INSERT INTO `perseorangan` (`id`, `kdPerseorangan`, `nama`, `jekel`, `alamat`, `idJenis`, `berkas`, `no_hp`, `no_rek`, `tgl_daftar`) VALUES
(3, 'DPM001', 'Lania Widiastuti Ningsih', 'P', 'Ds. Golantepus RT 01', 5, 'NULL', '08980695197', '0006576788', '2021-07-07'),
(4, 'DPM002', 'Lovan', 'L', 'Ds. Dawe', 5, 'Perseorangan_Lovan.1', '08980695197', '0006576788', '2021-07-09'),
(5, 'DPM003', 'Yudha Aris', 'L', 'Ds. Ploso', 5, 'Perseorangan_Yudha Aris.', '08980695197', '0006576788', '2021-07-09'),
(6, 'DPM004', 'Rina Widiastuti', 'P', 'Ds. Dersalam RT 01 RW 06 Kec Bae', 5, 'Perseorangan_Rina Widiastuti.zip', '08980695197', '0006576788', '2021-07-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `kdProgram` varchar(20) NOT NULL,
  `nmProgram` varchar(75) NOT NULL,
  `idLembaga` int(11) DEFAULT NULL,
  `gambar` varchar(300) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `donasi` varchar(50) NOT NULL,
  `status` enum('T','P','A') DEFAULT NULL,
  `idLevel` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `program`
--

INSERT INTO `program` (`id`, `kdProgram`, `nmProgram`, `idLembaga`, `gambar`, `keterangan`, `donasi`, `status`, `idLevel`) VALUES
(1, 'PLD01', 'Donasi Oksigen & Masker Covid-19', 3, NULL, 'Nantinya akan di sebarluaskan kepada para isoman', '2000000', 'P', 1);

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
(1, 'Administrator Sistem', 'admin', 'admin', 0, 0, 'Aktif'),
(2, 'Ali', 'ali', 'ali', 2, 2, 'Aktif'),
(3, 'Kepala Sie', 'kasie', 'kasie', 0, 1, 'Aktif'),
(4, 'Seksie', 'seksie', 'seksie', 0, 2, 'Aktif');

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `kdUser` varchar(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `status` enum('Aktif','Nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `kdUser`, `nama`, `username`, `password`, `status`) VALUES
(1, 'DPM001', 'Lania', 'lania', 'lania', 'Aktif'),
(4, 'DPM002', 'Lovaneo', 'lovan', 'lovan', 'Nonaktif'),
(5, 'DPM003', 'Yudha', 'yudha', 'yudha', 'Nonaktif'),
(6, 'DPM004', 'Rina', 'rina', 'rina123', 'Nonaktif');

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
-- Indeks untuk tabel `mst_jenis`
--
ALTER TABLE `mst_jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perseorangan`
--
ALTER TABLE `perseorangan`
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
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `lembaga`
--
ALTER TABLE `lembaga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `mst_jenis`
--
ALTER TABLE `mst_jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `perseorangan`
--
ALTER TABLE `perseorangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `super_user`
--
ALTER TABLE `super_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
