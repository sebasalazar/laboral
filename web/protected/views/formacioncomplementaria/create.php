<?php
/* @var $this FormacioncomplementariaController */
/* @var $model Formacioncomplementaria */

$this->breadcrumbs=array(
	'Formacioncomplementarias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Formacioncomplementaria', 'url'=>array('index')),
	array('label'=>'Manage Formacioncomplementaria', 'url'=>array('admin')),
);
?>

<h1>Create Formacioncomplementaria</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>