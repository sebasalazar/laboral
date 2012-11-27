<?php
/* @var $this ComunasController */
/* @var $model Comunas */

$this->breadcrumbs=array(
	'Comunases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Comunas', 'url'=>array('index')),
	array('label'=>'Manage Comunas', 'url'=>array('admin')),
);
?>

<h1>Create Comunas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>