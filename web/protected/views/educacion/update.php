<?php
/* @var $this EducacionController */
/* @var $model Educacion */

$this->breadcrumbs=array(
	'Educacions'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'List Educacion', 'url'=>array('index')),
	array('label'=>'Create Educacion', 'url'=>array('create')),
	array('label'=>'View Educacion', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage Educacion', 'url'=>array('admin')),
);
?>

<h1>Update Educacion <?php echo $model->pk; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>