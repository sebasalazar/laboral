<?php
/* @var $this NivelesEsController */
/* @var $model NivelesEs */

$this->breadcrumbs=array(
	'Niveles Es'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'List NivelesEs', 'url'=>array('index')),
	array('label'=>'Create NivelesEs', 'url'=>array('create')),
	array('label'=>'View NivelesEs', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage NivelesEs', 'url'=>array('admin')),
);
?>

<h1>Update NivelesEs <?php echo $model->pk; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>