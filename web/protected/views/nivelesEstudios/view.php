<?php
/* @var $this NivelesEstudiosController */
/* @var $model NivelesEstudios */

$this->breadcrumbs=array(
	'Niveles Estudioses'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List NivelesEstudios', 'url'=>array('index')),
	array('label'=>'Create NivelesEstudios', 'url'=>array('create')),
	array('label'=>'Update NivelesEstudios', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete NivelesEstudios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NivelesEstudios', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Nivele de Estudios: <?php echo $model->estudios; ?></h1>
    <br />
    <?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
                    'pk',
                    'estudios',
                    'descripcion',
            ),
    )); ?>
</div>