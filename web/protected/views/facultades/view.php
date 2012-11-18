<?php
/* @var $this FacultadesController */
/* @var $model Facultades */

$this->breadcrumbs=array(
	'Facultades'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List Facultades', 'url'=>array('index')),
	array('label'=>'Create Facultades', 'url'=>array('create')),
	array('label'=>'Update Facultades', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete Facultades', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Facultades', 'url'=>array('admin')),
);
?>

<h1>View Facultades #<?php echo $model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk',
		'facultad',
		'descripcion',
	),
)); ?>
