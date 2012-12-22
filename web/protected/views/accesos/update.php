<?php
/* @var $this AccesosController */
/* @var $model Accesos */

$this->breadcrumbs=array(
	'Accesoses'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'List Accesos', 'url'=>array('index')),
	array('label'=>'Create Accesos', 'url'=>array('create')),
	array('label'=>'View Accesos', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage Accesos', 'url'=>array('admin')),
);
?>

<h1>Update Accesos <?php echo $model->pk; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>