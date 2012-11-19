<?php
 
// this file must be stored in:
// protected/components/WebUser.php
 
class WebUser extends CWebUser {
 
  private $_model;
  public function getModel($id)
  {
      $usuario = Usuarios::model()->findByPK($id);
      return $usuario;
  }
  
  public function getModelUsuarioCompleto($rut)
  {
      $docente = Docentes::model()->findByAttributes(array('rut'=>$rut));
      return $docente;
  }
}
?>