-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jun 2023 pada 13.36
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_travel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daerah_wisata`
--

CREATE TABLE `daerah_wisata` (
  `id_daerah_wisata` int(11) NOT NULL,
  `name_dw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daerah_wisata`
--

INSERT INTO `daerah_wisata` (`id_daerah_wisata`, `name_dw`) VALUES
(1, 'Bali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `deskripsi_fasilitas` text NOT NULL,
  `id_tempat_wisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `deskripsi_fasilitas`, `id_tempat_wisata`) VALUES
(2, '- Toilet\r\n- Rest Area\r\n- Worship place\r\n- Penyewaan Kendaraan', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `image`
--

CREATE TABLE `image` (
  `id_image` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_satu` varchar(255) NOT NULL,
  `image_dua` varchar(255) NOT NULL,
  `id_tempat_wisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `image`
--

INSERT INTO `image` (`id_image`, `image`, `image_satu`, `image_dua`, `id_tempat_wisata`) VALUES
(1, 'Shoes Black Jumper.jpg', 'Shoes Blue Grey.jpg', 'Shoes Blue White.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `name_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `name_kategori`) VALUES
(1, 'Pantai'),
(2, 'Sejarah'),
(3, 'Pegunungan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `name_user` varchar(100) NOT NULL,
  `id_tempat_wisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `komentar`, `name_user`, `id_tempat_wisata`) VALUES
(1, 'Tempat Wisatanya Bagus, Enak Dilihat dari Bawah Tanah', 'Adrianta', 1),
(2, 'klo', 'yuga', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat_wisata`
--

CREATE TABLE `tempat_wisata` (
  `id_tempat_wisata` int(11) NOT NULL,
  `name_tw` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `image_tw` varchar(255) NOT NULL,
  `id_daerah_wisata` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tempat_wisata`
--

INSERT INTO `tempat_wisata` (`id_tempat_wisata`, `name_tw`, `deskripsi`, `image_tw`, `id_daerah_wisata`, `id_kategori`) VALUES
(1, 'Pantai Kuta', 'Pantai Kuta Adalah Pantai Yang berada diprovinsi Bali', 'T-Shirt Black Machan.jpg', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daerah_wisata`
--
ALTER TABLE `daerah_wisata`
  ADD PRIMARY KEY (`id_daerah_wisata`);

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`),
  ADD KEY `fk_id_tempat_wisata` (`id_tempat_wisata`);

--
-- Indeks untuk tabel `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`),
  ADD KEY `fk_id_tempat_wisata` (`id_tempat_wisata`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `fk_id_tempat_wisata` (`id_tempat_wisata`);

--
-- Indeks untuk tabel `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  ADD PRIMARY KEY (`id_tempat_wisata`),
  ADD KEY `fk_id_daerah_wisata` (`id_daerah_wisata`),
  ADD KEY `fk_id_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daerah_wisata`
--
ALTER TABLE `daerah_wisata`
  MODIFY `id_daerah_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `image`
--
ALTER TABLE `image`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  MODIFY `id_tempat_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD CONSTRAINT `fasilitas_ibfk_1` FOREIGN KEY (`id_tempat_wisata`) REFERENCES `tempat_wisata` (`id_tempat_wisata`);

--
-- Ketidakleluasaan untuk tabel `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`id_tempat_wisata`) REFERENCES `tempat_wisata` (`id_tempat_wisata`);

--
-- Ketidakleluasaan untuk tabel `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  ADD CONSTRAINT `tempat_wisata_ibfk_1` FOREIGN KEY (`id_daerah_wisata`) REFERENCES `daerah_wisata` (`id_daerah_wisata`),
  ADD CONSTRAINT `tempat_wisata_ibfk_3` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
