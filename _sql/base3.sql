CREATE DATABASE IF NOT EXISTS exemple DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE exemple;
-- --------------------------------------------------------
set foreign_key_checks =0;
-- CREATION DES TABLES
DROP TABLE IF EXISTS utilisateur;
CREATE TABLE utilisateur (
	uti_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	uti_nom VARCHAR(20),
	uti_prenom VARCHAR(20),
	uti_dtnais DATE,
	uti_profil int
) ENGINE=InnoDB;

DROP TABLE IF EXISTS profil ;
CREATE TABLE profil(
	pro_id	INT NOT NULL  AUTO_INCREMENT PRIMARY KEY,
	pro_nom VARCHAR(20) 
)ENGINE=innoDB;

CREATE TABLE message(
	mes_id	INT NOT NULL  AUTO_INCREMENT PRIMARY KEY,
	mes_texte VARCHAR(2000),
	mes_utilisateur int Not null,
	mes_date DATETIME
)ENGINE=innoDB;


-- CONTRAINTE D'INTEGRITE
SET FOREIGN_KEY_CHECKS=1 ;
ALTER TABLE utilisateur ADD CONSTRAINT utilisateurprofil FOREIGN KEY (uti_profil) REFERENCES profil(pro_id) ;
ALTER TABLE message ADD CONSTRAINT message_utilisetur FOREIGN KEY (mes_utilisateur) REFERENCES utilisateur(uti_id) ;

-- DONNEES TEST 

INSERT INTO profil VALUES
(null,'Administrateur') ,
(null,'Modérateur'),
(null,'Utilisateur') ;

INSERT INTO utilisateur VALUES
(NULL,'BERNARD','Alain','1997-08-06','2'),
(NULL,'ROUX','Philippe','1984-06-07','1'),
(NULL,'THOMAS','Bernard','1985-05-08','2'),
(NULL,'PETIT','Christian','1989-04-09','2'),
(NULL,'ROY','Laurent','1991-10-10','3'),
(NULL,'ROUSSEAU','Catherine','1982-12-11','3'),
(NULL,'ANDRE','Françoise','1988-01-12','3'),
(NULL,'GAUTIER','Isabelle','1987-02-13','3'),
(NULL,'BONNET','François','1993-03-14','3'),
(NULL,'LAMBERT','Sylvie','1997-04-15','3'),
(NULL,'HENRY','Guy','1984-08-16','3'),
(NULL,'FAURE','Martine','1986-09-17','3') ;


