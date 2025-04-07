CREATE DATABASE IF NOT EXISTS sacola;
USE sacola;

CREATE TABLE IF NOT EXISTS sacola (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    cpf VARCHAR(14),
    telefone VARCHAR(20),
    cep VARCHAR(9),
    numero VARCHAR(10),
    quantidade INT
);
