USE Videotutoria8;

CREATE TABLE IF NOT EXISTS empleados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50)
);

INSERT INTO empleados (nombre) VALUES 
('Laura'), ('Marcos'), ('Sofía'), ('Gonzalo');