<?php
/* @var $this FormacioncomplementariaController */
/* @var $model Formacioncomplementaria */

$this->breadcrumbs=array(
	'Formacioncomplementarias'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List Formacioncomplementaria', 'url'=>array('index')),
	array('label'=>'Create Formacioncomplementaria', 'url'=>array('create')),
	array('label'=>'Update Formacioncomplementaria', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete Formacioncomplementaria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Formacioncomplementaria', 'url'=>array('admin')),
);
?>

<h1>View Formacioncomplementaria #<?php echo $model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk',
		'nombre_formacion',
		'institucion',
		'anio_formacion_complementaria',
		'curriculum_fk',
	),
)); ?>
