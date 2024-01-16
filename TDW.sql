-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 16 jan. 2024 à 09:09
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `comparateur_vehicules`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis_marque`
--

CREATE TABLE `avis_marque` (
  `avis_marque_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `marque_id` int(11) NOT NULL,
  `valide` int(11) NOT NULL DEFAULT 0,
  `note` int(11) NOT NULL,
  `avis` text NOT NULL,
  `appreciation` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `avis_marque`
--

INSERT INTO `avis_marque` (`avis_marque_id`, `user_id`, `marque_id`, `valide`, `note`, `avis`, `appreciation`) VALUES
(1, 1, 1, 1, 5, 'Avis sur mercedes ', 23),
(2, 1, 2, 1, 5, 'Avis sur porsche ', 19),
(3, 1, 3, 1, 5, 'Avis sur ford ', 19),
(4, 1, 4, 1, 5, 'Avis sur toyota ', 21),
(7, 1, 2, 1, 5, 'Avis sur porsche ', 19),
(8, 1, 3, 1, 5, 'Avis sur ford ', 19),
(9, 1, 4, 1, 5, 'Avis sur toyota ', 19),
(12, 1, 5, 1, 4, 'tres satisfait de la marque', 13),
(13, 1, 3, 0, 4, 'bien bien', 0),
(14, 1, 3, 0, 4, 'mon avis la', 0),
(15, 1, 3, 0, 4, 'mon avis oui', 0),
(17, 1, 1, 1, 2, 'avis ', 3),
(18, 1, 1, 0, 2, 'knkjnsadkjndkjdn', 0),
(19, 1, 1, 1, 4, 'asxksajxkajcbksjbksqwjib', 0),
(24, 1, 1, 1, 4, 'nice', 1);

-- --------------------------------------------------------

--
-- Structure de la table `avis_vehicule`
--

