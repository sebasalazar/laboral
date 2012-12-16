<?php
/* @var $this EncargadosEmpresasController */
/* @var $model EncargadosEmpresas */

$this->breadcrumbs=array(
	'Encargados Empresases'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);
/*
$this->menu=array(
	array('label'=>'List EncargadosEmpresas', 'url'=>array('index')),
	array('label'=>'Create EncargadosEmpresas', 'url'=>array('create')),
	array('label'=>'View EncargadosEmpresas', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage EncargadosEmpresas', 'url'=>array('admin')),
);*/
?>

<h1>Modificar Encargado de Empresa: <?php echo $model->nombre  ; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>