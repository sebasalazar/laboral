<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Create',
);

?>
<br />
<div class="titulo"><h1>Registro de Usuarios</h1></div>
<?php echo $this->renderPartial('_form', array('model'=>$model,'model1'=>$model1,'model2'=>$model2,'model3'=>$model3,'tipoUsuario'=>$tipo)); ?>