<?php
/* @var $this DepartamentosController */
/* @var $model Departamentos */

$this->breadcrumbs=array(
	'Departamentoses'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List Departamentos', 'url'=>array('index')),
	array('label'=>'Create Departamentos', 'url'=>array('create')),
	array('label'=>'Update Departamentos', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete Departamentos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Departamentos', 'url'=>array('admin')),
);
?>

<h1>View Departamentos #<?php echo $model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk',
		'facultad_fk',
		'departamento',
		'descripcion',
	),
)); ?>
