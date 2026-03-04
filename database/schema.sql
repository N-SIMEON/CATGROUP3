CREATE DATABASE musanze_mvc;
USE musanze_mvc;

CREATE TABLE services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    service_type VARCHAR(50),
    client_name VARCHAR(100),
    quantity INT,
    price DECIMAL(10,2),
    total DECIMAL(10,2),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);