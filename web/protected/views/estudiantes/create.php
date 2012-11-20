<?php
/* @var $this EstudiantesController */
/* @var $model Estudiantes */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Estudiantes', 'url'=>array('index')),
	array('label'=>'Manage Estudiantes', 'url'=>array('admin')),
);
?>

<h1>Create Estudiantes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>