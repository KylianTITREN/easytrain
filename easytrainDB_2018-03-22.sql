-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Ven 30 Mars 2018 à 12:04
-- Version du serveur :  5.6.34
-- Version de PHP :  7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `easytrainDB`
--

-- --------------------------------------------------------

--
-- Structure de la table `exercices`
--

CREATE TABLE `exercices` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `idMuscles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `exercices`
--

INSERT INTO `exercices` (`id`, `nom`, `description`, `image`, `idMuscles`) VALUES
(1, 'Développé couché barre ', '', '', 3),
(2, 'Développé couché haltères', '', '', 3),
(3, 'Pompes au sol', '', '', 3),
(4, 'Écarté couché haltères', '', '', 3),
(5, 'Dips', '', '', 3),
(6, 'Butterfly', '', '', 3),
(7, 'Développé incliné barres/haltères', '', '', 3),
(8, 'Développé épaules', '', '', 4),
(9, 'Élévations latérales', '', '', 4),
(10, 'Élévations frontales', '', '', 4),
(11, 'Élévations buste penché', '', '', 4),
(12, 'Tirage menton', '', '', 4),
(13, 'Oiseau à la poulie', '', '', 4),
(14, 'Tractions', '', '', 5),
(15, 'Tirage nuque', '', '', 5),
(16, 'Tirage poitrine', '', '', 5),
(17, 'Soulevé de Terre', '', '', 5),
(18, 'Rowing barre', '', '', 5),
(19, 'Tirage assis', '', '', 5),
(20, 'Extensions au banc', '', '', 6),
(21, 'Développé nuque', '', '', 7),
(22, 'Élévations latérales bras tendus', '', '', 7),
(23, 'Tirage barre en pronation jambes fléchies', '', '', 7),
(24, 'Tirage vertical', '', '', 7),
(25, 'Haussements d’épaule', '', '', 7),
(26, 'Curl barre', '', '', 8),
(27, 'Curl Haltères', '', '', 8),
(28, 'Curl pupitre', '', '', 8),
(29, 'Curl prise marteau', '', '', 8),
(30, 'Barre front', '', '', 9),
(31, 'Extension au dessus de la tête', '', '', 9),
(32, 'Kick Back', '', '', 9),
(33, 'Extensions à la poulie', '', '', 9),
(34, 'Flexion des poignets', '', '', 10),
(35, 'Crunch', '', '', 11),
(36, 'Décollé bassin', '', '', 11),
(37, 'Crunch oblique', '', '', 11),
(38, 'Relevé de jambe', '', '', 11);

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
(35, '2018_01_30_152434_create_social_facebook_accounts_table', 1);

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
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(23, '/storage/photo/3/i0qNr7qY8UvtUEyFBsJubdWLf3b4H6WxTx9bEA1c.jpeg', 'A', '2018-03-23 12:12:06', '2018-03-23 12:12:06', 3);

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
(12, 1, 4),
(16, 1, 3),
(20, 1, 2);

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
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `avatar`, `banniere`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kylian', 'kylian@gmail.com', '1522160350.jpg', '1517486132.jpeg', '$2y$10$1q5xtyGKKnFO2inUfXDHz.tYBAaBl1sn8PqcBWkyvejGrxxn020eO', 'U4dh68sEYOBhwmnQpoVO7JFttdDC0LdTpEEXqFim6t3jmmVncBUYCkMJLRDc', '2018-02-01 08:28:34', '2018-03-27 12:19:10'),
(2, 'martin_mgnr', 'martin_mgnr@hotmail.com', '1517486273.jpeg', '1517486369.jpeg', '$2y$10$WwOCNtXnIVAxduAWM7AzDOlLv26bvaP7.HuxC2MclOAeQ.r2RG1MO', NULL, '2018-02-01 10:52:20', '2018-02-01 10:59:40'),
(3, 'Zaky2fois', 'mokhtari.zak@gmail.com', '1517492117.JPG', 'default.jpg', '$2y$10$8l5HsQZ0Y/2V.ByCwB6ax.IPKPIHvY0YdD1kMGbGQBlzG9LfZmbiq', '1ZM6AFCFtiJ7K5KyRyLcIohTQeMnkgrqI2YMwdcaQ62WWdIgDL4t1tgDn50S', '2018-02-01 12:35:03', '2018-02-01 12:35:17'),
(4, 'Emma', 'emma.moreau@hotmail.fr', '1517594824.jpeg', '1517594841.jpeg', '$2y$10$h6oDaHhPJZUfIuNyuMFMEe.r68f8CkK/eCDSfV6TNs7bVa2nOHkM.', NULL, '2018-02-02 17:06:31', '2018-02-02 17:09:41'),
(5, 'Kylian Titren', 'kyky.t@hotmail.fr', '1517925091.jpg', 'default.jpg', '7610db9e380ba9775b3c215346184a87', 'N4zF2d3fwzopoNUiB7rAEqN96sNXyi3xDNE5UKdagnJ6xGfPKn4Tv48nFvgH', '2018-02-06 12:51:13', '2018-02-06 12:51:32');

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
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT pour la table `muscles`
--
ALTER TABLE `muscles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `suit`
--
ALTER TABLE `suit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;