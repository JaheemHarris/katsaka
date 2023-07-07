-- CREATE DATABASE katsaka;

USE katsaka;

CREATE TABLE zezika(
	id_zezika INT PRIMARY KEY AUTO_INCREMENT,
	libelle VARCHAR(40)
);

INSERT INTO zezika(libelle) VALUES ('Zezika A');
INSERT INTO zezika(libelle) VALUES ('Zezika B');
INSERT INTO zezika(libelle) VALUES ('Zezika C');

CREATE TABLE zezika_parcelle(
	id_zezika_parcelle INT PRIMARY KEY AUTO_INCREMENT,
	id_vokatra INT NOT NULL,
	id_zezika INT NOT NULL,
	lanja_zezika DECIMAL DEFAULT 0,
	FOREIGN KEY (id_zezika) REFERENCES zezika(id_zezika)
)ENGINE=InnoDB;

CREATE OR REPLACE VIEW view_total_zezika AS
SELECT 
	id_vokatra,
	SUM(lanja_zezika) AS total_zezika
FROM zezika_parcelle 
GROUP BY id_vokatra;

CREATE OR REPLACE VIEW view_pourcentage_zezika AS
SELECT
	zp.*,
	z.libelle AS zezika,
	vtz.total_zezika,
	((zp.lanja_zezika * 100) / vtz.total_zezika) AS pourcentage
FROM zezika_parcelle zp
JOIN view_total_zezika vtz 
ON zp.id_vokatra = vtz.id_vokatra
JOIN zezika z
ON z.id_zezika = zp.id_zezika;


CREATE OR REPLACE VIEW view_details_zezika AS
SELECT
	zp.*,
	z.libelle as zezika
FROM zezika_parcelle zp
JOIN zezika z
ON zp.id_zezika = z.id_zezika ORDER BY zp.id_vokatra;

-- SELECT 
-- * 
-- FROM zezika_parcelle zp
-- JOIN (
--   VALUES (1, 200, 6 , 750), (2, 125, 7, 460), (3, 137, 6, 500)
-- ) AS data(id_vokatra, tongony, taolany, lanja) 
-- ON zp.id_vokatra = data.id_vokatra;


CREATE TABLE additif(
	id_additif INT PRIMARY KEY AUTO_INCREMENT,
	id_zezika INT NOT NULL,
	min INT DEFAULT 0,
	max INT DEFAULT 0,
	pourcentage DECIMAL,
	FOREIGN KEY (id_zezika) REFERENCES zezika(id_zezika)
)ENGINE=InnoDB;

INSERT INTO additif(id_zezika, min, max, pourcentage) VALUES (1, 0, 30, 0);
INSERT INTO additif(id_zezika, min, max, pourcentage) VALUES (1, 30, 70, 2);
INSERT INTO additif(id_zezika, min, max, pourcentage) VALUES (1, 70, 100, -2);


INSERT INTO additif(id_zezika, min, max, pourcentage) VALUES (2, 0, 30, 0);
INSERT INTO additif(id_zezika, min, max, pourcentage) VALUES (2, 30, 70, 2);
INSERT INTO additif(id_zezika, min, max, pourcentage) VALUES (2, 70, 100, -2);

INSERT INTO additif(id_zezika, min, max, pourcentage) VALUES (3, 0, 30, 0);
INSERT INTO additif(id_zezika, min, max, pourcentage) VALUES (3, 30, 70, 2);
INSERT INTO additif(id_zezika, min, max, pourcentage) VALUES (3, 70, 100, -2);

SELECT 
	vpz.*,
	a.min,
	a.max,
	a.pourcentage as consequence
FROM view_pourcentage_zezika vpz 
JOIN additif a
ON a.id_zezika = vpz.id_zezika
WHERE vpz.pourcentage >= a.min AND vpz.pourcentage <= a.max;