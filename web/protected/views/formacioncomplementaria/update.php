<?php
/* @var $this FormacioncomplementariaController */
/* @var $model Formacioncomplementaria */

$this->breadcrumbs=array(
	'Formacioncomplementarias'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'List Formacioncomplementaria', 'url'=>array('index')),
	array('label'=>'Create Formacioncomplementaria', 'url'=>array('create')),
	array('label'=>'View Formacioncomplementaria', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage Formacioncomplementaria', 'url'=>array('admin')),
);
?>

<h1>Update Formacioncomplementaria <?php echo $model->pk; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>