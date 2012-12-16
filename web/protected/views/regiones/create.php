<?php
/* @var $this RegionesController */
/* @var $model Regiones */

$this->breadcrumbs=array(
	'Regiones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Regiones', 'url'=>array('index')),
	array('label'=>'Manage Regiones', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Nueva Region</h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>