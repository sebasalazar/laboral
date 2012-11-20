<?php
/* @var $this NivelesEsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Niveles Es',
);

$this->menu=array(
	array('label'=>'Create NivelesEs', 'url'=>array('create')),
	array('label'=>'Manage NivelesEs', 'url'=>array('admin')),
);
?>

<h1>Niveles Es</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
