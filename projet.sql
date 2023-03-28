-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 19 oct. 2022 à 12:10
-- Version du serveur : 5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--
CREATE DATABASE IF NOT EXISTS `projet` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `projet`;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(3) NOT NULL,
  `id_membre` int(3) DEFAULT NULL,
  `montant` int(3) NOT NULL,
  `date_enregistrement` datetime NOT NULL,
  `etat` enum('en cours de traitement','envoyé','livré') CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `id_membre`, `montant`, `date_enregistrement`, `etat`) VALUES
(1, 8, 160, '2022-10-14 14:51:42', 'en cours de traitement'),
(2, 2, 20, '2022-10-14 15:35:03', 'envoyé'),
(3, 2, 30, '2022-10-14 15:36:50', 'en cours de traitement'),
(4, 2, 0, '2022-10-14 15:47:16', 'en cours de traitement'),
(5, 2, 15, '2022-10-14 15:47:32', 'envoyé'),
(6, 6, 120, '2022-10-14 16:14:28', 'en cours de traitement'),
(7, 2, 0, '2022-10-17 14:41:26', 'envoyé'),
(8, 2, 15, '2022-10-18 14:35:10', 'livré');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `motive` varchar(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_contact`, `first_name`, `last_name`, `email`, `telephone`, `motive`, `message`) VALUES
(1, 'felicia', 'AYODEJI', 'felicia.ayodeji@colombbus.org', '066666660', 'Je souhaite contacter le service après vente', 'c\'est tres bien');

-- --------------------------------------------------------

--
-- Structure de la table `details_commande`
--

CREATE TABLE `details_commande` (
  `id_details_commande` int(3) NOT NULL,
  `id_commande` int(3) DEFAULT NULL,
  `id_produit` int(3) DEFAULT NULL,
  `quantite` int(3) NOT NULL,
  `prix` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `details_commande`
--

INSERT INTO `details_commande` (`id_details_commande`, `id_commande`, `id_produit`, `quantite`, `prix`) VALUES
(1, 2, 15, 1, 12),
(2, 1, 3, 2, 80),
(3, 2, 6, 1, 20),
(4, 3, 5, 2, 15),
(6, 5, 5, 1, 15),
(7, 6, 2, 1, 120),
(8, 8, 5, 1, 15);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id_membre` int(3) NOT NULL,
  `pseudo` varchar(20) CHARACTER SET latin1 NOT NULL,
  `mdp` varchar(60) CHARACTER SET latin1 NOT NULL,
  `nom` varchar(20) CHARACTER SET latin1 NOT NULL,
  `prenom` varchar(20) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `civilite` enum('m','f') CHARACTER SET latin1 NOT NULL,
  `ville` varchar(20) CHARACTER SET latin1 NOT NULL,
  `code_postal` int(5) UNSIGNED ZEROFILL NOT NULL,
  `adresse` varchar(50) CHARACTER SET latin1 NOT NULL,
  `statut` int(1) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `pseudo`, `mdp`, `nom`, `prenom`, `email`, `civilite`, `ville`, `code_postal`, `adresse`, `statut`) VALUES
(2, 'Yetunde22', '$2y$10$8Lgyo6DJGedAxZrKkph0fu.3sSGzXBEC6TNc2Dbgvt./KLihCoBVS', 'AYODEJI', '0lawumi', 'felicia.ayodeji@colombbus.org', 'f', 'fleury merogis', 91700, '6 Rue Jacques Decour', 1),
(5, 'Olawumi22', '$2y$10$mUmGi1JhzVq8zc6YVWohSu6qd7EP9O6o3kRMkFUN7haSad/ULh3wy', 'AYODEJI', '0lawumi', 'olaronkeabiola@yahoo.com', 'f', 'fleury merogis', 91700, '6 Rue Jacques Decour', 2),
(6, 'Dider', '$2y$10$7Y1XJ3UMbl77aBRSOhC1qudggXCRiRtUaAZeUGQxIHQx3585QDuEi', 'Dider', 'Roulin', 'yetunde22@gmail.com', 'm', 'Lille', 59000, '6 Rue Jacques Decour', 2);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(3) NOT NULL,
  `reference` varchar(20) CHARACTER SET latin1 NOT NULL,
  `categorie` varchar(50) CHARACTER SET latin1 NOT NULL,
  `titre` varchar(100) CHARACTER SET latin1 NOT NULL,
  `description` text CHARACTER SET latin1 NOT NULL,
  `photo` varchar(250) CHARACTER SET latin1 NOT NULL,
  `prix` int(3) NOT NULL,
  `stock` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `reference`, `categorie`, `titre`, `description`, `photo`, `prix`, `stock`) VALUES
