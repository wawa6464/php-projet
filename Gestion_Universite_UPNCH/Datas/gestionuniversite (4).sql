-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2022 at 12:38 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestionuniversite`
--

-- --------------------------------------------------------

--
-- Table structure for table `anneacademique`
--

CREATE TABLE `anneacademique` (
  `AnneeDebut` int(15) NOT NULL,
  `AnneeFin` int(15) NOT NULL,
  `DateDebut` date NOT NULL,
  `DateFin` date NOT NULL,
  `Etat` varchar(200) NOT NULL,
  `AnneeAcademique` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `anneacademique`
--

INSERT INTO `anneacademique` (`AnneeDebut`, `AnneeFin`, `DateDebut`, `DateFin`, `Etat`, `AnneeAcademique`) VALUES
(2022, 2023, '2022-01-06', '2022-11-22', 'ouvrir', '2022-2023'),
(2023, 2024, '2022-01-06', '2022-11-24', 'ouvrir', '2023-2024');

-- --------------------------------------------------------

--
-- Table structure for table `cours`
--

CREATE TABLE `cours` (
  `CodeCours` int(50) NOT NULL,
  `NomCours` varchar(200) NOT NULL,
  `Filliere` varchar(200) NOT NULL,
  `Niveau` varchar(200) NOT NULL,
  `Sessione` varchar(200) NOT NULL,
  `Coefficient` varchar(200) NOT NULL,
  `ProfTitulaire` varchar(200) NOT NULL,
  `ProfSuppleant` varchar(200) NOT NULL,
  `Jours` varchar(200) NOT NULL,
  `HeureDebut` time NOT NULL,
  `HeureFin` time NOT NULL,
  `Etat` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cours`
--

