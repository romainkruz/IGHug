-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 22 nov. 2018 à 09:06
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ighug_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id_events` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `heure` time NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `cp` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id_events`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id_events`, `date`, `heure`, `adresse`, `cp`, `ville`, `description`, `nom`) VALUES
(1, '2018-12-15', '22:00:00', '25 Rue des Filatiers', '31000', 'Toulouse', 'magna. Phasellus dolor elit, pellentesque a, facilisis non, bibendum sed, est. Nunc laoreet lectus quis massa. Mauris vestibulum, neque sed dictum eleifend, nunc risus varius orci, in consequat enim diam', 'Le Volcan'),
(2, '2018-12-14', '22:00:00', '39 rue Reclusane, Toulouse', '31000', 'Toulouse', 'purus. Maecenas libero est, congue a, aliquet vel, vulputate eu, odio. Phasellus at augue id ante dictum cursus. Nunc mauris elit, dictum eu, eleifend nec, malesuada ut, sem. Nulla interdum.', ' La Loupiote'),
(3, '2018-12-13', '22:00:00', '23 Rue des Amidonniers, Toulouse', '31000', 'Toulouse', 'rutrum. Fusce dolor quam, elementum at, egestas a, scelerisque sed, sapien. Nunc pulvinar arcu et pede. Nunc sed orci lobortis augue scelerisque mollis. Phasellus libero mauris, aliquam eu, accumsan sed,', 'Le Taquin'),
(4, '2018-11-20', '22:00:00', '7 Place Saint-Pierre', '31000', 'Toulouse', 'eu, odio. Phasellus at augue id ante dictum cursus. Nunc mauris elit, dictum eu, eleifend nec, malesuada ut, sem. Nulla interdum. Curabitur dictum. Phasellus in felis. Nulla tempor augue ac', 'Le Bar Basque'),
(5, '2018-12-11', '22:00:00', '16 Place Saint-Pierre', '31000', 'Toulouse', 'hendrerit consectetuer, cursus et, magna. Praesent interdum ligula eu enim. Etiam imperdiet dictum magna. Ut tincidunt orci quis lectus. Nullam suscipit, est ac facilisis facilisis, magna tellus faucibus leo, in', 'Chez Tonton'),
(6, '2018-12-10', '22:00:00', '7bis rue Pierre Paul Riquet', '31000', 'Toulouse', 'metus. Aliquam erat volutpat. Nulla facilisis. Suspendisse commodo tincidunt nibh. Phasellus nulla. Integer vulputate, risus a ultricies adipiscing, enim mi tempor lorem, eget mollis lectus pede et risus. Quisque libero', 'The Petit London'),
(7, '2018-11-16', '22:00:00', '14 rue de Prêtres', '31000', 'Toulouse', 'nec tempus mauris erat eget ipsum. Suspendisse sagittis. Nullam vitae diam. Proin dolor. Nulla semper tellus id nunc interdum feugiat. Sed nec metus facilisis lorem tristique aliquet. Phasellus fermentum convallis', 'The London Town'),
(8, '2018-12-08', '22:00:00', '16, Rue de la Trinité', '31000', 'Toulouse', 'sagittis felis. Donec tempor, est ac mattis semper, dui lectus rutrum urna, nec luctus felis purus ac tellus. Suspendisse sed dolor. Fusce mi lorem, vehicula et, rutrum eu, ultrices sit', 'L\'ancienne Belgique'),
(9, '2018-09-07', '22:00:00', '13 Place de la Daurade', '31000', 'Toulouse', 'eu nulla at sem molestie sodales. Mauris blandit enim consequat purus. Maecenas libero est, congue a, aliquet vel, vulputate eu, odio. Phasellus at augue id ante dictum cursus. Nunc mauris', 'Café des Artistes'),
(10, '2018-12-06', '22:00:00', '8 Place du Pont Neuf', '31000', 'Toulouse', 'accumsan sed, facilisis vitae, orci. Phasellus dapibus quam quis diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce aliquet magna a neque. Nullam ut', 'Le Filochard');

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `ID` mediumint(11) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `Surname` text NOT NULL,
  `Age` tinyint(4) NOT NULL,
  `Sex` text NOT NULL,
  `School` text NOT NULL,
  `Online` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `members`
--

INSERT INTO `members` (`ID`, `Name`, `Surname`, `Age`, `Sex`, `School`, `Online`) VALUES
(1, 'Romain', 'Kruszewski', 28, 'Homme', 'IPI', 1),
(2, 'Quentin', 'Baillau', 25, 'Homme', 'IPI', 1),
(3, 'André', 'Remuzon', 29, 'Homme', 'IPI', 1),
(4, 'Aiko', 'Paul', 64, 'Homme', 'ICD', 1),
(5, 'Kerry', 'Abbott', 86, 'Homme', 'ISCPA', 1),
(6, 'Dalton', 'Delaney', 72, 'Homme', 'IPI', 1),
(7, 'Sylvia', 'Andrews', 89, 'Femme', 'ICD', 1),
(8, 'Roary', 'Pennington', 62, 'Femme', 'IPI', 1),
(9, 'Colt', 'Garrett', 95, 'Femme', 'ICD', 1),
(10, 'Sebastian', 'Stout', 56, 'Homme', 'ICD', 1),
(11, 'Genevieve', 'Norris', 100, 'Femme', 'ISCPA', 1),
(12, 'Colleen', 'Velez', 42, 'Homme', 'ICD', 1),
(13, 'Jin', 'Rollins', 52, 'Homme', 'IPI', 1),
(14, 'Barry', 'Brest', 12, 'Homme', 'IPI', 1),
(15, 'Salvador', 'Charles', 81, 'Femme', 'IGS-RH', 1),
(16, 'Whitney', 'Elliott', 63, 'Femme', 'IPI', 1),
(17, 'Dalton', 'Robbins', 25, 'Femme', 'ISCPA', 1),
(18, 'Angela', 'Flowers', 54, 'Femme', 'IGS-Formation continue', 1),
(19, 'Chaney', 'Wells', 27, 'Femme', 'IGS-Formation continue', 1),
(20, 'William', 'Sanford', 48, 'Homme', 'ICD', 1),
(21, 'Madaline', 'Alston', 80, 'Femme', 'IGS-Formation continue', 1),
(22, 'Alyssa', 'Marquez', 62, 'Homme', 'IGS-RH', 1),
(23, 'Ingrid', 'Gay', 81, 'Femme', 'ICD', 1),
(24, 'Chancellor', 'Castaneda', 75, 'Homme', 'ESAM', 1),
(25, 'Quin', 'Vincent', 46, 'Femme', 'ESAM', 1),
(26, 'Renee', 'Vinson', 91, 'Homme', 'ESAM', 1),
(27, 'Fallon', 'Page', 52, 'Femme', 'ISCPA', 1),
(28, 'Phelan', 'Wilder', 40, 'Homme', 'ESAM', 1),
(29, 'Angelica', 'Singleton', 64, 'Homme', 'IGS-RH', 1),
(30, 'Xenos', 'Morin', 52, 'Homme', 'IPI', 1),
(31, 'Carla', 'Leblanc', 49, 'Homme', 'ICD', 1),
(32, 'Quon', 'Fox', 58, 'Femme', 'IGS-Alternance', 1),
(33, 'Dahlia', 'Ruiz', 69, 'Homme', 'ESAM', 1),
(34, 'Ronan', 'Walters', 70, 'Homme', 'ESAM', 1),
(35, 'Ulysses', 'Moses', 54, 'Homme', 'IGS-Formation continue', 1),
(36, 'Pandora', 'Odonnell', 83, 'Femme', 'ESAM', 0),
(37, 'Jaime', 'Haney', 74, 'Homme', 'IGS-Formation continue', 0),
(38, 'Cruz', 'Campos', 57, 'Femme', 'IGS-Formation continue', 0),
(39, 'Casey', 'Flowers', 30, 'Homme', 'ESAM', 0),
(40, 'Brian', 'Cantrell', 95, 'Homme', 'IGS-RH', 0),
(41, 'Tiger', 'Rowe', 43, 'Homme', 'IGS-Formation continue', 0),
(42, 'Robert', 'Wilkinson', 90, 'Femme', 'ISCPA', 1),
(43, 'Keely', 'Garrison', 24, 'Femme', 'IPI', 1),
(44, 'Isaiah', 'Wilkerson', 66, 'Femme', 'IPI', 1),
(45, 'Noelle', 'Huffman', 21, 'Homme', 'IGS-Formation continue', 1),
(46, 'Logan', 'Horton', 68, 'Homme', 'IGS-Alternance', 1),
(47, 'Shaeleigh', 'Warner', 65, 'Femme', 'IPI', 1),
(48, 'Driscoll', 'Hammond', 69, 'Femme', 'ICD', 1),
(49, 'Nigel', 'Farmer', 27, 'Femme', 'IGS-RH', 1),
(50, 'Keaton', 'Cooke', 23, 'Femme', 'IGS-RH', 1),
(51, 'Joy', 'Chambers', 58, 'Homme', 'ICD', 1),
(52, 'Brittany', 'Roberson', 48, 'Homme', 'IGS-Alternance', 1),
(53, 'Cally', 'Avila', 86, 'Homme', 'IPI', 1),
(54, 'Marny', 'Bryant', 83, 'Femme', 'IGS-Formation continue', 1),
(55, 'Kevin', 'Herring', 66, 'Homme', 'ESAM', 1),
(56, 'Leonard', 'Charles', 73, 'Femme', 'IGS-RH', 1),
(57, 'Violet', 'West', 22, 'Femme', 'IPI', 1),
(58, 'Malcolm', 'Mcguire', 49, 'Femme', 'ESAM', 1),
(59, 'Chaim', 'Pierce', 72, 'Femme', 'ISCPA', 1),
(60, 'Hyacinth', 'Andrews', 46, 'Femme', 'IPI', 1),
(61, 'Brynne', 'Gibson', 18, 'Homme', 'IGS-RH', 1),
(62, 'Katelyn', 'King', 32, 'Femme', 'ISCPA', 1),
(63, 'Gavin', 'Mejia', 81, 'Homme', 'IGS-Alternance', 1),
(64, 'Keelie', 'Horne', 92, 'Femme', 'IGS-RH', 1),
(65, 'Yardley', 'Roach', 49, 'Homme', 'IGS-Formation continue', 1),
(66, 'Rina', 'Vang', 92, 'Femme', 'ESAM', 1),
(67, 'Zahir', 'Glenn', 83, 'Femme', 'ICD', 1),
(68, 'Lysandra', 'Wilcox', 23, 'Homme', 'IGS-Formation continue', 1),
(69, 'Raymond', 'Leonard', 27, 'Homme', 'IGS-Alternance', 1),
(70, 'Tanner', 'Kent', 48, 'Femme', 'IGS-Formation continue', 1);

-- --------------------------------------------------------

--
-- Structure de la table `places`
--

DROP TABLE IF EXISTS `places`;
CREATE TABLE IF NOT EXISTS `places` (
  `id_places` int(11) NOT NULL AUTO_INCREMENT,
  `adresse` varchar(255) NOT NULL,
  `cp` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id_places`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `places`
