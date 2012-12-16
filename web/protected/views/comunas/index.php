<?php
/* @var $this ComunasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Comunases',
);

$this->menu=array(
	array('label'=>'Crear Comuna', 'url'=>array('create')),
	array('label'=>'Administrar Comunas', 'url'=>array('admin')),
);
?>

<h1>Comunases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
