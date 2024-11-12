-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 12, 2024 at 02:27 PM
-- Server version: 8.2.0
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invenflow`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', 'Devices such as smartphones, laptops, and monitors', '2024-11-11 06:14:11', '2024-11-11 06:14:11'),
(2, 'Accessories', 'Peripheral items like headphones, keyboards, and mice', '2024-11-11 06:14:11', '2024-11-11 06:14:11'),
(3, 'Furniture', 'Office furniture including chairs and desks', '2024-11-11 06:14:11', '2024-11-11 06:14:11'),
(4, 'Printing', 'Printers and related accessories', '2024-11-11 06:14:11', '2024-11-11 06:14:11'),
(5, 'Storage', 'External storage devices like hard drives', '2024-11-11 06:14:11', '2024-11-11 06:14:11'),
(6, 'Audio', 'Audio equipment and devices', '2024-11-11 06:14:11', '2024-11-11 06:14:11'),
(7, 'Video', 'Webcams and video equipment', '2024-11-11 06:14:11', '2024-11-11 06:14:11'),
(8, 'Office Supplies', 'General office supplies and tools', '2024-11-11 06:14:11', '2024-11-11 06:14:11'),
(9, 'Wearables', 'Wearable technology and gadgets', '2024-11-11 06:14:11', '2024-11-11 06:14:11'),
(10, 'Networking', 'Networking devices like routers and modems', '2024-11-11 06:14:11', '2024-11-11 06:14:11');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventories`
--

CREATE TABLE `inventories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `quantity` int NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `supplier_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventories`
--

INSERT INTO `inventories` (`id`, `name`, `description`, `quantity`, `price`, `created_at`, `updated_at`, `category_id`, `supplier_id`) VALUES
(2, 'Laptop', 'High-performance laptop for professionals', 15, '1200.00', '2024-11-07 10:49:43', '2024-11-12 07:08:32', 1, 1),
(3, 'Smartphone', 'Latest model with advanced features', 30, '800.50', '2024-11-07 10:49:43', '2024-11-07 10:49:43', 1, 1),
(4, 'Headphones', 'Noise-cancelling over-ear headphones', 50, '150.00', '2024-11-07 10:49:43', '2024-11-12 07:19:02', 6, 6),
(5, 'Keyboard', 'Mechanical keyboard with RGB lighting', 25, '75.99', '2024-11-07 10:49:43', '2024-11-07 10:49:43', 2, 2),
(6, 'Monitor', '4K Ultra HD monitor with HDR support', 20, '300.00', '2024-11-07 10:49:43', '2024-11-07 10:49:43', 1, 1),
(7, 'Mouse', 'Ergonomic wireless mouse', 40, '25.50', '2024-11-07 10:49:43', '2024-11-07 22:39:07', 2, 2),
(8, 'Desk Chair', 'Comfortable chair with lumbar support', 10, '120.00', '2024-11-07 10:49:43', '2024-11-07 10:49:43', 3, 8),
(9, 'Printer', 'All-in-one color printer', 12, '220.75', '2024-11-07 10:49:43', '2024-11-07 10:49:43', 4, 4),
(10, 'External Hard Drive', '1TB USB 3.0 external hard drive', 30, '55.99', '2024-11-07 10:49:43', '2024-11-08 00:22:22', 5, 5),
(11, 'Webcam', '1080p HD webcam with microphone', 18, '65.00', '2024-11-07 10:49:43', '2024-11-07 10:49:43', 7, 7),
(25, '64 GB Pen Drive', 'External pen drive with space 64 GB', 12, '60.00', '2024-11-07 22:50:36', '2024-11-12 07:25:54', 5, 5),
(26, 'RTX 3050', 'Nvidia RTX 3050 Graphic card', 5, '100.00', '2024-11-07 23:22:40', '2024-11-07 23:22:40', 2, 2),
(29, 'Noise Cancelling Headphones', 'Wireless noise-cancelling headphones.', 80, '199.00', '2024-11-08 00:32:09', '2024-11-12 07:18:07', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `inventory_supplier`
--

CREATE TABLE `inventory_supplier` (
  `id` bigint UNSIGNED NOT NULL,
  `inventory_id` bigint UNSIGNED NOT NULL,
  `supplier_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2024_11_07_071355_create_inventories_table', 1),
