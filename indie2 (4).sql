-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-06-2018 a las 19:57:50
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
-- Estructura de tabla para la tabla `advertisings`
--

CREATE TABLE `advertisings` (
  `id` int(10) UNSIGNED NOT NULL,
  `head` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `advertisings`
--

INSERT INTO `advertisings` (`id`, `head`, `path`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Banner 1', '33.jpg', NULL, '2018-03-20 05:56:44', '2018-03-21 18:03:03'),
(2, 'Banner 2', '383.png', NULL, '2018-03-20 05:57:16', '2018-03-20 06:00:38'),
(3, 'Banner 3', '5329musica1.jpg', NULL, '2018-03-20 05:59:35', '2018-03-20 16:40:53');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `important` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`id`, `head`, `path`, `description`, `body`, `video`, `head_2`, `path_2`, `description_2`, `body_2`, `video_2`, `category`, `autor`, `approve`, `user_id`, `created_at`, `updated_at`, `important`) VALUES
(12, 'CodeVolt', '361.png', 'Empresa de Software', '<br><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 24px; font-family: DauphinPlain; font-size: 24px; color: rgb(0, 0, 0);\">¿Por qué lo usamos?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aquí, contenido aquí\". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de \"Lorem Ipsum\" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).</p><p><br></p>', 'https://www.youtube.com/embed/-YF0jvZQFW8', 'CodeVolt', NULL, 'Video sobre edicion', '<h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">El pasaje estándar Lorem Ipsum, usado desde el año 1500.</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Sección 1.10.32 de \"de Finibus Bonorum et Malorum\", escrito por Cicero en el 45 antes de Cristo</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</p><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Traducción hecha por H. Rackham en 1914</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Sección 1.10.33 de \"de Finibus Bonorum et Malorum\", escrito por Cicero en el 45 antes de Cristo</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</p><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Traducción hecha por H. Rackham en 1914</h3>', 'https://www.youtube.com/embed/-YF0jvZQFW8', 'Música', 'Jorge admin', 'Aprobado', 2, '2018-03-01 00:26:34', '2018-06-13 21:20:30', 'Publicación Común'),
(13, 'Encabezado 1', '523.png', 'TExto', '<br><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 24px; font-family: DauphinPlain; font-size: 24px; color: rgb(0, 0, 0);\">¿Por qué lo usamos?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aquí, contenido aquí\". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de \"Lorem Ipsum\" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).</p><p><br></p>', 'https://www.youtube.com/embed/fSoAorZiY94', 'Encabezado 2', '522.png', 'TExto', '<br><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: DauphinPlain; line-height: 24px; color: rgb(0, 0, 0); font-size: 24px; padding: 0px;\">¿Por qué lo usamos?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aquí, contenido aquí\". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de \"Lorem Ipsum\" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).</p><p><br></p>', 'https://www.youtube.com/embed/fSoAorZiY94', 'Música', 'Jorge admin', 'Aprobado', 2, '2018-03-01 00:26:52', '2018-06-13 21:20:24', 'Publicación Común'),
(14, 'Gossip Girl', '551.png', 'Blair rompe con Chuck', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', NULL, NULL, NULL, NULL, NULL, NULL, 'Música', 'Jorge admin', 'Aprobado', 2, '2018-04-18 23:14:55', '2018-06-13 21:20:13', 'Publicación Común'),
(15, 'Lorem Ipsum', '22meghan-harry-timeline-2018-1526397564.jpg', 'Lorem Ipsum', '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</span></p>', NULL, NULL, NULL, NULL, NULL, NULL, 'Entretenimiento', 'Jorge admin', 'Aprobado', 2, '2018-04-18 23:16:08', '2018-06-13 21:18:08', 'Publicación Común'),
(16, 'Lorem Ipsum', '3khloe-kardashian-baby-bump-1521647997.jpg', 'Lorem Ipsum', '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</span></p>', NULL, NULL, NULL, NULL, NULL, NULL, 'Música', 'Editor Martinez admin', 'Aprobado', 2, '2018-04-18 23:17:04', '2018-06-13 19:05:49', 'Destacado de Categoría'),
(17, 'Lorem Ipsum', '50gettyimages-478340403-1524174186.jpg', 'Lorem Ipsum', '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</span></p>', NULL, NULL, NULL, NULL, NULL, NULL, 'Música', 'Jorge admin', 'Aprobado', 2, '2018-04-18 23:17:29', '2018-06-13 21:20:44', 'Publicación Común'),
(18, 'Indie Sonico', '2555586-ROG-Maximum.jpg', 'Se renueva la pagina de indie sonico', '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</span></p>', 'https://www.youtube.com/embed/u9Mv98Gr5pY', 'Se renueva indie sonico 2', '24khloe-kardashian-baby-bump-1521647997.jpg', 'Se renueva la pagina de indie sonico', '<p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: bolder; margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"color: rgb(0, 0, 0);\">&nbsp;es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</span></p>', 'https://www.youtube.com/embed/u9Mv98Gr5pY', 'Moviendo el Indie', 'Jorge admin', 'Aprobado', 2, '2018-04-21 05:07:48', '2018-05-29 19:31:51', 'Destacado'),
(19, 'Literally Just 30 Hot Hot Heat Pictures of Prince Harry', '32theres-a-science-to-getting-hooked-on-shows-says-n_crmz.jpg', 'Before his wedding on Saturday, make sure you\'re very well acquainted with His Royal Highness.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sesiones IS', 'Jorge admin', 'Aprobado', 2, '2018-05-07 04:32:28', '2018-06-13 21:14:42', 'Publicación Común'),
(20, 'Spencer Pratt Reviews Taylor Swift\'s Reputation Toursdfsdfsa', '17theres-a-science-to-getting-hooked-on-shows-says-n_crmz.jpg', 'Netflix supera los 100000000000k usuarios', '<p><font color=\"#212529\">Sin duda este album sera demasiado controversial y divisorio entre la fanaticada de la banda&nbsp; porque no es algo ¿tipo AM? pero bueno, eso demuestra supongo la versatilidad que pueden llegar a tener de hacer algo como Humbug o wpsiatwin a este disco, que si antes creían que con AM eran mas ‘maduros’, acá ya suenan&nbsp; como los adultos que seguramente ya muchos somos y aun no aceptamos (ellos ya lo hicieron)&nbsp;</font></p><p><font color=\"#212529\"><br></font></p><p><font color=\"#212529\">El álbum puede verse como una obra de arte pura lírica y narrativa ( en particular una canción que parece escrita por FJM \'Ultracheese\' ) o como un revés aburrido y pesado, supongo que&nbsp; yo lo veo como en el punto medio de las dos cosas, es un gran gran álbum pero llega a ser un poco abrumador a la primera escucha, sin embargo el disco esta diseñado de esa manera, para que no solo te lleves una impresion y lo dejes botado a la primera, debes sentarte y escucharlo varias veces para tomarle aprecio y entender el concepto del disco (que por cierto el álbum es conceptual) , por ahora puedo decir que AM es una gran banda y lo que hicieron con este disco puede ser un poco arriesgado, pero es un album que merece ser escuchado y apreciado.</font></p>', NULL, NULL, NULL, NULL, NULL, NULL, 'Música', 'Jorge admin', 'Aprobado', 2, '2018-05-07 04:54:17', '2018-05-29 14:46:50', 'IndieSonico');

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
(46, '2018_02_19_194410_create_sessions_table', 1),
(47, '2018_03_19_105426_create_advertising_table', 2),
(48, '2018_05_13_105555_add_column_articles_important', 3),
(49, '2018_05_15_140251_create_videos_table', 4),
(50, '2018_05_29_114621_add_column_category_to_videos', 5),
(51, '2018_06_04_175146_create_popups_table', 6),
(52, '2018_06_15_002207_create_subscribers_table', 7);

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
-- Estructura de tabla para la tabla `popups`
--

CREATE TABLE `popups` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` text COLLATE utf8mb4_unicode_ci,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('C8L6Mo5WMHPDfUXln81BL1WQEKQtfg4xLM7xw43V', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMXk5clNXeW1zajRJeEJ3R01tVERWMmNvUG16NjVKbmJNZlExNXlVNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1529368842),
('OHsEdrHIUsEaH8dbp548sdlOrHZIr0wmN4MfCijw', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSFNCVGZjWUE2aEtRQlduaUNjbnVXcWtRaXdCajhBajRtWXlyV1lVRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1529345163),
('SGk7jj5SiET8kiCWK3mWe2ri9H1B4RIV3IDR3Atg', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'YTo0OntzOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoia3pHb21oZnVSZ0VpT3pwWnk0bWs3d2pXNHFiSzhrS0Via0k5Vmd2NiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1528930210);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_complete` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `subscribers`
--

INSERT INTO `subscribers` (`id`, `name_complete`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Jorge', 'd@hotmail.com', '2018-06-15 06:39:54', '2018-06-15 06:39:54'),
(2, 'Jorge', 'b@hotmail.com', '2018-06-18 18:06:03', '2018-06-18 18:06:03'),
(3, 'Jorge', 'a13xmh@hotmail.com', '2018-06-18 22:09:27', '2018-06-18 22:09:27'),
(4, 'Jorge', 'b@hotmail.com', '2018-06-18 22:16:22', '2018-06-18 22:16:22'),
(5, 'Jorge', 'a@hotmail.com', '2018-06-18 22:20:08', '2018-06-18 22:20:08'),
(6, 'vrqwfewfq', 'jorgito11@gmail.com', '2018-06-18 22:20:51', '2018-06-18 22:20:51'),
(7, 'vrqwfewfq', 'b@hotmail.com', '2018-06-18 22:24:54', '2018-06-18 22:24:54'),
(8, 'qwfqwef', 'jorgito11@gmail.com', '2018-06-18 22:34:11', '2018-06-18 22:34:11'),
(9, 'vasdv', 'a@hotmail.com', '2018-06-18 22:36:55', '2018-06-18 22:36:55'),
(10, 'vqw', 'a@hotmail.com', '2018-06-18 22:38:41', '2018-06-18 22:38:41'),
(11, 'dvasdv', 'a@hotmail.com', '2018-06-19 00:01:41', '2018-06-19 00:01:41'),
(12, 'wevavfsd', 'jvazquez@codevolt.com.mx', '2018-06-19 00:02:28', '2018-06-19 00:02:28'),
(13, 'bggwerg', 'c@hotmail.com', '2018-06-19 00:05:59', '2018-06-19 00:05:59'),
(14, 'asdcads', 'jvazquez@codevolt.com.mx', '2018-06-19 00:11:03', '2018-06-19 00:11:03'),
(15, 'ewf', 'a@hotmail.com', '2018-06-19 00:11:57', '2018-06-19 00:11:57'),
(16, 'vrqwfewfq', 'a@hotmail.com', '2018-06-19 00:12:40', '2018-06-19 00:12:40'),
(17, 'dfasdf', 'a@hotmail.com', '2018-06-19 00:22:57', '2018-06-19 00:22:57'),
(18, 'Jorge', 'a@hotmail.com', '2018-06-19 00:27:10', '2018-06-19 00:27:10'),
(19, 'saasdv', 'b@hotmail.com', '2018-06-19 00:28:41', '2018-06-19 00:28:41'),
(20, 'cdcasdc', 'jorgito11@gmail.com', '2018-06-19 00:33:45', '2018-06-19 00:33:45'),
(21, 'asdfsadf', 'jvazquez@codevolt.com.mx', '2018-06-19 00:34:59', '2018-06-19 00:34:59'),
(22, 'ewfqwefwq', 'jvazquez@codevolt.com.mx', '2018-06-19 00:36:26', '2018-06-19 00:36:26'),
(23, 'vrqwfewfq', 'b@hotmail.com', '2018-06-19 00:37:25', '2018-06-19 00:37:25'),
(24, 'qwfqwef', 'b@hotmail.com', '2018-06-19 00:39:14', '2018-06-19 00:39:14'),
(25, 'vd', 'a@hotmail.com', '2018-06-19 00:40:19', '2018-06-19 00:40:19'),
(26, 'qwfqwef', 'a@hotmail.com', '2018-06-19 00:40:42', '2018-06-19 00:40:42');

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
(4, 'asus', '55586-ROG-Maximum.jpg', NULL, '2018-03-20 06:30:55', '2018-03-20 06:30:55'),
(5, 'strix', '2044295143.jpg', NULL, '2018-03-20 06:31:20', '2018-03-20 06:31:20');

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
(1, 'Jorge', 'jvazquez@codevolt.com.mx', '$2y$10$9OZ7BuOTZHBABeQz5H3uYOoD1moqgkbYQ2XFRh975w72X4LIwvnje', 'Administrador', 'Vazquez', 'JorgeAdmin', 'm1QGYhRxoDRKIls1pTtnuyeW5XwSYPq7YZTGv7mLvaf1Nxfdp9avJ36dFLkK', '2018-02-20 17:38:05', '2018-03-21 17:53:44'),
(2, 'Editor Martinez', 'a@hotmail.com', '$2y$10$0SEpCjfGIb92.m4mKDbksuoMo0D/M3YETm/XAwuKtMNsg8DWP1SqS', 'Editor', 'admin', 'a@hotmail.com', 'ByDBjlhLpGKi6fx6BJKe6oq0RhTvNa3z5B4Y0Ju2ALHsK8hsnOc0dMqKTBC1', '2018-02-20 18:32:37', '2018-06-13 19:00:48'),
(3, 'Carlos', 'c@hotmail.com', '$2y$10$MqEPEAeYbE0U0jIGuIe03.mNNHKuzCy8Ja57GYLup27bVxTGCTPFK', 'Editor', 'Abreu', 'Carlos', 'GKM0LE2mU1IQb46i7t1iOljbcl4abZ5fNGk1QrNsI65TVkCVxVnWNMPyhX2K', '2018-02-21 19:45:47', '2018-02-21 19:45:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id`, `name`, `path`, `remember_token`, `created_at`, `updated_at`, `category`) VALUES
(2, 'Indie', '3019indie.mp4', NULL, '2018-05-15 22:34:00', '2018-05-29 17:04:30', 'Inicio'),
(3, 'Video de musica', '4727544.mp4', NULL, '2018-05-29 17:00:47', '2018-05-29 17:00:47', 'Música'),
(4, 'Moviendo el Indie', '2759indie.mp4', NULL, '2018-05-29 17:43:27', '2018-05-29 17:43:27', 'Moviendo el Indie'),
(5, 'Sesiones', '359indie.mp4', NULL, '2018-05-29 17:44:03', '2018-05-29 17:44:03', 'Sesiones IS'),
(6, 'Entretenimiento', '759indie.mp4', NULL, '2018-05-29 17:51:07', '2018-05-29 17:51:07', 'Entretenimiento');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `advertisings`
--
ALTER TABLE `advertisings`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `popups`
--
ALTER TABLE `popups`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indices de la tabla `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `advertisings`
--
ALTER TABLE `advertisings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `popups`
--
ALTER TABLE `popups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `toptens`
--
ALTER TABLE `toptens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
