-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 26, 2024 at 11:51 PM
-- Server version: 10.6.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u891621434_dqYkQ`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `id_batch` int(11) NOT NULL,
  `batch` varchar(45) NOT NULL,
  `label_id` int(11) NOT NULL,
  `deviations` text NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `id_business` int(11) UNSIGNED NOT NULL,
  `business_name` varchar(45) NOT NULL,
  `date_joined` date NOT NULL,
  `date_end` date NOT NULL,
  `package` int(1) NOT NULL,
  `remarks` text NOT NULL,
  `contact_email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `label`
--

CREATE TABLE `label` (
  `id_label` int(11) UNSIGNED NOT NULL,
  `label_name` varchar(100) NOT NULL,
  `date_created` date NOT NULL,
  `style` varchar(45) NOT NULL,
  `d_visual` tinytext NOT NULL,
  `d_smell` tinytext NOT NULL,
  `d_taste` tinytext NOT NULL,
  `d_mouthfeel` tinytext NOT NULL,
  `d_other` tinytext NOT NULL,
  `og` int(4) NOT NULL,
  `fg` int(4) NOT NULL,
  `ibu` int(3) NOT NULL,
  `ph` int(4) NOT NULL,
  `water` varchar(45) NOT NULL,
  `malts` varchar(100) NOT NULL,
  `hops` varchar(100) NOT NULL,
  `yeast` varchar(45) NOT NULL,
  `adjuncts` varchar(100) NOT NULL,
  `process` text NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id_result` int(11) NOT NULL,
  `id_test` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `vessel` varchar(45) NOT NULL,
  `disturbances` varchar(45) NOT NULL,
  `color` int(2) NOT NULL,
  `clarity` int(1) NOT NULL,
  `head_color` int(1) NOT NULL,
  `head_texture` int(1) NOT NULL,
  `head_retention` int(1) NOT NULL,
  `carbonation` int(1) NOT NULL,
  `alc_smell` int(1) NOT NULL,
  `smell_` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id_test` int(11) NOT NULL,
  `test_type` int(11) NOT NULL,
  `id_batch` int(11) NOT NULL,
  `source` varchar(45) NOT NULL,
  `variable` tinytext NOT NULL,
  `sample_id1` int(11) NOT NULL,
  `sample_id2` int(11) NOT NULL,
  `sample_id3` int(11) NOT NULL,
  `sample_id4` int(11) NOT NULL,
  `sample_id5` int(11) NOT NULL,
  `sample_id6` int(11) NOT NULL,
  `sample_id7` int(11) NOT NULL,
  `sample_id8` int(11) NOT NULL,
  `sample_id9` int(11) NOT NULL,
  `sample_id10` int(11) NOT NULL,
  `status` varchar(45) NOT NULL,
  `date_start` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(75) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`) VALUES
(1, 'Ray', '$2y$10$X9VSMLe5vu15c7Dnnn91wuQ.pM6Z1i0wKXuWw3xXabhCwb599sGrK', 'raymondpaton@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`id_batch`);

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id_business`);

--
-- Indexes for table `label`
--
ALTER TABLE `label`
  ADD PRIMARY KEY (`id_label`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id_result`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id_test`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `id_batch` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `label`
--
ALTER TABLE `label`
  MODIFY `id_label` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id_result` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
