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


--
-- Modelo "Universidad" Grupo : Cristobal Jaramillo, Miguel Jerez, Cristian Luttgue
--

--
-- Script DDL para MySQL
--

-- 
-- Tabla de regiones, almacena las regiones de nuestro país (Chile).
-- 
DROP TABLE IF EXISTS regiones CASCADE;
CREATE TABLE regiones (
        pk serial NOT NULL,
        region_id varchar(255) NOT NULL,
        corfo varchar(255) NOT NULL,
        codigo varchar(5) NOT NULL,
        numero smallint NOT NULL,
        UNIQUE(region_id),
        UNIQUE(codigo),
        UNIQUE(numero),
        PRIMARY KEY(pk)
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

--
-- Estado estudiantes (Titulados, egresados, etc)
--
DROP TABLE IF EXISTS estados_estudiantes CASCADE;
CREATE TABLE estados_estudiantes (
    pk serial NOT NULL,
    estado varchar(255),
    UNIQUE (estado),
    PRIMARY KEY (pk)
);

DROP TABLE IF EXISTS estudiantes CASCADE;
CREATE TABLE estudiantes (
    pk serial NOT NULL,
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
    estado_est_fk int NOT NULL REFERENCES estados_estudiantes(pk) ON UPDATE CASCADE ON DELETE CASCADE,
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
    pk serial NOT NULL,
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
-- Perfiles del sistema
--
DROP TABLE IF EXISTS perfiles CASCADE;
CREATE TABLE perfiles (
    pk serial NOT NULL,
    descripcion VARCHAR(255) NOT NULL,
    PRIMARY KEY(pk)
);

--
-- Usuarios que se loguearán en el sistema
-- 
DROP TABLE IF EXISTS usuarios CASCADE;
CREATE TABLE usuarios (
    rut int NOT NULL,
    contrasena varchar(40) NOT NULL, -- SHA1
    per_fk int NOT NULL REFERENCES perfiles(pk) ON UPDATE CASCADE ON DELETE CASCADE,
    PRIMARY KEY(rut)
);

--
-- Registro de los últimos accesos junto con sus IPs
--
DROP TABLE IF EXISTS accesos CASCADE;
CREATE TABLE accesos (
    pk serial NOT NULL,
    rut int NOT NULL,
    fecha TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    ip varchar(255) DEFAULT '127.0.0.1',
    PRIMARY KEY (pk)
);

--
-- Tabla que almacena las empresas que ofreceran ofertas
--
DROP TABLE IF EXISTS empresas CASCADE;
CREATE TABLE empresas(
    pk serial NOT NULL,
    comuna_fk int NOT NULL REFERENCES comunas(pk) ON UPDATE CASCADE ON DELETE CASCADE,
    nombre VARCHAR(255) NOT NULL,
    nombrelegal VARCHAR(255),
    rut INT,
    telefono VARCHAR(50) NOT NULL,  
    email VARCHAR(255), 
    actividad VARCHAR(255) NOT NULL,  
    descripcion_negocio VARCHAR(255) NOT NULL,
    web VARCHAR(255) NOT NULL DEFAULT "N/A",-- N/A : Sin información 
    PRIMARY KEY(pk)
);

--
-- Tabla que almacena las jornadas de trabajo
--
DROP TABLE IF EXISTS jornadas CASCADE;
CREATE TABLE jornadas(
    pk serial NOT NULL,
    descripcion VARCHAR(255) NOT NULL,
    PRIMARY KEY(pk)
);

--
-- Tabla que almacena los tipo_contratos de trabajo
--
DROP TABLE IF EXISTS tipo_contrato CASCADE;
CREATE TABLE tipo_contrato(
    pk serial NOT NULL,
    descripcion_negocio VARCHAR(255) NOT NULL,
    PRIMARY KEY(pk)
);


--
-- Tabla que almacena las ofertas laborales
--
DROP TABLE IF EXISTS ofertas CASCADE;
CREATE TABLE ofertas(
    pk serial NOT NULL,
    descripcion VARCHAR(255) NOT NULL,
    fecha_publicacon TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    cargo VARCHAR(255) NOT NULL,
    beneficios VARCHAR(255) NOT NULL DEFAULT "N/A", 
    nivel_estudios VARCHAR(255) NOT NULL, 
    ubicacion VARCHAR(255) NOT NULL DEFAULT "N/A", 
    renta int NOT NULL,
    vacantes int NOT NULL, 
    activo BIT NOT NULL DEFAULT 1, -- Activo:1 Inactivo:0
    tip_contrato_fk int NOT NULL REFERENCES tipo_contrato(pk) ON UPDATE CASCADE ON DELETE CASCADE,
    empresas_fk int NOT NULL REFERENCES empresas(pk) ON UPDATE CASCADE ON DELETE CASCADE,
    jornadas_fk int NOT NULL REFERENCES jornadas(pk) ON UPDATE CASCADE ON DELETE CASCADE,
    PRIMARY KEY(pk)
);

--
-- Tabla ofertas - alumnos 
--
DROP TABLE IF EXISTS postulacion CASCADE;
CREATE TABLE postulacion(
    oferta_fk int NOT NULL REFERENCES ofertas(pk) ON UPDATE CASCADE ON DELETE CASCADE,
    estudiante_fk int NOT NULL REFERENCES estudiantes(pk) ON UPDATE CASCADE ON DELETE CASCADE,
    fecha TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);


--
-- Tabla que almacena los datos laborales 
--
DROP TABLE IF EXISTS laboral CASCADE;
CREATE TABLE laboral(
    pk serial NOT NULL,
    cv VARCHAR(255) NOT NULL, -- ruta cv personalizado
    experiencia1 VARCHAR(255) NOT NULL, 
    estudiante_fk int NOT NULL REFERENCES estudiantes(pk) ON UPDATE CASCADE ON DELETE CASCADE,
    fecha TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(pk)
);

--
-- Tabla que almacena los conocimientos de los postulantes
--
DROP TABLE IF EXISTS conocimientos  CASCADE;
CREATE TABLE conocimientos(
    pk serial NOT NULL, 
    descripcion VARCHAR(255) NOT NULL,
    lab_fk int NOT NULL REFERENCES laboral(pk) ON UPDATE CASCADE ON DELETE CASCADE,
    PRIMARY KEY(pk)
);

--
-- Tabla que almacena la experiencia laboral  
--
DROP TABLE IF EXISTS experiencia CASCADE;
CREATE TABLE experiencia(
    pk serial NOT NULL, 
    descripcion VARCHAR(255) NOT NULL,
    lab_fk int NOT NULL REFERENCES laboral(pk) ON UPDATE CASCADE ON DELETE CASCADE,
    PRIMARY KEY(pk)
);

COMMIT:
