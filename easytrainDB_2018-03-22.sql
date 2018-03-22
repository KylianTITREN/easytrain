# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Hôte: 127.0.0.1 (MySQL 5.6.34)
# Temps de génération: 2018-03-22 15:00:21 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Affichage de la table exercices
# ------------------------------------------------------------

DROP TABLE IF EXISTS `exercices`;

CREATE TABLE `exercices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `idMuscles` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idMuscles` (`idMuscles`),
  CONSTRAINT `exercices_ibfk_1` FOREIGN KEY (`idMuscles`) REFERENCES `muscles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `exercices` WRITE;
/*!40000 ALTER TABLE `exercices` DISABLE KEYS */;

INSERT INTO `exercices` (`id`, `nom`, `description`, `image`, `idMuscles`)
VALUES
	(1,'Développé couché barre ','','',3),
	(2,'Développé couché haltères','','',3),
	(3,'Pompes au sol','','',3),
	(4,'Écarté couché haltères','','',3),
	(5,'Dips','','',3),
	(6,'Butterfly','','',3),
	(7,'Développé incliné barres/haltères','','',3),
	(8,'Développé épaules','','',4),
	(9,'Élévations latérales','','',4),
	(10,'Élévations frontales','','',4),
	(11,'Élévations buste penché','','',4),
	(12,'Tirage menton','','',4),
	(13,'Oiseau à la poulie','','',4),
	(14,'Tractions','','',5),
	(15,'Tirage nuque','','',5),
	(16,'Tirage poitrine','','',5),
	(17,'Soulevé de Terre','','',5),
	(18,'Rowing barre','','',5),
	(19,'Tirage assis','','',5),
	(20,'Extensions au banc','','',6),
	(21,'Développé nuque','','',7),
	(22,'Élévations latérales bras tendus','','',7),
	(23,'Tirage barre en pronation jambes fléchies','','',7),
	(24,'Tirage vertical','','',7),
	(25,'Haussements d’épaule','','',7),
	(26,'Curl barre','','',8),
	(27,'Curl Haltères','','',8),
	(28,'Curl pupitre','','',8),
	(29,'Curl prise marteau','','',8),
	(30,'Barre front','','',9),
	(31,'Extension au dessus de la tête','','',9),
	(32,'Kick Back','','',9),
	(33,'Extensions à la poulie','','',9),
	(34,'Flexion des poignets','','',10),
	(35,'Crunch','','',11),
	(36,'Décollé bassin','','',11),
	(37,'Crunch oblique','','',11),
	(38,'Relevé de jambe','','',11);

/*!40000 ALTER TABLE `exercices` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(33,'2014_10_12_000000_create_users_table',1),
	(34,'2014_10_12_100000_create_password_resets_table',1),
	(35,'2018_01_30_152434_create_social_facebook_accounts_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table muscles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `muscles`;

CREATE TABLE `muscles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `muscles` WRITE;
/*!40000 ALTER TABLE `muscles` DISABLE KEYS */;

INSERT INTO `muscles` (`id`, `nom`, `image`)
VALUES
	(3,'Pectoraux',''),
	(4,'Épaules',''),
	(5,'Dos',''),
	(6,'Biceps',''),
	(7,'Triceps',''),
	(8,'Avant-bras',''),
	(9,'Trapèzes',''),
	(10,'Lombaires',''),
	(11,'Abdominaux','');

/*!40000 ALTER TABLE `muscles` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Affichage de la table social_facebook_accounts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `social_facebook_accounts`;

CREATE TABLE `social_facebook_accounts` (
  `user_id` int(11) NOT NULL,
  `provider_user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `social_facebook_accounts` WRITE;
/*!40000 ALTER TABLE `social_facebook_accounts` DISABLE KEYS */;

INSERT INTO `social_facebook_accounts` (`user_id`, `provider_user_id`, `provider`, `created_at`, `updated_at`)
VALUES
	(5,'1974294939265969','facebook','2018-02-06 13:51:13','2018-02-06 13:51:13');

/*!40000 ALTER TABLE `social_facebook_accounts` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `banniere` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `avatar`, `banniere`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Kylian','kylian@gmail.com','1517486299.jpeg','1517486132.jpeg','$2y$10$1q5xtyGKKnFO2inUfXDHz.tYBAaBl1sn8PqcBWkyvejGrxxn020eO','LimlAkpW5YZQ1FFIAlL03VrmRA9XuX5JwUCHQFk2e5si1icijB6yb6ubdRaW','2018-02-01 09:28:34','2018-02-01 11:58:20'),
	(2,'martin_mgnr','martin_mgnr@hotmail.com','1517486273.jpeg','1517486369.jpeg','$2y$10$WwOCNtXnIVAxduAWM7AzDOlLv26bvaP7.HuxC2MclOAeQ.r2RG1MO',NULL,'2018-02-01 11:52:20','2018-02-01 11:59:40'),
	(3,'Zaky2fois','mokhtari.zak@gmail.com','1517492117.JPG','default.jpg','$2y$10$8l5HsQZ0Y/2V.ByCwB6ax.IPKPIHvY0YdD1kMGbGQBlzG9LfZmbiq',NULL,'2018-02-01 13:35:03','2018-02-01 13:35:17'),
	(4,'Emma','emma.moreau@hotmail.fr','1517594824.jpeg','1517594841.jpeg','$2y$10$h6oDaHhPJZUfIuNyuMFMEe.r68f8CkK/eCDSfV6TNs7bVa2nOHkM.',NULL,'2018-02-02 18:06:31','2018-02-02 18:09:41'),
	(5,'Kylian Titren','kyky.t@hotmail.fr','1517925091.jpg','default.jpg','7610db9e380ba9775b3c215346184a87','tx75zkkxZLrATMgCqRXcP30v4gesjc3wy3Xms6YGubSSmErudMWWCFe3nGXF','2018-02-06 13:51:13','2018-02-06 13:51:32');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
