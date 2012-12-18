<?php
/* @var $this PostulacionesPracticasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Postulaciones Practicases',
);

$this->menu=array(
	//array('label'=>'Create PostulacionesPracticas', 'url'=>array('create')),
	//array('label'=>'Manage PostulacionesPracticas', 'url'=>array('admin')),
);
?>

<h1>Postulaciones a Practicas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
