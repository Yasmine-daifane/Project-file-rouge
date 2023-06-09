

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 15 mai 2023 à 17:59
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
-- Base de données : `prototype-fil-rouge`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE costumer (
   Id_costumer INT AUTO_INCREMENT,
   first_name VARCHAR(50) NOT NULL,
  last_name VARCHAR(50) NOT NULL,
   email VARCHAR(100) NOT NULL,
   password VARCHAR(1000) NOT NULL,
   PRIMARY KEY (Id_costumer)
);

CREATE TABLE department (
   Id_department INT AUTO_INCREMENT,
   name VARCHAR(100) NOT NULL,
   description VARCHAR(1000) NOT NULL,
     PRIMARY KEY (Id_department)
);

INSERT INTO department (name, description)
VALUES ('Web Development', 'Department specializing in web development services'),
('Computer networking', 'Description of Service 2' ),
('Desing', 'Description of Service 6');






CREATE TABLE Service (
   Id_Service INT AUTO_INCREMENT,
   name VARCHAR(100) NOT NULL,
   description  VARCHAR(1000) NOT NULL,
   price VARCHAR(100) NOT NULL, 
   Id_department INT NOT NULL,
   PRIMARY KEY (Id_Service),
   FOREIGN KEY (Id_department) REFERENCES department (Id_department)
);


INSERT INTO Service (name, description,price, Id_department)
VALUES ('responive desing ', 'Department specializing in web development services','1500', 1),
('Computer networkiing', 'Description of Service 2', '150',2 ),
('Computer networkiing', 'Description of Service 2', '150',2 ),
('Computer networkiing', 'Description of Service 2', '150',2 ),
('Computer networkiing', 'Description of Service 2', '150',2 ),
('Computer networkiing', 'Description of Service 2', '150',2 ),
('Desing', 'Description of Service 6', '90', 2);






CREATE TABLE requests (  
    Id_request INT AUTO_INCREMENT,
   Id_costumer INT,
   Id_Service INT,
   message VARCHAR(2000) NOT NULL,
   messagedate DATETIME NOT NULL,

   PRIMARY KEY (Id_request),
   FOREIGN KEY (Id_costumer) REFERENCES costumer (Id_costumer),
   FOREIGN KEY (Id_Service) REFERENCES Service (Id_Service)
);


