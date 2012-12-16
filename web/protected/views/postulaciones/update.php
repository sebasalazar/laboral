<?php
/* @var $this PostulacionesController */
/* @var $model Postulaciones */

$this->breadcrumbs=array(
	'Postulaciones'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'List Postulaciones', 'url'=>array('index')),
	array('label'=>'Create Postulaciones', 'url'=>array('create')),
	array('label'=>'View Postulaciones', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage Postulaciones', 'url'=>array('admin')),
);
?>

<h1>Actualizar Postulacion: <?php echo $model->pk; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>