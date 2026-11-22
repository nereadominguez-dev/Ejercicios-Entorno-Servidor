USE Videotutoria8;

CREATE TABLE IF NOT EXISTS libros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100)
);

INSERT INTO libros (titulo) VALUES 
('Don Quijote'),
('Cien años de soledad'),
('El Principito');