<?php
/* @var $this CarrerasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Carrerases',
);

$this->menu=array(
	array('label'=>'Crear Carrera', 'url'=>array('create')),
	array('label'=>'Administrar Carreras', 'url'=>array('admin')),
);
?>

<h1>Carrerases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
