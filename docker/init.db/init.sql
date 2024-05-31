CREATE DATABASE IF NOT EXISTS poe_repository;

USE poe_repository;

CREATE TABLE poe_repository.poe (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(45) NOT NULL
);

CREATE TABLE poe_repository.intern (
    id INT AUTO_INCREMENT PRIMARY KEY,
    lastname VARCHAR(45) NOT NULL,
    firstname VARCHAR(30),
    gender SMALLINT NOT NULL default 0,
    poe_id INT NOT NULL,
    FOREIGN KEY (poe_id) REFERENCES poe(id)
);

INSERT INTO poe (name) VALUES 
    ('Dev Cyber 2024'),
    ('Dev Mobile 2024');

INSERT INTO intern (lastname, firstname, gender, poe_id) VALUES
    ('Chenu', 'Guillaume', 1, 1),
    ('Bettan', 'Frédéric', 1, 1),
    ('El Hachimi Alaoui', 'Imane', 0, 1),
    ('Bernardin', 'Bruno', 1, 1);

CREATE USER 'poe_db_admin'@localhost IDENTIFIED BY 'poe_secret_password';

GRANT ALL PRIVILEGES ON `poe_repository`.* TO 'poe_db_admin'@'localhost';

FLUSH PRIVILEGES;