<?php
/* @var $this PostulacionesController */
/* @var $model Postulaciones */

$this->breadcrumbs=array(
	'Postulaciones'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'Lista Postulaciones', 'url'=>array('index')),
	array('label'=>'Crear Postulacion', 'url'=>array('create')),
	array('label'=>'Actualizar Postulacion', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Borrar Postulacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Postulacion', 'url'=>array('admin')),
);
?>

<h1>Ver Postulacion: #<?php echo $model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk',
		'oferta_laboral_fk',
		'estudiante_fk',
		'fecha',
	),
)); ?>
