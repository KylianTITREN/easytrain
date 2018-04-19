# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Hôte: localhost (MySQL 5.6.38)
# Base de données: easytrainDB
# Temps de génération: 2018-04-19 18:04:54 +0000
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
  `exercice_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



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
	(2,'Développé couché haltères','Le développé couché haltères est une variante du développé couché avec barre mais permet un mouvement plus naturel, une meilleure contraction des pectoraux et un plus grand étirement des muscles.','Dev-couché-haltère.png',3),
	(3,'Pompes au sol','Il existe plusieurs variantes de cet exercices mondialement connu. Il permet de travailler le haut du corps et principalement les pectoraux avec le poids du corps. Pour les débutants, il est possible de poser les genoux au sol. ','pompes.gif',3),
	(4,'Écarté couché haltères','Ce mouvement permet d’isoler les pectoraux afin d’améliorer le développement de ces derniers. Il peut se réaliser droit (centre des pectoraux) , incliné (haut des pectoraux) ou décliné (bas des pectoraux). ','écarté haltère.png',3),
	(5,'Dips','Cet exercice nécessite deux barres parallèles. Il permet de développer le haut du corps et plus précisément les pectoraux avec le poids du corps. \r\nAttention à ne pas descendre trop bas car il existe un risque de blessure. ','Dips.png',3),
	(6,'Butterfly','Idéal en fin de séance, le butterfly vient insoler la partie interne du pectoral. Il permet de progresser rapidement. Il s’agit de rapprocher au maximum les avant-bras. ','Butterfly.png',3),
	(7,'Développé incliné barres/haltères','Il s’agit du même exercice que le développé couché mais avec une inclinaison du bac. Plus le banc sera incliné, plus la partie haute des pectoraux sera isolée.','dev-incliné.png',3),
	(8,'Développé épaules','Aussi appelé développé haltères ou développé militaire, cet exercice sollicite énormément les épaules et indirectement les triceps. Il se réalise assis. Attention à garder le dos bien droit pour éviter les blessures. ','dev-nuque.png',4),
	(9,'Élévations latérales','Cet exercice assez douloureux permet d’isoler au maximum les épaules. Il est a pratiquer avec des charges relativement légères pour éviter les blessures. Vous risquez cependant d’avoir l’air d’un oiseau.','élévation latérale.png',4),
	(10,'Élévations frontales','Pour réaliser cet exercice, il suffit d’élever les bras devant soi jusqu’à ce qu’ils soient parallèles au sol. Attention à garder le corps bien droit et ne pas s’aider des lombaires. ','Elevation-frontal.png',4),
	(11,'Élévations buste penché','Ne vous inquiétez pas, le ridicule ne tue pas. Penchez-vous en avant, les jambes tendues et le dos bien droit et effectuez le même mouvement que les élévations latérales avec haltères. ','élévation-lat-buste-penche.png',4),
	(12,'Tirage menton','Aussi appelé Rowing menton, cet exercice consiste à amener les mains au niveau du menton tout en gardant les coudes levés. Il travaille les épaules mais aussi les trapèzes. ','Tirage-menton.png',4),
	(14,'Tractions','Tout le monde connait l’exercice des tractions. Il s’agit de tenir une barre dans les mains et de hisser les épaules de niveau de cette barre en ayant les pieds suspendus. Cet exercice au poids de corps est très difficile pour les personnes lourdes. ','Traction.png',5),
	(15,'Tirage nuque','Cet exercice est une variante des tractions. Il permet de réaliser le même mouvement mais avec un poids variable que l’on peut choisir sur la machine. Il faut faire passer la barre derrière la tête et la tirer jusqu’à la nuque. ','tirage-nuque.png',5),
	(16,'Tirage poitrine','Cet exercice est une variante des tractions. Il permet de réaliser le même mouvement mais avec un poids variable que l’on peut choisir sur la machine. Il faut faire passer la barre devant la tête et la tirer jusqu’à la poitrine.','tirage poitrine.png',5),
	(17,'Soulevé de Terre','Attention : faites vous aider la première fois que vous réalisez cet exercice car il nécessite une maîtrise du geste. ','soulevé de terre.png',5),
	(19,'Tirage assis','Assis, vous devez amener la barre au niveau de votre ventre. Attention à garder le dos bien droit pour éviter les blessures. ','Tirage-assis.png',5),
	(20,'Extensions au banc','Cet exercice permet de travailler les lombaires correctement. Si il s’avère trop simple pour vous, n’hésitez pas à prendre un poids dans vos bras. ','extensions-banc.png',6),
	(21,'Développé nuque','Il s’agit du même exercice que le développé militaire (ou développé épaule) mais cette fois-ci avec une barre à la place des haltères. ','dev-nuque.png',7),
	(25,'Haussements d’épaule','Avec des haltères dans chaque main ou avec une barre, effectuez des mouvements circulaires avec les épaules.','haussement-epaule.png',7),
	(26,'Curl barre','Cet exercice est le meilleur pour isoler les biceps. Attention aux charges trop lourdes qui peuvent blesser votre coude. Échauffez-vous correctement avant. ','curl-barre.png',8),
	(27,'Curl Haltères','Cet exercice est le meilleur pour isoler les biceps. Attention aux charges trop lourdes qui peuvent blesser votre coude. Échauffez-vous correctement avant. ','curl-barre.png',8),
	(28,'Curl pupitre','Cet exercice est le meilleur pour isoler les biceps. Attention aux charges trop lourdes qui peuvent blesser votre coude. Échauffez-vous correctement avant. ','curl-barre.png',8),
	(29,'Curl prise marteau','Cet exercice est le meilleur pour isoler les biceps. Attention aux charges trop lourdes qui peuvent blesser votre coude. Échauffez-vous correctement avant. ','curl-barre.png',8),
	(30,'Barre front','Pour débuter cet exercice, prenez une barre sans poids afin de bien appréhender le mouvement et ne pas être surpris par le poids; vous risquerez de faire tomber la barre sur votre visage. ','barre-au-front.png',9),
	(32,'Kick Back','Posez un genou sur le banc, prenez une haltère et effectuez le mouvement ci-dessous avec beaucoup de rigueur. ','kick-back.png',9),
	(33,'Extensions à la poulie','Avec une corde, disponible dans toutes les salles de sports, approchez vos mains de votre bassin et effectuez un mouvement d’écartement. ','ext-poulie.png',9),
	(34,'Flexion des poignets','Il s’agit de poser ses coudes sur un banc, de prendre la barre dans les mains et d’affection des flexions de poignets. Cet exercice isole parfaitement les avant-bras et vous rendra meilleur au bras de fer!','flexion-poignet.png',10),
	(35,'Crunch','Simple et efficace pour muscler les abdominaux, il faut tout de même pensez à ne pas trop courber le dos. ','crunch.png',11),
	(36,'Gainage','L\'exercice semble simple mais la vérité est tout autre. À réaliser au minimu 15 secondes pour que l\'exercice soit efficace. Pensez à garder le dos bien droit et les fesses bien levées.','',11),
	(37,'Crunch oblique','Simple et efficace pour muscler les abdominaux, il faut tout de même pensez à ne pas trop courber le dos. ','',11),
	(38,'Relevé de jambe','Idéal pour travailler le bas des abdos et le fameux V (les obliques), cet exercice est indispensable pour travailler correctement les abdos. Il faut l’effectuer en dernier. ','releve jambe.png',11),
	(39,'Squat','Attention : faites-vous aider lors de votre premier Squat! Il faut garder le dos bien droit et ressortir les fesses en arrière. ','',12),
	(40,'Leg extension','Il s’agit du même principe que pour les bras mais avec les machines adaptées aux jambes. Ne chargez pas trop la machine pour débuter et éviter les blessures. ','leg-extension.png',12),
	(41,'Presse','ATTENTION ! ! ! : Ne jamais tendre les jambes complètement!. ','presse.png',12),
	(42,'Fentes','Exercice de base en musculation, la fente avant est d’une efficacité redoutable pour raffermir les fesses et se sculpter de belles jambes galbées.','',12),
	(43,'Leg curl','Il s’agit du même principe que pour les bras mais avec les machines adaptées aux jambes. Ne chargez pas trop la machine pour débuter et éviter les blessures. ','leg curl.png',13),
	(44,'Soulevé de terre','Attention : faites vous aider la première fois que vous réalisez cet exercice car il nécessite une maîtrise du geste. ','soulevé de terre.png',13),
	(45,'Squat','Attention : faites-vous aider lors de votre premier Squat! Il faut garder le dos bien droit et ressortir les fesses en arrière. ','',14),
	(46,'Fentes sautées','Exercice de base en musculation, la fente avant est d’une efficacité redoutable pour raffermir les fesses et se sculpter de belles jambes galbées.','',14),
	(47,'Jumping jack','Exercice à consommer sans modération. Vous pouvez le réaliser chez vous sans aucun problème puisqu’il ne nécessite aucun matériel. ','',14),
	(48,'Squat','Attention : faites-vous aider lors de votre premier Squat! Il faut garder le dos bien droit et ressortir les fesses en arrière. ','',15),
	(49,'Soulevé de terre','Attention : faites vous aider la première fois que vous réalisez cet exercice car il nécessite une maîtrise du geste. ','soulevé de terre.png',15),
	(50,'Fentes','Exercice de base en musculation, la fente avant est d’une efficacité redoutable pour raffermir les fesses et se sculpter de belles jambes galbées.','',15),
	(51,'Fentes sautées','Exercice de base en musculation, la fente avant est d’une efficacité redoutable pour raffermir les fesses et se sculpter de belles jambes galbées.','',15),
	(52,'Mollets debout','Exercice très simple. Si il devient trop facile, augmentez le poids. ','mollet.png',16),
	(53,'Mollets assis','Exercice très simple. Si il devient trop facile, augmentez le poids.','mollet.png',16),
	(54,'Pompes prise serrée','Il existe plusieurs variantes de cet exercices mondialement connu. Il permet de travailler le haut du corps et principalement les pectoraux ainsi que les triceps avec le poids du corps. Pour les débutants, il est possible de poser les genoux au sol. ','',0);

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
	(8,26,'App\\Publication','LIKE',0,'2018-04-19 01:00:11','2018-04-19 08:11:59'),
	(9,14,'App\\Publication','LIKE',0,'2018-04-19 01:13:00','2018-04-19 08:11:57'),
	(10,37,'App\\Publication','LIKE',0,'2018-04-19 01:14:20','2018-04-19 18:02:07'),
	(11,2,'App\\Program','LIKE',1,'2018-04-19 01:20:12','2018-04-19 01:25:26'),
	(12,43,'App\\Publication','LIKE',0,'2018-04-19 17:23:30','2018-04-19 17:24:08');

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
	(40,2,'App\\Program',1,'LIKE','2018-04-19 01:25:26','2018-04-19 01:25:26');

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
	(7,'Triceps',''),
	(8,'Biceps',''),
	(9,'Trapèzes',''),
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
	(2,'Séche'),
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
  `cover` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `programme` (`id`, `nom`, `description`, `cover`, `durée`, `niveau`, `objectif`, `utilisateur_id`, `created_at`, `updated_at`)
VALUES
	(2,'Sèche - Confirmé','test de programme','',6,3,2,1,'2018-04-18 23:00:10','2018-04-18 22:49:07');

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
	(14,NULL,'Coucou','2018-04-17 08:34:03','2018-04-17 08:34:03',6),
	(26,NULL,'Jjvv','2018-04-17 08:50:34','2018-04-17 08:50:34',6),
	(37,NULL,'nouveau post','2018-04-19 01:14:18','2018-04-19 01:14:18',1);

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

LOCK TABLES `social_facebook_accounts` WRITE;
/*!40000 ALTER TABLE `social_facebook_accounts` DISABLE KEYS */;

INSERT INTO `social_facebook_accounts` (`user_id`, `provider_user_id`, `provider`, `created_at`, `updated_at`)
VALUES
	(5,'1974294939265969','facebook','2018-02-06 13:51:13','2018-02-06 13:51:13');

/*!40000 ALTER TABLE `social_facebook_accounts` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table suit
# ------------------------------------------------------------

DROP TABLE IF EXISTS `suit`;

CREATE TABLE `suit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `suiveur_id` int(11) NOT NULL,
  `suivi_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



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
	(1,'Kylian','kylian@gmail.com','1523993979.jpeg','1524061372.jpg','aka moustache','$2y$10$3jLwxvYxQaiZfNXX2oWhpO9BDTO8JI3jIW1Df154B6HtvOmkabEQq',1,3,'o142MQJP7MUPCnPT8rJgohMMB7XduJlHK7DrFD13GI7dbJ8590hGG82CTxai','2018-02-01 09:28:34','2018-04-18 15:01:41'),
	(2,'martin_mgnr','martin_mgnr@hotmail.com','1517486273.jpeg','1517486369.jpeg','','$2y$10$WwOCNtXnIVAxduAWM7AzDOlLv26bvaP7.HuxC2MclOAeQ.r2RG1MO',10,10,NULL,'2018-02-01 11:52:20','2018-02-01 11:59:40'),
	(3,'Zaky2fois','mokhtari.zak@gmail.com','1523953792.jpeg','default.jpg','izi train','$2y$10$8l5HsQZ0Y/2V.ByCwB6ax.IPKPIHvY0YdD1kMGbGQBlzG9LfZmbiq',2,3,'yn6KPiOgSkItMe2S77fya9Bjt0A8VdoPEXuAA4TM3XRHNCtLomTo2FDPl4ZC','2018-02-01 13:35:03','2018-04-17 10:05:13'),
	(5,'Kylian Titren','kyky.t@hotmail.fr','1517925091.jpg','default.jpg','','7610db9e380ba9775b3c215346184a87',10,10,'N4zF2d3fwzopoNUiB7rAEqN96sNXyi3xDNE5UKdagnJ6xGfPKn4Tv48nFvgH','2018-02-06 13:51:13','2018-02-06 13:51:32'),
	(6,'Martin','martin@hotmail.com','1523955003.jpeg','default.jpg','Étudiant en DUT MMI','$2y$10$McFEOQtic/hQmb7Wv/8ic.c14XB/5J5bNVJwDCDfu/kJCR9gMv5nO',1,1,NULL,'2018-04-17 08:33:01','2018-04-17 08:50:03'),
	(7,'Mous','kyky@gmail.com','default.jpg','default.jpg',NULL,'$2y$10$0UKTbVnlZ63tx0JfuYTHXOdIVNs6mIiE75OO6bY.aUiKL4MdfUF02',2,1,'Xp3JEv2Li0yaqTSGtQ74Of7YpalGPIV9iFnlhJxj3WNQxccJJxDJmn13aKpl','2018-04-17 10:01:37','2018-04-17 10:01:37'),
	(8,'kajcu','kyy@gmail.com','default.jpg','default.jpg',NULL,'$2y$10$A20/dEy1bGku/yX7Qec8UuN36xuQ5xebgscvft0yMtFPkwCDyN1sC',1,2,'lOCzywcqaNUhsCuCwyeleYBUMTFzZV5PhJ4WhygQ2APDCsrgsaMgwrtFpXNM','2018-04-17 10:16:23','2018-04-17 10:16:23'),
	(9,'Julien','julien.fovelle62@gmail.com','1523961025.jpg','1523961026.jpg',NULL,'$2y$10$JIOePMBiV4BlGf41A1qJcOdZssOuoYhzSRBgiTXyG6JWWWjPcaVl.',2,1,'kDvjOramW2c1pAut9i4ESf9swBIQsXmOe7ZaHetCdx4Jf9htB2Wa1u5hyQkI','2018-04-17 10:22:51','2018-04-17 10:30:26');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
