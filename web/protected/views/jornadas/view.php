<?php
/* @var $this JornadasController */
/* @var $model Jornadas */

$this->breadcrumbs=array(
	'Jornadases'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List Jornadas', 'url'=>array('index')),
	array('label'=>'Create Jornadas', 'url'=>array('create')),
	array('label'=>'Update Jornadas', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete Jornadas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Jornadas', 'url'=>array('admin')),
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