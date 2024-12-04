CREATE DATABASE mi_aplicativo_db;

USE mi_aplicativo_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    cedula VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    admin_id INT
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    serial VARCHAR(255) NOT NULL,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Insertar administrador por defecto
INSERT INTO users (name, cedula, password, admin_id) VALUES ('admin', 'admin123', '12345678', NULL);

--Credenciales

CREATE USER 'admin'@'localhost' IDENTIFIED BY '12345678';
GRANT ALL PRIVILEGES ON mi_aplicativod_db.* TO 'admin'@'localhost';
FLUSH PRIVILEGES;