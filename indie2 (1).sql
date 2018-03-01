-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-03-2018 a las 06:06:33
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `indie2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `head` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `video` text COLLATE utf8mb4_unicode_ci,
  `head_2` text COLLATE utf8mb4_unicode_ci,
  `path_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_2` mediumtext COLLATE utf8mb4_unicode_ci,
  `body_2` text COLLATE utf8mb4_unicode_ci,
  `video_2` text COLLATE utf8mb4_unicode_ci,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approve` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`id`, `head`, `path`, `description`, `body`, `video`, `head_2`, `path_2`, `description_2`, `body_2`, `video_2`, `category`, `autor`, `approve`, `user_id`, `created_at`, `updated_at`) VALUES
(8, 'asdASDA', '12sadqdfava.PNG', 'AFASDFASD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Música', 'Admin 1 admin', 'No Aprobado', 2, '2018-03-01 00:25:12', '2018-03-01 00:54:31'),
(9, 'ASDFASDF', '25dasdasda.PNG', 'SDFASDFAF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cine', 'Admin 1 admin', 'No Aprobado', 2, '2018-03-01 00:25:25', '2018-03-01 00:25:25'),
(10, 'ASGFSHYEJ', '47fwefqwefqw.PNG', 'ERETRHERH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Moviendo el Indie', 'Admin 1 admin', 'No Aprobado', 2, '2018-03-01 00:25:47', '2018-03-01 00:25:47'),
(11, 'SDFG SD', '12dasdasda.PNG', 'SFDGSDFG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Artículos', 'Admin 1 admin', 'No Aprobado', 2, '2018-03-01 00:26:12', '2018-03-01 00:53:03'),
(12, 'SADF ASDF', '34sadqdfava.PNG', 'ASDFASDF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Conciertos', 'Admin 1 admin', 'No Aprobado', 2, '2018-03-01 00:26:34', '2018-03-01 00:26:34'),
(13, 'NFDGHDFGB', '52fwefqwefqw.PNG', 'BFGDBDGF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Random', 'Admin 1 admin', 'No Aprobado', 2, '2018-03-01 00:26:52', '2018-03-01 00:26:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(42, '2014_10_12_100000_create_password_resets_table', 1),
(43, '2018_02_19_193015_create_users_table', 1),
(44, '2018_02_19_193116_create_toptens_table', 1),
(45, '2018_02_19_193145_create_articles_table', 1),
(46, '2018_02_19_194410_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('jvazquez@codevolt.com.mx', '$2y$10$jqPRrzuO6XjWSTTSCSQ2SORhf7LfXFagi56JRpaiSPFdOtQcT4MhC', '2018-02-23 00:46:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('nyuEXsbQIkvEARjhWAbh0G8pqTq3sILwkoAfEN6F', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTzFEVGJTVTVQVDBQS1Rwc0pFOHlMckVEb1RQOVVvSDljZkpvakFJdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tdXNpYyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1519865690);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `toptens`
--

CREATE TABLE `toptens` (
  `id` int(10) UNSIGNED NOT NULL,
  `head` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `toptens`
--

INSERT INTO `toptens` (`id`, `head`, `path`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Jorge Luis', '531.png', NULL, '2018-02-20 23:32:13', '2018-02-20 23:53:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `level`, `last_name`, `user`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jorge', 'jvazquez@codevolt.com.mx', '$2y$10$5NhrFgNzgcepnPD7SmbMjuR/koqfZ4Xhsm1vEfO4klus/ht9ePfGW', 'Administrador', 'Vazquez', 'JorgeAdmin', 'RtYMbwn61tN0TE46tPh8T2P9HsnoihXE8vdXIzXZhhhklCHZoRc0emLwn6L5', '2018-02-20 17:38:05', '2018-02-22 06:35:11'),
(2, 'Admin 1', 'a@hotmail.com', '$2y$10$0SEpCjfGIb92.m4mKDbksuoMo0D/M3YETm/XAwuKtMNsg8DWP1SqS', 'Administrador', 'admin', 'a@hotmail.com', 'JDYP5lfas9QQynFmspzCJWaG86ZDBGybatgIYrNTyiB8axjY24UUmOrj8BeI', '2018-02-20 18:32:37', '2018-02-20 18:32:37'),
(3, 'Carlos', 'c@hotmail.com', '$2y$10$MqEPEAeYbE0U0jIGuIe03.mNNHKuzCy8Ja57GYLup27bVxTGCTPFK', 'Editor', 'Abreu', 'Carlos', 'GKM0LE2mU1IQb46i7t1iOljbcl4abZ5fNGk1QrNsI65TVkCVxVnWNMPyhX2K', '2018-02-21 19:45:47', '2018-02-21 19:45:47');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indices de la tabla `toptens`
--
ALTER TABLE `toptens`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `toptens`
--
ALTER TABLE `toptens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
