<?php
/* @var $this EstadosCivilesController */
/* @var $model EstadosCiviles */

$this->breadcrumbs=array(
	'Estados Civiles'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'Lista  Estados Civiles', 'url'=>array('index')),
	array('label'=>'Crear Estado Civil', 'url'=>array('create')),
	array('label'=>'Actualizar Estado Civil', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Borrar Estado Civil', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Estados Civiles', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
<h1>Estado Civil: <?php echo $model->estado; ?></h1>
<br />
<?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
                'pk',
		'estado',
		'descripcion',
    ),
));

?>

</div>