<?php
/* @var $this NivelesEstudiosController */
/* @var $model NivelesEstudios */

$this->breadcrumbs=array(
	'Niveles Estudioses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NivelesEstudios', 'url'=>array('index')),
	array('label'=>'Manage NivelesEstudios', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Nuevo Nivel de Estudio</h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>