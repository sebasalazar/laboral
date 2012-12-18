<?php
/* @var $this ConocimientosController */
/* @var $model Conocimientos */

$this->breadcrumbs=array(
	'Conocimientoses'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'List Conocimientos', 'url'=>array('index')),
	array('label'=>'Create Conocimientos', 'url'=>array('create')),
	array('label'=>'View Conocimientos', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage Conocimientos', 'url'=>array('admin')),
);
?>

<h1>Update Conocimientos <?php echo $model->pk; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>