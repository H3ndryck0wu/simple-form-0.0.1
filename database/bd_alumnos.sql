CREATE DATABASE bd_alumnos;

USE bd_alumnos;

CREATE TABLE datos (
  nl INT,
  nombre VARCHAR(50),
  cal FLOAT,
  PRIMARY KEY (nl, nombre)
);