(1, 'versace', 'Parfum homme', 'Versace', 'Eau de Parfum pour homme', 'img/produt9.png', 80, 6),
(2, 'Boss', 'Parfum homme', ' Hugo Boss\r\n\r\n ', 'Eau de Parfum pour homme', 'img/produit3.png', 120, 6),
(3, 'Dior', 'Parfum homme', 'DIOR ', 'Eau de Parfum pour homme', 'img/PRODUT1.png', 80, 1),
(4, 'Castor Oil', 'Oyé Vegan Cosmetics', ' Castor oil', '\r\n99% d\'ingrédients d\'origine naturelle\r\n', 'img/castoroil.png', 30, 9),
(5, 'Arganoil', 'Oyé Vegan Cosmetics', 'Arganoil', 'Marocaine Bio et de la Vitamine ', 'img/argn.png', 15, 1),
(6, 'Marula Oil', 'Oyé Vegan Cosmetics', 'Marula Oil', 'Huile Marula O10 Bio Pressée', 'img/oilmaur.png', 20, 1),
(7, 'Rosehip Seed Oil', 'Oyé Vegan Cosmetics', 'Rosehip Seed Oil', 'Pure Églantine huile de graines ', 'img/oilrose.png', 18, 3),
(8, 'Prada', 'Parfum homme', 'Prada Milano\r\n', ' \r\n\r\nEau de parfum', 'img/produt10.png', 90, 1),
(9, 'Gucci', 'Parfum homme', 'Gucci Bloom\r\n ', 'Eau de parfum', 'img/produit13.png', 50, 3),
(10, 'CHANEL', 'Parfum homme', 'Chanel Coco Noir', 'Eau de pafum', 'img/produit12.png', 80, 2),
(11, 'bleu channel', 'Parfum homme', ' Bleu De Chanel\r\n', 'Le Parfum', 'img/produt5.png', 120, 2),
(12, 'valentino ', 'Parfum homme', 'valentino Uomo', 'Eau de Toilette ', 'img/produt11.png', 56, 2),
(13, 'Cloves Oil', 'Oyé Vegan Cosmetics', 'Clove Seed Oil', 'Huile de Girofle 100% Naturel ', 'img/clovesoil.png\r\n', 15, 1),
(14, 'Coconut oil', 'Oyé Vegan Cosmetics', 'Coconut Oil', 'Huile de noix de coco bio', 'img/conutoil.png', 15, 5),
(15, 'Avocado oil', 'Oyé Vegan Cosmetics', 'Avocado oil', 'Huile d\'avocat vierge', 'img/avdoil.png', 12, 0),
(16, 'Sérum Booster', 'Oyé Vegan Cosmetics', 'Sérum Booster Oil', 'Soin Barbe Fortifiant ', 'img/bosster.png', 14, 5);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `id_membre` (`id_membre`) USING BTREE;

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Index pour la table `details_commande`
--
ALTER TABLE `details_commande`
  ADD PRIMARY KEY (`id_details_commande`),
  ADD KEY `id_commande` (`id_commande`),
  ADD KEY `id_produit` (`id_produit`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id_membre`),
  ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`),
  ADD UNIQUE KEY `reference` (`reference`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `details_commande`
--
ALTER TABLE `details_commande`
  MODIFY `id_details_commande` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_membre` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`id_membre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `details_commande`
--
ALTER TABLE `details_commande`
  ADD CONSTRAINT `details_commande_ibfk_1` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`),
  ADD CONSTRAINT `details_commande_ibfk_2` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
