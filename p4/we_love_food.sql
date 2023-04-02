-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : dim. 02 avr. 2023 à 16:51
-- Version du serveur : 5.7.24
-- Version de PHP : 8.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `we_love_food`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `recipe` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `ranking` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `recipe`, `user_id`, `created_at`, `ranking`, `comment`) VALUES
(1, 'Chaussons aux pommes', 3, '2023-03-05', 2, 'Bof :/'),
(2, 'Chaussons aux pommes', 5, '2023-03-06', 5, 'Super recette :eye_hearts:'),
(3, 'Chaussons aux pommes', 3, '2023-03-08', 0, 'Pas bon du tout ! :S'),
(8, 'Le poulet basquaise vegan', 2, '2022-11-16', 4, 'Impressionant !'),
(9, 'Le poulet basquaise vegan', 2, '2023-02-14', 5, 'Au top !'),
(10, 'Le poulet basquaise vegan', 2, '2023-03-28', 2, 'Pas trop mal, mais j\'ai goûté mieux !');

-- --------------------------------------------------------

--
-- Structure de la table `recipes`
--

CREATE TABLE `recipes` (
  `recipe_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `recipe` text NOT NULL,
  `author` varchar(512) NOT NULL,
  `is_enabled` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recipes`
--

INSERT INTO `recipes` (`recipe_id`, `title`, `recipe`, `author`, `is_enabled`) VALUES
(2, 'Le poulet basquaise vegan', '1. Faire revenir des oignons\r\n2.', 'okara@hotmail.com', 0),
(3, 'Chaussons aux pommes', 'Et bien évidemment il nous faut des pommes, mais n\'utilisez pas de chausson !', 'user@exemple.com', 1),
(4, 'Forêt noire', 'Il faut une forêt et pas de chocolat. Euuh...', 'user@exemple.com', 1),
(5, 'Pho vegan', 'On a dit un Pho et pas un feu !', 'user@exemple.com', 1),
(12, 'Des brochettes du barbare', 'De la viande, des brochettes, de la sauce soja, etc.', 'user@exemple.com', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(64) NOT NULL,
  `email` varchar(512) NOT NULL,
  `password` varchar(512) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `email`, `password`, `age`) VALUES
(1, 'Baptiste Fotia', 'user@exemple.com', '1234', 31),
(2, 'La Petite Okara', 'okara@hotmail.com', 'abcd', 36),
(3, 'Mickaël Andrieu', 'mickael.andrieu@exemple.com', 'peutimporte', 34),
(4, 'Mathieu Nebra', 'site@duzero.com', 'jepreferelargent', 42),
(5, 'Laurène Castor', 'laurene.castor@exemple.com', 'toucherdubois', 28);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`recipe_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `recipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