INSERT INTO `cours` (`CodeCours`, `NomCours`, `Filliere`, `Niveau`, `Sessione`, `Coefficient`, `ProfTitulaire`, `ProfSuppleant`, `Jours`, `HeureDebut`, `HeureFin`, `Etat`) VALUES
(2, 'Philosophie', 'Informatique', 'EUF', 'Session II', '2', 'bendy', 'walex', 'Dimanche', '18:22:00', '21:19:00', 'Dispense'),
(3, 'Mathematique', 'Informatique', 'L1', 'Session II', '2', 'Ferdinand', 'walex', 'Samedi', '18:02:00', '22:59:00', 'Dispense'),
(8, 'Economie', 'Informatique', 'L1', 'Session I', '4', 'Cassandre', 'Jenny', 'Lundi', '09:11:00', '10:11:00', 'Dispense');

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE `etudiant` (
  `Code` int(50) NOT NULL,
  `Nom` varchar(200) NOT NULL,
  `Prenom` varchar(200) NOT NULL,
  `Sexe` varchar(200) NOT NULL,
  `Adresse` varchar(200) NOT NULL,
  `LieuNaissance` varchar(200) NOT NULL,
  `DateNaissance` varchar(200) NOT NULL,
  `Telephone` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Filiere` varchar(200) NOT NULL,
  `Niveau` varchar(200) NOT NULL,
  `NIFCIN` varchar(200) NOT NULL,
  `PersonneReference` varchar(200) NOT NULL,
  `telpersonneref` varchar(200) NOT NULL,
  `AnneeAcademique` varchar(200) NOT NULL,
  `Etat` varchar(20) NOT NULL,
  `Memo` varchar(200) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`Code`, `Nom`, `Prenom`, `Sexe`, `Adresse`, `LieuNaissance`, `DateNaissance`, `Telephone`, `Email`, `Filiere`, `Niveau`, `NIFCIN`, `PersonneReference`, `telpersonneref`, `AnneeAcademique`, `Etat`, `Memo`, `photo`) VALUES
(1, 'Stephanie', 'Denis', 'M', 'P-A-P', 'Cap-Haitien', '2006-07-06', '3456713', 'stehanie@gmail.com', 'Informatique', 'EUF', '6578932', 'Guerline', '6547782', '1', '1', 'message pour les etudiant', '');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `ID` int(50) NOT NULL,
  `Sessione` varchar(200) NOT NULL,
  `Code` varchar(200) NOT NULL,
  `CodeCours` varchar(200) NOT NULL,
  `Note` int(100) NOT NULL,
  `AnneeAcademique` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`ID`, `Sessione`, `Code`, `CodeCours`, `Note`, `AnneeAcademique`) VALUES
(1, 'Session II', '1', '2', 89, '2022-2023');

-- --------------------------------------------------------

--
-- Table structure for table `professeur`
--

CREATE TABLE `professeur` (
  `Code` int(11) NOT NULL,
  `Nom` varchar(200) NOT NULL,
  `Prenom` varchar(200) NOT NULL,
  `Sexe` varchar(200) NOT NULL,
  `Adresse` varchar(200) NOT NULL,
  `Telephone` varchar(200) NOT NULL,
  `matrimonial` varchar(200) NOT NULL,
  `LieuNaissance` varchar(200) NOT NULL,
  `DateNaissance` varchar(200) NOT NULL,
  `Niveau` varchar(200) NOT NULL,
  `CoursEnsegner` varchar(200) NOT NULL,
  `FilliereAffecte` varchar(200) NOT NULL,
  `Salaire` int(50) NOT NULL,
  `Poste` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `NIFCIN` varchar(200) NOT NULL,
  `Etat` varchar(200) NOT NULL,
  `Memo` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `professeur`
--

INSERT INTO `professeur` (`Code`, `Nom`, `Prenom`, `Sexe`, `Adresse`, `Telephone`, `matrimonial`, `LieuNaissance`, `DateNaissance`, `Niveau`, `CoursEnsegner`, `FilliereAffecte`, `Salaire`, `Poste`, `Email`, `NIFCIN`, `Etat`, `Memo`) VALUES
(1, 'Jodeline', 'Augustin', 'F', 'Parois', '5443265', 'Fiance', 'Milot', '2001-08-03', 'EUF', 'Physique', 'Genie', 3456, 'Doyenne', 'jodelineaugustin@gmail.com', '654388', 'Actif', 'pour les examens'),
(2, 'Benjermin', 'Paul', 'F', 'Parois', '5443265', 'Celibataire', 'Milot', '2006-11-06', 'EUF', 'Physique', 'Informatique', 34566789, 'admin', 'frmp@gmail.com', '5678', 'Actif', 'rffg'),
(3, 'Ferdinad', 'Mompremier', 'M', 'Limonade', '36820925', 'Fiance', 'limonade', '2006-11-03', 'Metrice', 'Physique', 'Genie', 345677, 'responsable affaire social', 'ferdinadmompremier@gmail.com', '6758934', 'Actif', 'publication des notes physique premiere session');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `IdUtilisateur` int(11) NOT NULL,
  `Nom` varchar(200) NOT NULL,
  `Prenom` varchar(200) NOT NULL,
  `Poste` varchar(200) NOT NULL,
  `Pseudo` varchar(200) NOT NULL,
  `MotDePasse` varchar(200) NOT NULL,
  `Etat` varchar(200) NOT NULL,
  `ModulesDacces` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`IdUtilisateur`, `Nom`, `Prenom`, `Poste`, `Pseudo`, `MotDePasse`, `Etat`, `ModulesDacces`) VALUES
(1, 'Walex', 'Riche', 'Admin', 'Wawa', 'wawa123', 'Actif', 'Professeur'),
(2, 'Ferdinad', 'Mompremier', 'Comptable', 'ferno', 'efde', 'Actif', 'Cours'),
(3, 'Cassandre', 'Erline', 'Charge d\'affaire', 'cassou', 'cassou123', 'Actif', 'Professeur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anneacademique`
--
ALTER TABLE `anneacademique`
  ADD PRIMARY KEY (`AnneeAcademique`),
  ADD UNIQUE KEY `AnneeDebut` (`AnneeDebut`),
  ADD UNIQUE KEY `AnneeAcademique` (`AnneeAcademique`);

--
-- Indexes for table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`CodeCours`);

--
-- Indexes for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`Code`),
  ADD KEY `AnneeAcademique` (`AnneeAcademique`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Code` (`Code`),
  ADD KEY `CodeCours` (`CodeCours`);

--
-- Indexes for table `professeur`
--
ALTER TABLE `professeur`
  ADD PRIMARY KEY (`Code`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`IdUtilisateur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cours`
--
ALTER TABLE `cours`
  MODIFY `CodeCours` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `Code` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `professeur`
--
ALTER TABLE `professeur`
  MODIFY `Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `IdUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
