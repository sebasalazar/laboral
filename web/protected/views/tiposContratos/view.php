<?php
/* @var $this TiposContratosController */
/* @var $model TiposContratos */

$this->breadcrumbs=array(
	'Tipos Contratoses'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'Lista de Contratos', 'url'=>array('index')),
	array('label'=>'Crear Tipo Contrato', 'url'=>array('create')),
	array('label'=>'Actualizar Tipo Contrato', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Borrar Tipo Contrato', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Tipos de Contratos', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Tipo Contrato: <?php echo $model->contrato; ?></h1>
    <br />
    <?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
		'pk',
		'contrato',
		'descripcion',
            ),
    )); ?>
</div>