-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 06:01 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `user_id`, `date`, `created_at`, `updated_at`) VALUES
(1, 4, '2023-12-18', '2023-12-10 05:09:34', '2023-12-10 05:09:34'),
(2, 2, '2023-12-17', '2023-12-10 05:31:43', '2023-12-10 05:31:43');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `doctor_id`, `time`, `status`, `created_at`, `updated_at`, `date`) VALUES
(1, 6, 4, '7:20am', 0, '2023-12-17 08:31:32', '2023-12-17 08:31:32', '2023-12-18'),
(3, 6, 4, '7:40am', 0, '2023-12-17 16:51:36', '2023-12-17 16:51:36', '2023-12-18');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2023_12_03_153418_create_roles_table', 1),
(5, '2023_12_03_162410_add_gender_to_users_table', 1),
(6, '2023_12_06_143508_create_appointments_table', 2),
(7, '2023_12_07_144526_create_times_table', 2),
(8, '2023_12_17_100424_create_bookings_table', 3),
(9, '2023_12_17_103259_add_date_to_bookings_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'doctor', '2023-12-04 08:35:45', '2023-12-04 08:35:45'),
(2, 'admin', '2023-12-04 08:35:45', '2023-12-04 08:35:45'),
(3, 'patient', '2023-12-04 08:35:45', '2023-12-04 08:35:45');

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`id`, `appointment_id`, `time`, `status`, `created_at`, `updated_at`) VALUES
(49, 2, '6:00am', 0, '2023-12-10 05:31:43', '2023-12-10 05:31:43'),
(50, 2, '6:20am', 0, '2023-12-10 05:31:43', '2023-12-10 05:31:43'),
(51, 2, '6:40am', 0, '2023-12-10 05:31:43', '2023-12-10 05:31:43'),
(139, 1, '7:20am', 1, '2023-12-12 05:44:18', '2023-12-17 08:31:32'),
(140, 1, '7:40am', 1, '2023-12-12 05:44:18', '2023-12-17 16:51:36'),
(141, 1, '8:00am', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(142, 1, '8:20am', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(143, 1, '8:40am', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(144, 1, '9:00am', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(145, 1, '9:20am', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(146, 1, '9:40am', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(147, 1, '10:00am', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(148, 1, '10:20am', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(149, 1, '10:40am', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(150, 1, '11:00am', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(151, 1, '11:20am', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(152, 1, '11:40am', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(153, 1, '01:00pm', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(154, 1, '01:20pm', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(155, 1, '01:40pm', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(156, 1, '02:00pm', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(157, 1, '02:20pm', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(158, 1, '02:40pm', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(159, 1, '03:00pm', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(160, 1, '03:20pm', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(161, 1, '03:40pm', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(162, 1, '04:00pm', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(163, 1, '04:20pm', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(164, 1, '04:40pm', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(165, 1, '05:00pm', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(166, 1, '05:20pm', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(167, 1, '05:40pm', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(168, 1, '06:00pm', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(169, 1, '06:20pm', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(170, 1, '06:40pm', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(171, 1, '07:00pm', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(172, 1, '07:20pm', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(173, 1, '07:40pm', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(174, 1, '08:00pm', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(175, 1, '08:20pm', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(176, 1, '08:40pm', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(177, 1, '09:00pm', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(178, 1, '09:20pm', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18'),
(179, 1, '09:40pm', 0, '2023-12-12 05:44:18', '2023-12-12 05:44:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `address`, `phone_number`, `department`, `image`, `education`, `description`, `remember_token`, `created_at`, `updated_at`, `gender`) VALUES
(1, 'John Doe', 'john@doe.com', NULL, '$2y$10$a3xjhemsiwR/hkKmVzsx2eaLdQMS76XPfQtN0vjXUYqH1/AlEDq1e', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-04 08:36:18', '2023-12-04 08:36:18', 'male'),
(2, 'jane doe', 'jane@doe.com', NULL, '$2y$10$DYfqk3YntN99X6cgRfxnAuSRqDOGrPlSQRNyy/vT3glOwuHwS4er2', 1, 'talisay', '09123123123', 'it', '6UiNpEuoijWVDebJFXELM8QUussihQEUvR83m782.png', 'doctor', 'this is about', NULL, '2023-12-04 09:47:08', '2023-12-04 09:47:08', 'female'),
(3, 'wadereynes', 'wadeshow25@gmail.com', NULL, '$2y$10$RnCc4X1Ma7j9uJBpGCh2K.FRRkA8FtjCq3EbA1bIfKErX3ImrrpUu', 1, 'talisay', '09123123123', 'Neurologist', 'V5kf0X4bcyQslbIcMXVML8AuqbwnWtT26JWNxagj.jpg', 'it', 'about my life', NULL, '2023-12-06 09:42:28', '2023-12-06 09:54:13', 'male'),
(4, 'doctor', 'doctor@doctor.com', NULL, '$2y$10$omIP0Z68FJhOUk.wgy.a3OFlqxFlm5kNGc4/0HeTM6G.tXQg4eIW6', 1, 'talisay', '09123123123', 'Cardiologist', 'CkJ4lbgQLvygODi15rgordREwgKkcFfUlmYOprVL.png', 'doctor', 'this is doctor', NULL, '2023-12-10 05:07:57', '2023-12-10 05:07:57', 'male'),
(5, 'admin', 'admin@admin.com', NULL, '$2y$10$NUnMB.ZVwy8aMK8dyuij1eBsleanmhARuTDzDsOrq6NS5grud40Ae', 2, 'talisay', '09123123123', 'Cardiologist', 'VqPGvHuRqU3d0Bl2NFiovPlVOi98r3AiP2zJoPVm.png', 'doctor', 'this is admin', NULL, '2023-12-10 05:08:57', '2023-12-10 05:08:57', 'male'),
(6, 'Guest', 'guest@guest.com', NULL, '$2y$10$Y005rRc7x9CI64ijhBABXuaJj6ajAh51YWNrLv37MfC4ecU.Nn0ke', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-10 07:58:53', '2023-12-10 07:58:53', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
