<?php
/* @var $this EvaluacionesPracticasController */
/* @var $model EvaluacionesPracticas */

$this->breadcrumbs=array(
	'Evaluaciones Practicases'=>array('index'),
	'Create',
);
/*
$this->menu=array(
	array('label'=>'List EvaluacionesPracticas', 'url'=>array('index')),
	array('label'=>'Manage EvaluacionesPracticas', 'url'=>array('admin')),
);*/
?>

<h1>Formulario de Evaluación de Practicas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>