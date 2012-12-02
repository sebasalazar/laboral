<?php
/* @var $this RegionesController */
/* @var $model Regiones */

$this->breadcrumbs=array(
	'Regiones'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List Regiones', 'url'=>array('index')),
	array('label'=>'Create Regiones', 'url'=>array('create')),
	array('label'=>'Update Regiones', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete Regiones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Regiones', 'url'=>array('admin')),
);
?>

<h1>View Regiones #<?php echo $model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk',
		'region',
		'corfo',
		'codigo',
		'numero',
	),
)); ?>
