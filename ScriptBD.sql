CREATE DATABASE prueba;
use prueba;
/*Ejecutar php make migration para las tablas de ingreso de usuarios*/

create table clientes(
	id int identity(1,1),
	nombre varchar(30),
	direccion varchar(100),
	email varchar(30),
	telefono varchar(12),
	nit varchar(15),
	PRIMARY KEY (id)
);

create table productos(
	id int identity(1,1),
	nombre varchar(30),
	descripcion varchar(200),
	precio float,
	stock int,
	primary key (id)
);

create table factura(
	factura int identity(1,1),
	fechac date,
	cliente int,
	tipopago char(2),
	PRIMARY KEY (factura),
	FOREIGN KEY (cliente) REFERENCES clientes(id),
	CHECK (tipopago in ('CO','CH')),
);

create table detalle_factura(
	id int identity(1,1),
	factura int,
	producto int,
	cantidad int,
	PRIMARY KEY (id, factura),
	FOREIGN KEY (producto) REFERENCES productos(id),
	FOREIGN KEY (factura) REFERENCES factura(factura),
);
