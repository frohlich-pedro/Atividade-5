CREATE DATABASE paodango;

USE paodango;

CREATE TABLE cliente (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    nome_cliente VARCHAR(100) NOT NULL,
    email_cliente VARCHAR(150) NOT NULL UNIQUE,
    telefone_cliente VARCHAR(15) NOT NULL,
    cpf_cliente VARCHAR(11) NOT NULL UNIQUE,
    created_at_cliente TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE padeiro (
    id_padeiro INT AUTO_INCREMENT PRIMARY KEY,
    nome_padeiro VARCHAR(100) NOT NULL,
    email_padeiro VARCHAR(150) NOT NULL UNIQUE,
    CPF_padeiro VARCHAR(11) NOT NULL UNIQUE,
    telefone_padeiro VARCHAR(15) NOT NULL,
    created_at_padeiro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE produto (
    id_produto INT AUTO_INCREMENT PRIMARY KEY,
    nome_produto VARCHAR(100) NOT NULL,
    preco_produto DECIMAL(10, 2) NOT NULL,
    descricao_produto VARCHAR(255),
    created_at_produto TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE pedido (
    id_pedido INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente_fk INT NOT NULL,
    id_padeiro_fk INT NOT NULL,
    id_produto_fk INT NOT NULL,
    data_pedido TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status_pedido ENUM('Pendente', 'Em Preparação', 'Pronto', 'Entregue') DEFAULT 'Pendente',
    FOREIGN KEY (id_cliente_fk) REFERENCES cliente(id_cliente),
    FOREIGN KEY (id_padeiro_fk) REFERENCES padeiro(id_padeiro),
    FOREIGN KEY (id_produto_fk) REFERENCES produto(id_produto)
);
