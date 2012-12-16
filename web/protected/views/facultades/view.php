<?php
/* @var $this FacultadesController */
/* @var $model Facultades */

$this->breadcrumbs=array(
	'Facultades'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'Lista Facultades', 'url'=>array('index')),
	array('label'=>'Crear Facultad', 'url'=>array('create')),
	array('label'=>'Actualizar Facultad', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Borrar Facultad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Facultades', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Facultad: <?php echo $model->facultad; ?></h1>
    <br />
    <?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
                    'pk',
                    'facultad',
                    'descripcion',
            ),
    )); ?>
</div>