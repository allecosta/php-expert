CREATE DATABASE bd_ajax_demo;

CREATE TABLE users (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(20) NOT NULL,
    lastname VARCHAR(20) NOT NULL,
    age TINYINT(2) NOT NULL,
    job VARCHAR(10)
);

INSERT INTO users (firstname, lastname, age, job) VALUES 
("Marks", "Costa", 45, "Motorista"),
("João", "Carlos", 45, "Gestor" ),
("Andreia", "Costa", 35, "RH"),
("Ythalo", "Costa", 44, "Gestor");



