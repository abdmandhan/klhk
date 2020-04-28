-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2020 at 06:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_klhk`
--

-- --------------------------------------------------------

--
-- Table structure for table `eselons`
--

CREATE TABLE `eselons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eselons`
--

INSERT INTO `eselons` (`id`, `name`, `level`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sekretariat Jenderal', 1, '2020-04-20 13:38:03', '2020-04-20 13:38:03', NULL),
(2, 'Inspektorat Jenderal', 1, '2020-04-20 13:38:03', '2020-04-20 13:38:03', NULL),
(3, 'Planologi Kehutanan Dan Tata Lingkungan', 1, '2020-04-20 13:38:03', '2020-04-20 13:38:03', NULL),
(4, 'Konservasi Sumber Daya Alam Dan Ekosistem', 1, '2020-04-20 13:38:03', '2020-04-20 13:38:03', NULL),
(5, 'Pengendalian DAS Dan Hutan Lindung', 1, '2020-04-20 13:38:03', '2020-04-20 13:38:03', NULL),
(6, 'Pengelolaan Hutan Dan Produksi Lestari', 1, '2020-04-20 13:38:03', '2020-04-20 13:38:03', NULL),
(7, 'Pengendalian Pencemaran Dan Kerusakan Lingkungan', 1, '2020-04-20 13:38:03', '2020-04-20 13:38:03', NULL),
(8, 'Pengelolaan Sampah, Limbah Dan B3', 1, '2020-04-20 13:38:03', '2020-04-20 13:38:03', NULL),
(9, 'Pengendalian Perubahan Iklim', 1, '2020-04-20 13:38:03', '2020-04-20 13:38:03', NULL),
(10, 'Perhutanan Sosial Dan Kemitraan Lingkungan', 1, '2020-04-20 13:38:03', '2020-04-20 13:38:03', NULL),
(11, 'Penegakkan Hukum Lingkungan Hidup Dan Kehutanan', 1, '2020-04-20 13:38:03', '2020-04-20 13:38:03', NULL),
(12, 'BP2SDM', 1, '2020-04-20 13:38:03', '2020-04-20 13:38:03', NULL),
(13, 'Badan Litbang Dan Inovasi', 1, '2020-04-20 13:38:03', '2020-04-20 13:38:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(4, '2020_04_03_175421_create_eselons_table', 1),
(5, '2020_04_03_175446_create_web_categories_table', 1),
(6, '2020_04_03_175504_create_webs_table', 1),
(7, '2020_04_05_113455_create_web_monitorings_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Rizka Agustin', 'admin', 'admin@gmail.com', NULL, '$2y$10$pfibhmiyq1w.0M4hptBL.en0oTA8DvMCoI9Y4eBvyrCCLRkrjC1Oa', NULL, '2020-04-20 13:43:42', '2020-04-20 13:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `webs`
--

CREATE TABLE `webs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_eselon` int(11) NOT NULL,
  `id_web_category` int(11) NOT NULL,
  `url_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `webs`
--

