<?php
/* @var $this OfertasLaboralesController */
/* @var $model OfertasLaborales */

$this->breadcrumbs=array(
	'Ofertas Laborales'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List OfertasLaborales', 'url'=>array('index')),
	array('label'=>'Create OfertasLaborales', 'url'=>array('create')),
	array('label'=>'Update OfertasLaborales', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete OfertasLaborales', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OfertasLaborales', 'url'=>array('admin')),
);
?>

<h1>View OfertasLaborales #<?php echo $model->pk; ?></h1>

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
