<?php
/* @var $this ProvinciasController */
/* @var $model Provincias */

$this->breadcrumbs=array(
	'Provinciases'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Provincias', 'url'=>array('index')),
	array('label'=>'Crear Provincia', 'url'=>array('create')),
	array('label'=>'Ver Provincia', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Administrar Provincias', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Actualizar Provincia: <?php echo $model->nombre; ?></h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>