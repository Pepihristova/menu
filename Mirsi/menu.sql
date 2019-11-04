-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2019 at 01:24 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menu`
--

-- --------------------------------------------------------

--
-- Table structure for table `desserts`
--

CREATE TABLE `desserts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `desserts`
--

INSERT INTO `desserts` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'палачинка', NULL, NULL),
(2, 'плодова торта', NULL, NULL),
(3, 'шоколадова торта', NULL, NULL),
(4, 'плодова салата', NULL, NULL),
(5, 'сладолед', NULL, NULL),
(6, 'пържен сладолед', NULL, NULL),
(7, 'сладоледена торта', NULL, NULL),
(8, 'чийзкейк', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

CREATE TABLE `drinks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drinks`
--

INSERT INTO `drinks` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'вода', NULL, NULL),
(2, 'бира', NULL, NULL),
(3, 'ракия', NULL, NULL),
(4, 'уиски', NULL, NULL),
(5, 'вино', NULL, NULL),
(6, 'сок', NULL, NULL),
(7, 'фреш', NULL, NULL),
(8, 'кола', NULL, NULL),
(9, 'фанта', NULL, NULL),
(10, 'спрайт', NULL, NULL),
(11, 'студен чай', NULL, NULL),
(12, 'лимонада', NULL, NULL),
(13, 'шейк', NULL, NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `four_degree_menus`
--

CREATE TABLE `four_degree_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `salad_id` bigint(20) UNSIGNED NOT NULL,
  `drink_id` bigint(20) UNSIGNED NOT NULL,
  `main_id` bigint(20) UNSIGNED NOT NULL,
  `dessert_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `four_degree_menus`
--

INSERT INTO `four_degree_menus` (`id`, `salad_id`, `drink_id`, `main_id`, `dessert_id`, `price`, `restaurant_id`, `created_at`, `updated_at`) VALUES
(1, 5, 2, 17, 4, '30.00', 8, NULL, NULL),
(4, 3, 3, 3, 3, '24.00', 5, '2019-10-31 19:18:03', '2019-10-31 19:18:03');

-- --------------------------------------------------------

--
-- Table structure for table `mains`
--

CREATE TABLE `mains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mains`
--

INSERT INTO `mains` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'пилешки хапки', NULL, NULL),
(2, 'пилешки шницел', NULL, NULL),
(3, 'пилешко шишче', NULL, NULL),
(4, 'пилешка пържола', NULL, NULL),
(5, 'пържени картофи', NULL, NULL),
(6, 'варени картофи', NULL, NULL),
(7, 'картофено пюре', NULL, NULL),
(8, 'кюфте', NULL, NULL),
(9, 'кебапче', NULL, NULL),
(10, 'свински шницел', NULL, NULL),
(11, 'свинска пържола', NULL, NULL),
(12, 'свинско шишче', NULL, NULL),
(13, 'телешка пържола', NULL, NULL),
(14, 'супа', NULL, NULL),
(15, 'скариди', NULL, NULL),
(16, 'миди', NULL, NULL),
(17, 'калмари', NULL, NULL),
(18, 'сьомга', NULL, NULL),
(19, 'скумрия', NULL, NULL),
(20, 'паламур', NULL, NULL),
(21, 'лаврак', NULL, NULL);

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
(15, '2014_10_12_000000_create_users_table', 1),
(16, '2014_10_12_100000_create_password_resets_table', 1),
(17, '2019_08_19_000000_create_failed_jobs_table', 1),
(18, '2019_10_26_115810_create_salads_table', 2),
(19, '2019_10_26_120718_create_mains_table', 2),
(20, '2019_10_26_120841_create_desserts_table', 2),
(21, '2019_10_26_120915_create_drinks_table', 2),
(22, '2019_10_26_120945_create_restaunants_table', 2),
(23, '2019_10_26_155143_create_one_degree_menus_table', 3),
(24, '2019_10_26_155322_create_two_degree_menus_table', 3),
(25, '2019_10_26_155504_create_three_degree_menus_table', 3),
(26, '2019_10_26_160348_create_four_degree_menus_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `one_degree_menus`
--

CREATE TABLE `one_degree_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `salad_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `one_degree_menus`
--

INSERT INTO `one_degree_menus` (`id`, `salad_id`, `price`, `restaurant_id`, `created_at`, `updated_at`) VALUES
(1, 1, '6.50', 1, NULL, '2019-10-30 19:49:17'),
(2, 2, '9.00', 4, NULL, NULL),
(3, 3, '8.50', 7, NULL, '2019-10-31 18:57:44'),
(4, 8, '4.00', 7, NULL, NULL),
(5, 3, '3.00', 6, NULL, NULL);

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
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'вили\r\n', NULL, NULL),
(4, 'pizza', '2019-10-26 11:04:22', '2019-10-26 11:04:22'),
(5, 'милеви', '2019-10-26 11:04:32', '2019-10-26 11:04:32'),
(6, 'винарна', '2019-10-26 11:04:53', '2019-10-26 11:04:53'),
(7, 'Пинтата', '2019-10-28 10:44:56', '2019-10-28 10:44:56'),
(8, 'Славянски кът', '2019-10-28 10:45:20', '2019-10-28 10:45:20');

