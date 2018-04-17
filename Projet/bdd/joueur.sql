-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 17 avr. 2018 à 08:25
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

DROP TABLE IF EXISTS `joueur`;
CREATE TABLE IF NOT EXISTS `joueur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(11) NOT NULL,
  `victoire` int(11) DEFAULT NULL,
  `defaite` int(11) DEFAULT NULL,
  `KDA` float DEFAULT NULL,
  `team` varchar(20) NOT NULL,
  `winrate` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `joueur`
--

INSERT INTO `joueur` (`id`, `name`, `victoire`, `defaite`, `KDA`, `team`, `winrate`) VALUES
(1, 'baybay', 9, 1, NULL, 'G-Rex', '93,3%'),
(2, 'Hanabi', 11, 1, NULL, 'Flash Wolves', '91,7%'),
(3, 'Khan', 16, 1, NULL, 'KING-ZONE DragonX', '85,7%'),
(4, 'Cuzz', 4, 0, NULL, 'KING-ZONE DragonX', '83,3%'),
(5, 'Letme', 6, 1, NULL, 'Royal Never Give Up', '81,8%'),
(6, 'Ming', 6, 1, NULL, 'Royal Never Give Up', '81,8%'),
(7, 'Peanut', 17, 2, NULL, 'KING-ZONE DragonX', '80,7'),
(8, 'Toaster', 7, 1, NULL, 'Gamers Origin', '80%'),
(9, 'Fitz', 16, 4, NULL, 'Rebirth eSports', '80%'),
(10, 'Moojin', 11, 1, NULL, 'Flash Wolves', '80%');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
