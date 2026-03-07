CREATE DATABASE escola_elias;

USE escola_elias;

CREATE TABLE alunos (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    idade TINYINT NOT NULL,
    uf CHAR(2) NOT NULL,
    cidade VARCHAR(50) NOT NULL,
);

INSERT INTO alunos (nome, idade, uf, cidade)
VALUES
('Elias Gomes', '17', 'SP', 'Marília'),
('Dares', '16', 'SP', 'Marilía'),
('Fael', '18', 'RS', 'Torres');

SELECT id, nome, idade, uf, cidade FROM alunos;