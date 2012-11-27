<?php
/* @var $this EncargadoEsController */
/* @var $model EncargadoEs */

$this->breadcrumbs=array(
	'Encargado Es'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List EncargadoEs', 'url'=>array('index')),
	array('label'=>'Create EncargadoEs', 'url'=>array('create')),
	array('label'=>'Update EncargadoEs', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete EncargadoEs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EncargadoEs', 'url'=>array('admin')),
);
?>

<h1>View EncargadoEs #<?php echo $model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk',
		'empresa_fk',
		'nombre',
		'apellidos',
		'genero',
		'email',
		'telefono',
	),
)); ?>
