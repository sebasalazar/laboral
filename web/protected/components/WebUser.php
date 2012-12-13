<?php

class WebUser extends CWebUser {

    private $_model;

    public function getModel($id) {
        $usuario = Usuarios::model()->findByPK($id);
        return $usuario;
    }

    public function getModelUsuarioCompletoId($id) {
        $docente = Docentes::model()->model()->findByPK($id);
        if ($docente != null)
            return $docente;
        else {
            $empresa = Empresas::model()->model()->findByPK($id);
            if ($empresa != null) {
                return $empresa;
            } else {
                $estudiante = Estudiantes::model()->model()->findByPK($id);
                if ($estudiante != null) {
                    return $estudiante;
                }
            }
        }
    }
    
        public function getModelUsuarioEstudianteId($id) {
       $estudiante = Estudiantes::model()->model()->findByPK($id);
                if ($estudiante != null) {
                    return $estudiante;
                }
        }

    public function getModelUsuarioCompleto($rut) {
        $docente = Docentes::model()->findByAttributes(array('rut' => $rut));
        if ($docente != null)
            return $docente;
        else {
            $empresa = Empresas::model()->findByAttributes(array('rut' => $rut));
            if ($empresa != null) {
                return $empresa;
            } else {
                $estudiante = Estudiantes::model()->findByAttributes(array('rut' => $rut));
                if ($estudiante != null) {
                    return $estudiante;
                }
            }
        }
    }

    public function getModelUsuarioEstudiante($rut) {
                 $estudiante = Estudiantes::model()->findByAttributes(array('rut' => $rut));
                if ($estudiante != null) {
                    return $estudiante;
    }
    }
    
    public static function getAdmin() {
        return '174018367';
    }

    public static function usuario() {
        $us = new Usuarios;
        return $us;
    }

    public function roles($rolDB) {   //funcion que recibe un numero entero (decimal) y lo pasa a binario (para el mapa bit de roles)
        $i = 3;                      //Visto en Clases.
        while ($rolDB != 0) {
            $resto = $rolDB % 2;
            $rolDB = $rolDB / 2;
            $rol[$i] = $resto;
            $i = $i - 1;
        }
        return $rol;
    }

    public function getTipoUsuario($rut) {
        $docente = Docentes::model()->findByAttributes(array('rut' => $rut));
        if ($docente != null) {
            return 3;
        } else {
            $empresa = Empresas::model()->findByAttributes(array('rut' => $rut));
            if ($empresa != null) {
                return 2;
            } else {
                $estudiante = Estudiantes::model()->findByAttributes(array('rut' => $rut));
                if ($estudiante != null) {
                    return 1;
                }
            }
        }
    }

    public static function loguear($texto) {
        try {
            $archivo = "php://stderr";
            $fecha = date("D M d H:i:s Y");
            $mensaje = print_r($texto, false);
            
            $contenido = "\n[$fecha] [LABORAL] el sistema ejecutó: \"$mensaje\"\n";

            $fpt = fopen("$archivo", "a+");
            if ($fpt !== false) {
                fwrite($fpt, $contenido);
                fclose($fpt);
            }
        } catch (Exception $e) {
            // Hacer algo con la excepción
        }
    }

}

?>