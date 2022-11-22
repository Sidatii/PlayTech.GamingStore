-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 22 nov. 2022 à 16:04
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `playtech`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(11) NOT NULL,
  `Email` varchar(60) DEFAULT NULL,
  `Password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `IDC` int(11) NOT NULL,
  `CatName` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`IDC`, `CatName`) VALUES
(1, 'Pc Gaming'),
(2, 'Laptops'),
(3, 'Cartes Mères'),
(4, 'Cartes Graphiques'),
(5, 'Memoire PC'),
(6, 'Processeurs'),
(7, 'Boitiers'),
(8, 'Alimentations'),
(9, 'Stockage'),
(10, 'Cooling');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `ID` int(11) NOT NULL,
  `ProductName` varchar(40) DEFAULT NULL,
  `Discription` text DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Price en DH` float DEFAULT NULL,
  `IDC` int(11) DEFAULT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`ID`, `ProductName`, `Discription`, `Quantity`, `Price en DH`, `IDC`, `img`) VALUES
(7, 'sidatLaptops', 'Ordinateur portable Cartes Graphiques Et Cartes graphiques MSI Gaming ordinateu', 100, 20000, 2, 'images/Laptops.png'),
(8, 'intel core i9', 'intel core i9 microprocessors lga 2066 kab intel ', 20, 3000, 6, 'images/Processeurs.png'),
(9, 'Toughpower DPS G RGB 750W Gold', 'ower supply unit toughpower dps g 1 5 w gold p n computex 2 16 thermaltake casemod being mass prod', 20, 2000, 8, 'images/Alimentations.png'),
(10, 'Samsung 850 PRO ', 'kisspng-samsung 85 pro iii ssd solid state drive serial a more memory amp storage samsung business sg ', 20, 1000, 9, 'images/Stockage.png'),
(11, 'EK FLUID GAMING', 'ekwb water cooling water block ek fluid gaming a24 ek cryofuel blood red premix 9ml fluidgamin', 20, 3000, 10, 'images/Cooling.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`IDC`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDC` (`IDC`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `IDC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits_ibfk_1` FOREIGN KEY (`IDC`) REFERENCES `category` (`IDC`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
