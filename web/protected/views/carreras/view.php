<?php
/* @var $this CarrerasController */
/* @var $model Carreras */

$this->breadcrumbs=array(
	'Carrerases'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List Carreras', 'url'=>array('index')),
	array('label'=>'Create Carreras', 'url'=>array('create')),
	array('label'=>'Update Carreras', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete Carreras', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Carreras', 'url'=>array('admin')),
);
?>

<h1>View Carreras #<?php echo $model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk',
		'cod_carrera',
		'nombre_carrera',
		'escuela_fk',
	),
)); ?>
