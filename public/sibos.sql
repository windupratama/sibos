-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 31, 2024 at 11:52 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sibos`
--

-- --------------------------------------------------------

--
-- Table structure for table `bioskop`
--

CREATE TABLE `bioskop` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text,
  `kota` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bioskop`
--

INSERT INTO `bioskop` (`id`, `nama`, `alamat`, `kota`) VALUES
(1, 'Bioskop PS Mall', 'Jl. Angkatan 45 No. 123', 'Palembang'),
(2, 'Bioskop OPI Mall', 'Jl. Gubernur H. A Bastari No. 298', 'Palembang'),
(3, 'Bioskop PTC Mall', 'Jl. R.Soekamto No. 456', 'Palembang'),
(4, 'Bioskop Cinepolis PIM', 'Palembang Icon Mall Lantai 3 No. 55', 'Palembang');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `durasi` int DEFAULT NULL,
  `tahun_rilis` int DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `judul`, `genre`, `durasi`, `tahun_rilis`, `deskripsi`) VALUES
(1, 'Mission: Impossible - Dead Reckoning Part Two', 'Aksi', 156, 2024, 'Sekuel dari franchise aksi ikonik yang dibintangi Tom Cruise, dengan aksi-aksi yang lebih spektakuler dan misi yang lebih menantang.'),
(2, 'Spider-Man: Beyond the Spider-Verse', 'Aksi', 1140, 2024, 'Film animasi tentang petualangan Spider-Man di multiverse, dengan gaya visual yang inovatif.'),
(16, 'Fantastic Beasts 4', 'Fantasi', 135, 2024, 'Petualangan baru dalam dunia sihir Harry Potter, mengikuti kisah Newt Scamander dan teman-temannya.'),
(17, 'John Wick: Chapter 5	', 'Aksi', 150, 2024, 'Kembalinya John Wick dalam babak baru yang penuh aksi brutal dan pertempuran epik.'),
(18, 'Wonka', 'Komedi', 115, 2024, 'Film musikal yang menceritakan asal-usul Willy Wonka, karakter dari novel \"Charlie and the Chocolate Factory\" karya Roald Dahl.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin') DEFAULT 'admin',
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`, `nama`) VALUES
(2, 'admin@example.com', 'password', 'admin', 'SiBOS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bioskop`
--
ALTER TABLE `bioskop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bioskop`
--
ALTER TABLE `bioskop`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
