<?php
/* @var $this NivelesEsController */
/* @var $model NivelesEs */

$this->breadcrumbs=array(
	'Niveles Es'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NivelesEs', 'url'=>array('index')),
	array('label'=>'Manage NivelesEs', 'url'=>array('admin')),
);
?>

<h1>Create NivelesEs</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>