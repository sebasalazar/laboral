<?php
/* @var $this DocentesController */
/* @var $model Docentes */

$this->breadcrumbs=array(
	'Docentes'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);
?>

<h1>Actualizar Datos Personales</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>