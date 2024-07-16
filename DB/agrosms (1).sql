-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2024 a las 09:47:47
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agrosms`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diseases`
--

CREATE TABLE `diseases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `chemical_treatment` varchar(255) DEFAULT NULL,
  `treatment_quantity` varchar(255) DEFAULT NULL,
  `preventive_measures` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_04_21_161733_create_plants_table', 1),
(7, '2024_04_21_161751_create_diseases_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$12$nbDh13ugCW8TAn2ln5hEPeaOry0duwZogUYPZ8KaNqUW9vFjdbmai', '2024-05-19 17:51:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plants`
--

CREATE TABLE `plants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `disease_name` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `chemical_treatment` varchar(255) DEFAULT NULL,
  `treatment_quantity` varchar(255) DEFAULT NULL,
  `preventive_measures` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `plants`
--

INSERT INTO `plants` (`id`, `name`, `disease_name`, `description`, `chemical_treatment`, `treatment_quantity`, `preventive_measures`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Aguacate', 'Trips', 'Enfermedad que ataca el aguacate durante su floración y principios de engrosamiento del fruto', 'Gruya', '1 ml por litro', 'Fumigar en floracion y despues de esta cada 8 dias', 'Trips.jpg', '2024-05-19 01:22:02', '2024-05-19 01:22:02'),
(2, 'Cafe', 'Roya', 'Mancha amarilla en la hojas', 'amistar Ztra', '20cm por bombada de 20lt', 'Fumigar cada vez que se empiece a ver un mayor desarrollo de esta enfermedad', 'royacafe.jpg', '2024-05-19 01:51:21', '2024-05-19 01:51:21'),
(3, 'Tomate', 'Corynespora cassiicola', 'Es un hongo fitopatógeno que causa manchas foliares en cultivos de importancia económica', 'Aplicar fungicidas de contacto tales como: Hidróxido de cobre 2g/L agua; Oxicloruro de cobre + Mancozeb 2g/L, clorotalonil 2grs. o mL por litro de agua o mancozeb a dosis de 3 gr por litro de agua.', 'o mL por litro de agua o mancozeb a dosis de 3 gr por litro de agua.', 'no ser abusivo en la fumigación', 'Corynespora-12[1]', '2024-05-23 23:02:26', '2024-05-24 04:04:43'),
(4, 'cafelkk', 'Tripslllllll', 'hfsklkkhklllll', 'dsfd', 'sfsgjsdf 3434', 'dsfsfs', 'FireShot Capture 021 - ADMIN-SMS - 127.0.0.1.png', '2024-05-24 01:53:03', '2024-05-24 01:53:03'),
(5, 'sfd', 'sfd', 'sfd', 'sfd', 'dsf', 'sfd', 'FireShot Capture 020 - ADMIN-SMS - 127.0.0.1.png', '2024-05-24 01:54:03', '2024-05-24 01:54:03'),
(6, 'Aguacate', 'Trips', 'asdas', 'addsa', '123', 'adsasd', 'portafolio-nodejs-1.png', '2024-05-24 01:55:12', '2024-05-24 01:55:12'),
(7, 'Aguacate', 'Trips', 'rewrew', 'wer', '123', 'fdsf', 'FireShot Capture 021 - ADMIN-SMS - 127.0.0.1.png', '2024-05-24 01:55:48', '2024-05-24 01:55:48'),
(8, 'aguacate', 'Trips', 'fgvbhjnk', 'vb nm', '234567', 'dfcgvhbjn', 'FireShot Capture 019 - ADMIN-SMS - 127.0.0.1.png', '2024-05-24 01:56:43', '2024-05-24 01:56:43'),
(9, 'aguacate', 'Trips', 'sfdsfsdf', '213', '132', 'vcxxvcv', 'FireShot Capture 019 - ADMIN-SMS - 127.0.0.1.png', '2024-05-24 01:57:21', '2024-05-24 01:57:21'),
(19, 'Cafe', 'Ojo de gallo', 'El ojo de gallo es una enfermedad producida por el hongo Mycenia citricolor, que ataca las ramas, hojas y frutos de la planta de café. ¿Dónde sobrevive el hongo causante del ojo de gallo? Presencia de nubosidad que disminuye la radiación solar y los rayos ultravioleta (UV) durante el día.', 'Gatillo', '20cm por bombada de 20lt', 'No hya', '7453d18b14961b70d663e66a25772f78[1].jpeg', '2024-05-24 02:08:18', '2024-05-29 18:53:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ADMIN', 'admin@gmail.com', NULL, '$2y$12$R/WzV7Q/UK1Uc.vvSJFjwuRgil3H7NU7/NT9TxMpOaArpwy88xv5a', NULL, '2024-05-18 18:40:34', '2024-05-25 08:14:47'),
(2, 'miguel', 'miguelsuafa@gmail.com', NULL, '$2y$12$QPjZTm2D7s5b32CJyIDo4eAVrtxgomqeZ8IWWMsFzhQfWVz7aN5u.', 'ZqbbsbQpaVOddBEnrGoUBxaW0RGd399T3AIfkLdpuUQqRsbkLUjDRkl0qSnd', '2024-05-19 19:52:08', '2024-05-29 18:54:31');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `plants`
--
ALTER TABLE `plants`
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
-- AUTO_INCREMENT de la tabla `diseases`
--
ALTER TABLE `diseases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `plants`
--
ALTER TABLE `plants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
