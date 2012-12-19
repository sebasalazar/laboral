<?php
/* @var $this EncargadosPracticasController */
/* @var $model EncargadosPracticas */

$this->breadcrumbs=array(
	'Encargados Practicases'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'Listar Encargados de Practicas', 'url'=>array('index')),
	//array('label'=>'Create EncargadosPracticas', 'url'=>array('create')),
	array('label'=>'Modificar Encargado de Practica', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Eliminar Encargado de Practica', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'¿Está seguro que quiere eliminar este encargado?')),
	//array('label'=>'Manage EncargadosPracticas', 'url'=>array('admin')),
);
?>
<div class="contenidoPage">
<h1>Encargado de Practica: <?php echo $model->nombre_encargado; ?></h1>
<br />
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'pk',
		array(
                    'label'=>'Rut',
                    'value'=>Yii::app()->user->getRut($model->rut_epracti),
                ),
		'nombre_encargado',
		'apellido_encargado',
		array(
                    'label'=>'Empresa',
                    'value'=>$model->empresaFk->nombre,
                ),
		array(
                        'label'=>'Area de practica',
                        'value'=>$model->actividad->rubro,
                    ),
	),
)); ?>
</div>