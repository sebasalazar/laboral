<?php
/* @var $this CarrerasController */
/* @var $model Carreras */

$this->breadcrumbs=array(
	'Carrerases'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista Carreras', 'url'=>array('index')),
	array('label'=>'Crear Carrera', 'url'=>array('create')),
	array('label'=>'Ver Carrera', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Administrar Carreras', 'url'=>array('admin')),
);
?>


<div class="contenidoPage">
    <h1>Actualizar Carrera: <?php echo $model->nombre_carrera; ?></h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>