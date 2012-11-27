<?php
/* @var $this NivelesEsController */
/* @var $model NivelesEs */

$this->breadcrumbs=array(
	'Niveles Es'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List NivelesEs', 'url'=>array('index')),
	array('label'=>'Create NivelesEs', 'url'=>array('create')),
	array('label'=>'Update NivelesEs', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete NivelesEs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NivelesEs', 'url'=>array('admin')),
);
?>

<h1>View NivelesEs #<?php echo $model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk',
		'estudios',
		'descripcion',
	),
)); ?>
