# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Hôte: 127.0.0.1 (MySQL 5.6.38)
# Base de données: easytrainDB
# Temps de génération: 2018-04-23 09:21:31 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Affichage de la table contient
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contient`;

CREATE TABLE `contient` (
  `program_id` int(11) NOT NULL,
  `exercice_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `contient` WRITE;
/*!40000 ALTER TABLE `contient` DISABLE KEYS */;

INSERT INTO `contient` (`program_id`, `exercice_id`)
VALUES
	(3,3),
	(3,1),
	(3,26),
	(3,29),
	(3,36),
	(3,35),
	(3,14),
	(3,19),
	(3,32),
	(3,30),
	(3,48),
	(3,52),
	(1,1),
	(1,3),
	(1,29),
	(1,35),
	(1,36),
	(1,5),
	(1,42),
	(1,47),
	(2,3),
	(2,35),
	(2,36),
	(2,47),
	(2,46),
	(2,51),
	(4,3),
	(5,5),
	(6,6);

/*!40000 ALTER TABLE `contient` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table exercices
# ------------------------------------------------------------

DROP TABLE IF EXISTS `exercices`;

CREATE TABLE `exercices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` text NOT NULL,
  `idMuscles` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idMuscles` (`idMuscles`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `exercices` WRITE;
/*!40000 ALTER TABLE `exercices` DISABLE KEYS */;

