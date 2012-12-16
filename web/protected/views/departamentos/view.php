<?php
/* @var $this DepartamentosController */
/* @var $model Departamentos */

$this->breadcrumbs=array(
	'Departamentoses'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List Departamentos', 'url'=>array('index')),
	array('label'=>'Create Departamentos', 'url'=>array('create')),
	array('label'=>'Update Departamentos', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete Departamentos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Departamentos', 'url'=>array('admin')),
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
