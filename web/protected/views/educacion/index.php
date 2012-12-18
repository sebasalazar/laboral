<?php
/* @var $this EducacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Educacions',
);

$this->menu=array(
	array('label'=>'Create Educacion', 'url'=>array('create')),
	array('label'=>'Manage Educacion', 'url'=>array('admin')),
);
?>

<h1>Educacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
