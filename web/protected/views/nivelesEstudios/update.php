<?php
/* @var $this NivelesEstudiosController */
/* @var $model NivelesEstudios */

$this->breadcrumbs=array(
	'Niveles Estudioses'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista Niveles de Estudios', 'url'=>array('index')),
	array('label'=>'Crear Nivel de Estudio', 'url'=>array('create')),
	array('label'=>'Ver Nivel de Estudio', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Administrar Niveles de Estudios', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Actualizar Nivel Estudio <?php echo $model->estudios; ?></h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>