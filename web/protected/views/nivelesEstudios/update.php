<?php
/* @var $this NivelesEstudiosController */
/* @var $model NivelesEstudios */

$this->breadcrumbs=array(
	'Niveles Estudioses'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'List NivelesEstudios', 'url'=>array('index')),
	array('label'=>'Create NivelesEstudios', 'url'=>array('create')),
	array('label'=>'View NivelesEstudios', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage NivelesEstudios', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Actualizar Nivel Estudio <?php echo $model->estudios; ?></h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>