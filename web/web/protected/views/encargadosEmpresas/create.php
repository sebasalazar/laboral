<?php
/* @var $this EncargadosEmpresasController */
/* @var $model EncargadosEmpresas */

$this->breadcrumbs=array(
	'Encargados Empresases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EncargadosEmpresas', 'url'=>array('index')),
	array('label'=>'Manage EncargadosEmpresas', 'url'=>array('admin')),
);
?>

<h1>Create EncargadosEmpresas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>