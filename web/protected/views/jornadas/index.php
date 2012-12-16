<?php
/* @var $this JornadasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jornadases',
);

$this->menu=array(
	array('label'=>'Crear Jornada', 'url'=>array('create')),
	array('label'=>'Administrar Jornadas', 'url'=>array('admin')),
);
?>

<h1>Jornadases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
