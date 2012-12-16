<?php
/* @var $this EmpresasController */
/* @var $model Empresas */

$this->breadcrumbs=array(
	'Empresases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Empresas', 'url'=>array('index')),
	array('label'=>'Manage Empresas', 'url'=>array('admin')),
);
?>

<h1>Crear nueva Empresas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>