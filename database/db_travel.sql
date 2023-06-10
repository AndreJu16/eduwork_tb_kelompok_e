-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 04:03 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

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
-- Table structure for table `daerah_wisata`
--

CREATE TABLE `daerah_wisata` (
  `id_daerah_wisata` int(11) NOT NULL,
  `name_dw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daerah_wisata`
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
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `deskripsi_fasilitas` text NOT NULL,
  `id_tempat_wisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `deskripsi_fasilitas`, `id_tempat_wisata`) VALUES
(1, '1. Area Bersantai.\n2. Tempat Makan dan Kafe.\n3. Sewa Peralatan.\n4. Aksesibilitas Mudah.\n5. Aktivitas Tepi Pantai.', 1),
(2, '1. Tempat Parkir.\r\n2. Warung Makan.\r\n3. Kedai Minuman.\r\n4. Kamar Mandi dan Toilet.\r\n5. Area Bersantai.\r\n6. Sewa Peralatan', 2),
(3, '1. Tempat Parkir \r\n2. Area Beristirahat\r\n3. Toilet Umum\r\n4. Warung Makan\r\n5. Kedai minuman. \r\n6. Sewa Peralatan', 3),
(4, '1. Akomodasi\r\n2. Restoran dan Warung Makan\r\n3. Penyewaan Alat Selam dan Snorkeling\r\n4. Transportasi\r\n5. Pusat Informasi Wisata\r\n6. Toko dan Pasar', 4),
(5, '1. Snorkeling\r\n2. Berlayar\r\n3. Hiking\r\n4. Kunjungan ke desa-desa tradisional\r\n5. Akomodasi\r\n6. Restoran\r\n7. Layanan Pemandu\r\n8. Pusat Penyelaman\r\n9. Toko Penyewaan dan Penjualan Peralatan\r\n10. Transportasi Lokal.', 5),
(6, '1. Galeri Seni, Teater, dan Area Pameran\r\n2. Pertunjukan Seni, Tarian, dan Musik Tradisional\r\n3. Area Parkir yang Luas\r\n4. Restoran dan Kafe\r\n5. Toko Suvenir', 6),
(7, '1. Aktivitas Air Snorkeling dan menyelam.\r\n2. Budaya Lokal\r\n3. Akomodasi', 7),
(8, '1. Pusat Informasi\r\n2. Penginapan\r\n3. Area Camping\r\n4. Jalur Trekking\r\n5. Pemandu Wisata\r\n6. Area Piknik', 8),
(9, '1. Area parkir luas sam\r\n2. Warung makanan dan minuman\r\n3. Musholla\r\n4. Toilet dan kamar mandi\r\n5. Penyewaan perahu\r\n6. Pusat informasi dan keamanan\r\n', 9),
(10, '1. Area parkir luas sam\r\n2. Warung makanan dan minuman\r\n3. Musholla\r\n4. Toilet dan kamar mandi\r\n5. Penyewaan perahu', 10),
(11, '1. Penginapan dan hotel\r\n2. Penyewaan jeep\r\n3. Toko Kelontong\r\n4. Warung makanan dan minuman\r\n5. Toilet\r\n6. Mushollah/Masjid', 11),
(12, '1. Pusat Informasi dan Pos Pengamatan\r\n2. Jalan Setapak dan Trekking\r\n3. Area Perkemahan\r\n4. Penyewaan Kendaraan\r\n5. Warung makanan dan minuman', 12),
(14, '1. Penginapan\r\n2. Restoran dan Warung Makan MInum\r\n3. Penyewaan Alat Snorkeling dan DivingPenyewaan Alat Snorkeling dan Diving\r\n4. Pusat Informasi Wisata\r\n5. Toko dan Pasar', 13),
(15, '1. Restoran\r\n2. Layanan Pemandu: \r\n3. Kunjungan ke desa-desa tradisional\r\n4. Boat dan Banana Boat \r\n5. Transportasi Lokal\r\n6. Objek Wisata dan Aktivitas\r\n7. Toko dan Pasar', 14),
(16, '1. Area Pameran dan Museum\r\n2. Ruang Utama\r\n3. Tangga Marmer\r\n4. Area Pemandian\r\n5. Taman\r\n6. Toko Suvenir', 15),
(17, '1. Area Parkir\r\n2. Jalur Akses dan Jalan Setapak\r\n3. Pemandangan Air Terjun\r\n4. Area Bersantai\r\n5. Warung dan Pedagang Kecil\r\n6. Toilet dan Fasilitas Umum', 16),
(18, '1. Dermaga\r\n2. Pusat Informasi dan Pendaftaran\r\n3. Tempat Penyewaan Alat Snorkeling dan Penyelaman\r\n4. Penginapan dan Resort\r\n5. Restoran dan Warung Makan\r\n6. Toilet dan Fasilitas Umum\r\n7. Pemandu dan Instruktur Penyelaman', 17),
(19, '1. Pusat Informasi dan Pendaftaran\r\n2. Tempat Parkir\r\n3. Toilet dan Fasilitas Umum\r\n4. Warung Makan dan Pedagang Kecil\r\n5. Area Istirahat\r\n6. Area Parkir Sepeda Motor\r\n7. Pemandu Wisata', 18);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id_image` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_satu` varchar(255) NOT NULL,
  `image_dua` varchar(255) NOT NULL,
  `id_tempat_wisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id_image`, `image`, `image_satu`, `image_dua`, `id_tempat_wisata`) VALUES
(1, 'Pantai Pandawa - Image1 - Bali.jpg', 'Pantai Pandawa - Image2 - Bali.jpg', 'Pantai Pandawa - Image3 - Bali.jpg', 1),
(2, 'Pantai Pagatan - Image1 - Kalimantan.jpg', 'Pantai Pagatan - Image2 - Kalimantan.jpg', 'Pantai Pagatan - Image3 - Kalimantan.jpg', 2),
(3, 'Pantai Benua Patra - Image1 - Kalimantan.jpg', 'Pantai Benua Patra - Image2 - Kalimantan.jpg', 'Pantai Benua Patra - Image3 - Kalimantan.jpg', 3),
(4, 'Pulau Derawan - Image1 - Kalimantan.jpg', 'Pulau Derawan - Image2 - Kalimantan.jpg', 'Pulau Derawan - Image3 - Kalimantan.jpg', 4),
(5, 'Pulau Raja Ampat - Image1 - Papua.jpg', 'Pulau Raja Ampat - Image2 - Papua.jpg', 'Pulau Raja Ampat - Image3 - Papua.jpg', 5),
(6, 'Taman Budaya GDK - Image1 - Bali.jpg', 'Taman Budaya GDK - Image2 - Bali.jpg', 'Taman Budaya GDK - Image3 - Bali.jpg', 6),
(7, 'Teluk Cendrawasih - Image1 - Papua.jpg', 'Teluk Cendrawasih - Image2 - Papua.jpg', 'Teluk Cendrawasih - Image3 - Papua.jpg', 7),
(8, 'Taman Nasional Bali Barat - Image1 - Bali.jpg', 'Taman Nasional Bali Barat - Image2 - Bali.jpg', 'Taman Nasional Bali Barat - Image3 - Bali.jpg', 8),
(9, 'images2 (1).jpg', 'images3 (1).jpg', 'images4 (1).jpg', 9),
(10, 'images2.jpg', 'images3.jpg', 'images4.jpg', 10),
(11, 'images1 (1).jpg', 'images2 (2).jpg', 'images3 (2).jpg', 11),
(12, 'images1 (2).jpg', 'images2 (3).jpg', 'images4 (2).jpg', 12),
(13, 'images4 (3).jpg', 'images (3).jpg', 'images2 (4).jpg', 13),
(14, 'a1.jpg', 'a2.png', 'a3.png', 14),
(15, 'a4.png', 'a5.png', 'a6.png', 15),
(16, 'air-terjun-sipiso-piso (1).jpg', 'Air-Terjun-Sipiso-piso-2 (1).webp', '1606917504755-air-terjun-sipisopiso.jpg', 16),
(17, 'a9.png', 'a8.png', 'a7.png', 17),
(18, 'a10.png', 'a11.png', 'a12.png', 18);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `name_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `name_kategori`) VALUES
(1, 'Pantai'),
(2, 'Pulau'),
(3, 'Taman Budaya'),
(4, 'Taman Nasional'),
(5, 'Danau'),
(6, 'Istana'),
(7, 'Air Terjun');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `name_user` varchar(100) NOT NULL,
  `id_tempat_wisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `komentar`, `name_user`, `id_tempat_wisata`) VALUES
(1, 'Raja ampat memang salah satu pulau terbaik yang pernah ada di Indonesia, ga akan nyesel deh kalau kesana', 'Evi Dianasari', 5),
(2, 'Kelihatan dari foto yang ada di web ini pantai pandawa sepertinya sangat indah', 'ade', 1),
(3, 'Taman Nasional Bali ternyata keren juga.', 'yuga', 8),
(4, 'aku ingin ke sini jika punya uang lebih!', 'andre', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tempat_wisata`
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
-- Dumping data for table `tempat_wisata`
--

