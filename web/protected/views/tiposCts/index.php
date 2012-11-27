<?php
/* @var $this TiposCtsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipos Cts',
);

$this->menu=array(
	array('label'=>'Create TiposCts', 'url'=>array('create')),
	array('label'=>'Manage TiposCts', 'url'=>array('admin')),
);
?>

<h1>Tipos Cts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
