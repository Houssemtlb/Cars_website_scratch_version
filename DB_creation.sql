CREATE TABLE `comparateur_vehicules`.`user` (`user_id` INT NOT NULL AUTO_INCREMENT , `nom` VARCHAR(255) NOT NULL , `prenom` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `mot_de_passe` VARCHAR(255) NOT NULL , `date_naissance` DATE NOT NULL , `sexe` VARCHAR(255) NOT NULL , `valide` INT NOT NULL , PRIMARY KEY (`user_id`)) ENGINE = InnoDB;
CREATE TABLE `comparateur_vehicules`.`marque` (`marque_id` INT NOT NULL AUTO_INCREMENT , `nom` VARCHAR(255) NOT NULL , `pays_origine` VARCHAR(255) NOT NULL , `siege_social` VARCHAR(255) NOT NULL , `annee_creation` DATE NOT NULL , `description` TEXT NOT NULL , PRIMARY KEY (`marque_id`)) ENGINE = InnoDB;
CREATE TABLE `comparateur_vehicules`.`avis_marque` (`avis_marque_id` INT NOT NULL , `user_id` INT NOT NULL , `marque_id` INT NOT NULL , `valide` INT NOT NULL , `note` INT NOT NULL , `avis` TEXT NOT NULL ) ENGINE = InnoDB;
ALTER TABLE `comparateur_vehicules`.`avis_marque` ADD PRIMARY KEY (`avis_marque_id`);
CREATE TABLE `comparateur_vehicules`.`comparaison` (`comparaison_id` INT NOT NULL AUTO_INCREMENT , `vehicule_1_id` INT NOT NULL , `vehicule_2_id` INT NOT NULL , `nb_recherche` INT NOT NULL , PRIMARY KEY (`comparaison_id`)) ENGINE = InnoDB;
CREATE TABLE `comparateur_vehicules`.`avis_vehicule` (`avis_vehicule_id` INT NOT NULL AUTO_INCREMENT , `user_id` INT NOT NULL , `vehicule_id` INT NOT NULL , `valide` INT NOT NULL , `note` INT NOT NULL , `avis` TEXT NOT NULL , PRIMARY KEY (`avis_vehicule_id`)) ENGINE = InnoDB;
CREATE TABLE `comparateur_vehicules`.`vehicule_favoris` (`vahicule_favoris_id` INT NOT NULL AUTO_INCREMENT , `vehicule_id` INT NOT NULL , `user_id` INT NOT NULL , PRIMARY KEY (`vahicule_favoris_id`)) ENGINE = InnoDB;
CREATE TABLE `comparateur_vehicules`.`caracteristique` (`caracteristique_id` INT NOT NULL AUTO_INCREMENT , `vehicule_id` INT NOT NULL , `model` VARCHAR(255) NOT NULL , `version` VARCHAR(255) NOT NULL , `annee` DATE NOT NULL , `prix` INT NOT NULL , `moteur` VARCHAR(255) NOT NULL , `cylindrée` INT NOT NULL , `consomation` INT NOT NULL , `nb_cylindres` INT NOT NULL , `nb_places` INT NOT NULL , `type` VARCHAR(255) NOT NULL , `longuer` INT NOT NULL , `largeur` INT NOT NULL , `hauteur` INT NOT NULL , `note` INT NOT NULL , PRIMARY KEY (`caracteristique_id`)) ENGINE = InnoDB;
CREATE TABLE `comparateur_vehicules`.`vehicule` (`vehicule_id` INT NOT NULL AUTO_INCREMENT , `marque_id` INT NOT NULL , `nom` VARCHAR(255) NOT NULL , PRIMARY KEY (`vehicule_id`)) ENGINE = InnoDB;
CREATE TABLE `comparateur_vehicules`.`guide_achat` (`guide_achat_id` INT NOT NULL AUTO_INCREMENT , `vehicule_id` INT NOT NULL , `contenu` TEXT NOT NULL , PRIMARY KEY (`guide_achat_id`)) ENGINE = InnoDB;
CREATE TABLE `comparateur_vehicules`.`images_association_marque` (`images_association_marque_id` INT NOT NULL AUTO_INCREMENT , `marque_id` INT NOT NULL , `image_id` INT NOT NULL , PRIMARY KEY (`images_association_marque_id`)) ENGINE = InnoDB;
CREATE TABLE `comparateur_vehicules`.`images_association_vehicule` (`images_association_vehicule_id` INT NOT NULL AUTO_INCREMENT , `vehicule_id` INT NOT NULL , `image_id` INT NOT NULL , PRIMARY KEY (`images_association_vehicule_id`)) ENGINE = InnoDB;
CREATE TABLE `comparateur_vehicules`.`news` (`news_id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , `date` DATE NOT NULL , `news` TEXT NOT NULL , PRIMARY KEY (`news_id`)) ENGINE = InnoDB;
CREATE TABLE `comparateur_vehicules`.`publicite` (`pub_id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , `date` DATE NOT NULL , `publicite` TEXT NOT NULL , PRIMARY KEY (`pub_id`)) ENGINE = InnoDB;
CREATE TABLE `comparateur_vehicules`.`contact` (`contact_id` INT NOT NULL AUTO_INCREMENT , `nom` VARCHAR(255) NOT NULL , `prenom` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , PRIMARY KEY (`contact_id`)) ENGINE = InnoDB;
CREATE TABLE `comparateur_vehicules`.`images_association_news` (`images_association_news_id` INT NOT NULL AUTO_INCREMENT , `news_id` INT NOT NULL , `image_id` INT NOT NULL , PRIMARY KEY (`images_association_news_id`)) ENGINE = InnoDB;
CREATE TABLE `comparateur_vehicules`.`images_association_publicite` (`images_association_publicite_id` INT NOT NULL AUTO_INCREMENT , `pub_id` INT NOT NULL , `image_id` INT NOT NULL , PRIMARY KEY (`images_association_publicite_id`)) ENGINE = InnoDB;
CREATE TABLE `comparateur_vehicules`.`image` (`image_id` INT NOT NULL AUTO_INCREMENT , `image_path` VARCHAR(255) NOT NULL , PRIMARY KEY (`image_id`)) ENGINE = InnoDB;

