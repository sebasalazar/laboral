<?php
/* @var $this DocentesController */
/* @var $model Docentes */

$this->breadcrumbs=array(
	'Docentes'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List Docentes', 'url'=>array('index')),
	array('label'=>'Create Docentes', 'url'=>array('create')),
	array('label'=>'Update Docentes', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete Docentes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Docentes', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Docente: <?php echo $model->nombres; ?></h1>
    <br />
    <?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
                    'pk',
                    'nombres',
                    'apellidos',
                    'rut',
                    'fecha_nacimiento',
                    'genero',
                    'direccion',
                    array(
                        'label'=>'Comuna',
                        'value'=>$model->comuna->nombre,
                    ),
                    array(
                        'label'=>'Estado Civil',
                        'value'=>$model->ecFk->estado,
                    ),
                    array(
                        'label'=>'Departamento',
                        'value'=>$model->departamentoFk->departamento,
                    ),
                    'telefono',
                    'celular',
                    'email',
            ),
    )); ?>
</div>
