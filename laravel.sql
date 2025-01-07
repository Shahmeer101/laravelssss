-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2025 at 11:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_desc` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_desc`, `category_image`, `created_at`, `updated_at`) VALUES
(1, 'brain', 'The brain is the central organ of the nervous system, responsible for processing sensory information, regulating bodily functions, and enabling cognition and emotion.', 'uploads/categories/1733565200_brains.png', '2024-12-07 04:53:20', '2024-12-07 04:53:20'),
(2, 'sikology sergon', 'The brain is the central organ of the nervous system, responsible for processing sensory information, regulating bodily functions, and enabling cognition and emotion.', 'uploads/categories/1733837386_langs image.png', '2024-12-10 08:29:46', '2024-12-10 08:29:46');

-- --------------------------------------------------------

--
-- Table structure for table `citys`
--

CREATE TABLE `citys` (
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `city_naame` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `citys`
--

INSERT INTO `citys` (`city_id`, `city_naame`, `created_at`, `updated_at`) VALUES
(2, 'karachi', '2024-12-03 03:59:28', '2024-12-03 03:59:28'),
(4, 'lahore', '2024-12-03 04:00:19', '2024-12-03 04:00:19'),
(5, 'islamabad', '2024-12-03 04:00:30', '2024-12-03 04:00:30'),
(6, 'islamabad', '2024-12-03 04:16:00', '2024-12-03 04:16:00'),
(7, 'quaita', '2024-12-03 04:25:06', '2024-12-03 04:25:06'),
(8, 'shahmeer', '2024-12-03 04:25:24', '2024-12-03 04:25:24');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `hire_date` varchar(255) NOT NULL,
  `availability_time_start` varchar(255) NOT NULL,
  `availability_time_end` varchar(255) NOT NULL,
  `availability_week` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `details` varchar(255) DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctor_id`, `name`, `email`, `phone`, `address`, `date_of_birth`, `hire_date`, `availability_time_start`, `availability_time_end`, `availability_week`, `experience`, `education`, `details`, `profile_picture`, `user_id`, `city_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'faham siddqui', 'faham@gmail.com', '03142380276', 'House no 1684 , street no 29 , orangi town karachi', '2024-12-12', '2024-12-12', '22:22', '22:22', 'Monday , wednesday , sataday', '6', 'M.B.B.S, F.C.P.S (Bons), M.R.C.P. (UK)', 'I have a brain doctor', 'uploads/1734024285_admins2.png', 2, 4, 2, '2024-12-12 12:24:45', '2024-12-12 12:24:45'),
(3, 'zuhaid', 'zuhaib@gmail.com', '03142380276', 'House no 1684 , street no 29 , orangi town karachi', '2024-12-12', '2024-12-12', '22:27', '22:27', 'Monday , wednesday', '6', 'M.B.B.S, f.C.P.S(),. (landon)', 'I have a brain doctor', 'uploads/1734024488_admins2.png', 2, 4, 2, '2024-12-12 12:28:08', '2024-12-12 12:28:08'),
(4, 'shahmeer', 'mmmm@gmail.com', '03142380276', 'House no 1684 , street no 29 , orangi town karachi', '2024-12-12', '2024-12-12', '14:29', '16:29', 'Monday , wednesday , sataday', '6', 'M.B.B.S, f.C.P.S(),. (landon)', 'I have a brain doctor', 'uploads/1734024590_6 image.jfif', 2, 2, 1, '2024-12-12 12:29:50', '2024-12-12 12:29:50'),
(6, 'faham siddqui', 'arshad@gmail.com', '03142380276', 'House no 1684 , street no 29 , orangi town karachi', '2024-12-14', '2024-12-14', '14:38', '14:38', 'Monday , wednesday', '12 years Exprience', 'M.B.B.S, F.C.P.S (Bons), M.R.C.P. (UK)', 'I have a brain doctor', 'uploads/1734169167_fahad image.jfif', 2, 2, 1, '2024-12-14 04:39:27', '2024-12-14 04:39:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(12, '2024_11_14_081159_create_role_table', 1),
(13, '2024_12_01_074702_create_city_table', 1),
(14, '2024_12_01_081628_create_users_table', 1),
(16, '2024_12_07_091509_create_categories_table', 2),
(17, '2024_12_12_164215_create_doctors_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `role_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_type`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2024-12-01 03:27:07', '2024-12-01 03:27:07'),
(2, 'Doctor', '2024-12-01 03:27:29', '2024-12-01 03:27:29'),
(3, 'patient', '2024-12-01 03:27:40', '2024-12-01 03:27:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT 3,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `profile_picture`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$4aZge3HfAVkrouZpidrU.OTg8goyWF6/LVbHIK4ABe0ZSo7gycg4S', 'uploads/1733041690_admins2.png', 1, '2024-12-01 03:28:10', '2024-12-01 03:28:10'),
(2, 'Doctor', 'doctor@gmail.com', '$2y$10$PTzHJckj41wwYfFXcl2DvOt8ymbmfS77s6trkbY/bqs/1JQCRynKi', 'uploads/1733213813_testimonial-2.jpg', 2, '2024-12-03 03:16:53', '2024-12-03 03:16:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `citys`
--
ALTER TABLE `citys`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctor_id`),
  ADD UNIQUE KEY `doctors_email_unique` (`email`),
  ADD KEY `doctors_user_id_foreign` (`user_id`),
  ADD KEY `doctors_city_id_foreign` (`city_id`),
  ADD KEY `doctors_category_id_foreign` (`category_id`);

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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `citys`
--
ALTER TABLE `citys`
  MODIFY `city_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctor_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `doctors_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `citys` (`city_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `doctors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
