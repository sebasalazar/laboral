<?php
/* @var $this JornadasController */
/* @var $model Jornadas */

$this->breadcrumbs=array(
	'Jornadases'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'List Jornadas', 'url'=>array('index')),
	array('label'=>'Create Jornadas', 'url'=>array('create')),
	array('label'=>'View Jornadas', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage Jornadas', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Actualizar Jornada: <?php echo $model->jornada; ?></h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>