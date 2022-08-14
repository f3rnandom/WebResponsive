CREATE DATABASE cliente;
use cliente;

//Creamos la tabla usuario con sus campos respectivos
CREATE TABLE contacto(
nombre VARCHAR(60) NOT NULL,
email VARCHAR (60) NOT NULL,
telefono INT NOT NULL,
direccion VARCHAR(70) NOT NULL,
mensaje TEXT NOT NULL
);
