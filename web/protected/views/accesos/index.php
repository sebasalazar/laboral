<?php
/* @var $this AccesosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Accesoses',
);

$this->menu=array(
	array('label'=>'Crear Acceso', 'url'=>array('create')),
	array('label'=>'Administrar Accesos', 'url'=>array('admin')),
);
?>

<h1>Accesoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
