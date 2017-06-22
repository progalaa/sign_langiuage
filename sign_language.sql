-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2017 at 01:42 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sign_language`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `keywords`, `images`, `created_at`, `updated_at`) VALUES
(1, 'اهلا', '1.jpg', NULL, NULL),
(2, 'ما اسمك ', '2.jpg', NULL, NULL),
(3, 'عنوانك', '1498118595.png', NULL, NULL),
(4, 'كم عمرك', '4.jpg', NULL, NULL),
(5, 'ما هي جنسيتك', '5.jpg', NULL, NULL),
(7, 'new text', '2.jpg', NULL, NULL),
(8, 'testola', '3.jpg', NULL, NULL),
(10, 'new image,test alaa', '1498118610.png', '2017-06-21 19:35:43', '2017-06-21 19:35:43'),
(11, 'new image,test alaa', '1498082835.png', '2017-06-21 20:07:15', '2017-06-21 20:07:15'),
(12, 'new,image,kajds', '1498118722.jpg', '2017-06-22 06:05:22', '2017-06-22 06:05:22');

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
(1, '2017_06_11_200410_create_images_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'admin', '$2y$10$qjnTc6pvuDpRxF9hhkQRL.J1vBnP32954cIUIG670Lx', 'testola@mail.com', 'vh3O8RMEX7qxgjOk7JyuMl8os7HDk7NOwvcbnnXz9u7CiAOmGA2RGElkrRyn', '2016-10-18 16:58:20', '2016-10-18 14:58:20'),
(5, 'alaa', '$2y$10$sznRM3W4/U3vj9bEVsDonuaRBVXCzB6FykOsrpPcnXW', '', 'vh3O8RMEX7qxgjOk7JyuMl8os7HDk7NOwvcbnnXz9u7CiAOmGA2RGElkrRyn', '2017-06-14 22:11:43', '2017-06-14 20:10:52'),
(6, 'test', '123', NULL, 'Y5SEveUwmM9GqVKYlKoF3poqrWPpWQ7c8BGD1avhkOApxVpQMqpluYb4TbRi', '2017-06-17 16:29:58', '2017-06-17 14:24:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
