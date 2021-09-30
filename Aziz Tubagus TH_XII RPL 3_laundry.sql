-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Sep 2021 pada 17.31
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `costumer`
--

CREATE TABLE `costumer` (
  `id` int(25) NOT NULL,
  `nama_costumer` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nomor_telepon` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `costumer`
--

INSERT INTO `costumer` (`id`, `nama_costumer`, `alamat`, `nomor_telepon`) VALUES
(13, 'Raiden Shogun', 'Inazuma, Teyvat', 98767890),
(14, 'Yae Guuji', 'Teyvat', 987656789),
(16, 'Yae Guuji', 'vefwFVBQJVFQEFV', 66666272),
(17, 'Raiden Shogun', 'teyvat', 987890987),
(18, 'Yae Guuji', 'dfghj', 98789),
(19, 'aziz tubagus th', 'Bandung', 2147483647),
(20, 'Raiden Shogun', 'teyvat', 987656789),
(21, 'aziz tubagus th', 'bandung', 9876789),
(22, 'Yae Guuji', 'teyvat', 4),
(23, 'Raiden Shogun', 'bnmhj', 2147483647);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id` int(25) NOT NULL,
  `jenis_layanan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id`, `jenis_layanan`) VALUES
(8, 'Dua Hari Jadi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderan`
--

CREATE TABLE `orderan` (
  `id` int(25) NOT NULL,
  `id_costumer` int(25) NOT NULL,
  `tanggal_order` date NOT NULL,
  `id_jenis` int(25) NOT NULL,
  `berat` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(25) NOT NULL,
  `id_orderan` int(25) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `total` int(50) NOT NULL,
  `bayar` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `costumer`
--
ALTER TABLE `costumer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orderan`
--
ALTER TABLE `orderan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_costumer` (`id_costumer`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_orderan` (`id_orderan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `costumer`
--
ALTER TABLE `costumer`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `orderan`
--
ALTER TABLE `orderan`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `orderan`
--
ALTER TABLE `orderan`
  ADD CONSTRAINT `orderan_ibfk_1` FOREIGN KEY (`id_costumer`) REFERENCES `costumer` (`id`),
  ADD CONSTRAINT `orderan_ibfk_2` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_orderan`) REFERENCES `orderan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
