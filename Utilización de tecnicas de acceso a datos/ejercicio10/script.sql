USE Videotutoria8;

CREATE TABLE IF NOT EXISTS componentes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    precio DECIMAL(10,2)
);

INSERT INTO componentes (nombre, precio) VALUES 
('RAM 8GB', 45.00),
('SSD 256GB', 30.00),
('Cable HDMI', 8.50);