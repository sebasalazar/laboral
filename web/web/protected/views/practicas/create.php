<?php
/* @var $this PracticasController */
/* @var $model Practicas */

$this->breadcrumbs=array(
	'Practicases'=>array('index'),
	'Create',
);

/*
$this->menu=array(
	array('label'=>'List Practicas', 'url'=>array('index')),
	array('label'=>'Manage Practicas', 'url'=>array('admin')),
);*/
?>

<h1>Crear nueva practica</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>