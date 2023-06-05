-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2023 pada 15.04
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
(1, 'Yogyakarta Update'),
(2, 'Malang'),
(4, 'Medan');

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
(1, 'Update Fasilitas\r\n- satu\r\n- dua\r\n- tiga\r\n- empat\r\n- lima\r\n- enam', 8),
(2, 'Mantap 1, Mantap 2, Mantap 3', 10);

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
(1, 'Closure1.png', 'Arrow Function.png', 'Closure2.png', 8),
(2, 'Shoes Yellow Black.jpg', 'Shoes Blue White.jpg', '', 9),
(3, 'T-Shirt Running Black.jpg', 'T-Shirt Nike Red.jpg', '', 9),
(4, 'T-Shirt Black Machan.jpg', 'T-Shirt Black The Gun.jpg', 'T-Shirt Make Your Self.jpg', 10),
(5, 'susu.jpeg', 'Jersey Nike BlackBlue.jpg', 'Shoes Black Jumper.jpg', 9);

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
(2, 'Situs Sejarah'),
(3, 'Pegunungan Update Kategori'),
(5, 'Gunung');

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
(1, '- satu\r\n- dua\r\n- tiga\r\n- empat', '', 0);

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
  `id_komentar` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tempat_wisata`
--

INSERT INTO `tempat_wisata` (`id_tempat_wisata`, `name_tw`, `deskripsi`, `image_tw`, `id_daerah_wisata`, `id_komentar`, `id_kategori`) VALUES
(8, 'Update lagi Candi Borobudur', 'update lagi\r\nasdasdas\r\ndads\r\nad\r\nas\r\nd\r\nas\r\ndsadasdasdasdasdadasd\r\nas\r\nd\r\nasdsadasdasdwnhgfahdansdas', 'email.png', 1, 1, 2),
(9, 'Pantai Watu Leter', 'hrdhgjj\r\njfhghv', 'bitbucket.png', 2, 1, 1),
(10, 'Pantai Parang Tritis', 'Dancuk', 'Jersey Black.jpg', 2, 1, 2);

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
  ADD KEY `fk_id_komentar` (`id_komentar`),
  ADD KEY `fk_id_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daerah_wisata`
--
ALTER TABLE `daerah_wisata`
  MODIFY `id_daerah_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `image`
--
ALTER TABLE `image`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  MODIFY `id_tempat_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  ADD CONSTRAINT `tempat_wisata_ibfk_2` FOREIGN KEY (`id_komentar`) REFERENCES `komentar` (`id_komentar`),
  ADD CONSTRAINT `tempat_wisata_ibfk_3` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
