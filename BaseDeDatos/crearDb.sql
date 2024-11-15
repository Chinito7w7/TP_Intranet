-- Crear base de datos
CREATE DATABASE ColegioChacabuco;

-- Seleccionar la base de datos
USE ColegioChacabuco;

-- Crear tabla de usuarios
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    documentType VARCHAR(5) NOT NULL,
    documentNumber VARCHAR(20) NOT NULL,
    password VARCHAR(255) NOT NULL
);
CREATE TABLE roles (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL
);

-- Insertar los roles
INSERT INTO roles (nombre) VALUES ('Profesor'), ('Alumno'), ('Preceptor'), ('Director');
