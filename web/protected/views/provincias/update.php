<?php
/* @var $this ProvinciasController */
/* @var $model Provincias */

$this->breadcrumbs=array(
	'Provinciases'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'List Provincias', 'url'=>array('index')),
	array('label'=>'Create Provincias', 'url'=>array('create')),
	array('label'=>'View Provincias', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage Provincias', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Actualizar Provincia: <?php echo $model->nombre; ?></h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>