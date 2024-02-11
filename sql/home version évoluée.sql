-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 27 nov. 2022 à 23:34
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

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

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `annonces` (
  `id` int(11) NOT NULL,
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
  `statut` int(1) NOT NULL DEFAULT 1,
  `louer` varchar(255) NOT NULL DEFAULT 'non',
  `dates` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `annonces`
--

INSERT INTO `annonces` (`id`, `id_annonces`, `prenoms`, `email`, `tel`, `titre`, `prix`, `localisation`, `mots`, `salon`, `chambre`, `toilette`, `cuisine`, `categorie`, `photo`, `description`, `statut`, `louer`, `dates`) VALUES
(1, '6336e91d0e216', 'Candide', 'candidesodokin037@gmail.com', '51378825', 'Togoudo', '10001', 'Godomey', 'Sanitaire', '1', '1', '1', '1', 'Chambres étudiants', 'upload/location/2022-09-30-15-03-256336e91d0e969img_1.jpg', 'Essai de chambre', 0, 'non', '2022-09-30 15:03:25'),
(2, '633c18f8376b9', 'Cando', 'cando@gmail.com', '62040193', 'Godomey', '10017', 'Togoudo', 'Sanitaire', '1', '1', '1', '1', 'Chambres étudiants', 'upload/location/2022-10-04-13-28-56633c18f837aa1IMG-20220913-WA0178.jpg', 'Bonne localisation et endroit surtout calme', 0, 'non', '2022-10-04 13:28:56'),
(5, '63401c87d8178', 'Essa2', 'essai@gmail.com', '00000000', 'bp', '10000', 'ergg', 'Sanitaire', '1', '1', '1', '1', 'Chambres Familiale', 'upload/location/2022-10-07-14-33-1163401c87d8577about-img.png', 'egrg', 1, 'non', '2022-10-07 14:33:11'),
(6, '6340593588d0e', 'Essa2', 'essai@gmail.com', '00000000', 'Togoudo', '10000', 'Parakou', 'Sanitaire', '1', '2', '1', '1', 'Chambres étudiants', 'upload/location/2022-10-07-18-52-056340593589041f5.png', 'lklk', 1, 'non', '2022-10-07 18:52:05'),
(7, '634061b066e9e', 'Essa2', 'essai@gmail.com', '00000000', 'hiuhuhuh', '10000', 'Parakou', 'Sanitaire', '1', '1', '1', '1', 'Chambres étudiants', 'upload/location/2022-10-07-19-28-16634061b067337f2.png', 'uiguygug', 1, 'non', '2022-10-07 19:28:16'),
(8, '6344789139bcb', 'Essa2', 'essai@gmail.com', '00000000', 'vguyezgvhytfytgh', '10000', 'ghghv', 'Sanitaire', '1', '1', '1', '1', 'Chambres étudiants', 'upload/location/2022-10-10-21-54-57634478913a08fIMG_20221009_095840_902.jpg', 'huguygug\r\noiiojhi\r\njhikjhkj\r\nkjhkjhj', 1, 'non', '2022-10-10 21:54:57'),
(9, '6372b55488e54', 'Candide', 'candidesodokin037@gmail.com', '51378825', 'Togoudo', '10000', 'Parakou', 'Sanitaire', '1', '1', '1', '1', 'Boutique', 'upload/location/2022-11-14-22-38-286372b5548939cproduct-1.jpg', 'kmkmokm', 1, 'non', '2022-11-14 22:38:28'),
(10, '6381ec215e394', 'candido', 'candidesodokinpro@gmail.com', '40554599', 'Togoudo', '10000', 'Parakou', 'Sanitaire', '1', '1', '1', '1', 'Chambres étudiants', 'upload/location/2022-11-26-11-36-176381ec215e8e7css.jpg', 'nada', 1, 'non', '2022-11-26 11:36:17');

-- --------------------------------------------------------

--
-- Structure de la table `annoncesimg`
--

CREATE TABLE `annoncesimg` (
  `id` int(11) NOT NULL,
  `id_annonces` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `dates` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `annoncesimg`
--

INSERT INTO `annoncesimg` (`id`, `id_annonces`, `file`, `dates`) VALUES
(1, '6336e91d0e216', 'upload/location/2022-09-30-15-03-256336e91d0e969img_1.jpg', '2022-09-30 15:03:25'),
(2, '6336e91d0e216', 'upload/location/2022-09-30-15-03-256336e91d0f361img_2.jpg', '2022-09-30 15:03:25'),
(3, '6336e91d0e216', 'upload/location/2022-09-30-15-03-256336e91d0f7f2img_3.jpg', '2022-09-30 15:03:25'),
(4, '633c18f8376b9', 'upload/location/2022-10-04-13-28-56633c18f837aa1IMG-20220913-WA0178.jpg', '2022-10-04 13:28:56'),
(5, '633c18f8376b9', 'upload/location/2022-10-04-13-28-56633c18f83a17eIMG-20220913-WA0179.jpg', '2022-10-04 13:28:56'),
(6, '633c18f8376b9', 'upload/location/2022-10-04-13-28-56633c18f83a801IMG-20220913-WA0166.jpg', '2022-10-04 13:28:56'),
(7, '633c18f8376b9', 'upload/location/2022-10-04-13-28-56633c18f83ae10IMG-20220913-WA0167.jpg', '2022-10-04 13:28:56'),
(8, '633c18f8376b9', 'upload/location/2022-10-04-13-28-56633c18f83b4f8IMG-20220913-WA0168.jpg', '2022-10-04 13:28:56'),
(9, '633c1c547731e', 'upload/location/2022-10-04-13-43-16633c1c5477663f1.png', '2022-10-04 13:43:16'),
(10, '633c1c547731e', 'upload/location/2022-10-04-13-43-16633c1c5477dcaf2.png', '2022-10-04 13:43:16'),
(11, '633c1c547731e', 'upload/location/2022-10-04-13-43-16633c1c5478696f3.png', '2022-10-04 13:43:16'),
(12, '633c1c547731e', 'upload/location/2022-10-04-13-43-16633c1c5478c90f4.png', '2022-10-04 13:43:16'),
(13, '633def0b77176', 'upload/location/2022-10-05-22-54-35633def0b77451avatar.png', '2022-10-05 22:54:35'),
(14, '633def0b77176', 'upload/location/2022-10-05-22-54-35633def0b93a83client1.jpg', '2022-10-05 22:54:35'),
(15, '633def0b77176', 'upload/location/2022-10-05-22-54-35633def0b93f33f3.png', '2022-10-05 22:54:35'),
(21, '634061b066e9e', 'upload/location/2022-10-07-19-28-16634061b067337f2.png', '2022-10-07 19:28:16'),
(20, '6340593588d0e', 'upload/location/2022-10-07-18-52-056340593589041f5.png', '2022-10-07 18:52:05'),
(19, '63401c87d8178', 'upload/location/2022-10-07-15-39-5163402c270ec80f5.png', '2022-10-07 15:39:51'),
(22, '6344789139bcb', 'upload/location/2022-10-10-21-54-57634478913a08fIMG_20221009_095840_902.jpg', '2022-10-10 21:54:57'),
(23, '6344789139bcb', 'upload/location/2022-10-10-21-54-57634478913a7db5672f0618de0abf28670573385013156.jpg', '2022-10-10 21:54:57'),
(24, '6344789139bcb', 'upload/location/2022-10-10-21-54-57634478913ae56a0dad307f95a2909490521eefd87f2a7.jpg', '2022-10-10 21:54:57'),
(25, '6344789139bcb', 'upload/location/2022-10-10-21-54-57634478913b46c70db86b40454ac19cf002d5cfcc245be.jpg', '2022-10-10 21:54:57'),
(26, '6344789139bcb', 'upload/location/2022-10-10-21-54-57634478913bb3cd31df1cf6dec78ba12be9b532f5ac685.jpg', '2022-10-10 21:54:57'),
(27, '6344789139bcb', 'upload/location/2022-10-10-21-54-57634478913c174received_817705156245060.jpeg', '2022-10-10 21:54:57'),
(28, '6344789139bcb', 'upload/location/2022-10-10-21-54-57634478913c78ad3c0faeabd5146249d0fea69075d4472.jpg', '2022-10-10 21:54:57'),
(29, '6344789139bcb', 'upload/location/2022-10-10-21-54-57634478913cd4a207a065b88cbb6b40e11bb025948b7b4.jpg', '2022-10-10 21:54:57'),
(30, '6344789139bcb', 'upload/location/2022-10-10-21-54-57634478913d2b1a0a86fce003eafe9495de938073fb42c.jpg', '2022-10-10 21:54:57'),
(31, '6372b55488e54', 'upload/location/2022-11-14-22-38-286372b5548939cproduct-1.jpg', '2022-11-14 22:38:28'),
(32, '6381ec215e394', 'upload/location/2022-11-26-11-36-176381ec215e8e7css.jpg', '2022-11-26 11:36:17');

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `id_messages` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail_sender` text COLLATE utf8_unicode_ci NOT NULL,
  `mail_receiver` text COLLATE utf8_unicode_ci NOT NULL,
  `statut_sender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `statut_receiver` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `delete` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `statut` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `dates` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `chat`
--

INSERT INTO `chat` (`id`, `id_messages`, `mail_sender`, `mail_receiver`, `statut_sender`, `statut_receiver`, `text`, `images`, `type`, `delete`, `statut`, `dates`) VALUES
(2, '6383b59f104ac', 'candidesodokinpro@gmail.com', 'essai@gmail.com', 'demarcheur', 'demarcheur', 'cc', NULL, 'text', '0', '0', '2022-11-27 20:08:15'),
(3, '6383c6b59f0b4', 'candidesodokinpro@gmail.com', 'candidesodokinpro@gmail.com', 'demarcheur', 'demarcheur', 'cc', NULL, 'text', '0', '0', '2022-11-27 21:21:09'),
(4, '6383c71411f07', 'candidesodokinpro@gmail.com', 'candidesodokin037@gmail.com', 'demarcheur', 'demarcheur', 'cc', NULL, 'text', '0', '0', '2022-11-27 21:22:44'),
(5, '6383c74866580', 'candidesodokinpro@gmail.com', 'candidesodokinpro@gmail.com', 'demarcheur', 'demarcheur', 'cc', NULL, 'text', '0', '0', '2022-11-27 21:23:36'),
(6, '6383d2e5ef180', 'candidesodokinpro@gmail.com', 'candidesodokin037@gmail.com', 'demarcheur', 'demarcheur', '????????j', NULL, 'text', '0', '0', '2022-11-27 22:13:09');

-- --------------------------------------------------------

--
-- Structure de la table `collocannonces`
--

CREATE TABLE `collocannonces` (
  `id` int(11) NOT NULL,
  `id_annonce` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `personne` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `localisation` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL DEFAULT '1',
  `save_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `collocannonces`
--

INSERT INTO `collocannonces` (`id`, `id_annonce`, `username`, `categorie`, `personne`, `description`, `type`, `localisation`, `prix`, `statut`, `save_date`) VALUES
(2, '6381f17b014a1', 'candide', 'Chambres d\'hotel', '1', 'ijiuhiu', 'Sanitaire', 'Parakou', '13', '1', '2022-11-26 11:59:07');

-- --------------------------------------------------------

--
-- Structure de la table `collocimg`
--

CREATE TABLE `collocimg` (
  `id` int(11) NOT NULL,
  `id_annonce` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `save_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `collocimg`
--

INSERT INTO `collocimg` (`id`, `id_annonce`, `file`, `save_date`) VALUES
(1, '6381ed0446797', 'upload/collocation/2022-11-26-11-40-046381ed0446bdacss.jpg', '2022-11-26 11:40:04'),
(2, '6381f17b014a1', 'upload/collocation/2022-11-26-11-59-076381f17b0181dcyber1.jpg', '2022-11-26 11:59:07');

-- --------------------------------------------------------

--
-- Structure de la table `collocusers`
--

CREATE TABLE `collocusers` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `mdp` text NOT NULL,
  `save_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `collocusers`
--

INSERT INTO `collocusers` (`id`, `username`, `email`, `whatsapp`, `facebook`, `sexe`, `mdp`, `save_date`) VALUES
(1, 'candide', 'candidesodokin037@gmail.com', '51378825', 'https://www.facebook.com/candide.sodokin', 'Homme', '35ea6f4cff69d44e982c3c038b2ff29e5fb0da6e', '2022-10-16 18:10:44');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `demarcheurs`
--

CREATE TABLE `demarcheurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenoms` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `validation` int(1) NOT NULL DEFAULT 0,
  `photo` varchar(255) DEFAULT 'upload/location/2022-09-30-15-03-256336e91d0e969img_1.jpg',
  `whatsapp` varchar(255) DEFAULT '',
  `description` varchar(255) DEFAULT '',
  `save_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `demarcheurs`
--

INSERT INTO `demarcheurs` (`id`, `nom`, `prenoms`, `pays`, `ville`, `sexe`, `telephone`, `email`, `mdp`, `token`, `validation`, `photo`, `whatsapp`, `description`, `save_date`) VALUES
(1, 'Sodokin', 'Candide', 'Bénin', 'Cotonou', 'Homme', '51378825', 'candidesodokin037@gmail.com', '$2y$10$Hty41lyphO1Zmf7QOuS8ceufUWvmcM5RcLhJcY8KSNyFOkuxTePtu', 'Valider', 1, 'upload/profile/avatar.png', '', '', '2022-09-30 15:01:05'),
(2, 'Sodok', 'Cando', 'Madagascar', 'Bangladesh', 'Homme', '62040193', 'cando@gmail.com', 'a33309b7fe6ca926ade6de5f60d7e404ea4be1a1', 'Valider', 0, 'upload/profile/633c1a912e7112022-10-04-13-35-45.jpg', '62040193', 'Je suis simple et honnête', '2022-10-01 13:16:05'),
(4, 'Essai', 'Essa2', 'Bénin', 'Cotonou', 'Homme', '00000000', 'essai@gmail.com', '$2y$10$gM7fXtQ3BQBZf8vKV4XaF.fS49DQBP9f8f0YB3GZx709gNDWL0xXq', 'k4Ehgtf7f4OnnFqbEnyqnArHEK23TXpmIWyDZqNk', 0, 'upload/location/2022-09-30-15-03-256336e91d0e969img_1.jpg', '', '', '2022-10-07 14:31:34'),
(5, 'sodokin', 'candido', 'Benin', 'Calavi', 'Homme', '40554599', 'candidesodokinpro@gmail.com', '$2y$10$kHVyC5tZQ7Nhw9HxTBW/ZeCs09GnROmlt9jmiOQ9.IIMUoRyuYVfa', 'WlqB1hO2M8Wel8oIogF1fw5KT9ZwnyJdLM1kAm37', 0, 'upload/location/2022-09-30-15-03-256336e91d0e969img_1.jpg', '', '', '2022-11-26 11:35:07');

-- --------------------------------------------------------

--
-- Structure de la table `medias`
--

CREATE TABLE `medias` (
  `id` int(11) NOT NULL,
  `id_messages` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file` text COLLATE utf8_unicode_ci NOT NULL,
  `dates` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL DEFAULT '1',
  `save_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `statut`, `save_date`) VALUES
(1, 'candidesodokin037@gmail.com', '1', '2022-11-14 23:21:06'),
(2, 'sodokincandide@gmail.com', '1', '2022-11-15 12:21:19'),
(3, 'sodokin@gmail.com', '1', '2022-11-15 12:22:57'),
(4, 'sodoki@gmail.com', '1', '2022-11-15 12:24:25'),
(5, 'candide@gmail.com', '1', '2022-11-15 12:26:26');

-- --------------------------------------------------------

--
-- Structure de la table `tchat`
--

CREATE TABLE `tchat` (
  `id` int(11) NOT NULL,
  `mail_sender` varchar(255) NOT NULL,
  `id_sender` varchar(255) NOT NULL,
  `mail_receiver` varchar(255) NOT NULL,
  `id_receiver` varchar(255) NOT NULL,
  `messages` text NOT NULL,
  `statut` varchar(255) NOT NULL DEFAULT '0',
  `dates` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tchat`
--

INSERT INTO `tchat` (`id`, `mail_sender`, `id_sender`, `mail_receiver`, `id_receiver`, `messages`, `statut`, `dates`) VALUES
(1, 'candidesodokin037@gmail.com', '1', 'cando@gmail.com', '2', 'cc', '0', '2022-10-27 11:45:41'),
(2, 'candidesodokin037@gmail.com', '1', 'cando@gmail.com', '2', 're-cc', '0', '2022-10-27 12:33:52'),
(3, 'candidesodokin037@gmail.com', '1', 'essai@gmail.com', '4', 'jus', '0', '2022-10-27 12:36:35');

-- --------------------------------------------------------

--
-- Structure de la table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `annoncesimg`
--
ALTER TABLE `annoncesimg`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `collocannonces`
--
ALTER TABLE `collocannonces`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `collocimg`
--
ALTER TABLE `collocimg`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `collocusers`
--
ALTER TABLE `collocusers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `demarcheurs`
--
ALTER TABLE `demarcheurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tchat`
--
ALTER TABLE `tchat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `annoncesimg`
--
ALTER TABLE `annoncesimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `collocannonces`
--
ALTER TABLE `collocannonces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `collocimg`
--
ALTER TABLE `collocimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `collocusers`
--
ALTER TABLE `collocusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `demarcheurs`
--
ALTER TABLE `demarcheurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `medias`
--
ALTER TABLE `medias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `tchat`
--
ALTER TABLE `tchat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
