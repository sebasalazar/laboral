<?php
/* @var $this EstadosCivilesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estados Civiles',
);

$this->menu=array(
	array('label'=>'Crear Estado Civil', 'url'=>array('create')),
	array('label'=>'Administrar Estados Civiles', 'url'=>array('admin')),
);
?>

<h1>Estados Civiles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
