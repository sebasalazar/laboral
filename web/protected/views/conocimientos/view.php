<?php
/* @var $this ConocimientosController */
/* @var $model Conocimientos */

$this->breadcrumbs=array(
	'Conocimientoses'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List Conocimientos', 'url'=>array('index')),
	array('label'=>'Create Conocimientos', 'url'=>array('create')),
	array('label'=>'Update Conocimientos', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete Conocimientos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Conocimientos', 'url'=>array('admin')),
);
?>

<h1>View Conocimientos #<?php echo $model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk',
		'conocimiento',
		'descripcion',
	),
)); ?>
