<?php
/* @var $this EmpresasController */
/* @var $model Empresas */

$this->breadcrumbs=array(
	'Empresases'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'Listar Empresas', 'url'=>array('index')),
	//array('label'=>'Crear Empresas', 'url'=>array('create')),
	//array('label'=>'Modificar Empresas', 'url'=>array('update', 'id'=>$model->pk)),
	//array('label'=>'Eliminar Empresas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'¿Está seguro que quiere eliminar esta empresa?')),
	//array('label'=>'Administrar Empresas', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Empresa: <?php echo $model->nombre; ?></h1>
    <br />
    <?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
                    'rut',
                    'nombre',
                    'direccion',
                    array(
                        'label'=>'Comunas',
                        'value'=>$model->comuna->nombre,
                    ),
                    'codigo_postal',
                    'telefono',
                    'email',
                    array(
                        'label'=>'Actividad',
                        'value'=>$model->actividad->rubro,
                    ),
                    'descripcion_negocio',
                    'web',
            ),
    )); ?>
</div>