-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 04 août 2022 à 22:07
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

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

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fonction` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `etudiants` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `cin` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tel` int(11) NOT NULL,
  `comptefb` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `genre` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `nom`, `prenom`, `date_naissance`, `cin`, `email`, `tel`, `comptefb`, `photo`, `genre`, `password`) VALUES
(7, 'marimar', 'marimar', '2022-08-24', 879382479, 'mm@gaac.com', 768478, 'Marimar Mario', '62eafe62507781.79413014.jpg', '', '5656'),
(8, 'TEST NOM', 'test', '2022-08-01', 29382923, 'test@gmail.com', 340743343, 'nom fb', '62eb04ed952416.63386004.jpg', '', '123'),
(9, 'TEST NOM', 'prenom1', '2023-09-04', 5, 'aaaaa@aa.aa', 5, '123', '62eb13f24e7833.63839173.jpg', '', 'dfs'),
(20, 'Narovana', 'vevavy', '2022-08-12', 2147483647, 'maria@gamil.com', 3383151, 'fdfff', 'defaultgirl.jpg', 'femme', 'XSQXQ');

-- --------------------------------------------------------

--
-- Structure de la table `modules`
--

CREATE TABLE `modules` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `code` varchar(8) NOT NULL,
  `heure` int(2) NOT NULL,
  `id_prof` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `modules`
--

INSERT INTO `modules` (`id`, `nom`, `code`, `heure`, `id_prof`) VALUES
(2, 'Info 250', '8', 10, 10);

-- --------------------------------------------------------

--
-- Structure de la table `profs`
--

CREATE TABLE `profs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `tel` int(11) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `reseau` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `genre` varchar(10) NOT NULL,
  `mdp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `profs`
--

INSERT INTO `profs` (`id`, `nom`, `prenom`, `email`, `age`, `tel`, `adresse`, `reseau`, `photo`, `genre`, `mdp`) VALUES
(10, 'RANAIVOARISON ', 'MIONJA', 'mionjaranaivoarison@gmail.com', 0, 0, '', '', '62eafd2cc9aa75.14593100.jpg', '', '123'),
(11, 'N', 'P', 'test@gmail.com', 0, 0, '', '', '62eafeba4d1084.09924936.jpg', '', '123'),
(13, 'TEST NOM', 'prenom1', 'test@mail.com', 0, 0, '', '', '62eb0f26599280.68127997.jpg', '', '123'),
(16, 'AAAAAAAAAAA', 'qxxq', 'kbcqhsb@mmm.com', 3, 32, '32', '23', 'defaultgirl.jpg', '', '32'),
(17, 'Narovana', 'Zo', 'narovana@gmail.com', 2, 12, '21', '21', 'defaultgirl.jpg', '', '21');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_modules_id_prof` (`id_prof`);

--
-- Index pour la table `profs`
--
ALTER TABLE `profs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `profs`
--
ALTER TABLE `profs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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