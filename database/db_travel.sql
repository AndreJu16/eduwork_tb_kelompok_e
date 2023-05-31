-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 02:54 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tempat_wisata_id` INT,
  `nama` VARCHAR(255),
  `deskripsi` TEXT,
  `url` VARCHAR(255),
  PRIMARY KEY (`id`),
  FOREIGN KEY (`tempat_wisata_id`) REFERENCES `tempatwisata` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(255),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tempat_wisata_id` INT,
  `nama_pengguna` VARCHAR(255),
  `komentar` TEXT,
  `tanggal` DATE,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`tempat_wisata_id`) REFERENCES `tempatwisata` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tempatwisata`
--

CREATE TABLE `tempatwisata` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(255),
  `kategori_id` INT,
  `deskripsi` TEXT,
  `harga_tiket` DECIMAL(10,2),
  `rating` DECIMAL(3,2),
  `fasilitas` TEXT,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
--
-- Indexes for dumped tables
--

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tempat_wisata_id` (`tempat_wisata_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tempat_wisata_id` (`tempat_wisata_id`);

--
-- Indexes for table `tempatwisata`
--
ALTER TABLE `tempatwisata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`tempat_wisata_id`) REFERENCES `tempatwisata` (`id`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`tempat_wisata_id`) REFERENCES `tempatwisata` (`id`);

--
-- Constraints for table `tempatwisata`
--
ALTER TABLE `tempatwisata`
  ADD CONSTRAINT `tempatwisata_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
