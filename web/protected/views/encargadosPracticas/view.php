<?php
/* @var $this EncargadosPracticasController */
/* @var $model EncargadosPracticas */

$this->breadcrumbs=array(
	'Encargados Practicases'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List EncargadosPracticas', 'url'=>array('index')),
	array('label'=>'Create EncargadosPracticas', 'url'=>array('create')),
	array('label'=>'Update EncargadosPracticas', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete EncargadosPracticas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EncargadosPracticas', 'url'=>array('admin')),
);
?>

<h1>View EncargadosPracticas #<?php echo $model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk',
		'rut_epracti',
		'nombre_encargado',
		'apellido_encargado',
		'empresa_fk',
		'area_practica_fk',
	),
)); ?>
