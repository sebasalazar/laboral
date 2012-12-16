<?php
/* @var $this ComunasController */
/* @var $model Comunas */

$this->breadcrumbs=array(
	'Comunases'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista Comunas', 'url'=>array('index')),
	array('label'=>'Crear Comuna', 'url'=>array('create')),
	array('label'=>'Ver Comuna', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Administrar Comunas', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Actualizar Comuna <?php echo $model->nombre; ?></h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>