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
-- Docente (Usuario: 22.222.222-2 / Password: utem)
INSERT INTO usuarios (username, password, salt, roles) VALUES ('22222222','22abd99950e28b5d3953ecc800e4bce7','50c8b5d98ba193.37411008', '2');
-- Empresa  (Usuario: 44.444.444-4 / Password: utem)
INSERT INTO usuarios (username, password, salt, roles) VALUES ('44444444','22abd99950e28b5d3953ecc800e4bce7','50c8b5d98ba193.37411008', '4');
-- Administrador  (Usuario: 88.888.888-8 / Password: utem)
INSERT INTO usuarios (username, password, salt, roles) VALUES ('88888888','22abd99950e28b5d3953ecc800e4bce7','50c8b5d98ba193.37411008', '8');
-- Todos los permisos (Usuario: 12.111.111-K / Password: utem)
INSERT INTO usuarios (username, password, salt, roles) VALUES ('12111111','22abd99950e28b5d3953ecc800e4bce7','50c8b5d98ba193.37411008', '15');

COMMIT;
