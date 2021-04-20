-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Generation Time: Apr 07, 2021 at 09:22 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rivercranedata`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_num` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `email`, `tel_num`, `address`, `is_active`, `created_at`, `updated_at`) VALUES
(11, 'Alene Hagenes', 'nikolaus.dariana@example.org', '+14033592235', '35091 Pablo Squares\nEast Jacey, IL 42674', 1, '2021-03-29 07:10:00', '2021-03-29 07:10:00'),
(12, 'Prof. Webster Mraz V', 'boehm.moshe@example.com', '+1-712-473-5054', '197 Bechtelar Crescent Apt. 678\nNew Myra, MO 11603', 1, '2021-03-29 07:10:00', '2021-03-29 07:10:00'),
(13, 'Mr. Antwon Franecki IV', 'ekovacek@example.com', '1-740-337-1183', '127 Mante Stravenue\nSabrinamouth, UT 92661', 1, '2021-03-29 07:10:00', '2021-03-29 07:10:00'),
(14, 'Leonor Aufderhar', 'zcollier@example.org', '(218) 270-2770', '3481 Haley Vista\nRohanmouth, CO 75195', 1, '2021-03-29 07:10:00', '2021-03-29 07:10:00'),
(15, 'Reginald Schmeler', 'cleve53@example.net', '1-770-920-8439', '2514 Earlene Park Suite 257\nWest Donald, NV 64127-4265', 1, '2021-03-29 07:10:00', '2021-03-29 07:10:00'),
(16, 'Priscilla Kassulke', 'victoria63@example.net', '(718) 607-2772', '9931 Hester Fall\nMillsborough, ME 79883', 1, '2021-03-29 07:10:00', '2021-03-29 07:10:00'),
(17, 'Katrina Hoeger', 'colton95@example.com', '+1-251-992-5903', '9176 Merritt Run\nJedidiahfurt, NY 43339-8002', 1, '2021-03-29 07:10:00', '2021-03-29 07:10:00'),
(18, 'Maximillian Wolf', 'thiel.skyla@example.com', '(337) 533-7483', '2619 Daniel Lane Suite 383\nSouth Marlon, CT 94484-7782', 1, '2021-03-29 07:10:00', '2021-03-29 07:10:00'),
(19, 'Mr. Owen Cartwright', 'stanton.madelyn@example.org', '(652) 756-8434', '228 DuBuque Island\nSouth Zack, KS 06544', 1, '2021-03-29 07:10:00', '2021-03-29 07:10:00'),
(20, 'Mr. Guido Terry III', 'conner.hand@example.com', '+13083407298', '653 Jonathan Plaza\nNathanaelmouth, CO 95960', 1, '2021-03-29 07:10:00', '2021-03-29 07:10:00'),
(21, 'Nguyễn Thành Khoa', 'Khoa@gmail.com', '12345678910', 'hanoi 152sada', 1, '2021-03-29 07:44:21', '2021-03-30 01:39:16'),
(23, 'Nguyen Thanh Dang', 'dang@gmail.com', '12345678910', 'hahahahEast Jacey, IL 42674', 1, '2021-03-30 03:43:51', '2021-04-03 02:00:50'),
(24, 'Nguyễn Thanh Hùng', 'hung@gmail.com', '12345678910', 'dadadadadadad', 1, '2021-04-03 07:43:52', '2021-04-03 17:50:15'),
(26, 'Nguyen Van A', 'A@gmail.com', '12345678910', 'adsadda 31sa', 1, '2021-04-03 19:31:38', '2021-04-03 19:31:38'),
(28, 'Nguyen Van B', 'B@gmail.com', '12345678910', 'adsadda 31sa', 1, '2021-04-03 19:47:24', '2021-04-03 19:47:24'),
(30, 'Nguyen Van C', 'C@gmail.com', '12345678910', 'adsadda 31sa', 1, '2021-04-04 02:32:39', '2021-04-04 02:32:39');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(4, '2021_03_29_032626_create_customers_table', 2),
(5, '2021_03_30_065737_create_product_table', 3);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` decimal(8,2) NOT NULL DEFAULT '0.00',
  `is_sales` tinyint(4) NOT NULL DEFAULT '1',
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_image`, `product_price`, `is_sales`, `description`, `created_at`, `updated_at`) VALUES
('0OHV0eLNzH', 'dolor', NULL, '81035.00', 0, 'Aut omnis quas quasi corporis alias ut.', '2021-03-30 07:53:22', '2021-03-30 07:53:22'),
('35ig0ihtnD', 'beatae', NULL, '879.00', 1, 'Molestiae voluptatem enim est eos qui.', '2021-03-30 07:45:17', '2021-03-30 07:45:17'),
('3iCDBIcuNx', 'repellendus', NULL, '651077.00', 1, 'Minima necessitatibus itaque omnis et et culpa cupiditate.', '2021-03-30 07:53:05', '2021-03-30 07:53:05'),
('4EcUMRrJnm', 'doloremque', NULL, '85982.00', 1, 'Ut est unde aut quaerat.', '2021-03-30 07:53:05', '2021-03-30 07:53:05'),
('A9qbhZ9QkC', 'delectus', NULL, '91454.00', 1, 'Fugit reiciendis sit illo temporibus.', '2021-03-30 07:53:22', '2021-03-30 07:53:22'),
('Am3SrJlccH', 'magnam', NULL, '8987.00', 1, 'Quo cum est repellat aliquam aliquam architecto ducimus dolorem.', '2021-03-30 07:45:17', '2021-03-30 07:45:17'),
('aXc9KrEZ1N', 'quos', NULL, '491312.71', 1, 'Accusantium officia aliquid explicabo aut enim quia.', '2021-03-30 07:46:52', '2021-03-30 07:46:52'),
('EKqZF3scr2', 'vero', NULL, '95816.00', 1, 'Expedita beatae doloremque quia est consectetur corrupti.', '2021-03-30 07:53:05', '2021-03-30 07:53:05'),
('fihncBAqA6', 'illum', NULL, '0.24', 1, 'Ab eligendi asperiores eius voluptas sed aut.', '2021-03-30 07:46:52', '2021-03-30 07:46:52'),
('Kgbot5eTmf', 'tenetur', NULL, '7461.00', 1, 'Cum fuga asperiores laboriosam et at et aut pariatur.', '2021-03-30 07:53:22', '2021-03-30 07:53:22'),
('lD7vYNXc5a', 'voluptatem', NULL, '37605.00', 1, 'Voluptates et delectus distinctio error est qui.', '2021-03-30 07:53:22', '2021-03-30 07:53:22'),
('MXl9T7nNIg', 'eos', NULL, '158.00', 1, 'Officia rerum quas dolores iure cupiditate.', '2021-03-30 07:53:05', '2021-03-30 07:53:05'),
('p94vTFA9ID', 'nemo', NULL, '817.00', 1, 'Ut impedit repellat earum minima recusandae aut.', '2021-03-30 07:53:05', '2021-03-30 07:53:05'),
('pmF2oDkgnw', 'itaque', NULL, '26628.00', 1, 'Et tempore eum ea sequi esse ipsa nihil.', '2021-03-30 07:53:22', '2021-03-30 07:53:22'),
('pQI3V0GsqI', 'sed', NULL, '46055.00', 1, 'Reiciendis quo et sequi blanditiis magni veniam.', '2021-03-30 07:53:22', '2021-03-30 07:53:22'),
('PqSBJAkmpp', 'voluptatem', NULL, '5227.00', 1, 'Veritatis unde eius tempora esse.', '2021-03-30 07:53:05', '2021-03-30 07:53:05'),
('TctDwHMnHM', 'fuga', NULL, '81746.00', 1, 'Corporis optio blanditiis et sit qui quibusdam ipsa incidunt.', '2021-03-30 07:53:22', '2021-03-30 07:53:22'),
('ua5AxaESDC', 'atque', NULL, '9269.00', 1, 'Et voluptas adipisci totam sunt nesciunt praesentium qui suscipit.', '2021-03-30 07:53:05', '2021-03-30 07:53:05'),
('upqTmAQ4Za', 'maxime', NULL, '49.25', 1, 'Et fugiat iure aspernatur quo et.', '2021-03-30 07:46:52', '2021-03-30 07:46:52'),
('wcEONzT4rK', 'saepe', NULL, '67015.00', 1, 'Et animi non reiciendis harum facere sequi consequuntur.', '2021-03-30 07:53:22', '2021-03-30 07:53:22'),
('YaDolbBoeV', 'quam', NULL, '2102.13', 1, 'Occaecati quia veritatis ut sed laboriosam sit.', '2021-03-30 07:46:52', '2021-03-30 07:46:52'),
('yikt8Of4xO', 'molestias', NULL, '4389.00', 1, 'A consectetur perferendis enim sit totam ab error.', '2021-03-30 07:53:05', '2021-03-30 07:53:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verify_email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL,
  `is_delete` tinyint(4) NOT NULL,
  `group_role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL,
  `last_login_ip` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `verify_email`, `is_active`, `is_delete`, `group_role`, `last_login_at`, `last_login_ip`, `created_at`, `updated_at`) VALUES
(1, 'Earnest Bode DVM', 'roma14@example.com', '$2y$10$m11UxuS8qDOLUUbZiFYrLucpCfBLhc6JyswbtwszTIOm03Zdbucma', 'iXqR3TzHDXEPGspZEZegtncfv2ie33eGTkT0oES3lBl0jJeh9PJUeMqcw5gx', '2021-03-24 06:24:23', 1, 0, 'Admin', '2021-04-07 13:56:14', '172.18.0.1', '2021-03-24 06:24:26', '2021-04-07 06:56:14'),
(2, 'Prof. Shea Funk IV', 'greta.dibbert@example.org', '$2y$10$9./D8hADTYEOzFaCMj1T7uPC6NMrdquTyxAN/BxnclndXg1YhleDy', 'dSlAdCxeV0', '2021-03-24 06:24:23', 1, 1, 'Reviewer', NULL, NULL, '2021-03-24 06:24:26', '2021-03-25 07:39:52'),
(3, 'Shaun Doyle Sr.', 'wcormier@example.net', '$2y$10$h3MfXZFULk7mBMbi2mIHL.FUuhV2DBroH6fdfKqLLDjPJO3BhtYRK', '3Qc32XqcvB', '2021-03-24 06:24:23', 1, 0, 'Editor', NULL, NULL, '2021-03-24 06:24:26', '2021-03-24 06:24:26'),
(4, 'Prof. Kaleb Lang V', 'murray.maybell@example.net', '$2y$10$2U1pE8dMF7rBICibrv8.oeAdvsLkgXM3ELsyMiO.QSDSHbiVHjRTm', 'kHLJjJwquN', '2021-03-24 06:24:24', 1, 0, 'Reviewer', NULL, NULL, '2021-03-24 06:24:26', '2021-03-24 06:24:26'),
(5, 'Madeline Homenick', 'greinger@example.org', '$2y$10$aicxWkzN2sxKgEfWPN1HXuPyHgLekVPPrMUkX05osLOgPCDV.vbPW', 'hpS9zzyj3t', '2021-03-24 06:24:24', 1, 0, 'Admin', NULL, NULL, '2021-03-24 06:24:26', '2021-03-24 06:24:26'),
(6, 'Mortimer Block', 'bhomenick@example.net', '$2y$10$MvdB33YEULi8NTmYBV7M7.oR7BTiqvY4ffWUatB6Q5A4GNEQuA4bq', 'D6DfwLk73A', '2021-03-24 06:24:24', 1, 0, 'Admin', NULL, NULL, '2021-03-24 06:24:26', '2021-03-24 06:24:26'),
(7, 'Missouri Boyer', 'grant38@example.org', '$2y$10$2Eo94iMc.6q.zvJLFiCzouRlv8x2dE3vwdOt2DYCIOIQ7JgXNkfx6', '5i8KG7Z5E0', '2021-03-24 06:24:24', 1, 0, 'Reviewer', NULL, NULL, '2021-03-24 06:24:26', '2021-03-24 06:24:26'),
(8, 'Mr. Logan Stanton', 'tkautzer@example.org', '$2y$10$kYE5fXyVDO12rwR2bUL5BeQTinY.pa1AxJrYjtN8z/bw3lG4CiEv2', 'Y0Oh3kxMGF', '2021-03-24 06:24:24', 1, 0, 'Reviewer', NULL, NULL, '2021-03-24 06:24:26', '2021-03-24 06:24:26'),
(9, 'Lilian Hoppe', 'cole.mable@example.net', '$2y$10$pPriiRG8Y36s1F3mk/mx3.73FaZ14bU9YzuXCy2KUVxPXLq3l5uXu', 'UzfnT5FCK5', '2021-03-24 06:24:24', 1, 0, 'Editor', NULL, NULL, '2021-03-24 06:24:26', '2021-03-24 06:24:26'),
(10, 'Ms. Dannie Sanford DVM', 'sgerhold@example.com', '$2y$10$5VT.NXRJTjCA4mUyMvFEGOl1eUcQim9.GYkUeu54dt7TQdLUpWtiW', 'HiVThLgbls', '2021-03-24 06:24:24', 1, 1, 'Editor', NULL, NULL, '2021-03-24 06:24:26', '2021-04-06 09:10:01'),
(11, 'Prof. Uriel Morissette Jr.', 'aokuneva@example.com', '$2y$10$dikwrUp5pt7Dz.b92kc3DOl0I4iG0kWtZqn.kS8ngzbQcXDOn0yzK', 'mz0frhpgx5', '2021-03-24 06:24:24', 1, 0, 'Admin', NULL, NULL, '2021-03-24 06:24:26', '2021-03-24 06:24:26'),
(12, 'Miss Grace Harvey III', 'wunsch.eduardo@example.org', '$2y$10$vU./Ti6HSH1QEXXOrmF6ZOwIhdeLJuJvnMPTDzWUfSXIBvr5m6mv2', 'qDwmyFpL4B', '2021-03-24 06:24:24', 1, 0, 'Admin', NULL, NULL, '2021-03-24 06:24:26', '2021-03-24 06:24:26'),
(13, 'Arlie Bogisich', 'remard@example.com', '$2y$10$EnbSLvbXrDdk1DNkT71Q5OEeFrGD0EZDvneHaR69XFqdGGL0q/TdS', 'fJBTbcCy2M', '2021-03-24 06:24:24', 1, 0, 'Reviewer', NULL, NULL, '2021-03-24 06:24:26', '2021-03-24 06:24:26'),
(14, 'Leopoldo Schroeder', 'frice@example.org', '$2y$10$B85L77SP4Fnrx9lYi3jzmO1kb59yEia9teBEs3elWSy/XSvS4/6EO', '9Xp2MwDvtt', '2021-03-24 06:24:25', 1, 0, 'Admin', NULL, NULL, '2021-03-24 06:24:26', '2021-03-24 06:24:26'),
(15, 'Nellie Willms', 'buckridge.cordie@example.com', '$2y$10$jLlUs91ycoLmbJhxXE7JwulgXrFmsk77P.zfd316xqHzGyYiiG2ke', 'bRc9YC9Ms8', '2021-03-24 06:24:25', 1, 0, 'Reviewer', NULL, NULL, '2021-03-24 06:24:26', '2021-03-24 06:24:26'),
(16, 'Johnathan Ruecker', 'devonte.stroman@example.net', '$2y$10$hoyBrNb5RsAe0wN2LuMd3OsS/3YqgqKv2eC8NT4f3AfPQZlk9T9jS', 'Yi62e3d2sC', '2021-03-24 06:24:25', 1, 0, 'Reviewer', NULL, NULL, '2021-03-24 06:24:26', '2021-03-24 06:24:26'),
(17, 'Felipe Carroll', 'lebsack.erwin@example.org', '$2y$10$OdL1J2fYP.KRq5WKGTVmseErBmo9yMw1EJ8eQ4AjyMJ5K7OUkLvR.', 'nqziH7PkMh', '2021-03-24 06:24:25', 1, 0, 'Admin', NULL, NULL, '2021-03-24 06:24:26', '2021-03-24 06:24:26'),
(18, 'Mr. Eugene Bayer I', 'stanton.douglas@example.org', '$2y$10$OKQ.FEPr97d6.lTbwYQ0E.Qi6SnUEatfspc25WBPLvcG7i0WZlpb.', 'ELRp0rvRzP', '2021-03-24 06:24:25', 1, 0, 'Reviewer', NULL, NULL, '2021-03-24 06:24:26', '2021-03-24 06:24:26'),
(19, 'Ray O\'Hara', 'ryan.axel@example.com', '$2y$10$KJzeiZFcRbTvlXyWlYboE.WOu558CgDIwoxNGRxZjzRYkrIsHPR.O', 'IXlyjXCzdS', '2021-03-24 06:24:25', 1, 0, 'Reviewer', NULL, NULL, '2021-03-24 06:24:26', '2021-03-24 06:24:26'),
(20, 'Magali Little', 'joseph.langworth@example.org', '$2y$10$dckndKVX8WGGYGliH83ZXO.Xgik4X3kyc2Ca9H5ZCg40KFd8650w6', 'tMGZlG16Mp', '2021-03-24 06:24:25', 1, 0, 'Reviewer', NULL, NULL, '2021-03-24 06:24:26', '2021-03-24 06:24:26'),
(21, 'Miss Yazmin Swaniawski DVM', 'vada.kreiger@example.net', '$2y$10$FMjTomuWyzg8adFv7X9WzefVjI04sbAdPNk/LN3iiK3flOT/w2XO6', '75OizJra5t', '2021-03-24 06:24:25', 1, 0, 'Reviewer', NULL, NULL, '2021-03-24 06:24:26', '2021-03-24 06:24:26'),
(22, 'Adrain Cormier', 'heaney.maryam@example.net', '$2y$10$D.uQwKCT8A03NmwaWmZ5fOfb5PIbktVHJZRG2zC7L9JvFFS19xhXe', 'FG9sZ0OpOP', '2021-03-24 06:24:25', 1, 0, 'Admin', NULL, NULL, '2021-03-24 06:24:26', '2021-03-24 06:24:26'),
(23, 'Mylene Morar', 'pkreiger@example.net', '$2y$10$bDEyth.A5O8QTd6qC/DQkeeCkcrggV8ZpwodMrc1d1q1uGhXeAUOK', 'D3srB7zaIf', '2021-03-24 06:24:25', 1, 0, 'Admin', NULL, NULL, '2021-03-24 06:24:26', '2021-03-24 06:24:26'),
(24, 'Mr. Wilburn Marks', 'kozey.leanna@example.org', '$2y$10$O3Ib//uXNGotHHMs/XgbBu6mFu4ooeJP8n3m23gJ4Xm4VhwLx/CGq', '0a357MYEPe', '2021-03-24 06:24:26', 1, 0, 'Reviewer', NULL, NULL, '2021-03-24 06:24:26', '2021-03-24 06:24:26'),
(25, 'Bertram Schmeler', 'sunny10@example.net', '$2y$10$o6xJ7/mosWl4nbwLqBNM2.snQaeguiFqkwkeCLkOzYRjBDIIvtV2C', 'Nc86fyAxMt', '2021-03-24 06:24:26', 1, 0, 'Editor', NULL, NULL, '2021-03-24 06:24:26', '2021-03-24 06:24:26'),
(26, 'Ola Hartmann', 'ned.mann@example.net', '$2y$10$EovyTy0aNA2epurqhCgNCeYtzC.ezhfruLMCHNoY0ZlOPT3zfBiQa', 'YCc7eHYhig', '2021-03-24 06:24:26', 1, 0, 'Editor', NULL, NULL, '2021-03-24 06:24:26', '2021-03-24 06:24:26'),
(27, 'Autumn Erdman MD', 'abbott.kenyatta@example.com', '$2y$10$9OpOSLvafG.Ru1tgzLqFRu5XRUVObDCpeUAxILmSSbrOs3BgV6M1a', '7vs5kFUdHY', '2021-03-24 06:24:26', 1, 0, 'Admin', NULL, NULL, '2021-03-24 06:24:26', '2021-03-24 06:24:26'),
(28, 'Lillie Orn MD', 'blanda.alek@example.org', '$2y$10$y26VJJJvlhGc7pdnFDmywe/lRFJ6x9TzMrwjB1w0i9lJLVyUh6PAS', 'jwo84aFLvT', '2021-03-24 06:24:26', 1, 0, 'Admin', NULL, NULL, '2021-03-24 06:24:26', '2021-03-24 06:24:26'),
(29, 'Doyle Wintheiser', 'geovanni35@example.com', '$2y$10$fovA/S2ibeP/5MVw0x9RbOoo8SzzL64N5zXCVwcPWQkvwefeERBq.', 'QRIqHaDHqO', '2021-03-24 06:24:26', 1, 0, 'Reviewer', NULL, NULL, '2021-03-24 06:24:26', '2021-03-24 06:24:26'),
(30, 'Beulah Shields', 'angela.yost@example.com', '$2y$10$wt03TfNXkxhcW8vqIbxkmObtBzoRM60ruTxbrpTlhBQt5LN7Vu3xe', 'Uk9oj22qWM', '2021-03-24 06:24:26', 1, 0, 'Editor', NULL, NULL, '2021-03-24 06:24:26', '2021-03-24 06:24:26'),
(31, 'Nguyễn Thành Đăng', 'dang@gmail.com', '$2y$10$RvLk2wq0WAoj7sIkLmEiVu7fEYMd6n6qBTWi1FYbYg97kB15.lVra', NULL, NULL, 1, 0, 'Admin', NULL, NULL, '2021-03-26 07:11:39', '2021-03-29 02:54:41'),
(32, 'Ezra Mayer', 'durgan.johan@example.com', '$2y$10$ZiTY4lm6if7ov1EZy53E8ONWeB7/ZKEI0BtTOsLotGj2uBxwXOJgK', 'f7ZeaMq3Yc', '2021-03-29 03:44:59', 1, 0, 'Admin', NULL, NULL, '2021-03-29 03:45:02', '2021-03-29 03:45:02'),
(33, 'Mrs. Katarina Macejkovic', 'monique.larson@example.org', '$2y$10$Tmwh/YmiJMogiZFh5vsZIOs/d5uVmvdSDdiRuq4j6LAxOI99wIJWG', 'tGD4TkkIcV', '2021-03-29 03:44:59', 1, 0, 'Editor', NULL, NULL, '2021-03-29 03:45:02', '2021-03-29 03:45:02'),
(34, 'Ms. Veda Hessel', 'oberbrunner.dock@example.com', '$2y$10$1bvF41J6SpAvnT2ggTwyMuj0a6vF0.spxozA4hTEkDoyNaupmJ1cW', '4bDfmNMWfm', '2021-03-29 03:45:00', 1, 0, 'Editor', NULL, NULL, '2021-03-29 03:45:02', '2021-03-29 03:45:02'),
(35, 'Lemuel Jenkins', 'shany05@example.com', '$2y$10$Qdig35QaLn1ZoX2rtWf0wOVAxiRtVPp3oRjyI4Ec1Z9stzsmIpBDW', '2BtNoagFOL', '2021-03-29 03:45:00', 1, 0, 'Admin', NULL, NULL, '2021-03-29 03:45:02', '2021-03-29 03:45:02'),
(36, 'Kaley Leannon', 'bernhard23@example.com', '$2y$10$8/18gxLXPqQk8zk2Xb5XjemeusSa8RfJYcdZoXTOI7sNF.f79hTzm', '5TkJWBXQcy', '2021-03-29 03:45:00', 1, 0, 'Editor', NULL, NULL, '2021-03-29 03:45:02', '2021-03-29 03:45:02'),
(37, 'Ms. Pat Baumbach DDS', 'kolby.leffler@example.net', '$2y$10$XAyIE1CgiSCumLik0dAix.mEqR.j1lpPRocYEHcAScNnh1QS5l9MW', 'MpT8hc2PFy', '2021-03-29 03:45:00', 1, 0, 'Reviewer', NULL, NULL, '2021-03-29 03:45:02', '2021-03-29 03:45:02'),
(38, 'Estella Stracke PhD', 'bridie.reinger@example.net', '$2y$10$.tm2Bj1IgKru2/1.hchxbupUVdscWYXYdSx.p6vPDDXfaCtcTXUcW', 'jQl6o21bO2', '2021-03-29 03:45:00', 1, 0, 'Admin', NULL, NULL, '2021-03-29 03:45:03', '2021-03-29 03:45:03'),
(39, 'Marilou Lockman', 'bret.mohr@example.com', '$2y$10$R8CDVG/gfK7feClYFRO6TOIToyohEMn68OazshlRWnb9PdrZkbALG', 'MNQCvCzp1u', '2021-03-29 03:45:00', 1, 0, 'Editor', NULL, NULL, '2021-03-29 03:45:03', '2021-03-29 03:45:03'),
(40, 'Mr. Sammie Leffler IV', 'gdicki@example.net', '$2y$10$3BSpSqzPjeQm0G8tzhlrJu57C3MsSKeF2vSFbLu6IDZajHiW3vr4G', '5foFdMjZbb', '2021-03-29 03:45:00', 1, 0, 'Editor', NULL, NULL, '2021-03-29 03:45:03', '2021-03-29 03:45:03'),
(41, 'Shirley Berge', 'olin66@example.org', '$2y$10$EeVBk7.MJdctrLdr0JZ18uZEKVvX0yfl1k5mQG.AnQihox6ow.Hb6', '4l7hZ7kiGx', '2021-03-29 03:45:00', 1, 0, 'Reviewer', NULL, NULL, '2021-03-29 03:45:03', '2021-03-29 03:45:03'),
(42, 'Orlo O\'Keefe', 'iwisoky@example.com', '$2y$10$v1LA6oG9OalmWB4cGQLIpeyEAvH2.khDJLR.Cy9yzuV2.04v0O1AC', 'Dc2QWkuKgb', '2021-03-29 03:45:00', 1, 0, 'Editor', NULL, NULL, '2021-03-29 03:45:03', '2021-03-29 03:45:03'),
(43, 'Suzanne Stracke', 'stracke.luciano@example.net', '$2y$10$PIFf95/.GkFulXJ.C7eV7OCY7Evc2lmHyBXeiSgISPaI7S1VDgatq', 'vsdt7Two2A', '2021-03-29 03:45:00', 1, 0, 'Reviewer', NULL, NULL, '2021-03-29 03:45:03', '2021-03-29 03:45:03'),
(44, 'Dr. Jamey O\'Conner', 'ford68@example.com', '$2y$10$hFfei1X2yWNYM.HIDxGpsuQFGzJXLYh91rOE3KEuQZSA1sueu20Ny', 'vk5tlzaI29', '2021-03-29 03:45:01', 1, 0, 'Admin', NULL, NULL, '2021-03-29 03:45:03', '2021-03-29 03:45:03'),
(45, 'Mrs. Micaela Hegmann II', 'jedidiah35@example.net', '$2y$10$IGbXLwevZIRqO72xTAzVPeUljWJnUeVODWL7xOldMMjOcxLuzROvi', 'OnDiH8MeYn', '2021-03-29 03:45:01', 1, 0, 'Editor', NULL, NULL, '2021-03-29 03:45:03', '2021-03-29 03:45:03'),
(46, 'Garland Parisian', 'brandt.lebsack@example.org', '$2y$10$63SLwoSi4nPXKxpjQ4uoBOx8TzbalzORbjDfQgN/GuDN8G8J2Ha1m', 'spS8kno9au', '2021-03-29 03:45:01', 1, 0, 'Admin', NULL, NULL, '2021-03-29 03:45:03', '2021-03-29 03:45:03'),
(47, 'Cathryn Gutkowski DDS', 'stoltenberg.jovani@example.com', '$2y$10$2Yjk1yxaU/BWRLc6bFFs1.4DqzLvqaH/w6qe/cpI1fvj7vtxXJ2qm', 'eDLCLdNSAq', '2021-03-29 03:45:01', 1, 0, 'Editor', NULL, NULL, '2021-03-29 03:45:03', '2021-03-29 03:45:03'),
(48, 'Jovan Legros', 'abdiel20@example.org', '$2y$10$iagoYa6g4kVkRCi2zbD/jOc3c9HPLSHD7GgUk2MQH7uNvCX02vZeO', 'P1lyxGjyX5', '2021-03-29 03:45:01', 1, 0, 'Editor', NULL, NULL, '2021-03-29 03:45:03', '2021-03-29 03:45:03'),
(49, 'Rosalind VonRueden', 'watsica.buster@example.net', '$2y$10$nOJ9Rc9VwuTQoCWWNOSZE.ozKR7oWBjJ5hmuEKo.gBCahlWWbJYZK', 'zZOIC42II4', '2021-03-29 03:45:01', 1, 0, 'Editor', NULL, NULL, '2021-03-29 03:45:03', '2021-03-29 03:45:03'),
(50, 'Dr. Rhett Lynch', 'thiel.nicola@example.net', '$2y$10$WGsMhbFyVk3IfUso2mvB/OOza5Rp8xZjrAr0BAky5MGztYTvwY9H6', 'ELDBidpNQK', '2021-03-29 03:45:01', 1, 0, 'Reviewer', NULL, NULL, '2021-03-29 03:45:03', '2021-03-29 03:45:03'),
(51, 'Shawna Kohler', 'mia09@example.net', '$2y$10$YsWYGCUaaXLXp28NxJmeOuDtzlqZr8gkHOBXzVOrYcC3hs76CuNSq', 'BXUJzYKvQs', '2021-03-29 03:45:01', 1, 0, 'Editor', NULL, NULL, '2021-03-29 03:45:03', '2021-03-29 03:45:03'),
(52, 'Kieran Ward', 'kaela.buckridge@example.org', '$2y$10$qH1ZqQJd/ahy4tA4wI9Jh.9LoU2bVFK677Tc4zlnQC4aBwZkuhsL2', '1LqBOhoxFP', '2021-03-29 03:45:01', 1, 0, 'Reviewer', NULL, NULL, '2021-03-29 03:45:03', '2021-03-29 03:45:03'),
(53, 'Arch Heidenreich', 'heaney.brisa@example.net', '$2y$10$Lt1QV7nSzM3azvl1HXiAdeHrAciGUW0WWt1wEmXHLw83jc/Sjw/He', '1rXyNUlisz', '2021-03-29 03:45:01', 1, 0, 'Admin', NULL, NULL, '2021-03-29 03:45:03', '2021-03-29 03:45:03'),
(54, 'Mr. Izaiah Brakus', 'verna48@example.org', '$2y$10$TmWjkJ4CdZBFG48TM9.EiOdSS6NBvDNsDKiQF1MV2hYKXYoLG7ZUe', 'GZcQFnHEK8', '2021-03-29 03:45:01', 1, 0, 'Editor', NULL, NULL, '2021-03-29 03:45:03', '2021-03-29 03:45:03'),
(55, 'Martine Mann', 'stokes.carolyn@example.org', '$2y$10$oUlqZcIzQkQD2kT7gn6/7uRXAuaAlywYSGGC8mSSjK.CvFj0Gri/O', 'GnKDyFDx7F', '2021-03-29 03:45:02', 1, 0, 'Editor', NULL, NULL, '2021-03-29 03:45:03', '2021-03-29 03:45:03'),
(56, 'Prof. Henri Trantow', 'ehartmann@example.net', '$2y$10$tv2ZUdtyIaPBV9REKKCSY.HJ5AGMa7Jz79nJ8ssKkJCmZKAM7bweW', '2uOUmMrR2T', '2021-03-29 03:45:02', 1, 0, 'Editor', NULL, NULL, '2021-03-29 03:45:03', '2021-03-29 03:45:03'),
(57, 'Dr. Ed Herzog', 'mozell32@example.net', '$2y$10$gG5nQLYtNtLUW0l.P9idCOGuxCQUgSfJDSG1xkXL1SYlC2zaNihAW', 'QdGHNGyK0s', '2021-03-29 03:45:02', 1, 0, 'Reviewer', NULL, NULL, '2021-03-29 03:45:03', '2021-03-29 03:45:03'),
(58, 'Miss Kathryn Johnson DDS', 'shegmann@example.org', '$2y$10$WNOjhnbepfXv/8rRY0XG.ukYYFJIQJOpkMbM6ewutk9pSqLYpQCWK', 'FferJP6Jw3', '2021-03-29 03:45:02', 1, 0, 'Reviewer', NULL, NULL, '2021-03-29 03:45:03', '2021-03-29 03:45:03'),
(59, 'Marilou Schimmel', 'vivian.champlin@example.org', '$2y$10$6Ec3MDJGQMMNeeKi5aRxqeP5yqa57FckkH57ZO6vWWcOAORc1zECC', 'DYtpTCIt9A', '2021-03-29 03:45:02', 1, 0, 'Reviewer', NULL, NULL, '2021-03-29 03:45:03', '2021-03-29 03:45:03'),
(60, 'Dr. Charles Leannon', 'glen.schuster@example.com', '$2y$10$4/y0/p9/kzvpuPw82YP0cu1Vj8Ta21yz.JeS8AXhXvUOlN2bUAsKm', 'LJ18NriJom', '2021-03-29 03:45:02', 1, 0, 'Admin', NULL, NULL, '2021-03-29 03:45:03', '2021-03-29 03:45:03'),
(61, 'Maryse Rodriguez', 'kirlin.saige@example.com', '$2y$10$vw6uaronG64nNraVfT1IzuVKabRgDteIaSab6KL.Z41CAxt8pFbRq', 'kmO1rNvox9', '2021-03-29 03:45:02', 1, 0, 'Admin', NULL, NULL, '2021-03-29 03:45:03', '2021-03-29 03:45:03'),
(62, 'Jany Sanford', 'mkeeling@example.org', '$2y$10$TfHxcIXM/YpGIY.ZPJpl0uHQGVNzfir98NlH6scbTZW.1SkIYtSxC', 'ZUuS4SPg3M', '2021-03-29 03:45:45', 1, 1, 'Admin', NULL, NULL, '2021-03-29 03:45:48', '2021-04-06 09:15:05'),
(63, 'Prof. Ciara Bayer', 'benton.jacobi@example.com', '$2y$10$o6eo0QYlfFSuQRVSvwi67uxpiFz5PRuqyybKHqxmvGci3SJ0/G2Me', 'aljKHeEFuy', '2021-03-29 03:45:45', 1, 1, 'Reviewer', NULL, NULL, '2021-03-29 03:45:48', '2021-04-06 09:15:52'),
(64, 'Jenifer Kerluke DDS', 'violette73@example.net', '$2y$10$lZiM9iXL8RzmoUHDpemN7uJPYqYXEPJuTSbR7zuANcN4Fv4YsLPmq', 'Ve54enZxst', '2021-03-29 03:45:45', 1, 1, 'Editor', NULL, NULL, '2021-03-29 03:45:48', '2021-04-06 09:15:57'),
(65, 'Amie Hansen', 'vtromp@example.net', '$2y$10$7mjjoR7Aa6BjXSjopfd3XOGPpOE/EZQvGqVeIkP6b.itS7iG1.Lva', '4A8HkWyjlK', '2021-03-29 03:45:45', 0, 0, 'Editor', NULL, NULL, '2021-03-29 03:45:48', '2021-04-06 09:16:46'),
(66, 'Kathlyn Schumm Sr.', 'crawford96@example.net', '$2y$10$BeTo4UmQvHawQmXaOi0./eVxA4M8MGb0Xnr1Et2kxvYjDLX3.yBFy', 'wGFQkiTliD', '2021-03-29 03:45:45', 0, 0, 'Reviewer', NULL, NULL, '2021-03-29 03:45:48', '2021-04-06 09:18:38'),
(67, 'Lesly Wilkinson', 'spencer.antwan@example.net', '$2y$10$SE0XnTlpLsP3UdyRI3J5muMrTVlPxarezygBR2MBqTiYgHAaZ8SUW', 'x78Wa3pv53', '2021-03-29 03:45:45', 0, 0, 'Editor', NULL, NULL, '2021-03-29 03:45:48', '2021-04-06 09:18:54'),
(68, 'Eulah Zboncak', 'myrtle.lindgren@example.net', '$2y$10$Ak6Tbps4pmpcyBkdj6XMXu9edGednhcR.TnCkXQM1OT//uC0KI36O', 'ii1DDfp5Nd', '2021-03-29 03:45:45', 1, 0, 'Reviewer', NULL, NULL, '2021-03-29 03:45:48', '2021-03-29 03:45:48'),
(69, 'Ms. Annie Kris', 'darrion34@example.net', '$2y$10$82.ltOYL1tbDhKBq7/AINe7U41sS1w8LHJ0AEfss0QtLVw1FtNeW6', '3wpt5ZWFBd', '2021-03-29 03:45:46', 1, 0, 'Admin', NULL, NULL, '2021-03-29 03:45:48', '2021-03-29 03:45:48'),
(70, 'Prof. Chandler Trantow II', 'lucienne.mcdermott@example.org', '$2y$10$rwYecwFBoOzpRVpfQPI8jOmonuSMvuyk2tcG0yG.1fRNel6ooK4re', 'rF51RtX1Q7', '2021-03-29 03:45:46', 1, 0, 'Admin', NULL, NULL, '2021-03-29 03:45:48', '2021-03-29 03:45:48'),
(71, 'Prof. Mazie Leannon', 'hilpert.jensen@example.com', '$2y$10$JqRzzS3NJ6zBcVpWQSISku3lDYr/B5YTBNVvlV2H8dYCQZx7v8S0K', 'AuV0S9gD7d', '2021-03-29 03:45:46', 1, 0, 'Editor', NULL, NULL, '2021-03-29 03:45:48', '2021-03-29 03:45:48'),
(72, 'Haley Runolfsson', 'prudence.padberg@example.net', '$2y$10$m9lydeKzR1ns2k.Z4hwl5u5ivRkIZ/EEaqDRXEqXalM/B3KMc4m8y', '7p8JMl2hR0', '2021-03-29 03:45:46', 1, 0, 'Admin', NULL, NULL, '2021-03-29 03:45:48', '2021-03-29 03:45:48'),
(73, 'Mr. Chris Wolff I', 'mateo.pouros@example.org', '$2y$10$NLazZURd2wHcOkrP9uXolum.Imblwmmt0zMWHO9d6bg98jgv3bkZO', 'YeH4ozqXnd', '2021-03-29 03:45:46', 1, 0, 'Reviewer', NULL, NULL, '2021-03-29 03:45:48', '2021-03-29 03:45:48'),
(74, 'Mr. Karl Koss III', 'nyasia.ferry@example.com', '$2y$10$jC0w9Tlh3MshjW7ZkAause9SaKR0gAoXwyARmwXX3mMLjfOEzdBum', 'iApgxyIi7M', '2021-03-29 03:45:46', 1, 0, 'Reviewer', NULL, NULL, '2021-03-29 03:45:48', '2021-03-29 03:45:48'),
(75, 'Ethelyn Stark', 'west.florida@example.net', '$2y$10$/K5SRGh.7SHavPt8ij3Og.Vg01Fw7dMW0L19fwOk17IvJ/mOkkEiS', 'EobOjjW3lO', '2021-03-29 03:45:46', 1, 0, 'Admin', NULL, NULL, '2021-03-29 03:45:48', '2021-03-29 03:45:48'),
(76, 'Mrs. Brianne Dickinson', 'eherman@example.net', '$2y$10$CY5HNwoYubb8ODHsj4/A/.bCu914bANFs6nNIZvDdZTSxx/NIQ2ba', 'gS0KJTYDJN', '2021-03-29 03:45:46', 1, 0, 'Reviewer', NULL, NULL, '2021-03-29 03:45:48', '2021-03-29 03:45:48'),
(77, 'Rodolfo Ondricka', 'feil.kailyn@example.com', '$2y$10$VEauwd2BKQC7CaHV2uunmu5rVzYPkYqVwhifH5awFSHUIGWKZo81C', 'glMfcosqsX', '2021-03-29 03:45:46', 1, 0, 'Admin', NULL, NULL, '2021-03-29 03:45:48', '2021-03-29 03:45:48'),
(78, 'Esta Rolfson', 'wyman.lebsack@example.net', '$2y$10$iuTNT/CH9Nxw/BuZkMu4TOzeCiaQ1vKxSpPpE0NeciXDgYlKgkW0e', 'X3zHWXj9kA', '2021-03-29 03:45:46', 1, 0, 'Editor', NULL, NULL, '2021-03-29 03:45:48', '2021-03-29 03:45:48'),
(79, 'Ryann Blick', 'kohler.benny@example.net', '$2y$10$rjqpr2saM0jHmeAhWzn9A.O6lE3WehimhuRhoY1vkz2cHGn5y5Tw.', 'UxXK7TZu0J', '2021-03-29 03:45:47', 1, 0, 'Reviewer', NULL, NULL, '2021-03-29 03:45:48', '2021-03-29 03:45:48'),
(80, 'Arielle Macejkovic', 'lila.oreilly@example.org', '$2y$10$BI6cPemakgrtz9GVwAQVJ.tsvtnsidrJYUnmBmDQHc/hHDDxMilw.', 'ia2XKOkQsK', '2021-03-29 03:45:47', 1, 0, 'Reviewer', NULL, NULL, '2021-03-29 03:45:48', '2021-03-29 03:45:48'),
(81, 'Berneice Greenholt', 'oritchie@example.net', '$2y$10$ciCRg2tl9itzl8LUNtQdZup2udWHkbr2pWP620TzMlFKgv8SiJhGu', 'CIANW13rEg', '2021-03-29 03:45:47', 1, 0, 'Reviewer', NULL, NULL, '2021-03-29 03:45:48', '2021-03-29 03:45:48'),
(82, 'Mr. Halle Quitzon', 'bayer.gregg@example.net', '$2y$10$C4hOqSRYqMbd8SCKLDnTnu43ZbAPYsp4V9xuaboANac5p7fw5H5/m', 'zAxmbUh0ms', '2021-03-29 03:45:47', 1, 0, 'Reviewer', NULL, NULL, '2021-03-29 03:45:48', '2021-03-29 03:45:48'),
(83, 'Erik Gorczany', 'xbradtke@example.com', '$2y$10$AhZ7SRqo19cxIfqRc6w3Tuzjxnzl3O6Dxbs6nskYRRr/dgnEFO9Vu', 'Y0i6VJStWO', '2021-03-29 03:45:47', 1, 0, 'Reviewer', NULL, NULL, '2021-03-29 03:45:48', '2021-03-29 03:45:48'),
(84, 'Effie Green', 'uschneider@example.com', '$2y$10$TML4yY0a8wlcHp4ilqH66ODdt/rM34C0317A/VfPBDOnYNXS9XA0e', '32KJqdZhhe', '2021-03-29 03:45:47', 1, 0, 'Reviewer', NULL, NULL, '2021-03-29 03:45:48', '2021-03-29 03:45:48'),
(85, 'Dr. Santiago Carter', 'schimmel.maci@example.org', '$2y$10$HLK.M42r3NxD.6zBclyLD.BgPsxs6/ZRWn3B.BO1ofxMqd5hNwbtK', 'Tq7To7a8PA', '2021-03-29 03:45:47', 1, 0, 'Reviewer', NULL, NULL, '2021-03-29 03:45:48', '2021-03-29 03:45:48'),
(86, 'Eliane Fahey DVM', 'franecki.cesar@example.org', '$2y$10$piSoMiTjj5mlmTvkCUqDBezsXke/IChHXkBtlw1P4bZHT5IpOsYK.', 'YuLTPp2Qvt', '2021-03-29 03:45:47', 1, 0, 'Editor', NULL, NULL, '2021-03-29 03:45:48', '2021-03-29 03:45:48'),
(87, 'Dr. Ressie Feest MD', 'vkuhic@example.com', '$2y$10$Cm758q5ASkm4G1//RpAbIOcNSy7849X7edU0NDm/dWkY9AoMD8BrO', 'ckqa2bQO5y', '2021-03-29 03:45:47', 1, 0, 'Reviewer', NULL, NULL, '2021-03-29 03:45:48', '2021-03-29 03:45:48'),
(88, 'Adela Stiedemann', 'deonte.rogahn@example.org', '$2y$10$J935NpPzlZimbOD.WUPBsOWd4jAupHeT2uMdZyN6GsvAtMLFQLWjG', '3dGnxnU226', '2021-03-29 03:45:47', 1, 0, 'Editor', NULL, NULL, '2021-03-29 03:45:48', '2021-03-29 03:45:48'),
(89, 'Aliyah Reilly', 'georgianna.mann@example.net', '$2y$10$.M4REC8sbWyFCHZdLhjB2.Wqi4SfqJhJzT5kxywL7U6oc05pLR7XW', 'T8JxY1RF2v', '2021-03-29 03:45:48', 1, 0, 'Admin', NULL, NULL, '2021-03-29 03:45:48', '2021-03-29 03:45:48'),
(90, 'Yvonne Mann', 'weston39@example.net', '$2y$10$KBc6Cv2CKjYPCyffDF9Lre7rKi6sC7syV87Bw9V1NuLAeX/w0HLNy', 's7txi6hC8L', '2021-03-29 03:45:48', 1, 0, 'Reviewer', NULL, NULL, '2021-03-29 03:45:48', '2021-03-29 03:45:48'),
(91, 'Sydnee Hodkiewicz III', 'dominic19@example.net', '$2y$10$.zHhtPykZONgQ8/WnxzkEu.53P5NA/vUq9y6.G9XUquGmMlnwnb5O', 'rEbWq4s70s', '2021-03-29 03:45:48', 1, 0, 'Reviewer', NULL, NULL, '2021-03-29 03:45:48', '2021-03-29 03:45:48'),
(92, 'Nguyễn Thành Khoa', 'khoa@gmail.com', '$2y$10$3dophbkSszlMQqqvfy9rGOqNwtxq8sZlKEaY7DPT5IyXxl0I/LAlK', 'F9mQpdM4hkoRRJixfWB5veGwrLKm55UTYkCciWS1hiFeIo1kY8TFrwLqr4R0', NULL, 1, 1, 'Admin', NULL, NULL, '2021-04-02 03:37:13', '2021-04-06 08:19:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_id_unique` (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
