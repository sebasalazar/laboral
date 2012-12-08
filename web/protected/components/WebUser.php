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
  
  public function getModelUsuarioCompletoId($id)
  {
      $docente = Docentes::model()->model()->findByPK($id);;
      if($docente != null)
        return $docente;
      else
      {
          $empresa = Empresas::model()->model()->findByPK($id);
          if($empresa != null)
          {
              return $empresa;
          }
          else
          {
              $estudiante = Estudiantes::model()->model()->findByPK($id);
              if($estudiante != null)
              {
                  return $estudiante;
              }
          }
      }
  }
  
  public function getModelUsuarioCompleto($rut)
  {
      $docente = Docentes::model()->findByAttributes(array('rut'=>$rut));
      if($docente != null)
        return $docente;
      else
      {
          $empresa = Empresas::model()->findByAttributes(array('rut'=>$rut));
          if($empresa != null)
          {
              return $empresa;
          }
          else
          {
              $estudiante = Estudiantes::model()->findByAttributes(array('rut'=>$rut));
              if($estudiante != null)
              {
                  return $estudiante;
              }
          }
      }
  }
  
  public function getAdmin()
  {
      return '174018367';
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
          $empresa = Empresas::model()->findByAttributes(array('rut'=>$rut));
          if($empresa != null)
          {
              return 2;
          }
          else
          {
              $estudiante = Estudiantes::model()->findByAttributes(array('rut'=>$rut));
              if($estudiante != null){
                  return 1;
              }
          }
      }
  }
}
?>