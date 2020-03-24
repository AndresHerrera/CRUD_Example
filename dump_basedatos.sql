/*
	CRUD con PostgreSQL y PHP
*/

-- PASO 1)  CREAR BASE DE DATOS:   db_univalle

CREATE TABLE edificios_crud(
	id serial primary key,
	nombre varchar(50) NOT NULL,
	codigo varchar(10) NOT NULL
);

insert into edificios_crud(nombre, codigo) values('Agora', '305');
insert into edificios_crud(nombre, codigo) values('Central', '301');
insert into edificios_crud(nombre, codigo) values('Bienestar Universitario', '310');
insert into edificios_crud(nombre, codigo) values('Herbario', '352');
insert into edificios_crud(nombre, codigo) values('Ing Civil y Geomatica', '346');
