USE Videotutoria8;

CREATE TABLE IF NOT EXISTS ventas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    categoria VARCHAR(50),
    monto DECIMAL(10,2)
);

INSERT INTO ventas (categoria, monto) VALUES 
('Electrónica', 100.00),
('Electrónica', 200.00),
('Ropa', 50.00),
('Ropa', 40.00);