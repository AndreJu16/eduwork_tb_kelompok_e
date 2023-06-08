-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2023 pada 09.17
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
(1, 'Bali'),
(2, 'Sumatera'),
(3, 'Jawa'),
(4, 'Kalimantan'),
(5, 'Sulawesi'),
(6, 'Papua');

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
(1, '1.	Area Bersantai.\r\n2.	Tempat Makan dan Kafe.\r\n3.	Sewa Peralatan. \r\n4.	Aksesibilitas Mudah. \r\n5.	Aktivitas Tepi Pantai.', 1),
(2, '1. Tempat Parkir.\r\n2. Warung Makan.\r\n3. Kedai Minuman.\r\n4. Kamar Mandi dan Toilet.\r\n5. Area Bersantai.\r\n6. Sewa Peralatan', 2),
(3, '1. Tempat Parkir \r\n2. Area Beristirahat\r\n3. Toilet Umum\r\n4. Warung Makan\r\n5. Kedai minuman. \r\n6. Sewa Peralatan', 3),
(4, '1. Akomodasi\r\n2. Restoran dan Warung Makan\r\n3. Penyewaan Alat Selam dan Snorkeling\r\n4. Transportasi\r\n5. Pusat Informasi Wisata\r\n6. Toko dan Pasar', 4),
(5, '1. Snorkeling\r\n2. Berlayar\r\n3. Hiking\r\n4. Kunjungan ke desa-desa tradisional\r\n5. Akomodasi\r\n6. Restoran\r\n7. Layanan Pemandu\r\n8. Pusat Penyelaman\r\n9. Toko Penyewaan dan Penjualan Peralatan\r\n10. Transportasi Lokal.', 5),
(6, '1. Galeri Seni, Teater, dan Area Pameran\r\n2. Pertunjukan Seni, Tarian, dan Musik Tradisional\r\n3. Area Parkir yang Luas\r\n4. Restoran dan Kafe\r\n5. Toko Suvenir', 6),
(7, '1. Aktivitas Air Snorkeling dan menyelam.\r\n2. Budaya Lokal\r\n3. Akomodasi', 7),
(8, '1. Pusat Informasi\r\n2. Penginapan\r\n3. Area Camping\r\n4. Jalur Trekking\r\n5. Pemandu Wisata\r\n6. Area Piknik', 8);

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
(1, 'Pantai Pandawa - Image1 - Bali.jpg', 'Pantai Pandawa - Image2 - Bali.jpg', 'Pantai Pandawa - Image3 - Bali.jpg', 1),
(2, 'Pantai Pagatan - Image1 - Kalimantan.jpg', 'Pantai Pagatan - Image2 - Kalimantan.jpg', 'Pantai Pagatan - Image3 - Kalimantan.jpg', 2),
(3, 'Pantai Benua Patra - Image1 - Kalimantan.jpg', 'Pantai Benua Patra - Image2 - Kalimantan.jpg', 'Pantai Benua Patra - Image3 - Kalimantan.jpg', 3),
(4, 'Pulau Derawan - Image1 - Kalimantan.jpg', 'Pulau Derawan - Image2 - Kalimantan.jpg', 'Pulau Derawan - Image3 - Kalimantan.jpg', 4),
(5, 'Pulau Raja Ampat - Image1 - Papua.jpg', 'Pulau Raja Ampat - Image2 - Papua.jpg', 'Pulau Raja Ampat - Image3 - Papua.jpg', 5),
(6, 'Taman Budaya GDK - Image1 - Bali.jpg', 'Taman Budaya GDK - Image2 - Bali.jpg', 'Taman Budaya GDK - Image3 - Bali.jpg', 6),
(7, 'Teluk Cendrawasih - Image1 - Papua.jpg', 'Teluk Cendrawasih - Image2 - Papua.jpg', 'Teluk Cendrawasih - Image3 - Papua.jpg', 7),
(8, 'Taman Nasional Bali Barat - Image1 - Bali.jpg', 'Taman Nasional Bali Barat - Image2 - Bali.jpg', 'Taman Nasional Bali Barat - Image3 - Bali.jpg', 8);

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
(2, 'Pulau'),
(3, 'Taman Budaya'),
(4, 'Taman Nasional');

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
(1, 'Pantai Pandawa', 'Pantai Pandawa, destinasi pantai yang memukau di Bali, Indonesia. Terletak di bagian selatan pulau, pantai ini menawarkan pemandangan spektakuler dengan air laut yang jernih dan pasir putih yang lembut. Dikelilingi oleh tebing-tebing batu kapur tinggi, pantai ini memiliki patung-patung karakter epik dalam kebudayaan Hindu yang dipahat di tebingnya. Nikmati keindahan alam yang menakjubkan dan nilai sejarah yang menarik di Pantai Pandawa, Bali!', 'Pantai Pandawa - Bali.jpg', 1, 1),
(2, 'Pantai Pagatan', 'Pantai Pagatan, Kalimantan Selatan, Indonesia. Keindahan alam yang menakjubkan, pasir putih, air laut biru jernih. Garis pantai panjang dan indah, pasir halus dan lembut. Dikelilingi hutan bakau hijau. Ombak kuat, populer bagi peselancar. Berenang, berjalan-jalan, bersantai sambil menikmati keindahan alam. Pantai Pagatan menawarkan pengalaman yang mengesankan.', 'Pantai Pagatan - Kalimantan.jpg', 4, 1),
(3, 'Pantain Benua Patra', 'Pantai Benua Patra, Balikpapan, Kalimantan Timur, Indonesia. Pesona alam yang indah, rekreasi yang menyenangkan. Garis pantai panjang, pasir putih lembut, air laut jernih biru. Dikelilingi hutan bakau hijau, menjelajahi, pemandangan menenangkan. Aktivitas olahraga air populer. Pemandangan matahari terbenam memukau. Pantai Benua Patra, destinasi menarik untuk liburan yang menyenangkan.', 'Pantai Benua Patra - Kalimantan.jpg', 4, 1),
(4, 'Pulau Derawan', 'Pulau Derawan, Kalimantan Timur, Indonesia: Surga tropis dengan pantai pasir putih, air laut jernih, dan terumbu karang indah. Snorkeling, penyelaman, dan penyu menjadi daya tarik utama. Pulau-pulau sekitarnya seperti Sangalaki dan Kakaban menawarkan pengalaman yang unik. Nikmati kesantaiannya atau pemandangan matahari terbenam yang memukau. Beragam akomodasi yang sesuai dengan preferensi dan anggaran. Selamat datang di Pulau Derawan, di mana keindahan alam dan kehidupan bawah laut menanti Anda!', 'Pulau Derawan - Kalimantan.jpg', 4, 2),
(5, 'Pulau Raja Ampat', 'Raja Ampat, Papua Barat, Indonesia: Surga penyelam dan pecinta alam dengan keindahan alam bawah laut yang luar biasa. Lebih dari 1.500 pulau kecil, terumbu karang indah, dan kekayaan hayati yang melimpah. Pemandangan permukaan yang memukau dengan pulau berbukit hijau, pantai berpasir putih, dan laguna biru. Jelajahi keajaiban alam, temukan kehidupan bawah laut yang spektakuler, dan nikmati petualangan tak terlupakan. Selamat datang di Raja Ampat, destinasi pariwisata yang menakjubkan dengan keajaiban alam yang tak terlupakan!', 'Pulau Raja Ampat - Papua.jpg', 6, 2),
(6, 'Taman Garuda Wisnu Kencana', 'Garuda Wisnu Kencana (GWK) di Bali, Indonesia: Destinasi ikonik dengan patung monumental Garuda Wisnu Kencana yang megah. Taman budaya yang menggabungkan seni, keindahan alam, dan warisan budaya. Patung setinggi 121 meter menggambarkan kekuatan dan keindahan. Tempat ideal untuk acara khusus dan pengalaman tak terlupakan. Saksikan keindahan seni, budaya, dan panorama luar biasa di GWK, Bali.', 'Taman Budaya GDK - Bali.jpg', 1, 3),
(7, 'Teluk Cenderawasih', 'Taman Nasional Teluk Cenderawasih di Papua Barat, Indonesia: Destinasi wisata alam yang menakjubkan dengan kekayaan hayati laut yang luar biasa. Interaksi dengan ikan paus raksasa menjadi atraksi utama. Pantai berpasir putih, hutan tropis, dan pulau-pulau eksotis juga dapat dinikmati. Surga bagi pecinta alam dan penyelam. Selamat datang di keindahan Taman Nasional Teluk Cenderawasih.', 'Teluk Cendrawasih - Papua.jpg', 6, 4),
(8, 'Taman Nasional Bali Barat', 'Taman Nasional Bali, atau Taman Nasional Gunung Agung, adalah surga alam di Pulau Bali, Indonesia. Dengan Gunung Agung sebagai ciri khasnya, taman nasional ini menawarkan keindahan alam yang menakjubkan, termasuk hutan tropis, air terjun, dan sungai yang jernih. Keberagaman hayati taman nasional ini mencakup ribuan spesies flora dan fauna. Selain itu, tempat ini juga memiliki nilai budaya dengan adanya situs suci dan pura yang dihormati. Selamat datang di Taman Nasional Bali, tempat yang menawarkan keajaiban alam dan warisan budaya yang kaya.', 'Taman Nasional Bali Barat - Bali.jpg', 1, 4);

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
  MODIFY `id_daerah_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `image`
--
ALTER TABLE `image`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  MODIFY `id_tempat_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
