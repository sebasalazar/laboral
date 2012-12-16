<?php
/* @var $this CarrerasController */
/* @var $model Carreras */

$this->breadcrumbs=array(
	'Carrerases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Carreras', 'url'=>array('index')),
	array('label'=>'Manage Carreras', 'url'=>array('admin')),
);
?>


<div class="contenidoPage">
    <h1>Nueva Carrera</h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>