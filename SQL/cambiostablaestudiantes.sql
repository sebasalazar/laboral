-- Column: al cristian le gusta el completo

-- ALTER TABLE estudiantes DROP COLUMN completo;

ALTER TABLE estudiantes ADD COLUMN curriculum_completo boolean;
ALTER TABLE estudiantes ALTER COLUMN curriculum_completo SET NOT NULL;
ALTER TABLE estudiantes ALTER COLUMN curriculum_completo SET DEFAULT false;

