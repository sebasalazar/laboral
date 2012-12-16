<?php
/* @var $this ProvinciasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Provinciases',
);

$this->menu=array(
	array('label'=>'Crear Provincia', 'url'=>array('create')),
	array('label'=>'Administrar Provincias', 'url'=>array('admin')),
);
?>

<h1>Provinciases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
