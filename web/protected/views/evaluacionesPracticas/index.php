<?php
/* @var $this EvaluacionesPracticasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Evaluaciones Practicases',
);

$this->menu=array(
	array('label'=>'Create EvaluacionesPracticas', 'url'=>array('create')),
	array('label'=>'Manage EvaluacionesPracticas', 'url'=>array('admin')),
);
?>

<h1>Evaluaciones Practicases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
