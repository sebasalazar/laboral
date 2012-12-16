<?php
/* @var $this RubrosController */
/* @var $model Rubros */

$this->breadcrumbs=array(
	'Rubroses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Rubros', 'url'=>array('index')),
	array('label'=>'Manage Rubros', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Nuevo Rubro</h1>
    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>