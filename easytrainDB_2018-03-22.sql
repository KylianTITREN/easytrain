-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 19 Avril 2018 à 10:18
-- Version du serveur :  5.6.34
-- Version de PHP :  7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `easytrainDB`
--

-- --------------------------------------------------------

--
-- Structure de la table `contient`
--

CREATE TABLE `contient` (
  `program_id` int(11) NOT NULL,
  `exercice_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `exercices`
--

CREATE TABLE `exercices` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` text NOT NULL,
  `video` varchar(255) NOT NULL,
  `idMuscles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `exercices`
--

INSERT INTO `exercices` (`id`, `nom`, `description`, `image`, `video`, `idMuscles`) VALUES
  (1, 'Développé couché barre ', 'Le développé couché (bench press en anglais) est l’exercice de référence pour la musculation des pectoraux. Cet exercice poly-articulaire permet de se muscler l’ensemble des muscles de la poitrine et plus particulièrement le muscle grand pectoral. Le développé couché qui fait partie des trois mouvement de force athlétique est très efficace pour prendre de la masse musculaire car il permet de travailler avec des charges lourdes.', 'bench-press.jpg', '', 3),
  (2, 'Développé couché haltères', '', '', '', 3),
  (3, 'Pompes au sol', 'Il sollicite principalement le grand pectoral, le deltoïde antérieur et les triceps. D\'autres muscles participent pour maintenir l\'équilibre notamment les abdominaux.', 'pompes.gif', '', 3),
  (4, 'Écarté couché haltères', '', '', '', 3),
  (5, 'Dips', '', '', '', 3),
  (6, 'Butterfly', '', '', '', 3),
  (7, 'Développé incliné barres/haltères', '', '', '', 3),
  (8, 'Développé épaules', '', '', '', 4),
  (9, 'Élévations latérales', '', '', '', 4),
  (10, 'Élévations frontales', '', '', '', 4),
  (11, 'Élévations buste penché', '', '', '', 4),
  (12, 'Tirage menton', '', '', '', 4),
  (13, 'Oiseau à la poulie', '', '', '', 4),
  (14, 'Tractions', '', '', '', 5),
  (15, 'Tirage nuque', '', '', '', 5),
  (16, 'Tirage poitrine', '', '', '', 5),
  (17, 'Soulevé de Terre', '', '', '', 5),
  (18, 'Rowing barre', '', '', '', 5),
  (19, 'Tirage assis', '', '', '', 5),
  (20, 'Extensions au banc', '', '', '', 6),
  (21, 'Développé nuque', '', '', '', 7),
  (22, 'Élévations latérales bras tendus', '', '', '', 7),
  (23, 'Tirage barre en pronation jambes fléchies', '', '', '', 7),
  (24, 'Tirage vertical', '', '', '', 7),
  (25, 'Haussements d’épaule', '', '', '', 7),
  (26, 'Curl barre', '', '', '', 8),
  (27, 'Curl Haltères', '', '', '', 8),
  (28, 'Curl pupitre', '', '', '', 8),
  (29, 'Curl prise marteau', '', '', '', 8),
  (30, 'Barre front', '', '', '', 9),
  (31, 'Extension au dessus de la tête', '', '', '', 9),
  (32, 'Kick Back', '', '', '', 9),
  (33, 'Extensions à la poulie', '', '', '', 9),
  (34, 'Flexion des poignets', '', '', '', 10),
  (35, 'Crunch', '', '', '', 11),
  (36, 'Décollé bassin', '', '', '', 11),
  (37, 'Crunch oblique', '', '', '', 11),
  (38, 'Relevé de jambe', '', '', '', 11);

-- --------------------------------------------------------

--
-- Structure de la table `love_likes`
--

CREATE TABLE `love_likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `likeable_id` int(10) UNSIGNED NOT NULL,
  `likeable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `type_id` enum('LIKE','DISLIKE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'LIKE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `love_likes`
--

INSERT INTO `love_likes` (`id`, `likeable_id`, `likeable_type`, `user_id`, `type_id`, `created_at`, `updated_at`) VALUES
  (40, 2, 'App\\Program', 1, 'LIKE', '2018-04-18 23:25:26', '2018-04-18 23:25:26'),
  (44, 37, 'App\\Publication', 1, 'LIKE', '2018-04-19 06:17:46', '2018-04-19 06:17:46');

-- --------------------------------------------------------

--
-- Structure de la table `love_like_counters`
--

CREATE TABLE `love_like_counters` (
  `id` int(10) UNSIGNED NOT NULL,
  `likeable_id` int(10) UNSIGNED NOT NULL,
  `likeable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` enum('LIKE','DISLIKE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'LIKE',
  `count` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `love_like_counters`
--

INSERT INTO `love_like_counters` (`id`, `likeable_id`, `likeable_type`, `type_id`, `count`, `created_at`, `updated_at`) VALUES
  (8, 26, 'App\\Publication', 'LIKE', 0, '2018-04-18 23:00:11', '2018-04-19 06:11:59'),
  (9, 14, 'App\\Publication', 'LIKE', 0, '2018-04-18 23:13:00', '2018-04-19 06:11:57'),
  (10, 37, 'App\\Publication', 'LIKE', 1, '2018-04-18 23:14:20', '2018-04-19 06:17:46'),
  (11, 2, 'App\\Program', 'LIKE', 1, '2018-04-18 23:20:12', '2018-04-18 23:25:26');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
  (33, '2014_10_12_000000_create_users_table', 1),
  (34, '2014_10_12_100000_create_password_resets_table', 1),
  (35, '2018_01_30_152434_create_social_facebook_accounts_table', 1),
  (36, '2018_04_18_093554_create_likes_table', 2),
  (37, '2016_09_02_153301_create_love_likes_table', 3),
  (38, '2016_09_02_163301_create_love_like_counters_table', 3);

-- --------------------------------------------------------

--
-- Structure de la table `muscles`
--

CREATE TABLE `muscles` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `muscles`
--

INSERT INTO `muscles` (`id`, `nom`, `image`) VALUES
  (3, 'Pectoraux', ''),
  (4, 'Épaules', ''),
  (5, 'Dos', ''),
  (6, 'Avant-bras', ''),
  (7, 'Triceps', ''),
  (8, 'Biceps', ''),
  (9, 'Trapèzes', ''),
  (10, 'Lombaires', ''),
  (11, 'Abdominaux', '');

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE `niveau` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `niveau`
--

INSERT INTO `niveau` (`id`, `nom`) VALUES
  (1, 'Débutant'),
  (2, 'Intermédiaire'),
  (3, 'Confirmé'),
  (10, 'Non défini');

-- --------------------------------------------------------

--
-- Structure de la table `objectif`
--

CREATE TABLE `objectif` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `objectif`
--

INSERT INTO `objectif` (`id`, `nom`) VALUES
  (1, 'Prise de masse'),
  (2, 'Séche'),
  (3, 'Perte de poids'),
  (4, 'Entretien'),
  (10, 'Non défini');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `programme`
--

CREATE TABLE `programme` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL DEFAULT 'Mon programme',
  `description` varchar(255) DEFAULT NULL,
  `cover` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `durée` int(11) NOT NULL,
  `niveau` int(11) NOT NULL,
  `objectif` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `programme`
--

INSERT INTO `programme` (`id`, `nom`, `description`, `cover`, `durée`, `niveau`, `objectif`, `utilisateur_id`, `created_at`, `updated_at`) VALUES
  (2, 'Sèche - Confirmé', 'test de programme', '', 6, 3, 2, 1, '2018-04-18 21:00:10', '2018-04-18 20:49:07');

-- --------------------------------------------------------

--
-- Structure de la table `publications`
--

CREATE TABLE `publications` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `publications`
--

INSERT INTO `publications` (`id`, `photo`, `title`, `created_at`, `updated_at`, `utilisateur_id`) VALUES
  (14, NULL, 'Coucou', '2018-04-17 06:34:03', '2018-04-17 06:34:03', 6),
  (26, NULL, 'Jjvv', '2018-04-17 06:50:34', '2018-04-17 06:50:34', 6),
  (37, NULL, 'nouveau post', '2018-04-18 23:14:18', '2018-04-18 23:14:18', 1);

-- --------------------------------------------------------

--
-- Structure de la table `social_facebook_accounts`
--

CREATE TABLE `social_facebook_accounts` (
  `user_id` int(11) NOT NULL,
  `provider_user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `social_facebook_accounts`
--

INSERT INTO `social_facebook_accounts` (`user_id`, `provider_user_id`, `provider`, `created_at`, `updated_at`) VALUES
  (5, '1974294939265969', 'facebook', '2018-02-06 12:51:13', '2018-02-06 12:51:13');

-- --------------------------------------------------------

--
-- Structure de la table `suit`
--

CREATE TABLE `suit` (
  `id` int(11) NOT NULL,
  `suiveur_id` int(11) NOT NULL,
  `suivi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `suit`
--

INSERT INTO `suit` (`id`, `suiveur_id`, `suivi_id`) VALUES
  (21, 1, 6);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `banniere` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `biographie` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `objectif_id` int(11) DEFAULT '10',
  `niveau_id` int(11) DEFAULT '10',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `avatar`, `banniere`, `biographie`, `password`, `objectif_id`, `niveau_id`, `remember_token`, `created_at`, `updated_at`) VALUES
  (1, 'Kylian', 'kylian@gmail.com', '1523993979.jpeg', '1524061372.jpg', 'aka moustache', '$2y$10$3jLwxvYxQaiZfNXX2oWhpO9BDTO8JI3jIW1Df154B6HtvOmkabEQq', 1, 3, 'sxhwvfH1lUghXWIyOOAsMo1ADUIkxxmscaUEC10xO2WKch7ep6mH7ymuevqC', '2018-02-01 08:28:34', '2018-04-18 13:01:41'),
  (2, 'martin_mgnr', 'martin_mgnr@hotmail.com', '1517486273.jpeg', '1517486369.jpeg', '', '$2y$10$WwOCNtXnIVAxduAWM7AzDOlLv26bvaP7.HuxC2MclOAeQ.r2RG1MO', 10, 10, NULL, '2018-02-01 10:52:20', '2018-02-01 10:59:40'),
  (3, 'Zaky2fois', 'mokhtari.zak@gmail.com', '1523953792.jpeg', 'default.jpg', 'izi train', '$2y$10$8l5HsQZ0Y/2V.ByCwB6ax.IPKPIHvY0YdD1kMGbGQBlzG9LfZmbiq', 2, 3, 'yn6KPiOgSkItMe2S77fya9Bjt0A8VdoPEXuAA4TM3XRHNCtLomTo2FDPl4ZC', '2018-02-01 12:35:03', '2018-04-17 08:05:13'),
  (5, 'Kylian Titren', 'kyky.t@hotmail.fr', '1517925091.jpg', 'default.jpg', '', '7610db9e380ba9775b3c215346184a87', 10, 10, 'N4zF2d3fwzopoNUiB7rAEqN96sNXyi3xDNE5UKdagnJ6xGfPKn4Tv48nFvgH', '2018-02-06 12:51:13', '2018-02-06 12:51:32'),
  (6, 'Martin', 'martin@hotmail.com', '1523955003.jpeg', 'default.jpg', 'Étudiant en DUT MMI', '$2y$10$McFEOQtic/hQmb7Wv/8ic.c14XB/5J5bNVJwDCDfu/kJCR9gMv5nO', 1, 1, NULL, '2018-04-17 06:33:01', '2018-04-17 06:50:03'),
  (7, 'Mous', 'kyky@gmail.com', 'default.jpg', 'default.jpg', NULL, '$2y$10$0UKTbVnlZ63tx0JfuYTHXOdIVNs6mIiE75OO6bY.aUiKL4MdfUF02', 2, 1, 'Xp3JEv2Li0yaqTSGtQ74Of7YpalGPIV9iFnlhJxj3WNQxccJJxDJmn13aKpl', '2018-04-17 08:01:37', '2018-04-17 08:01:37'),
  (8, 'kajcu', 'kyy@gmail.com', 'default.jpg', 'default.jpg', NULL, '$2y$10$A20/dEy1bGku/yX7Qec8UuN36xuQ5xebgscvft0yMtFPkwCDyN1sC', 1, 2, 'lOCzywcqaNUhsCuCwyeleYBUMTFzZV5PhJ4WhygQ2APDCsrgsaMgwrtFpXNM', '2018-04-17 08:16:23', '2018-04-17 08:16:23'),
  (9, 'Julien', 'julien.fovelle62@gmail.com', '1523961025.jpg', '1523961026.jpg', NULL, '$2y$10$JIOePMBiV4BlGf41A1qJcOdZssOuoYhzSRBgiTXyG6JWWWjPcaVl.', 2, 1, 'kDvjOramW2c1pAut9i4ESf9swBIQsXmOe7ZaHetCdx4Jf9htB2Wa1u5hyQkI', '2018-04-17 08:22:51', '2018-04-17 08:30:26');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `exercices`
--
ALTER TABLE `exercices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idMuscles` (`idMuscles`);

--
-- Index pour la table `love_likes`
--
ALTER TABLE `love_likes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `like_user_unique` (`likeable_id`,`likeable_type`,`user_id`),
  ADD KEY `love_likes_likeable_id_likeable_type_index` (`likeable_id`,`likeable_type`),
  ADD KEY `love_likes_user_id_index` (`user_id`);

--
-- Index pour la table `love_like_counters`
--
ALTER TABLE `love_like_counters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `like_counter_unique` (`likeable_id`,`likeable_type`,`type_id`),
  ADD KEY `love_like_counters_likeable_id_likeable_type_index` (`likeable_id`,`likeable_type`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `muscles`
--
ALTER TABLE `muscles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `objectif`
--
ALTER TABLE `objectif`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `programme`
--
ALTER TABLE `programme`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `suit`
--
ALTER TABLE `suit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `exercices`
--
ALTER TABLE `exercices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT pour la table `love_likes`
--
ALTER TABLE `love_likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT pour la table `love_like_counters`
--
ALTER TABLE `love_like_counters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT pour la table `muscles`
--
ALTER TABLE `muscles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `objectif`
--
ALTER TABLE `objectif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `programme`
--
ALTER TABLE `programme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT pour la table `suit`
--
ALTER TABLE `suit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;