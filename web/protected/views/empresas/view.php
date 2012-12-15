<?php
/* @var $this EmpresasController */
/* @var $model Empresas */

$this->breadcrumbs=array(
	'Empresases'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List Empresas', 'url'=>array('index')),
	array('label'=>'Create Empresas', 'url'=>array('create')),
	array('label'=>'Update Empresas', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete Empresas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'¿Está seguro que quiere eliminar esta empresa?')),
	array('label'=>'Manage Empresas', 'url'=>array('admin')),
);
?>

<h1>View Empresas #<?php echo $model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk',
		'rut',
		'nombre',
		'direccion',
		'comuna_fk',
		'codigo_postal',
		'telefono',
		'email',
		'actividad_fk',
		'descripcion_negocio',
		'web',
	),
)); ?>
