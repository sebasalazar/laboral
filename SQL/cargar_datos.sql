BEGIN TRANSACTION;

--
-- Datos de Prueba
--

--
-- Usuarios
--

-- Limpio los usuarios antes de cargar estos datos.
TRUNCATE usuarios CASCADE;

-- Estudiante (Usuario: 11.111.111-1 / Password: utem)
INSERT INTO usuarios (username, password, salt, roles) VALUES ('11111111','22abd99950e28b5d3953ecc800e4bce7','50c8b5d98ba193.37411008', '1');
INSERT INTO estudiantes (nombres, apellidos, rut, fecha_nacimiento, genero, direccion, comuna_fk, ec_fk, carrera_fk, email, estado) VALUES ('Juan', 'Perez Perez', '11111111', '1988-08-04', 'M', 'Avenida José Pedro Alessandri 1242', '333', '1', '16', 'juan.perez@utem.cl', '1');

-- Docente (Usuario: 22.222.222-2 / Password: utem)
INSERT INTO usuarios (username, password, salt, roles) VALUES ('22222222','22abd99950e28b5d3953ecc800e4bce7','50c8b5d98ba193.37411008', '2');
INSERT INTO docentes (nombres, apellidos, rut, fecha_nacimiento, genero, direccion, comuna_fk, ec_fk, departamento_fk, email) VALUES ('María', 'Gonzalez Gonzalez', '22222222', '1980-01-01', 'F', 'Avenida José Pedro Alessandri 1242', '333', '2', '18','mgonzalez@utem.cl');


-- Empresa  (Usuario: 44.444.444-4 / Password: utem)
INSERT INTO usuarios (username, password, salt, roles) VALUES ('44444444','22abd99950e28b5d3953ecc800e4bce7','50c8b5d98ba193.37411008', '4');
INSERT INTO empresas (rut, nombre, direccion, comuna_fk, codigo_postal, telefono, email, actividad_fk, descripcion_negocio, web) VALUES ('44444444', 'OrangePeople Software Ltda.', 'Enrique Mac-Iver 255 Oficina 401', '345', '123456', '26385898', 'contacto@orangepeople.cl', '26', 'Desarrollo de Software, Ingeniería de Sistemas e Integración Continua', 'http://orangepeople.cl');
INSERT INTO encargados_empresas (empresa_fk, rut_encargado, nombre, apellidos, genero, direccion, comuna_fk, email, telefono) VALUES ('1', '44444444', 'Pedro', 'Zapata', 'M', 'Enrique Mac-Iver 255 Oficina 401', '345', 'pzapata@op.cl', '26385898');

-- Administrador  (Usuario: 88.888.888-8 / Password: utem)
INSERT INTO usuarios (username, password, salt, roles) VALUES ('88888888','22abd99950e28b5d3953ecc800e4bce7','50c8b5d98ba193.37411008', '8');

-- Todos los permisos (Usuario: 12.111.111-K / Password: utem)
INSERT INTO usuarios (username, password, salt, roles) VALUES ('12111111','22abd99950e28b5d3953ecc800e4bce7','50c8b5d98ba193.37411008', '15');

COMMIT;
