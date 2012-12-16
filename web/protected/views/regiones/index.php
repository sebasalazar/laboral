<?php
/* @var $this RegionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Regiones',
);

$this->menu=array(
	array('label'=>'Crear Region', 'url'=>array('create')),
	array('label'=>'Administrar Regiones', 'url'=>array('admin')),
);
?>

<h1>Regiones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
