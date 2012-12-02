<?php
/* @var $this NivelesEdsController */
/* @var $model NivelesEds */

$this->breadcrumbs=array(
	'Niveles Eds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NivelesEds', 'url'=>array('index')),
	array('label'=>'Manage NivelesEds', 'url'=>array('admin')),
);
?>

<h1>Create NivelesEds</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>