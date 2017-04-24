-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2017 at 01:51 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `start` varchar(7) NOT NULL,
  `end` varchar(7) NOT NULL,
  `employee_id` varchar(6) NOT NULL,
  `type` varchar(32) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `date`, `start`, `end`, `employee_id`, `type`, `user_id`) VALUES
(1, '2017-04-03', '09:30AM', '10:00AM', '1', 'type', 1),
(2, '2017-04-03', '01:00PM', '01:30PM', '1', 'type', 1),
(3, '2017-04-03', '10:30AM', '11:00AM', '1', 'type', 1),
(4, '2017-04-03', '02:00PM', '02:30PM', '1', 'type', 1),
(8, '2017-04-04', '01:00PM', '01:30PM', '1', 'SOMETHING', 1),
(9, '2017-04-04', '02:00PM', '02:30PM', '1', 'SOMETHING', 1),
(10, '2017-04-04', '03:00PM', '03:30PM', '1', 'SOMETHING', 1),
(11, '2017-04-05', '02:00PM', '02:30PM', '1', 'SOMETHING', 1),
(12, '2017-04-06', '03:00PM', '03:30PM', '1', 'SOMETHING', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Jacob de Bruyn', 'test@gmail.com', '2017-04-08 06:22:37', '2017-04-06 15:31:57'),
(2, 'q', 'a@mail.com', '2017-04-09 01:13:41', '2017-04-09 01:13:41'),
(3, 'John Smith', 'js@mail.com', '2017-04-09 13:36:37', '2017-04-09 13:36:37'),
(4, 'h', 'h@mail.com', '2017-04-09 14:03:40', '2017-04-09 14:03:40'),
(5, 'homy ash', 'homy@ash.com', '2017-04-23 12:51:50', '2017-04-23 12:51:50');

-- --------------------------------------------------------

--
-- Table structure for table `employeetimes`
--

CREATE TABLE `employeetimes` (
  `empid` int(11) NOT NULL,
  `day` varchar(10) NOT NULL,
  `start` varchar(7) NOT NULL,
  `end` varchar(7) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeetimes`
--

INSERT INTO `employeetimes` (`empid`, `day`, `start`, `end`, `created_at`, `updated_at`) VALUES
(1, 'Friday', '09:00', '17:00', '2017-04-23 13:01:53', '2017-04-23 13:01:53'),
(5, 'Friday', '09:00', '12:00', '2017-04-23 12:53:05', '2017-04-23 12:53:05'),
(1, 'Monday', '12:00', '17:00', '2017-04-23 13:08:33', '2017-04-23 13:08:33'),
(2, 'Monday', '09:00', '17:00', '2017-04-23 13:10:27', '2017-04-23 13:10:27'),
(5, 'Monday', '09:00', '17:00', '2017-04-23 12:53:05', '2017-04-23 12:53:05'),
(1, 'Thursday', '09:00', '17:00', '2017-04-23 13:01:53', '2017-04-23 13:01:53'),
(2, 'Thursday', '09:00', '17:00', '2017-04-23 13:10:27', '2017-04-23 13:10:27'),
(5, 'Thursday', '09:00', '17:00', '2017-04-23 12:53:05', '2017-04-23 12:53:05'),
(1, 'Tuesday', '09:00', '17:00', '2017-04-23 13:01:53', '2017-04-23 13:01:53'),
(2, 'Tuesday', '09:00', '17:00', '2017-04-23 13:10:27', '2017-04-23 13:10:27'),
(5, 'Tuesday', '09:00', '17:00', '2017-04-23 12:53:05', '2017-04-23 12:53:05'),
(1, 'Wednesday', '09:00', '17:00', '2017-04-23 13:01:53', '2017-04-23 13:01:53'),
(2, 'Wednesday', '09:00', '17:00', '2017-04-23 13:10:27', '2017-04-23 13:10:27'),
(5, 'Wednesday', '09:00', '17:00', '2017-04-23 12:53:05', '2017-04-23 12:53:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `locality` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `administrative_area_level_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` int(11) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `street_number`, `route`, `locality`, `administrative_area_level_1`, `country`, `postal_code`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(19, 'Jacob De Bruyn', 'jacobdebruyn18@gmail.com', '$2y$10$LWGgEUM3TSzei/aQPN42xeS68.2J1VXfJDC3Xefbxs3Xibss/mKAS', '25', 'Massachusetts Avenue', 'Lexington', 'MA', 'United States', 2421, 0, 'fvHtSeG20d0eBLuBagg5j921hhJFrcDglGYAoL4XG8AFYl1HajLzx0LSbcSy', '2017-04-24 13:37:03', '2017-04-24 13:42:19'),
(20, 'Business Owner', 'bo@mail.com', '$2y$10$UJjnSv7efb3mdMg1YKwLNuhO1yJzeoqrBdtQjnE33/WrdQSfeRAl6', '1', 'Collins Street', 'Melbourne', 'VIC', 'Australia', 3000, 1, NULL, '2017-04-24 13:51:20', '2017-04-24 13:51:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employeetimes`
--
ALTER TABLE `employeetimes`
  ADD PRIMARY KEY (`day`,`empid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
