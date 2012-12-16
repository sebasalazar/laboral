<?php
/* @var $this NivelesEstudiosController */
/* @var $model NivelesEstudios */

$this->breadcrumbs=array(
	'Niveles Estudioses'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'Lista Niveles de Estudios', 'url'=>array('index')),
	array('label'=>'Crear Nivel de Estudio', 'url'=>array('create')),
	array('label'=>'Actualizar Nivel de Estudio', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Borrar Nivel de Estudio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Niveles de Estudios', 'url'=>array('admin')),
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