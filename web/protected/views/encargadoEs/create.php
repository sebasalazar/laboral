<?php
/* @var $this EncargadoEsController */
/* @var $model EncargadoEs */

$this->breadcrumbs=array(
	'Encargado Es'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EncargadoEs', 'url'=>array('index')),
	array('label'=>'Manage EncargadoEs', 'url'=>array('admin')),
);
?>

<h1>Create EncargadoEs</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>