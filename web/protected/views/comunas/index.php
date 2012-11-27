<?php
/* @var $this ComunasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Comunases',
);

$this->menu=array(
	array('label'=>'Create Comunas', 'url'=>array('create')),
	array('label'=>'Manage Comunas', 'url'=>array('admin')),
);
?>

<h1>Comunases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
