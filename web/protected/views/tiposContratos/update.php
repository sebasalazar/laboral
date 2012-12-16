<?php
/* @var $this TiposContratosController */
/* @var $model TiposContratos */

$this->breadcrumbs=array(
	'Tipos Contratoses'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Tipos Contratos', 'url'=>array('index')),
	array('label'=>'Crear Tipo Contrato', 'url'=>array('create')),
	array('label'=>'Ver Tipo Contrato', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Administrar Tipos de Contratos', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Actualizar Tipo de Contrato: <?php echo $model->contrato; ?></h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>