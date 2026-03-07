CREATE DATABASE loja;

USE loja;

CREATE TABLE produtos (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(8, 2) NOT NULL,
    estoque INT NULL
);

INSERT INTO produtos (nome, preco, estoque)
VALUES 
('Microondas', 450.00, 14),
('Teclado Simples', 150.00, 10),
('Caderno', 36.00, 20);

SELECT id, nome, preco, estoque FROM PRODUTOS

/* Tomei os cuidados com:

	- Nome dos campos, por conta que MYSQL não aponta erros de escritas em campos.
	- Tipo dos campos e se são nulos ou não nulos.
	- Na função insert selecionar a tabela correta com os nomes dos campos e valores corretos de acordo com 
  	  seu tipo (varchar/int).
	- No SELECT selecionei apenas os campos de fato desejados da tabela produtos ao contrario de usar o " * " 
	  e puxar todos os dados da tabela de uma vez.
*/
