CREATE DATABASE dbchapitas;

CREATE TABLE dbchapitas.chapitas
(
  Numero INT NOT NULL AUTO_INCREMENT,
  Tamano VARCHAR(20) NOT NULL,
  Nombre VARCHAR(50) NOT NULL,
  Telefono VARCHAR(20) NOT NULL,
  Cliente VARCHAR(100) NOT NULL,
  Petshop VARCHAR(100) NOT NULL,
  PRIMARY KEY (Numero),
  UNIQUE INDEX NUMERO_UNIQUE (NUMERO ASC)
);