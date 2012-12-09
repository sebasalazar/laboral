<?php
/* @var $this EvaluacionesPracticasController */
/* @var $model EvaluacionesPracticas */

$this->breadcrumbs=array(
	'Evaluaciones Practicases'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'List EvaluacionesPracticas', 'url'=>array('index')),
	array('label'=>'Create EvaluacionesPracticas', 'url'=>array('create')),
	array('label'=>'View EvaluacionesPracticas', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage EvaluacionesPracticas', 'url'=>array('admin')),
);
?>

<h1>Update EvaluacionesPracticas <?php echo $model->pk; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>