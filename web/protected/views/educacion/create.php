<?php
/* @var $this EducacionController */
/* @var $model Educacion */

$this->breadcrumbs=array(
	'Educacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Educacion', 'url'=>array('index')),
	array('label'=>'Manage Educacion', 'url'=>array('admin')),
);
?>

<h1>Create Educacion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>