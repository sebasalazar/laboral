<?php
/* @var $this ProvinciasController */
/* @var $model Provincias */

$this->breadcrumbs=array(
	'Provinciases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Provincias', 'url'=>array('index')),
	array('label'=>'Manage Provincias', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Nueva Provincia</h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>