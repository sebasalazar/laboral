<?php
/* @var $this TipsController */
/* @var $model Tips */

$this->breadcrumbs=array(
	'Tips'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Tips', 'url'=>array('index')),
	array('label'=>'Crear Tip', 'url'=>array('create')),
	array('label'=>'Ver Tip', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Administrar Tips', 'url'=>array('admin')),
);
?>
<div class="contenidoPage">
    <h1>Actualizar Tip: <?php echo $model->titulo; ?></h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>