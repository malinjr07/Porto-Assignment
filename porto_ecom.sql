-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2020 at 05:43 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `porto_ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `adresses`
--

CREATE TABLE `adresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phn_num` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_code` bigint(20) UNSIGNED DEFAULT NULL,
  `auth_code` bigint(20) UNSIGNED DEFAULT NULL,
  `seller_no` bigint(20) UNSIGNED DEFAULT NULL,
  `client_no` bigint(20) UNSIGNED DEFAULT NULL,
  `full_adress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_key` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `authority_resets`
--

CREATE TABLE `authority_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buyer_resets`
--

CREATE TABLE `buyer_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `image` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_12_21_055715_create_clients_table', 1),
(4, '2020_12_21_055736_create_sales_men_table', 1),
(5, '2020_12_21_074440_authority_resets_table', 1),
(6, '2020_12_21_074558_buyer_resets_table', 1),
(7, '2020_12_21_074629_seller_resets_table', 1),
(8, '2030_12_20_000000_create_users_table', 1),
(9, '2030_12_21_082508_create_offices_table', 1),
(10, '2030_12_22_030318_create_states_table', 1),
(11, '2030_12_22_060038_create_adresses_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `image` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `username`, `first_name`, `middle_name`, `last_name`, `url`, `status`, `image`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'malinjr07', 'Mosaddik', 'Ali', 'Ali Maruf', 'mosaddik_a_maruf', 1, 'public/all/admin/uploads/user/photo_user_01d.jpg', 'malinjr07@gmail.com', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:11', '2020-12-23 02:32:11');

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
-- Table structure for table `sales_men`
--

CREATE TABLE `sales_men` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `image` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales_men`
--

