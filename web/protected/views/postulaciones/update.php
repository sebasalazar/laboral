<?php
/* @var $this PostulacionesController */
/* @var $model Postulaciones */

$this->breadcrumbs=array(
	'Postulaciones'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista Postulaciones', 'url'=>array('index')),
	array('label'=>'Crear Postulacion', 'url'=>array('create')),
	array('label'=>'Ver Postulacion', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Administrar Postulacion', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
<h1>Actualizar Postulacion: <?php echo $model->pk; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>