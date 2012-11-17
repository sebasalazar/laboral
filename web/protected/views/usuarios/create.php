<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Create',
);

?>

<h1>Create Usuarios</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>