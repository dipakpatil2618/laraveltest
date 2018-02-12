-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2018 at 05:28 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dairy`
--

-- --------------------------------------------------------

--
-- Table structure for table `dairy`
--

CREATE TABLE `dairy` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dairy`
--

INSERT INTO `dairy` (`id`, `user_id`, `title`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'It was great day', 'I really had a really great today I cannot forgot that. I really had a really great today I cannot forgot that. I really had a really great today I cannot forgot that ', NULL, '2018-02-07 18:30:00', '2018-02-07 18:30:00'),
(2, 1, 'It was great day 3', 'I really had a really great today I cannot forgot that. I really had a really great today I cannot forgot that. I really had a really great today I cannot forgot that  5555', NULL, '2018-02-07 18:30:00', '2018-02-08 14:14:57'),
(3, 1, 'this is dynamically generated dairy', 'yes man this is dynamically generated dairies of m day', NULL, '2018-02-08 13:29:05', '2018-02-08 13:29:05'),
(4, 1, 'this is dynamically generated dairy3', 'dgdf sdgfdgdf dfgfd', '2018-02-09 10:02:22', '2018-02-08 13:32:40', '2018-02-09 10:02:22'),
(5, 1, 'this is dynamically generated dairy2', 'dgdf sdgfdgdf dfgfd', '2018-02-08 13:56:02', '2018-02-08 13:33:49', '2018-02-08 13:56:02'),
(6, 1, 'dsfsd', 'sfdds', '2018-02-08 13:55:58', '2018-02-08 13:34:21', '2018-02-08 13:55:58'),
(7, 1, 'dsf', 'sdfsdf', '2018-02-08 13:54:52', '2018-02-08 13:36:01', '2018-02-08 13:54:52'),
(8, 1, 'sdfghjkl', 'dsfghj drfhgjk', '2018-02-08 13:55:31', '2018-02-08 13:38:11', '2018-02-08 13:55:31'),
(9, 1, 'new entry', 'dfgfg', '2018-02-09 10:02:38', '2018-02-09 10:02:34', '2018-02-09 10:02:38'),
(10, 1, 'zdfxgh', 'sdfdg sdfdsffdfg dfgdf', '2018-02-09 10:09:06', '2018-02-09 10:04:52', '2018-02-09 10:09:06'),
(11, 1, 'sdfg sdgfh', 'sdfgh dfgf', '2018-02-09 10:20:07', '2018-02-09 10:19:55', '2018-02-09 10:20:07'),
(12, 1, 'dsfg', 'sdfg', NULL, '2018-02-09 10:31:33', '2018-02-09 10:31:33'),
(13, 2, 'dipak', 'dasdasdcasca', NULL, '2018-02-09 11:20:16', '2018-02-09 11:20:24'),
(14, 2, 'dipak1112', 'adassad', '2018-02-09 11:20:46', '2018-02-09 11:20:43', '2018-02-09 11:20:46');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_02_08_162656_dairy', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test@test.com', '$2y$10$iDrQYvCBHJ8BI4LO5vBE9OztEKAglxWWanQmxRzTFxgBSnnD47Oqm', 'rQJGzHKbE4JFCsb5oUDAXMAa7OjzMLRwAaFALF7sNwHebUuamGVzj5inSLDx', '2018-02-08 11:15:02', '2018-02-08 11:15:02'),
(2, 'dipak', 'dipakpatil2618@gmail.com', '$2y$10$ZlsoC6Ey1hX94mmDvTiG2OWXecp1gYDb0ajycg1MZVKJlcYqyjhbu', NULL, '2018-02-09 11:19:44', '2018-02-09 11:19:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dairy`
--
ALTER TABLE `dairy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dairy_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `dairy`
--
ALTER TABLE `dairy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dairy`
--
ALTER TABLE `dairy`
  ADD CONSTRAINT `dairy_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
