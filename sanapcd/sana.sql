-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 29 juin 2020 à 19:16
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sana`
--

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

DROP TABLE IF EXISTS `agent`;
CREATE TABLE IF NOT EXISTS `agent` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `identifiant` varchar(20) NOT NULL,
  `cin` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `agent`
--

INSERT INTO `agent` (`id`, `f_name`, `l_name`, `identifiant`, `cin`, `phone`, `email`, `adresse`, `state`, `type`, `password`) VALUES
(2, 'sana', 'ze', '0147', '78965', '21477855', 'zekri.walid.1@gmail.com', 'lkjkl', 'No', 'Agent', '11'),
(3, 'salah', 'ze', '2323', '78965', '21477855', 'zekri.waa@gmail.com', 'lkjkl', 'Yes', 'Agent', '66'),
(4, 'Admin', '', 'Admin', '', '', '', '', 'Yes', 'Admin', '12345');

-- --------------------------------------------------------

--
-- Structure de la table `cheque`
--

DROP TABLE IF EXISTS `cheque`;
CREATE TABLE IF NOT EXISTS `cheque` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `number` varchar(20) NOT NULL,
  `rib` varchar(20) NOT NULL,
  `client` varchar(20) NOT NULL,
  `image` varchar(20) NOT NULL,
  `algo` varchar(20) NOT NULL,
  `pourcent` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cheque`
--

INSERT INTO `cheque` (`id`, `number`, `rib`, `client`, `image`, `algo`, `pourcent`) VALUES
(1, '6007380', '03037167010100021016', 'Hachicha Ahmed Moez', 'cheque1.jpg', 'Accepted', '85.0'),
(2, '0000041', '08304000352006091915', 'Jalel Kallel', 'cheque2.jpg', 'Can\'t judge', '77.0'),
(3, '0000209', '08116028072000463483', 'Mme BESBES AIDA', 'cheque3.jpg', 'Not Accepted', '48.0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
