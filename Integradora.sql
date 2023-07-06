CREATE DATABASE IF NOT EXISTS mydb /*!40100 DEFAULT CHARACTER SET utf8 */;
USE mydb;

-- Volcando estructura para tabla mydb.cliente
CREATE TABLE IF NOT EXISTS cliente (
  idcliente int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(45) NOT NULL,
  telefono char(10) NOT NULL,
  direccion varchar(45) NOT NULL,
  email varchar(45) NOT NULL,
  PRIMARY KEY (idcliente)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla mydb.compra
CREATE TABLE IF NOT EXISTS compra (
  idcompra int(11) NOT NULL,
  idcliente int(11) NOT NULL,
  fecha date NOT NULL,
  PRIMARY KEY (idcompra),
  KEY FK_compra_cliente (idcliente),
  CONSTRAINT FK_compra_cliente FOREIGN KEY (idcliente) REFERENCES cliente (idcliente)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla mydb.compra_detalle
CREATE TABLE IF NOT EXISTS compra_detalle (
  id_compra int(11) NOT NULL AUTO_INCREMENT,
  id_producto int(11) NOT NULL AUTO_INCREMENT,
  cantidad int(11) NOT NULL,
  PRIMARY KEY (id_compra,id_producto),
  KEY FK_compra_detalle_producto (id_producto),
  CONSTRAINT FK_compra_detalle_compra FOREIGN KEY (id_compra) REFERENCES compra (idcompra),
  CONSTRAINT FK_compra_detalle_producto FOREIGN KEY (id_producto) REFERENCES producto (codigo)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla mydb.empleado
CREATE TABLE IF NOT EXISTS empleado (
  usuario varchar(45) NOT NULL,
  nombre varchar(45) NOT NULL,
  telefono char(10) NOT NULL,
  direccion varchar(45) NOT NULL,
  fecha.nac varchar(45) NOT NULL,
  email varchar(45) NOT NULL,
  tipo varchar(45) NOT NULL,
  contraseña varchar(45) NOT NULL,
  PRIMARY KEY (usuario)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla mydb.producto
CREATE TABLE IF NOT EXISTS producto (
  codigo int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(45) NOT NULL,
  descripcion varchar(45) NOT NULL,
  precio varchar(45) NOT NULL,
  cantidad char(10) NOT NULL,
  PRIMARY KEY (codigo)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla mydb.proveedor
CREATE TABLE IF NOT EXISTS proveedor (
  idproveedor int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(45) NOT NULL,
  telefono char(10) NOT NULL,
  email varchar(45) NOT NULL,
  direccion varchar(45) NOT NULL,
  PRIMARY KEY (idproveedor)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
