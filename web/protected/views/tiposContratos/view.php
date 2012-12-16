<?php
/* @var $this TiposContratosController */
/* @var $model TiposContratos */

$this->breadcrumbs=array(
	'Tipos Contratoses'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List TiposContratos', 'url'=>array('index')),
	array('label'=>'Create TiposContratos', 'url'=>array('create')),
	array('label'=>'Update TiposContratos', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete TiposContratos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TiposContratos', 'url'=>array('admin')),
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