INSERT INTO `exercices` (`id`, `nom`, `description`, `image`, `idMuscles`)
VALUES
	(1,'Développé couché barre ','Le développé couché (bench press en anglais) est l’exercice de référence pour la musculation des pectoraux. Cet exercice poly-articulaire permet de se muscler l’ensemble des muscles de la poitrine et plus particulièrement le muscle grand pectoral. Le développé couché qui fait partie des trois mouvement de force athlétique est très efficace pour prendre de la masse musculaire car il permet de travailler avec des charges lourdes.','dev-couché.png',3),
	(4,'Écarté couché haltères','Ce mouvement permet d’isoler les pectoraux afin d’améliorer le développement de ces derniers. Il peut se réaliser droit (centre des pectoraux) , incliné (haut des pectoraux) ou décliné (bas des pectoraux). ','écarté haltère.png',3),
	(6,'Butterfly','Idéal en fin de séance, le butterfly vient insoler la partie interne du pectoral. Il permet de progresser rapidement. Il s’agit de rapprocher au maximum les avant-bras. ','Butterfly.png',3),
	(11,'Élévations buste penché','Ne vous inquiétez pas, le ridicule ne tue pas. Penchez-vous en avant, les jambes tendues et le dos bien droit et effectuez le même mouvement que les élévations latérales avec haltères. ','élévation-lat-buste-penche.png',4),
	(14,'Tractions','Tout le monde connait l’exercice des tractions. Il s’agit de tenir une barre dans les mains et de hisser les épaules de niveau de cette barre en ayant les pieds suspendus. Cet exercice au poids de corps est très difficile pour les personnes lourdes. ','Traction.png',5),
	(15,'Tirage nuque','Cet exercice est une variante des tractions. Il permet de réaliser le même mouvement mais avec un poids variable que l’on peut choisir sur la machine. Il faut faire passer la barre derrière la tête et la tirer jusqu’à la nuque. ','tirage-nuque.png',5),
	(17,'Soulevé de Terre','Attention : faites vous aider la première fois que vous réalisez cet exercice car il nécessite une maîtrise du geste. ','soulevé de terre.png',5),
	(19,'Tirage assis','Assis, vous devez amener la barre au niveau de votre ventre. Attention à garder le dos bien droit pour éviter les blessures. ','Tirage-assis.png',5),
	(20,'Extensions au banc','Cet exercice permet de travailler les lombaires correctement. Si il s’avère trop simple pour vous, n’hésitez pas à prendre un poids dans vos bras. ','extensions-banc.png',10),
	(21,'Développé nuque','Il s’agit du même exercice que le développé militaire (ou développé épaule) mais cette fois-ci avec une barre à la place des haltères. ','dev-nuque.png',7),
	(26,'Curl barre','Cet exercice est le meilleur pour isoler les biceps. Attention aux charges trop lourdes qui peuvent blesser votre coude. Échauffez-vous correctement avant. ','curl-barre.png',8),
	(27,'Curl Haltères','Cet exercice est le meilleur pour isoler les biceps. Attention aux charges trop lourdes qui peuvent blesser votre coude. Échauffez-vous correctement avant. ','curl-barre.png',8),
	(28,'Curl pupitre','Cet exercice est le meilleur pour isoler les biceps. Attention aux charges trop lourdes qui peuvent blesser votre coude. Échauffez-vous correctement avant. ','curl-barre.png',8),
	(29,'Curl prise marteau','Cet exercice est le meilleur pour isoler les biceps. Attention aux charges trop lourdes qui peuvent blesser votre coude. Échauffez-vous correctement avant. ','curl-barre.png',8),
	(30,'Barre front','Pour débuter cet exercice, prenez une barre sans poids afin de bien appréhender le mouvement et ne pas être surpris par le poids; vous risquerez de faire tomber la barre sur votre visage. ','barre-au-front.png',9),
	(33,'Extensions à la poulie','Avec une corde, disponible dans toutes les salles de sports, approchez vos mains de votre bassin et effectuez un mouvement d’écartement. ','ext-poulie.png',9),
	(34,'Flexion des poignets','Il s’agit de poser ses coudes sur un banc, de prendre la barre dans les mains et d’affection des flexions de poignets. Cet exercice isole parfaitement les avant-bras et vous rendra meilleur au bras de fer!','flexion-poignet.png',6),
	(35,'Crunch','Simple et efficace pour muscler les abdominaux, il faut tout de même pensez à ne pas trop courber le dos. ','crunch.png',11),
	(36,'Gainage','L\'exercice semble simple mais la vérité est tout autre. À réaliser au minimu 15 secondes pour que l\'exercice soit efficace. Pensez à garder le dos bien droit et les fesses bien levées.','gainage.jpg',11),
	(37,'Crunch oblique','Simple et efficace pour muscler les abdominaux, il faut tout de même pensez à ne pas trop courber le dos. ','',11),
	(38,'Relevé de jambe','Idéal pour travailler le bas des abdos et le fameux V (les obliques), cet exercice est indispensable pour travailler correctement les abdos. Il faut l’effectuer en dernier. ','releve jambe.png',11),
	(39,'Squat','Attention : faites-vous aider lors de votre premier Squat! Il faut garder le dos bien droit et ressortir les fesses en arrière. ','3.gif',12),
	(40,'Leg extension','Il s’agit du même principe que pour les bras mais avec les machines adaptées aux jambes. Ne chargez pas trop la machine pour débuter et éviter les blessures. ','leg-extension.png',12),
	(41,'Presse','ATTENTION ! ! ! : Ne jamais tendre les jambes complètement!. ','presse.png',12),
	(42,'Fentes','Exercice de base en musculation, la fente avant est d’une efficacité redoutable pour raffermir les fesses et se sculpter de belles jambes galbées.','5.gif',12),
	(43,'Leg curl','Il s’agit du même principe que pour les bras mais avec les machines adaptées aux jambes. Ne chargez pas trop la machine pour débuter et éviter les blessures. ','leg curl.png',13),
	(44,'Soulevé de terre','Attention : faites vous aider la première fois que vous réalisez cet exercice car il nécessite une maîtrise du geste. ','soulevé de terre.png',13),
	(45,'Squat','Attention : faites-vous aider lors de votre premier Squat! Il faut garder le dos bien droit et ressortir les fesses en arrière. ','3.gif',14),
	(46,'Fentes sautées','Exercice de base en musculation, la fente avant est d’une efficacité redoutable pour raffermir les fesses et se sculpter de belles jambes galbées.','5.gif',14),
	(47,'Jumping jack','Exercice à consommer sans modération. Vous pouvez le réaliser chez vous sans aucun problème puisqu’il ne nécessite aucun matériel. ','7.gif',14),
	(48,'Squat','Attention : faites-vous aider lors de votre premier Squat! Il faut garder le dos bien droit et ressortir les fesses en arrière. ','3.gif',15),
	(49,'Soulevé de terre','Attention : faites vous aider la première fois que vous réalisez cet exercice car il nécessite une maîtrise du geste. ','soulevé de terre.png',15),
	(50,'Fentes','Exercice de base en musculation, la fente avant est d’une efficacité redoutable pour raffermir les fesses et se sculpter de belles jambes galbées.','5.gif',15),
	(51,'Fentes sautées','Exercice de base en musculation, la fente avant est d’une efficacité redoutable pour raffermir les fesses et se sculpter de belles jambes galbées.','5.gif',15),
	(52,'Mollets debout','Exercice très simple. Si il devient trop facile, augmentez le poids. ','mollet.png',16),
	(53,'Mollets assis','Exercice très simple. Si il devient trop facile, augmentez le poids.','mollet.png',16),
	(54,'Pompes prise serrée','Il existe plusieurs variantes de cet exercices mondialement connu. Il permet de travailler le haut du corps et principalement les pectoraux ainsi que les triceps avec le poids du corps. Pour les débutants, il est possible de poser les genoux au sol. ','1.gif',9),
	(55,'Pompes sautées','Il existe plusieurs variantes de cet exercices mondialement connu. Il permet de travailler le haut du corps et principalement les pectoraux avec le poids du corps. Pour les débutants, il est possible de poser les genoux au sol. ','2.gif',3);

