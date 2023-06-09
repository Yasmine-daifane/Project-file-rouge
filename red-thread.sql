-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 09 juin 2023 à 14:16
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `red-thread`
--

-- --------------------------------------------------------

--
-- Structure de la table `costumer`
--

CREATE TABLE `costumer` (
  `Id_costumer` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `department`
--

CREATE TABLE `department` (
  `Id_department` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `department`
--

INSERT INTO `department` (`Id_department`, `name`, `description`) VALUES
(1, 'Web Development', 'Web development is the process of creating and maintaining websites and web applications using programming languages and technologies. It involves designing, coding, and building the structure and functionality of websites to provide an interactive and user-friendly experience.'),
(2, 'Computer networking', 'Computer networking is the process of connecting computers and devices to share information and resources. It enables communication and data exchange between different devices, both locally and over long distances.'),
(3, 'Desing', 'Design is the process of creating visually appealing and functional solutions for various media, utilizing elements such as color, typography, and layout to communicate messages effectively.');

-- --------------------------------------------------------

--
-- Structure de la table `requests`
--

CREATE TABLE `requests` (
  `Id_request` int(11) NOT NULL,
  `Id_costumer` int(11) DEFAULT NULL,
  `Id_Service` int(11) DEFAULT NULL,
  `message` varchar(2000) NOT NULL,
  `messagedate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `Id_Service` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `Id_department` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`Id_Service`, `name`, `description`, `price`, `Id_department`) VALUES
(56, 'Website Design', 'Professional and visually appealing website design for businesses and individuals.', '$500', 1),
(57, 'Front-end Development', 'Creating interactive and responsive user interfaces using HTML, CSS, and JavaScript.', '$800', 1),
(58, 'Back-end Development', 'Building server-side applications and APIs using frameworks like Node.js and Django.', '$900', 1),
(59, 'E-commerce Solutions', 'Developing online stores with secure payment gateways and inventory management.', '$1200', 1),
(60, 'CMS Development', 'Creating customized content management systems for efficient website management.', '$700', 1),
(61, 'Website Maintenance', 'Providing regular updates, security checks, and bug fixes for existing websites.', '$300/month', 1),
(62, 'Responsive Design', 'Optimizing websites to adapt and perform well on various devices and screen sizes.', '$400', 1),
(63, 'Web Hosting', 'Offering reliable web hosting services with high uptime and scalable infrastructure.', '$100/month', 1),
(64, 'Network Setup and Configuration', 'Designing and implementing network infrastructure for businesses and organizations.', '$1000', 2),
(65, 'Network Security', 'Assessing vulnerabilities and implementing security measures to protect networks from threats.', '$1200', 2),
(66, 'Network Troubleshooting', 'Identifying and resolving network issues to ensure optimal performance and connectivity.', '$500', 2),
(67, 'Wireless Networking', 'Setting up secure and reliable wireless networks for homes and businesses.', '$800', 2),
(68, 'Network Monitoring', 'Implementing monitoring tools and systems to proactively manage and maintain network health.', '$600', 2),
(69, 'VPN Solutions', 'Creating secure Virtual Private Networks for remote access and data encryption.', '$900', 2),
(70, 'Network Upgrades and Expansion', 'Assessing and upgrading network infrastructure to support growing business needs.', '$1500', 2),
(71, 'Network Documentation', 'Creating detailed documentation of network configurations, topologies, and protocols.', '$400', 2),
(72, 'Logo Design', 'Creating unique and memorable logos that represent a brands identity.', '$500', 3),
(73, 'Graphic Design', 'Designing visually appealing graphics for various digital and print media.', '$800', 3),
(74, 'UI/UX Design', 'Crafting intuitive and user-friendly interfaces for web and mobile applications.', '$1000', 3),
(75, 'Print Design', 'Designing brochures, flyers, business cards, and other print materials.', '$600', 3),
(76, 'Brand Identity Design', 'Developing a consistent brand identity through logos, color schemes, and brand guidelines.', '$1200', 3),
(77, 'Packaging Design', 'Creating attractive and informative packaging designs for products.', '$900', 3),
(78, 'Illustration', 'Producing custom illustrations for books, magazines, websites, and more.', '$700', 3),
(79, 'Motion Graphics', 'Designing visually dynamic animations and motion graphics for videos and presentations.', '$1500', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `costumer`
--
ALTER TABLE `costumer`
  ADD PRIMARY KEY (`Id_costumer`);

--
-- Index pour la table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Id_department`);

--
-- Index pour la table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`Id_request`),
  ADD KEY `Id_costumer` (`Id_costumer`),
  ADD KEY `Id_Service` (`Id_Service`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`Id_Service`),
  ADD KEY `Id_department` (`Id_department`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `costumer`
--
ALTER TABLE `costumer`
  MODIFY `Id_costumer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `department`
--
ALTER TABLE `department`
  MODIFY `Id_department` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `requests`
--
ALTER TABLE `requests`
  MODIFY `Id_request` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `Id_Service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_ibfk_1` FOREIGN KEY (`Id_costumer`) REFERENCES `costumer` (`Id_costumer`),
  ADD CONSTRAINT `requests_ibfk_2` FOREIGN KEY (`Id_Service`) REFERENCES `service` (`Id_Service`);

--
-- Contraintes pour la table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`Id_department`) REFERENCES `department` (`Id_department`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
