<?php
/* @var $this CarrerasController */
/* @var $model Carreras */

$this->breadcrumbs=array(
	'Carrerases'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List Carreras', 'url'=>array('index')),
	array('label'=>'Create Carreras', 'url'=>array('create')),
	array('label'=>'Update Carreras', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete Carreras', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Carreras', 'url'=>array('admin')),
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