-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 16 sep. 2022 à 05:20
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `home`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Candide', 'f37d225439633aba5d52f09c6853f37acccf2bb1'),
(5, 'Carmel', '67c6613defc62c34d8471c75bf20aaa8623eb535'),
(6, 'Dolphin', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

DROP TABLE IF EXISTS `annonces`;
CREATE TABLE IF NOT EXISTS `annonces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_annonces` varchar(255) NOT NULL,
  `prenoms` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `localisation` varchar(255) NOT NULL,
  `mots` varchar(255) NOT NULL,
  `salon` varchar(255) NOT NULL,
  `chambre` varchar(255) NOT NULL,
  `toilette` varchar(255) NOT NULL,
  `cuisine` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `statut` int(1) NOT NULL DEFAULT '1',
  `dates` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `annoncesimg`
--

DROP TABLE IF EXISTS `annoncesimg`;
CREATE TABLE IF NOT EXISTS `annoncesimg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_annonces` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `dates` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `collocannonces`
--

DROP TABLE IF EXISTS `collocannonces`;
CREATE TABLE IF NOT EXISTS `collocannonces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_annonce` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `personne` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `localisation` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL DEFAULT '1',
  `save_date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `collocimg`
--

DROP TABLE IF EXISTS `collocimg`;
CREATE TABLE IF NOT EXISTS `collocimg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_annonce` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `save_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `collocusers`
--

DROP TABLE IF EXISTS `collocusers`;
CREATE TABLE IF NOT EXISTS `collocusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `mdp` text NOT NULL,
  `save_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `demarcheurs`
--

DROP TABLE IF EXISTS `demarcheurs`;
CREATE TABLE IF NOT EXISTS `demarcheurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenoms` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `validation` int(1) NOT NULL DEFAULT '0',
  `photo` varchar(255) DEFAULT '',
  `whatsapp` varchar(255) DEFAULT '',
  `description` varchar(255) DEFAULT '',
  `save_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL DEFAULT '1',
  `save_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `team`
--

INSERT INTO `team` (`id`, `nom`, `role`, `photo`) VALUES
(10, 'Carmel Josias AFLE', 'PDG', 'IMG-20220826-WA0040.jpg'),
(11, 'Candide A. N. SODOKIN', 'Développeur Web (Back-end)', 'Candide.jpg'),
(12, 'Donald ADJAHOSSOU', 'Développeur Web (Full Stack)', 'received_578158077427517.jpeg'),
(13, 'TSIORINIASINA Dolphin', 'Développeur Web (Front-end)', '1660813351620.jpg'),
(14, 'Pierre K. ZINSSOU', 'Agent de collecte de donnée', 'IMG-20220831-WA0047.jpg'),
(15, 'Yannis Auréole AKPATCHO', 'Rédactrice', 'IMG-20220825-WA0135.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
