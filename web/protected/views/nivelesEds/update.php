<?php
/* @var $this NivelesEdsController */
/* @var $model NivelesEds */

$this->breadcrumbs=array(
	'Niveles Eds'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'List NivelesEds', 'url'=>array('index')),
	array('label'=>'Create NivelesEds', 'url'=>array('create')),
	array('label'=>'View NivelesEds', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage NivelesEds', 'url'=>array('admin')),
);
?>

<h1>Update NivelesEds <?php echo $model->pk; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>