-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-02-2018 a las 18:47:52
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
  `video` text COLLATE utf8mb4_unicode_ci,
  `head_2` text COLLATE utf8mb4_unicode_ci,
  `path_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_2` mediumtext COLLATE utf8mb4_unicode_ci,
  `body_2` text COLLATE utf8mb4_unicode_ci,
  `video_2` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`id`, `head`, `description`, `body`, `category`, `created_at`, `updated_at`, `autor`, `approve`, `date`, `path`, `video`, `head_2`, `path_2`, `description_2`, `body_2`, `video_2`) VALUES
(8, 'Pelicula', 'sdd ñdmqwca dlñqwlmc', 'asdñc´pasdcmqw`cmqwc', 'Reseñas', '2017-12-03 10:20:12', '2018-01-12 03:24:09', 'Jorge Vazquez', 'No Aprobado', NULL, '95.png', '', '', '', '', '', ''),
(9, 'qwfeqewfasdfqwweqf', 'qwefqmwñkfmqwfmq', 'https://www.youtube.com/watch?v=d7C6W4kY-KQ&list=RDd7C6W4kY-KQ', 'Arte', '2017-12-03 10:27:32', '2018-01-12 03:23:36', 'Jorge Vazquez', 'No Aprobado', NULL, '544.png', '', '', '', '', '', ''),
(10, 'Angeles azules en campeche', 'Concierto en la plaza de la republica', '<p>El gobernador trae a los angeles azules a un concierto</p><p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">orem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 'Cine', '2017-12-03 10:41:17', '2018-02-06 15:23:51', 'Jorge Vazquez', 'No Aprobado', NULL, '493.png', NULL, NULL, '', NULL, 'hola', NULL),
(12, 'Reseñas y mas reseñas es lo que escribe el autor de....', 'Una reseña más de la famosa escritora de Harry Potter', '<p><img src=\"https://www.adslzone.net/app/uploads/2015/05/apertura-nintendo-moviles-2-715x374.jpg\" style=\"background-color: rgb(255, 255, 255); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 1rem;\" alt=\"Mario Bros\"></p><p><strong><br></strong></p><p><strong>lorem ampdmcdpmvp,peqp,c</strong>e</p><br><br><p><del></del>,vkwmvmwfvwe ep wevmwrmo qrpopovkljsmvpqo . wqom qcmefv oq ocmqo cqjcrfmc .</p><br><br class=\"Apple-interchange-newline\"><br><br><p style=\"text-align: center; \"><del></del>,vkwmvmwfvwe ep wevmwrmo qrpopovkljsmvpqo . wqom qcmefv oq ocmqo cqjcrfmc .</p><br><br><br><p style=\"text-align: right;\"><em>dqdqdfqdfdfasdfassdfasdfasfadsfs</em></p>', 'Música', '2018-01-10 06:37:41', '2018-01-25 19:54:52', 'Jorge Vazquez', 'No Aprobado', NULL, '462.png', 'https://www.youtube.com/watch?v=uge2oVwO5A4', '', '', '', '', ''),
(13, 'Computadoras', 'Las computadoras atacan a las consolas', '<p style=\"text-align: justify;\">El eterno debate en el mundo del videojuego vuelve a la palestra tras la confirmación del salto de algunos títulos propios desde Xbox One a los ordenadores. Diferencias de precio, juegos exclusivos, plataformas online y rendimiento. Analizamos todas las claves para tratar de saber quién gana en la guerra del entretenimiento digital.\r\n\r\nLa nueva generación de consolas ya está lo suficientemente madura como para analizar cómo está la situación en la guerra que mantienen con el PC para tratar de convencer a aquellos usuarios que solo se decantan por una de las dos opciones. Vaya por delante, que existirá siempre parte de subjetividad en este debate ya que buena parte del tirón que puede despertar una plataforma puede estar marcado por el sistema de entretenimiento utilizado por nuestros amigos o la experiencia que hayamos ido acumulando con una misma compañía en el pasado. Pero cuando hablamos de PC versus consolas, también podemos limitarnos a analizar los datos meramente objetivos para tratar de determinar qué valoramos más en cada caso.&nbsp;</p><img src=\"data:image/jpeg;base64,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\" alt=\"Musica\"><br><br><p style=\"text-align: justify;\"><strong><br></strong></p><p style=\"text-align: justify; \"><strong>&nbsp;¿Actualizar el PC o estar siempre a la “última” en consolas?</strong>\r\nComencemos por las ventajas de las consolas.&nbsp;</p><br><p style=\"text-align: justify;\"><em><br></em></p><p style=\"text-align: justify; \"><em>En este sentido tenemos una mayor variedad de dispositivos para escoger, y dejando a un lado las portátiles que quedan en mayor desventaja en cuanto a títulos con el ordenador, tanto PlayStation 4 como Xbox One o incluso Wii U, han sabido ganarse buena parte del apoyo de los consumidores de todo el mundo frente al PC. Uno de los motivos es debido a que estas máquinas son dispositivos enfocados casi por completo a jugar, cuentan con servicios online dedicados, y no requieren actualizaciones de hardware para seguir ofreciendo el mismo (sino mejor) rendimiento que el primer día que las compramos.</em></p>', 'Cine', '2018-01-23 01:43:24', '2018-01-30 03:11:51', 'Jorge Vazquez', 'No Aprobado', NULL, '24ruckus-logo.png', 'https://www.youtube.com/embed/Psak2XHKnT8', '', '', '', '', ''),
(14, 'PCS', 'cnqpocoipcomeqwpom . qcopijq ecpqwpcqpw c', '<p style=\"text-align: justify;\"><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">orem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p><p style=\"text-align: justify; \"><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">orem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><span style=\"color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p><p style=\"text-align: justify; \"><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">orem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><span style=\"color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p>', 'Cine', '2018-02-01 06:28:54', '2018-02-06 15:32:09', 'Jorge Vazquez', 'No Aprobado', NULL, '54Captura de pantalla 2018-01-29 a la(s) 21.35.04.png', 'https://www.youtube.com/embed/Psak2XHKnT8', NULL, '54Captura de pantalla 2018-01-11 a la(s) 01.35.24.png', NULL, 'hola', NULL);

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
(29, '2018_01_22_190746_add_column_articles_video', 6),
(30, '2018_01_30_115844_add_column_articles_head2', 7);

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
(13, 'Jorge', 'a@hotmail.com', '$2y$10$A9eFKX2sYiVPZMDnt7OFR.5Q0WSnFEkjjXFFkxNu8tND5z20SBL1C', 'HuAPCg2iBheDdxvWcDR7TsQs4cprXDm57U9zQ4RePvy7qyBmPDa5nXv8bfp3', '2017-11-28 23:19:16', '2017-11-28 23:19:16', 'Administrador', 'Vazquez', 'asdfasdfa');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
