CREATE DATABASE IF NOT EXISTS eletromarketing;
USE eletromarketing;

CREATE TABLE IF NOT EXISTS usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(100) NOT NULL,
  senha VARCHAR(255) NOT NULL
);

INSERT INTO usuarios (email, senha)
VALUES ('teste@eletromarketing.com', '123456');
