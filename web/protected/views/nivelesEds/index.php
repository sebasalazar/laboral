<?php
/* @var $this NivelesEdsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Niveles Eds',
);

$this->menu=array(
	array('label'=>'Create NivelesEds', 'url'=>array('create')),
	array('label'=>'Manage NivelesEds', 'url'=>array('admin')),
);
?>

<h1>Niveles Eds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
