-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 02-06-2021 a las 12:46:01
-- Versión del servidor: 5.7.32-0ubuntu0.18.04.1
-- Versión de PHP: 7.3.24-3+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `caninis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_12_30_141310_create_tb_habitaciones', 1),
(2, '2020_12_30_140901_create_tb_clientes', 2),
(3, '2020_12_30_141208_create_tb_mascotas', 3),
(4, '2020_12_30_142427_create_tb_dietas', 4),
(5, '2020_12_30_141242_create_tb_reservas', 5),
(6, '2020_12_30_142449_create_tb_citas', 6),
(7, '2020_12_30_142746_create_tb_servicios', 7),
(8, '2020_12_30_142607_create_tb_citas_x_servicios', 8),
(9, '2020_12_03_225940_create_sessions_table', 9),
(10, '2014_10_12_000000_create_users_table', 10),
(11, '2020_12_04_134231_add_google_id_column', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('18ioi7vf40h3ubXVKEQrVQxvOU2OmwDzFf0f6vBi', NULL, '172.17.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOXgzMDVVT0ZNNHo2MFQ0dmcwcm9KRzViYUpXVWVqOVo3OW5uUlNWbyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0NToiaHR0cDovL2RzdzIwMjAtcWZ1YmEucnVuLWV1LWNlbnRyYWwxLmdvb3JtLmlvIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTE6Imh0dHA6Ly9kc3cyMDIwLXFmdWJhLnJ1bi1ldS1jZW50cmFsMS5nb29ybS5pby9sb2dpbiI7fX0=', 1622072394),
('B3hSP0DMWQ0KP4I1v2jNOqWRJ9KkFuSHotksCXfc', NULL, '172.17.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSGhDVnBEU0JQb29WRWczZHBwNHZXN3FaMHhZdHJ1a1cwbzdwVVlkVSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0NToiaHR0cDovL2RzdzIwMjAtcWZ1YmEucnVuLWV1LWNlbnRyYWwxLmdvb3JtLmlvIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTE6Imh0dHA6Ly9kc3cyMDIwLXFmdWJhLnJ1bi1ldS1jZW50cmFsMS5nb29ybS5pby9sb2dpbiI7fX0=', 1622104420),
('PbiLeS61IRAwfftyH9rP9DkaLoezlcbN8pWoWhio', 4, '172.17.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiSnhsd244Vkx1eGJuMktyUzhHRktwa015aW5sZXBTOEtuVTZqcE80WiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjYxOiJodHRwOi8vZHN3MjAyMC1xZnViYS5ydW4tZXUtY2VudHJhbDEuZ29vcm0uaW8vdGJfaGFiaXRhY2lvbmVzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJDkwOUVrUEJwRW42S2laM1JTazNPL2VsV09KMXJNb3hHbk1UV3dCQ2RYQUNleDJXMkFZUGRLIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCQ5MDlFa1BCcEVuNktpWjNSU2szTy9lbFdPSjFyTW94R25NVFd3QkNkWEFDZXgyVzJBWVBkSyI7fQ==', 1622637817);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_citas`
--

CREATE TABLE `tb_citas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha_pide_cita` date NOT NULL,
  `fecha_cita` date NOT NULL,
  `hora_inicio` datetime NOT NULL,
  `hora_fin` datetime NOT NULL,
  `mascota_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_citas_x_servicios`
--

