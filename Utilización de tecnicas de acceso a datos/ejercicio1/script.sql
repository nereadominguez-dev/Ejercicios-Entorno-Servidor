CREATE DATABASE IF NOT EXISTS Videotutoria8;
USE Videotutoria8;

CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    precio DECIMAL(10,2)
);

INSERT INTO productos (nombre, precio) VALUES 
('Portátil', 850.00),
('Ratón', 15.50),
('Teclado', 30.00);