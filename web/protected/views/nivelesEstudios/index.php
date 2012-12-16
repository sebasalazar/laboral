<?php
/* @var $this NivelesEstudiosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Niveles Estudioses',
);

$this->menu=array(
	array('label'=>'Crear Nivel de Estudio', 'url'=>array('create')),
	array('label'=>'Administrar Niveles de Estudios', 'url'=>array('admin')),
);
?>

<h1>Niveles Estudioses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
