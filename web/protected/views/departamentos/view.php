<?php
/* @var $this DepartamentosController */
/* @var $model Departamentos */

$this->breadcrumbs=array(
	'Departamentoses'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'Lista de Departamentos', 'url'=>array('index')),
	array('label'=>'Crear Departamento', 'url'=>array('create')),
	array('label'=>'Actualizar Departamento', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Borrar Departamentos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Departamentos', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Departamento: <?php echo $model->departamento; ?></h1>
    <br />
    <?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
                    'pk',
                    array(
                        'label'=>'Facultad',
                        'value'=>$model->facultadFk->facultad,
                    ),
                    'departamento',
                    'descripcion',
            ),
    )); ?>
</div>
