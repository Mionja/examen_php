-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 09 août 2022 à 01:00
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `examen_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fonction` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `nom`, `email`, `fonction`) VALUES
(6, 'RANAIVOARISON MIONJA', 'mionjaranaivoarison@gmail.com', 'dg');

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `cin` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tel` int(11) NOT NULL,
  `comptefb` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `genre` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `nom`, `prenom`, `date_naissance`, `cin`, `email`, `tel`, `comptefb`, `photo`, `genre`, `password`) VALUES
(28, 'etudiant1', 'prenom1', '2022-08-05', 342234, 'etudiant@gmail.com', 2342234, 'nom fb', 'defaultgirl.jpg', 'femme', '123'),
(29, 'etudiant2', 'prenom2', '2022-08-18', 233, 'etudiant2@gmail.com', 23423, 'ETUDIANT', '62f1ad540e1cb2.90251190.jpg', 'homme', '123'),
(30, 'etudiant3', 'prenom3', '2022-08-04', 11896723, 'etudiant3@gmail.com', 340734322, 'Mpianatra mavitrika', '62f1ad70603e12.02799710.jpg', 'homme', 'AAA'),
(33, 'etudiant4', 'prenom4', '2022-08-11', 6, 'etudiant4@gmail.com', 3, 'Marimar Mario', 'defaultboy.jpg', 'femme', '123'),
(34, 'etudiant4', 'prenom5', '2022-08-18', 12311, 'etudiant5@gmail.com', 1231241, 'FB', '62f1ad8f469b29.60434882.jpg', 'homme', 'ZEE');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id`, `email`, `message`) VALUES
(8, 'bouu@maz.com', 'test'),
(10, 'etudiant@gmail.com', 'Bonjour,je voudrais avoir plus d\'information sur votre formation');

-- --------------------------------------------------------

--
-- Structure de la table `modules`
--

DROP TABLE IF EXISTS `modules`;
CREATE TABLE IF NOT EXISTS `modules` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `code` varchar(8) NOT NULL,
  `heure` int(2) NOT NULL,
  `id_prof` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_modules_id_prof` (`id_prof`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `modules`
--

INSERT INTO `modules` (`id`, `nom`, `code`, `heure`, `id_prof`) VALUES
(2, 'module1', '4', 5, 19),
(3, 'module2', '8', 11, 19),
(4, 'module3', '6', 9, 19),
(5, 'module4', '9', 5, 23);

-- --------------------------------------------------------

--
-- Structure de la table `profs`
--

DROP TABLE IF EXISTS `profs`;
CREATE TABLE IF NOT EXISTS `profs` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tel` int(11) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `reseau` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `genre` varchar(10) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `profs`
--

INSERT INTO `profs` (`id`, `nom`, `prenom`, `email`, `tel`, `adresse`, `reseau`, `photo`, `genre`, `mdp`) VALUES
(19, 'RANAIVOARISON', 'Mionja', 'mionjaranaivoarison@gmail.com', 2132323, 'llllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll', 'Mionja', '62f1adaec8f999.74590273.jpg', 'homme', '123'),
(22, 'prof1', 'prenom1', 'prof1@gmail.com', 2234, 'adresse', 'fb, instagram, linkedIN', 'defaultboy.jpg', 'homme', '123456778'),
(23, 'prof2', 'prenom2', 'prof2@gmail.com', 2342, 'llllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll', 'fb, instagram, linkedIN', 'defaultgirl.jpg', 'femme', '1233456789');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `modules`
--
ALTER TABLE `modules`
  ADD CONSTRAINT `fk_modules_id_prof` FOREIGN KEY (`id_prof`) REFERENCES `profs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
