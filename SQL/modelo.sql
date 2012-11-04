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
    estado char(1) NOT NULL DEFAULT 'A', -- A: Alumno -- E: Egresado -- T: Titulado
    busqueda boolean NOT NULL DEFAULT FALSE, -- Si se encuentra o no buscando trabajo (solicitado por docentes y adm)
  --curriculum varchar(255), -- ubicación del curriculum (dirección archivo) (solicitado por adm actual)
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
    PRIMARY KEY (pk)
);


--
-- Modelo "Universidad" Grupo 1: Sebastián Menéndez Sáez, Claudio Piña Novoa, Oscar León Trureo
--

-- 
--  Tabla que almacenará los docentes que cumplen un cago administrativo en la universidad.
--

DROP TABLE IF EXISTS cargos_adm CASCADE;
CREATE TABLE cargos_adm CASCADE(
    pk serial NOT NULL,
    nombre_cargo varchar(255) NOT NULL,
    fecha_inicio date NOT NULL,
    fecha_fin date NOT NULL,
    docente_fk int NOT NULL REFERENCES docentes(pk) ON UPDATE CASCADE ON DELETE CASCADE,
    descripcion text,
    UNIQUE(nombre_cargo),
    PRIMARY KEY (pk)
);


-- 
-- Algunos Academicos y Administrativos pidieron poder seguir el perfil de algunos alumnos
-- esta taba almacenará los seguimientos de academicos a alumnos.
--
DROP TABLE IF EXISTS seguimiento_academicos CASCADE;
CREATE TABLE seguimiento_academicos CASCADE(
    pk bigserial NOT NULL,
    academico_fk int NOT NULL REFERENCES docentes(pk) ON UPDATE CASCADE ON DELETE CASCADE,
    estudiante_fk int NOT NULL REFERENCES estudiantes(pk) ON UPDATE CASCADE ON DELETE CASCADE,
    PRIMARY KEY (pk)
);

--
-- Sugerencia trabajo, algunos academicos pidieron que se pudiera sugerir trabajos a alumnos que estuvieran siguiendo
-- 
DROP TABLE IF EXISTS sugerencias_trabajo CASCADE;
CREATE TABLE sugerencias_trabajo(
        pk NOT NULL,
        academico_fk int NOT NULL REFERENCES docentes(pk) ON UPDATE CASCADE ON DELETE CASCADE,
        estudiante_fk int NOT NULL REFERENCES estudiantes(pk) ON UPDATE CASCADE ON DELETE CASCADE,
        trabajo_fk int NOT NULL REFERENCES trabajos(pk) ON UPDATE CASCADE ON DELETE CASCADE,
        PRIMARY KEY (pk)
);

--
-- FIN GRUPO 1
--

COMMIT:

--
-- Grupo OneUP
--

-- tabla de empresas

DROP TABLE IF EXISTS empresas CASCADE;
CREATE TABLE empresas (
        pk serial NOT NULL,
        rut int NOT NULL,
	empresa varchar (255) NOT NULL,
	telefono varchar(50) NOT NULL,
	mail varchar(255) NOT NULL,
        region_fk int NOT NULL REFERENCES regiones(pk) ON UPDATE CASCADE ON DELETE CASCADE,
        UNIQUE(rut),
	UNIQUE(empresa),
        PRIMARY KEY(pk)
);



-- oferta laboral de la empresa, ésta la verán las empresas para saber a quien contratar o qué perfil corresponde
-- para el trabajo ofrecido

DROP TABLE IF EXISTS ofertas_laborales CASCADE;
CREATE TABLE ofertas_laborales (
    pk serial NOT NULL,
    empresa_fk int NOT NULL REFERENCES empresas(pk) ON UPDATE CASCADE ON DELETE CASCADE,
    rubro varchar(255), -- industria -- informatica -- gestion -- etc
    descripcion_rubro text,
    renta int NOT NULL,
    vacantes smallint NOT NULL,
    plazo date,
    UNIQUE (rubro),
    PRIMARY KEY (pk)
);

--
-- Fin Grupo OneUP
-- 

COMMIT: