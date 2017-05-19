DROP DATABASE IF EXISTS project_periode_4;

CREATE DATABASE project_periode_4;

USE project_periode_4;

DROP TABLE IF EXISTS opdrachten;

CREATE TABLE opdrachten(
	opdrachtnummer INT NOT NULL UNIQUE AUTO_INCREMENT,
	werkinstructie VARCHAR(500),
	datum_uitvoering TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	kabelleverancier VARCHAR(250),
	waarnemingen VARCHAR(500),
	handtekening VARCHAR(50),
	aantal_bedrijfsuren INT,
	afleg_redenen VARCHAR(500)
);
	
INSERT INTO opdrachten VALUES
(0, "Werkinstructie 0", CURRENT_TIMESTAMP, "Leverancier0", "Waarneming 0", "Handtekening0", 0, "Aflegreden 0"),
(0, "Werkinstructie 1", CURRENT_TIMESTAMP, "Leverancier1", "Waarneming 1", "Handtekening1", 11, "Aflegreden 1"),
(0, "Werkinstructie 2", CURRENT_TIMESTAMP, "Leverancier2", "Waarneming 2", "Handtekening2", 22, "Aflegreden 2");