<?php
/* @var $this TipsController */
/* @var $model Tips */

$this->breadcrumbs=array(
	'Tips'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tips', 'url'=>array('index')),
	array('label'=>'Create Tips', 'url'=>array('create')),
	array('label'=>'View Tips', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage Tips', 'url'=>array('admin')),
);
?>

<h1>Update Tips <?php echo $model->pk; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>