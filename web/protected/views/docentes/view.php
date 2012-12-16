<?php
/* @var $this DocentesController */
/* @var $model Docentes */

$this->breadcrumbs=array(
	'Docentes'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'Lista Docentes', 'url'=>array('index')),
	array('label'=>'Crear Docente', 'url'=>array('create')),
	array('label'=>'Actualizar Docentes', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Borrar Docentes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Docentes', 'url'=>array('admin')),
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
