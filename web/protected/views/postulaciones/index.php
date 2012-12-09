<?php
/* @var $this PostulacionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Postulaciones',
);

$this->menu=array(
	array('label'=>'Create Postulaciones', 'url'=>array('create')),
	array('label'=>'Manage Postulaciones', 'url'=>array('admin')),
);
?>

<h1>Postulaciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
