-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 14 déc. 2023 à 10:00
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
  `valide` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  `avis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `avis_vehicule`
--

CREATE TABLE `avis_vehicule` (
  `avis_vehicule_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vehicule_id` int(11) NOT NULL,
  `valide` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  `avis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `caracteristique`
--

CREATE TABLE `caracteristique` (
  `caracteristique_id` int(11) NOT NULL,
  `vehicule_id` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `version` varchar(255) NOT NULL,
  `annee` date NOT NULL,
  `prix` int(11) NOT NULL,
  `moteur` varchar(255) NOT NULL,
  `cylindree` int(11) NOT NULL,
  `consomation` int(11) NOT NULL,
  `nb_cylindres` int(11) NOT NULL,
  `nb_places` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `longuer` int(11) NOT NULL,
  `largeur` int(11) NOT NULL,
  `hauteur` int(11) NOT NULL,
  `note` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `caracteristique`
--

INSERT INTO `caracteristique` (`caracteristique_id`, `vehicule_id`, `model`, `version`, `annee`, `prix`, `moteur`, `cylindree`, `consomation`, `nb_cylindres`, `nb_places`, `type`, `longuer`, `largeur`, `hauteur`, `note`) VALUES
(1, 1, 'GLS', 'Edition 2023', '2023-01-01', 120000, 'V8', 5, 13, 8, 7, 'SUV', 201, 78, 72, 5),
(2, 2, 'GLE', 'Premium Plus', '2023-01-01', 95000, 'V6', 4, 11, 6, 5, 'SUV', 195, 76, 68, 4),
(3, 3, 'GLC', 'Sport', '2023-01-01', 80000, 'V4', 3, 10, 4, 5, 'SUV', 188, 74, 65, 4),
(4, 4, 'Class S', 'Executive', '2023-01-01', 150000, 'V8', 6, 13, 8, 5, 'Berline', 205, 79, 60, 5),
(5, 5, 'Class E', 'Avantgarde', '2023-01-01', 110000, 'V6', 4, 11, 6, 5, 'Berline', 195, 75, 58, 4),
(6, 6, 'Cayenne', 'Turbo', '2023-01-01', 130000, 'V8', 5, 13, 8, 5, 'SUV', 197, 78, 67, 5),
(7, 7, 'Macan', 'GTS', '2023-01-01', 95000, 'V6', 3, 12, 6, 5, 'SUV', 184, 76, 63, 4),
(8, 8, '911', 'Carrera', '2023-01-01', 140000, 'Flat-6', 4, 10, 6, 4, 'Coupé', 178, 72, 51, 5),
(9, 9, 'Panamera', '4S', '2023-01-01', 120000, 'V6', 4, 11, 6, 4, 'Berline', 198, 76, 56, 5),
(10, 10, 'Taycan', 'Turbo', '2023-01-01', 160000, 'Electric', 0, 0, 0, 4, 'Berline', 196, 77, 54, 5),
(11, 11, 'Focus', 'Titanium', '2023-01-01', 25000, 'Inline-4', 2, 9, 4, 5, 'Hatchback', 173, 72, 58, 4),
(12, 12, 'Fiesta', 'ST-Line', '2023-01-01', 20000, 'Inline-3', 2, 7, 3, 5, 'Hatchback', 160, 68, 50, 4),
(13, 13, 'Mustang', 'GT', '2023-01-01', 45000, 'V8', 5, 14, 8, 4, 'Coupé', 188, 75, 54, 5),
(14, 14, 'Kuga', 'ST', '2023-01-01', 30000, 'Inline-4', 2, 9, 4, 5, 'SUV', 184, 73, 66, 4),
(15, 15, 'Bronco', 'Wildtrak', '2023-01-01', 40000, 'V6', 3, 11, 6, 5, 'SUV', 190, 77, 71, 4),
(16, 16, 'Yaris', 'XLE', '2023-01-01', 23000, 'Inline-3', 2, 9, 3, 5, 'Berline', 161, 68, 59, 4),
(17, 17, 'Corolla', 'XSE', '2023-01-01', 25000, 'Inline-4', 2, 8, 4, 5, 'Berline', 182, 71, 56, 4),
(18, 18, 'Prius', 'Prime', '2023-01-01', 28000, 'Inline-4', 2, 8, 4, 5, 'Hatchback', 184, 69, 58, 4),
(19, 19, 'Hilux', 'Invincible', '2023-01-01', 35000, 'Inline-4', 2, 10, 4, 5, 'Pickup', 533, 193, 184, 5),
(20, 20, 'Rav4', 'Adventure', '2023-01-01', 32000, 'Inline-4', 3, 10, 4, 5, 'SUV', 180, 73, 68, 4),
(21, 21, 'Golf', 'R', '2023-01-01', 35000, 'Inline-4', 2, 8, 4, 5, 'Hatchback', 168, 70, 58, 4),
(22, 22, 'Polo', 'GTI', '2023-01-01', 25000, 'Inline-4', 2, 8, 4, 5, 'Hatchback', 159, 69, 47, 4),
(23, 23, 'Passat', 'Highline', '2023-01-01', 40000, 'V6', 3, 10, 6, 5, 'Berline', 187, 72, 58, 4),
(24, 24, 'Tiguan', 'SEL', '2023-01-01', 32000, 'Inline-4', 2, 9, 4, 5, 'SUV', 185, 72, 67, 4),
(25, 25, 'Touareg', 'Executive', '2023-01-01', 60000, 'V6', 4, 10, 6, 5, 'SUV', 198, 79, 68, 5);

-- --------------------------------------------------------

--
-- Structure de la table `comparaison`
--

CREATE TABLE `comparaison` (
  `comparaison_id` int(11) NOT NULL,
  `vehicule_1_id` int(11) NOT NULL,
  `vehicule_2_id` int(11) NOT NULL,
  `nb_recherche` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Structure de la table `images_association_marque`
--

CREATE TABLE `images_association_marque` (
  `images_association_marque_id` int(11) NOT NULL,
  `marque_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `images_association_news`
--

CREATE TABLE `images_association_news` (
  `images_association_news_id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `images_association_publicite`
--

CREATE TABLE `images_association_publicite` (
  `images_association_publicite_id` int(11) NOT NULL,
  `pub_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `images_association_vehicule`
--

CREATE TABLE `images_association_vehicule` (
  `images_association_vehicule_id` int(11) NOT NULL,
  `vehicule_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`marque_id`, `nom`, `pays_origine`, `siege_social`, `annee_creation`, `description`) VALUES
(1, 'Mercedes', 'allmagne', 'Stuttgart', '1926-01-01', 'later'),
(2, 'Porsche', 'allmagne', 'Stuttgart', '1931-01-01', 'later'),
(3, 'Ford', 'usa', 'Michigan', '1903-01-01', 'later'),
(4, 'Toyota', 'japon', 'Toyota City', '1937-01-01', 'later'),
(5, 'Volkswagen', 'allmagne', 'Wolfsburg', '1937-01-01', 'later');

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
  `valide` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `vehicule_id` int(11) NOT NULL,
  `marque_id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`vehicule_id`, `marque_id`, `nom`) VALUES
(1, 1, 'GLS'),
(2, 1, 'GLE'),
(3, 1, 'GLC'),
(4, 1, 'Class S'),
(5, 1, 'Class E'),
(6, 2, 'Cayenne'),
(7, 2, 'Macan'),
(8, 2, '911'),
(9, 2, 'Panamera'),
(10, 2, 'Taycan'),
(11, 3, 'Focus'),
(12, 3, 'Fiesta'),
(13, 3, 'Mustang'),
(14, 3, 'Kuga'),
(15, 3, 'Bronco'),
(16, 4, 'Yaris'),
(17, 4, 'Corolla'),
(18, 4, 'Prius'),
(19, 4, 'Hilux'),
(20, 4, 'Rav4'),
(21, 5, 'Golf'),
(22, 5, 'Polo'),
(23, 5, 'Passat'),
(24, 5, 'Tiguan'),
(25, 5, 'Touareg');

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
-- Index pour la table `caracteristique`
--
ALTER TABLE `caracteristique`
  ADD PRIMARY KEY (`caracteristique_id`),
  ADD KEY `vehicule_id` (`vehicule_id`);

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
-- AUTO_INCREMENT pour la table `avis_vehicule`
--
ALTER TABLE `avis_vehicule`
  MODIFY `avis_vehicule_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `caracteristique`
--
ALTER TABLE `caracteristique`
  MODIFY `caracteristique_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `comparaison`
--
ALTER TABLE `comparaison`
  MODIFY `comparaison_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `guide_achat`
--
ALTER TABLE `guide_achat`
  MODIFY `guide_achat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `images_association_marque`
--
ALTER TABLE `images_association_marque`
  MODIFY `images_association_marque_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `images_association_news`
--
ALTER TABLE `images_association_news`
  MODIFY `images_association_news_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `images_association_publicite`
--
ALTER TABLE `images_association_publicite`
  MODIFY `images_association_publicite_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `images_association_vehicule`
--
ALTER TABLE `images_association_vehicule`
  MODIFY `images_association_vehicule_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `marque`
--
ALTER TABLE `marque`
  MODIFY `marque_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `publicite`
--
ALTER TABLE `publicite`
  MODIFY `pub_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `vehicule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `vehicule_favoris`
--
ALTER TABLE `vehicule_favoris`
  MODIFY `vahicule_favoris_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avis_marque`
--
ALTER TABLE `avis_marque`
  ADD CONSTRAINT `avis_marque_ibfk_1` FOREIGN KEY (`marque_id`) REFERENCES `marque` (`marque_id`),
  ADD CONSTRAINT `avis_marque_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Contraintes pour la table `avis_vehicule`
--
ALTER TABLE `avis_vehicule`
  ADD CONSTRAINT `avis_vehicule_ibfk_1` FOREIGN KEY (`vehicule_id`) REFERENCES `vehicule` (`vehicule_id`),
  ADD CONSTRAINT `avis_vehicule_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Contraintes pour la table `caracteristique`
--
ALTER TABLE `caracteristique`
  ADD CONSTRAINT `caracteristique_ibfk_1` FOREIGN KEY (`vehicule_id`) REFERENCES `vehicule` (`vehicule_id`);

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
  ADD CONSTRAINT `guide_achat_ibfk_1` FOREIGN KEY (`vehicule_id`) REFERENCES `vehicule` (`vehicule_id`);

--
-- Contraintes pour la table `images_association_marque`
--
ALTER TABLE `images_association_marque`
  ADD CONSTRAINT `images_association_marque_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `image` (`image_id`),
  ADD CONSTRAINT `images_association_marque_ibfk_2` FOREIGN KEY (`marque_id`) REFERENCES `marque` (`marque_id`);

--
-- Contraintes pour la table `images_association_news`
--
ALTER TABLE `images_association_news`
  ADD CONSTRAINT `images_association_news_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `image` (`image_id`),
  ADD CONSTRAINT `images_association_news_ibfk_2` FOREIGN KEY (`news_id`) REFERENCES `news` (`news_id`);

--
-- Contraintes pour la table `images_association_publicite`
--
ALTER TABLE `images_association_publicite`
  ADD CONSTRAINT `images_association_publicite_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `image` (`image_id`),
  ADD CONSTRAINT `images_association_publicite_ibfk_2` FOREIGN KEY (`pub_id`) REFERENCES `publicite` (`pub_id`);

--
-- Contraintes pour la table `images_association_vehicule`
--
ALTER TABLE `images_association_vehicule`
  ADD CONSTRAINT `images_association_vehicule_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `image` (`image_id`),
  ADD CONSTRAINT `images_association_vehicule_ibfk_2` FOREIGN KEY (`vehicule_id`) REFERENCES `vehicule` (`vehicule_id`);

--
-- Contraintes pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD CONSTRAINT `vehicule_ibfk_1` FOREIGN KEY (`marque_id`) REFERENCES `marque` (`marque_id`);

--
-- Contraintes pour la table `vehicule_favoris`
--
ALTER TABLE `vehicule_favoris`
  ADD CONSTRAINT `vehicule_favoris_ibfk_1` FOREIGN KEY (`vehicule_id`) REFERENCES `vehicule` (`vehicule_id`),
  ADD CONSTRAINT `vehicule_favoris_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
