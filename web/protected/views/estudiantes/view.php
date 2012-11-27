<?php
/* @var $this EstudiantesController */
/* @var $model Estudiantes */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List Estudiantes', 'url'=>array('index')),
	array('label'=>'Create Estudiantes', 'url'=>array('create')),
	array('label'=>'Update Estudiantes', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete Estudiantes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Estudiantes', 'url'=>array('admin')),
);
?>

<h1>View Estudiantes #<?php echo $model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk',
		'nombres',
		'apellidos',
		'rut',
		'fecha_nacimiento',
		'genero',
		'direccion',
		'comuna_id',
		'ec_fk',
		'telefono',
		'celular',
		'email',
		'estado',
		'busqueda',
		'archivo_curriculum',
	),
)); ?>
