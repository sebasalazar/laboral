<?php
/* @var $this TipsController */
/* @var $model Tips */

$this->breadcrumbs=array(
	'Tips'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List Tips', 'url'=>array('index')),
	array('label'=>'Create Tips', 'url'=>array('create')),
	array('label'=>'Update Tips', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete Tips', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tips', 'url'=>array('admin')),
);
?>

<h1>View Tips #<?php echo $model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk',
		'titulo',
		'contenido',
	),
)); ?>
