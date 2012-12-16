<?php
/* @var $this TiposContratosController */
/* @var $model TiposContratos */

$this->breadcrumbs=array(
	'Tipos Contratoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TiposContratos', 'url'=>array('index')),
	array('label'=>'Manage TiposContratos', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Nuevo Tipo de Contrato</h1>
    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>