-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 11 juin 2022 à 01:34
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `eclara2`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_price` decimal(8,2) NOT NULL,
  `min_price` decimal(8,2) NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `image1`, `image2`, `image3`, `max_price`, `min_price`, `description`, `created_at`, `updated_at`) VALUES
(1, 'mariage', 'mariage', 'https://cdn.futura-sciences.com/buildsv6/images/wide1920/7/6/8/7687f6fcf3_50154558_mariage-contrat.jpg', 'https://i.la-croix.com/729x486/smart/croire/2003/08/07/1700868968/Mariage-lechange-alliances_0.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO5bTH-sYOz5IhZPE4_Lh88P6-JYVMS-2Q6YJS4WzfdeP_WWYyMJjfYb3YxHe9WSTrd7s&usqp=CAU', '2956.00', '1226.00', 'Ad voluptatem et iure quisquam nesciunt. Voluptate debitis exercitationem est. Sed et aut et. Nihil voluptate est quidem inventore omnis. Maiores quidem voluptatem minus voluptatem cum.', '2022-06-10 18:09:21', '2022-06-10 18:09:21'),
(2, 'anniverser', 'anniverser', 'https://img.freepik.com/vecteurs-libre/fond-conception-joyeux-anniversaire_52683-70358.jpg?w=2000', 'https://img.freepik.com/vecteurs-libre/fond-joyeux-anniversaire-ballons-realistes_1361-1970.jpg?w=2000', 'https://static.vecteezy.com/ti/vecteur-libre/p1/5724142-joyeux-anniversaire-conception-de-fond-avec-des-ballons-realistes-vectoriel.jpg', '2467.00', '990.00', 'Laborum commodi repellat modi delectus ab quo est et. Et rerum sint occaecati molestiae exercitationem dolorum quos. Consequuntur odio laborum cupiditate alias qui.', '2022-06-10 18:09:21', '2022-06-10 18:09:21'),
(3, 'pause cafe', 'pause-cafe', 'https://www.traiteurtanger.com/wp-content/uploads/2015/08/event-pro-tanger-traiteur-1.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHPVGSopl3XKkb1kzCL6AG3z-o7N1HP8pBrbsmreeJZdpy8VQcDuBrCGB8ior0e31vjDE&usqp=CAU', 'https://www.traiteurtanger.com/wp-content/uploads/2015/08/event-pro-traiteur-tanger-2-750x499.jpg', '2093.00', '1392.00', 'Hic corrupti qui et dicta. Accusantium modi ex quia asperiores omnis. Velit porro assumenda eos omnis pariatur. Tempora aut non incidunt.', '2022-06-10 18:10:31', '2022-06-10 18:10:31');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `materails`
--

CREATE TABLE `materails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom_materail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `inStock` decimal(8,2) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `materails`
--

INSERT INTO `materails` (`id`, `nom_materail`, `slug`, `description`, `price`, `inStock`, `image`, `categorie_id`, `created_at`, `updated_at`) VALUES
(1, 'table noir de dix persone', 'voluptatem-repellendus-voluptatum-numquam-deserunt-nostrum', 'Earum reiciendis eum nulla sequi qui. Deserunt porro aut et earum non tenetur. Commodi aut est non ea ratione. Dicta qui consequuntur molestiae numquam et. Deleniti qui maxime reprehenderit magnam velit aut magni.', '280.00', '9.00', 'https://lorempixel.com/640/480/?44480', 1, '2022-06-10 18:10:56', '2022-06-10 18:10:56'),
(2, 'Ut eligendi illo voluptatibus animi laborum animi laboriosam occaecati.', 'ut-eligendi-illo-voluptatibus-animi-laborum-animi-laboriosam-occaecati', 'Magnam enim aperiam autem quibusdam. Autem dignissimos nulla officia sapiente aliquam modi rem. Corporis itaque quia unde velit consectetur. Sit blanditiis blanditiis similique aut non quis asperiores.', '523.00', '2.00', 'https://lorempixel.com/640/480/?90780', 1, '2022-06-10 18:10:56', '2022-06-10 18:10:56'),
(3, 'Quod exercitationem atque quos quo.', 'quod-exercitationem-atque-quos-quo', 'Voluptatem perspiciatis sit quidem quis aut enim explicabo. Odio neque omnis in.', '463.00', '5.00', 'https://lorempixel.com/640/480/?16201', 2, '2022-06-10 18:10:56', '2022-06-10 18:10:56'),
(4, 'In velit neque accusamus.', 'in-velit-neque-accusamus', 'Id voluptas qui enim culpa accusamus. Voluptatem asperiores omnis est qui. Quos magni quis et et quia porro deserunt voluptatum.', '773.00', '4.00', 'https://lorempixel.com/640/480/?20771', 2, '2022-06-10 18:10:56', '2022-06-10 18:10:56'),
(5, 'Accusantium tempora placeat est voluptates esse sit quidem.', 'accusantium-tempora-placeat-est-voluptates-esse-sit-quidem', 'A laboriosam eius eos eos enim modi recusandae. Molestias hic sit tenetur. Temporibus totam repudiandae deserunt qui sed eius laboriosam.', '445.00', '2.00', 'https://lorempixel.com/640/480/?58032', 3, '2022-06-10 18:10:56', '2022-06-10 18:10:56'),
(6, 'Excepturi eos voluptates dolorem porro inventore sint sit.', 'excepturi-eos-voluptates-dolorem-porro-inventore-sint-sit', 'Sapiente dolorem est officiis. Quaerat aut et quia itaque quis non temporibus. Omnis porro dolor voluptatem. Nemo animi dicta voluptatem fuga possimus sit voluptate.', '204.00', '1.00', 'https://lorempixel.com/640/480/?81200', 3, '2022-06-10 18:10:56', '2022-06-10 18:10:56'),
(7, 'Consequuntur ut accusantium fugit voluptatibus.', 'consequuntur-ut-accusantium-fugit-voluptatibus', 'Optio vel voluptatem aut aut sunt esse. Eum velit commodi vel aperiam. Asperiores ut et ex maiores velit ut sint.', '141.00', '6.00', 'https://lorempixel.com/640/480/?17558', 1, '2022-06-10 18:10:57', '2022-06-10 18:10:57');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_06_10_184547_create_categories_table', 1),
(5, '2022_06_10_185301_create_materails_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `materails`
--
ALTER TABLE `materails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `materails_slug_unique` (`slug`),
  ADD KEY `materails_categorie_id_foreign` (`categorie_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `materails`
--
ALTER TABLE `materails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `materails`
--
ALTER TABLE `materails`
  ADD CONSTRAINT `materails_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
