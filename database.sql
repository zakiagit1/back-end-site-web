-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 02 juil. 2020 à 16:52
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `the_perfect_cup1`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(50) NOT NULL,
  `pdt_title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `pdt_image` varchar(100) CHARACTER SET utf8 NOT NULL,
  `pdt_description` varchar(100) CHARACTER SET utf8 NOT NULL,
  `pdt_prix` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `pdt_title`, `pdt_image`, `pdt_description`, `pdt_prix`) VALUES
(1, 'bbbbb', 'slide-2.jpg', 'bbbbbbb', '89'),
(2, 'nnnnnnn', 'slide-3.jpg', 'nnnnnnn', '99'),
(3, 'nnnnnnnn', 'abt1.jpg', 'bbbbbbbbbbbbb', '99'),
(4, 'bbbbb', 'abt2.jpg', 'bbbbbbb', '90'),
(5, 'bbbbb', 'intro-pic.jpg', 'bbbbb', '89'),
(6, 'bbbbb', 'abt3.jpg', 'bbbbbbbbbbbbb', '90'),
(7, 'bbbgf', '', 'bbbgg', '99f'),
(8, 'mml', '', 'mmml', '890'),
(9, 'nnn', 'Screenshot_1bs abdo.png', 'bbbbbbbbbbbbb', '23'),
(10, 'bbbbb', 'Screenshot_1jhd.png', 'bbbbbbbbbbbbb', '90'),
(11, 'bbbbb', 'form3.png', 'bbbbbbbbbbbbb', '99'),
(12, 'bbbbb', 'Screenshot_1UPDATE.png', 'cc', '90'),
(13, 'bbbk', '3tab.png', 'kkk', '44');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL,
  `confirm` varchar(50) CHARACTER SET utf8 NOT NULL,
  `token` varchar(500) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `confirm`, `token`) VALUES
(12, 'rana', 'M_Z_AN@HOTMAIL.COM', 'omi', '', ''),
(14, 'zakia', 'zakia.antary@gmail.com', 'lol', '', ''),
(16, 'omi', 'abenchagra@gmail.com', 'omi', '', 'c91a29e31976bbe23deb4d1669bf63e5db2c20823c51982832ef441fb016e00b026876e32b223d46ea6975b12bffac8da28e66c0ce13e6750d9f4caa5b0af3b219e97d0fce8b1a736f1695042737c2627067a986651ed2661d2643ef7538bf916a139c454058b22f172848085ee7a109eac1ee1ece0e862587127556f6986ac1abff7353b13d9b2999c96e62b83ac2128ec54ade36707fce9b034f627d678054e60b99f2a554c0d795c019e8e57ed39bd83da18dfa1068945c79ea422075111ba77d5c539bc5fd40d056cdf310eb6c0be1a2caf3e838b9b4e22788acdf322674200845b1ca501ceaebc863a785a97ff0cd4eac45bc71f3f39aed');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