INSERT INTO `tempat_wisata` (`id_tempat_wisata`, `name_tw`, `deskripsi`, `image_tw`, `id_daerah_wisata`, `id_kategori`) VALUES
(1, 'Pantai Pandawa', 'Pantai Pandawa, destinasi pantai yang memukau di Bali, Indonesia. Terletak di bagian selatan pulau, pantai ini menawarkan pemandangan spektakuler dengan air laut yang jernih dan pasir putih yang lembut. Dikelilingi oleh tebing-tebing batu kapur tinggi, pantai ini memiliki patung-patung karakter epik dalam kebudayaan Hindu yang dipahat di tebingnya. Nikmati keindahan alam yang menakjubkan dan nilai sejarah yang menarik di Pantai Pandawa, Bali!', 'Pantai Pandawa - Bali.jpg', 1, 1),
(2, 'Pantai Pagatan', 'Pantai Pagatan, Kalimantan Selatan, Indonesia. Keindahan alam yang menakjubkan, pasir putih, air laut biru jernih. Garis pantai panjang dan indah, pasir halus dan lembut. Dikelilingi hutan bakau hijau. Ombak kuat, populer bagi peselancar. Berenang, berjalan-jalan, bersantai sambil menikmati keindahan alam. Pantai Pagatan menawarkan pengalaman yang mengesankan.', 'Pantai Pagatan - Kalimantan.jpg', 4, 1),
(3, 'Pantain Benua Patra', 'Pantai Benua Patra, Balikpapan, Kalimantan Timur, Indonesia. Pesona alam yang indah, rekreasi yang menyenangkan. Garis pantai panjang, pasir putih lembut, air laut jernih biru. Dikelilingi hutan bakau hijau, menjelajahi, pemandangan menenangkan. Aktivitas olahraga air populer. Pemandangan matahari terbenam memukau. Pantai Benua Patra, destinasi menarik untuk liburan yang menyenangkan.', 'Pantai Benua Patra - Kalimantan.jpg', 4, 1),
(4, 'Pulau Derawan', 'Pulau Derawan, Kalimantan Timur, Indonesia: Surga tropis dengan pantai pasir putih, air laut jernih, dan terumbu karang indah. Snorkeling, penyelaman, dan penyu menjadi daya tarik utama. Pulau-pulau sekitarnya seperti Sangalaki dan Kakaban menawarkan pengalaman yang unik. Nikmati kesantaiannya atau pemandangan matahari terbenam yang memukau. Beragam akomodasi yang sesuai dengan preferensi dan anggaran. Selamat datang di Pulau Derawan, di mana keindahan alam dan kehidupan bawah laut menanti Anda!', 'Pulau Derawan - Kalimantan.jpg', 4, 2),
(5, 'Pulau Raja Ampat', 'Raja Ampat, Papua Barat, Indonesia: Surga penyelam dan pecinta alam dengan keindahan alam bawah laut yang luar biasa. Lebih dari 1.500 pulau kecil, terumbu karang indah, dan kekayaan hayati yang melimpah. Pemandangan permukaan yang memukau dengan pulau berbukit hijau, pantai berpasir putih, dan laguna biru. Jelajahi keajaiban alam, temukan kehidupan bawah laut yang spektakuler, dan nikmati petualangan tak terlupakan. Selamat datang di Raja Ampat, destinasi pariwisata yang menakjubkan dengan keajaiban alam yang tak terlupakan!', 'Pulau Raja Ampat - Papua.jpg', 6, 2),
(6, 'Taman Garuda Wisnu Kencana', 'Garuda Wisnu Kencana (GWK) di Bali, Indonesia: Destinasi ikonik dengan patung monumental Garuda Wisnu Kencana yang megah. Taman budaya yang menggabungkan seni, keindahan alam, dan warisan budaya. Patung setinggi 121 meter menggambarkan kekuatan dan keindahan. Tempat ideal untuk acara khusus dan pengalaman tak terlupakan. Saksikan keindahan seni, budaya, dan panorama luar biasa di GWK, Bali.', 'Taman Budaya GDK - Bali.jpg', 1, 3),
(7, 'Teluk Cenderawasih', 'Taman Nasional Teluk Cenderawasih di Papua Barat, Indonesia: Destinasi wisata alam yang menakjubkan dengan kekayaan hayati laut yang luar biasa. Interaksi dengan ikan paus raksasa menjadi atraksi utama. Pantai berpasir putih, hutan tropis, dan pulau-pulau eksotis juga dapat dinikmati. Surga bagi pecinta alam dan penyelam. Selamat datang di keindahan Taman Nasional Teluk Cenderawasih.', 'Teluk Cendrawasih - Papua.jpg', 6, 4),
(8, 'Taman Nasional Bali Barat', 'Taman Nasional Bali, atau Taman Nasional Gunung Agung, adalah surga alam di Pulau Bali, Indonesia. Dengan Gunung Agung sebagai ciri khasnya, taman nasional ini menawarkan keindahan alam yang menakjubkan, termasuk hutan tropis, air terjun, dan sungai yang jernih. Keberagaman hayati taman nasional ini mencakup ribuan spesies flora dan fauna. Selain itu, tempat ini juga memiliki nilai budaya dengan adanya situs suci dan pura yang dihormati. Selamat datang di Taman Nasional Bali, tempat yang menawarkan keajaiban alam dan warisan budaya yang kaya.', 'Taman Nasional Bali Barat - Bali.jpg', 1, 4),
(9, 'Pantai Balekambang', 'Pantai Balekambang adalah salah satu pantai yang terletak di Desa Srigonco, Kecamatan Bantur, Kabupaten Malang, Jawa Timur. Pantai ini terkenal dengan pura apungnya, yaitu Pura Luhur Amerta Bhuana yang berada di tengah laut. Selain itu, pantai ini juga memiliki pemandangan yang indah dengan pasir putih, ombak yang cocok untuk berselancar, dan batu karang yang menarik.', 'images1.jpg', 3, 1),
(10, 'Pantai Goa Cina', 'Terletak di desa Sitiarjo, pantai ini memiliki suasana yang alami dan masih jarang dikunjungi wisatawan. Pantai ini memiliki pantai berpasir putih yang luas, tebing karang, dan gua-gua alami yang menarik untuk dijelajahi. Ketika mengunjungi Pantai Goa Cina, penting untuk tetap berhati-hati dan mengikuti petunjuk keamanan yang diberikan oleh petugas pantai. Selalu periksa kondisi cuaca dan gelombang sebelum berenang atau melakukan aktivitas di pantai ini.', 'images.jpg', 3, 1),
(11, 'Taman Nasional Bromo Tengger Semeru', 'Gunung Bromo adalah salah satu gunung berapi paling terkenal di Indonesia yang terletak di Taman Nasional Bromo Tengger Semeru, di wilayah Malang, Jawa Timur. Ini adalah tujuan wisata yang populer karena pemandangan alam yang menakjubkan dan pengalaman mendebarkan. Anda dapat menikmati pemandangan spektakuler matahari terbit di Bukit Penanjakan dan menjelajahi kawah Gunung Bromo yang indah.\r\n', 'images (1).jpg', 3, 4),
(12, 'Taman Nasional Baluran', 'Taman Nasional Baluran terletak di Situbondo, Jawa Timur, Indonesia. Taman Nasional ini terkenal karena padang savana yang luas, habitat satwa liar yang kaya, dan keindahan alam yang memukau. Taman Nasional Baluran mencakup luas sekitar 25.000 hektar dan terdiri dari beragam ekosistem, termasuk padang savana, hutan mangrove, hutan hujan tropis, dan pantai yang indah. Padang savana adalah salah satu daya tarik utama taman nasional ini, dengan pemandangan rerumputan yang luas dan dihiasi dengan pohon-pohon cemara udang yang ikonik.', 'images (2).jpg', 3, 4),
(13, 'Pulau Karimunjawa', 'Pulau Karimunjawa adalah salah satu destinasi wisata pulau yang terletak di Laut Jawa, sebelah utara Jawa Tengah, Indonesia. Pulau ini menawarkan pantai berpasir putih, air laut yang jernih, dan kehidupan bawah laut yang kaya. Aktivitas yang bisa dilakukan di Pulau Karimunjawa termasuk snorkeling, menyelam, berlayar, dan menikmati keindahan alam. Pulau ini merupakan bagian dari Kepulauan Karimunjawa yang terdiri dari 27 pulau, dengan enam pulau di antaranya dihuni. Pulau Karimunjawa menawarkan keindahan alam yang memukau dengan pantai-pantai berpasir putih, air laut yang jernih, dan terumbu karang yang indah.', 'images1 (3).jpg', 3, 2),
(14, 'Danau Toba ', 'Keindahan alam yang menakjubkan membuat danau toba merupakan danau vulkanik terbesar di dunia dengan panorama alam yang memukau. Airnya yang biru jernih dan dikelilingi oleh pegunungan menjadikan pemandangan di sekitar danau ini sangat indah dan menenangkan, jika ingin menikmati pulau Samosir yang juga menjadi daya tarik utama dan menawarkan pengalaman yang unik bagi pengunjung. Pulai ini terkenal dengan kebudayaan bataknya, rumah adat tradisional, dan keramahan penduduk setempat. Desa Tomok dengan makam Raja Sidabutar, dan pantai pasir putih di parapat ', 'a1.jpg', 2, 5),
(15, 'Istana Maimun', 'Istana maimun adalah bekas kediaman resmi Sultan Deli dan merupakan salah satu bangunan yang paling ikonik di Menda. Dibangun pada tahun 1988, istana ini menampilkan arsitektur yang memadukan gaya Melayu, Islam, dan Eropa. Setiap element arsitektur di dalam istana ini dirancana dengan indah dan memperlihatkan kekayaan budaya dan sejarah Melayu. Salah satu daya tarik utama istana maimun adalah tangga marmer yang mengarah ke ruang utama. Tangga ini menjadi latar belakang yang populer untuk berfoto bagi pengunjung. Di sepanjang ruang-ruang dalam istana, Anda juga akan menemukan lukisan-lukisan keluarga Sultan Deli, serta menghargai seni dan budaya Melayu yang kaya. ', 'a4.png', 2, 6),
(16, 'Air Terjun Sipiso piso ', 'Merupakan salah sau objek wisata alam yang indah diSumatera Utara, Indonesia. Sekitar 24 kilometer dari kota berastagi, air terjun ini memiliki ketinggian sekitar 120 meter dan terkenal karena keindahaannya yang memukau. Perjalanan menuju air terjun sipiso-piso dimulai dengan melalui jalur yang melintasi perkebunan buah dan perbukitan yang hijau. Ketika anda mendekati air terjun, anda akan merasakan sejuknya udara pegunungan dan terpesona dengan panaorama alam yang memukau. Sesampainya di area Air terjun sipiso-piso, Anda akan disambut oleh pemandangan spektakuler air terjun yang mngalir deras dari puncak tebing menuju lembah. Aliran air yang kuat dan suara gemuruh air terjun menciptakan suasana yang menakjubkan. Di sekitar air terjun, terdapat area dengan jalan setapak yang emmungkinkan pengunjung untuk menjelajahi lebih dekat.', 'Air-Terjun-Sipiso-piso-2 (1).webp', 2, 7),
(17, 'Taman Nasional Bunaken', 'Taman Nasional Bunaken terletak di sebelah utara Pulau Sulawesi dan merupakan salah satu tujuan wisata bahari terbaik di dunia. Taman nasional ini terkenal dengan keindahan bawah lautnya yang memukau, membuatnya menjadi surga bagi penyelam dan snorkeler. Saat Anda memasuki perairan Taman Nasional Bunaken, Anda akan disambut oleh keindahan terumbu karang yang spektakuler. Terumbu karang di sini memiliki keanekaragaman hayati yang luar biasa, dengan berbagai spesies karang, ikan, dan hewan laut lainnya yang hidup di dalamnya. Anda akan menemukan lingkungan bawah laut yang penuh warna dengan ikan-ikan yang berwarna-warni dan kehidupan laut yang menakjubkan.', 'a7.png', 5, 4),
(18, 'Taman Nasional Bantimurung-Bulusaraung ', 'Taman Nasional Bantimurung-Bulusaraung adalah surga alam yang terdiri dari dua bagian utama, Bantimurung dan Bulusaraung. Bantimurung terkenal dengan air terjun yang indah, sementara Bulusaraung memiliki gua-gua spektakuler. Saat memasuki taman, Anda akan menikmati pemandangan alam yang memukau dengan hutan tropis yang lebat, udara segar, dan riuh suara air yang menenangkan. Air Terjun Bantimurung, dengan ketinggian 20 meter, menawarkan pemandangan yang memukau dengan gemuruh air yang menyejukkan. Taman ini juga merupakan rumah bagi keanekaragaman hayati, terutama kupu-kupu. Anda dapat menjelajahi Pusat Konservasi Kupu-Kupu untuk mempelajari kehidupan kupu-kupu yang indah dan langka.', 'a10.png', 5, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daerah_wisata`
--
ALTER TABLE `daerah_wisata`
  ADD PRIMARY KEY (`id_daerah_wisata`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`),
  ADD KEY `fk_id_tempat_wisata` (`id_tempat_wisata`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`),
  ADD KEY `fk_id_tempat_wisata` (`id_tempat_wisata`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `fk_id_tempat_wisata` (`id_tempat_wisata`);

--
-- Indexes for table `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  ADD PRIMARY KEY (`id_tempat_wisata`),
  ADD KEY `fk_id_daerah_wisata` (`id_daerah_wisata`),
  ADD KEY `fk_id_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daerah_wisata`
--
ALTER TABLE `daerah_wisata`
  MODIFY `id_daerah_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  MODIFY `id_tempat_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD CONSTRAINT `fasilitas_ibfk_1` FOREIGN KEY (`id_tempat_wisata`) REFERENCES `tempat_wisata` (`id_tempat_wisata`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`id_tempat_wisata`) REFERENCES `tempat_wisata` (`id_tempat_wisata`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  ADD CONSTRAINT `tempat_wisata_ibfk_1` FOREIGN KEY (`id_daerah_wisata`) REFERENCES `daerah_wisata` (`id_daerah_wisata`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tempat_wisata_ibfk_3` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
