-- phpMyAdmin SQL Dump
-- version 4.9.7deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 06, 2021 at 11:49 PM
-- Server version: 8.0.25-0ubuntu0.21.04.1
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `intentos` int NOT NULL DEFAULT '0',
  `bloqueado` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `intentos`, `bloqueado`, `created_at`, `updated_at`) VALUES
(1, 'julio', 'a@a.com', '$2y$10$1TPPJRmRoUrEFKcIBcWpGOAVk8kor64soxF0zbIto6MZfnyzD8S5q', 0, 0, '2021-05-31 05:57:26', '2021-07-05 23:57:54'),
(2, 'MariaAngel', 'mariangelmt@gmail.com', '$2y$10$SlcDtKPbhEo9yVOo/sNezePQFiT7i1WRxzhZsKCUOxJ.cai7EFRES', 0, 0, '2021-06-11 03:28:00', '2021-06-11 03:28:00'),
(3, 'Pablo', 'pablo@7scan.cl', '$2y$10$XZptp9lDeBEpJK3U7KrmVOch39Q2phhBx64witcIVTp1mJ8.VhDee', 0, 0, '2021-06-25 02:12:52', '2021-07-06 01:04:35'),
(4, 'juan', 'juan@gmail.com', '$2y$10$tIIA23cLhxYh0BqW1/zSDeBIjgGTy.g3YPz2YwEUbib1xzyWBZYg.', 3, 1, '2021-07-06 02:06:22', '2021-07-06 02:06:51'),
(5, 'arbolito', 'arbol@gmail.com', '$2y$10$6Y4BNlSgAYyGqKhptn4J1uYiiVS9.5xIRtHpWiHmQqnWp0sDMTGlW', 0, 0, '2021-07-06 02:08:59', '2021-07-06 02:08:59');

-- --------------------------------------------------------

--
-- Table structure for table `contratos`
--

CREATE TABLE `contratos` (
  `idcontrato` bigint UNSIGNED NOT NULL,
  `tipocontrato` int NOT NULL,
  `rut` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `idusuario` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruta` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `temporal` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fechahora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contratos`
--

INSERT INTO `contratos` (`idcontrato`, `tipocontrato`, `rut`, `idusuario`, `observacion`, `ruta`, `temporal`, `updated_at`, `created_at`, `fechahora`) VALUES
(1, 1, '1-9', 'usuario', 'Fotos de ragnar', 'storage/17446835728776.pdf', 1, '2021-07-06 00:41:13', '2021-07-06 00:41:13', '2021-07-06 00:41:14'),
(2, 1, '17191095-1', 'usuario', 'Prueba', 'storage/8649456256211.pdf', 1, '2021-07-06 00:41:32', '2021-07-06 00:41:32', '2021-07-06 00:41:32'),
(3, 1, '1-9', 'usuario', 'Fotos de ragnar', 'storage/13353746645110.pdf', 0, '2021-07-06 00:42:39', '2021-07-06 00:42:35', '2021-07-06 00:42:35'),
(4, 1, '17191095-1', 'usuario', 'Prueba', 'storage/3452630346072.pdf', 0, '2021-07-06 00:43:35', '2021-07-06 00:43:00', '2021-07-06 00:43:00'),
(5, 5, '1-9', 'usuario', 'Julio mira', 'storage/12892096996471.pdf', 0, '2021-07-06 00:46:02', '2021-07-06 00:45:42', '2021-07-06 00:45:42'),
(6, 7, '17191095-1', 'usuario', 'Cargas de archivos distintos formatos', 'storage/11907035253475.pdf', 0, '2021-07-06 01:10:33', '2021-07-06 01:10:23', '2021-07-06 01:10:23'),
(7, 7, '17191095-1', 'usuario', 'multiples archivos', 'storage/17825604769332.pdf', 0, '2021-07-06 01:11:53', '2021-07-06 01:11:43', '2021-07-06 01:11:43'),
(8, 1, '22552057-7', 'usuario', 'Foto del contrato', 'storage/11021144141520.pdf', 0, '2021-07-06 02:11:41', '2021-07-06 02:11:24', '2021-07-06 02:11:24'),
(9, 1, '22552057-7', 'usuario', 'Foto del contrato', 'storage/13345663589270.pdf', 1, '2021-07-06 02:13:07', '2021-07-06 02:13:07', '2021-07-06 02:13:07'),
(10, 4, '1-9', 'usuario', 'test', 'storage/13214049500894.pdf', 0, '2021-07-06 04:07:19', '2021-07-06 04:04:47', '2021-07-06 04:04:47'),
(11, 3, '1-9', 'usuario', 'test', 'storage/18859583079322.pdf', 1, '2021-07-06 04:31:01', '2021-07-06 04:31:01', '2021-07-06 04:31:01'),
(12, 1, '1-9', 'usuario', 'Imagen - Esquema', 'storage/3059398580836.pdf', 1, '2021-07-06 22:24:58', '2021-07-06 22:24:58', '2021-07-06 22:24:58'),
(13, 1, '1-9', 'usuario', 'Imagen - Esquema', 'storage/18029648062971.pdf', 0, '2021-07-06 22:31:24', '2021-07-06 22:31:21', '2021-07-06 22:31:21'),
(14, 7, '17229470-7', 'usuario', 'Prueba', 'storage/12437562698841.pdf', 1, '2021-07-06 23:04:51', '2021-07-06 23:04:51', '2021-07-06 23:04:51'),
(15, 1, '1-9', 'usuario', 'TEst', 'storage/15635143352556.pdf', 1, '2021-07-06 23:05:42', '2021-07-06 23:05:42', '2021-07-06 23:05:42'),
(16, 7, '17229470-7', 'usuario', 'Esto es una prueba', 'storage/11309389752312.pdf', 0, '2021-07-06 23:10:46', '2021-07-06 23:10:16', '2021-07-06 23:10:16'),
(17, 2, '1-9', 'usuario', 'Test', 'storage/15508349451000.pdf', 1, '2021-07-06 23:12:31', '2021-07-06 23:12:31', '2021-07-06 23:12:31'),
(18, 3, '1-9', 'usuario', 'Celular', 'storage/2383149037694.pdf', 0, '2021-07-06 23:14:22', '2021-07-06 23:14:20', '2021-07-06 23:14:20');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_05_29_162218_contratos', 1),
(2, '2014_10_12_000000_create_users_table', 2),
(3, '2014_10_12_100000_create_password_resets_table', 2),
(4, '2019_08_19_000000_create_failed_jobs_table', 2),
(5, '2021_05_10_220103_create_admins_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tipocontrato`
--

CREATE TABLE `tipocontrato` (
  `idtipocontrato` int NOT NULL,
  `nombretipocontrato` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tipocontrato`
--

INSERT INTO `tipocontrato` (`idtipocontrato`, `nombretipocontrato`) VALUES
(1, 'Fotos'),
(2, 'Planos'),
(3, 'Dibujos'),
(4, 'Contratos'),
(5, 'Boletas'),
(6, 'Manuales'),
(7, 'Otros');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contratos`
--
ALTER TABLE `contratos`
  ADD PRIMARY KEY (`idcontrato`);

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
-- Indexes for table `tipocontrato`
--
ALTER TABLE `tipocontrato`
  ADD PRIMARY KEY (`idtipocontrato`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contratos`
--
ALTER TABLE `contratos`
  MODIFY `idcontrato` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tipocontrato`
--
ALTER TABLE `tipocontrato`
  MODIFY `idtipocontrato` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
