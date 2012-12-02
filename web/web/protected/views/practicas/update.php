<?php
/* @var $this PracticasController */
/* @var $model Practicas */

$this->breadcrumbs=array(
	'Practicases'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'List Practicas', 'url'=>array('index')),
	array('label'=>'Create Practicas', 'url'=>array('create')),
	array('label'=>'View Practicas', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage Practicas', 'url'=>array('admin')),
);
?>

<h1>Update Practicas <?php echo $model->pk; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>