<?php
/* @var $this CurriculumsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Curriculums',
);

$this->menu=array(
	array('label'=>'Create Curriculums', 'url'=>array('create')),
	array('label'=>'Manage Curriculums', 'url'=>array('admin')),
);
?>

<h1>Curriculums</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
