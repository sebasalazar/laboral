<?php
/* @var $this NivelesEdsController */
/* @var $model NivelesEds */

$this->breadcrumbs=array(
	'Niveles Eds'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List NivelesEds', 'url'=>array('index')),
	array('label'=>'Create NivelesEds', 'url'=>array('create')),
	array('label'=>'Update NivelesEds', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete NivelesEds', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NivelesEds', 'url'=>array('admin')),
);
?>

<h1>View NivelesEds #<?php echo $model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk',
		'estudios',
		'descripcion',
	),
)); ?>
