<?php
/* @var $this RegionesController */
/* @var $model Regiones */

$this->breadcrumbs=array(
	'Regiones'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'List Regiones', 'url'=>array('index')),
	array('label'=>'Create Regiones', 'url'=>array('create')),
	array('label'=>'View Regiones', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage Regiones', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Actualizar Region: <?php echo $model->nombre; ?></h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>