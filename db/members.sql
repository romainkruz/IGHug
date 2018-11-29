-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 29 nov. 2018 à 11:08
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
  `Description` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `members`
--

INSERT INTO `members` (`ID`, `Name`, `Surname`, `Age`, `Sex`, `School`, `Online`, `Email`, `Login`, `Description`) VALUES
(1, 'Romain', 'Kruszewski', 28, 'Homme', 'IPI', 1, 'romain.kruszewski@gmail.com', '0', 'Où que nous mène la restriction présente, il faut façonner les principales solutions réalisables, et déjà en notre possession.'),
(2, 'Quentin', 'Baillau', 25, 'Homme', 'IPI', 1, 'quentin.baillau@gmail.com', '0', 'Afin de circonvenir à la restriction que nous constatons, on ne peut se passer d\'étudier la totalité des décisions envisageables, rapidement.'),
(3, 'André', 'Remuzon', 29, 'Homme', 'IPI', 1, 'andre.remuzon@gmail.com', '0', 'Quoi qu\'on dise concernant la situation générale, il serait bon de favoriser la majorité des stratégies emblématiques, en prenant toutes les précautions qui s\'imposent.'),
(4, 'Théophile', 'Aubert', 27, 'Homme', 'IPI', 1, 'theophile.aubert@gmail.com', '0', 'En ce qui concerne l\'orientation générale, on se doit de gérer les relations des organisations matricielles optimales, à l\'avenir.'),
(5, 'Kerry', 'Abbott', 86, 'Homme', 'ISCPA', 1, 'kerry.abbott@gmail.com', '0', 'Quelle que soit cette rigueur conjoncturelle, je recommande d\'inventorier les relations des hypothèses draconiennes, à l\'avenir.'),
(6, 'Dalton', 'Delaney', 72, 'Homme', 'IPI', 1, 'dalton.delaney@gmail.com', '0', 'Quoi qu\'on dise concernant la fragilité contextuelle, je préconise un audit afin de façonner la globalité des actions possibles, même si nous devons en tirer des conséquences.'),
(7, 'Sylvia', 'Andrews', 89, 'Femme', 'ICD', 1, 'sylvia.andrews@gmail.com', '0', 'Dans le but de pallier à la situation que nous constatons, il est nécessaire de fédérer certaines problématiques opportunes, et déjà en notre possession.'),
(8, 'Roary', 'Pennington', 62, 'Femme', 'IPI', 1, 'roary.pennington@gmail.com', '0', 'Du fait de cette inflexion conjoncturelle, il serait bon d\'expérimenter la simultanéité des actions imaginables, dans une perspective correcte.'),
(9, 'Colt', 'Garrett', 95, 'Femme', 'ICD', 1, 'colt.garrett@gmail.com', '0', 'Nonobstant cette inflexion que nous constatons, il ne faut pas négliger d\'appréhender la globalité des options de bon sens, depuis longtemps.'),
(10, 'Sebastian', 'Stout', 56, 'Homme', 'ICD', 1, 'sebastian.stout@gmail.com', '0', 'Tant que durera la dualité de la situation actuelle, il est très important d\'expérimenter l\'ensemble des ouvertures éventuelles, avec toute la prudence requise.'),
(11, 'Genevieve', 'Norris', 100, 'Femme', 'ISCPA', 1, 'genevieve.norris@gmail.com', '0', 'Eu égard à la situation générale, il serait intéressant d\'imaginer l\'ensemble des alternatives que nous connaissons, rapidement.'),
(12, 'Colleen', 'Velez', 42, 'Homme', 'ICD', 1, 'colleen.velez@gmail.com', '0', 'En ce qui concerne l\'orientation contextuelle, il ne faut pas s\'interdire de favoriser la majorité des organisations matricielles évidentes, depuis longtemps.'),
(13, 'Jin', 'Rollins', 52, 'Homme', 'IPI', 1, 'jin.rollins@gmail.com', '0', 'Afin de circonvenir à la morosité générale, je préconise un audit afin d\'essayer les relations des organisations matricielles éventuelles, parce que les mêmes causes produisent les mêmes effets.'),
(14, 'Barry', 'Brest', 12, 'Homme', 'IPI', 1, 'barry.brest@gmail.com', '0', 'Pour réagir face à la restriction induite, il est préférable d\'inventorier la plus grande partie des synergies optimales, pour longtemps.'),
(15, 'Salvador', 'Charles', 81, 'Femme', 'IGS-RH', 1, 'salvador.charles@gmail.com', '0', 'Afin de circonvenir à la dégradation présente, il ne faut pas négliger d\'expérimenter chacune des solutions possibles, de toute urgence.'),
(16, 'Whitney', 'Elliott', 63, 'Femme', 'IPI', 1, 'whitney.elliott@gmail.com', '0', 'Quoi qu\'on dise concernant l\'inconstance contextuelle, je recommande de prendre en compte la simultanéité des actions draconiennes, dans une perspective correcte.'),
(17, 'Dalton', 'Robbins', 25, 'Femme', 'ISCPA', 1, 'dalton.robbins@gmail.com', '0', 'Du fait de l\'orientation que nous constatons, il est très important d\'essayer les relations des hypothèses emblématiques, parce qu\'il est temps d\'agir.'),
(18, 'Angela', 'Flowers', 54, 'Femme', 'IGS-Formation continue', 1, 'angela.flowers@gmail.com', '0', 'Si vous voulez mon avis concernant l\'inertie induite, il faut analyser les principales décisions imaginables, dans une perspective correcte.'),
(19, 'Chaney', 'Wells', 27, 'Femme', 'IGS-Formation continue', 1, 'chaney.wells@gmail.com', '0', 'Vu la morosité contextuelle, il faut de toute urgence uniformiser l\'ensemble des actions opportunes, rapidement.'),
(20, 'William', 'Sanford', 48, 'Homme', 'ICD', 1, 'william.sanford@gmail.com', '0', 'Où que nous mène la morosité actuelle, on se doit d\'analyser la simultanéité des organisations matricielles évidentes, à court terme.'),
(21, 'Madaline', 'Alston', 80, 'Femme', 'IGS-Formation continue', 1, 'madaline.alston@gmail.com', '0', 'Nonobstant la morosité générale, il convient de revoir la totalité des options opportunes, pour longtemps.'),
(22, 'Alyssa', 'Marquez', 62, 'Homme', 'IGS-RH', 1, 'alyssa.marquez@gmail.com', '0', 'Tant que durera la politique conjoncturelle, il convient de favoriser toutes les options de bon sens, et déjà en notre possession.'),
(23, 'Ingrid', 'Gay', 81, 'Femme', 'ICD', 1, 'ingrid.gay@gmail.com', '0', 'Vu la fragilité observée, il faut analyser toutes les synergies optimales, avec toute la prudence requise.'),
(24, 'Chancellor', 'Castaneda', 75, 'Homme', 'ESAM', 1, 'chancellor.castaneda@gmail.com', '0', 'Quoi qu\'on dise concernant la dualité de la situation induite, il faut uniformiser l\'ensemble des ouvertures draconiennes, à l\'avenir.'),
(25, 'Quin', 'Vincent', 46, 'Femme', 'ESAM', 1, 'quin.vincent@gmail.com', '0', 'Eu égard à la restriction contextuelle, il ne faut pas négliger de revoir la simultanéité des options s\'offrant à nous, très attentativement.'),
(26, 'Renee', 'Vinson', 91, 'Homme', 'ESAM', 1, 'renee.vinson@gmail.com', '0', 'Du fait de la baisse de confiance présente, on se doit d\'anticiper la somme des améliorations imaginables, à court terme.'),
(27, 'Fallon', 'Page', 52, 'Femme', 'ISCPA', 1, 'fallon.page@gmail.com', '0', 'Eu égard à la fragilité générale, il ne faut pas négliger de façonner les principales ouvertures opportunes, même si ce n\'est pas facile.'),
(28, 'Phelan', 'Wilder', 40, 'Homme', 'ESAM', 1, 'phelan.wilder@gmail.com', '0', 'Si vous voulez mon avis concernant la morosité que nous constatons, il ne faut pas s\'interdire de prendre en considération précisément les voies déclinables, si l\'on veut s\'en sortir un jour.'),
(29, 'Angelica', 'Singleton', 64, 'Homme', 'IGS-RH', 1, 'angelica.singleton@gmail.com', '0', 'Afin de circonvenir à la restriction contextuelle, il est très important d\'expérimenter la totalité des stratégies draconiennes, parce qu\'il s\'agit de notre dernière chance.'),
(30, 'Xenos', 'Morin', 52, 'Homme', 'IPI', 1, 'xenos.morin@gmail.com', '0', 'Quoi qu\'on dise concernant complexité générale, il serait bon de comprendre l\'ensemble des modalités pertinentes, si l\'on veut s\'en sortir un jour.'),
(31, 'Carla', 'Leblanc', 49, 'Homme', 'ICD', 1, 'carla.leblanc@gmail.com', '0', 'Eu égard à la situation actuelle, il faut gérer la totalité des alternatives emblématiques, et déjà en notre possession.'),
(32, 'Quon', 'Fox', 58, 'Femme', 'IGS-Alternance', 1, 'quon.fox@gmail.com', '0', 'Dans le but de pallier à l\'austérité contextuelle, il serait bon d\'analyser précisément les actions envisageables, avec beaucoup de recul.'),
(33, 'Dahlia', 'Ruiz', 69, 'Homme', 'ESAM', 1, 'dahlia.ruiz@gmail.com', '0', 'Où que nous mène cette rigueur contextuelle, je n\'exclus pas de prendre en considération les relations des solutions optimales, avec toute la prudence requise.'),
(34, 'Ronan', 'Walters', 70, 'Homme', 'ESAM', 1, 'ronan.walters@gmail.com', '0', 'Compte tenu de l\'inconstance conjoncturelle, on se doit de considérer l\'ensemble des stratégies emblématiques, parce que nous le valons bien.'),
(35, 'Ulysses', 'Moses', 54, 'Homme', 'IGS-Formation continue', 1, 'ulysses.moses@gmail.com', '0', 'Tant que durera la dégradation induite, il serait bon de se remémorer la majorité des voies réalisables, dans une perspective correcte.'),
(36, 'Pandora', 'Odonnell', 83, 'Femme', 'ESAM', 0, 'pandora.odonnell@gmail.com', '0', 'Avec la crise contextuelle, il ne faut pas négliger de comprendre systématiquement les voies optimales, parce que nous ne faisons plus le même métier.'),
(37, 'Jaime', 'Haney', 74, 'Homme', 'IGS-Formation continue', 0, 'jaime.haney@gmail.com', '0', 'Pour réagir face à la restriction de ces derniers temps, on se doit de réorganiser la majorité des organisations matricielles opportunes, si l\'on veut s\'en sortir un jour.'),
(38, 'Cruz', 'Campos', 57, 'Femme', 'IGS-Formation continue', 0, 'cruz.campos@gmail.com', '0', 'Pour réagir face à la restriction de ces derniers temps, on se doit de réorganiser la majorité des organisations matricielles opportunes, si l\'on veut s\'en sortir un jour.'),
(39, 'Casey', 'Flowers', 30, 'Homme', 'ESAM', 0, 'casey.flowers@gmail.com', '0', 'Du fait de la restriction contextuelle, il est préférable de fédérer certaines voies s\'offrant à nous, parce que les mêmes causes produisent les mêmes effets.'),
(40, 'Brian', 'Cantrell', 95, 'Homme', 'IGS-RH', 0, 'brian.cantrell@gmail.com', '0', 'Compte tenu de cette inflexion actuelle, je vous demande de comprendre les principales organisations matricielles draconiennes, à long terme.'),
(41, 'Tiger', 'Rowe', 43, 'Homme', 'IGS-Formation continue', 0, 'tiger.rowe@gmail.com', '0', 'Dans le cas particulier de la baisse de confiance induite, je recommande de se remémorer la majorité des voies possibles, même si ce n\'est pas facile.'),
(42, 'Robert', 'Wilkinson', 90, 'Femme', 'ISCPA', 1, 'robert.wilkinson@gmail.com', '0', 'Eu égard à la difficulté intrinsèque, je vous demande de prendre en compte la globalité des modalités emblématiques, si l\'on veut s\'en sortir un jour.'),
(43, 'Keely', 'Garrison', 24, 'Femme', 'IPI', 1, 'keely.garrison@gmail.com', '0', 'Compte tenu de la difficulté générale, je recommande de revoir la somme des hypothèses optimales, si l\'on veut s\'en sortir un jour.'),
(44, 'Isaiah', 'Wilkerson', 66, 'Femme', 'IPI', 1, 'isaiah.wilkerson@gmail.com', '0', 'Du fait de la difficulté contextuelle, il est nécessaire d\'essayer les relations des ouvertures pertinentes, avec toute la prudence requise.'),
(45, 'Noelle', 'Huffman', 21, 'Homme', 'IGS-Formation continue', 1, 'noelle.huffman@gmail.com', '0', 'Nonobstant complexité intrinsèque, il est préférable de remodeler chacune des voies que nous connaissons, pour longtemps.'),
(46, 'Logan', 'Horton', 68, 'Homme', 'IGS-Alternance', 1, 'logan.horton@gmail.com', '0', 'Dans le cas particulier de la fragilité induite, il serait bon d\'arrêter de stigmatiser précisément les modalités réalisables, en prenant toutes les précautions qui s\'imposent.'),
(47, 'Shaeleigh', 'Warner', 65, 'Femme', 'IPI', 1, 'shaeleigh.warner@gmail.com', '0', 'Où que nous mène la dégradation de l\'époque actuelle, je vous demande de fédérer la simultanéité des synergies optimales, dans une perspective correcte.'),
(48, 'Driscoll', 'Hammond', 69, 'Femme', 'ICD', 1, 'driscoll.hammond@gmail.com', '0', 'Pour réagir face à la politique contextuelle, il serait intéressant d\'expérimenter toutes les modalités déclinables, à l\'avenir.'),
(49, 'Nigel', 'Farmer', 27, 'Femme', 'IGS-RH', 1, 'nigel.farmer@gmail.com', '0', 'Dans le but de pallier à cette inflexion conjoncturelle, on ne peut se passer de caractériser les relations des décisions réalisables, en prenant toutes les précautions qui s\'imposent.'),
(50, 'Keaton', 'Cooke', 23, 'Femme', 'IGS-RH', 1, 'keaton.cooke@gmail.com', '0', 'Où que nous mène l\'orientation contextuelle, il convient d\'essayer l\'ensemble des améliorations opportunes, à long terme.'),
(51, 'Joy', 'Chambers', 58, 'Homme', 'ICD', 1, 'joy.chambers@gmail.com', '0', 'Où que nous mène la dégradation de ces derniers temps, je n\'exclus pas d\'inventorier la globalité des synergies optimales, très attentativement.'),
(52, 'Brittany', 'Roberson', 48, 'Homme', 'IGS-Alternance', 1, 'brittany.roberson@gmail.com', '0', 'Où que nous mène l\'orientation induite, nous sommes contraints d\'imaginer toutes les améliorations déclinables, avec beaucoup de recul.'),
(53, 'Cally', 'Avila', 86, 'Homme', 'IPI', 1, 'cally.avila@gmail.com', '0', 'Nonobstant la politique induite, il est très important d\'appréhender systématiquement les synergies évidentes, parce que les mêmes causes produisent les mêmes effets.'),
(54, 'Marny', 'Bryant', 83, 'Femme', 'IGS-Formation continue', 1, 'marny.bryant@gmail.com', '0', 'Afin de circonvenir à la morosité de l\'époque actuelle, on ne peut se passer d\'uniformiser la globalité des décisions que nous connaissons, si l\'on veut s\'en sortir un jour.'),
(55, 'Kevin', 'Herring', 66, 'Homme', 'ESAM', 1, 'kevin.herring@gmail.com', '0', 'Avec cette rigueur que nous constatons, il faut de toute urgence prendre en considération l\'ensemble des actions que nous connaissons, toutes choses étant égales par ailleurs.'),
(56, 'Leonard', 'Charles', 73, 'Femme', 'IGS-RH', 1, 'leonard.charles@gmail.com', '0', 'Compte tenu de la dégradation de l\'époque actuelle, il convient de prendre en considération précisément les décisions évidentes, toutes choses étant égales par ailleurs.'),
(57, 'Violet', 'West', 22, 'Femme', 'IPI', 1, 'violet.west@gmail.com', '0', 'Si vous voulez mon avis concernant cette inflexion de l\'époque actuelle, il ne faut pas s\'interdire d\'appréhender l\'ensemble des stratégies que nous connaissons, rapidement.'),
(58, 'Malcolm', 'Mcguire', 49, 'Femme', 'ESAM', 1, 'malcolm.mcguire@gmail.com', '0', 'Avec complexité conjoncturelle, il est très important de gérer la globalité des actions réalisables, rapidement.'),
(59, 'Chaim', 'Pierce', 72, 'Femme', 'ISCPA', 1, 'chaim.pierce@gmail.com', '0', 'En ce qui concerne l\'ambiance conjoncturelle, il convient d\'analyser certaines modalités évidentes, à long terme.'),
(60, 'Hyacinth', 'Andrews', 46, 'Femme', 'IPI', 1, 'hyacinth.andrews@gmail.com', '0', 'Pour réagir face à cette rigueur de l\'époque actuelle, je recommande de favoriser la plus grande partie des alternatives déclinables, très attentativement.'),
(61, 'Brynne', 'Gibson', 18, 'Homme', 'IGS-RH', 1, 'brynne.gibson@gmail.com', '0', 'Eu égard à la fragilité générale, il est nécessaire de considérer certaines actions emblématiques, avec toute la prudence requise.'),
(62, 'Katelyn', 'King', 32, '', 'ISCPA', 1, 'katelyn.king@gmail.com', '0', 'Où que nous mène l\'orientation observée, je suggère fortement d\'imaginer la globalité des hypothèses évidentes, avec beaucoup de recul.'),
(63, 'Gavin', 'Mejia', 81, 'Homme', 'IGS-Alternance', 1, 'gavin.mejia@gmail.com', '0', 'Où que nous mène la dualité de la situation que nous constatons, je vous demande d\'anticiper les principales options imaginables, de toute urgence.'),
(64, 'Keelie', 'Horne', 92, 'Femme', 'IGS-RH', 1, 'keelie.horne@gmail.com', '0', 'Vu l\'orientation intrinsèque, il convient d\'étudier les relations des décisions possibles, parce qu\'il s\'agit de notre dernière chance.'),
(65, 'Yardley', 'Roach', 49, 'Homme', 'IGS-Formation continue', 1, 'yardley.roach@gmail.com', '0', 'En ce qui concerne complexité induite, je n\'exclus pas d\'étudier toutes les voies emblématiques, parce qu\'il s\'agit de notre dernière chance.'),
(66, 'Rina', 'Vang', 92, 'Femme', 'ESAM', 1, 'rina.vang@gmail.com', '0', 'Eu égard à la fragilité de l\'époque actuelle, il serait intéressant de caractériser la simultanéité des synergies s\'offrant à nous, à court terme.'),
(67, 'Zahir', 'Glenn', 83, 'Femme', 'ICD', 1, 'zahir.glenn@gmail.com', '0', 'Nonobstant cette inflexion induite, je vous demande de façonner l\'ensemble des options pertinentes, rapidement.'),
(68, 'Lysandra', 'Wilcox', 23, 'Homme', 'IGS-Formation continue', 1, 'lysandra.wilcox@gmail.com', '0', 'Pour réagir face à cette rigueur contextuelle, il faut inventorier les principales hypothèses déclinables, dans une perspective correcte.'),
(69, 'Raymond', 'Leonard', 27, 'Homme', 'IGS-Alternance', 1, 'raymond.leonard@gmail.com', '0', 'Eu égard à la baisse de confiance de l\'époque actuelle, il est nécessaire de considérer la globalité des améliorations que nous connaissons, et déjà en notre possession.'),
(70, 'Tanner', 'Kent', 48, 'Femme', 'IGS-Formation continue', 1, 'tanner.kent@gmail.com', '0', 'Vu l\'inconstance de ces derniers temps, il est nécessaire de gérer toutes les ouvertures optimales, à court terme.'),
(71, 'Aiko', 'Paul', 64, 'Homme', 'ICD', 1, 'aiko.paul@gmail.com', '0', 'Pour réagir face à l\'inertie de l\'époque actuelle, il est préférable de réorganiser la plus grande partie des actions opportunes, parce que nous le valons bien.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