CREATE TABLE `avis_vehicule` (
  `avis_vehicule_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vehicule_id` int(11) NOT NULL,
  `valide` int(11) NOT NULL DEFAULT 0,
  `note` int(11) NOT NULL,
  `avis` text NOT NULL,
  `appreciation` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `avis_vehicule`
--

INSERT INTO `avis_vehicule` (`avis_vehicule_id`, `user_id`, `vehicule_id`, `valide`, `note`, `avis`, `appreciation`) VALUES
(17, 1, 1, 1, 5, 'tres bon vehicule', 26),
(18, 1, 2, 1, 5, 'tres bon vehicule', 10),
(20, 1, 4, 1, 5, 'tres bon vehicule', 10),
(21, 1, 5, 1, 5, 'tres bon vehicule', 10),
(22, 1, 6, 1, 5, 'vehicule tres rapide', 10),
(23, 1, 7, 1, 5, 'vehicule tres rapide', 10),
(24, 1, 8, 1, 5, 'vehicule tres rapide', 10),
(25, 1, 9, 1, 5, 'vehicule tres rapide', 10),
(26, 1, 10, 1, 5, 'vehicule tres rapide', 10),
(27, 1, 11, 1, 5, 'vehicule performant', 10),
(28, 1, 12, 1, 5, 'vehicule performant', 10),
(29, 1, 13, 1, 5, 'vehicule performant', 10),
(30, 1, 14, 1, 5, 'vehicule performant', 10),
(31, 1, 15, 1, 5, 'vehicule performant', 10),
(32, 1, 16, 1, 5, 'vehicule performant', 10),
(33, 1, 17, 1, 5, 'vehicule fiable', 10),
(34, 1, 18, 1, 5, 'vehicule fiable', 10),
(35, 1, 19, 1, 5, 'vehicule fiable', 11),
(36, 1, 20, 1, 5, 'vehicule fiable', 10),
(42, 1, 1, 1, 5, 'Très satisfait de ce véhicule, performances exceptionnelles et confort optimal.', 14),
(43, 1, 2, 1, 5, 'Véhicule de grande qualité, agréable à conduire et économique.', 10),
(44, 1, 3, 1, 5, 'Excellent choix, ce véhicule répond parfaitement à mes attentes.', 10),
(45, 1, 4, 1, 5, 'Très content de mon acquisition, le véhicule est fiable et performant.', 10),
(46, 1, 5, 1, 5, 'Avis très positif, le véhicule est à la hauteur de mes attentes.', 10),
(47, 1, 6, 1, 5, 'Ce véhicule est incroyablement rapide, une expérience de conduite exceptionnelle.', 10),
(48, 1, 7, 1, 5, 'Rapidité et performance.', 11),
(49, 1, 8, 1, 5, 'Conduite agréable et rapide.', 10),
(50, 1, 9, 1, 5, 'Véhicule rapide et fiable.', 10),
(51, 1, 10, 1, 5, 'Excellente performance et fiabilité.', 10),
(52, 1, 11, 1, 5, 'Véhicule très performant, un plaisir à conduire.', 10),
(53, 1, 12, 1, 5, 'Performances exceptionnelles, un investissement qui en vaut la peine.', 10),
(54, 1, 13, 1, 5, 'Véhicule performant et fiable, je suis pleinement satisfait.', 10),
(55, 1, 14, 1, 5, 'Excellent choix, ce véhicule répond à toutes mes attentes.', 10),
(56, 1, 15, 1, 5, 'Véhicule performant et confortable, une expérience de conduite exceptionnelle.', 10),
(57, 1, 16, 1, 5, 'Très satisfait de mon choix, ce véhicule allie performance et fiabilité.', 10),
(58, 1, 17, 1, 5, 'Véhicule fiable et économique, je le recommande.', 10),
(59, 1, 18, 1, 5, 'Excellente fiabilité, un choix sûr et satisfaisant.', 10),
(60, 1, 19, 1, 5, 'Véhicule fiable et pratique, je suis très content de mon achat.', 10),
(61, 1, 20, 1, 5, 'Très satisfait de la fiabilité de ce véhicule.', 10),
(67, 1, 22, 1, 4, 'tres belle voitutre et tres pratique', 22),
(68, 1, 22, 1, 4, 'tres belle voitutre', 22),
(69, 1, 21, 1, 4, 'tres bonnes performances', 22),
(70, 1, 23, 1, 4, 'voiture fiable', 22),
(71, 1, 25, 1, 4, 'tres spacieuse', 22),
(72, 1, 24, 1, 4, 'bonne consommation', 22),
(73, 1, 1, 1, 0, 'meilleur vehicule', 1),
(75, 1, 1, 0, 4, 'hiaxa', 0),
(76, 1, 13, 0, 3, 'avis mustang', 0),
(77, 1, 13, 0, 1, 'ijijij', 0),
(80, 1, 13, 0, 5, 'hiiiiiiiiii', 0),
(81, 1, 3, 0, 5, 'avis', 0),
(82, 1, 3, 0, 4, 'kj', 0),
(86, 1, 25, 0, 5, 'hi', 0),
(87, 1, 25, 0, 2, 'j', 0),
(88, 1, 3, 0, 2, 'mi', 0);

-- --------------------------------------------------------

--
-- Structure de la table `comparaison`
--

CREATE TABLE `comparaison` (
  `comparaison_id` int(11) NOT NULL,
  `vehicule_1_id` int(11) NOT NULL,
  `vehicule_2_id` int(11) NOT NULL,
  `nb_recherche` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `comparaison`
--

INSERT INTO `comparaison` (`comparaison_id`, `vehicule_1_id`, `vehicule_2_id`, `nb_recherche`) VALUES
(1, 1, 2, 3),
(2, 2, 3, 3),
(3, 3, 4, 2),
(4, 4, 1, 2),
(5, 1, 3, 3),
(6, 2, 4, 2),
(7, 3, 5, 1),
(8, 5, 1, 1),
(9, 2, 5, 10),
(10, 1, 13, 1),
(11, 13, 14, 1),
(12, 14, 19, 1),
(13, 19, 1, 1),
(14, 1, 14, 1),
(15, 13, 19, 1),
(16, 5, 8, 11),
(17, 8, 7, 1),
(18, 7, 2, 1),
(19, 2, 8, 9),
(20, 5, 7, 1),
(21, 8, 25, 7),
(22, 25, 2, 7),
(23, 5, 25, 7),
(24, 3, 8, 3);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`contact_id`, `nom`, `prenom`, `email`) VALUES
(1, 'Talbi1', 'Houssem1', 'kh_talbi1@esi.dz'),
(3, 'Talbi2', 'Houssem2', 'kh_talbi2@esi.dz'),
(6, 'akcbskdbqw', 'qefewfbewiuf', '0000000000c@wekfbewk.com');

-- --------------------------------------------------------

--
-- Structure de la table `guide_achat`
--

CREATE TABLE `guide_achat` (
  `guide_achat_id` int(11) NOT NULL,
  `vehicule_id` int(11) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`image_id`, `image_path`) VALUES
(1, 'http://localhost/cars_website_scratch_version/public/assets/images/news_1.jpg'),
(2, 'http://localhost/cars_website_scratch_version/public/assets/images/news_2.jpg'),
(3, 'http://localhost/cars_website_scratch_version/public/assets/images/news_3.jpg'),
(4, 'http://localhost/cars_website_scratch_version/public/assets/images/pub_1.jpg'),
(5, 'http://localhost/cars_website_scratch_version/public/assets/images/pub_2.jpg'),
(6, 'http://localhost/cars_website_scratch_version/public/assets/images/pub_3.jpg'),
(7, 'http://localhost/cars_website_scratch_version/public/assets/images/ford-logo.svg'),
(8, 'http://localhost/cars_website_scratch_version/public/assets/images/volkswagen-logo.svg'),
(9, 'http://localhost/cars_website_scratch_version/public/assets/images/mercedes-logo.svg'),
(10, 'http://localhost/cars_website_scratch_version/public/assets/images/porsche-logo.svg'),
(11, 'http://localhost/cars_website_scratch_version/public/assets/images/toyota-logo.svg'),
(16, 'http://localhost/cars_website_scratch_version/public/assets/images/gls.jpg'),
(17, 'http://localhost/cars_website_scratch_version/public/assets/images/classS.jpg'),
(18, 'http://localhost/cars_website_scratch_version/public/assets/images/gle.jpg'),
(19, 'http://localhost/cars_website_scratch_version/public/assets/images/glc.jpg'),
(20, 'http://localhost/cars_website_scratch_version/public/assets/images/classE.jpg'),
(25, 'http://localhost/cars_website_scratch_version/public/assets/images/911.jpg'),
(26, 'http://localhost/cars_website_scratch_version/public/assets/images/cayenne.jpg'),
(27, 'http://localhost/cars_website_scratch_version/public/assets/images/macan.jpg'),
(28, 'http://localhost/cars_website_scratch_version/public/assets/images/panamera.jpg'),
(29, 'http://localhost/cars_website_scratch_version/public/assets/images/taycan.jpg'),
(30, 'http://localhost/cars_website_scratch_version/public/assets/images/focus.jpg'),
(31, 'http://localhost/cars_website_scratch_version/public/assets/images/fiesta.jpg'),
(32, 'http://localhost/cars_website_scratch_version/public/assets/images/bronco.jpg'),
(33, 'http://localhost/cars_website_scratch_version/public/assets/images/mustang.jpg'),
(34, 'http://localhost/cars_website_scratch_version/public/assets/images/kuga.jpg'),
(35, 'http://localhost/cars_website_scratch_version/public/assets/images/yaris.jpg'),
(36, 'http://localhost/cars_website_scratch_version/public/assets/images/corolla.jpg'),
(37, 'http://localhost/cars_website_scratch_version/public/assets/images/prius.jpg'),
(38, 'http://localhost/cars_website_scratch_version/public/assets/images/rav4.jpg'),
(39, 'http://localhost/cars_website_scratch_version/public/assets/images/hilux.jpg'),
(40, 'http://localhost/cars_website_scratch_version/public/assets/images/polo.jpg'),
(41, 'http://localhost/cars_website_scratch_version/public/assets/images/golf.jpg'),
(42, 'http://localhost/cars_website_scratch_version/public/assets/images/touareg.jpg'),
(43, 'http://localhost/cars_website_scratch_version/public/assets/images/tiguan.jpg'),
(44, 'http://localhost/cars_website_scratch_version/public/assets/images/passat.jpg'),
(46, 'http://localhost/cars_website_scratch_version/public/assets/images/ford-logo.svg'),
(47, 'http://localhost/cars_website_scratch_version/public/assets/images/audi-logo.svg'),
(48, 'http://localhost/cars_website_scratch_version/public/assets/images/audi-logo.svg'),
(49, 'http://localhost/cars_website_scratch_version/public/assets/images/rs7.jpg'),
(50, 'http://localhost/cars_website_scratch_version/public/assets/images/rs7.jpg'),
(51, 'http://localhost/cars_website_scratch_version/public/assets/images/rs7.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `images_association_marque`
--

CREATE TABLE `images_association_marque` (
  `images_association_marque_id` int(11) NOT NULL,
  `marque_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `images_association_marque`
--

INSERT INTO `images_association_marque` (`images_association_marque_id`, `marque_id`, `image_id`) VALUES
(1, 3, 7),
(2, 1, 9),
(3, 2, 10),
(4, 4, 11),
(6, 5, 8);

-- --------------------------------------------------------

--
-- Structure de la table `images_association_news`
--

CREATE TABLE `images_association_news` (
  `images_association_news_id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `images_association_news`
--

INSERT INTO `images_association_news` (`images_association_news_id`, `news_id`, `image_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `images_association_publicite`
--

CREATE TABLE `images_association_publicite` (
  `images_association_publicite_id` int(11) NOT NULL,
  `pub_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `images_association_publicite`
--

INSERT INTO `images_association_publicite` (`images_association_publicite_id`, `pub_id`, `image_id`) VALUES
(1, 1, 4),
(2, 2, 5),
(3, 3, 6);

-- --------------------------------------------------------

--
-- Structure de la table `images_association_vehicule`
--

CREATE TABLE `images_association_vehicule` (
  `images_association_vehicule_id` int(11) NOT NULL,
  `vehicule_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `images_association_vehicule`
--

INSERT INTO `images_association_vehicule` (`images_association_vehicule_id`, `vehicule_id`, `image_id`) VALUES
(3, 1, 16),
(4, 4, 17),
(5, 2, 18),
(6, 3, 19),
(7, 5, 20),
(8, 8, 25),
(9, 6, 26),
(10, 7, 27),
(11, 9, 28),
(12, 10, 29),
(13, 11, 30),
(14, 12, 31),
(15, 15, 32),
(16, 13, 33),
(17, 14, 34),
(18, 16, 35),
(19, 17, 36),
(20, 18, 37),
(21, 20, 38),
(22, 19, 39),
(28, 23, 44),
(29, 24, 43),
(30, 25, 42),
(31, 21, 41),
(32, 22, 40);

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE `marque` (
  `marque_id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `pays_origine` varchar(255) NOT NULL,
  `siege_social` varchar(255) NOT NULL,
  `annee_creation` date NOT NULL,
  `description` text NOT NULL,
  `note` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`marque_id`, `nom`, `pays_origine`, `siege_social`, `annee_creation`, `description`, `note`) VALUES
(1, 'Mercedes', 'allmagne', 'Stuttgart', '1926-01-01', 'Mercedes-Benz est une marque de luxe allemande réputée pour ses véhicules haut de gamme, son design élégant et ses performances exceptionnelles. Fondée en 1926, la marque est synonyme d\'innovation technologique, de qualité de construction et de confort.', 3.75),
(2, 'Porsche', 'allmagne', 'Stuttgart', '1931-01-01', 'Porsche est une marque automobile allemande spécialisée dans la fabrication de voitures de sport et de luxe. Fondée en 1931, Porsche est célèbre pour ses modèles emblématiques tels que la Porsche 911. La marque est associée à des performances sportives et à un design distinctif.', 0),
(3, 'Ford', 'usa', 'Michigan', '1903-01-01', 'Ford est un constructeur automobile américain emblématique, fondé par Henry Ford en 1903. La marque est connue pour avoir popularisé la production de masse de voitures. Ford propose une variété de véhicules, des camions aux voitures de sport, et est reconnu pour son héritage dans l\'industrie automobile américaine.', 5),
(4, 'Toyota', 'japon', 'Toyota City', '1937-01-01', 'Toyota est un fabricant automobile japonais renommé pour sa fiabilité, son innovation et son engagement envers l\'efficacité énergétique. Fondée en 1937, Toyota est l\'un des plus grands constructeurs automobiles au monde. La marque offre une large gamme de véhicules, des voitures compactes aux SUV et aux véhicules hybrides.', 0),
(5, 'Volkswagen', 'Allemagne', 'Allemagne', '1937-01-01', 'Volkswagen, souvent abrégé VW, est un constructeur automobile allemand fondé en 1937. La marque est réputée pour ses voitures compactes, ses berlines et ses SUV. Volkswagen est l\'un des plus grands fabricants automobiles au monde et possède un large éventail de modèles, allant de la populaire Golf à des véhicules électriques comme la Volkswagen ID.3', 0);

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `news` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`news_id`, `title`, `date`, `news`) VALUES
(1, 'Avant/après : tout savoir sur le restylage du Volkswagen Tiguan II', '2023-01-01', 'Le Tiguan est un gros morceau dans la gamme Volkswagen. En l’espace d’une seule génération, il a su s’imposer et devenir le pendant SUV de la Golf. Pas mal ! Après la Golf, justement, c’est le modèle qui a généré le plus de revenus à la marque.\r\n\r\nPour sa seconde génération, le but est de réitérer l’exploit, pas si simple dans un segment ultra-concurrentiel. Il est ainsi le premier SUV à étrenner la plateforme MQB afin d’être plus grand (+ 6 cm) tout en étant plus léger (- 60 kg). Il n’y a pas que ses dessous qui sont inédits puisque ses lignes évoluent nettement. Toujours sobre et classique, le look du deuxième Tiguan se muscle et devient plus « strict », un effet dû aux nombreux plis de carrosserie (capot, flanc, hayon…) et aux éléments rectilignes (optiques, calandre…). Un traitement que l’on retrouve dans l’habitacle. Tous les goûts sont dans la nature, mais son but est de rassurer avec une impression de solidité.\r\n\r\nComme pour le premier opus, Volkswagen réussit à proposer un excellent rapport encombrement/habitabilité. En plus d’offrir de l’espace pour tous les passagers et leurs bagages sans oublier les multiples espaces de rangement, le Tiguan n’en oublie pas d’être modulable. Banquette coulissante en deux parties, dossiers inclinables et plancher de coffre amovible, tous les SUV n\'en font pas autant.\r\n\r\nLors de sa sortie en mai 2016, le Tiguan s’articule autour de quatre finitions : Trendline, Confortline, Carat et Carat Edition. Le premier niveau embarque l’essentiel avec la climatisation, le régulateur de vitesse, le détecteur de fatigue, le freinage d’urgence automatique, l’aide au maintien dans la voie ou encore les feux arrière à LED. Le deuxième propose un bon rapport prix/équipement avec les radars de stationnement avant et arrière, la climatisation automatique, l’écran multimédia de huit pouces, la banquette coulissante, les barres de toit… La troisième finition Carat devient « techno » grâce à la lecture des panneaux, les compteurs numériques, le régulateur de vitesse adaptatif, les projecteurs à LED ou encore la navigation. Enfin, la Carat Edition complète l’ensemble avec le détecteur d’angle mort, la navigation, le hayon automatique…\r\n\r\nSous le capot, le choix est large avec pas moins de trois offres en essence et quatre en diesel. Officient ainsi le 1.4 TSI de 125 et 150 ch (4x2 et 4x4 pour ce dernier) et le 2.0 TSI de 180 ch (4x2 et 4x4). En diesel, on retrouve le 2.0 TDI de 115 ch, la variante de 150 ch (4x2 et 4x4) ainsi que celle de 190 ch (uniquement en 4x4). C’est en août 2016 qu’apparaît le 2.0 BiTDI de 240 ch.\r\n\r\nEn février 2016, il est possible d’opter pour un Tiguan au look sportif avec le pack R-Line qui comprend la sellerie cuir, le volant sport, les boucliers spécifiques ou encore les jantes de 19 pouces.\r\n\r\nLe Tiguan profite d’une série spéciale Sound dès avril 2017 avec, en plus du niveau Confortline, des jantes de 17 pouces spécifiques, des projecteurs à LED, un système d’infodivertissement et de navigation Discover Media, des rails de toit chromés et un pack Sound qui comprend des tapis de sol, seuils de portes et sellerie spécifiques, un pédalier en aluminium brossé et des badges « Sound ».\r\n\r\nAfin de cibler les familles nombreuses, une déclinaison plus longue de 21 cm est lancée en décembre 2017, la Allspace. Son principal intérêt réside dans sa capacité à embarquer jusqu’à sept passagers. Il est lancé en septembre 2017 et se prive des moteurs les moins puissants (1.4 TSI de 125 ch et 2.0 TDI de 115 ch).\r\n\r\nUn an après le lancement de la série Sound, cette dernière est remplacée par la Connect qui se distingue par sa navigation avec un écran tactile de huit pouces. Cette dernière profite des services connectés comme l’info trafic, la recherche de parking ou la météo.\r\n\r\nFin 2019, Volkswagen nous refait le coup de la série Match, très en vogue dans les années 90. Elle est ici basée sur le haut de gamme Carat auquel s’ajoute la surveillance d’angle mort, l’assistant de sortie de stationnement et le hayon électrique. En revanche, le toit ouvrant passe à la trappe.\r\n\r\nEn l’espace de quatre ans, le Tiguan est devenu le modèle le plus vendu de la marque au niveau mondial. L’enjeu est donc de taille, et comme à son habitude Volkswagen joue la prudence. À l’avant, optiques, calandre et bouclier sont redessinés, tandis qu’à l’arrière, le lettrage « Tiguan » s’inscrit en grand sur le hayon et le graphisme des feux évolue.\r\n\r\nDans l’habitacle, le système multimédia est revu, les commandes de climatisation deviennent plus modernes et l’équipement est enrichi. Apple CarPlay et Android Auto sans fil, conduite autonome de niveau 2, projecteurs à LED matricielles… le Tiguan se met à jour. Il en profite également pour revoir les noms des finitions : Tiguan, Life, Elegance et R-Line.\r\n\r\nSous le capot, l’heure est à l’électrification avec l’eHybrid (hybride rechargeable) fort de 245 ch et capable de parcourir 50 km sans brûler une goutte d’essence.\r\n\r\nEn septembre dernier (2023), la série Match est à nouveau proposée sur le Tiguan. Elle est désormais basée sur le niveau Life Plus en offrant les jantes de 18 pouces, l’accès et le démarrage sans clé, le hayon main-libre, la climatisation à trois zones, la navigation, le toit ouvrant, ou encore le chargeur par induction. Ce deuxième opus de la Match se révèle plus intéressant.\r\n\r\nCette génération de Tiguan vit ses derniers instants puisque les premières livraisons du nouveau venu interviendront au premier trimestre 2024.'),
(2, 'Enquête - Ce qui attend les automobilistes en 2024', '2023-12-15', 'La promesse d’Emmanuel Macron de « voiture électrique à 100 € par mois » pour les foyers les plus modestes est enfin une réalité. Une dizaine de voitures des groupes Stellantis et Renault sont ainsi éligibles à cette offre, qui concerne les foyers dont le revenu fiscal par part est inférieur à 15 400 € et se voit réservé, dans un premier temps du moins, aux salariés habitant à plus de 15 km de leur lieu de travail (ou qui parcourent plus de 8 000 km par an pour des raisons professionnelles).\r\nLes pouvoirs publics estiment qu’environ 20 000 voitures seront immatriculées cette année par le biais de ce système, qui pourrait s’élargir par la suite.\r\n\r\nBordeaux, Toulouse ou Rouen ont ainsi décidé d’en assouplir les critères, et il y a toutes les chances que Marseille, où 31% du parc roulant se verrait interdit d’accès à la ZFE-m si les règles y étaient strictement appliquées, suive une voie comparable.\r\n\r\nMais l’un des enjeux importants est maintenant l’essor de la recharge en copropriété, qui prend du temps. Rappelons à ce propos les propos tenus par Clément Molizon, délégué général de l’Avere-France, dans une interview accordée à Caradisiac : « La clé est le syndic ou le conseil syndical. Quand on est porteur d’un projet, l’important est d’aller chercher les autres propriétaires ou locataires désireux de passer à l’électrique. Il y a des bonnes pratiques un peu simples comme mettre un papier dans la cage d’escalier ou d’ascenseur pour voir qui peut être intéressé à 2, 3 voire 5 ans. Le but est d’arriver à faire de la recharge un sujet prioritaire au cœur de la copropriété pour avancer.'),
(3, 'Convertir son vieux diesel au GPL pour passer en Crit\'Air 1 : vraie ou fausse bonne idée ?', '2023-12-13', 'Dès vendredi dernier 8 décembre, Pierre Chasseray, délégué général de l\'association 40 millions d\'automobilistes, envoyait à la presse un communiqué annonçant : \"Clap de fin pour les zones à faibles émissions\", et renvoyant au lundi suivant pour connaître comment cela serait possible.\r\n\r\nLundi matin, 11h52, un nouveau communiqué tombait, pour présenter la solution \"miracle\" : la possibilité pour tous les véhicules diesels de bénéficier d\'une conversion à la bicarburation gazole/GPL, autorisant l\'obtention de la vignette Crit\'Air 1. Un sésame permettant de s\'affranchir des restrictions de circulation dans les ZFE, ou futures ZFE. Sous-entendu : comme on peut potentiellement passer tous les véhicules au GPL, et donc être tous en vignette Crit\'Air 1, les ZFE deviennent inutiles... Incroyable.\r\n\r\nIls ont même converti au GPL une ancienne Volkswagen New Beetle diesel, Crit\'Air 3 donc selon eux \"interdite de circulation dans les ZFE\". À l’avenir peut-être, car à date, aucune ZFE n\'interdit les vignettes Crit\'Air 3 avant septembre 2024, plus souvent janvier 2025... Mais soit.\r\n\r\nC\'est donc séduisant sur le papier, c\'est vrai. Mais possible techniquement ? Contre toute attente, c\'est vrai aussi. Mais faut-il pour autant se précipiter sur cette solution \"miracle\" ? C\'est à voir. Car c\'est loin d\'être gratuit, nous le verrons.\r\n\r\nQui est concerné ?\r\nEn France, 53 % du parc roulant est composé de véhicules diesels (chiffres de janvier 2023). Ce sont eux qui sont concernés en priorité par les restrictions de circulation. En effet, aucun n\'est éligible à la vignette Crit\'Air 1. Cela représente grosso modo 20,6 millions de voitures sur les 38,9 millions en circulation. 40 millions d\'automobilistes parle de 18 millions de diesels concernés.\r\n\r\nConvertir son vieux diesel au GPL pour passer en Crit\'Air 1 : vraie ou fausse bonne idée ?\r\nLes modèles diesels depuis le 1er janvier 2011 (ou Euro 5 et 6) sont éligibles à la Crit\'Air 2. Les diesels entre le 1er janvier 2006 et le 31 décembre 2010 sont Crit\'Air 3 (Euro 4). Entre le 1er janvier 2001 et le 31 décembre 2005, on est en Crit\'Air 4 (Euro 3), et enfin du 1er janvier 1997 au 31 décembre 2000, c\'est la Crit\'Air 5 (Euro 2) qui s\'applique. Avant cela, les véhicules essence comme diesel sont sans vignette.\r\n\r\nSur l\'ensemble des véhicules en circulation (essence, diesels, hybrides, électriques, etc.), les vignettes Crit\'Air sont ainsi réparties (chiffres au 1er janvier 2023) :\r\n\r\n- Vignette verte (électriques et hydrogène) : 1,5 %\r\n\r\n- Crit\'Air 1 : 30,5 %\r\n\r\n- Crit\'Air 2 : 36,3 %\r\n\r\n- Crit\'Air 3 : 20,9 %\r\n\r\n- Crit\'Air 4 : 6,6 %\r\n\r\n- Crit\'Air 5 et non classés : 4,2 %\r\n\r\nSans pouvoir croiser les données, il est difficile de donner un chiffre exact de la proportion de diesels dans chaque catégorie de vignette. On sait juste que les Crit\'Air 1 ne sont que des essence, et que les Crit\'Air 4 et 5 sont des diesels à 100 %. Et en 2019, 88 % des Crit\'Air 2 étaient des diesels, et 76 % des Crit\'Air 3 étaient des diesels (ce sont les derniers chiffres disponibles). Les proportions ont bien sûr évolué depuis, mais c\'est pour donner une idée.\r\n\r\n \r\nLes restrictions de circulation aujourd\'hui\r\nNon, tous les diesels ne sont pas menacés de ne plus pouvoir circuler à court terme ! C\'est agiter un bel épouvantail que de le faire croire.\r\n\r\nÀ date, il existe 11 zones de faibles émissions actives en France. Il est prévu qu\'il y en ait 43 au 1er janvier 2025, mais toutes les municipalités freinent des quatre fers pour repousser la mise en place, ou la rendre peu contraignante.\r\n\r\nConvertir son vieux diesel au GPL pour passer en Crit\'Air 1 : vraie ou fausse bonne idée ?\r\nToutes interdisent déjà la circulation des sans vignettes, en semaine, de 8h à 20h (hors jours fériés). Certaines seulement les vignettes 4 et 5. Et aucune n\'a encore interdit les vignettes 3, 2 ou 1. Même Paris, ou Aix-Marseille Provence, les plus \"sévères\", ont repoussé l\'interdiction des Crit\'Air 3 à septembre 2024 ou janvier 2025. \r\n\r\nDonc aujourd\'hui, tous les diesels Crit\'Air 3 ou 2 peuvent circuler, et ce jusqu\'au moins septembre 2024, plus souvent janvier 2025 pour les Crit\'Air 3. Les diesels interdits représentent donc seulement un peu plus de 10,8 % du parc roulant. Et seulement dans les ZFE, cela s\'entend. Partout ailleurs, pas de restrictions.\r\n\r\nEt les interdictions pour les vignettes Crit\'Air 2 sont prévues au plus tôt pour 2028, voire pas prévues du tout !\r\n\r\nDonc pas vraiment de raison de faire peur à tout le monde, et conseiller de transformer son diesel au GPL sans tarder...\r\n\r\n \r\n\r\nUne solution proposée par \"Rétrogaz\"\r\nConvertir son vieux diesel au GPL pour passer en Crit\'Air 1 : vraie ou fausse bonne idée ?\r\nCela dit, le système présenté ce lundi n\'est pas sans intérêt pour autant. Cette \"solution\" est présentée conjointement par l\'Association 40 millions d\'automobilistes et l\'entreprise baptisée \"Rétrogaz\" (by Greenolis). Cette entreprise se présente comme spécialisée dans la transformation des véhicules diesels en véhicule à bicarburation gazole/GPL.\r\n\r\nElle a été créée en 2020 par Iphigénie Kameni et Patrick Herbault, deux anciens cadres de PSA (devenu Stellantis après la fusion avec FCA), l\'une était directrice projet du groupe jusqu\'en 2016, l\'autre directeur de l\'entité recherche et développement jusqu\'en 2015. Pas des rigolos donc. \r\n\r\nIls se proposent de \"verdir le parc automobile\", essentiellement en transformant des vieux diesels pour fonctionner au GPL, donc.\r\n\r\nMais comment ? Car techniquement, cela semble (semblait) impossible. Or une entreprise italienne, Autogas Italia, propose déjà la conversion. Rétrogaz semble d\'ailleurs se fournir en pièces via une entreprise italienne. Nous faisons un rapprochement, peut-être hasardeux.\r\n\r\nComment ça marche ?\r\nComme pour une conversion de modèle essence au GPL, possible depuis toujours, la transformation consiste en l\'adjonction d\'un réservoir de GPL, d\'un circuit de distribution du gaz, d\'injecteurs spécifiques, d\'un système de gestion électronique du système et d\'un interrupteur pour passer d\'un carburant à l\'autre.\r\n\r\nLa différence se situe au niveau de la proportion de carburant injecté. Quand on transforme une essence au GPL, on peut injecter 100 % de GPL, car il y a une bougie pour enflammer le mélange.\r\n\r\nConvertir son vieux diesel au GPL pour passer en Crit\'Air 1 : vraie ou fausse bonne idée ?\r\nAvec un moteur diesel, pas de bougies d\'allumage, par définition. Comment faire donc pour enflammer le mélange ? La solution de Rétrogaz (et des autres entreprises qui pratiquent la transformation !), est de conserver une proportion de 40 % de gazole dans le mélange, pour 60 % de GPL. Le gazole restant permet d\'enflammer le mélange par autocombustion (taux de compression élevé). C\'est le système de gestion électronique qui gère la proportion exacte de gazole et de GPL à injecter pour que ça fonctionne. Voilà schématiquement.\r\n\r\nTous les diesels sont-ils concernés ?\r\nRétrogaz indique que la conversion est possible pour TOUS les diesels du marché. Anciens, récents, injection indirecte, injection directe, injection directe très haute pression sont donc potentiellement éligibles.\r\n\r\nMais selon toute vraisemblance, la conversion des diesels à injection directe haute pression sera plus compliquée. Et donc sans aucun doute plus chère. Car nous en arrivons au prix.\r\n\r\nCombien ça coûte ?\r\nRétrogaz indique dans le communiqué un prix moyen de transformation de 3 000 €. C\'est un budget non négligeable. Qu\'il faudra réussir à rentabiliser.\r\n\r\nEt qu\'il faudra déjà réussir à sortir de son portefeuille ! Le communiqué conjoint de 40 millions d\'automobilistes et de Rétrogaz le dit lui-meme : certains ménages qui roulent en vieux diesel \"n\'ont pas un euro\" à mettre dans une nouvelle voiture. Alors 3 000 € pour monter un kit de conversion ? Pas sûr...\r\n\r\nD\'autant plus s\'il faut le monter sur un diesel de 200 000 km, voire plus, qui ne vaut plus grand-chose. Et sachant qu\'il faudra encore plusieurs années pour rentabiliser le prix du kit de conversion (voir plus loin)... Il faut bien faire ses comptes !\r\n\r\nD\'autant qu\'on trouve, sur les sites de petites annonces, des modèles Crit\'Air 1 à partir de 3 000 €, justement. Ils auront certes souvent beaucoup de kilomètres. Mais on trouve des \"moins de 100 000 km\" à partir de 3 500 €/4 000 €, et des modèles familiaux à ce kilométrage à partir de 6 500 €/7 000 €. C\'est plus que les 3 000 € du kit de conversion, mais pour une voiture plus récente et le plus souvent moins kilométrée...\r\n\r\nEst-ce que c\'est homologué ?\r\nOui. Les pouvoirs publics autorisent la transformation des diesels en bicarburation gazole GPL. Et Rétrogaz affirme que suite aux 2 jours de montage du kit, il faut encore deux jours pour obtenir une homologation du véhicule, une réception à titre isolé que la DREAL (Direction régionale de l\'environnement, de l\'aménagement et du logement) accordera selon eux sans souci après examen physique de l\'auto. En tout, l\'opération prendra en tout une semaine, toujours selon eux.\r\n\r\n \r\n\r\nQuels sont les gains potentiels ?\r\nEn matière de pollution, les gains sont clairs. Baisse des émissions de CO2 (- 15 % annoncés), quasi-disparition des particules fines (il en restera car rappelons qu\'il restera 40 % de gazole dans le mélange), et baisse drastique des Nox (oxydes d\'azote), ce fameux polluant qui rend le diesel si indésirable. Gain associé : bénéficier de la vignette Crit\'Air 1, ce qui peut éviter de devoir racheter une auto. Certes.\r\n\r\nConvertir son vieux diesel au GPL pour passer en Crit\'Air 1 : vraie ou fausse bonne idée ?\r\nMais en matière de coût à l\'usage ? Un argument avancé bien sûr par l\'association et Rétrogaz, puisque le litre de GPL est globalement 44 % moins cher aujourd\'hui que le litre de gazole (0,994 € contre 1,758 € au dernier relevé).\r\n\r\nEntre la surconsommation due au GPL (que nous avons estimé à + 20 %, mais 60 % seulement dans le mélange, donc une surconsommation moindre) et le prix moindre du litre de ce carburant (mais encore une fois, seulement 60 % dans le mélange), nous avons calculé que pour un kilométrage de 15 000 km par an, pour un diesel qui consommerait 5 litres/100 km, le gain est de 255 € par an. \"Seulement\".\r\n\r\nAPrès calcul, les gains en coûts à l\'usage ne sont pas si impressionnants.\r\nAPrès calcul, les gains en coûts à l\'usage ne sont pas si impressionnants.\r\nSur la base d\'un kit vendu 3 000 € en moyenne, il faudra donc... 11,8 ans pour rentabiliser l\'investissement ! Et même encore presque 6 ans si on roule 30 000 km par an. Soit près de 180 000 km dans les deux cas ! Si on part d\'un vieux diesel qui a 200 000 km, autant dire qu\'il sera probablement à mettre au rebut avant même d\'avoir rentabilisé le fameux kit.\r\n\r\nSi on prend un diesel consommant 7 litres/100, l\'économie est de 356 € par an. Et il faut 8,4 ans pour rentabiliser (15 000 km/an) ou 4,2 ans (30 000 km/an).\r\n\r\nÀ vous de voir si cela semble intéressant. Nous, on a déjà secrètement répondu à la question...\r\n\r\n \r\n\r\nUn problème logistique ?\r\nSous forme de clin d\'œil cette fois.\r\n\r\nRétrogaz indique vouloir développer un réseau d\'installateurs agréés pour leur kit de conversion, qui permettrait de réaliser \"1 000 conversions par mois\". Avec des inspecteurs de la DREAL qui viendraient homologuer les véhicules à la chaîne directement dans les centres de montage. Pourquoi pas, même si on connaît l\'administration française et son relatif manque d\'efficacité.\r\n\r\nMais même à ce rythme, l\'ambition de \"passer tous les véhicules en vignette Crit\'Air 1\", et en particulier les diesels, semble utopique. Car même avec 1 000 transformations par mois, soit 12 000 par an, et si on se base sur les 18 millions de diesels cités par le communiqué, il faudrait... juste 1 500 ans pour arriver au résultat.\r\n\r\nSolution miracle pour rendre obsolètes les ZFE vous avez dit ? On vous laissera juge.');

-- --------------------------------------------------------

--
-- Structure de la table `publicite`
--

CREATE TABLE `publicite` (
  `pub_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `publicite` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `publicite`
--

INSERT INTO `publicite` (`pub_id`, `title`, `date`, `publicite`) VALUES
(1, 'Mercedes GLE (2022). Le SUV restylé se prépare', '2021-12-24', 'Alors que Mercedes prépare le restylage du GLE, attendu pour l\'automne 2022, découvrez dès à présent les nouveautés à attendre avec la « phase 2 » du SUV allemand. Les évolutions esthétiques s\'annoncent discrètes.\r\nPar MaxKPublié le 21/07/2021 - 17:34 Mis à jour le 24/12/2021 - 18:22.\r\nMercedes GLE restylé illustration routeVOIR LES PHOTOS\r\nLa face avant du GLE restylé sera plus compartimentée.\r\n\r\nLe Mercedes GLE deuxième du nom ayant fait ses débuts à l’automne 2018, son restylage est attendu pour l\'automne 2022. Les dernières réalisations de la marque à l’étoile, ainsi que quelques photos « espions » de prototypes camouflés, nous permettent déjà d’imaginer à quoi devrait ressembler le SUV allemand dans sa phase 2. Les évolutions seront très discrètes.\r\n\r\nUn prototype du futur Mercedes GLE restylé a été croisé de nuit dans la rue par Wilco Blok, qui a posté les photos sur Instagram.\r\n\r\nLes changements semblent plutôt discrets, et se concentrent sur la partie avant (calandre, phares, bouclier) et les feux arrière.\r\n\r\nUne face avant réagencée\r\nLes feux avant du GLE pourraient s’affiner légèrement vers l’intérieur, donnant au véhicule un « regard » plus acéré. Une nouvelle signature lumineuse pourrait être à découvrir à l’intérieur de ces blocs optiques. En-dessous, le bouclier des versions n’étant pas équipées du pack AMG Line devrait abandonner sa large prise d’air factice continue pour plusieurs éléments noirs texturés, séparés par des montants de carrosserie soulignant la calandre. Celle-ci pourrait reprendre le motif à lames verticales vu sur certaines versions de la récente Classe C.\r\n\r\n\r\nLa face avant du GLE restylé sera plus compartimentée.\r\n\r\nLe Mercedes GLE « phase 1 » vu de devant.\r\nLes modifications s’annoncent encore plus timides à l’arrière, où un nouveau dessin de l’éclairage à LED au sein de feux de forme similaire devrait constituer le seul changement notable. De nouveaux styles de jantes, teintes de carrosserie et finition de sellerie devraient également venir enrichir le catalogue des options.\r\n\r\nSeuls les feux devraient évoluer à l\'arrière.\r\n\r\nDes moteurs principalement à hybridation\r\nEn France, la gamme de motorisations a été récemment revue avec un nouveau quatre-cylindres diesel de 272 ch pour la version 300 d. Ce moteur, associé à un alterno-démarreur 48V de 20 ch, remplace indirectement l\'ancienne variante 350 d dont la puissance du six-cylindres était de 272 ch. Le GLE 400 d diesel (330 ch) adoptera lui aussi une micro-hybridation 48V. \r\n\r\n\r\nLe GLE Coupé, ici en « phase 1 », devrait avoir droit aux mêmes évolutions.\r\nLa gamme du GLE restylé sera donc essentiellement composée de versions micro-hybrides et hybrides rechargeables en essence comme en diesel. La variante 63 à hybridation légère signée AMG pourrait n’être présentée que quelques mois après le reste de la gamme. Elle offre actuellement 612 ch (+ 22 ch électriques), une puissance qui pourrait être revue à la hausse afin de rester au niveau du futur Porsche Cayenne restylé, notamment en carrosserie Coupé.'),
(2, 'Toyota Yaris (2024). Nouvelle gamme et lancement de l’hybride de 130 ch', '2023-10-04', 'Les citadines hybrides musclent (un peu) leur jeu. La Renault Clio E-Tech Full Hybrid offre 145 ch, tandis que la Honda Jazz e:HEV restylée gagne 13 ch pour en développer 122. Face à elles, la Toyota Yaris Hybrid gagne un groupe motopropulseur de 130 ch en complément de celui de 116 ch. Présentée en mai dernier, cette nouvelle mouture, reposant toujours sur un trois-cylindres 1.5 essence de 92 ch, est à présent disponible à la commande en France à partir de 30 450 €. Les finitions GR Sport et Première lui sont réservées. Les tarifs des autres versions de la citadine électrifiée augmentent nettement, de 900 ou 1 000 € selon la configuration. L’auto peut désormais recevoir un tableau de bord numérique personnalisable de 12,3 pouces et un écran central tactile de 10,5 pouces en haut de gamme. Toyota annonce un système d’info-divertissement modernisé et des aides à la conduite plus performantes. Le temps de passer au « millésime » 2024, la Yaris essence 100 % thermique (hors GR Yaris) n’est plus disponible que sur stock. La production de la gamme 2024 débutera au mois de janvier 2024, puis les premières livraisons seront échelonnées entre février et mars 2024 en fonction des finitions.\r\n\r\nMedia Image\r\nImage\r\nTableau de bord numérique et écran central agrandi font partie des nouveautés.\r\nTableau de bord numérique et écran central agrandi font partie des nouveautés.\r\n\r\nToyota\r\n\r\nTarifs Toyota Yaris Hybrid (octobre 2023)\r\nPrix en euros	Dynamic	Design	Collection	GR Sport	Première\r\nEssence hybride\r\n1.5 116 ch CVT	24 450	26 450	29 450	-	-\r\n1.5 130 ch CVT	-	-	-	30 450	31 450\r\nTarifs Toyota GR Yaris (octobre 2023)\r\nPrix en euros	Pack Premium	Track\r\n1.6 261 ch 4 x 4 BVM6	37 400	39 400\r\nPrincipaux équipements Toyota Yaris (octobre 2023)\r\nDynamic :\r\n\r\nclimatisation (automatique sur hybride)\r\nécran central tactile de 9”\r\nApple CarPlay, Android Auto\r\n2 ports USB-C\r\ncaméra de recul\r\nrégulateur de vitesse adaptatif\r\nalerte de franchissement de ligne\r\naide au maintien dans la voie\r\ndétecteur de fatigue\r\nlève-vitres avant et arrière électriques\r\naccoudoir central avant (hybride uniquement)\r\ndouble plancher de coffre (sauf 70 VVT-i)\r\nfeux de jour à LED\r\nfeux arrière à LED\r\nfeux et essuie-glaces automatiques\r\njantes en tôle de 15” avec enjoliveurs\r\nDesign :\r\n\r\n(en plus de Dynamic)\r\n\r\nclimatisation automatique\r\ntableau de bord avec écran de 7”\r\nécran central tactile de 10,5”\r\nsystème de navigation\r\nprojecteurs à LED\r\nfeux antibrouillard à LED\r\nvitres arrière surteintées\r\njantes en alliage de 16”\r\nCollection :\r\n\r\n(en plus de Design)\r\n\r\nclimatisation automatique bizone\r\ntableau de bord numérique de 12,3”\r\nchargeur de smartphone à induction\r\nradars de stationnement avant et arrière\r\nsurveillance des angles morts\r\nsièges avant chauffants\r\nvolant chauffant\r\nrétroviseurs rabattables électriquement\r\ncarrosserie biton\r\njantes en alliage de 17”\r\nGR Sport :\r\n\r\n(en plus de Design)\r\n\r\nclimatisation automatique bizone\r\naffichage tête haute\r\nsystème de navigation\r\nsurveillance des angles morts\r\nsuspension sport\r\nsièges sport\r\nsièges avant chauffants\r\ncalandre GR Sport\r\ndiffuseur arrière\r\ndétourage des vitres noir brillant\r\ntoit noir\r\njantes en alliage de 18”\r\nPremière :\r\n\r\n(en plus de Collection)\r\n\r\naffichage tête haute\r\ninserts décoratifs bleus\r\nsystème audio JBL\r\ntoit panoramique\r\nGR Yaris :\r\n\r\nclimatisation automatique bizone\r\nApple CarPlay, Android Auto\r\nsystème de navigation\r\naffichage tête haute (pack Premium)\r\ncaméra de recul\r\nsurveillance des angles morts (pack Premium)\r\nalerte de trafic arrière (pack Premium)\r\ndifférentiels Torsen avant et arrière (pack Track)\r\nprojecteurs adaptatifs\r\nrétroviseurs rabattables électriquement\r\nvitres arrière surteintées'),
(3, 'Ford Focus restylée (2022). Look plus affirmé, prestations inchangées', '2021-12-01', 'Quelques semaines après la Fiesta, Ford remet à jour sa Focus. La berline compacte américaine peine à trouver sa place sur le marché, du moins en France. Au cours du premier semestre 2021, elle s’est écoulée à 2 331 unités sur notre territoire, soit une chute de 56,2 % par rapport à la même période en 2020. Le modèle est ainsi largement devancé par ses principales rivales du marché :\r\n\r\nRenault Mégane (18 063 immatriculations) ;\r\nPeugeot 308 II (13 477 immatriculations) ;\r\nCitroën C4 III (10 034 immatriculations)…\r\nSi ce restylage est le bienvenu pour la Focus, il ne fera sans doute pas de miracle.\r\n\r\n\r\nFocus, Fiesta : mêmes évolutions esthétiques\r\n\r\nLa finition ST-Line donne une allure sportive à la Focus.\r\nEsthétiquement, le restylage de la Focus s’appuie sur la même recette que celui de la Fiesta. Les deux autos ont, en effet, été redessinées ensemble. Les principales évolutions se concentrent à l\'avant : la calandre a été légèrement rehaussée, le logo prend désormais place au centre de la grille et le capot est plus horizontal qu\'auparavant. Par ailleurs, le masque avant qui comprend calandre, bouclier et ouïes latérales est différent selon les finitions (Titanium, ST- Line, Active). À noter que les optiques sont maintenant à LED et les lentilles plus sombres. À l’arrière, les feux conservent leur design, mais la signature lumineuse évolue.\r\n \r\n\r\nUne finition, une ambiance\r\n\r\nLa calandre de la Focus Active présente des lamelles verticales.\r\n\r\nLa Focus ST-Line arbore une calandre en nid-d\'abeilles...\r\nSi la silhouette de la berline comme du break ne change pas, Ford est parvenu à donner des ambiances différentes en fonction de la finition choisie. Ainsi :\r\n\r\nla Titanium joue une carte élégante ;\r\nla ST-Line suit l’esprit de la sportive ST, toujours au catalogue,\r\nl’Active se donne des airs de SUV avec ses protections de bas de caisse et de passages de roue.\r\nCertaines finitions peuvent disposer d’un complément Vignale agrémentant le quotidien avec des éléments haut de gamme, comme une sellerie cuir.\r\n \r\n\r\nL\'écran tactile fait toute la différence\r\n\r\nLa principale évolution dans la Focus est l\'adoption d\'un large écran tactile.\r\nÀ l\'intérieur, les modifications sont minimes mais visibles. Ainsi, un nouvel écran tactile de 13,2 pouces trône désormais au sommet de la planche de bord. Il intègre la dernière génération d’OS Ford, SYNC 4, offrant une meilleure intuitivité et une ergonomie plus simple. Plus besoin désormais de rentrer dans de nombreux sous-menus pour accéder à la fonction voulue.\r\n\r\n\r\n\r\nLe système rassemble les commandes de la climatisation, qui restent accessibles via des raccourcis, quel que soit l’écran choisi. Cela libère la console des boutons physiques destinés à l’air conditionné. À noter que la version sportive ST reçoit de nouveaux sièges baquets signés Ford Performance avec le nez de l’assise réglable.\r\n \r\n\r\nDavantage de coffre\r\n\r\nLe coffre de la Focus restylée dispose d\'un double plancher modulable.\r\nLes dimensions de la Focus n’évoluent pas. Ainsi, l’habitabilité aux places arrière est identique à celle des versions actuelles. Toutefois, le volume du coffre affiche quelques litres supplémentaires grâce à un double plancher. Avec une roue galette, la berline 5 places déploie 358 l (contre 341 l jusqu\'alors), et le break passe de 575 à 593 l.\r\n \r\n\r\nLarge choix de moteurs et de boîtes\r\n\r\nLe bloc de 280 ch de la Focus ST est associé, au choix, à une boîte manuelle à six rapports ou à une transmission automatique à sept vitesses.\r\nSous le capot moteur, la Focus propose toujours une offre diesel et essence (avec ou sans système micro-hybride), ainsi qu’une version fonctionnant à l’E85. Il y a toutefois quelques changements au rayon des boîtes de vitesses automatisées. Alors que la transmission automatique à huit rapports est toujours de mise avec les blocs diesel, les essence peuvent désormais être associés à une transmission robotisée à double embrayage (Powershift) et sept rapports.\r\n\r\n\r\nVoici le levier de la boîte de vitesses à double embrayage (Powershift) et commande mécanique.\r\nCes versions héritent alors d’un levier de vitesses conventionnel, alors que la BVA8 conserve une molette. Pourquoi ? La première proposition est à commande mécanique, tandis que la seconde est électrique. Du côté de la Focus ST 280, la boîte automatique est toujours une version à sept rapports. Enfin… Stefan Beckers, l’ingénieur en chef de la Focus, nous confirme qu’en réalité il s\'agit d’une boîte 8 ayant deux rapports identiques.\r\n\r\nEssence :\r\n\r\n1.0 EcoBoost 100 et 125 (BVM6)\r\n1.0 EcoBoost mHEV 125 et 155 (BVM6 ou Powershift 7)\r\n1.0 EcoBoost 125 E85 (BVM6 ou Powershift 7)\r\n2.3 EcoBoost 280 (BVM6 ou BVA7)\r\nDiesel :\r\n\r\n1.5 EcoBlue 95 et 120 (BVM6 ou BVA8)\r\n2.0 EcoBlue 150 (BVM6 ou BVA8)\r\n2.0 EcoBlue 190 (BVM6)\r\nÀ LIRE. Guide d\'achat. Quelle voiture compacte choisir en 2021 ?\r\n \r\n\r\nUn soupçon plus technologique\r\n\r\nLa Focus peut désormais profiter du système d\'optiques Matrix LED.\r\nAu rayon des équipements, la Focus peut toujours recevoir une instrumentation numérique visible sur une dalle de 12,3 pouces. Elle profite également de la fonction Stop&Go associée au régulateur de vitesse adaptatif, de la reconnaissance des panneaux de signalisation et de la recharge par induction du téléphone portable. Ford ajoute la technologie Matrix LED, la mise à jour à distance des logiciels du système SYNC 4, l’assistance d’intersection ou encore l’alerte de danger sur le trajet (local hazard information), qui permet d’être averti des éventuels incidents vous devançant.\r\n \r\n\r\nBilan : Un certain manque d\'ambition\r\n\r\nLa Focus restylée sera disponible au cours du premier trimestre 2022.\r\nCette Focus restylée affiche un visage fortement remanié afin de prouver qu’elle est vraiment nouvelle. Toutefois, hormis son écran tactile reposant de taille généreuse, le modèle ne dispose pas de réels nouveaux atouts pour venir taquiner les ténors de la catégorie. Dommage, car la Focus possède toujours un bel espace habitable et une présentation soignée, mais il lui manque ce petit côté « m’as-tu vu » que d’autres modèles n\'ont pas hésité à proposer.\r\n\r\nCommercialisée au premier trimestre 2022, cette Focus modernisée est disponible à la commande depuis décembre 2021. Les prix débutent à partir de 29 000 € avec le 1.0 FlexiFuel Hybrid 125 ch. A noter que la palette de moteurs est simplifiée en France.');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `valide` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `nom`, `prenom`, `email`, `mot_de_passe`, `date_naissance`, `sexe`, `valide`) VALUES
(1, 'Talbi', 'Houssem', 'kh_talbi@esi.dz', 'hi', '2002-06-08', 'Homme', 1),
(2, 'tesla', 'sse', 'houssemtalbi09@gmail.com', 'motdepassekinas', '2024-02-03', 'Homme', 1);

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `vehicule_id` int(11) NOT NULL,
  `marque_id` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `version` varchar(255) NOT NULL,
  `annee` date NOT NULL,
  `prix` int(11) NOT NULL,
  `moteur` varchar(255) NOT NULL,
  `cylindree` int(11) NOT NULL,
  `consommation` int(11) NOT NULL,
  `nb_cylindres` int(11) NOT NULL,
  `nb_places` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `longueur` int(11) NOT NULL,
  `largeur` int(11) NOT NULL,
  `hauteur` int(11) NOT NULL,
  `note` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`vehicule_id`, `marque_id`, `model`, `version`, `annee`, `prix`, `moteur`, `cylindree`, `consommation`, `nb_cylindres`, `nb_places`, `type`, `longueur`, `largeur`, `hauteur`, `note`) VALUES
(1, 1, 'GLS', 'Edition 2023', '2023-01-01', 120000, 'V8', 5, 13, 8, 7, 'SUV', 201, 78, 72, 3.33333),
(2, 1, 'GLE', 'Premium Plus', '2023-01-01', 95000, 'V6', 4, 11, 6, 5, 'SUV', 195, 76, 68, 4),
(3, 1, 'GLC', 'Sport', '2023-01-01', 80000, 'V4', 3, 10, 4, 5, 'SUV', 188, 74, 65, 5),
(4, 1, 'Class S', 'Executive', '2023-01-01', 150000, 'V8', 6, 13, 8, 5, 'Berline', 205, 79, 60, 5),
(5, 1, 'Class E', 'Avantgarde', '2023-01-01', 110000, 'V6', 4, 11, 6, 5, 'Berline', 195, 75, 58, 4),
(6, 2, 'Cayenne', 'Turbo', '2023-01-01', 130000, 'V8', 5, 13, 8, 5, 'SUV', 197, 78, 67, 5),
(7, 2, 'Macan', 'GTS', '2023-01-01', 95000, 'V6', 3, 12, 6, 5, 'SUV', 184, 76, 63, 3.66667),
(8, 2, '911', 'Carrera', '2023-01-01', 140000, 'Flat-6', 4, 10, 6, 4, 'Coupé', 178, 72, 51, 5),
(9, 2, 'Panamera', '4S', '2023-01-01', 120000, 'V6', 4, 11, 6, 4, 'Berline', 198, 76, 56, 5),
(10, 2, 'Taycan', 'Turbo', '2023-01-01', 160000, 'Electric', 0, 0, 0, 4, 'Berline', 196, 77, 54, 5),
(11, 3, 'Focus', 'Titanium', '2023-01-01', 25000, 'Inline-4', 2, 9, 4, 5, 'Hatchback', 173, 72, 58, 4),
(12, 3, 'Fiesta', 'ST-Line', '2023-01-01', 20000, 'Inline-3', 2, 7, 3, 5, 'Hatchback', 160, 68, 50, 4),
(13, 3, 'Mustang', 'GT', '2023-01-01', 45000, 'V8', 5, 14, 8, 4, 'Coupé', 188, 75, 54, 5),
(14, 3, 'Kuga', 'ST', '2023-01-01', 30000, 'Inline-4', 2, 9, 4, 5, 'SUV', 184, 73, 66, 4),
(15, 3, 'Bronco', 'Wildtrak', '2023-01-01', 40000, 'V6', 3, 11, 6, 5, 'SUV', 190, 77, 71, 4),
(16, 4, 'Yaris', 'XLE', '2023-01-01', 23000, 'Inline-3', 2, 9, 3, 5, 'Berline', 161, 68, 59, 4),
(17, 4, 'Corolla', 'XSE', '2023-01-01', 25000, 'Inline-4', 2, 8, 4, 5, 'Berline', 182, 71, 56, 4),
(18, 4, 'Prius', 'Prime', '2023-01-01', 28000, 'Inline-4', 2, 8, 4, 5, 'Hatchback', 184, 69, 58, 4),
(19, 4, 'Hilux', 'Invincible', '2023-01-01', 35000, 'Inline-4', 2, 10, 4, 5, 'Pickup', 533, 193, 184, 5),
(20, 4, 'Rav4', 'Adventure', '2023-01-01', 32000, 'Inline-4', 3, 10, 4, 5, 'SUV', 180, 73, 68, 4),
(21, 5, 'Golf', 'R', '2023-01-01', 35000, 'Inline-4', 2, 8, 4, 5, 'Hatchback', 168, 70, 58, 4),
(22, 5, 'Polo', 'GTI', '2023-01-01', 25000, 'Inline-4', 2, 8, 4, 5, 'Hatchback', 159, 69, 47, 4),
(23, 5, 'Passat', 'Highline', '2023-01-01', 40000, 'V6', 3, 10, 6, 5, 'Berline', 187, 72, 58, 4),
(24, 5, 'Tiguan', 'SEL', '2023-01-01', 32000, 'Inline-4', 2, 9, 4, 5, 'SUV', 185, 72, 67, 4),
(25, 5, 'Touareg', 'Executive', '2023-01-01', 60000, 'V6', 4, 10, 6, 5, 'SUV', 198, 79, 68, 4);

-- --------------------------------------------------------

--
-- Structure de la table `vehicule_favoris`
--

CREATE TABLE `vehicule_favoris` (
  `vahicule_favoris_id` int(11) NOT NULL,
  `vehicule_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `vehicule_favoris`
--

INSERT INTO `vehicule_favoris` (`vahicule_favoris_id`, `vehicule_id`, `user_id`) VALUES
(2, 19, 1),
(3, 14, 1),
(5, 1, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avis_marque`
--
ALTER TABLE `avis_marque`
  ADD PRIMARY KEY (`avis_marque_id`),
  ADD KEY `marque_id` (`marque_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `avis_vehicule`
--
ALTER TABLE `avis_vehicule`
  ADD PRIMARY KEY (`avis_vehicule_id`),
  ADD KEY `vehicule_id` (`vehicule_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `comparaison`
--
ALTER TABLE `comparaison`
  ADD PRIMARY KEY (`comparaison_id`),
  ADD KEY `vehicule_1_id` (`vehicule_1_id`),
  ADD KEY `vehicule_2_id` (`vehicule_2_id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Index pour la table `guide_achat`
--
ALTER TABLE `guide_achat`
  ADD PRIMARY KEY (`guide_achat_id`),
  ADD KEY `vehicule_id` (`vehicule_id`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`);

--
-- Index pour la table `images_association_marque`
--
ALTER TABLE `images_association_marque`
  ADD PRIMARY KEY (`images_association_marque_id`),
  ADD KEY `image_id` (`image_id`),
  ADD KEY `marque_id` (`marque_id`);

--
-- Index pour la table `images_association_news`
--
ALTER TABLE `images_association_news`
  ADD PRIMARY KEY (`images_association_news_id`),
  ADD KEY `image_id` (`image_id`),
  ADD KEY `news_id` (`news_id`);

--
-- Index pour la table `images_association_publicite`
--
ALTER TABLE `images_association_publicite`
  ADD PRIMARY KEY (`images_association_publicite_id`),
  ADD KEY `image_id` (`image_id`),
  ADD KEY `pub_id` (`pub_id`);

--
-- Index pour la table `images_association_vehicule`
--
ALTER TABLE `images_association_vehicule`
  ADD PRIMARY KEY (`images_association_vehicule_id`),
  ADD KEY `image_id` (`image_id`),
  ADD KEY `vehicule_id` (`vehicule_id`);

--
-- Index pour la table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`marque_id`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Index pour la table `publicite`
--
ALTER TABLE `publicite`
  ADD PRIMARY KEY (`pub_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`vehicule_id`),
  ADD KEY `marque_id` (`marque_id`);

--
-- Index pour la table `vehicule_favoris`
--
ALTER TABLE `vehicule_favoris`
  ADD PRIMARY KEY (`vahicule_favoris_id`),
  ADD KEY `vehicule_id` (`vehicule_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `avis_marque`
--
ALTER TABLE `avis_marque`
  MODIFY `avis_marque_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `avis_vehicule`
--
ALTER TABLE `avis_vehicule`
  MODIFY `avis_vehicule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT pour la table `comparaison`
--
ALTER TABLE `comparaison`
  MODIFY `comparaison_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `guide_achat`
--
ALTER TABLE `guide_achat`
  MODIFY `guide_achat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `images_association_marque`
--
ALTER TABLE `images_association_marque`
  MODIFY `images_association_marque_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `images_association_news`
--
ALTER TABLE `images_association_news`
  MODIFY `images_association_news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `images_association_publicite`
--
ALTER TABLE `images_association_publicite`
  MODIFY `images_association_publicite_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `images_association_vehicule`
--
ALTER TABLE `images_association_vehicule`
  MODIFY `images_association_vehicule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `marque`
--
ALTER TABLE `marque`
  MODIFY `marque_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `publicite`
--
ALTER TABLE `publicite`
  MODIFY `pub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `vehicule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `vehicule_favoris`
--
ALTER TABLE `vehicule_favoris`
  MODIFY `vahicule_favoris_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avis_marque`
--
ALTER TABLE `avis_marque`
  ADD CONSTRAINT `avis_marque_ibfk_1` FOREIGN KEY (`marque_id`) REFERENCES `marque` (`marque_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `avis_marque_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `avis_vehicule`
--
ALTER TABLE `avis_vehicule`
  ADD CONSTRAINT `avis_vehicule_ibfk_1` FOREIGN KEY (`vehicule_id`) REFERENCES `vehicule` (`vehicule_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `avis_vehicule_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `comparaison`
--
ALTER TABLE `comparaison`
  ADD CONSTRAINT `comparaison_ibfk_1` FOREIGN KEY (`vehicule_1_id`) REFERENCES `vehicule` (`vehicule_id`),
  ADD CONSTRAINT `comparaison_ibfk_2` FOREIGN KEY (`vehicule_2_id`) REFERENCES `vehicule` (`vehicule_id`);

--
-- Contraintes pour la table `guide_achat`
--
ALTER TABLE `guide_achat`
  ADD CONSTRAINT `guide_achat_ibfk_1` FOREIGN KEY (`vehicule_id`) REFERENCES `vehicule` (`vehicule_id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `images_association_marque`
--
ALTER TABLE `images_association_marque`
  ADD CONSTRAINT `images_association_marque_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `image` (`image_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `images_association_marque_ibfk_2` FOREIGN KEY (`marque_id`) REFERENCES `marque` (`marque_id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `images_association_news`
--
ALTER TABLE `images_association_news`
  ADD CONSTRAINT `images_association_news_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `image` (`image_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `images_association_news_ibfk_2` FOREIGN KEY (`news_id`) REFERENCES `news` (`news_id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `images_association_publicite`
--
ALTER TABLE `images_association_publicite`
  ADD CONSTRAINT `images_association_publicite_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `image` (`image_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `images_association_publicite_ibfk_2` FOREIGN KEY (`pub_id`) REFERENCES `publicite` (`pub_id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `images_association_vehicule`
--
ALTER TABLE `images_association_vehicule`
  ADD CONSTRAINT `images_association_vehicule_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `image` (`image_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `images_association_vehicule_ibfk_2` FOREIGN KEY (`vehicule_id`) REFERENCES `vehicule` (`vehicule_id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD CONSTRAINT `vehicule_ibfk_1` FOREIGN KEY (`marque_id`) REFERENCES `marque` (`marque_id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `vehicule_favoris`
--
ALTER TABLE `vehicule_favoris`
  ADD CONSTRAINT `vehicule_favoris_ibfk_1` FOREIGN KEY (`vehicule_id`) REFERENCES `vehicule` (`vehicule_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vehicule_favoris_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
