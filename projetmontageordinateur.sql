-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 22 fév. 2022 à 14:47
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetmontageordinateur`
--

-- --------------------------------------------------------

--
-- Structure de la table `alimentation`
--

CREATE TABLE `alimentation` (
  `idComposant` int NOT NULL,
  `puissance` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `alimentation`
--

INSERT INTO `alimentation` (`idComposant`, `puissance`) VALUES
(35, 550),
(36, 550),
(37, 550),
(38, 550),
(39, 550);

-- --------------------------------------------------------

--
-- Structure de la table `carte_graphique`
--

CREATE TABLE `carte_graphique` (
  `idComposant` int NOT NULL,
  `memoire` int DEFAULT NULL,
  `chipset` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `carte_graphique`
--

INSERT INTO `carte_graphique` (`idComposant`, `memoire`, `chipset`) VALUES
(15, 3, 0),
(16, 3, 0),
(17, 3, 0),
(18, 3, 0),
(19, 3, 0);

-- --------------------------------------------------------

--
-- Structure de la table `carte_mere`
--

CREATE TABLE `carte_mere` (
  `idComposant` int NOT NULL,
  `socket___chipset` tinyint(1) DEFAULT NULL,
  `format_` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `carte_mere`
--

INSERT INTO `carte_mere` (`idComposant`, `socket___chipset`, `format_`) VALUES
(1, 0, 'format test'),
(2, 0, 'format test'),
(3, 0, 'format test'),
(4, 0, 'format test');

-- --------------------------------------------------------

--
-- Structure de la table `clavier`
--

CREATE TABLE `clavier` (
  `idComposant` int NOT NULL,
  `sansFil` tinyint(1) DEFAULT NULL,
  `paveNum` tinyint(1) DEFAULT NULL,
  `typeTouche` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `clavier`
--

INSERT INTO `clavier` (`idComposant`, `sansFil`, `paveNum`, `typeTouche`) VALUES
(20, 0, 0, 'typeTouche test'),
(21, 0, 0, 'typeTouche test'),
(22, 0, 0, 'typeTouche test'),
(23, 0, 0, 'typeTouche test'),
(24, 0, 0, 'typeTouche test');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `idCommentaire` int NOT NULL,
  `dateCommentaire` date DEFAULT NULL,
  `texte` varchar(1000) DEFAULT NULL,
  `repondue` tinyint(1) DEFAULT NULL,
  `adresseMail` varchar(50) DEFAULT NULL,
  `idModele_` int NOT NULL,
  `adresseMail_1` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`idCommentaire`, `dateCommentaire`, `texte`, `repondue`, `adresseMail`, `idModele_`, `adresseMail_1`) VALUES
(1, '2021-05-21', 'Tout est fonctionnel !', 0, NULL, 1, 'monteur@cldl.com'),
(2, '2021-04-13', 'Le processeur surchauffe beaucoup trop pour les jeux recents !', 1, NULL, 4, 'monteur@cldl.com'),
(3, '2021-04-14', 'Merci pour votre retour, nous allons revoir la conception de ce modèle.', 0, 'concepteur@cldl.com', 1, NULL),
(4, '2021-08-17', 'Très puissant, tout les jeux tournent parfaitement en 240 fps constant', 0, NULL, 2, 'monteur@cldl.com'),
(5, '2021-09-18', 'Prise en main très agreable, très léger comme prévu rien a redire !', 0, NULL, 6, 'monteur@cldl.com'),
(6, '2021-07-11', 'Le pc est actuellement HS, je l ai utilisé en plein soleil', 1, NULL, 7, 'monteur@cldl.com'),
(7, '2021-07-12', 'Merci pour votre retour, Actuellement le pc peut resister jusqu à 50 degrès si vous depassez ce seuil cela est normal qu il disfonctionne !', 0, 'concepteur@cldl.com', 1, NULL),
(8, '2021-09-21', 'Jamais vu un pc pareil jai chercher tout les defauts possibles il n en a aucun cest affolant !', 0, NULL, 3, 'monteur@cldl.com'),
(9, '2021-02-21', 'Tout est opperationnel !', 0, NULL, 8, 'monteur@cldl.com');

-- --------------------------------------------------------

--
-- Structure de la table `concepteur`
--

CREATE TABLE `concepteur` (
  `adresseMail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `concepteur`
--

