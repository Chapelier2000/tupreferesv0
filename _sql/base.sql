CREATE DATABASE IF NOT EXISTS exemple DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE exemple;
-- --------------------------------------------------------
-- CREATION DES TABLES
DROP TABLE IF EXISTS utilisateur;
CREATE TABLE utilisateur (
	uti_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	uti_nom VARCHAR(20),
	uti_prenom VARCHAR(20),
	uti_dtnais DATE,
	uti_profil int
) ENGINE=InnoDB;
