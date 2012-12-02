<?php
/* @var $this DocentesController */
/* @var $model Docentes */

$this->breadcrumbs=array(
	'Docentes'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);
?>

<h1>Actualizar Datos Personales del Usuario: <?php echo $model->rut; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>