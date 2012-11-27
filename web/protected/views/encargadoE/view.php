<?php
/* @var $this EncargadoEController */
/* @var $model EncargadoE */

$this->breadcrumbs=array(
	'Encargado Es'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List EncargadoE', 'url'=>array('index')),
	array('label'=>'Create EncargadoE', 'url'=>array('create')),
	array('label'=>'Update EncargadoE', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete EncargadoE', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EncargadoE', 'url'=>array('admin')),
);
?>

<h1>View EncargadoE #<?php echo $model->pk; ?></h1>

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