-- --------------------------------------------------------

--
-- Table structure for table `salads`
--

CREATE TABLE `salads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salads`
--

INSERT INTO `salads` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'шопска салата', NULL, NULL),
(2, 'овчарска салата', NULL, NULL),
(3, 'руска салата', NULL, NULL),
(4, 'снежанка', NULL, NULL),
(5, 'зелена салата', NULL, NULL),
(6, 'салата цезар', NULL, NULL),
(7, 'домати', NULL, NULL),
(8, 'краставици', NULL, NULL),
(9, 'моркови и зеле', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `three_degree_menus`
--

CREATE TABLE `three_degree_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `salad_id` bigint(20) UNSIGNED NOT NULL,
  `drink_id` bigint(20) UNSIGNED NOT NULL,
  `main_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `three_degree_menus`
--

INSERT INTO `three_degree_menus` (`id`, `salad_id`, `drink_id`, `main_id`, `price`, `restaurant_id`, `created_at`, `updated_at`) VALUES
(1, 5, 5, 9, '20.00', 7, NULL, NULL),
(2, 8, 1, 8, '15.00', 1, NULL, NULL),
(3, 1, 1, 1, '16.00', 1, '2019-10-31 18:36:27', '2019-10-31 18:47:40'),
(5, 7, 5, 13, '40.00', 5, '2019-10-31 19:12:02', '2019-10-31 19:12:02'),
(6, 3, 4, 4, '50.00', 5, '2019-10-31 19:14:56', '2019-10-31 19:14:56'),
(7, 3, 4, 4, '50.00', 5, '2019-10-31 19:15:37', '2019-10-31 19:15:37');

-- --------------------------------------------------------

--
-- Table structure for table `two_degree_menus`
--

CREATE TABLE `two_degree_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `salad_id` bigint(20) UNSIGNED NOT NULL,
  `drink_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `two_degree_menus`
--

INSERT INTO `two_degree_menus` (`id`, `salad_id`, `drink_id`, `price`, `restaurant_id`, `created_at`, `updated_at`) VALUES
(1, 4, 1, '13.40', 1, NULL, '2019-10-31 18:22:15'),
(2, 2, 1, '17.50', 6, NULL, '2019-10-31 18:58:00'),
(4, 2, 4, '25.00', 5, '2019-10-31 18:34:00', '2019-10-31 18:58:30'),
(5, 6, 5, '25.00', 5, '2019-10-31 18:35:26', '2019-10-31 18:58:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pepi', 'presi0204@abv.bg', NULL, '$2y$10$xalMV7F0VQD4wcPyV2cY8emJrq0eZGe1MEg5kdDgn/CZ/LpVubaTO', NULL, NULL, '2019-10-26 08:34:43', '2019-10-26 08:34:43'),
(2, 'Preslava', 'pepi@feqgg', NULL, '$2y$10$KCmKfN6LWK/BFy5AMa8HbewAuRPKbvIRZ4mXbX6weHjxT.3C/mvJ6', 1, NULL, '2019-10-26 08:35:22', '2019-10-26 08:35:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desserts`
--
ALTER TABLE `desserts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `four_degree_menus`
--
ALTER TABLE `four_degree_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `four_degree_menus_salad_id_foreign` (`salad_id`),
  ADD KEY `four_degree_menus_drink_id_foreign` (`drink_id`),
  ADD KEY `four_degree_menus_main_id_foreign` (`main_id`),
  ADD KEY `four_degree_menus_dessert_id_foreign` (`dessert_id`),
  ADD KEY `restaurant_id` (`restaurant_id`);

--
-- Indexes for table `mains`
--
ALTER TABLE `mains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `one_degree_menus`
--
ALTER TABLE `one_degree_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restaurant_id` (`restaurant_id`),
  ADD KEY `one_degree_menus_salad_id_foreign` (`salad_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salads`
--
ALTER TABLE `salads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `three_degree_menus`
--
ALTER TABLE `three_degree_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `three_degree_menus_salad_id_foreign` (`salad_id`),
  ADD KEY `three_degree_menus_drink_id_foreign` (`drink_id`),
  ADD KEY `three_degree_menus_main_id_foreign` (`main_id`),
  ADD KEY `restaurant_id` (`restaurant_id`);

--
-- Indexes for table `two_degree_menus`
--
ALTER TABLE `two_degree_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `two_degree_menus_salad_id_foreign` (`salad_id`),
  ADD KEY `two_degree_menus_drink_id_foreign` (`drink_id`),
  ADD KEY `restaurant_id` (`restaurant_id`);

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
-- AUTO_INCREMENT for table `desserts`
--
ALTER TABLE `desserts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `drinks`
--
ALTER TABLE `drinks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `four_degree_menus`
--
ALTER TABLE `four_degree_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mains`
--
ALTER TABLE `mains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `one_degree_menus`
--
ALTER TABLE `one_degree_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `salads`
--
ALTER TABLE `salads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `three_degree_menus`
--
ALTER TABLE `three_degree_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `two_degree_menus`
--
ALTER TABLE `two_degree_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `four_degree_menus`
--
ALTER TABLE `four_degree_menus`
  ADD CONSTRAINT `four_degree_menus_dessert_id_foreign` FOREIGN KEY (`dessert_id`) REFERENCES `desserts` (`id`),
  ADD CONSTRAINT `four_degree_menus_drink_id_foreign` FOREIGN KEY (`drink_id`) REFERENCES `drinks` (`id`),
  ADD CONSTRAINT `four_degree_menus_main_id_foreign` FOREIGN KEY (`main_id`) REFERENCES `mains` (`id`),
  ADD CONSTRAINT `four_degree_menus_restaurant_id_foreign` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`id`),
  ADD CONSTRAINT `four_degree_menus_salad_id_foreign` FOREIGN KEY (`salad_id`) REFERENCES `salads` (`id`);

--
-- Constraints for table `one_degree_menus`
--
ALTER TABLE `one_degree_menus`
  ADD CONSTRAINT `one_degree_menus_restaurant_id_foreign` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`id`),
  ADD CONSTRAINT `one_degree_menus_salad_id_foreign` FOREIGN KEY (`salad_id`) REFERENCES `salads` (`id`);

--
-- Constraints for table `three_degree_menus`
--
ALTER TABLE `three_degree_menus`
  ADD CONSTRAINT `three_degree_menus_drink_id_foreign` FOREIGN KEY (`drink_id`) REFERENCES `drinks` (`id`),
  ADD CONSTRAINT `three_degree_menus_main_id_foreign` FOREIGN KEY (`main_id`) REFERENCES `mains` (`id`),
  ADD CONSTRAINT `three_degree_menus_restaurant_id_foreign` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`id`),
  ADD CONSTRAINT `three_degree_menus_salad_id_foreign` FOREIGN KEY (`salad_id`) REFERENCES `salads` (`id`);

--
-- Constraints for table `two_degree_menus`
--
ALTER TABLE `two_degree_menus`
  ADD CONSTRAINT `two_degree_menus_drink_id_foreign` FOREIGN KEY (`drink_id`) REFERENCES `drinks` (`id`),
  ADD CONSTRAINT `two_degree_menus_restaurant_id_foreign` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`id`),
  ADD CONSTRAINT `two_degree_menus_salad_id_foreign` FOREIGN KEY (`salad_id`) REFERENCES `salads` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
