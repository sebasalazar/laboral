<?php
/* @var $this EstadosCivilesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estados Civiles',
);

$this->menu=array(
	array('label'=>'Create EstadosCiviles', 'url'=>array('create')),
	array('label'=>'Manage EstadosCiviles', 'url'=>array('admin')),
);
?>

<h1>Estados Civiles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
