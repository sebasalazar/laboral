<?php
/* @var $this FacultadesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Facultades',
);

$this->menu=array(
	array('label'=>'Create Facultades', 'url'=>array('create')),
	array('label'=>'Manage Facultades', 'url'=>array('admin')),
);
?>

<h1>Facultades</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
