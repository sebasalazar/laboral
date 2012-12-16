<?php
/* @var $this JornadasController */
/* @var $model Jornadas */

$this->breadcrumbs=array(
	'Jornadases'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'Lista Jornadas', 'url'=>array('index')),
	array('label'=>'Crear Jornada', 'url'=>array('create')),
	array('label'=>'Actualizar Jornada', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Borrar Jornada', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Jornada', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Jornada: <?php echo $model->jornada; ?></h1>
    <br />
    <?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
                    'pk',
                    'jornada',
                    'descripcion',
            ),
    )); ?>
</div>