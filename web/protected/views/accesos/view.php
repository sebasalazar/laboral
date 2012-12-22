<?php
/* @var $this AccesosController */
/* @var $model Accesos */

$this->breadcrumbs=array(
	'Accesoses'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'Lista de Accesos', 'url'=>array('index')),
	array('label'=>'Crear Acceso', 'url'=>array('create')),
	array('label'=>'Actualizar Acceso', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Borrar Acceso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Accesos', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Acceso: <?php echo '#'.$model->pk.' de '.Yii::app()->user->getRut($model->rut); ?></h1>
    <br />
    <?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
                   'pk',
                    array(
                        'label'=>'Rut',
                        'name'=>'rut',
                        'value'=>Yii::app()->user->getRut($model->rut),
                    ),
                    'fecha',
                    'ip',
            ),
    )); ?>
</div>