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
      if($docente != null)
        return $docente;
      else
      {
          /* $empresa = //aqui va modelo empresa
          if()
          {
              
          }
          else
          {
              //aqui estudiante
          }*/
      }
          
  }
  
  public function getTipoUsuario($rut)
  {
      $docente = Docentes::model()->findByAttributes(array('rut'=>$rut));
      if($docente != null)
      {
          return 3;
      }
      else
      {
          /* $empresa = //aqui va modelo empresa
          if()
          {
              return 2;
          }
          else
          {
              return 1;//aqui estudiante
          }*/
      }
  }
}
?>