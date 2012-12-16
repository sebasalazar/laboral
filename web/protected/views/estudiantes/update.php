<?php
/* @var $this EstudiantesController */
/* @var $model Estudiantes */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'List Estudiantes', 'url'=>array('index')),
	array('label'=>'Create Estudiantes', 'url'=>array('create')),
	array('label'=>'View Estudiantes', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage Estudiantes', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Actualizar Estudiante: <?php echo $model->nombres; ?></h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>