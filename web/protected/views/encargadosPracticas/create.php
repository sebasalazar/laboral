<?php
/* @var $this EncargadosPracticasController */
/* @var $model EncargadosPracticas */

$this->breadcrumbs=array(
	'Encargados Practicases'=>array('index'),
	'Create',
);
/*
$this->menu=array(
	array('label'=>'List EncargadosPracticas', 'url'=>array('index')),
	array('label'=>'Manage EncargadosPracticas', 'url'=>array('admin')),
);*/
?>

<h1>Añadir Encargado de Practica</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>