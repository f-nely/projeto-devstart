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
    valor FLOAT(5, 2) NOT NULL,
    categoria_id INT NOT NULL,
    quantity INT NOT NULL,
    created_at DATETIME NOT NULL
);

-- inserindo dados --
INSERT INTO tb_category
(name, description)
VALUES
('Informática', 'Produtos de informática e acessórios para computadores'),
('Escritório', 'Canetas, Cadernos, Folhas, etc'),
('Eletrônicos', 'TVs, Som portátil, Caixa de som, etc');

-- lista todas as categorias --
SELECT * FROM tb_category;

-- descrição da tabela tb_product --
DESC tb_product;