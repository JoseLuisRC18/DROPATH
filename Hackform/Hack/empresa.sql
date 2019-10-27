CREATE DATABASE empresa;
USE empresa;
CREATE TABLE IF NOT EXISTS proveedor(
 id int(11) NOT NULL AUTO_INCREMENT,
 nombre varchar(50) NOT NULL ,
 producto varchar(50) NOT NULL ,
 correo varchar(50) NOT NULL,
 cantidad varchar(50) NOT NULL,
 precio varchar(50) NOT NULL,
 primary key(id));
