<?php
/* @var $this EncargadosEmpresasController */
/* @var $model EncargadosEmpresas */

$this->breadcrumbs=array(
	'Encargados Empresases'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'Listar Encargados de Empresas', 'url'=>array('index')),
	//array('label'=>'Crear Encargado de Empresa', 'url'=>array('create')),
	array('label'=>'Modificiar Encargado de Empresa', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Eliminar Encargado de Empresa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'¿Está seguro que desea eliminar este encargado?')),
	//array('label'=>'Manage EncargadosEmpresas', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Encargado de Empresa: <?php echo $model->nombre; ?></h1>
    <br />
    <?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
                    //'pk',
                    array(
                        'label'=>'Empresa',
                        'value'=>$model->empresaFk->nombre,
                    ),
                    'rut_encargado',
                    'nombre',
                    'apellidos',
                    'genero',
                    'direccion',
                    array(
                        'label'=>'Comuna',
                        'value'=>$model->comunaFk->nombre,
                    ),
                    'email',
                    'telefono',
            ),
    )); ?>
</div>