ALTER TABLE `avis_marque` ADD FOREIGN KEY (`marque_id`) REFERENCES `marque`(`marque_id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `avis_marque` ADD FOREIGN KEY (`user_id`) REFERENCES `user`(`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `comparaison` ADD FOREIGN KEY (`vehicule_1_id`) REFERENCES `vehicule`(`vehicule_id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `comparaison` ADD FOREIGN KEY (`vehicule_2_id`) REFERENCES `vehicule`(`vehicule_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `avis_vehicule` ADD FOREIGN KEY (`vehicule_id`) REFERENCES `vehicule`(`vehicule_id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `avis_vehicule` ADD FOREIGN KEY (`user_id`) REFERENCES `user`(`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `vehicule_favoris` ADD FOREIGN KEY (`vehicule_id`) REFERENCES `vehicule`(`vehicule_id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `vehicule_favoris` ADD FOREIGN KEY (`user_id`) REFERENCES `user`(`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `caracteristique` ADD FOREIGN KEY (`vehicule_id`) REFERENCES `vehicule`(`vehicule_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `guide_achat` ADD FOREIGN KEY (`vehicule_id`) REFERENCES `vehicule`(`vehicule_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `vehicule` ADD FOREIGN KEY (`marque_id`) REFERENCES `marque`(`marque_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `images_association_marque` ADD FOREIGN KEY (`image_id`) REFERENCES `image`(`image_id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `images_association_marque` ADD FOREIGN KEY (`marque_id`) REFERENCES `marque`(`marque_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `images_association_news` ADD FOREIGN KEY (`image_id`) REFERENCES `image`(`image_id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `images_association_news` ADD FOREIGN KEY (`news_id`) REFERENCES `news`(`news_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `images_association_publicite` ADD FOREIGN KEY (`image_id`) REFERENCES `image`(`image_id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `images_association_publicite` ADD FOREIGN KEY (`pub_id`) REFERENCES `publicite`(`pub_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `images_association_vehicule` ADD FOREIGN KEY (`image_id`) REFERENCES `image`(`image_id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `images_association_vehicule` ADD FOREIGN KEY (`vehicule_id`) REFERENCES `vehicule`(`vehicule_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;


INSERT INTO `marque` (`marque_id`,`nom`,`pays_origine`, `siege_social`, `annee_creation`,`description`) VALUES
(1,'Mercedes','allmagne','Stuttgart','1926-01-01','later'),
(2,'Porsche','allmagne','Stuttgart','1931-01-01','later'),
(3,'Ford','usa','Michigan','1903-01-01','later'),
(4,'Toyota','japon','Toyota City','1937-01-01','later'),
(5,'Volkswagen','allmagne','Wolfsburg','1937-01-01','later');

INSERT INTO `vehicule` (`marque_id`,`nom`) VALUES
(1,'GLS'),
(1,'GLE'),
(1,'GLC'),
(1,'Class S'),
(1,'Class E'),
(2,'Cayenne'),
(2,'Macan'),
(2,'911'),
(2,'Panamera'),
(2,'Taycan'),
(3,'Focus'),
(3,'Fiesta'),
(3,'Mustang'),
(3,'Kuga'),
(3,'Bronco'),
(4,'Yaris'),
(4,'Corolla'),
(4,'Prius'),
(4,'Hilux'),
(4,'Rav4'),
(5,'Golf'),
(5,'Polo'),
(5,'Passat'),
(5,'Tiguan'),
(5,'Touareg');


INSERT INTO `caracteristique` (`vehicule_id`, `model`, `version`, `annee`, `prix`, `moteur`, `cylindrée`, `consomation`, `nb_cylindres`, `nb_places`, `type`, `longuer`, `largeur`, `hauteur`, `note`)
VALUES
(1, 'GLS', 'Edition 2023', '2023-01-01', 120000, 'V8', 5.0, 12.5, 8, 7, 'SUV', 201, 78, 72, 4.5),
(2, 'GLE', 'Premium Plus', '2023-01-01', 95000, 'V6', 3.5, 10.5, 6, 5, 'SUV', 195, 76, 68, 4.2),
(3, 'GLC', 'Sport', '2023-01-01', 80000, 'V4', 2.5, 9.8, 4, 5, 'SUV', 188, 74, 65, 4.0),
(4, 'Class S', 'Executive', '2023-01-01', 150000, 'V8', 5.5, 13.2, 8, 5, 'Berline', 205, 79, 60, 4.7),
(5, 'Class E', 'Avantgarde', '2023-01-01', 110000, 'V6', 3.5, 11.0, 6, 5, 'Berline', 195, 75, 58, 4.4),
(6, 'Cayenne', 'Turbo', '2023-01-01', 130000, 'V8', 4.8, 12.8, 8, 5, 'SUV', 197, 78, 67, 4.6),
(7, 'Macan', 'GTS', '2023-01-01', 95000, 'V6', 3.0, 11.5, 6, 5, 'SUV', 184, 76, 63, 4.2),
(8, '911', 'Carrera', '2023-01-01', 140000, 'Flat-6', 3.5, 10.0, 6, 4, 'Coupé', 178, 72, 51, 4.8),
(9, 'Panamera', '4S', '2023-01-01', 120000, 'V6', 3.5, 11.2, 6, 4, 'Berline', 198, 76, 56, 4.5),
(10, 'Taycan', 'Turbo', '2023-01-01', 160000, 'Electric', 0, 0, 0, 4, 'Berline', 196, 77, 54, 4.9),
(11, 'Focus', 'Titanium', '2023-01-01', 25000, 'Inline-4', 2.0, 8.5, 4, 5, 'Hatchback', 173, 72, 58, 4.0),
(12, 'Fiesta', 'ST-Line', '2023-01-01', 20000, 'Inline-3', 1.5, 7.2, 3, 5, 'Hatchback', 160, 68, 50, 3.8),
(13, 'Mustang', 'GT', '2023-01-01', 45000, 'V8', 5.0, 13.5, 8, 4, 'Coupé', 188, 75, 54, 4.5),
(14, 'Kuga', 'ST', '2023-01-01', 30000, 'Inline-4', 2.2, 9.0, 4, 5, 'SUV', 184, 73, 66, 4.2),
(15, 'Bronco', 'Wildtrak', '2023-01-01', 40000, 'V6', 2.7, 10.5, 6, 5, 'SUV', 190, 77, 71, 4.4),
(16, 'Yaris', 'XLE', '2023-01-01', 23000, 'Inline-3', 1.5, 8.5, 3, 5, 'Berline', 161, 68, 59, 4.0),
(17, 'Corolla', 'XSE', '2023-01-01', 25000, 'Inline-4', 1.8, 7.8, 4, 5, 'Berline', 182, 71, 56, 4.2),
(18, 'Prius', 'Prime', '2023-01-01', 28000, 'Inline-4', 2.0, 8.0, 4, 5, 'Hatchback', 184, 69, 58, 4.3),
(19, 'Hilux', 'Invincible', '2023-01-01', 35000, 'Inline-4', 2.4, 9.5, 4, 5, 'Pickup', 533, 193, 184, 4.6),
(20, 'Rav4', 'Adventure', '2023-01-01', 32000, 'Inline-4', 2.5, 10.2, 4, 5, 'SUV', 180, 73, 68, 4.4),
(21, 'Golf', 'R', '2023-01-01', 35000, 'Inline-4', 2.0, 8.0, 4, 5, 'Hatchback', 168, 70, 58, 4.2),
(22, 'Polo', 'GTI', '2023-01-01', 25000, 'Inline-4', 1.6, 7.5, 4, 5, 'Hatchback', 159, 69, 47, 4.0),
(23, 'Passat', 'Highline', '2023-01-01', 40000, 'V6', 3.0, 9.5, 6, 5, 'Berline', 187, 72, 58, 4.2),
(24, 'Tiguan', 'SEL', '2023-01-01', 32000, 'Inline-4', 2.0, 8.5, 4, 5, 'SUV', 185, 72, 67, 4.3),
(25, 'Touareg', 'Executive', '2023-01-01', 60000, 'V6', 3.5, 10.0, 6, 5, 'SUV', 198, 79, 68, 4.5);
