-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 25 juin 2020 à 11:51
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `eshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(2, 'Makeup', NULL),
(3, 'Skincare', NULL),
(4, 'Shampoo', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `short_description` tinytext,
  `description` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(225) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `short_description`, `description`, `quantity`, `price`, `image`, `category_id`) VALUES
(10, 'Doori Daeng Ji', NULL, 'Doori Daeng Ji one of Korea\'s best shampoo product.', 0, 25, 'doori.jpg', 4),
(12, 'Makeup Korea', NULL, 'Avocado', 1, 25, 'skinfood.jpg', 2),
(20, 'Liz k First', NULL, 'Liz K First premium face-wash', 0, 20, 'Liz1.jpg', 3),
(30, 'Laneige', NULL, 'Laneige beauty cream', 0, 25, 'laneige1.jpg', 3);

-- --------------------------------------------------------

--
-- Structure de la table `product_categories`
--

DROP TABLE IF EXISTS `product_categories`;
CREATE TABLE IF NOT EXISTS `product_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_categories_category_id` (`category_id`),
  KEY `product_categories_product_id` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `product_categories`
--

INSERT INTO `product_categories` (`id`, `product_id`, `category_id`) VALUES
(1, 10, 4),
(2, 30, 3);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(225) NOT NULL,
  `last_name` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(225) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `is_admin`) VALUES
(1, 'franck', 'moua', 'franck@yahoo.com', 'franckmoua', 0),
(3, 'qsdf', 'test', 'franck@yahoo.com', '37670f216e9f412ccac2d3d1d904e272', 0),
(4, 'franckk', 'test', 'franckmoua@yahoo.com', '682a0c84f58ac2f8b2329d53def2bb22', 0),
(15, '123', '123', 'toto@yahoo.com', '202cb962ac59075b964b07152d234b70', 0),
(16, 'titi', 'toto', 'titi@yahoo.com', '202cb962ac59075b964b07152d234b70', 0),
(17, 'got', 'milk', 'try@yaoo.com', '202cb962ac59075b964b07152d234b70', 0),
(18, 'toto', 'tata', 'ppoto@yahoo.com', '202cb962ac59075b964b07152d234b70', 0);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `product_categories_category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_categories_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
