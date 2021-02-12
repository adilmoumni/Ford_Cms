-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 12 fév. 2021 à 11:42
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fordcmsdb`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'TEst edited', '2021-02-11 12:28:01', '2021-02-11 12:59:49'),
(3, 'test', '2021-02-11 12:52:39', '2021-02-11 12:52:39'),
(5, 'test 12345', '2021-02-11 12:59:03', '2021-02-11 12:59:03'),
(7, 'test static', '2021-02-11 13:07:58', '2021-02-11 13:07:58'),
(8, 'test static', '2021-02-11 13:08:13', '2021-02-11 13:08:13'),
(9, 'test static', '2021-02-11 13:10:33', '2021-02-11 13:10:33'),
(10, 'test static', '2021-02-11 13:10:50', '2021-02-11 13:10:50'),
(11, 'test static', '2021-02-11 13:12:38', '2021-02-11 13:12:38'),
(12, 'tetst 1234', '2021-02-11 13:14:52', '2021-02-11 13:14:52');

-- --------------------------------------------------------

--
-- Structure de la table `category2`
--

CREATE TABLE `category2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Structure de la table `galeryvehicle`
--

CREATE TABLE `galeryvehicle` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `idVehicle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `imagevehicle`
--

CREATE TABLE `imagevehicle` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `idVehicle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE `marque` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`id`, `name`, `logo`, `created_at`, `updated_at`) VALUES
(6, 'tees t12345', 'dfkj', '2021-02-10 19:34:38', '2021-02-11 09:46:39'),
(7, 'TEST', 'dfkj', '2021-02-10 19:35:04', '2021-02-10 19:35:04'),
(8, 'TEST', 'dfkj', '2021-02-10 19:40:55', '2021-02-10 19:40:55'),
(9, 'test', 'dfkj', '2021-02-10 19:45:13', '2021-02-10 19:45:13'),
(10, 'test', 'dfkj', '2021-02-10 19:45:32', '2021-02-10 19:45:32'),
(11, 'test 1234', 'dfkj', '2021-02-11 06:57:10', '2021-02-11 06:57:10'),
(12, 'DABA TEST', 'dfkj', '2021-02-11 09:39:39', '2021-02-11 09:39:39');

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
(4, '2021_02_09_100216_create_category_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `model`
--

CREATE TABLE `model` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `idMarque` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `model`
--

INSERT INTO `model` (`id`, `name`, `idMarque`, `created_at`, `updated_at`) VALUES
(1, 'test', 7, '2021-02-12 08:02:23', '2021-02-12 08:02:23');

-- --------------------------------------------------------

--
-- Structure de la table `optionimage`
--

CREATE TABLE `optionimage` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `idOptionVehicle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `optionvehicle`
--

CREATE TABLE `optionvehicle` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `typeInput` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `idVehicle` int(11) NOT NULL,
  `idParentOption` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `parentoption`
--

CREATE TABLE `parentoption` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `statue` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `parentoption`
--

INSERT INTO `parentoption` (`id`, `title`, `statue`, `created_at`, `updated_at`) VALUES
(3, 'test 2', NULL, '2021-02-11 13:31:41', '2021-02-11 13:31:41'),
(4, 'test 44', NULL, '2021-02-11 13:57:25', '2021-02-11 13:57:25'),
(5, 'test \"5234', NULL, '2021-02-11 13:57:31', '2021-02-11 13:57:31');

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

-- --------------------------------------------------------

--
-- Structure de la table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `idModel` int(11) NOT NULL,
  `idCategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category2`
--
ALTER TABLE `category2`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `galeryvehicle`
--
ALTER TABLE `galeryvehicle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_galeryVehicle_vehicle` (`idVehicle`);

--
-- Index pour la table `imagevehicle`
--
ALTER TABLE `imagevehicle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vehicle_image` (`idVehicle`);

--
-- Index pour la table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_model_marque` (`idMarque`);

--
-- Index pour la table `optionimage`
--
ALTER TABLE `optionimage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_optionImage_optionVehicle` (`idOptionVehicle`);

--
-- Index pour la table `optionvehicle`
--
ALTER TABLE `optionvehicle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_optionVehicle_parentOption` (`idParentOption`),
  ADD KEY `fk_optionVehicle_vehicle` (`idVehicle`);

--
-- Index pour la table `parentoption`
--
ALTER TABLE `parentoption`
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
-- Index pour la table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vehicle_model` (`idModel`),
  ADD KEY `fk_vehicle_category` (`idCategory`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `category2`
--
ALTER TABLE `category2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `galeryvehicle`
--
ALTER TABLE `galeryvehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `imagevehicle`
--
ALTER TABLE `imagevehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `marque`
--
ALTER TABLE `marque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `model`
--
ALTER TABLE `model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `optionimage`
--
ALTER TABLE `optionimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `optionvehicle`
--
ALTER TABLE `optionvehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `parentoption`
--
ALTER TABLE `parentoption`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `galeryvehicle`
--
ALTER TABLE `galeryvehicle`
  ADD CONSTRAINT `fk_galeryVehicle_vehicle` FOREIGN KEY (`idVehicle`) REFERENCES `vehicle` (`id`);

--
-- Contraintes pour la table `imagevehicle`
--
ALTER TABLE `imagevehicle`
  ADD CONSTRAINT `fk_vehicle_image` FOREIGN KEY (`idVehicle`) REFERENCES `vehicle` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `model`
--
ALTER TABLE `model`
  ADD CONSTRAINT `fk_model_marque` FOREIGN KEY (`idMarque`) REFERENCES `marque` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `optionimage`
--
ALTER TABLE `optionimage`
  ADD CONSTRAINT `fk_optionImage_optionVehicle` FOREIGN KEY (`idOptionVehicle`) REFERENCES `optionvehicle` (`id`);

--
-- Contraintes pour la table `optionvehicle`
--
ALTER TABLE `optionvehicle`
  ADD CONSTRAINT `fk_optionVehicle_parentOption` FOREIGN KEY (`idParentOption`) REFERENCES `parentoption` (`id`),
  ADD CONSTRAINT `fk_optionVehicle_vehicle` FOREIGN KEY (`idVehicle`) REFERENCES `vehicle` (`id`);

--
-- Contraintes pour la table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `fk_vehicle_category` FOREIGN KEY (`idCategory`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `fk_vehicle_model` FOREIGN KEY (`idModel`) REFERENCES `model` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
