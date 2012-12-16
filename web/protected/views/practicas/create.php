<?php
/* @var $this PracticasController */
/* @var $model Practicas */

$this->breadcrumbs=array(
	'Practicas'=>array('index'),
	'Create',
);
/*
$this->menu=array(
	array('label'=>'List Practicas', 'url'=>array('index')),
	array('label'=>'Manage Practicas', 'url'=>array('admin')),
);*/
?>

<div class="contenidoPage">
<h1>Crear nueva Practica</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>