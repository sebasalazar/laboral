<?php
/* @var $this PropietarioOfertaController */
/* @var $model PropietarioOferta */

$this->breadcrumbs=array(
	'Propietario Ofertas'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List PropietarioOferta', 'url'=>array('index')),
	array('label'=>'Create PropietarioOferta', 'url'=>array('create')),
	array('label'=>'Update PropietarioOferta', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete PropietarioOferta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PropietarioOferta', 'url'=>array('admin')),
);
?>

<h1>View PropietarioOferta #<?php echo $model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk',
		'oferta_laboral_fk',
		'rut_propietario',
	),
)); ?>
