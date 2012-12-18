<?php
/* @var $this CurriculumsController */
/* @var $model Curriculums */

$this->breadcrumbs=array(
	'Curriculums'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'List Curriculums', 'url'=>array('index')),
	array('label'=>'Create Curriculums', 'url'=>array('create')),
	array('label'=>'View Curriculums', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage Curriculums', 'url'=>array('admin')),
);
?>

<h1>Update Curriculums <?php echo $model->pk; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>