<?php
/* @var $this PracticasController */
/* @var $model Practicas */

$this->breadcrumbs=array(
	'Practicases'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List Practicas', 'url'=>array('index')),
	array('label'=>'Create Practicas', 'url'=>array('create')),
	array('label'=>'Update Practicas', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete Practicas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Practicas', 'url'=>array('admin')),
);
?>

<h1>View Practicas #<?php echo $model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk',
		'empresa_fk',
		'area_practica',
		'inicio_practica',
		'fin_practica',
		'remuneracion',
	),
)); ?>
