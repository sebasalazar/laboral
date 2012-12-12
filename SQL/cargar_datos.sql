BEGIN TRANSACTION;

-- 
-- Ingresar datos necesarios Grupo 1
-- 





-- 
-- Ingresar datos necesarios Grupo OneUp
-- 
--Creacion de Empresa
--
INSERT INTO regiones (nombre,zona_corfo,codigo,numero) VALUES ('Región de Arica y Parinacota','Norte Grande','XV','15');
INSERT INTO provincias (nombre,region_fk) VALUES ('Arica',(SELECT pk FROM regiones WHERE nombre='Región de Arica y Parinacota'));
INSERT INTO comunas (nombre,provincia_fk) VALUES ('Arica',(SELECT pk FROM provincias WHERE nombre='Arica'));
INSERT INTO rubros (pk,rubro,descripcion) VALUES ('2','Industria','Área industrial');
--
--Creación de Practicas
--
INSERT INTO jornadas (pk,jornada,descripcion) VALUES ('2','Tarde','De 14.00 a 22.00 Hrs');
--
--Fin
--



-- 
-- Ingresar datos necesarios Grupo 3
-- 



COMMIT;