INSERT INTO `webs` (`id`, `name`, `id_eselon`, `id_web_category`, `url_name`, `ip_address`, `description`, `status`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Olga', 10, 2, 'http://www.rowe.net/error-qui-eum-eos-saepe-sed', '4.190.176.76', 'Omnis voluptatem deleniti qui nostrum ut accusamus dolores.', 0, 'https://lorempixel.com/100/100/?47882', '2020-04-20 13:38:04', '2020-04-20 13:38:04', NULL),
(2, 'Brenda', 6, 1, 'http://morissette.org/', '231.92.211.15', 'Ullam rem asperiores soluta.', 0, 'https://lorempixel.com/100/100/?39222', '2020-04-20 13:38:04', '2020-04-20 13:38:04', NULL),
(3, 'Wilson', 6, 2, 'http://www.stamm.com/', '17.178.197.255', 'Molestias blanditiis alias nihil voluptates ullam ullam.', 1, 'https://lorempixel.com/100/100/?61529', '2020-04-20 13:38:04', '2020-04-20 13:38:04', NULL),
(4, 'Shane', 11, 2, 'https://www.stehr.com/fugiat-nostrum-quia-et', '67.176.46.168', 'Voluptatem dolorem ducimus quos dolorem reprehenderit omnis dolorum.', 1, 'https://lorempixel.com/100/100/?15941', '2020-04-20 13:38:04', '2020-04-20 13:38:04', NULL),
(5, 'Nelda', 10, 2, 'https://mayert.org/accusantium-tempora-ullam-dignissimos-laudantium-molestiae-totam.html', '150.245.77.0', 'Sapiente aut voluptatum voluptate quibusdam repellat.', 0, 'https://lorempixel.com/100/100/?27912', '2020-04-20 13:38:04', '2020-04-20 13:38:04', NULL),
(6, 'Joana', 12, 2, 'http://www.carter.com/', '145.229.161.46', 'Sint et sint nam odio.', 0, 'https://lorempixel.com/100/100/?23140', '2020-04-20 13:38:04', '2020-04-20 13:38:04', NULL),
(7, 'Ali', 5, 2, 'http://kuhic.com/ut-tempore-ipsam-et-et-aut-tenetur-quia', '28.145.155.132', 'Optio tempora est odit quidem.', 1, 'https://lorempixel.com/100/100/?21617', '2020-04-20 13:38:04', '2020-04-20 13:38:04', NULL),
(8, 'Quinten', 6, 2, 'https://www.nienow.com/et-eligendi-deleniti-iste-id', '209.55.146.182', 'Dolorem accusamus aut dolor id aut ut magnam maxime.', 0, 'https://lorempixel.com/100/100/?49141', '2020-04-20 13:38:04', '2020-04-20 13:38:04', NULL),
(9, 'Brain', 1, 1, 'http://www.morissette.com/', '205.183.139.160', 'Vitae ex incidunt qui tenetur nihil voluptates nisi et.', 1, 'https://lorempixel.com/100/100/?46219', '2020-04-20 13:38:04', '2020-04-20 13:38:04', NULL),
(10, 'Jaron', 13, 1, 'http://www.lindgren.org/', '132.169.95.154', 'Ut voluptate quos iusto sit.', 1, 'https://lorempixel.com/100/100/?97690', '2020-04-20 13:38:04', '2020-04-20 13:38:04', NULL),
(11, 'Website Kementerian Lingkungan Hidup dan Kehutanan', 1, 1, 'https://www.menlhk.go.id/', '103.52.213.169', 'merupakan sebuah website Kementerian lingkungan hidup', 1, 'https://www.menlhk.go.id/uploads/site/post/1585542581.jpg', '2020-04-23 08:38:35', '2020-04-23 08:38:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `web_categories`
--

CREATE TABLE `web_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_categories`
--

INSERT INTO `web_categories` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sistem Informasi', '2020-04-20 13:38:03', '2020-04-20 13:38:03', NULL),
(2, 'Umum', '2020-04-20 13:38:03', '2020-04-20 13:38:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `web_monitorings`
--

CREATE TABLE `web_monitorings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_web` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `visitors` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_monitorings`
--

INSERT INTO `web_monitorings` (`id`, `id_web`, `status`, `visitors`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 4, 0, 79, '2020-04-20 13:38:04', '2020-04-20 13:38:04', NULL),
(2, 1, 0, 896, '2020-04-20 13:38:04', '2020-04-20 13:38:04', NULL),
(3, 9, 0, 783, '2020-04-20 13:38:04', '2020-04-20 13:38:04', NULL),
(4, 5, 1, 191, '2020-04-20 13:38:04', '2020-04-20 13:38:04', NULL),
(5, 10, 0, 218, '2020-04-20 13:38:04', '2020-04-20 13:38:04', NULL),
(6, 7, 1, 754, '2020-04-20 13:38:04', '2020-04-20 13:38:04', NULL),
(7, 6, 1, 612, '2020-04-20 13:38:04', '2020-04-20 13:38:04', NULL),
(8, 2, 0, 518, '2020-04-20 13:38:04', '2020-04-20 13:38:04', NULL),
(9, 8, 1, 98, '2020-04-20 13:38:04', '2020-04-20 13:38:04', NULL),
(10, 3, 0, 484, '2020-04-20 13:38:04', '2020-04-20 13:38:04', NULL),
(11, 1, 1, 0, '2020-04-23 08:39:08', '2020-04-23 08:39:08', NULL),
(12, 4, 1, 0, '2020-04-23 08:39:10', '2020-04-23 08:39:10', NULL),
(13, 2, 1, 0, '2020-04-23 08:39:14', '2020-04-23 08:39:14', NULL),
(14, 3, 1, 0, '2020-04-23 08:39:17', '2020-04-23 08:39:17', NULL),
(15, 5, 0, 0, '2020-04-23 08:39:39', '2020-04-23 08:39:39', NULL),
(16, 9, 1, 0, '2020-04-23 08:39:47', '2020-04-23 08:39:47', NULL),
(17, 10, 1, 0, '2020-04-23 08:39:48', '2020-04-23 08:39:48', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eselons`
--
ALTER TABLE `eselons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `webs`
--
ALTER TABLE `webs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_categories`
--
ALTER TABLE `web_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_monitorings`
--
ALTER TABLE `web_monitorings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eselons`
--
ALTER TABLE `eselons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `webs`
--
ALTER TABLE `webs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `web_categories`
--
ALTER TABLE `web_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `web_monitorings`
--
ALTER TABLE `web_monitorings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
