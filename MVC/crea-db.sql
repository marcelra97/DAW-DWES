DROP DATABASE IF EXISTS TiendaCarrito;
FLUSH PRIVILEGES;
CREATE DATABASE TiendaCarrito;

CREATE USER IF NOT EXISTS adminTienda@localhost IDENTIFIED BY 'adminTienda'; /*la contraseña es el nombre*/
GRANT ALL PRIVILEGES ON TiendaCarrito.* TO 'adminTienda'@'localhost'; 
FLUSH PRIVILEGES;

USE TiendaCarrito;

CREATE TABLE productos (
 idProducto INT NOT NULL AUTO_INCREMENT,
 nombre VARCHAR(255) NOT NULL,
 precio  INT NOT NULL,
 imagen VARCHAR(255) NOT NULL,
 PRIMARY KEY (idProducto));

INSERT INTO productos VALUES (NULL, "Fanta naranja",1,"fantaN.png");
INSERT INTO productos VALUES (NULL, "Cocacola",     1,"cocacola.png");
INSERT INTO productos VALUES (NULL, "Pepsi",        1,"pepsi.png");
INSERT INTO productos VALUES (NULL, "Pepsi Max",    1,"pepsiMax.png");
INSERT INTO productos VALUES (NULL, "Fanta limon",  3,"fantaL.png");
INSERT INTO productos VALUES (NULL, "Salchichas 6U",4,"salchichas.png");
INSERT INTO productos VALUES (NULL, "Queso 1Kg",    5,"queso.png");
INSERT INTO productos VALUES (NULL, "Leche 2L",     2,"leche.png");