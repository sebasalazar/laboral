<?php
/* @var $this RubrosController */
/* @var $model Rubros */

$this->breadcrumbs=array(
	'Rubroses'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'Lista de Rubros', 'url'=>array('index')),
	array('label'=>'Crear Rubro', 'url'=>array('create')),
	array('label'=>'Actualizar Rubro', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Borrar Rubro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Rubros', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Rubro: <?php echo $model->rubro; ?></h1>
    <br />
    <?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
                    'pk',
                    'rubro',
                    'descripcion',
            ),
    )); ?>
</div>