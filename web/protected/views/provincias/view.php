<?php
/* @var $this ProvinciasController */
/* @var $model Provincias */

$this->breadcrumbs=array(
	'Provinciases'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'Lista de Provincias', 'url'=>array('index')),
	array('label'=>'Crear Provincia', 'url'=>array('create')),
	array('label'=>'Actualizar Provincia', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Borrar Provincia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Provincias', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Provincia: <?php echo $model->nombre; ?></h1>
    <br />
    <?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
                    'pk',
                    array(
                        'label'=>'Region',
                        'value'=>$model->regionFk->nombre,
                    ),
                    'nombre',
            ),
    )); ?>
</div>