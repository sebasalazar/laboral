<?php
/* @var $this EncargadosEmpresasController */
/* @var $model EncargadosEmpresas */

$this->breadcrumbs=array(
	'Encargados Empresases'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List EncargadosEmpresas', 'url'=>array('index')),
	array('label'=>'Create EncargadosEmpresas', 'url'=>array('create')),
	array('label'=>'Update EncargadosEmpresas', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete EncargadosEmpresas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EncargadosEmpresas', 'url'=>array('admin')),
);
?>

<h1>View EncargadosEmpresas #<?php echo $model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk',
		'empresa_fk',
		'nombre',
		'apellidos',
		'genero',
		'email',
		'telefono',
	),
)); ?>