INSERT INTO `sales_men` (`id`, `username`, `first_name`, `middle_name`, `last_name`, `shop_name`, `url`, `status`, `image`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '98christ5olson', 'Christ', 'Aiden', 'Olson', 'Mohr Ltd', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'everette69@example.com', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(2, '32malinda5lehner', 'Malinda', 'Terrill', 'Lehner', 'Sporer-Hamill', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'grogahn@example.org', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(3, '10yessenia8goyette', 'Yessenia', 'Lexi', 'Goyette', 'Gerlach PLC', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'clair.reinger@example.com', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(4, '62kieran2effertz', 'Kieran', 'Jaqueline', 'Effertz', 'Stiedemann-Kassulke', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'luigi30@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(5, '35vada7stamm', 'Vada', 'Katelin', 'Stamm', 'Erdman-Shields', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'veum.paige@example.com', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(6, '79jazmyn2bauch', 'Jazmyn', 'Ava', 'Bauch', 'Veum-Feeney', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'lavada.stracke@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(7, '40edward5beier', 'Edward', 'Lillie', 'Beier', 'Leffler, Labadie and Douglas', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'kennedi99@example.com', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(8, '26maegan3heller', 'Maegan', 'Marta', 'Heller', 'Ebert Inc', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'kschultz@example.org', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(9, '67kelsie2collins', 'Kelsie', 'Bernadette', 'Collins', 'Lesch Ltd', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'rcole@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(10, '16maxine7ullrich', 'Maxine', 'Clementina', 'Ullrich', 'Bailey-Carroll', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'daphney60@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(11, '28zackary2wehner', 'Zackary', 'Gladyce', 'Wehner', 'Rogahn Group', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'jakubowski.maida@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(12, '69genesis8rohan', 'Genesis', 'Camren', 'Rohan', 'Muller, Thiel and Kozey', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'roberts.alexane@example.com', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(13, '51alexandria5windler', 'Alexandria', 'Esteban', 'Windler', 'Nicolas, Fritsch and Jast', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'elton90@example.com', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(14, '44mandy9veum', 'Mandy', 'Lonie', 'Veum', 'Casper Group', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'burley79@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(15, '13jillian2dare', 'Jillian', 'Godfrey', 'Dare', 'Connelly-Lang', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'ahmed77@example.org', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(16, '45guillermo6haag', 'Guillermo', 'Kip', 'Haag', 'Dietrich-Pfeffer', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'eladio84@example.com', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(17, '82sam2schroeder', 'Sam', 'Alana', 'Schroeder', 'Morar Inc', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'dbatz@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(18, '46ashleigh8romaguera', 'Ashleigh', 'Sunny', 'Romaguera', 'Ebert Inc', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'selina.marvin@example.com', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(19, '41gustave2schuppe', 'Gustave', 'Peyton', 'Schuppe', 'Schaden Group', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'stroman.marietta@example.org', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(20, '92cathy2rohan', 'Cathy', 'Makenzie', 'Rohan', 'Lang, Davis and Reichel', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'hyatt.rahsaan@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(21, '84rosemary2kemmer', 'Rosemary', 'Myron', 'Kemmer', 'Will Inc', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'ibrahim.hansen@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(22, '10jazmyne3goldner', 'Jazmyne', 'Madison', 'Goldner', 'Dibbert, Koch and Wiza', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'mosciski.elyse@example.com', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(23, '90madyson1deckow', 'Madyson', 'Zack', 'Deckow', 'Thiel, Cartwright and Tromp', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'ykertzmann@example.com', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(24, '67dawn2nitzsche', 'Dawn', 'Eula', 'Nitzsche', 'Reichel, Deckow and Schroeder', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'lynch.dudley@example.com', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(25, '58kaelyn3stracke', 'Kaelyn', 'Leilani', 'Stracke', 'Mayer, Fritsch and Hermiston', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'oterry@example.com', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(26, '78shemar1mcclure', 'Shemar', 'Lindsay', 'McClure', 'Kautzer, Hammes and Runte', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'owunsch@example.org', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(27, '98alessia8stiedemann', 'Alessia', 'Junior', 'Stiedemann', 'Kozey, Stracke and Watsica', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'zulauf.gwendolyn@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(28, '57anika5durgan', 'Anika', 'Keanu', 'Durgan', 'Johnston Group', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'aaltenwerth@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(29, '93rollin1hammes', 'Rollin', 'Letha', 'Hammes', 'Wolff Group', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'wlittle@example.com', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(30, '60connor3mclaughlin', 'Connor', 'Alvera', 'McLaughlin', 'Mills-Bernier', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'declan59@example.com', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(31, '90josiah3dibbert', 'Josiah', 'Demario', 'Dibbert', 'Morar, Kuhlman and McDermott', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'kelly.pollich@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(32, '47millie4reynolds', 'Millie', 'Roosevelt', 'Reynolds', 'Jacobson-Romaguera', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'melissa21@example.com', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(33, '94eloy1rowe', 'Eloy', 'Brooke', 'Rowe', 'Yundt Inc', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'kschiller@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(34, '46nannie7collins', 'Nannie', 'Amely', 'Collins', 'Leffler-McGlynn', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'beatty.maurine@example.org', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(35, '79aubrey8durgan', 'Aubrey', 'Derek', 'Durgan', 'Kling-Windler', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'conroy.gabe@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(36, '87corine4lehner', 'Corine', 'Osvaldo', 'Lehner', 'Jenkins-Reichert', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'clara.mccullough@example.com', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(37, '53stephany4christiansen', 'Stephany', 'Verna', 'Christiansen', 'Kuhlman, Jerde and Boehm', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'brath@example.org', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(38, '79maximus1jacobson', 'Maximus', 'Maybelle', 'Jacobson', 'Labadie Inc', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'rene.crona@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(39, '18kevin5thompson', 'Kevin', 'Wallace', 'Thompson', 'Rohan-Kilback', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'evandervort@example.com', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(40, '28mandy7vandervort', 'Mandy', 'Haley', 'Vandervort', 'Renner, Goyette and Feeney', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'trevor81@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(41, '41letitia2murazik', 'Letitia', 'Albertha', 'Murazik', 'Walker-Boyer', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'brice37@example.com', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(42, '82clay4emard', 'Clay', 'Veda', 'Emard', 'Donnelly-Schultz', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'koch.aurelie@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(43, '77clovis5williamson', 'Clovis', 'Devante', 'Williamson', 'Renner-Bradtke', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'clifford04@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(44, '16antonetta3grant', 'Antonetta', 'Eda', 'Grant', 'Hartmann, Hettinger and Kihn', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'williamson.ilene@example.org', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(45, '53nestor9swift', 'Nestor', 'Lesly', 'Swift', 'Davis Group', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'npadberg@example.com', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(46, '71sabryna3powlowski', 'Sabryna', 'Quinn', 'Powlowski', 'Feest-Schowalter', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'xzieme@example.org', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(47, '37macey5dickinson', 'Macey', 'Kieran', 'Dickinson', 'Predovic-Kunze', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'jrice@example.org', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(48, '41karson1leffler', 'Karson', 'Rae', 'Leffler', 'Shields-Renner', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'della.schinner@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(49, '51justine8blick', 'Justine', 'Catharine', 'Blick', 'Feest-Crooks', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'rbailey@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(50, '87monte2gislason', 'Monte', 'Johann', 'Gislason', 'Bartell-DuBuque', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'tremaine18@example.org', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(51, '33javier8considine', 'Javier', 'Anastasia', 'Considine', 'Kulas-Rowe', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'rhowe@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(52, '56hortense2schaden', 'Hortense', 'Vance', 'Schaden', 'Harris-Stamm', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'lynch.obie@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(53, '82edd6torp', 'Edd', 'Nettie', 'Torp', 'Hirthe LLC', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'tweissnat@example.org', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(54, '41adele9shields', 'Adele', 'Sienna', 'Shields', 'White Inc', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'frederic15@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(55, '32kaleb5cummerata', 'Kaleb', 'Dashawn', 'Cummerata', 'Raynor, Powlowski and Beahan', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'brayan.kuphal@example.org', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(56, '85kiera5klocko', 'Kiera', 'Alessandra', 'Klocko', 'Hermiston, Mayer and Kling', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'dgoldner@example.com', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(57, '17elda6paucek', 'Elda', 'Adolf', 'Paucek', 'West, VonRueden and Stiedemann', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'schumm.madonna@example.com', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(58, '42gene6mertz', 'Gene', 'Jade', 'Mertz', 'Rodriguez-Weissnat', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'parker.huel@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(59, '76curtis2treutel', 'Curtis', 'Rachael', 'Treutel', 'Gutmann-Robel', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'oda.macejkovic@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(60, '25jany1schinner', 'Jany', 'Dawn', 'Schinner', 'Hills Inc', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'clifford62@example.com', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(61, '64madisen6hagenes', 'Madisen', 'Willy', 'Hagenes', 'Jenkins Group', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'caleigh13@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(62, '29michael3brakus', 'Michael', 'Julius', 'Brakus', 'Aufderhar-Kirlin', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'mathew00@example.org', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(63, '75hazle4ledner', 'Hazle', 'Dawson', 'Ledner', 'Schroeder-Effertz', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'tracy59@example.org', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(64, '34zane8dare', 'Zane', 'Maximus', 'Dare', 'Weber, Christiansen and Kovacek', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'oweissnat@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(65, '91jaleel4schmeler', 'Jaleel', 'Edward', 'Schmeler', 'Lang, Hauck and Koch', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'uwest@example.org', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(66, '95cyril6konopelski', 'Cyril', 'Melyssa', 'Konopelski', 'Ankunding Group', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'vivien.keebler@example.org', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(67, '14nikita6cremin', 'Nikita', 'Layla', 'Cremin', 'McGlynn and Sons', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'jhermann@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(68, '11carmela8kub', 'Carmela', 'Imogene', 'Kub', 'Abernathy-Bailey', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'zbarton@example.org', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(69, '96ida4buckridge', 'Ida', 'Florida', 'Buckridge', 'Breitenberg and Sons', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'sarai.hane@example.org', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(70, '81haley5osinski', 'Haley', 'Roger', 'Osinski', 'Emard, Zulauf and O\'Hara', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'dooley.evan@example.com', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(71, '95abdullah1mitchell', 'Abdullah', 'Zachery', 'Mitchell', 'Ryan, White and Willms', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'ullrich.claudie@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(72, '90callie2berge', 'Callie', 'Kareem', 'Berge', 'Langosh-Hegmann', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'columbus67@example.org', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(73, '21sven7kohler', 'Sven', 'Evert', 'Kohler', 'Hayes, Dach and Price', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'medhurst.martina@example.org', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(74, '88lou7macejkovic', 'Lou', 'Justina', 'Macejkovic', 'Schumm LLC', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'gianni.hackett@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(75, '35irving2marquardt', 'Irving', 'Vada', 'Marquardt', 'Corkery, Adams and Grant', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'goyette.kasandra@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(76, '77fatima6pagac', 'Fatima', 'Brenda', 'Pagac', 'Treutel, Durgan and Schmitt', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'bgottlieb@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(77, '82vivianne6runte', 'Vivianne', 'Keely', 'Runte', 'O\'Hara, Olson and Kulas', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'jaycee34@example.org', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(78, '98marielle4rau', 'Marielle', 'Aurelia', 'Rau', 'Zboncak-Kerluke', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'harvey.daryl@example.org', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(79, '43orland2turner', 'Orland', 'Jarred', 'Turner', 'Nitzsche-Lehner', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'noemi.anderson@example.com', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(80, '72deon2morissette', 'Deon', 'Karlie', 'Morissette', 'Beier LLC', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'kellie11@example.org', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(81, '56cordie6heathcote', 'Cordie', 'Jayden', 'Heathcote', 'Lesch-Stiedemann', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'josie.stark@example.com', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(82, '38mona2douglas', 'Mona', 'Leo', 'Douglas', 'Deckow Group', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'winifred.weimann@example.org', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(83, '93margret8pfannerstill', 'Margret', 'Sedrick', 'Pfannerstill', 'Champlin-McClure', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'abshire.marty@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(84, '58kendall3gutmann', 'Kendall', 'Iva', 'Gutmann', 'Price, Roob and Cronin', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'sylvia.gislason@example.org', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(85, '19randall7stark', 'Randall', 'John', 'Stark', 'Mills, Klocko and Kuhlman', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'nolan.arlie@example.com', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(86, '80adela1medhurst', 'Adela', 'Cade', 'Medhurst', 'Lueilwitz Inc', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'boehm.chesley@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(87, '32edyth6lakin', 'Edyth', 'Kitty', 'Lakin', 'Thompson-Lehner', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'buckridge.jeramy@example.com', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(88, '48crawford5hansen', 'Crawford', 'Wilton', 'Hansen', 'O\'Hara Group', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'yazmin97@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(89, '73gail5upton', 'Gail', 'Sibyl', 'Upton', 'Langworth, O\'Conner and Barrows', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'greg.walter@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(90, '68diamond4pfeffer', 'Diamond', 'Derek', 'Pfeffer', 'Rohan, Lueilwitz and Sporer', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'eli.stark@example.org', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(91, '75sadye5volkman', 'Sadye', 'Nyah', 'Volkman', 'Walker-Nolan', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'dubuque.craig@example.org', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(92, '64johnathon9konopelski', 'Johnathon', 'Nellie', 'Konopelski', 'Dickinson, Goyette and Strosin', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'aconnelly@example.com', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(93, '17monserrate4barton', 'Monserrate', 'Thad', 'Barton', 'Cronin, Weissnat and Weber', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'runolfsdottir.alfreda@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(94, '37marisa5lemke', 'Marisa', 'Kaylah', 'Lemke', 'Beier and Sons', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'langworth.andre@example.org', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12'),
(95, '18diamond7ondricka', 'Diamond', 'Lavada', 'Ondricka', 'Wiza Inc', NULL, 1, 'public/all/admin/uploads/user/video1.png', 'kaylah.johnston@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:12', '2020-12-23 02:32:12');

-- --------------------------------------------------------

--
-- Table structure for table `seller_resets`
--

CREATE TABLE `seller_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state_name` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state_name`, `created_at`, `updated_at`) VALUES
(1, 'Arkansas', '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(2, 'Idaho', '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(3, 'Kentucky', '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(4, 'Texas', '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(5, 'North Carolina', '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(6, 'Arkansas', '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(7, 'Michigan', '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(8, 'Maryland', '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(9, 'Kentucky', '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(10, 'New Mexico', '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(11, 'Nevada', '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(12, 'New Hampshire', '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(13, 'Indiana', '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(14, 'North Dakota', '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(15, 'Ohio', '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(16, 'Oklahoma', '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(17, 'Arkansas', '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(18, 'Vermont', '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(19, 'Ohio', '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(20, 'Utah', '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(21, 'Texas', '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(22, 'Missouri', '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(23, 'Connecticut', '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(24, 'Vermont', '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(25, 'Florida', '2020-12-23 02:32:11', '2020-12-23 02:32:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `users` (`id`, `name`, `last_name`, `image`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Luisa', 'Morissette', 'public/all/admin/uploads/user/video1.png', 'earnestine.gutmann@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(2, 'Trey', 'Mayert', 'public/all/admin/uploads/user/video1.png', 'jeffery.wilderman@example.com', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(3, 'Margarete', 'Hessel', 'public/all/admin/uploads/user/video1.png', 'cole.malinda@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(4, 'Jayme', 'Fadel', 'public/all/admin/uploads/user/video1.png', 'sandy.towne@example.net', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:11', '2020-12-23 02:32:11'),
(5, 'Marcos', 'Grady', 'public/all/admin/uploads/user/video1.png', 'stroman.kathryne@example.org', NULL, '$2y$10$t8Q4NVcN6nk/lY.iS/Zc6Otkd37Z4Zojipcw8wQYhRiRNaZCwbKLa', NULL, '2020-12-23 02:32:11', '2020-12-23 02:32:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adresses`
--
ALTER TABLE `adresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adresses_user_code_foreign` (`user_code`),
  ADD KEY `adresses_auth_code_foreign` (`auth_code`),
  ADD KEY `adresses_seller_no_foreign` (`seller_no`),
  ADD KEY `adresses_client_no_foreign` (`client_no`),
  ADD KEY `adresses_state_key_foreign` (`state_key`);

--
-- Indexes for table `authority_resets`
--
ALTER TABLE `authority_resets`
  ADD KEY `authority_resets_email_index` (`email`);

--
-- Indexes for table `buyer_resets`
--
ALTER TABLE `buyer_resets`
  ADD KEY `buyer_resets_email_index` (`email`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_email_unique` (`email`);

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
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `offices_username_unique` (`username`),
  ADD UNIQUE KEY `offices_email_unique` (`email`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sales_men`
--
ALTER TABLE `sales_men`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sales_men_username_unique` (`username`),
  ADD UNIQUE KEY `sales_men_email_unique` (`email`),
  ADD UNIQUE KEY `sales_men_url_unique` (`url`);

--
-- Indexes for table `seller_resets`
--
ALTER TABLE `seller_resets`
  ADD KEY `seller_resets_email_index` (`email`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
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
-- AUTO_INCREMENT for table `adresses`
--
ALTER TABLE `adresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sales_men`
--
ALTER TABLE `sales_men`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adresses`
--
ALTER TABLE `adresses`
  ADD CONSTRAINT `adresses_auth_code_foreign` FOREIGN KEY (`auth_code`) REFERENCES `offices` (`id`),
  ADD CONSTRAINT `adresses_client_no_foreign` FOREIGN KEY (`client_no`) REFERENCES `clients` (`id`),
  ADD CONSTRAINT `adresses_seller_no_foreign` FOREIGN KEY (`seller_no`) REFERENCES `sales_men` (`id`),
  ADD CONSTRAINT `adresses_state_key_foreign` FOREIGN KEY (`state_key`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `adresses_user_code_foreign` FOREIGN KEY (`user_code`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