--

INSERT INTO `places` (`id_places`, `adresse`, `cp`, `ville`, `nom`, `description`, `type`) VALUES
(1, '5 Place Saint-Pierre', '31000', 'Toulouse', 'Le saint des seins', 'Happy hour tous les jeudi soirs de 20h à 23h !', 'Bar'),
(2, '4-8 Rue du Lieutenant Colonel Pélissier', '31000', 'Toulouse', 'Ma biche sur le toit', 'Terrasse avec vue sur la ville et ambiance afterwork !', 'Bar'),
(3, 'Parc Technologique du Canal, Rue Théodore Monod', '31520', 'Ramonville-Saint-Agne', 'Le bikini', 'Sed orci lobortis augue scelerisque mollis. Phasellus libero mauris, aliquam eu, accumsan sed, facilisis vitae.', 'Concert'),
(4, '39 Rue des Lois', '31000', 'Toulouse', 'El comelon', 'Nunc quis arcu vel quam dignissim pharetra. Nam ac nulla. In tincidunt congue turpis.', 'Restaurant'),
(5, '8 Rue Gabriel Péri', '31000', 'Toulouse', 'Connexion live', 'Egestas a, dui. Cras pellentesque. Sed dictum. Proin eget odio. Aliquam vulputate ullamcorper magna.', 'Concert'),
(6, '29 Rue Gabriel Péri', '31000', 'Toulouse', 'Toulouse burger', 'Curabitur massa. Vestibulum accumsan neque et nunc. Quisque ornare tortor at risus. Nunc ac sem uc.', 'Restaurant'),
(7, '3 avenue de l\'aérodrome de montaudran', '31400', 'Toulouse', 'Hall des machines', 'Libero. Morbi accumsan laoreet ipsum. Curabitur consequat, lectus sit amet luctus vulputate.', 'Autre'),
(8, 'Cours Dillon', '31300', 'Toulouse', 'Prairie des filtres', 'Lorem ut aliquam iaculis, lacus pede sagittis augue, eu tempor erat neque non quam. Pellentesq.', 'Autre'),
(9, '11 Rue des Gestes', '31000', 'Toulouse', 'Ice club', 'Proin velit. Sed malesuada augue ut lacus. Nulla tincidunt, neque vitae semper egestas, urna justo.', 'Bar'),
(10, '29, bis Boulevard de Strasbourg', '31000', 'Toulouse', 'Le parisien', 'Nunc. In at pede. Cras vulputate velit eu sem. Pellentesque ut ipsum ac mi eleifend egestas.', 'Restaurant');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
