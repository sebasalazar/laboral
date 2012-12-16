<?php
/* @var $this PostulacionesController */
/* @var $model Postulaciones */

$this->breadcrumbs=array(
	'Postulaciones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista Postulaciones', 'url'=>array('index')),
	array('label'=>'Administrar Postulaciones', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
<h1>Crear Nueva Postulacion: </h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>