<?php
/* @var $this FormacioncomplementariaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Formacioncomplementarias',
);

$this->menu=array(
	array('label'=>'Create Formacioncomplementaria', 'url'=>array('create')),
	array('label'=>'Manage Formacioncomplementaria', 'url'=>array('admin')),
);
?>

<h1>Formacioncomplementarias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
