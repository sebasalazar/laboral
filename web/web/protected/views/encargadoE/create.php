<?php
/* @var $this EncargadoEController */
/* @var $model EncargadoE */

$this->breadcrumbs=array(
	'Encargado Es'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EncargadoE', 'url'=>array('index')),
	array('label'=>'Manage EncargadoE', 'url'=>array('admin')),
);
?>

<h1>Create EncargadoE</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>