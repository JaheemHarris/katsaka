CREATE TABLE achat_zezika(
    id_achat_zezika INT PRIMARY KEY,
    id_zezika INT NOT NULL,
    prix DECIMAL DEFAULT 0,
    date_achat DATE
);

CREATE SEQUENCE SEQ_ACHAT
    START WITH 1
    INCREMENT BY 1
    NOCACHE
    NOCYCLE;
