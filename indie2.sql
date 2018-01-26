-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 26-01-2018 a las 07:23:14
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `autor` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approve` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`id`, `head`, `description`, `body`, `category`, `created_at`, `updated_at`, `autor`, `approve`, `date`, `path`, `video`) VALUES
(8, 'Pelicula', 'sdd ñdmqwca dlñqwlmc', 'asdñc´pasdcmqw`cmqwc', 'Reseñas', '2017-12-03 10:20:12', '2018-01-12 03:24:09', 'Jorge Vazquez', 'No Aprobado', NULL, '95.png', ''),
(9, 'qwfeqewfasdfqwweqf', 'qwefqmwñkfmqwfmq', 'https://www.youtube.com/watch?v=d7C6W4kY-KQ&list=RDd7C6W4kY-KQ', 'Arte', '2017-12-03 10:27:32', '2018-01-12 03:23:36', 'Jorge Vazquez', 'No Aprobado', NULL, '544.png', ''),
(10, 'Angeles azules en campeche', 'Concierto en la plaza de la republica', 'El gobernador trae a los angeles azules a un concierto', 'Cine', '2017-12-03 10:41:17', '2018-01-12 03:21:49', 'Jorge Vazquez', 'No Aprobado', NULL, '493.png', ''),
(12, 'Reseñas y mas reseñas es lo que escribe el autor de....', 'Una reseña más de la famosa escritora de Harry Potter', '<p><img src=\"https://www.adslzone.net/app/uploads/2015/05/apertura-nintendo-moviles-2-715x374.jpg\" style=\"background-color: rgb(255, 255, 255); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 1rem;\" alt=\"Mario Bros\"></p><p><strong><br></strong></p><p><strong>lorem ampdmcdpmvp,peqp,c</strong>e</p><br><br><p><del></del>,vkwmvmwfvwe ep wevmwrmo qrpopovkljsmvpqo . wqom qcmefv oq ocmqo cqjcrfmc .</p><br><br class=\"Apple-interchange-newline\"><br><br><p style=\"text-align: center; \"><del></del>,vkwmvmwfvwe ep wevmwrmo qrpopovkljsmvpqo . wqom qcmefv oq ocmqo cqjcrfmc .</p><br><br><br><p style=\"text-align: right;\"><em>dqdqdfqdfdfasdfassdfasdfasfadsfs</em></p>', 'Música', '2018-01-10 06:37:41', '2018-01-25 19:54:52', 'Jorge Vazquez', 'No Aprobado', NULL, '462.png', 'https://www.youtube.com/watch?v=uge2oVwO5A4'),
(13, 'Computadoras', 'Las computadoras atacan a las consolas', 'El eterno debate en el mundo del videojuego vuelve a la palestra tras la confirmación del salto de algunos títulos propios desde Xbox One a los ordenadores. Diferencias de precio, juegos exclusivos, plataformas online y rendimiento. Analizamos todas las claves para tratar de saber quién gana en la guerra del entretenimiento digital.\r\n\r\nLa nueva generación de consolas ya está lo suficientemente madura como para analizar cómo está la situación en la guerra que mantienen con el PC para tratar de convencer a aquellos usuarios que solo se decantan por una de las dos opciones. Vaya por delante, que existirá siempre parte de subjetividad en este debate ya que buena parte del tirón que puede despertar una plataforma puede estar marcado por el sistema de entretenimiento utilizado por nuestros amigos o la experiencia que hayamos ido acumulando con una misma compañía en el pasado. Pero cuando hablamos de PC versus consolas, también podemos limitarnos a analizar los datos meramente objetivos para tratar de determinar qué valoramos más en cada caso.\r\n\r\n¿Actualizar el PC o estar siempre a la “última” en consolas?\r\nComencemos por las ventajas de las consolas. En este sentido tenemos una mayor variedad de dispositivos para escoger, y dejando a un lado las portátiles que quedan en mayor desventaja en cuanto a títulos con el ordenador, tanto PlayStation 4 como Xbox One o incluso Wii U, han sabido ganarse buena parte del apoyo de los consumidores de todo el mundo frente al PC. Uno de los motivos es debido a que estas máquinas son dispositivos enfocados casi por completo a jugar, cuentan con servicios online dedicados, y no requieren actualizaciones de hardware para seguir ofreciendo el mismo (sino mejor) rendimiento que el primer día que las compramos.', 'Cine', '2018-01-23 01:43:24', '2018-01-24 17:04:16', 'Jorge Vazquez', 'No Aprobado', NULL, '24ruckus-logo.png', 'https://www.youtube.com/embed/Psak2XHKnT8');

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
(22, '2014_10_12_000000_create_users_table', 1),
(23, '2014_10_12_100000_create_password_resets_table', 1),
(24, '2017_11_16_065454_create_articles_table', 1),
(25, '2017_11_22_010857_add_column_users_level', 2),
(26, '2017_11_29_190945_add_column_articles_autor', 3),
(27, '2017_11_30_190843_add_column_articles_approve_date', 4),
(28, '2017_12_03_040803_add_column_articles_path', 5),
(29, '2018_01_22_190746_add_column_articles_video', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `level`, `last_name`, `user`) VALUES
(11, 'alejandro', 'alex@gmail.com', '$2y$10$//j5h1J0iOAy/eK7HrUWXuPifGxYWZcLLP/96ESzDIJYaBI1nL9mG', 'b76KNh9cv0HgYrlgtToczrqP41hGiJ3AcZ8YWRxPUWmRWmaHVv1PMPoqkvMb', '2017-11-28 23:15:26', '2017-11-28 23:15:26', 'Editor', 'martinez', 'alex'),
(12, 'Jorge Luis', 'jorgito11@gmail.com', '12345678', '0MU5NJmBp4QLAMUwChV1QaHdTZA4Ubxot72v24pdgYF5emXiaM8VVd0hlHX0', '2017-11-28 23:17:16', '2017-11-29 01:37:20', 'Administrador', 'vazquez', 'jorgelvm12'),
(13, 'Jorge', 'a@hotmail.com', '$2y$10$A9eFKX2sYiVPZMDnt7OFR.5Q0WSnFEkjjXFFkxNu8tND5z20SBL1C', 'Dnqqljvg3axGCbyvQwIH4SwbubqRFH8orPpjl3wV4IPTgdnqHkx2D3GutC4w', '2017-11-28 23:19:16', '2017-11-28 23:19:16', 'Administrador', 'Vazquez', 'asdfasdfa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
