<?php
/* @var $this CurriculumsController */
/* @var $model Curriculums */

$this->breadcrumbs=array(
	'Curriculums'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List Curriculums', 'url'=>array('index')),
	array('label'=>'Create Curriculums', 'url'=>array('create')),
	array('label'=>'Update Curriculums', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete Curriculums', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Curriculums', 'url'=>array('admin')),
);
?>

<h1>View Curriculums #<?php echo $model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk',
		'estudiante_fk',
		'presentacion',
	),
)); ?>
