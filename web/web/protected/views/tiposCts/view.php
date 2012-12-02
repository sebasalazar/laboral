<?php
/* @var $this TiposCtsController */
/* @var $model TiposCts */

$this->breadcrumbs=array(
	'Tipos Cts'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List TiposCts', 'url'=>array('index')),
	array('label'=>'Create TiposCts', 'url'=>array('create')),
	array('label'=>'Update TiposCts', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete TiposCts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TiposCts', 'url'=>array('admin')),
);
?>

<h1>View TiposCts #<?php echo $model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk',
		'contrato',
		'descripcion',
	),
)); ?>
