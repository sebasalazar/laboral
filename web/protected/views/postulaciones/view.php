<?php
/* @var $this PostulacionesController */
/* @var $model Postulaciones */

$this->breadcrumbs=array(
	'Postulaciones'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List Postulaciones', 'url'=>array('index')),
	array('label'=>'Create Postulaciones', 'url'=>array('create')),
	array('label'=>'Update Postulaciones', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete Postulaciones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Postulaciones', 'url'=>array('admin')),
);
?>

<h1>View Postulaciones #<?php echo $model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk',
		'oferta_laboral_fk',
		'estudiante_fk',
		'fecha',
	),
)); ?>
