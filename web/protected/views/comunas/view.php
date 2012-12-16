<?php
/* @var $this ComunasController */
/* @var $model Comunas */

$this->breadcrumbs=array(
	'Comunases'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'Lista Comunas', 'url'=>array('index')),
	array('label'=>'Crear Comuna', 'url'=>array('create')),
	array('label'=>'Actualizar Comuna', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Borrar Comuna', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Comunas', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Comuna: <?php echo $model->nombre; ?></h1>
    <br />
    <?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
                    'pk',
                    array(
                        'label'=>'Provincia',
                        'value'=>$model->provinciaFk->nombre,
                    ),
                    'nombre',
            ),
    )); ?>
</div>
