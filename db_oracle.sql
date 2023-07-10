CREATE TABLE achat_zezika(
    id_achat_zezika INT PRIMARY KEY,
    id_zezika INT NOT NULL,
    lanja_vidina DECIMAL DEFAULT 0,
    prix DECIMAL DEFAULT 0,
    date_achat DATE DEFAULT CURRENT_DATE
);

INSERT INTO achat_zezika(id_zezika, lanja_vidina, prix) VALUES (SEQ_ACHAT.nextval, 200, 3000);
INSERT INTO achat_zezika(id_zezika, lanja_vidina, prix) VALUES (SEQ_ACHAT.nextval, 200, 2500);
INSERT INTO achat_zezika(id_zezika, lanja_vidina, prix) VALUES (SEQ_ACHAT.nextval, 200, 2900);

CREATE SEQUENCE SEQ_ACHAT
    START WITH 1
    INCREMENT BY 1
    NOCACHE
    NOCYCLE;

Vola
quantite katsaka vola
moyenne