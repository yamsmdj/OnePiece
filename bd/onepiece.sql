-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 02 fév. 2024 à 23:00
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `onepiece`
--

-- --------------------------------------------------------

--
-- Structure de la table `arc`
--

DROP TABLE IF EXISTS `arc`;
CREATE TABLE IF NOT EXISTS `arc` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `number` int NOT NULL,
  `pathimg` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `crew`
--

DROP TABLE IF EXISTS `crew`;
CREATE TABLE IF NOT EXISTS `crew` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `captain` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int DEFAULT NULL,
  `pathimg` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `captain` (`captain`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fruit`
--

DROP TABLE IF EXISTS `fruit`;
CREATE TABLE IF NOT EXISTS `fruit` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `genre` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int DEFAULT NULL,
  `pathimg` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `personnage_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fruit_personnage`
--

DROP TABLE IF EXISTS `fruit_personnage`;
CREATE TABLE IF NOT EXISTS `fruit_personnage` (
  `personnage_id` int NOT NULL,
  `fruit_id` int NOT NULL,
  KEY `personnage_id` (`personnage_id`),
  KEY `fruit_id` (`fruit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personnage`
--

DROP TABLE IF EXISTS `personnage`;
CREATE TABLE IF NOT EXISTS `personnage` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `pathimg` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `price` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personnage_crew`
--

DROP TABLE IF EXISTS `personnage_crew`;
CREATE TABLE IF NOT EXISTS `personnage_crew` (
  `personnage_id` int NOT NULL,
  `crew_id` int NOT NULL,
  KEY `personnage_id` (`personnage_id`),
  KEY `crew_id` (`crew_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `fruit_personnage`
--
ALTER TABLE `fruit_personnage`
  ADD CONSTRAINT `fruit_personnage_ibfk_1` FOREIGN KEY (`personnage_id`) REFERENCES `personnage` (`id`),
  ADD CONSTRAINT `fruit_personnage_ibfk_2` FOREIGN KEY (`fruit_id`) REFERENCES `fruit` (`id`);

--
-- Contraintes pour la table `personnage_crew`
--
ALTER TABLE `personnage_crew`
  ADD CONSTRAINT `personnage_crew_ibfk_1` FOREIGN KEY (`personnage_id`) REFERENCES `personnage` (`id`),
  ADD CONSTRAINT `personnage_crew_ibfk_2` FOREIGN KEY (`crew_id`) REFERENCES `crew` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
