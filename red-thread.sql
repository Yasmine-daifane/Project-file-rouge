-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 18 juin 2023 à 23:01
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

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

--
-- Déchargement des données de la table `costumer`
--

INSERT INTO `costumer` (`Id_costumer`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'hussein', 'bouik', 'hussbouik@gmail.com', 'huss'),
(2, 'Hyacinth', 'Reyes', 'dyqojifusy@mailinator.com', '$2y$10$Otq0dlmYZOAKfDKsabB0WuP4eLuqsDI850.mnm23NJh5yhiD3lYXO'),
(3, 'Dalton', 'Larsen', 'buvoqidos@mailinator.com', '$2y$10$q1x09U4AkuHBQ6blNH6uKub2zrIHZg1VBIopqcFWEcbZMN2wolw4y'),
(4, 'Vivian', 'Spears', 'pivamun@mailinator.com', '$2y$10$g5KsEznQSQKWtHtiwsQd9udLTSRCZhVi7LIjtcIUG3voRVjXRE7am'),
(5, 'Autumn', 'Matthews', 'ziru@mailinator.com', '$2y$10$lLJSiFkWJirhiK9RPHJnhuOBrFIaaXMc8YQJTfqcBxpybDPYsq3ga');

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
(2, 'Computer networking', 'Computer networking is the process of connecting computers and devices to share information and resources. It enables communication and data exchange between different devices, both locally and over long distances.'),
(3, 'Desing', 'Design is the process of creating visually appealing and functional solutions for various media, utilizing elements such as color, typography, and layout to communicate messages effectively.'),
(4, 'Web devloppemnt', '  \r\nWeb development services involve the creation, design, and maintenance of websites and web applications. A web development service provider offers expertise in various programming languages, such as HTML, CSS, JavaScript, and backend technologies like PHP or Python.');

-- --------------------------------------------------------

--
-- Structure de la table `requests`
--

CREATE TABLE `requests` (
  `Id_request` int(11) NOT NULL,
  `Id_costumer` int(11) DEFAULT NULL,
  `Id_Service` int(11) DEFAULT NULL,
  `demande` varchar(2000) NOT NULL,
  `date_demande` datetime NOT NULL,
  `status` varchar(50) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `requests`
--

INSERT INTO `requests` (`Id_request`, `Id_costumer`, `Id_Service`, `demande`, `date_demande`, `status`) VALUES
(1, 1, 83, 'hey i want a web application', '2023-06-14 14:02:22', 'Rejected');

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
(64, 'Network Setup and Configuration', 'Designing and implementing network infrastructure for businesses and organizations.', '1000', 2),
(65, 'Network Security', 'Assessing vulnerabilities and implementing security measures to protect networks from threats.', '1200', 2),
(66, 'Network Troubleshooting', 'Identifying and resolving network issues to ensure optimal performance and connectivity.', '500', 2),
(67, 'Wireless Networking', 'Setting up secure and reliable wireless networks for homes and businesses.', '800', 2),
(68, 'Network Monitoring', 'Implementing monitoring tools and systems to proactively manage and maintain network health.', '600', 2),
(72, 'Logo Design', 'Creating unique and memorable logos that represent a brands identity.', '500', 3),
(73, 'Graphic Design', 'Designing visually appealing graphics for various digital and print media.', '800', 3),
(74, 'UI/UX Design', 'Crafting intuitive and user-friendly interfaces for web and mobile applications.', '1000', 3),
(75, 'Print Design', 'Designing brochures, flyers, business cards, and other print materials.', '600', 3),
(76, 'Brand Identity Design', 'Developing a consistent brand identity through logos, color schemes, and brand guidelines.', '1200', 3),
(77, 'Packaging Design', 'Creating attractive and informative packaging designs for products.', '900', 3),
(78, 'Illustration', 'Producing custom illustrations for books, magazines, websites, and more.', '700', 3),
(79, 'Motion Graphics', 'Designing visually dynamic animations and motion graphics for videos and presentations.', '223', 3),
(81, 'Website Design', 'Professional and visually appealing website design for businesses and individuals.', '500', 4),
(82, 'Front-end Development', 'Creating interactive and responsive user interfaces using HTML, CSS, and JavaScript.', '800', 4),
(83, 'Back-end Development', 'Building server-side applications and APIs using frameworks like Node.js and Django.', '900', 4),
(84, 'E-commerce Solutions', 'Developing online stores with secure payment gateways and inventory management.', '1200', 4),
(85, 'CMS Development', 'Creating customized content management systems for efficient website management.', '700', 4),
(86, 'Website Maintenance', 'Providing regular updates, security checks, and bug fixes for existing websites.', '2332', 4),
(87, 'Responsive Design', 'Optimizing websites to adapt and perform well on various devices and screen sizes.', '400', 4),
(88, 'Web Hosting', 'Offering reliable web hosting services with high uptime and scalable infrastructure.', '100', 4);

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
  MODIFY `Id_costumer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `department`
--
ALTER TABLE `department`
  MODIFY `Id_department` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `requests`
--
ALTER TABLE `requests`
  MODIFY `Id_request` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `Id_Service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

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
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`Id_department`) REFERENCES `department` (`Id_department`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
