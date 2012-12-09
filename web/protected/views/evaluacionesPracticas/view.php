<?php
/* @var $this EvaluacionesPracticasController */
/* @var $model EvaluacionesPracticas */

$this->breadcrumbs=array(
	'Evaluaciones Practicases'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List EvaluacionesPracticas', 'url'=>array('index')),
	array('label'=>'Create EvaluacionesPracticas', 'url'=>array('create')),
	array('label'=>'Update EvaluacionesPracticas', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete EvaluacionesPracticas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EvaluacionesPracticas', 'url'=>array('admin')),
);
?>

<h1>View EvaluacionesPracticas #<?php echo $model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk',
		'estudiant_fk',
		'encar_practicas_fk',
		'cargo_asignado',
		'conocimientos_demostrados',
		'eficacia',
		'grado_cumplimiento',
		'puntualidad_respeto',
		'integracion_adaptacion',
		'responsabilidad_superacion',
		'capacidades_personales',
		'iniciativa_creativi_improvi',
	),
)); ?>
