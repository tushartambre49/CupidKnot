-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2022 at 05:00 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cupidknot`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'test@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `gusers`
--

CREATE TABLE `gusers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gusers`
--

INSERT INTO `gusers` (`id`, `name`, `email`, `user_id`) VALUES
(1, 'Tushar T', 'tushar.synigence@gmail.com', '627e556a24836'),
(2, 'Tushar Tambre', 'tushartambre49@gmail.com', '627e55f858c26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2022_05_12_072751_create_gusers_table', 1),
(2, '2022_05_12_092436_create_users_table', 2),
(3, '2022_05_12_100005_create_sessions_table', 3),
(4, '2022_05_12_130606_create_users_table', 4),
(5, '2022_05_12_131343_create_users_table', 5),
(6, '2022_05_12_131701_create_users_table', 6),
(7, '2022_05_13_064114_create_users_table', 7),
(8, '2022_05_15_114122_create_admin_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('cJMpTbVVgyMO8nf4HmvnDOBBVmD220ChU8nwUjIq', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.54 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiRGx5aFBCTHNxM1J5TjBEOFJmNEd4dTBJT0VhNzJ2T3d3a055QldTbiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1652349650),
('Gfi0Ouq0AMmtj3boWRBOzoNOUmTB82cVB4cnC42K', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.54 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSU5rNXV5clB6eDNUbERYMGJXdHluNWlmMW42WDlyYnhpWnJ6NG01SiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWdpc3RlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1652349648);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `user_id` varchar(290) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `income` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ftype` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manglik` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eincome` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eoccupation` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `efamilytype` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emanglik` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `dob`, `user_id`, `password`, `gender`, `income`, `occupation`, `ftype`, `manglik`, `eincome`, `eoccupation`, `efamilytype`, `emanglik`) VALUES
(1, 'Tushar T', 'tushar.synigence@gmail.com', '2022-05-04', '627e557ef290a', NULL, 'male', '3245', 'private job', 'joint family', 'no', '2564405', 'private job', 'joint family', 'yes'),
(2, 'tushar Tambre', 'tushartambre49@gmail.com', '2022-04-26', '627e61b7eeac4', '1234', 'male', '123456', 'private job', 'joint family', 'yes', '2008000', 'government job', 'nuclear family', 'yes'),
(4, 'Tejal Tambre', 'tejaltambre49@gmail.com', '2022-04-27', '627f4c216a79c', '1234', 'female', '23456', 'private job', 'nuclear family', 'yes', '2716152', 'private job', 'nuclear family', 'yes'),
(5, 'Tejal dewhare', 'tejaldewhare@gmail.com', '2022-05-06', '62810dcc11a8c', '1234', 'female', '456341', 'private job', 'joint family', 'no', '313494', 'government job', 'nuclear family', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gusers`
--
ALTER TABLE `gusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gusers`
--
ALTER TABLE `gusers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
