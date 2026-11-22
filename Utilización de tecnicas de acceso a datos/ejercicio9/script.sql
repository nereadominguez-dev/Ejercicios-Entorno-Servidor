USE Videotutoria8;

CREATE TABLE IF NOT EXISTS tareas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descripcion VARCHAR(100),
    completada TINYINT(1)
);

INSERT INTO tareas (descripcion, completada) VALUES 
('Estudiar PHP', 0),
('Limpiar escritorio', 1);