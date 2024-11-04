-- Conéctate a MySQL
CREATE DATABASE BDtienda;

-- Selecciona la base de datos
USE BDtienda;

-- Crea la tabla de usuarios
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);

CREATE TABLE clientes (
  `idcliente` INT AUTO_INCREMENT PRIMARY KEY,,
  `nombre` VARCHAR(60) NOT NULL DEFAULT '',
  `apellido` VARCHAR(60) NOT NULL DEFAULT '',
  `sexo` CHAR(1) NOT NULL DEFAULT '',
  `preferencias` VARCHAR(100) ,
  `usuario` VARCHAR(10) NOT NULL DEFAULT '',
  `contrasena` VARCHAR(10) NOT NULL DEFAULT '',
);