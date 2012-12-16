<?php
/* @var $this RegionesController */
/* @var $model Regiones */

$this->breadcrumbs=array(
	'Regiones'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List Regiones', 'url'=>array('index')),
	array('label'=>'Create Regiones', 'url'=>array('create')),
	array('label'=>'Update Regiones', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete Regiones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Regiones', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
<h1>Region: <?php echo $model->nombre; ?></h1>
    <br />
    <?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
                    'pk',
                    'nombre',
                    'zona_corfo',
                    'codigo',
                    'numero',
            ),
    )); ?>
</div>