/*!40000 ALTER TABLE `exercices` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table love_like_counters
# ------------------------------------------------------------

DROP TABLE IF EXISTS `love_like_counters`;

CREATE TABLE `love_like_counters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `likeable_id` int(10) unsigned NOT NULL,
  `likeable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` enum('LIKE','DISLIKE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'LIKE',
  `count` int(10) unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `like_counter_unique` (`likeable_id`,`likeable_type`,`type_id`),
  KEY `love_like_counters_likeable_id_likeable_type_index` (`likeable_id`,`likeable_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `love_like_counters` WRITE;
/*!40000 ALTER TABLE `love_like_counters` DISABLE KEYS */;

INSERT INTO `love_like_counters` (`id`, `likeable_id`, `likeable_type`, `type_id`, `count`, `created_at`, `updated_at`)
VALUES
	(18,48,'App\\Publication','LIKE',2,'2018-04-19 21:48:54','2018-04-19 22:51:00'),
	(19,49,'App\\Publication','LIKE',1,'2018-04-19 21:49:12','2018-04-19 21:49:12'),
	(20,47,'App\\Publication','LIKE',3,'2018-04-19 21:49:20','2018-04-20 13:10:45'),
	(21,50,'App\\Publication','LIKE',1,'2018-04-19 21:58:05','2018-04-19 21:58:05'),
	(22,3,'App\\Program','LIKE',1,'2018-04-20 00:32:19','2018-04-20 13:12:27'),
	(23,2,'App\\Program','LIKE',1,'2018-04-20 07:03:56','2018-04-20 07:03:56'),
	(24,1,'App\\Program','LIKE',1,'2018-04-20 08:12:05','2018-04-20 08:12:05'),
	(25,51,'App\\Publication','LIKE',3,'2018-04-20 08:14:44','2018-04-20 08:30:21'),
	(26,52,'App\\Publication','LIKE',1,'2018-04-20 08:32:18','2018-04-20 08:32:18');

/*!40000 ALTER TABLE `love_like_counters` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table love_likes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `love_likes`;

CREATE TABLE `love_likes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `likeable_id` int(10) unsigned NOT NULL,
  `likeable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `type_id` enum('LIKE','DISLIKE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'LIKE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `like_user_unique` (`likeable_id`,`likeable_type`,`user_id`),
  KEY `love_likes_likeable_id_likeable_type_index` (`likeable_id`,`likeable_type`),
  KEY `love_likes_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `love_likes` WRITE;
/*!40000 ALTER TABLE `love_likes` DISABLE KEYS */;

INSERT INTO `love_likes` (`id`, `likeable_id`, `likeable_type`, `user_id`, `type_id`, `created_at`, `updated_at`)
VALUES
	(74,48,'App\\Publication',10,'LIKE','2018-04-19 21:48:54','2018-04-19 21:48:54'),
	(75,49,'App\\Publication',10,'LIKE','2018-04-19 21:49:12','2018-04-19 21:49:12'),
	(77,47,'App\\Publication',11,'LIKE','2018-04-19 21:49:29','2018-04-19 21:49:29'),
	(78,48,'App\\Publication',11,'LIKE','2018-04-19 21:49:45','2018-04-19 21:49:45'),
	(79,50,'App\\Publication',12,'LIKE','2018-04-19 21:58:05','2018-04-19 21:58:05'),
	(80,47,'App\\Publication',10,'LIKE','2018-04-19 22:13:33','2018-04-19 22:13:33'),
	(88,2,'App\\Program',12,'LIKE','2018-04-20 07:03:56','2018-04-20 07:03:56'),
	(89,1,'App\\Program',12,'LIKE','2018-04-20 08:12:05','2018-04-20 08:12:05'),
	(90,51,'App\\Publication',12,'LIKE','2018-04-20 08:14:44','2018-04-20 08:14:44'),
	(92,51,'App\\Publication',15,'LIKE','2018-04-20 08:17:56','2018-04-20 08:17:56'),
	(93,51,'App\\Publication',18,'LIKE','2018-04-20 08:30:21','2018-04-20 08:30:21'),
	(94,52,'App\\Publication',12,'LIKE','2018-04-20 08:32:18','2018-04-20 08:32:18'),
	(95,47,'App\\Publication',12,'LIKE','2018-04-20 13:10:45','2018-04-20 13:10:45'),
	(96,3,'App\\Program',12,'LIKE','2018-04-20 13:12:27','2018-04-20 13:12:27');

