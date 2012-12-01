<?php
/* @var $this PracticasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Practicases',
);

$this->menu=array(
	array('label'=>'Create Practicas', 'url'=>array('create')),
	array('label'=>'Manage Practicas', 'url'=>array('admin')),
);
?>

<h1>Practicases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
