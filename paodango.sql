CREATE DATABASE paodango;

USE paodango;

CREATE TABLE cliente (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    nome_cliente VARCHAR(100) NOT NULL,
    email_cliente VARCHAR(150) NOT NULL UNIQUE,
    telefone_cliente VARCHAR(15) NOT NULL,
    cpf_cliente VARCHAR(11) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE padeiro(
    id_padeiro INT AUTO_INCREMENT PRIMARY KEY,
    nome_padeiro VARCHAR(100) NOT NULL,
    email_padeiro VARCHAR(150) NOT NULL UNIQUE,
    CPF_padeiro VARCHAR(11) NOT NULL UNIQUE,
    telefone_padeiro VARCHAR(15) NOT NULL,
    created_at_padeiro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)