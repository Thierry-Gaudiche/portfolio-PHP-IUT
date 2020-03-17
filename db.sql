-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 17 mars 2020 à 12:57
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `thierry_simon`
--

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

DROP TABLE IF EXISTS `projets`;
CREATE TABLE IF NOT EXISTS `projets` (
  `project_id` int(7) NOT NULL AUTO_INCREMENT,
  `project_title` char(150) NOT NULL,
  `project_description` text NOT NULL,
  `project_image` varchar(500) NOT NULL,
  `project_date` date NOT NULL,
  `project_category` varchar(100) NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`project_id`, `project_title`, `project_description`, `project_image`, `project_date`, `project_category`) VALUES
(1, 'jogging +', 'refonte du site', 'https://thierry-gaudiche.com/Portfolio/images/projet2.png', '2019-05-24', ''),
(3, 'ma ville accessible', 'lobbying citoyen', 'https://thierry-gaudiche.com/Portfolio/images/projet1.png', '2020-03-01', ''),
(4, 'ma carte sonore', 'carte sonore iut', 'https://thierry-gaudiche.com/Portfolio/images/projet6.png', '2020-01-06', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_lastname` text NOT NULL COMMENT 'nom de famille',
  `user_firstname` text NOT NULL COMMENT 'prenom',
  `user_description` text NOT NULL,
  `user_cvlink` varchar(200) DEFAULT NULL,
  `user_image` varchar(500) DEFAULT NULL,
  `user_password` varchar(500) NOT NULL,
  `user_mail` varchar(500) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
