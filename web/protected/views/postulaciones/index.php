<?php
/* @var $this PostulacionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Postulaciones',
);

$this->menu=array(
	array('label'=>'Crear Postulacion', 'url'=>array('create')),
	array('label'=>'Administrar Postulacion', 'url'=>array('admin')),
);
?>

<h1>Postulaciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
