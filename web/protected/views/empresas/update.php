<?php
/* @var $this EmpresasController */
/* @var $model Empresas */

$this->breadcrumbs=array(
	'Empresases'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);
/*
$this->menu=array(
	array('label'=>'Listar Empresas', 'url'=>array('index')),
	array('label'=>'Crear Empresas', 'url'=>array('create')),
	array('label'=>'Ver Empresas', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Administrar Empresas', 'url'=>array('admin')),
);*/
?>

<h1>Modificar Empresa <?php echo $model->nombre; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>