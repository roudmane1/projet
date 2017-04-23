-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 01 Avril 2017 à 22:25
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `le_store`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE IF NOT EXISTS `administrateur` (
  `id_admin` varchar(25) NOT NULL,
  `Nom_admin` varchar(50) DEFAULT NULL,
  `Prenom_admin` varchar(50) DEFAULT NULL,
  `Mail_admin` varchar(75) DEFAULT NULL,
  `Tel_admin` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `administrateur`
--

INSERT INTO `administrateur` (`id_admin`, `Nom_admin`, `Prenom_admin`, `Mail_admin`, `Tel_admin`) VALUES
('1', 'HAMMAD', 'Oussama', NULL, NULL),
('2', 'JENDARA', 'Yassine', NULL, NULL),
('3', 'FADEL', 'Marouane', NULL, NULL),
('4', 'ROUDMANE', 'Idriss', 'roudmane@gmail.com', 33668819227);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id_cat` varchar(25) NOT NULL,
  `nom_cat` varchar(100) NOT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `nom_cat`) VALUES
('1', 'Office Supplies'),
('2', 'Furniture'),
('3', 'Technology');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(100) NOT NULL AUTO_INCREMENT,
  `Nom_client` varchar(50) DEFAULT NULL,
  `Prenom_client` varchar(50) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Mail_client` varchar(50) DEFAULT NULL,
  `Adresse` varchar(250) DEFAULT NULL,
  `Tel_client` bigint(20) DEFAULT NULL,
  `mdp` varchar(200) NOT NULL,
  PRIMARY KEY (`id_client`),
  KEY `id_client` (`id_client`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id_client`, `Nom_client`, `Prenom_client`, `Age`, `Mail_client`, `Adresse`, `Tel_client`, `mdp`) VALUES
(2, 'roudmane', 'idriss', 22, 'roudmane@gmail.com', 'azerty', 123456789, '123');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `Date_commande` datetime DEFAULT NULL,
  `Mode_livraison` varchar(50) DEFAULT NULL,
  `id_client` int(100) NOT NULL,
  PRIMARY KEY (`id_commande`),
  KEY `id_commande` (`id_commande`),
  KEY `id_commande_2` (`id_commande`),
  KEY `id_commande_3` (`id_commande`),
  KEY `id_client` (`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `marquer_comme_envoye`
--

CREATE TABLE IF NOT EXISTS `marquer_comme_envoye` (
  `id_admin` varchar(25) NOT NULL,
  `id_commande` int(11) NOT NULL,
  PRIMARY KEY (`id_admin`,`id_commande`),
  KEY `id_commande` (`id_commande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `message_client`
--

CREATE TABLE IF NOT EXISTS `message_client` (
  `id_mess` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_client` varchar(100) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id_mess`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `message_client`
--

INSERT INTO `message_client` (`id_mess`, `Nom_client`, `message`) VALUES
(2, 'arjeiojzfdoi', 'jkzelnqskldnqskl');

-- --------------------------------------------------------

--
-- Structure de la table `modifier`
--

CREATE TABLE IF NOT EXISTS `modifier` (
  `id_produit` varchar(25) NOT NULL,
  `id_admin` varchar(25) NOT NULL,
  PRIMARY KEY (`id_produit`,`id_admin`),
  KEY `FK_modifier_id_admin` (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `id_produit` varchar(25) NOT NULL,
  `Nom_produit` varchar(150) DEFAULT NULL,
  `Quantite` bigint(100) NOT NULL,
  `Prix` bigint(100) NOT NULL,
  `url_photo` varchar(250) NOT NULL,
  `id_sscat` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_produit`),
  KEY `id_produit` (`id_produit`),
  KEY `id_sscat` (`id_sscat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `Nom_produit`, `Quantite`, `Prix`, `url_photo`, `id_sscat`) VALUES
('13', 'samsung galaxy s2', 15, 450, 'product-6.jpg', '17'),
('14', 'power bank', 46, 25, 'powr bank.jpg', '17'),
('15', 'Playstation 4', 25, 350, 'product-4.jpg', '1'),
('17', 'DELL-1545-NOIR', 10, 350, 'DELL-1545-NOIR-02.jpg', '3'),
('18', 'nikon-cooplix', 65, 250, 'nikon_coolpix_compact_camera_a100_red_hero--original.jpg', '0'),
('19', 'ipad-pro', 20, 650, 'identify-ipad-pro.jpg', '15'),
('20', 'samsung-galaxy-s7-edge-2', 65, 350, 'samsung-galaxy-s7-edge-2.jpg', '17'),
('21', 'Iphone-4s', 42, 200, 'product-3.jpg', '17'),
('22', 'dell-xps-13-2016-', 30, 300, 'dell-xps-13-2016-770x577.jpg', '3'),
('23', 'hp-NB-15', 26, 520, '123.jpg', '3'),
('24', 'smart-watch', 20, 100, 'LD0002060568_2.jpg', '17'),
('25', 'samsung-galaxy-tab-slide', 20, 360, 'rendu-3d-tablette-samsung-galaxy-tab-slide_600.jpg', '17'),
('26', 'Macbook-pro-2016', 30, 1250, 'Macbook-Pro-2016.jpg', '3'),
('27', 'Iphone-6s', 65, 650, 'the-iphone-6s-and-iphone-6s-plus-are-now-offici1.jpg', '17'),
('29', 'samsung galaxy s6', 60, 300, 'hero-ice.jpg', '17'),
('30', 'smartwatch-windows', 12, 220, 'smartwatch.jpg', '17'),
('31', 'lenovo-yoga-tab', 40, 300, 'lenovo-yoga-ta.jpg', '3'),
('32', 'samsung tab3', 20, 150, '488837.jpg', '15'),
('33', 'sony Tab', 30, 254, 'download.jpg', '15'),
('34', 'Objectif nikon', 10, 360, 'LD0000716400.jpg', '0'),
('35', 'apple smartwatch', 20, 400, 'the-way-apple-leverages-its-smartwatch-may-or-may-not-be-effective-_1633_665726_0_14101865_500.jpg', '17'),
('36', 'Toshiba', 20, 320, 'toshiba-satellite-s50-b-151.jpg', '3'),
('37', 'samsung tab4', 40, 310, 'samsung-galaxy-tab-4-10-1-wi-fi-1.jpg', '15'),
('38', 'Tab windows', 32, 290, 'document_service_12892_823_5_1088085274.jpg', '15'),
('39', 'xbox one', 40, 300, '222760-en-US-Xbox-Mod-G-BTS-XboxOne-Console-mobile.jpg', '1'),
('41', 'HP bureau', 30, 450, 'Hp-Kit-Ordinateur-300x190.jpg', '3'),
('42', 'Canon 50d', 35, 755, 'llll.jpg', '0'),
('43', 'HTC one', 32, 150, ';,.jpg', '17'),
('44', 'smatwatch apple1', 20, 50, 'ematic_esw454w_smart_watch_1039958.jpg', '17'),
('45', 'windows TAB keyboard', 20, 520, 'aa.jpg', '15'),
('46', 'Nokia lumia', 32, 90, '13275871_1101314533269056_1660771629_n.jpg', '17'),
('47', 'electro watch', 34, 90, 'i.jpg', '17'),
('48', 'samsung smart tv', 24, 560, 'product-thumb-4.jpg', '3');

-- --------------------------------------------------------

--
-- Structure de la table `se_composer`
--

CREATE TABLE IF NOT EXISTS `se_composer` (
  `Quantite` varchar(25) DEFAULT NULL,
  `Prix` float DEFAULT NULL,
  `id_commande` int(11) NOT NULL,
  `id_produit` varchar(25) NOT NULL,
  PRIMARY KEY (`id_commande`,`id_produit`),
  KEY `id_produit` (`id_produit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sous_categorie`
--

CREATE TABLE IF NOT EXISTS `sous_categorie` (
  `id_sscat` varchar(25) NOT NULL,
  `nom_souscat` varchar(100) NOT NULL,
  `id_cat` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_sscat`),
  KEY `id_cat` (`id_cat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `sous_categorie`
--

INSERT INTO `sous_categorie` (`id_sscat`, `nom_souscat`, `id_cat`) VALUES
('0', 'camera', '3'),
('1', 'Appliances', '1'),
('10', 'Office Machines', '3'),
('11', 'Pens & Art Supplies', '1'),
('12', 'Copiers and Fax', '3'),
('13', 'Rubber Bands', '1'),
('14', 'Storage & Organization', '1'),
('15', 'Tablette', '2'),
('16', 'Scissors, Rulers and Trimmers', '1'),
('17', 'Telephones and Communication', '3'),
('2', 'Binders and Binder Accessories', '1'),
('3', 'Computer Peripherals', '3'),
('4', 'Chairs & Chairmats', '2'),
('5', 'Bookcases', '2'),
('6', 'Paper', '1'),
('7', 'Office Furnishings', '2'),
('8', 'Labels', '1'),
('9', 'Envelopes', '1');

-- --------------------------------------------------------

--
-- Structure de la table `supprimer`
--

CREATE TABLE IF NOT EXISTS `supprimer` (
  `id_admin` varchar(25) NOT NULL,
  `id_produit` varchar(25) NOT NULL,
  PRIMARY KEY (`id_admin`,`id_produit`),
  KEY `id_produit` (`id_produit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `valider`
--

CREATE TABLE IF NOT EXISTS `valider` (
  `id_commande` int(100) NOT NULL,
  `id_admin` varchar(25) NOT NULL,
  PRIMARY KEY (`id_commande`,`id_admin`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`),
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`);

--
-- Contraintes pour la table `marquer_comme_envoye`
--
ALTER TABLE `marquer_comme_envoye`
  ADD CONSTRAINT `FK_marquer_comme_envoye_id_admin` FOREIGN KEY (`id_admin`) REFERENCES `administrateur` (`id_admin`),
  ADD CONSTRAINT `marquer_comme_envoye_ibfk_1` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`);

--
-- Contraintes pour la table `modifier`
--
ALTER TABLE `modifier`
  ADD CONSTRAINT `FK_modifier_id_admin` FOREIGN KEY (`id_admin`) REFERENCES `administrateur` (`id_admin`),
  ADD CONSTRAINT `modifier_ibfk_1` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`),
  ADD CONSTRAINT `produit_ibfk_2` FOREIGN KEY (`id_sscat`) REFERENCES `sous_categorie` (`id_sscat`);

--
-- Contraintes pour la table `se_composer`
--
ALTER TABLE `se_composer`
  ADD CONSTRAINT `se_composer_ibfk_1` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`),
  ADD CONSTRAINT `se_composer_ibfk_2` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`);

--
-- Contraintes pour la table `sous_categorie`
--
ALTER TABLE `sous_categorie`
  ADD CONSTRAINT `sous_categorie_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `categorie` (`id_cat`);

--
-- Contraintes pour la table `supprimer`
--
ALTER TABLE `supprimer`
  ADD CONSTRAINT `FK_supprimer_id_admin` FOREIGN KEY (`id_admin`) REFERENCES `administrateur` (`id_admin`),
  ADD CONSTRAINT `supprimer_ibfk_1` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`);

--
-- Contraintes pour la table `valider`
--
ALTER TABLE `valider`
  ADD CONSTRAINT `valider_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `administrateur` (`id_admin`),
  ADD CONSTRAINT `valider_ibfk_2` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
