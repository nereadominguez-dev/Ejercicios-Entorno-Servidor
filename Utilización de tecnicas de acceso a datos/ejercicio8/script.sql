USE Videotutoria8;

CREATE TABLE IF NOT EXISTS articulos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    precio DECIMAL(10,2)
);

INSERT INTO articulos (nombre, precio) VALUES ('Monitor', 150.00);