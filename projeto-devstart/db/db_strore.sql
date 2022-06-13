-- cria banco de dados --
CREATE DATABASE db_store;

-- selecionar o banco --
USE db_store;

-- cria tabela tb_category --
CREATE TABLE tb_category
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(100) NOT NULL
);

-- cria tabela tb_product --
CREATE TABLE tb_product
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(100) NOT NULL,
    photo VARCHAR(255) NOT NULL,
    value FLOAT(5, 2) NOT NULL,
    category_id INT NOT NULL,
    quantity INT NOT NULL,
    created_at DATETIME NOT NULL
);

-- excluindo tabela tb_product --
DROP TABLE tb_product;

-- inserindo dados na tabela tb_product --
INSERT INTO tb_product
(name, description, photo, value, category_id, quantity, created_at)
VALUES
('Teclado', 'Teclado mecânico gamer', 
'https://media.pichau.com.br/media/catalog/product/cache/2f958555330323e505eba7ce930bdf27/m/c/mcr-ghl-rgb01445501.jpg', 
199.89, 1, 50, '2022-05-10 09:30:34'),
('Nobreak', 'Nobreak Linus 1200va 6 tomadas bivolt', 
'https://img.kalunga.com.br/fotosdeprodutos/446914d.jpg', 799.00, 1, 10, '2022-06-09 11:49:51'),
('Monitor', 'Monitor LED 21,5" Full HD 22MK400H LG CX 1 UN', 'https://img.kalunga.com.br/fotosdeprodutos/477270d.jpg',
 999.00, 1, 40, '2022-06-11 12:18:57');

-- inserindo dados na tabela tb_category --
INSERT INTO tb_category
(name, description)
VALUES
('Informática', 'Produtos de informática e acessórios para computadores'),
('Escritório', 'Canetas, Cadernos, Folhas, etc'),
('Eletrônicos', 'TVs, Som portátil, Caixa de som, etc');

INSERT INTO tb_category
(name, description)
VALUES
('Livros', 'Livros em geral');

-- lista todas as categorias --
SELECT * FROM tb_category;

-- lista todas os produtos --
SELECT * FROM tb_product;

-- descrição da tabela tb_product --
DESC tb_product;