BEGIN TRANSACTION;

-- 
-- Tabla de regiones, almacena las regiones de nuestro país (Chile).
-- 
DROP TABLE IF EXISTS regiones CASCADE;
CREATE TABLE regiones (
        pk serial NOT NULL,
        region varchar(255) NOT NULL,
        corfo varchar(255) NOT NULL,
        codigo varchar(5) NOT NULL,
        numero smallint NOT NULL,
        UNIQUE(region),
        UNIQUE(codigo),
        UNIQUE(numero),
        PRIMARY KEY(region_id)
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

--
-- Estados Civiles
-- 
DROP TABLE IF EXISTS estados_civiles CASCADE;
CREATE TABLE estados_civiles (
    pk serial NOT NULL,
    estado varchar(255),
    descripcion text,
    UNIQUE (estado),
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
    ec_fk int NOT NULL REFERENCES estados_civiles(pk) ON UPDATE CASCADE ON DELETE CASCADE,
    telefono varchar(50),
    celular varchar(50),
    email varchar(255),
    UNIQUE (rut),
    UNIQUE(email),
    PRIMARY KEY (pk)
);


-- 
-- Tabla almacena las facultades de la Universidad.
-- 
DROP TABLE IF EXISTS facultades CASCADE;
CREATE TABLE facultades (
        pk serial NOT NULL,
        facultad varchar(255) NOT NULL,
        descripcion text,
        UNIQUE(facultad),
        PRIMARY KEY(pk)
);

-- 
-- Tabla almacena los departamentos de las Facultades
-- 
DROP TABLE IF EXISTS departamentos CASCADE;
CREATE TABLE departamentos (
        pk serial NOT NULL,
        facultad_fk int NOT NULL REFERENCES facultades(pk) ON UPDATE CASCADE ON DELETE CASCADE,
        departamento varchar(255) NOT NULL,
        descripcion text,
        UNIQUE(departamento),
        PRIMARY KEY(pk)
);



-- 
-- Esta tabla almacena las escuelas de los departamentos.
-- 
DROP TABLE IF EXISTS escuelas CASCADE;
CREATE TABLE escuelas (
        escuela_id serial NOT NULL,
        departamento_fk int NOT NULL REFERENCES departamentos(pk) ON UPDATE CASCADE ON DELETE CASCADE,
        escuela varchar(255) NOT NULL,
        descripcion text,
        UNIQUE(escuela),
        PRIMARY KEY(escuela_id)
);


DROP TABLE IF EXISTS docentes CASCADE;
CREATE TABLE docentes (
    pk bigserial NOT NULL,
    nombres varchar(255) NOT NULL,
    apellidos varchar(255) NOT NULL,
    rut int NOT NULL,
    fecha_nacimiento date NOT NULL,
    genero char(1) NOT NULL DEFAULT 'F', -- M: Masculino -- F: Femenino
    direccion varchar(255) NOT NULL,
    comuna_id int NOT NULL REFERENCES comunas(pk) ON UPDATE CASCADE ON DELETE CASCADE,
    ec_fk int NOT NULL REFERENCES estados_civiles(pk) ON UPDATE CASCADE ON DELETE CASCADE,
    departamento_fk int NOT NULL REFERENCES docentes(pk) ON UPDATE CASCADE ON DELETE CASCADE,
    telefono varchar(50),
    celular varchar(50),
    email varchar(255),
    UNIQUE (rut),
    UNIQUE(email),
    PRIMARY KEY (pk)
);


--
-- Usuarios que se loguearán en el sistema
-- 
DROP TABLE IF EXISTS usuarios CASCADE;
CREATE TABLE usuarios (
    rut int NOT NULL,
    contrasena varchar(40) NOT NULL, -- SHA1
    perfil int NOT NULL DEFAULT '0',
    PRIMARY KEY(rut)
);


--
-- Registro de los últimos accesos junto con sus IPs
--
DROP TABLE IF EXISTS accesos CASCADE;
CREATE TABLE accesos (
    pk bigserial NOT NULL,
    rut int NOT NULL,
    fecha timestamptz NOT NULL DEFAULT NOW(),
    ip varchar(255) DEFAULT '127.0.0.1',
    PRIMARY KEY (pk),
);





COMMIT: