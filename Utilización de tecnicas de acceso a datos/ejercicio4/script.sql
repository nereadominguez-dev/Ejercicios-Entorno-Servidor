USE Videotutoria8;

CREATE TABLE IF NOT EXISTS alumnos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    nota DECIMAL(4,2)
);

INSERT INTO alumnos (nombre, nota) VALUES 
('Juan', 7.5),
('María', 9.2),
('Pedro', 5.0);