INSERT INTO `concepteur` (`adresseMail`) VALUES
('concepteur@cldl.com');

-- --------------------------------------------------------

--
-- Structure de la table `contient`
--

CREATE TABLE `contient` (
  `idComposant` int NOT NULL,
  `idModele_` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `disque_dur__ssd`
--

CREATE TABLE `disque_dur__ssd` (
  `idComposant` int NOT NULL,
  `capacite` int DEFAULT NULL,
  `ssd` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `disque_dur__ssd`
--

INSERT INTO `disque_dur__ssd` (`idComposant`, `capacite`, `ssd`) VALUES
(40, 250, 0),
(41, 250, 0),
(42, 250, 0),
(43, 250, 0),
(44, 250, 0);

-- --------------------------------------------------------

--
-- Structure de la table `ecran`
--

CREATE TABLE `ecran` (
  `idComposant` int NOT NULL,
  `taille` decimal(15,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `ecran`
--

INSERT INTO `ecran` (`idComposant`, `taille`) VALUES
(30, '24.0'),
(31, '24.0'),
(32, '24.0'),
(33, '24.0'),
(34, '24.0');

-- --------------------------------------------------------

--
-- Structure de la table `memoire_vive`
--

CREATE TABLE `memoire_vive` (
  `idComposant` int NOT NULL,
  `capacite` int DEFAULT NULL,
  `nombre_de_barrettes` int DEFAULT NULL,
  `type__frequence___norme_memoire` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `memoire_vive`
--

INSERT INTO `memoire_vive` (`idComposant`, `capacite`, `nombre_de_barrettes`, `type__frequence___norme_memoire`) VALUES
(10, 2, 2, '2.7'),
(11, 2, 2, '2.7'),
(12, 2, 2, '2.7'),
(13, 2, 2, '2.7'),
(14, 2, 2, '2.7');

-- --------------------------------------------------------

--
-- Structure de la table `modele`
--

CREATE TABLE `modele` (
  `idModele_` int NOT NULL,
  `pcPortable` tinyint(1) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `nombreExemplaire` int DEFAULT NULL,
  `archive` tinyint(1) DEFAULT NULL,
  `quantite` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `modele`
--

INSERT INTO `modele` (`idModele_`, `pcPortable`, `nom`, `description`, `nombreExemplaire`, `archive`, `quantite`) VALUES
(1, 1, 'Asus Monster', 'Le Asus Monster est le fruit de l\'association entre AMD et Asus. Il embarque les processeur et GPU les plus performants d\'AMD dans un châssis qui a fait ses preuves', 5, 1, 20),
(2, 1, 'The Asus Prime', 'Le Asus prime est un véritable concentré de puissance qui donne vie à vos idées', 6, 1, 10),
(3, 0, 'Asus C22', 'Le Asus C22 est l\'exemple même de la perfection', 3, 0, 3),
(4, 0, 'Asus X22B', 'Melangez rapidité et fluidité est obtenez le nouvel Asus X22B', 4, 1, 5),
(5, 0, 'Sohafa', 'On ne le presente plus le Sohafa est le pc parfait pour naviguer sur le web', 5, 0, 7),
(6, 1, 'Hafi36', 'Le pc le plus leger du monde parfait pour voyager', 6, 0, 8),
(7, 1, 'Kika', 'Le pc qui resiste a la chaleur', 4, 1, 4),
(8, 1, 'Asus Kitty Kat', 'Les enfants se l\'arrache voici le nouveau pc Asus Kitty Kat', 5, 0, 6),
(9, 0, 'DelRosso', 'Le DelRosso est petit rapide et puissant', 3, 1, 10);

-- --------------------------------------------------------

--
-- Structure de la table `monteur`
--

CREATE TABLE `monteur` (
  `adresseMail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `monteur`
--

INSERT INTO `monteur` (`adresseMail`) VALUES
('monteur@cldl.com');

-- --------------------------------------------------------

--
-- Structure de la table `pieces`
--

CREATE TABLE `pieces` (
  `idComposant` int NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prix` decimal(15,2) DEFAULT NULL,
  `categorie` varchar(50) DEFAULT NULL,
  `marque` varchar(50) DEFAULT NULL,
  `quantite` int DEFAULT NULL,
  `nbDeModeleCreer` int DEFAULT NULL,
  `dateAjout` date DEFAULT NULL,
  `compatiblePortable_` tinyint(1) DEFAULT NULL,
  `archive` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `pieces`
--

INSERT INTO `pieces` (`idComposant`, `nom`, `prix`, `categorie`, `marque`, `quantite`, `nbDeModeleCreer`, `dateAjout`, `compatiblePortable_`) VALUES
(1, 'ASUS PRIME B450', '88.64', 'carte mère', 'ASUS', 10, 5, '2020-04-26', 0),
(2, 'Gigabyte B450 Aorus Elite', '94.99', 'carte mère', 'Gigabyte', 6, 3, '2021-01-04', 0),
(3, 'MSI B450 Gaming Plus Max', '87.79', 'carte mère', 'MSI', 3, 2, '2021-06-25', 1),
(4, 'ROG STRIX B550-F GAMING', '201.95', 'carte mère', 'ROG', 5, 3, '2021-11-10', 0),
(5, 'AMD RYZEN 5', '144.99', 'processeur', 'AMD', 7, 3, '2021-08-11', 1),
(6, 'AMD RYZEN 7', '319.99', 'processeur', 'AMD', 4, 2, '2022-01-11', 1),
(7, 'Intel Core i3', '94.96', 'processeur', 'INTEL', 2, 2, '2020-09-21', 1),
(8, 'Intel Core i5', '159.96', 'processeur', 'INTEL', 3, 1, '2020-11-30', 1),
(9, 'Intel Core i7', '457.00', 'processeur', 'INTEL', 5, 4, '2020-12-15', 1),
(10, 'Mémoire RAM Corsair', '42.90', 'memoire vive', 'CORSAIR', 7, 4, '2021-07-05', 0),
(11, 'Mémoire RAM Crucial', '77.00', 'memoire vive', 'CRUCIAL', 2, 1, '2021-04-04', 1),
(12, 'Mémoire RAM Kingston', '234.08', 'memoire vive', 'KINGSTON', 5, 3, '2021-02-27', 0),
(13, 'Mémoire RAM Novatech', '12.39', 'memoire vive', 'NOVATECH', 3, 3, '2021-01-01', 1),
(14, 'Mémoire RAM Juhor', '164.43', 'memoire vive', 'JUHOR', 8, 2, '2021-06-22', 0),
(15, 'MSI GeForce RTX 3060 Ti', '869.99', 'carte graphique', 'NVIDIA', 4, 2, '2021-03-08', 0),
(16, 'Gigabyte Radeon RX 6500 XT', '359.99', 'carte graphique', 'AMD', 3, 1, '2021-06-12', 0),
(17, 'Gigabyte GeForce RTX 2060', '599.99', 'carte graphique', 'NVIDIA', 6, 3, '2021-01-01', 0),
(18, 'Carte graphique GTX 970M', '158.74', 'carte graphique', 'NVIDIA', 3, 1, '2021-10-02', 1),
(19, 'Carte graphique AMD M92', '11.64', 'carte graphique', 'AMD', 1, 1, '2021-01-23', 1),
(20, 'Clavier ALIENWARE RGB', '109.26', 'clavier', 'DELL', 5, 3, '2020-03-07', 0),
(21, 'Clavier sans fil Gamer Corsair', '99.99', 'clavier', 'CORSAIR', 3, 2, '2021-05-06', 1),
(22, 'Clavier Trust Veza', '27.91', 'clavier', 'Trust Veza', 4, 4, '2021-01-29', 1),
(23, 'Clavier Razer BlackWidow V3', '109.99', 'clavier', 'RAZER', 2, 2, '2021-07-11', 0),
(24, 'Clavier MSI Vigor', '34.99', 'clavier', 'MSI', 8, 2, '2021-01-04', 0),
(25, 'Souris Gaming Logitech G203', '26.59', 'souris', 'LOGITECH', 6, 3, '2021-07-14', 1),
(26, 'Souris Razer Basilisk X ', '69.90', 'souris', 'RAZER', 4, 1, '2021-03-03', 1),
(27, 'Souris Gaming sans fil LOGITEC', '167.99', 'souris', 'LOGITEC', 3, 3, '2021-11-09', 1),
(28, 'Souris Corsair Scimitar ELITE RGB ', '69.95', 'souris', 'CORSAIR', 6, 1, '2021-10-01', 1),
(29, 'Souris Microsoft NGX 00012 Pro', '83.46', 'souris', 'MICROSOFT', 5, 4, '2021-07-12', 1),
(30, 'Ecran PC OPTIX G24C6', '189.90', 'ecran', 'MSI', 6, 3, '2021-08-03', 0),
(31, 'Ecran AOC C27G2ZE Adaptive Sync ', '254.99', 'ecran', 'AOC', 2, 1, '2021-02-07', 0),
(32, 'Ecran PC SAMSUNG ODYSSEY G9 49', '1399.00', 'ecran', 'SAMSUNG', 5, 3, '2021-06-06', 0),
(33, 'Ecran PC Gamer Asus TUF VG247Q1A', '199.00', 'ecran', 'ASUS', 2, 2, '2021-08-21', 0),
(34, 'Ecran ACER Nitro VG270bmipx', '198.00', 'ecran', 'ACER', 3, 2, '2021-01-19', 0),
(35, 'Alimentation Corsair PC VS350', '41.95', 'alimentation', 'CORSAIR', 3, 1, '2021-09-09', 0),
(36, 'Alimentation Thermaltake LitePower 550W', '38.99', 'alimentation', 'Thermaltake', 2, 1, '2021-11-11', 0),
(37, 'Alimentation EVGA 100-W1-0600-K2', '56.37', 'alimentation', 'EVGA', 6, 3, '2021-04-13', 0),
(38, 'Alimentation Corsair RM650', '79.99', 'alimentation', 'CORSAIR', 5, 1, '2021-05-01', 0),
(39, 'Alimentation Cooler Master V650', '109.99', 'alimentation', 'COOLER MASTER', 4, 2, '2021-07-25', 0),
(40, 'Samsung Disque SSD 870 QVO 1To', '99.99', 'disque dur/ssd', 'SAMSUNG', 4, 4, '2021-12-10', 0),
(41, 'SanDisk SSD Plus', '78.99', 'disque dur/ssd', 'SanDisk', 5, 2, '2021-04-21', 0),
(42, 'Crucial 500Go CT500MX500SSD1 SSD', '54.99', 'disque dur/ssd', 'CRUCIAL', 3, 1, '2021-06-17', 0),
(43, 'Seagate 8To BARRACUDA 3.5', '209.99', 'disque dur/ssd', 'SEAGATE', 2, 2, '2021-10-03', 0),
(44, 'Toshiba – Disque dur interne', '19.99', 'disque dur/ssd', 'TOSHIBA', 4, 2, '2021-02-14', 0);

-- --------------------------------------------------------

--
-- Structure de la table `processeur`
--

CREATE TABLE `processeur` (
  `idComposant` int NOT NULL,
  `nombre_de_coeur` int DEFAULT NULL,
  `chipsets_compatibles` tinyint(1) DEFAULT NULL,
  `frequence_CPU_` decimal(15,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `processeur`
--

INSERT INTO `processeur` (`idComposant`, `nombre_de_coeur`, `chipsets_compatibles`, `frequence_CPU_`) VALUES
(5, 3, 0, '2.50'),
(6, 3, 0, '2.50'),
(7, 3, 0, '2.50'),
(8, 3, 0, '2.50'),
(9, 3, 0, '2.50');

-- --------------------------------------------------------

--
-- Structure de la table `souris_pad`
--

CREATE TABLE `souris_pad` (
  `idComposant` int NOT NULL,
  `sansFil` tinyint(1) DEFAULT NULL,
  `nbTouche` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `souris_pad`
--

INSERT INTO `souris_pad` (`idComposant`, `sansFil`, `nbTouche`) VALUES
(25, 0, 26),
(26, 0, 26),
(27, 0, 26),
(28, 0, 26),
(29, 0, 26);

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

CREATE TABLE `stock` (
  `idProduit` int NOT NULL,
  `quantite` int DEFAULT NULL,
  `entree_sortie` tinyint(1) DEFAULT NULL,
  `createdDate` date DEFAULT NULL,
  `idComposant` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `stock`
--

INSERT INTO `stock` (`idProduit`, `quantite`, `entree_sortie`, `createdDate`, `idComposant`) VALUES
(1, 6, 1, '2021-09-05', 1),
(2, 2, 0, '2021-09-18', 2),
(3, 1, 1, '2021-10-19', 3),
(4, 2, 0, '2021-06-13', 4),
(5, 2, 0, '2021-11-26', 5),
(6, 3, 0, '2021-10-20', 6),
(7, 2, 1, '2021-06-08', 7),
(8, 8, 1, '2021-12-17', 8),
(9, 4, 1, '2021-09-06', 9),
(10, 6, 0, '2021-05-31', 10),
(11, 7, 0, '2021-10-13', 11),
(12, 6, 0, '2021-08-05', 12),
(13, 9, 0, '2021-05-18', 13),
(14, 8, 1, '2021-09-09', 14),
(15, 10, 0, '2021-12-19', 15),
(16, 2, 1, '2021-11-16', 16),
(17, 5, 0, '2021-03-14', 17),
(18, 6, 0, '2021-09-07', 18),
(19, 4, 0, '2021-12-02', 19),
(20, 4, 0, '2021-05-25', 20),
(21, 6, 1, '2021-08-07', 21),
(22, 1, 1, '2021-06-09', 22),
(23, 5, 1, '2021-03-19', 23),
(24, 2, 0, '2021-04-25', 24),
(25, 8, 0, '2021-10-05', 25),
(26, 7, 1, '2021-11-01', 26),
(27, 5, 0, '2021-07-29', 27),
(28, 8, 1, '2021-03-16', 28),
(29, 1, 0, '2021-07-16', 29),
(30, 6, 0, '2021-12-15', 30),
(31, 6, 0, '2021-09-02', 31),
(32, 5, 1, '2021-03-14', 32),
(33, 7, 1, '2021-03-11', 33),
(34, 1, 0, '2021-10-23', 34),
(35, 9, 1, '2021-09-08', 35),
(36, 9, 1, '2021-04-19', 36),
(37, 4, 0, '2021-07-16', 37),
(38, 2, 0, '2021-02-08', 38),
(39, 1, 0, '2021-10-19', 39),
(40, 5, 0, '2021-11-16', 40),
(41, 2, 1, '2021-11-30', 41),
(42, 3, 0, '2021-06-30', 42),
(43, 1, 0, '2021-08-18', 43),
(44, 9, 1, '2021-08-10', 44);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `adresseMail` varchar(50) NOT NULL,
  `motDePasse` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`adresseMail`, `motDePasse`) VALUES
('monteur@cldl.com', 'titi'),
('concepteur@cldl.com', 'toto');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `alimentation`
--
ALTER TABLE `alimentation`
  ADD PRIMARY KEY (`idComposant`);

--
-- Index pour la table `carte_graphique`
--
ALTER TABLE `carte_graphique`
  ADD PRIMARY KEY (`idComposant`);

--
-- Index pour la table `carte_mere`
--
ALTER TABLE `carte_mere`
  ADD PRIMARY KEY (`idComposant`);

--
-- Index pour la table `clavier`
--
ALTER TABLE `clavier`
  ADD PRIMARY KEY (`idComposant`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`idCommentaire`),
  ADD KEY `adresseMail` (`adresseMail`),
  ADD KEY `idModele_` (`idModele_`),
  ADD KEY `commentaire_ibfk_3` (`adresseMail_1`);

--
-- Index pour la table `concepteur`
--
ALTER TABLE `concepteur`
  ADD PRIMARY KEY (`adresseMail`);

--
-- Index pour la table `contient`
--
ALTER TABLE `contient`
  ADD PRIMARY KEY (`idComposant`,`idModele_`),
  ADD KEY `idModele_` (`idModele_`);

--
-- Index pour la table `disque_dur__ssd`
--
ALTER TABLE `disque_dur__ssd`
  ADD PRIMARY KEY (`idComposant`);

--
-- Index pour la table `ecran`
--
ALTER TABLE `ecran`
  ADD PRIMARY KEY (`idComposant`);

--
-- Index pour la table `memoire_vive`
--
ALTER TABLE `memoire_vive`
  ADD PRIMARY KEY (`idComposant`);

--
-- Index pour la table `modele`
--
ALTER TABLE `modele`
  ADD PRIMARY KEY (`idModele_`);

--
-- Index pour la table `monteur`
--
ALTER TABLE `monteur`
  ADD PRIMARY KEY (`adresseMail`);

--
-- Index pour la table `pieces`
--
ALTER TABLE `pieces`
  ADD PRIMARY KEY (`idComposant`);

--
-- Index pour la table `processeur`
--
ALTER TABLE `processeur`
  ADD PRIMARY KEY (`idComposant`);

--
-- Index pour la table `souris_pad`
--
ALTER TABLE `souris_pad`
  ADD PRIMARY KEY (`idComposant`);

--
-- Index pour la table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`idProduit`),
  ADD KEY `idComposant` (`idComposant`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`adresseMail`),
  ADD UNIQUE KEY `motDePasse` (`motDePasse`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `idCommentaire` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `modele`
--
ALTER TABLE `modele`
  MODIFY `idModele_` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `pieces`
--
ALTER TABLE `pieces`
  MODIFY `idComposant` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `stock`
--
ALTER TABLE `stock`
  MODIFY `idProduit` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `alimentation`
--
ALTER TABLE `alimentation`
  ADD CONSTRAINT `alimentation_ibfk_1` FOREIGN KEY (`idComposant`) REFERENCES `pieces` (`idComposant`);

--
-- Contraintes pour la table `carte_graphique`
--
ALTER TABLE `carte_graphique`
  ADD CONSTRAINT `carte_graphique_ibfk_1` FOREIGN KEY (`idComposant`) REFERENCES `pieces` (`idComposant`);

--
-- Contraintes pour la table `carte_mere`
--
ALTER TABLE `carte_mere`
  ADD CONSTRAINT `carte_mere_ibfk_1` FOREIGN KEY (`idComposant`) REFERENCES `pieces` (`idComposant`);

--
-- Contraintes pour la table `clavier`
--
ALTER TABLE `clavier`
  ADD CONSTRAINT `clavier_ibfk_1` FOREIGN KEY (`idComposant`) REFERENCES `pieces` (`idComposant`);

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`adresseMail`) REFERENCES `concepteur` (`adresseMail`),
  ADD CONSTRAINT `commentaire_ibfk_2` FOREIGN KEY (`idModele_`) REFERENCES `modele` (`idModele_`),
  ADD CONSTRAINT `commentaire_ibfk_3` FOREIGN KEY (`adresseMail_1`) REFERENCES `monteur` (`adresseMail`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Contraintes pour la table `concepteur`
--
ALTER TABLE `concepteur`
  ADD CONSTRAINT `concepteur_ibfk_1` FOREIGN KEY (`adresseMail`) REFERENCES `utilisateur` (`adresseMail`);

--
-- Contraintes pour la table `contient`
--
ALTER TABLE `contient`
  ADD CONSTRAINT `contient_ibfk_1` FOREIGN KEY (`idComposant`) REFERENCES `pieces` (`idComposant`),
  ADD CONSTRAINT `contient_ibfk_2` FOREIGN KEY (`idModele_`) REFERENCES `modele` (`idModele_`);

--
-- Contraintes pour la table `disque_dur__ssd`
--
ALTER TABLE `disque_dur__ssd`
  ADD CONSTRAINT `disque_dur__ssd_ibfk_1` FOREIGN KEY (`idComposant`) REFERENCES `pieces` (`idComposant`);

--
-- Contraintes pour la table `ecran`
--
ALTER TABLE `ecran`
  ADD CONSTRAINT `ecran_ibfk_1` FOREIGN KEY (`idComposant`) REFERENCES `pieces` (`idComposant`);

--
-- Contraintes pour la table `memoire_vive`
--
ALTER TABLE `memoire_vive`
  ADD CONSTRAINT `memoire_vive_ibfk_1` FOREIGN KEY (`idComposant`) REFERENCES `pieces` (`idComposant`);

--
-- Contraintes pour la table `monteur`
--
ALTER TABLE `monteur`
  ADD CONSTRAINT `monteur_ibfk_1` FOREIGN KEY (`adresseMail`) REFERENCES `utilisateur` (`adresseMail`);

--
-- Contraintes pour la table `processeur`
--
ALTER TABLE `processeur`
  ADD CONSTRAINT `processeur_ibfk_1` FOREIGN KEY (`idComposant`) REFERENCES `pieces` (`idComposant`);

--
-- Contraintes pour la table `souris_pad`
--
ALTER TABLE `souris_pad`
  ADD CONSTRAINT `souris_pad_ibfk_1` FOREIGN KEY (`idComposant`) REFERENCES `pieces` (`idComposant`);

--
-- Contraintes pour la table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`idComposant`) REFERENCES `pieces` (`idComposant`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
