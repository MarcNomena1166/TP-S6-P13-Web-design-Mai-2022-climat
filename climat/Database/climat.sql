-- phpMyAdmin SQL Dump
-- version 4.0.2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 15 Mai 2022 à 19:57
-- Version du serveur: 5.6.11-log
-- Version de PHP: 5.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `climat`
--
CREATE DATABASE IF NOT EXISTS `climat` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `climat`;

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE IF NOT EXISTS `administrateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) DEFAULT NULL,
  `mdp` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `login`, `mdp`) VALUES
(1, 'test@gmail.com', '123');

-- --------------------------------------------------------

--
-- Structure de la table `causerechauffementclimat`
--

CREATE TABLE IF NOT EXISTS `causerechauffementclimat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idtype` int(11) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`),
  KEY `idtype` (`idtype`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `causerechauffementclimat`
--

INSERT INTO `causerechauffementclimat` (`id`, `idtype`, `image`, `description`) VALUES
(1, 1, 'sun1.jpg', 'le soleil brulant'),
(2, 1, 'sun2.jpg', 'le soleil depuis la terre'),
(3, 1, 'volcan1.jpg', 'une eruption volcanique'),
(4, 1, 'volcan2.jpg', 'une nuee ardente'),
(5, 1, 'volcan3.jpg', 'la lave volcanique'),
(6, 1, 'volcan4.jpg', 'la volcanique qui coule'),
(7, 1, 'volcan5.jpg', 'la lave volcanique'),
(9, 3, 'cloud1.jpg', 'Nuage trop epais'),
(15, 2, 'voiture2.jpg', 'pollution des voitures');

-- --------------------------------------------------------

--
-- Structure de la table `typerechauffementclimat`
--

CREATE TABLE IF NOT EXISTS `typerechauffementclimat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomtype` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `typerechauffementclimat`
--

INSERT INTO `typerechauffementclimat` (`id`, `nomtype`) VALUES
(1, 'activite solaire et volcanique'),
(2, 'gaz a effet de serre'),
(3, 'aerosols et nuages'),
(4, 'modification de la surface de la terre');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
