<?php
/* @var $this ConocimientosController */
/* @var $model Conocimientos */

$this->breadcrumbs=array(
	'Conocimientoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Conocimientos', 'url'=>array('index')),
	array('label'=>'Manage Conocimientos', 'url'=>array('admin')),
);
?>

<h1>Create Conocimientos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>