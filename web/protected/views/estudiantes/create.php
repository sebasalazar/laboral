<?php
/* @var $this EstudiantesController */
/* @var $model Estudiantes */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	'Create',
);
$this->menu=array(
	array('label'=>'Ver Estudiantes', 'url'=>array('admin')),
	array('label'=>'Crear Estudiantes', 'url'=>array('create')),
);
?>
    
</div>
<div class="contenidoPage">
    <h1>Nuevo Estudiante</h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>