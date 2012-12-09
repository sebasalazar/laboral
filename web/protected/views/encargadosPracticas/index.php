<?php
/* @var $this EncargadosPracticasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Encargados Practicases',
);

$this->menu=array(
	array('label'=>'Create EncargadosPracticas', 'url'=>array('create')),
	array('label'=>'Manage EncargadosPracticas', 'url'=>array('admin')),
);
?>

<h1>Encargados Practicases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