/*!40000 ALTER TABLE `love_likes` ENABLE KEYS */;
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
	(35,'2018_01_30_152434_create_social_facebook_accounts_table',1),
	(36,'2018_04_18_093554_create_likes_table',2),
	(37,'2016_09_02_153301_create_love_likes_table',3),
	(38,'2016_09_02_163301_create_love_like_counters_table',3);

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
	(6,'Avant-bras',''),
	(7,'Trapèzes',''),
	(8,'Biceps',''),
	(9,'Triceps',''),
	(10,'Lombaires',''),
	(11,'Abdominaux',''),
	(12,'Quadriceps',''),
	(13,'Ischio-jambiers',''),
	(14,'Adducteurs',''),
	(15,'Fessiers',''),
	(16,'Mollets','');

/*!40000 ALTER TABLE `muscles` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table niveau
# ------------------------------------------------------------

DROP TABLE IF EXISTS `niveau`;

CREATE TABLE `niveau` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `niveau` WRITE;
/*!40000 ALTER TABLE `niveau` DISABLE KEYS */;

INSERT INTO `niveau` (`id`, `nom`)
VALUES
	(1,'Débutant'),
	(2,'Intermédiaire'),
	(3,'Confirmé'),
	(10,'Non défini');

/*!40000 ALTER TABLE `niveau` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table objectif
# ------------------------------------------------------------

DROP TABLE IF EXISTS `objectif`;

CREATE TABLE `objectif` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `objectif` WRITE;
/*!40000 ALTER TABLE `objectif` DISABLE KEYS */;

INSERT INTO `objectif` (`id`, `nom`)
VALUES
	(1,'Prise de masse'),
	(2,'Sèche'),
	(3,'Perte de poids'),
	(4,'Entretien'),
	(10,'Non défini');

/*!40000 ALTER TABLE `objectif` ENABLE KEYS */;
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



# Affichage de la table programme
# ------------------------------------------------------------

DROP TABLE IF EXISTS `programme`;

