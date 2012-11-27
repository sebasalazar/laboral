<?php
/* @var $this EstadosCivilesController */
/* @var $model EstadosCiviles */

$this->breadcrumbs=array(
	'Estados Civiles'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List EstadosCiviles', 'url'=>array('index')),
	array('label'=>'Create EstadosCiviles', 'url'=>array('create')),
	array('label'=>'Update EstadosCiviles', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete EstadosCiviles', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EstadosCiviles', 'url'=>array('admin')),
);
?>

<h1>View EstadosCiviles #<?php echo $model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk',
		'estado',
		'descripcion',
	),
)); ?>
