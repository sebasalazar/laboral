<?php
/* @var $this EncargadoEController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Encargado Es',
);

$this->menu=array(
	array('label'=>'Create EncargadoE', 'url'=>array('create')),
	array('label'=>'Manage EncargadoE', 'url'=>array('admin')),
);
?>

<h1>Encargado Es</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