CREATE TABLE `programme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL DEFAULT 'Mon programme',
  `description` varchar(255) DEFAULT NULL,
  `durée` int(11) NOT NULL,
  `niveau` int(11) NOT NULL,
  `objectif` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `programme` WRITE;
/*!40000 ALTER TABLE `programme` DISABLE KEYS */;

INSERT INTO `programme` (`id`, `nom`, `description`, `durée`, `niveau`, `objectif`, `utilisateur_id`, `created_at`, `updated_at`)
VALUES
	(1,'Programme sèche','Sèche = 40% musculation - 60% cardio - 12-15 répétition - 4 série.\r\nÀ faire sur 6 semaines. ',6,1,2,0,'2018-04-20 02:41:18','0000-00-00 00:00:00'),
	(2,'Programme perte de poids','Perte de poids = longues séries avec des poids légers, ou intense avec des series de 20s et pause de 10s !',3,1,3,0,'2018-04-20 02:41:22','0000-00-00 00:00:00'),
	(3,'Programme prise de masse','Prise de masse = 4 séries par exercices - de 8 à 12 répétitions - Charges moyennes \r\nPratiquer au minimum 2 exercices différents par muscles.',5,1,1,0,'2018-04-19 20:51:45','0000-00-00 00:00:00');

/*!40000 ALTER TABLE `programme` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table publications
# ------------------------------------------------------------

DROP TABLE IF EXISTS `publications`;

CREATE TABLE `publications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `utilisateur_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `publications` WRITE;
/*!40000 ALTER TABLE `publications` DISABLE KEYS */;

INSERT INTO `publications` (`id`, `photo`, `title`, `created_at`, `updated_at`, `utilisateur_id`)
VALUES
	(47,NULL,'Go à la salle ??','2018-04-19 21:48:14','2018-04-19 21:48:14',10),
	(49,NULL,'Demain la reprise du sport, ça va être dur pour moi ???‍♀️','2018-04-19 21:48:58','2018-04-19 21:48:58',11),
	(50,'1524174720.jpeg','En plein entraînement! ??','2018-04-19 21:52:00','2018-04-19 21:52:00',11),
	(51,NULL,'pfff trop dur !!!! je prefère boire une bière :-)','2018-04-20 08:14:31','2018-04-20 08:14:31',15),
	(52,NULL,'Bien joué. Je commence les pompes demain !!','2018-04-20 08:16:30','2018-04-20 08:16:30',20),
	(53,NULL,'trop dur pour moi !','2018-04-20 08:19:16','2018-04-20 08:19:16',20);

/*!40000 ALTER TABLE `publications` ENABLE KEYS */;
UNLOCK TABLES;


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



# Affichage de la table suit
# ------------------------------------------------------------

DROP TABLE IF EXISTS `suit`;

CREATE TABLE `suit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `suiveur_id` int(11) NOT NULL,
  `suivi_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `suit` WRITE;
/*!40000 ALTER TABLE `suit` DISABLE KEYS */;

INSERT INTO `suit` (`id`, `suiveur_id`, `suivi_id`)
VALUES
	(27,10,12),
	(28,10,11),
	(30,12,10),
	(31,11,10),
	(32,11,12),
	(33,13,10),
	(34,13,11),
	(35,13,12),
	(36,14,10),
	(37,14,12),
	(38,14,11),
	(39,16,10),
	(40,15,11),
	(41,16,12),
	(42,15,12),
	(43,16,11),
	(44,15,10),
	(45,17,10),
	(46,17,12),
	(47,17,11),
	(48,12,13),
	(49,12,14),
	(50,12,16),
	(51,12,15),
	(52,12,17),
	(53,18,11),
	(54,19,12),
	(55,18,12),
	(56,19,10),
	(57,19,11),
	(58,18,10),
	(59,20,12),
	(60,20,11),
	(61,20,10),
	(62,12,19),
	(63,12,18),
	(64,12,20),
	(65,21,12),
	(66,21,11),
	(67,21,10),
	(68,12,21),
	(69,22,12),
	(70,22,10),
	(71,22,11),
	(72,12,22),
	(75,15,20),
	(76,15,14),
	(86,20,15),
	(87,15,13),
	(88,15,18),
	(89,12,11);

/*!40000 ALTER TABLE `suit` ENABLE KEYS */;
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
  `biographie` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `objectif_id` int(11) DEFAULT '10',
  `niveau_id` int(11) DEFAULT '10',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `avatar`, `banniere`, `biographie`, `password`, `objectif_id`, `niveau_id`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(10,'Zakarya','zak@gmail.com','1524174452.JPG','default.jpg','Co-fondateur easytrain','$2y$10$05Ln2pDEsk.bop06LYf80emxqRny4IY/TTCBxX50g6RdvBcuVrAoe',1,1,'ORk0t6E7jxVO05RXeYFuPxX5aY41FSMXU3G8csG8hJYrMyIHDlVrH5v9fRlk','2018-04-19 21:46:20','2018-04-19 21:47:54'),
	(11,'Martin','martin.magnier@hotmail.com','1524174459.jpeg','default.jpg','Co-fondateur easytrain','$2y$10$dsECPdRaKAf3kSuiuYlIbOmtAwOZRivA/s9Zd3HRy1BvctSmObe6.',1,1,'aDJoqKmddaz5VdZjXMqR6lxAj6SM4xlzHpkmIvDkA3ha5ojhxes8Bi3Gf9sh','2018-04-19 21:46:38','2018-04-19 21:47:40'),
	(12,'Kylian','kylian.titren@gmail.com','1524174448.jpeg','default.jpg','Co-fondateur easytrain','$2y$10$gai7joWotRLrYkk1wXOhRecKMX/EbKcDr3ljPAHhAcCCVe6myqHgC',1,10,'cQiZx0HECUZo4J9718B8hQprPNySRdEkchr8PPTiQGA46nazmIzkg8qHPx7r','2018-04-19 21:46:43','2018-04-20 13:12:08'),
	(13,'Virginie','virginie@gmail.com','default.jpg','default.jpg','Best english teacher','$2y$10$eZNFQxqlSGtsg1L4HP2W0O.Z2rewr5RYL8RfS8hOMSINmCc0UqlsS',10,10,'KdchnRQCPlqbJtJEZsRAoGOAChthhwc9lmFc1d7ivROHH6UkI0wXLtoRflos','2018-04-19 21:50:22','2018-04-19 21:50:36'),
	(14,'Gilles','g@gmail.com','default.jpg','default.jpg','Enseignant-chercheur','$2y$10$/Ki238Y/GcMgi2NaUYoYdeTGYP7OVSLm8grOt.gk.fXNWet/3/hcm',10,10,'QLannRvkV0Z3LbPK91iwgYiP9XuxQ3BHxCuRKnlzBPY84pylq5Eh5FxG3jun','2018-04-19 21:53:33','2018-04-19 21:54:37'),
	(15,'Sebastien','sebastien@gmail.com','default.jpg','default.jpg','Enseignant - chercheur CRIL','$2y$10$D8QzA2FoRTMobrhHykIyquRCH/YrDf0o/6f18EPJjJGyxlXRUpY06',10,10,'0tRDes3q1QtrkaKboo7xPoHjjxLrIEqdpwAIp3AnJvLWcxovIjEXEC0ZN03F','2018-04-19 21:55:22','2018-04-19 21:57:50'),
	(16,'Christophe','c@gmail.com','default.jpg','default.jpg','Enseignant-chercheur CRIL','$2y$10$Jf/IPCmUyik0IYvSTG/QsO2F.uD8LfCep67ojMRDwo1iodLgBz07y',10,10,'eEUuiIfK4hBxxZkIrfuO2flJtNp8DKgSFQRxdmJMJJBkRRZvMTfOdUXBypHy','2018-04-19 21:55:29','2018-04-19 21:56:45'),
	(17,'Bertrand','b@gmail.com','default.jpg','default.jpg','Professeur - IUT LENS','$2y$10$hdLEIZpA3/s024BujwRpz.w6E0vDu.r6d3VuVeAQQBVBvCRmAxe3m',10,10,'Ys0IN5y9fDFBE4bWX9YU9hvPA3CO7mw41prVLjjuIKjq7hFSUbz5CVNi3MOF','2018-04-19 21:57:27','2018-04-19 21:58:09'),
	(18,'Vincent','vincent@gmail.com','default.jpg','default.jpg','Professeur à l’iut de Lens','$2y$10$wcUSd6cAWGb8sdvDNRqlOu5Gq6cDsHQWD1zobv2Fi04fZBH1uMUi6',10,10,NULL,'2018-04-19 21:58:55','2018-04-19 21:59:19'),
	(19,'Bochra','bb@gmail.com','default.jpg','default.jpg','IUT de Lens','$2y$10$lcbDdWeUcBXXJ1KN6n4JWexKsoeSdtBPPVGzNalXkLS5MdBDbf5um',10,10,'rmWNNjY8XIw6XUbFrVUtKWYHm0fFxia18RI2Nn6TILx1tDHRdDjdUcKxX07k','2018-04-19 21:59:29','2018-04-19 22:00:15'),
	(20,'Frederic','ff@gmail.com','default.jpg','default.jpg','Chef de département.','$2y$10$WKXKqHZeuG1TeXcryCtkzOJ2gH87eXV0tsaIaZa/mZaapFtsmuxzK',10,10,'Ncs6z6FFNaDHwRz5278uoCdvrZha91SRuIwmDxHdkPyQRHwx3J0hDUt7V5b9','2018-04-19 22:01:24','2018-04-19 22:02:09'),
	(21,'Yann','y@gmail.com','default.jpg','default.jpg','Enseignant - IUT LENS','$2y$10$r53ojUcOJ/LyFkXZDcUm2OSpgCly3jfjoeLwgIy3UDurJjwRH8fKC',10,10,'WTKTXmb9V911l8rcCNnVLepLcroUiFr3fdkIJ9tmFCdRfvelrhIrGi0Lq7L3','2018-04-19 22:03:09','2018-04-19 22:03:45'),
	(22,'Eric','ee@gmail.com','default.jpg','default.jpg','IUT de Lens','$2y$10$zVYqvFcI2/HGZouidIDV5udseHTqzbfcu1cSjx2iVKp0g145uyhfS',10,10,'dolazaNCmC25fPu5wnrXUqFuba6nazF58XI9qvdTNr8ErIunlLyKxkhu9SCo','2018-04-19 22:04:15','2018-04-19 22:04:59');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
