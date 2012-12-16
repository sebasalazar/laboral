<?php

class WebUser extends CWebUser {

    private $_model;

    public function getModel($id) {
        $usuario = Usuarios::model()->findByPK($id);
        return $usuario;
    }

    public function rutDocente($id) {
        $docente = Docentes::model()->findByPk($id);
        return $docente->rut;
    }
    
    public function idDocente($rut){
        $docente = Docentes::model()->findByAttributes(array('rut'=>$rut));
        if($docente != null)
            return $docente->pk;
        else 
            return 0;
    }


    public function getModelUsuarioEstudianteId($id) {
        $estudiante = Estudiantes::model()->model()->findByPK($id);
        if ($estudiante != null) {
            return $estudiante;
        }
    }

    public function getModelUsuarioEmpresaId($id) {
        $empresa = Empresas::model()->model()->findByPK($id);
        if ($empresa != null) {
            return $empresa;
        }
    }
    
    public function getFormateoRut($rut_param){ 
     
        $parte4 = substr($rut_param, -1); // seria solo el numero verificador 
        $parte3 = substr($rut_param, -4,3); // la cuenta va de derecha a izq  
        $parte2 = substr($rut_param, -7,3);  
        $parte1 = substr($rut_param, 0,-7);   //de esta manera toma todos los caracteres desde el 8 hacia la izq 

        return $parte1.".".$parte2.".".$parte3."-".$parte4; 
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

    public function getAdmin() {
        if (!Yii::app()->user->isGuest) {
            $usuario = Usuarios::model()->findByPk(Yii::app()->user->name);
            $rol = $this->roles($usuario->roles);
            if ($rol['admin'] == 1) {
                return Yii::app()->user->name;
            } else {
                return 0;
            }
        }
        else
            return 0;
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
        $roles['admin'] = $rol[0];
        $roles['docente'] = $rol[1];
        $roles['empresa'] = $rol[2];
        $roles['estudiante'] = $rol[3];
        return $roles;
    }
    
    public function rolesToDec($rolBin){   //en base a un numero binario, se calcula el rol en numero decimal
        $rol['estudiante'] = $rolBin%10;   //para guardar en base de datos. ej: 1011 = 11.
        $rolBin = $rolBin/10;
        $rol['empresa'] = $rolBin%10;
        $rolBin = $rolBin/10;
        $rol['docente'] = $rolBin%10;
        $rolBin = $rolBin/10;
        $rol['admin'] = $rolBin%10;
        $rolBin = $rolBin/10;
        return (int) (pow(2,3)*$rol['admin'] + pow(2,2)*$rol['docente'] + pow(2,1)*$rol['empresa'] + pow(2,0)*$rol['estudiante']);
    }
    
    public function isDocente() {
        if(!Yii::app()->user->isGuest){
            $usuario = Usuarios::model()->findByPk(Yii::app()->user->name);
            $rol = $this->roles($usuario->roles);
            if ($rol['docente'] == 1) {
                return true;
            } else {
                return false;
            }
        }
        else
                return false;
    }
    
    public function isEmpresa() {
        if(!Yii::app()->user->isGuest){
            $usuario = Usuarios::model()->findByPk(Yii::app()->user->name);
            $rol = $this->roles($usuario->roles);
            if ($rol['empresa'] == 1) {
                return true;
            } else {
                return false;
            }
        }
        else
                return false;
    }
    
    public function isEstudiante() {
        if(!Yii::app()->user->isGuest){
            $usuario = Usuarios::model()->findByPk(Yii::app()->user->name);
            $rol = $this->roles($usuario->roles);
            if ($rol['estudiante'] == 1) {
                return true;
            } else {
                return false;
            }
        }
        else
                return false;
    }
    
    public function isAdmin() {
        if(!Yii::app()->user->isGuest){
            $usuario = Usuarios::model()->findByPk(Yii::app()->user->name);
            $rol = $this->roles($usuario->roles);
            if ($rol['admin'] == 1) {
                return true;
            } else {
                return false;
            }
        }
        else
                return false;
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

            if (is_object($texto)) {
                $mensaje = print_r($texto, false);
            } else if (is_array($texto)) {
                $mensaje = print_r($texto, false);
            } else {
                $mensaje = $texto;
            }

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

    /**
     * @fn obtener_ip()
     * funcion copiada de http://www.eslomas.com/index.php/archives/2005/04/26/obtencion-ip-real-php/
     * hay que ver si esto realmente nos sirve, dado que algunos visitantes provienen de ip internas
     * Apliqué un cambio, en caso de que no encuentre una ip, retorne el valor 127.0.0.1 (lo cuál por
     * cierto no puede suceder)
     */
    public static function getIp() {
        $client_ip = "127.0.0.1";
        try {

            if ($_SERVER['HTTP_X_FORWARDED_FOR'] != '') {
                $client_ip = (!empty($_SERVER['REMOTE_ADDR']) ) ? $_SERVER['REMOTE_ADDR'] : ( (!empty($_ENV['REMOTE_ADDR']) ) ? $_ENV['REMOTE_ADDR'] :
                                "unknown" );

                /**
                 * los proxys van añadiendo al final de esta cabecera
                 * las direcciones ip que van "ocultando". Para localizar la ip real
                 * del usuario se comienza a mirar por el principio hasta encontrar
                 * una dirección ip que no sea del rango privado. En caso de no
                 * encontrarse ninguna se toma como valor el REMOTE_ADDR
                 */
                $entries = split('[, ]', $_SERVER['HTTP_X_FORWARDED_FOR']);
                reset($entries);

                while (list(, $entry) = each($entries)) {
                    $entry = trim($entry);
                    if (preg_match("/^([0-9]+\.[0-9]+\.[0-9]+\.[0-9]+)/", $entry, $ip_list)) {
                        /**
                         * Visitar: http://www.faqs.org/rfcs/rfc1918.html
                         */
                        $private_ip = array(
                            '/^0\./',
                            '/^127\.0\.0\.1/',
                            '/^192\.168\..*/',
                            '/^172\.((1[6-9])|(2[0-9])|(3[0-1]))\..*/',
                            '/^10\..*/');

                        $found_ip = preg_replace($private_ip, $client_ip, $ip_list[1]);

                        if ($client_ip != $found_ip) {
                            $client_ip = $found_ip;
                            break;
                        }
                    }
                }
            } else {
                $client_ip = (!empty($_SERVER['REMOTE_ADDR']) ) ? $_SERVER['REMOTE_ADDR'] : ( (!empty($_ENV['REMOTE_ADDR']) ) ? $_ENV['REMOTE_ADDR'] :
                                "127.0.0.1" );
            }
        } catch (Exception $e) {
            // En caso de caida, retornamos esta ip, de tal modo que al ver el log sea claro que ese registro es erroneo.
            $client_ip = "127.0.0.1";
            // logguear la Excepción en Yii
        }
        return $client_ip;
    }

}

?>