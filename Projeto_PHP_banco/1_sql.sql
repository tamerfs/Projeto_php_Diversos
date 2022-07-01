CREATE TABLE pessoa (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(20) NOT NULL,
    nascimento DATE);

INSERT INTO pessoas (nome, nascimento)values ("Tamer", "1995-10-11");
INSERT INTO pessoas (nome, nascimento)values ("Samer", "1995-10-11");
INSERT INTO pessoas (nome, nascimento)values ("Ulysses", "1994-07-01");
INSERT INTO pessoas (nome, nascimento)values ("Soares", "1996-02-19");


SELECT nome, nascimento FROM pessoas ;
UPDATE pessoas SET nascimento ="1990-05-22" WHERE id=3;
DELETE  FROM pessoas WHERE id=6;


SELECT * FROM pessoas ORDER BY nome DESC;
SELECT * FROM pessoas ORDER BY nome ASC;

ALTER TABLE pessoas ADD genero VARCHAR(1) NOT NULL AFTER nascimento;

SELECT COUNT(id), genero FROM pessoas GROUP BY genero;



