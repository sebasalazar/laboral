<?php
/* @var $this RubrosController */
/* @var $model Rubros */

$this->breadcrumbs=array(
	'Rubroses'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List Rubros', 'url'=>array('index')),
	array('label'=>'Create Rubros', 'url'=>array('create')),
	array('label'=>'Update Rubros', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete Rubros', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rubros', 'url'=>array('admin')),
);
?>

<h1>View Rubros #<?php echo $model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk',
		'rubro',
		'descripcion',
	),
)); ?>
