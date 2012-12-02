<?php
/* @var $this EstadosController */
/* @var $model Estados */

$this->breadcrumbs=array(
	'Estadoses'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List Estados', 'url'=>array('index')),
	array('label'=>'Create Estados', 'url'=>array('create')),
	array('label'=>'Update Estados', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete Estados', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Estados', 'url'=>array('admin')),
);
?>

<h1>View Estados #<?php echo $model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk',
		'nombre',
		'descripcion',
	),
)); ?>
