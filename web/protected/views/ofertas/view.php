<?php
/* @var $this OfertasController */
/* @var $model Ofertas */

$this->breadcrumbs=array(
	'Ofertases'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List Ofertas', 'url'=>array('index')),
	array('label'=>'Create Ofertas', 'url'=>array('create')),
	array('label'=>'Update Ofertas', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete Ofertas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ofertas', 'url'=>array('admin')),
);
?>

<h1>View Ofertas #<?php echo $model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk',
		'empresa_fk',
		'rubro_fk',
		'nivel_estudio_fk',
		'renta',
		'vacantes',
		'plazo',
		'descripcion',
		'ubicacion',
		'cargo',
		'fecha_publicacion',
		'beneficios',
		'nivel_estudios',
		'jornada_fk',
		'contrato_fk',
		'activo',
	),
)); ?>
