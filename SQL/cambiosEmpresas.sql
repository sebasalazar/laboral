--
--Cambios en empresas
--

ALTER TABLE empresas
DROP COLUMN nombre_represen_legal
ALTER TABLE empresas
DROP COLUMN actividad
ALTER TABLE empresas
ADD actividad_fk int NOT NULL REFERENCES rubros(pk) ON UPDATE CASCADE ON DELETE CASCADE

--
--Cambios en encargados_empresas
--

ALTER TABLE encargados_empresas
ADD rut_encargado int NOT NULL
ALTER TABLE encargados_empresas
ADD direccion varchar(255) NOT NULL
ALTER TABLE encargados_empresas
ADD comun_fk int NOT NULL REFERENCES comunas(pk) ON UPDATE CASCADE ON DELETE CASCADE

--
--Cambios en practicas
--

ALTER TABLE practicas
DROP COLUMN area_practica
ALTER TABLE practicas
ADD encargado_fk int NOT NULL REFERENCES encargados_empresas(pk) ON UPDATE CASCADE ON DELETE CASCADE
ALTER TABLE practicas
ADD area_practica_fk int NOT NULL REFERENCES rubros(pk) ON UPDATE CASCADE ON DELETE CASCADE
ALTER TABLE practicas
ADD horario_fk int NOT NULL REFERENCES jornadas(pk) ON UPDATE CASCADE ON DELETE CASCADE

