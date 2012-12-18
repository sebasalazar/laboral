<?php
/* @var $this EducacionController */
/* @var $model Educacion */

$this->breadcrumbs=array(
	'Educacions'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List Educacion', 'url'=>array('index')),
	array('label'=>'Create Educacion', 'url'=>array('create')),
	array('label'=>'Update Educacion', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete Educacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Educacion', 'url'=>array('admin')),
);
?>

<h1>View Educacion #<?php echo $model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk',
		'curriculum_fk',
		'nombre_institucion',
		'carrera',
		'inicio',
		'fin',
	),
)); ?>
