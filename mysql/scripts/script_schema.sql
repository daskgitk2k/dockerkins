DROP DATABASE IF EXISTS pruebas;

CREATE DATABASE pruebas;

USE pruebas;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    puntos INT,
    PRIMARY KEY (id)
);

INSERT INTO usuarios (nombre) VALUES ('ismael');
INSERT INTO usuarios (nombre) VALUES ('bonet');
INSERT INTO usuarios (nombre) VALUES ('alex');
