BEGIN TRANSACTION;


DROP TABLE IF EXISTS regiones CASCADE;
CREATE TABLE regiones (
    pk serial NOT NULL,
    numero smallint NOT NULL,
    abbr   varchar(5),
    nombre varchar(255),
    UNIQUE (nombre),
    PRIMARY KEY (pk)
);


DROP TABLE IF EXISTS provincias CASCADE;
CREATE TABLE provincias (
    pk serial NOT NULL,
    region_fk int NOT NULL REFERENCES regiones(pk) ON UPDATE CASCADE ON DELETE CASCADE,
    nombre varchar(255) NOT NULL,
    UNIQUE (region_fk, nombre),
    PRIMARY KEY (pk)
);

DROP TABLE IF EXISTS comunas CASCADE;
CREATE TABLE comunas (
    pk serial,
    provincia_fk int NOT NULL REFERENCES provincias(pk) ON UPDATE CASCADE ON DELETE CASCADE,
    nombre varchar(255) NOT NULL,
    UNIQUE (provincia_fk, nombre),
    PRIMARY KEY (pk)
);


DROP TABLE IF EXISTS estudiantes CASCADE;
CREATE TABLE estudiantes (
    pk bigserial NOT NULL,
    nombres varchar(255) NOT NULL,
    apellidos varchar(255) NOT NULL,
    rut int NOT NULL,
    fecha_nacimiento date NOT NULL,
    genero char(1) NOT NULL DEFAULT 'F', -- M: Masculino -- F: Femenino
    direccion varchar(255) NOT NULL,
    comuna_id int NOT NULL REFERENCES comunas(pk) ON UPDATE CASCADE ON DELETE CASCADE,
    telefono varchar(50),
    celular varchar(50),
    email varchar(255),
    UNIQUE (rut),
    UNIQUE(email),
    PRIMARY KEY (pk)
);





COMMIT: