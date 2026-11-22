USE Videotutoria8;

CREATE TABLE IF NOT EXISTS clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    ciudad VARCHAR(50)
);

INSERT INTO clientes (nombre, ciudad) VALUES 
('Ana', 'Madrid'),
('Carlos', 'Barcelona'),
('Elena', 'Madrid'),
('David', 'Valencia');