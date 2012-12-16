<?php
/* @var $this RubrosController */
/* @var $model Rubros */

$this->breadcrumbs=array(
	'Rubroses'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Rubros', 'url'=>array('index')),
	array('label'=>'Crear Rubro', 'url'=>array('create')),
	array('label'=>'Ver Rubro', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Administrar Rubros', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Actualizar Rubro: <?php echo $model->rubro; ?></h1>
    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>