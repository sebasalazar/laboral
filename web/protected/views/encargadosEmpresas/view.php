<?php
/* @var $this EncargadosEmpresasController */
/* @var $model EncargadosEmpresas */

$this->breadcrumbs=array(
	'Encargados Empresases'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List EncargadosEmpresas', 'url'=>array('index')),
	array('label'=>'Create EncargadosEmpresas', 'url'=>array('create')),
	array('label'=>'Update EncargadosEmpresas', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete EncargadosEmpresas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EncargadosEmpresas', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Encragado Empresa: <?php echo $model->nombre; ?></h1>
    <br />
    <?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
                    'pk',
                    'empresa_fk',
                    'rut_encargado',
                    'nombre',
                    'apellidos',
                    'genero',
                    'direccion',
                    'comuna_fk',
                    'email',
                    'telefono',
            ),
    )); ?>
</div>