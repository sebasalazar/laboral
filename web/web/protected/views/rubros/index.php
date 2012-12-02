<?php
/* @var $this RubrosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rubroses',
);

$this->menu=array(
	array('label'=>'Create Rubros', 'url'=>array('create')),
	array('label'=>'Manage Rubros', 'url'=>array('admin')),
);
?>

<h1>Rubroses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
