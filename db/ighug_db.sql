-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 15 nov. 2018 à 14:22
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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

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
  `Name` varchar(255) NOT NULL,
  `Surname` varchar(255) DEFAULT NULL,
  `Age` tinyint(4) DEFAULT NULL,
  `Sex` varchar(255) DEFAULT NULL,
  `School` varchar(255) DEFAULT NULL,
  `Online` tinyint(1) DEFAULT NULL,
  `Email` varchar(255) NOT NULL,
  `Login` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `members`
--

INSERT INTO `members` (`ID`, `Name`, `Surname`, `Age`, `Sex`, `School`, `Online`, `Email`, `Login`) VALUES
(1, 'Romain', 'Kruszewski', 28, 'Homme', 'IPI', 1, '0', '0'),
(2, 'Quentin', 'Baillau', 25, 'Homme', 'IPI', 1, '0', '0'),
(3, 'André', 'Remuzon', 29, 'Homme', 'IPI', 1, '0', '0'),
(4, 'Aiko', 'Paul', 64, 'Homme', 'ICD', 1, '0', '0'),
(5, 'Kerry', 'Abbott', 86, 'Homme', 'ISCPA', 1, '0', '0'),
(6, 'Dalton', 'Delaney', 72, 'Homme', 'IPI', 1, '0', '0'),
(7, 'Sylvia', 'Andrews', 89, 'Femme', 'ICD', 1, '0', '0'),
(8, 'Roary', 'Pennington', 62, 'Femme', 'IPI', 1, '0', '0'),
(9, 'Colt', 'Garrett', 95, 'Femme', 'ICD', 1, '0', '0'),
(10, 'Sebastian', 'Stout', 56, 'Homme', 'ICD', 1, '0', '0'),
(11, 'Genevieve', 'Norris', 100, 'Femme', 'ISCPA', 1, '0', '0'),
(12, 'Colleen', 'Velez', 42, 'Homme', 'ICD', 1, '0', '0'),
(13, 'Jin', 'Rollins', 52, 'Homme', 'IPI', 1, '0', '0'),
(14, 'Barry', 'Brest', 12, 'Homme', 'IPI', 1, '0', '0'),
(15, 'Salvador', 'Charles', 81, 'Femme', 'IGS-RH', 1, '0', '0'),
(16, 'Whitney', 'Elliott', 63, 'Femme', 'IPI', 1, '0', '0'),
(17, 'Dalton', 'Robbins', 25, 'Femme', 'ISCPA', 1, '0', '0'),
(18, 'Angela', 'Flowers', 54, 'Femme', 'IGS-Formation continue', 1, '0', '0'),
(19, 'Chaney', 'Wells', 27, 'Femme', 'IGS-Formation continue', 1, '0', '0'),
(20, 'William', 'Sanford', 48, 'Homme', 'ICD', 1, '0', '0'),
(21, 'Madaline', 'Alston', 80, 'Femme', 'IGS-Formation continue', 1, '0', '0'),
(22, 'Alyssa', 'Marquez', 62, 'Homme', 'IGS-RH', 1, '0', '0'),
(23, 'Ingrid', 'Gay', 81, 'Femme', 'ICD', 1, '0', '0'),
(24, 'Chancellor', 'Castaneda', 75, 'Homme', 'ESAM', 1, '0', '0'),
(25, 'Quin', 'Vincent', 46, 'Femme', 'ESAM', 1, '0', '0'),
(26, 'Renee', 'Vinson', 91, 'Homme', 'ESAM', 1, '0', '0'),
(27, 'Fallon', 'Page', 52, 'Femme', 'ISCPA', 1, '0', '0'),
(28, 'Phelan', 'Wilder', 40, 'Homme', 'ESAM', 1, '0', '0'),
(29, 'Angelica', 'Singleton', 64, 'Homme', 'IGS-RH', 1, '0', '0'),
(30, 'Xenos', 'Morin', 52, 'Homme', 'IPI', 1, '0', '0'),
(31, 'Carla', 'Leblanc', 49, 'Homme', 'ICD', 1, '0', '0'),
(32, 'Quon', 'Fox', 58, 'Femme', 'IGS-Alternance', 1, '0', '0'),
(33, 'Dahlia', 'Ruiz', 69, 'Homme', 'ESAM', 1, '0', '0'),
(34, 'Ronan', 'Walters', 70, 'Homme', 'ESAM', 1, '0', '0'),
(35, 'Ulysses', 'Moses', 54, 'Homme', 'IGS-Formation continue', 1, '0', '0'),
(36, 'Pandora', 'Odonnell', 83, 'Femme', 'ESAM', 0, '0', '0'),
(37, 'Jaime', 'Haney', 74, 'Homme', 'IGS-Formation continue', 0, '0', '0'),
(38, 'Cruz', 'Campos', 57, 'Femme', 'IGS-Formation continue', 0, '0', '0'),
(39, 'Casey', 'Flowers', 30, 'Homme', 'ESAM', 0, '0', '0'),
(40, 'Brian', 'Cantrell', 95, 'Homme', 'IGS-RH', 0, '0', '0'),
(41, 'Tiger', 'Rowe', 43, 'Homme', 'IGS-Formation continue', 0, '0', '0'),
(42, 'Robert', 'Wilkinson', 90, 'Femme', 'ISCPA', 1, '0', '0'),
(43, 'Keely', 'Garrison', 24, 'Femme', 'IPI', 1, '0', '0'),
(44, 'Isaiah', 'Wilkerson', 66, 'Femme', 'IPI', 1, '0', '0'),
(45, 'Noelle', 'Huffman', 21, 'Homme', 'IGS-Formation continue', 1, '0', '0'),
(46, 'Logan', 'Horton', 68, 'Homme', 'IGS-Alternance', 1, '0', '0'),
(47, 'Shaeleigh', 'Warner', 65, 'Femme', 'IPI', 1, '0', '0'),
(48, 'Driscoll', 'Hammond', 69, 'Femme', 'ICD', 1, '0', '0'),
(49, 'Nigel', 'Farmer', 27, 'Femme', 'IGS-RH', 1, '0', '0'),
(50, 'Keaton', 'Cooke', 23, 'Femme', 'IGS-RH', 1, '0', '0'),
(51, 'Joy', 'Chambers', 58, 'Homme', 'ICD', 1, '0', '0'),
(52, 'Brittany', 'Roberson', 48, 'Homme', 'IGS-Alternance', 1, '0', '0'),
(53, 'Cally', 'Avila', 86, 'Homme', 'IPI', 1, '0', '0'),
(54, 'Marny', 'Bryant', 83, 'Femme', 'IGS-Formation continue', 1, '0', '0'),
(55, 'Kevin', 'Herring', 66, 'Homme', 'ESAM', 1, '0', '0'),
(56, 'Leonard', 'Charles', 73, 'Femme', 'IGS-RH', 1, '0', '0'),
(57, 'Violet', 'West', 22, 'Femme', 'IPI', 1, '0', '0'),
(58, 'Malcolm', 'Mcguire', 49, 'Femme', 'ESAM', 1, '0', '0'),
(59, 'Chaim', 'Pierce', 72, 'Femme', 'ISCPA', 1, '0', '0'),
(60, 'Hyacinth', 'Andrews', 46, 'Femme', 'IPI', 1, '0', '0'),
(61, 'Brynne', 'Gibson', 18, 'Homme', 'IGS-RH', 1, '0', '0'),
(62, 'Katelyn', 'King', 32, 'Femme', 'ISCPA', 1, '0', '0'),
(63, 'Gavin', 'Mejia', 81, 'Homme', 'IGS-Alternance', 1, '0', '0'),
(64, 'Keelie', 'Horne', 92, 'Femme', 'IGS-RH', 1, '0', '0'),
(65, 'Yardley', 'Roach', 49, 'Homme', 'IGS-Formation continue', 1, '0', '0'),
(66, 'Rina', 'Vang', 92, 'Femme', 'ESAM', 1, '0', '0'),
(67, 'Zahir', 'Glenn', 83, 'Femme', 'ICD', 1, '0', '0'),
(68, 'Lysandra', 'Wilcox', 23, 'Homme', 'IGS-Formation continue', 1, '0', '0'),
(69, 'Raymond', 'Leonard', 27, 'Homme', 'IGS-Alternance', 1, '0', '0'),
(70, 'Tanner', 'Kent', 48, 'Femme', 'IGS-Formation continue', 1, '0', '0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