(11, '2024_11_08_051029_create_categories_table', 2),
(12, '2024_11_08_051434_create_suppliers_table', 2),
(13, '2024_11_08_051620_create_inventory_supplier_table', 2),
(14, '2024_11_10_173532_add_category_id_to_inventories', 3),
(15, '2024_11_11_061123_add_description_to_categories_table', 4),
(16, '2024_11_11_061218_add_description_to_categories_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `contact_info`, `created_at`, `updated_at`) VALUES
(1, 'Tech Supplies Inc.', 'techsupplies@example.com', '2024-11-12 06:25:09', '2024-11-12 03:18:54'),
(2, 'Office Essentials Ltd', 'officeessentials@example.com', '2024-11-12 06:25:09', '2024-11-12 03:16:37'),
(3, 'Global Electronics', 'global.electronics@example.com', '2024-11-12 06:25:09', '2024-11-12 03:15:41'),
(4, 'Print Solutions', 'print.solutions@example.com', '2024-11-12 06:25:09', '2024-11-12 06:25:09'),
(5, 'Storage Plus', 'storageplus@example.com', '2024-11-12 06:25:09', '2024-11-12 06:25:09'),
(6, 'Audio World', 'audioworld@example.com', '2024-11-12 06:25:09', '2024-11-12 06:25:09'),
(7, 'Video Experts', 'videoexperts@example.com', '2024-11-12 06:25:09', '2024-11-12 06:25:09'),
(8, 'OfficeMart', 'officemart@example.com', '2024-11-12 06:25:09', '2024-11-12 06:25:09'),
(9, 'Wearable Tech Co.', 'wearabletech@example.com', '2024-11-12 06:25:09', '2024-11-12 06:25:09'),
(10, 'Network Solutions', 'network.solutions@example.com', '2024-11-12 06:25:09', '2024-11-12 06:25:09'),
(11, 'playItemsCop', 'playItems@gmail.com', '2024-11-12 01:45:17', '2024-11-12 01:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kaveesha', 'kaveesha.hettige@gmail.com', NULL, '$2y$12$kEMtLyrRy5Ub2jnMiCca5ObpoeX8L4f6DQH4iSZvCWxWlg9eaRbrq', 'kTkNx9iOtJtv7NAwjoGh8jS749eIrkIINuWuFEKEP2sdEjnTbvR4ryZDeBf1', '2024-11-07 05:11:52', '2024-11-07 05:11:52'),
(2, 'Nipul', 'nipul@gmail.com', NULL, '$2y$12$SxWjk1/MuPypF4uob1PZ2.24Ees8Mq/ck7sPdvdLZEb9HzYUg2jSC', NULL, '2024-11-07 23:49:42', '2024-11-07 23:49:42'),
(3, 'Santhush', 'seba@gmail.com', NULL, '$2y$12$tZa2kbuabqDzfq4YVVnY1eO0KtNcdH4OUqlQuymRwi614hzK6mJY2', NULL, '2024-11-07 23:51:19', '2024-11-07 23:51:19'),
(4, 'Ashan', 'ashan.praboda@gmail.com', NULL, '$2y$12$ht2FvAocANICRwzvq6Ik2e6TP6SnmXpAX2TSdITSiYhw8PGz/ZSVe', NULL, '2024-11-08 00:28:06', '2024-11-08 00:28:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `inventories`
--
ALTER TABLE `inventories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inventories_category_id_foreign` (`category_id`),
  ADD KEY `inventories_supplier_id_foreign` (`supplier_id`);

--
-- Indexes for table `inventory_supplier`
--
ALTER TABLE `inventory_supplier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inventory_supplier_inventory_id_foreign` (`inventory_id`),
  ADD KEY `inventory_supplier_supplier_id_foreign` (`supplier_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventories`
--
ALTER TABLE `inventories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `inventory_supplier`
--
ALTER TABLE `inventory_supplier`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inventories`
--
ALTER TABLE `inventories`
  ADD CONSTRAINT `inventories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `inventories_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `inventory_supplier`
--
ALTER TABLE `inventory_supplier`
  ADD CONSTRAINT `inventory_supplier_inventory_id_foreign` FOREIGN KEY (`inventory_id`) REFERENCES `inventories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `inventory_supplier_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
