-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 05 avr. 2021 à 15:42
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `devlopmmententre`
--

-- --------------------------------------------------------

--
-- Structure de la table `developpeurs`
--

CREATE TABLE `developpeurs` (
  `id` int(11) NOT NULL,
  `FulName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Role` varchar(11) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `developpeurs`
--

INSERT INTO `developpeurs` (`id`, `FulName`, `email`, `password`, `Image`, `Role`) VALUES
(78, 'Yassine Bouzar', 'yassine@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'uplode/ava5.png', 'user'),
(79, 'Ayoub Bouzar', 'ayoub@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'uplode/ava2.png', 'user'),
(80, 'Sanaa Sami', 'Sanaa@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'uplode/ava7.png', 'user'),
(81, 'Ilham gharib', 'ilham@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'uplode/ava6.png', 'user'),
(83, 'admin', 'yassinebouzar97@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'uplode/76868426.png', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `developpeurs`
--
ALTER TABLE `developpeurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `FulName` (`FulName`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `developpeurs`
--
ALTER TABLE `developpeurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
