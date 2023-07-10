-- CREATE DATABASE katsaka;

CREATE TABLE responsable(
    id_reponsable SERIAL PRIMARY KEY,
    nom VARCHAR(40)
);

INSERT INTO responsable (nom) VALUES ('Dezy');
INSERT INTO responsable (nom) VALUES ('Lom');
INSERT INTO responsable (nom) VALUES ('Bray');

CREATE TABLE parcelle(
    id_parcelle SERIAL PRIMARY KEY,
    id_reponsable INT NOT NULL,
    libelle VARCHAR(40) NOT NULL,
    FOREIGN KEY (id_reponsable) REFERENCES responsable(id_reponsable)
);

INSERT INTO parcelle (id_reponsable, libelle) VALUES (1, 'Parcelle 1');
INSERT INTO parcelle (id_reponsable, libelle) VALUES (2, 'Parcelle 2');
INSERT INTO parcelle (id_reponsable, libelle) VALUES (3, 'Parcelle 3');

CREATE OR REPLACE VIEW view_parcelle AS 
SELECT
    p.id_parcelle,
    r.id_reponsable,
    r.nom as responsable,
    p.libelle
FROM parcelle p
JOIN responsable r
ON p.id_reponsable = r.id_reponsable;

CREATE TABLE vokatra(
    id_vokatra SERIAL PRIMARY KEY,
    id_parcelle INT NOT NULL,
    tongony INT DEFAULT 0,
    taolany INT DEFAULT 0,
    lanja DECIMAL DEFAULT 0,
    date_vokatra DATE DEFAULT CURRENT_DATE,
    FOREIGN KEY (id_parcelle) REFERENCES parcelle(id_parcelle)
);

CREATE TABLE prix_katsaka(
    id_prix_katsaka SERIAL PRIMARY KEY,
    prix_kg DECIMAL DEFAULT 0,
    date_prix DATE DEFAULT CURRENT_DATE
);

INSERT INTO prix_katsaka(prix_kg, date_prix) VALUES (850, '2023-6-1');
INSERT INTO prix_katsaka(prix_kg, date_prix) VALUES (890, '2023-9-1');
INSERT INTO prix_katsaka(prix_kg, date_prix) VALUES (900, '2023-10-1');
INSERT INTO prix_katsaka(prix_kg, date_prix) VALUES (850, '2023-11-1');
INSERT INTO prix_katsaka(prix_kg, date_prix) VALUES (940, '2023-12-1');

SELECT * FROM prix_katsaka WHERE date_prix < '2023-07-12' GROUP BY date_prix DESC;

ALTER TABLE vokatra ADD COLUMN additif BOOLEAN;
-- UPDATE vokatra SET additif = TRUE WHERE id_vokatra = 3;
-- UPDATE vokatra SET additif = FALSE WHERE id_vokatra = 4;
-- UPDATE vokatra SET additif = FALSE WHERE id_vokatra = 5;

1142,85
1834,92