CREATE TABLE `tb_citas_x_servicios` (
  `cita_id` bigint(20) UNSIGNED NOT NULL,
  `servicio_id` bigint(20) UNSIGNED NOT NULL,
  `precio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `descuento` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp` int(11) NOT NULL,
  `localidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provincia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pais` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_clientes`
--

INSERT INTO `tb_clientes` (`id`, `nombre`, `apellidos`, `direccion`, `cp`, `localidad`, `provincia`, `pais`, `telefono`, `email`, `nif`, `created_at`, `updated_at`) VALUES
(1, 'Carissa', 'Hartmann', '190 Lueilwitz Row Apt. 188', 25838, 'Sarinamouth4', 'District of Columbia', 'British Virgin Islands', 780120005, 'merle.dooley@hotmail.com', '75058975G', '2021-01-04 11:34:04', '2021-01-13 11:42:43'),
(2, 'Santos', 'Hudson', '781 Dortha Cove', 23720, 'North Austyn', 'Tennessee', 'San Marino', 656915695, 'amparo50@yahoo.com', '60278767Z', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(3, 'Isaiah', 'Turner', '28751 Mosciski Square Suite 808', 83143, 'New Herbertland', 'Wyoming', 'Isle of Man', 622284011, 'price.blair@yahoo.com', '78060507L', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(4, 'Hallie', 'Medhurst', '28894 Wilderman Cape Apt. 505', 65783, 'Mohrberg', 'Oklahoma', 'United States Minor Outlying Islands', 621309686, 'olson.johan@yahoo.com', '51137446D', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(5, 'Sanford', 'Bergnaum', '3638 Price Green', 14713, 'South Vergie', 'Michigan', 'Dominica', 702121893, 'curt.osinski@yahoo.com', '16407773C', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(6, 'Eva', 'Marquardt', '30128 Audie Walk Suite 731', 86695, 'Douglaschester', 'Virginia', 'Oman', 714246695, 'bhodkiewicz@gmail.com', '14952337H', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(7, 'Mario', 'Parker', '24936 Sylvia Hollow Suite 603', 40923, 'South Fred', 'Washington', 'Luxembourg', 611693075, 'ismith@yahoo.com', '33096272A', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(8, 'Paula', 'Goodwin Badlose', '4865 Ella Harbors Apt. 829', 77651, 'Stantonside', 'Oklahoma', 'Singapore', 615329542, 'ondricka.jermaine@hotmail.com', '79768607P', '2021-01-04 11:34:04', '2021-03-20 14:59:22'),
(9, 'Isabell', 'Funk', '887 Tamara River', 79174, 'North Lon', 'Tennessee', 'Svalbard & Jan Mayen Islands', 680883544, 'marquardt.shana@hotmail.com', '35282549L', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(10, 'Moises', 'Cummerata', '333 Quitzon Turnpike', 18127, 'Baronhaven', 'Connecticut', 'Netherlands Antilles', 651198972, 'davis.lorenz@hotmail.com', '33512554Y', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(11, 'Heber', 'Schamberger', '829 Emory Meadows Apt. 881', 28447, 'Kalifort', 'West Virginia', 'French Guiana', 682396518, 'kreiger.concepcion@gmail.com', '28347818V', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(12, 'Darrion', 'Green', '56648 Kunde Mission Suite 225', 95388, 'Lefflerville', 'California', 'Martinique', 671860986, 'belle15@gmail.com', '56254376M', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(13, 'Raul', 'Goldner', '825 Leo Turnpike', 81071, 'West Giovannaton', 'Indiana', 'Antarctica (the territory South of 60 deg S)', 688278885, 'ally.gleichner@hotmail.com', '05595449D', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(14, 'Jacklyn', 'Schowalter', '3195 Marcella Tunnel Apt. 171', 89090, 'Stehrshire', 'Tennessee', 'Barbados', 633079492, 'nolan.dorthy@yahoo.com', '77644867Q', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(15, 'Angelica', 'Balistreri', '1775 Jenifer Burg', 76287, 'North Dorothy', 'Iowa', 'Congo', 610529084, 'pfeffer.carmine@yahoo.com', '67470236W', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(16, 'Chloe', 'Hegmann', '982 Candace Groves Apt. 713', 71307, 'North Carlofort', 'Alaska', 'India', 696736996, 'ywintheiser@yahoo.com', '10255111H', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(17, 'Lonny', 'Hane', '903 Schuster Stream', 82070, 'Port Williamville', 'North Carolina', 'China', 771932559, 'daugherty.giuseppe@hotmail.com', '61134063Q', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(18, 'Godfrey', 'Klein', '38620 Shanna Pine', 56475, 'New Alexandraview', 'Mississippi', 'Korea', 691009323, 'laisha43@gmail.com', '24182442C', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(19, 'Leda', 'Trantow', '33296 Kovacek Route', 68040, 'West Jewell', 'Maryland', 'Romania', 684639836, 'jany12@hotmail.com', '98406816E', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(20, 'Ashleigh', 'Purdy', '16466 Braun Orchard Apt. 850', 53565, 'Hansenmouth', 'New Mexico', 'Russian Federation', 711497063, 'lesley.mueller@gmail.com', '51193377J', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(21, 'Foster', 'Fahey', '3992 Delores Centers Apt. 663', 84867, 'Port Brycenhaven', 'New York', 'Bermuda', 612291663, 'marisa83@gmail.com', '76475168J', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(22, 'Antwan', 'Pfannerstill', '3285 Toby Estate', 9767, 'New Jessburgh', 'Louisiana', 'Puerto Rico', 723832371, 'delia.morissette@gmail.com', '74029825V', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(23, 'Alfredo', 'Casper', '95151 Feest Spurs Suite 281', 69512, 'Berylmouth', 'Montana', 'Lesotho', 627130108, 'nia.green@gmail.com', '33341876W', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(24, 'Iliana', 'Herzog', '75922 Macey Skyway Suite 107', 45168, 'Kaliton', 'Ohio', 'Mozambique', 642833568, 'rlehner@gmail.com', '43869960X', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(25, 'Kyra', 'Cummings', '8079 Quinten Mission', 91241, 'North Johannafort', 'Colorado', 'Equatorial Guinea', 768026096, 'icartwright@yahoo.com', '81449163D', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(26, 'Raoul', 'Paucek', '73402 Streich Roads Suite 868', 50642, 'Medhursthaven', 'Maine', 'Saint Vincent and the Grenadines', 682261001, 'msporer@gmail.com', '71618901Q', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(27, 'Virginia', 'Kirlin', '597 Daniel Stravenue', 4573, 'West Emmie', 'New York', 'Monaco', 606036902, 'icie62@yahoo.com', '41438971V', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(28, 'Garrison', 'Oberbrunner', '68548 Domenica Coves Suite 805', 2618, 'Rudymouth', 'Wyoming', 'Namibia', 635080772, 'garfield82@yahoo.com', '73272605A', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(29, 'Aiyana', 'Rice', '76869 Zieme Island Suite 896', 30597, 'Lake Mariannestad', 'Utah', 'Botswana', 734162275, 'logan.rolfson@gmail.com', '10369487H', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(30, 'Antonio', 'Keebler', '6371 Monahan Way', 8678, 'Hansenburgh', 'North Dakota', 'Switzerland', 609414233, 'edwardo20@gmail.com', '36970898S', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(31, 'Fred', 'Little', '47059 Kamron Center Apt. 602', 11627, 'New Briahaven', 'North Carolina', 'Falkland Islands (Malvinas)', 713956110, 'bprohaska@yahoo.com', '15172758M', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(32, 'Taryn', 'Hoppe', '94327 Smith Roads Suite 222', 88110, 'South Diamond', 'New Mexico', 'Uzbekistan', 643262365, 'lydia.pacocha@yahoo.com', '38936282D', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(33, 'Deven', 'Nienow', '233 Brekke Squares Suite 982', 99044, 'Klingfort', 'Iowa', 'Martinique', 708352339, 'marco.parisian@gmail.com', '25505235E', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(34, 'Mya', 'Bartell', '4200 Rau Summit Apt. 945', 48585, 'North Ashleyfort', 'Georgia', 'Nicaragua', 742078273, 'vchristiansen@hotmail.com', '99797415X', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(35, 'Denis', 'Hermiston', '6841 Ana Circles', 83980, 'Auerton', 'Florida', 'Colombia', 781591860, 'konopelski.kirsten@hotmail.com', '87917076J', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(36, 'Winona', 'Willms', '7244 Faustino Mountains', 14775, 'Trompchester', 'New Hampshire', 'United States Minor Outlying Islands', 626522752, 'qspencer@gmail.com', '79560410Z', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(37, 'Ava', 'Heathcote', '6364 Parker Drives Suite 915', 15904, 'South Queenieview', 'Tennessee', 'Zimbabwe', 776272242, 'fboehm@yahoo.com', '91770171E', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(38, 'Dana', 'Hodkiewicz', '99464 Torrance Plaza Suite 469', 60573, 'Kshlerinborough', 'Utah', 'Sudan', 754096422, 'anne.douglas@gmail.com', '49674157B', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(39, 'Anika', 'Herzog', '639 Courtney Divide', 28767, 'Marquardthaven', 'Kansas', 'British Indian Ocean Territory (Chagos Archipelago)', 613810413, 'desiree61@gmail.com', '74495724Z', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(40, 'Sandra', 'Altenwerth', '21544 Tressie Landing', 95822, 'Smithtown', 'Nevada', 'Guam', 689663735, 'eula.conroy@hotmail.com', '35883423H', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(41, 'Hermann', 'Mraz', '4040 Terence Manor', 69285, 'Fordview', 'North Dakota', 'Svalbard & Jan Mayen Islands', 782343293, 'veum.milton@hotmail.com', '18539010Z', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(42, 'Alexzander', 'Rosenbaum', '96309 Breanne Drive', 11866, 'Bednarmouth', 'Wyoming', 'France', 730695774, 'maddison97@hotmail.com', '25909466T', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(43, 'Bianka', 'Williamson', '8056 Ullrich Alley', 67366, 'Stefanstad', 'Texas', 'Micronesia', 743897884, 'christophe.schumm@hotmail.com', '40027394J', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(45, 'Victoria', 'Sipes', '60688 Lurline Key Apt. 507', 50884, 'Lake Tiannaburgh', 'Utah', 'Heard Island and McDonald Islands', 797128783, 'efren56@hotmail.com', '12720861H', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(46, 'Rosa', 'Smith', '36355 Jace Hollow Apt. 115', 4731, 'Kathrynefurt', 'Kentucky', 'Bosnia and Herzegovina', 671208723, 'durgan.carolina@gmail.com', '67564052Q', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(47, 'Carol', 'Auer', '781 Sven Squares Suite 733', 15955, 'Erwinstad', 'Hawaii', 'Bhutan', 634196379, 'nick36@gmail.com', '44051700P', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(48, 'Terence', 'Bartoletti', '905 Viva Road', 9395, 'New Elfriedaport', 'Nebraska', 'San Marino', 621926043, 'ahilpert@gmail.com', '40527017N', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(49, 'Reina', 'Schroeder', '7022 Koch Lodge', 82942, 'Cartwrightburgh', 'Michigan', 'Belgium', 717535497, 'edgardo.auer@gmail.com', '69755085T', '2021-01-04 11:34:04', '2021-01-04 11:34:04'),
(50, 'Ray', 'McQueen', '35550', 35550, 'San Bartolome de tirajana', 'Las Palmas', 'Marruecos', 680859071, 'rayo@gmail.com', '12345678P', '2021-03-20 14:32:04', '2021-03-20 16:06:05'),
(52, 'Pepe', 'Lopez', 'Las Bfeñas', 35500, 'Arrecife', 'Las Palmas', 'España', 666626656, 'pepe@gmail.com', '78556985L', '2021-03-20 16:13:59', '2021-03-20 16:13:59'),
(53, 'Rayco', 'Perez Perez', '35550', 35550, 'San Bartolome', 'Las Palmas', 'España', 680859071, 'rayco.ercame@gmail.com', '98563274P', '2021-03-21 13:04:41', '2021-05-26 08:29:15'),
(54, 'Juana', 'Lopez', 'Las Breñas', 35520, 'Arrecife', 'Las Palmas', 'España', 666626656, 'pepe@gmail.com', '78556985L', '2021-03-25 16:44:34', '2021-03-26 08:29:50'),
(55, 'Carlos', 'Rodríguez Giménez', 'Calle Carlota', 45236, 'Las Palmas', 'Las pamas', 'Marruecos', 456987123, 'carlos_marruecos@gmail.com', '12345678T', '2021-03-26 08:30:28', '2021-05-26 08:38:33'),
(56, 'David', 'López López', 'Calle Las Palmeras', 35500, 'Arrecife', 'Las Palmas', 'España', 636598741, 'david@gmail.com', '74565841T', '2021-05-26 08:40:58', '2021-05-26 08:40:58'),
(57, 'Sandra', 'González', 'Calle La Avenida', 35008, 'Yaiza', 'Las Palmas', 'España', 656987412, 'sandra_1@gmail.com', '88556917P', '2021-05-26 10:03:34', '2021-05-26 10:03:34'),
(58, 'Vanesa', 'Suarez Perez', 'Calle Los Lirios', 35572, 'Tias', 'Las Palmas', 'España', 636458963, 'Vane@gmail.com', '79865412T', '2021-05-26 10:10:06', '2021-05-26 10:10:06'),
(59, 'Sara', 'Cedros Gonzales', 'Calle Dr. Giménez', 35530, 'Teguise', 'Las Palmas', 'España', 634895621, 'sara.cg@gmail.com', '74576583L', '2021-05-26 10:18:49', '2021-05-26 10:18:49'),
(60, 'Alejandro', 'Gómez Martín', 'Calle Avenida', 35570, 'Yaiza', 'Las Palmas', 'España', 689548971, 'Ale_gomez@gmail.com', '78687452T', '2021-05-26 10:28:37', '2021-05-26 10:28:37'),
(61, 'Jonay', 'Sánchez López', 'Calle Timanfaya', 35500, 'Arrecife', 'Las Palmas', 'España', 648598741, 'jonay@gmail.com', '89685447P', '2021-05-26 10:39:28', '2021-05-26 10:39:28'),
(62, 'Juan', 'López Pérez', 'Calle La Cañada', 35500, 'Arrecife', 'Las Palmas', 'España', 659874123, 'juan@gmail.com', '78565874P', '2021-05-26 23:25:08', '2021-05-26 23:25:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_dietas`
--

CREATE TABLE `tb_dietas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo_dieta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_dietas`
--

INSERT INTO `tb_dietas` (`id`, `tipo_dieta`, `precio`, `created_at`, `updated_at`) VALUES
(1, 'Libre de gluten', '50', '2021-01-04 12:33:56', '2021-03-26 10:04:57'),
(2, 'Vegetarianas', '140', '2021-01-04 12:33:56', '2021-01-04 12:33:56'),
(3, 'Bajas en grasas', '69', '2021-01-04 12:33:56', '2021-01-04 12:33:56'),
(4, 'Hipocalórica', '55', '2021-01-04 12:33:56', '2021-01-04 12:33:56'),
(5, 'Mediterránea', '85', '2021-01-04 12:33:56', '2021-01-04 12:33:56'),
(6, 'Bajas en calorías', '100', '2021-01-04 12:33:56', '2021-03-21 14:00:44'),
(8, 'VIP', '200', '2021-03-25 12:11:02', '2021-03-26 09:40:59'),
(10, 'Normal', '30', '2021-03-26 10:06:47', '2021-05-26 08:18:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_habitaciones`
--

CREATE TABLE `tb_habitaciones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `habitacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_habitaciones`
--

INSERT INTO `tb_habitaciones` (`id`, `habitacion`, `precio`, `created_at`, `updated_at`) VALUES
(1, '48', '61', '2021-01-04 12:16:24', '2021-01-04 12:16:24'),
(2, '27', '101', '2021-01-04 12:16:24', '2021-01-04 12:16:24'),
(3, '80', '108', '2021-01-04 12:16:24', '2021-01-04 12:16:24'),
(4, '7', '105', '2021-01-04 12:16:24', '2021-01-04 12:16:24'),
(5, '55', '127', '2021-01-04 12:16:24', '2021-01-04 12:16:24'),
(6, '20', '111', '2021-01-04 12:16:24', '2021-01-04 12:16:24'),
(7, '28', '115', '2021-01-04 12:16:24', '2021-01-04 12:16:24'),
(8, '8', '137', '2021-01-04 12:16:24', '2021-01-04 12:16:24'),
(9, '95', '85', '2021-01-04 12:16:24', '2021-01-04 12:16:24'),
(10, '10', '61', '2021-01-04 12:16:24', '2021-01-04 12:16:24'),
(11, '14', '99', '2021-01-04 12:16:24', '2021-01-04 12:16:24'),
(12, '25', '66', '2021-01-04 12:16:24', '2021-01-04 12:16:24'),
(13, '20', '149', '2021-01-04 12:16:24', '2021-01-04 12:16:24'),
(14, '47', '131', '2021-01-04 12:16:24', '2021-01-04 12:16:24'),
(15, '49', '75', '2021-01-04 12:16:24', '2021-01-04 12:16:24'),
(16, '20', '125', '2021-01-04 12:16:24', '2021-01-04 12:16:24'),
(17, '35', '69', '2021-01-04 12:16:24', '2021-01-04 12:16:24'),
(18, '59', '107', '2021-01-04 12:16:24', '2021-01-04 12:16:24'),
(19, '57', '149', '2021-01-04 12:16:24', '2021-01-04 12:16:24'),
(20, '26', '84', '2021-01-04 12:16:24', '2021-01-04 12:16:24'),
(21, '61', '100', '2021-01-04 12:16:24', '2021-01-04 12:16:24'),
(22, '47', '83', '2021-01-04 12:16:24', '2021-01-04 12:16:24'),
(23, '86', '80', '2021-01-04 12:16:24', '2021-01-04 12:16:24'),
(24, '49', '143', '2021-01-04 12:16:25', '2021-01-04 12:16:25'),
(25, '8', '122', '2021-01-04 12:16:25', '2021-01-04 12:16:25'),
(26, '38', '125', '2021-01-04 12:16:25', '2021-01-04 12:16:25'),
(27, '90', '112', '2021-01-04 12:16:25', '2021-01-04 12:16:25'),
(28, '200', '87', '2021-01-04 12:16:25', '2021-03-26 09:17:30'),
(29, '16', '79', '2021-01-04 12:16:25', '2021-01-04 12:16:25'),
(30, '86', '86', '2021-01-04 12:16:25', '2021-01-04 12:16:25'),
(31, '94', '129', '2021-01-04 12:16:25', '2021-01-04 12:16:25'),
(32, '23', '142', '2021-01-04 12:16:25', '2021-01-04 12:16:25'),
(33, '9', '104', '2021-01-04 12:16:25', '2021-01-04 12:16:25'),
(34, '22', '120', '2021-01-04 12:16:25', '2021-01-04 12:16:25'),
(35, '16', '141', '2021-01-04 12:16:25', '2021-01-04 12:16:25'),
(36, '24', '136', '2021-01-04 12:16:25', '2021-01-04 12:16:25'),
(37, '49', '61', '2021-01-04 12:16:25', '2021-01-04 12:16:25'),
(38, '37', '76', '2021-01-04 12:16:25', '2021-01-04 12:16:25'),
(39, '50', '81', '2021-01-04 12:16:25', '2021-01-04 12:16:25'),
(40, '43', '146', '2021-01-04 12:16:25', '2021-01-04 12:16:25'),
(41, '10', '144', '2021-01-04 12:16:25', '2021-01-04 12:16:25'),
(42, '36', '65', '2021-01-04 12:16:25', '2021-01-04 12:16:25'),
(43, '500', '103', '2021-01-04 12:16:25', '2021-03-26 10:11:10'),
(44, '96', '103', '2021-01-04 12:16:25', '2021-01-04 12:16:25'),
(45, '32', '83', '2021-01-04 12:16:25', '2021-01-04 12:16:25'),
(46, '20', '107', '2021-01-04 12:16:25', '2021-01-04 12:16:25'),
(47, '56', '137', '2021-01-04 12:16:25', '2021-01-04 12:16:25'),
(48, '87', '124', '2021-01-04 12:16:25', '2021-01-04 12:16:25'),
(50, '66', '125', '2021-01-04 12:16:25', '2021-03-21 14:10:42'),
(51, 'V.I.P', '200', '2021-03-21 14:09:58', '2021-03-21 14:09:58'),
(52, 'V.I.P 2', '200', '2021-03-26 10:11:31', '2021-03-26 10:11:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_mascotas`
--

CREATE TABLE `tb_mascotas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cliente_id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raza` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `microchip` bigint(15) NOT NULL,
  `esterilizado` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_mascotas`
--

INSERT INTO `tb_mascotas` (`id`, `cliente_id`, `nombre`, `sexo`, `raza`, `color`, `peso`, `fecha_nacimiento`, `microchip`, `esterilizado`, `created_at`, `updated_at`) VALUES
(1, 1, 'Barbara', 'Macho', 'Fox Terrier', 'teal', '95', '1970-01-01', 820567424, '0', '2021-01-04 11:58:24', '2021-01-20 16:28:59'),
(2, 6, 'Raymond', 'Hembra', 'Doberman', 'fuchsia', '39', '1970-01-01', 101071784, '1', '2021-01-04 11:58:24', '2021-01-04 11:58:24'),
(3, 12, 'Daija', 'Hembra', 'Caniche', 'olive', '122', '1970-01-01', 125476992, '0', '2021-01-04 11:58:24', '2021-01-04 11:58:24'),
(4, 21, 'Marcellus', 'Hembra', 'Shar Pei', 'green', '28', '1970-01-01', 866464256, '0', '2021-01-04 11:58:24', '2021-01-04 11:58:24'),
(5, 27, 'Elisha', 'Hembra', 'Dalmata', 'lime', '111', '1970-01-01', 460465792, '0', '2021-01-04 11:58:24', '2021-01-04 11:58:24'),
(6, 1, 'Norval', 'Macho', 'Samoyedo', 'yellow', '100', '1970-01-01', 629605184, '1', '2021-01-04 11:58:24', '2021-01-04 11:58:24'),
(7, 24, 'Marquis', 'Hembra', 'Husky', 'lime', '109', '1970-01-01', 823590016, '0', '2021-01-04 11:58:24', '2021-01-04 11:58:24'),
(8, 9, 'Dora La Exploradora', 'Macho', 'Chucho', 'white', '137', '1970-01-01', 813410304, '0', '2021-01-04 11:58:24', '2021-03-23 11:34:57'),
(9, 31, 'Jaden', 'Hembra', 'Collie', 'maroon', '90', '1970-01-01', 504713856, '0', '2021-01-04 11:58:24', '2021-01-04 11:58:24'),
(10, 45, 'Colin', 'Macho', 'Dalmata', 'teal', '116', '1970-01-01', 708745280, '1', '2021-01-04 11:58:24', '2021-01-04 11:58:24'),
(11, 24, 'Rebeca', 'Macho', 'Rottweiler', 'silver', '39', '1970-01-01', 9530611, '1', '2021-01-04 11:58:24', '2021-01-04 11:58:24'),
(12, 2, 'Katelin', 'Macho', 'Golden Retriever', 'aqua', '62', '1970-01-01', 380264192, '0', '2021-01-04 11:58:24', '2021-01-04 11:58:24'),
(13, 22, 'Ollie', 'Hembra', 'Chow-chow', 'black', '87', '1970-01-01', 179410320, '0', '2021-01-04 11:58:24', '2021-01-04 11:58:24'),
(14, 8, 'Nedra', 'Hembra', 'Chihuahua', 'fuchsia', '46', '1970-01-01', 278644480, '1', '2021-01-04 11:58:24', '2021-01-04 11:58:24'),
(15, 47, 'Arvid', 'Macho', 'Chin Japonés', 'purple', '128', '1970-01-01', 320150752, '1', '2021-01-04 11:58:24', '2021-01-04 11:58:24'),
(16, 36, 'Alison', 'Hembra', 'Galgo', 'gray', '26', '1970-01-01', 809225920, '0', '2021-01-04 11:58:24', '2021-01-04 11:58:24'),
(17, 43, 'Nya', 'Hembra', 'Cocker Spaniel', 'olive', '71', '1970-01-01', 505404640, '1', '2021-01-04 11:58:24', '2021-01-04 11:58:24'),
(18, 49, 'Ada', 'Hembra', 'San Bernardo', 'green', '136', '1970-01-01', 579861632, '1', '2021-01-04 11:58:24', '2021-01-04 11:58:24'),
(19, 32, 'Glenna', 'Macho', 'Terrier inglés', 'maroon', '3', '1970-01-01', 554856064, '1', '2021-01-04 11:58:24', '2021-01-04 11:58:24'),
(20, 40, 'Marcelle', 'Macho', 'Carlino', 'blue', '122', '1970-01-01', 89957480, '0', '2021-01-04 11:58:24', '2021-01-04 11:58:24'),
(21, 41, 'Salma', 'Macho', 'Chow-chow', 'white', '44', '1970-01-01', 608804864, '0', '2021-01-04 11:58:24', '2021-01-04 11:58:24'),
(22, 25, 'Jewell', 'Hembra', 'San Bernardo', 'navy', '86', '1970-01-01', 776438912, '0', '2021-01-04 11:58:24', '2021-01-04 11:58:24'),
(23, 26, 'Lisette', 'Hembra', 'Fox Terrier', 'navy', '55', '1970-01-01', 366379008, '1', '2021-01-04 11:58:24', '2021-01-04 11:58:24'),
(24, 48, 'Shannon', 'Macho', 'Alaskan Malamute', 'yellow', '118', '1970-01-01', 806600576, '0', '2021-01-04 11:58:24', '2021-01-04 11:58:24'),
(25, 14, 'Urban', 'Macho', 'Chihuahua', 'silver', '139', '1970-01-01', 102257392, '1', '2021-01-04 11:58:24', '2021-01-04 11:58:24'),
(26, 36, 'Tracy', 'Hembra', 'Galgo', 'aqua', '28', '1970-01-01', 246942976, '1', '2021-01-04 11:58:24', '2021-01-04 11:58:24'),
(27, 30, 'Milan', 'Hembra', 'Golden Retriever', 'yellow', '137', '1970-01-01', 522746880, '0', '2021-01-04 11:58:24', '2021-01-04 11:58:24'),
(28, 39, 'Tito', 'Hembra', 'Chihuahua', 'teal', '3', '1970-01-01', 894453952, '1', '2021-01-04 11:58:24', '2021-01-04 11:58:24'),
(29, 12, 'Wiley', 'Macho', 'Yorkshire', 'purple', '90', '1970-01-01', 460050368, '1', '2021-01-04 11:58:25', '2021-01-04 11:58:25'),
(30, 32, 'Urban', 'Macho', 'Caniche', 'lime', '125', '1970-01-01', 854033472, '0', '2021-01-04 11:58:25', '2021-01-04 11:58:25'),
(31, 8, 'Evalyn', 'Hembra', 'Chow-chow', 'fuchsia', '63', '1970-01-01', 49519120, '0', '2021-01-04 11:58:25', '2021-01-04 11:58:25'),
(32, 32, 'Marjorie', 'Hembra', 'Samoyedo', 'silver', '134', '1970-01-01', 915632128, '1', '2021-01-04 11:58:25', '2021-01-04 11:58:25'),
(33, 8, 'Justine', 'Hembra', 'Shar Pei', 'white', '89', '1970-01-01', 91812840, '1', '2021-01-04 11:58:25', '2021-01-04 11:58:25'),
(34, 9, 'Novella', 'Hembra', 'Husky', 'navy', '115', '1970-01-01', 956315776, '1', '2021-01-04 11:58:25', '2021-01-04 11:58:25'),
(35, 3, 'Trevion', 'Macho', 'Pastor Alemán', 'lime', '139', '1970-01-01', 669221504, '1', '2021-01-04 11:58:25', '2021-01-04 11:58:25'),
(36, 46, 'Caleb', 'Hembra', 'Chihuahua', 'purple', '62', '1970-01-01', 129059592, '1', '2021-01-04 11:58:25', '2021-01-04 11:58:25'),
(37, 41, 'Kianna', 'Macho', 'Chow-chow', 'aqua', '26', '1970-01-01', 25046336, '1', '2021-01-04 11:58:25', '2021-01-04 11:58:25'),
(38, 18, 'Mina', 'Macho', 'Dalmata', 'yellow', '45', '1970-01-01', 894872640, '1', '2021-01-04 11:58:25', '2021-01-04 11:58:25'),
(39, 37, 'Kailyn', 'Hembra', 'Shar Pei', 'black', '68', '1970-01-01', 342126848, '0', '2021-01-04 11:58:25', '2021-01-04 11:58:25'),
(40, 43, 'Chadd', 'Macho', 'Alaskan Malamute', 'white', '63', '1970-01-01', 509596800, '0', '2021-01-04 11:58:25', '2021-01-04 11:58:25'),
(41, 3, 'Thelma', 'Macho', 'Rottweiler', 'gray', '3', '1970-01-01', 343449344, '0', '2021-01-04 11:58:25', '2021-01-04 11:58:25'),
(42, 8, 'Enola', 'Hembra', 'Collie', 'white', '90', '1970-01-01', 848171200, '0', '2021-01-04 11:58:25', '2021-01-04 11:58:25'),
(43, 31, 'Leonard', 'Hembra', 'Chihuahua', 'silver', '41', '1970-01-01', 615154176, '1', '2021-01-04 11:58:25', '2021-01-04 11:58:25'),
(44, 35, 'Hannah', 'Hembra', 'Chow-chow', 'white', '31', '1970-01-01', 291843200, '0', '2021-01-04 11:58:25', '2021-01-04 11:58:25'),
(46, 30, 'Tyrique', 'Hembra', 'Chow-chow', 'gray', '16', '1970-01-01', 210368032, '1', '2021-01-04 11:58:25', '2021-01-04 11:58:25'),
(47, 21, 'Davonte', 'Hembra', 'Samoyedo', 'navy', '134', '1970-01-01', 458257600, '0', '2021-01-04 11:58:25', '2021-01-04 11:58:25'),
(49, 7, 'Jessika', 'Macho', 'Beagle', 'blue', '1', '1970-01-01', 638987520, '0', '2021-01-04 11:58:25', '2021-01-04 11:58:25'),
(51, 1, 'Roky', 'Macho', 'Cocker spaniel', 'Blanco y marron', '15', '2010-10-01', 123456792, '0', '2021-01-13 21:54:47', '2021-01-13 21:56:38'),
(52, 7, 'afasfas', 'Macho', 'Chiguagua', 'Blanco', '2 Kg', '2021-01-13', 1234567936, '0', '2021-01-28 10:09:02', '2021-01-28 10:09:02'),
(53, 1, 'Bufalito', 'macho', 'Chiguagua', 'Marron', '2 Kg', '2021-03-01', 1234567936, 'no', '2021-03-16 09:17:42', '2021-03-16 09:17:42'),
(54, 1, 'afasfas', 'hembra', 'Chiguagua', 'Blanco', '2 Kg', '2021-03-12', 123456788103168, 'si', '2021-03-16 09:26:15', '2021-03-16 09:26:15'),
(55, 1, 'Bufalito2', 'macho', 'Chiguagua', 'Blanco', '2 Kg', '2021-03-05', 123456789123698, 'si', '2021-03-16 09:29:16', '2021-03-16 09:29:16'),
(56, 50, 'cARLOS', 'macho', 'Chiguagua', 'Blanco', '2 Kg', '2021-03-02', 123456789654785, 'no', '2021-03-23 09:36:46', '2021-03-23 09:36:46'),
(57, 56, 'Cuco', 'macho', 'Galgo', 'Marron', '15', '2019-12-12', 659874521452369, 'no', '2021-05-26 08:46:28', '2021-05-26 08:46:28'),
(58, 57, 'Tyson', 'macho', 'Bulldog Frances', 'Negro y Blanco', '13', '2017-02-15', 987546321456987, 'no', '2021-05-26 10:05:15', '2021-05-26 10:05:15'),
(59, 58, 'Panchita', 'hembra', 'Pomerania', 'Blanco', '2', '2020-08-05', 956324879546321, 'no', '2021-05-26 10:13:15', '2021-05-26 10:13:15'),
(60, 59, 'Dandy', 'macho', 'Pastor Aleman', 'Negro y Marron', '35', '2017-07-26', 951456852369745, 'si', '2021-05-26 10:22:59', '2021-05-26 10:22:59'),
(61, 60, 'Faro', 'macho', 'Rottweiler', 'Negro y Marron', '35', '2019-10-30', 963258745698563, 'no', '2021-05-26 10:32:24', '2021-05-26 10:32:24'),
(62, 61, 'Kiara', 'hembra', 'Bulldog Ingles', 'Blanco', '20', '2018-08-26', 932344624556995, 'no', '2021-05-26 10:41:38', '2021-05-26 10:41:38'),
(63, 61, 'Deisy', 'hembra', 'Bulldog Ingles', 'Marrón', '15', '2019-12-20', 954875632145689, 'no', '2021-05-26 10:52:06', '2021-05-26 10:52:06'),
(64, 62, 'Troy', 'macho', 'Cocker spaniel', 'Blanco y negro', '15', '2018-02-23', 956478231456987, 'no', '2021-05-26 23:26:29', '2021-05-26 23:26:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_reservas`
--

CREATE TABLE `tb_reservas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pide_reserva` date NOT NULL,
  `entrada` date NOT NULL,
  `hora_entrada` time DEFAULT NULL,
  `salida` date NOT NULL,
  `hora_salida` time DEFAULT NULL,
  `mascota_id` bigint(20) UNSIGNED NOT NULL,
  `habitacion_id` bigint(20) UNSIGNED NOT NULL,
  `dieta_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_reservas`
--

INSERT INTO `tb_reservas` (`id`, `pide_reserva`, `entrada`, `hora_entrada`, `salida`, `hora_salida`, `mascota_id`, `habitacion_id`, `dieta_id`, `created_at`, `updated_at`) VALUES
(1, '2020-11-20', '2020-11-23', '13:30:00', '2020-11-27', '12:29:00', 10, 6, 2, '2021-01-04 12:48:58', '2021-05-26 08:09:17'),
(2, '2020-12-17', '2020-12-21', '10:15:00', '2021-01-04', '12:00:00', 42, 39, 5, '2021-01-04 12:48:58', '2021-05-26 08:11:05'),
(4, '2021-01-11', '2021-01-18', '14:45:00', '2021-01-25', '17:00:00', 13, 10, 6, '2021-01-04 12:48:59', '2021-05-26 08:12:46'),
(6, '2021-01-15', '2021-01-20', '15:15:00', '2021-01-29', '13:00:00', 44, 43, 1, '2021-01-04 12:48:59', '2021-05-26 08:14:51'),
(7, '2021-01-25', '2021-01-29', '08:15:00', '2021-02-08', '15:30:00', 40, 28, 6, '2021-01-04 12:48:59', '2021-05-26 08:17:40'),
(9, '2021-02-08', '2021-02-15', '11:05:00', '2021-02-19', '12:00:00', 17, 50, 10, '2021-01-04 12:48:59', '2021-05-26 08:19:43'),
(10, '2021-02-10', '2021-02-12', '09:45:00', '2021-02-19', '14:25:00', 2, 24, 10, '2021-01-04 12:48:59', '2021-05-26 08:24:18'),
(11, '2021-03-19', '2021-03-22', '19:00:00', '2021-04-30', '12:45:00', 38, 34, 10, '2021-01-27 18:14:08', '2021-05-26 08:26:13'),
(12, '2021-03-22', '2021-03-26', '16:00:00', '2021-03-31', '14:30:00', 1, 5, 4, '2021-01-28 10:44:13', '2021-05-26 08:28:29'),
(13, '2021-03-02', '2021-03-04', '15:22:00', '2021-03-09', '16:30:00', 51, 4, 4, '2021-03-16 10:21:13', '2021-03-16 10:21:13'),
(14, '2021-03-08', '2021-03-22', '13:31:00', '2021-03-26', '15:35:00', 53, 8, 5, '2021-03-21 13:32:21', '2021-03-21 13:32:21'),
(15, '2021-03-26', '2021-03-29', '12:00:00', '2021-04-04', '13:15:00', 1, 1, 8, '2021-03-26 09:08:55', '2021-03-26 09:45:22'),
(16, '2021-05-29', '2021-05-31', '12:10:00', '2021-06-04', '12:30:00', 51, 52, 8, '2021-05-26 07:45:44', '2021-05-26 07:45:44'),
(17, '2021-05-24', '2021-05-31', '09:30:00', '2021-06-04', '13:00:00', 63, 45, 10, '2021-05-26 11:00:58', '2021-05-26 11:00:58'),
(18, '2021-05-26', '2021-05-31', '11:15:00', '2021-06-07', '10:30:00', 59, 27, 3, '2021-05-26 11:02:11', '2021-05-26 11:02:11'),
(19, '2021-05-21', '2021-06-07', '11:15:00', '2021-06-14', '14:30:00', 61, 4, 10, '2021-05-26 11:03:54', '2021-05-26 11:03:54'),
(20, '2021-05-24', '2021-05-31', '09:30:00', '2021-06-04', '13:00:00', 62, 13, 6, '2021-05-26 11:04:49', '2021-05-26 11:05:53'),
(21, '2021-05-27', '2021-06-10', '10:30:00', '2021-06-14', '15:29:00', 57, 51, 8, '2021-05-26 23:17:39', '2021-05-26 23:17:39'),
(22, '2021-05-27', '2021-05-31', '09:15:00', '2021-06-11', '14:00:00', 64, 52, 10, '2021-05-26 23:29:59', '2021-05-26 23:29:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_servicios`
--

CREATE TABLE `tb_servicios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `servicio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `google_id`) VALUES
(1, 'RMPconejero', 'rayco.ercame@gmail.com', NULL, 'eyJpdiI6IktSbUhMU1VkMWlDMGFaek5vSXVNeUE9PSIsInZhbHVlIjoiUXd3Q1MrTjEwQ00wZitaT3VsSUtqVUl0eURiTWdUZlVQZFU5WGJJc3Ftdz0iLCJtYWMiOiJiNmI4ODIzYTM0Zjc4YmQ5ZGMwMjQ4YmQwNTFiNDA1NmY2OGRmNTQxZTk1ZmM2Mzk2NGQzMzE5N2Y1M2Q0ZDQ3In0=', NULL, NULL, NULL, '2021-01-17 13:10:11', '2021-01-17 13:10:11', '114682228029285092805'),
(2, 'p informatica', 'p.informatica.p@gmail.com', NULL, 'eyJpdiI6IkFrZEpVZjdlYUlXMERHZmhoZlhOTnc9PSIsInZhbHVlIjoiWnJYSUt2L1VHSjZEaW1PMjdJOWNWZlhwSnpvb003SjZVZVYrcW1hQTgvYz0iLCJtYWMiOiJjZTc4MmQ4Mzk0MWU1OGM0Nzc5OWUyZjU3ZjFmOWI5ZTY0NzkyNzJkMTI2ODcwNzBmZjlkMGFiNzgyMTI3Y2UxIn0=', NULL, NULL, NULL, '2021-01-18 08:57:37', '2021-01-18 08:57:37', '110362656578670725184'),
(3, 'rayco', 'rayco_152@hotmail.com', NULL, '$2y$10$m.a0zwrOnFooqxO8GIpbROhzXR/PzwytXg/E72HiuFhsarNHCYKMi', NULL, NULL, NULL, '2021-01-28 10:30:24', '2021-01-28 10:30:24', NULL),
(4, 'daw2021', 'daw2021@gmail.com', NULL, '$2y$10$909EkPBpEn6KiZ3RSk3O/elWOJ1rMoxGnMTWwBCdXACex2W2AYPdK', '3CJM0AGsM9ovG152lDPeNa9tLVnVHsEMBj7zTQNQ5VusRmILoTXRDxnPwFTL', NULL, NULL, '2021-03-15 09:25:40', '2021-03-15 09:25:40', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `tb_citas`
--
ALTER TABLE `tb_citas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_citas_mascota_id_foreign` (`mascota_id`);

--
-- Indices de la tabla `tb_citas_x_servicios`
--
ALTER TABLE `tb_citas_x_servicios`
  ADD KEY `tb_citas_x_servicios_cita_id_foreign` (`cita_id`),
  ADD KEY `servicio_id` (`servicio_id`);

--
-- Indices de la tabla `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_dietas`
--
ALTER TABLE `tb_dietas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_habitaciones`
--
ALTER TABLE `tb_habitaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_mascotas`
--
ALTER TABLE `tb_mascotas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente_id` (`cliente_id`);

--
-- Indices de la tabla `tb_reservas`
--
ALTER TABLE `tb_reservas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_reservas_mascota_id_foreign` (`mascota_id`),
  ADD KEY `tb_reservas_habitacion_id_foreign` (`habitacion_id`),
  ADD KEY `tb_reservas_dieta_id_foreign` (`dieta_id`);

--
-- Indices de la tabla `tb_servicios`
--
ALTER TABLE `tb_servicios`
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
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `tb_citas`
--
ALTER TABLE `tb_citas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tb_clientes`
--
ALTER TABLE `tb_clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT de la tabla `tb_dietas`
--
ALTER TABLE `tb_dietas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `tb_habitaciones`
--
ALTER TABLE `tb_habitaciones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT de la tabla `tb_mascotas`
--
ALTER TABLE `tb_mascotas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT de la tabla `tb_reservas`
--
ALTER TABLE `tb_reservas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `tb_servicios`
--
ALTER TABLE `tb_servicios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_citas`
--
ALTER TABLE `tb_citas`
  ADD CONSTRAINT `tb_citas_mascota_id_foreign` FOREIGN KEY (`mascota_id`) REFERENCES `tb_mascotas` (`id`);

--
-- Filtros para la tabla `tb_citas_x_servicios`
--
ALTER TABLE `tb_citas_x_servicios`
  ADD CONSTRAINT `tb_citas_x_servicios_cita_id_foreign` FOREIGN KEY (`cita_id`) REFERENCES `tb_citas` (`id`),
  ADD CONSTRAINT `tb_citas_x_servicios_ibfk_1` FOREIGN KEY (`servicio_id`) REFERENCES `tb_servicios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_mascotas`
--
ALTER TABLE `tb_mascotas`
  ADD CONSTRAINT `tb_mascotas_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `tb_clientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_reservas`
--
ALTER TABLE `tb_reservas`
  ADD CONSTRAINT `tb_reservas_dieta_id_foreign` FOREIGN KEY (`dieta_id`) REFERENCES `tb_dietas` (`id`),
  ADD CONSTRAINT `tb_reservas_habitacion_id_foreign` FOREIGN KEY (`habitacion_id`) REFERENCES `tb_habitaciones` (`id`),
  ADD CONSTRAINT `tb_reservas_mascota_id_foreign` FOREIGN KEY (`mascota_id`) REFERENCES `tb_mascotas` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
