<?php
/* @var $this CarrerasController */
/* @var $model Carreras */

$this->breadcrumbs=array(
	'Carrerases'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'Lista Carreras', 'url'=>array('index')),
	array('label'=>'Crear Carrera', 'url'=>array('create')),
	array('label'=>'Actualizar Carrera', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Borrar Carrera', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Carreras', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Carrera: <?php echo $model->nombre_carrera; ?></h1>
    <br />
    <?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
                    'pk',
                    'cod_carrera',
                    'nombre_carrera',
                    array(
                        'label'=>'Escuela',
                        'value'=>$model->escuelaFk->escuela,
                    ),
            ),
    )); ?>
</div>