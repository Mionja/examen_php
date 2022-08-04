-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 04 août 2022 à 23:01
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `nom`, `email`, `fonction`) VALUES
(4, 'RANAIVOARISON Mionja', 'mionjaranaivoarison@gmail.com', 'dg'),
(5, 'test', 'test@gmail.com', 'drh');

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
  `comptefb` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `nom`, `prenom`, `date_naissance`, `cin`, `email`, `tel`, `comptefb`, `photo`, `password`) VALUES
(7, 'marimar', 'marimar', '2022-08-24', 879382479, 'mm@gaac.com', 768478, 'Marimar Mario', '62eafe62507781.79413014.jpg', '5656'),
(8, 'TEST NOM', 'test', '2022-08-01', 29382923, 'test@gmail.com', 340743343, 'nom fb', '62eb04ed952416.63386004.jpg', '123'),
(9, 'TEST NOM', 'prenom1', '2023-09-04', 5, 'aaaaa@aa.aa', 5, '123', '62eb13f24e7833.63839173.jpg', 'dfs');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `modules`
--

INSERT INTO `modules` (`id`, `nom`, `code`, `heure`, `id_prof`) VALUES
(2, 'Info 250', '8', 10, 10);

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
  `photo` varchar(255) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `profs`
--

INSERT INTO `profs` (`id`, `nom`, `prenom`, `email`, `photo`, `mdp`) VALUES
(10, 'RANAIVOARISON ', 'MIONJA', 'mionjaranaivoarison@gmail.com', '62eafd2cc9aa75.14593100.jpg', '123'),
(11, 'N', 'P', 'test@gmail.com', '62eafeba4d1084.09924936.jpg', '123'),
(13, 'TEST NOM', 'prenom1', 'test@mail.com', '62eb0f26599280.68127997.jpg', '123');

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
