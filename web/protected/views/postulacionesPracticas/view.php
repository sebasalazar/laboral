<?php
/* @var $this PostulacionesPracticasController */
/* @var $model PostulacionesPracticas */

$this->breadcrumbs=array(
	'Postulaciones Practicases'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List PostulacionesPracticas', 'url'=>array('index')),
	array('label'=>'Create PostulacionesPracticas', 'url'=>array('create')),
	array('label'=>'Update PostulacionesPracticas', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete PostulacionesPracticas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PostulacionesPracticas', 'url'=>array('admin')),
);
?>

<h1>View PostulacionesPracticas #<?php echo $model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk',
		'fecha_postulacion',
		'practica_fk',
		'estudiante_fk',
		'estado',
		'motivo',
	),
)); ?>
