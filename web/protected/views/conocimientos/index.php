<?php
/* @var $this ConocimientosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Conocimientoses',
);

$this->menu=array(
	array('label'=>'Create Conocimientos', 'url'=>array('create')),
	array('label'=>'Manage Conocimientos', 'url'=>array('admin')),
);
?>

<h1>Conocimientoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
