<?php
/* @var $this FacultadesController */
/* @var $model Facultades */

$this->breadcrumbs=array(
	'Facultades'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista Facultades', 'url'=>array('index')),
	array('label'=>'Crear Facultad', 'url'=>array('create')),
	array('label'=>'Ver Facultad', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Administrar Facultad', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Actualizar Facultad <?php echo $model->facultad; ?></h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>