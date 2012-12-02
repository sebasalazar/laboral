<?php
/* @var $this EstadosController */
/* @var $model Estados */

$this->breadcrumbs=array(
	'Estadoses'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'List Estados', 'url'=>array('index')),
	array('label'=>'Create Estados', 'url'=>array('create')),
	array('label'=>'View Estados', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage Estados', 'url'=>array('admin')),
);
?>

<h1>Update Estados <?php echo $model->pk; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>