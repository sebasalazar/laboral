<?php
/* @var $this DocentesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Docentes',
);

$this->menu=array(
	array('label'=>'Crear Docente', 'url'=>array('create')),
	array('label'=>'Administrar Docente', 'url'=>array('admin')),
);
?>

<h1>Docentes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
