<?php
/* @var $this PostulacionesController */
/* @var $model Postulaciones */

$this->breadcrumbs=array(
	'Postulaciones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Postulaciones', 'url'=>array('index')),
	array('label'=>'Manage Postulaciones', 'url'=>array('admin')),
);
?>

<h1>Crear Nueva Postulacion: </h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>