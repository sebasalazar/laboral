<?php
/* @var $this PostulacionesPracticasController */
/* @var $model PostulacionesPracticas */

$this->breadcrumbs=array(
	'Postulaciones Practicases'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'List PostulacionesPracticas', 'url'=>array('index')),
	array('label'=>'Create PostulacionesPracticas', 'url'=>array('create')),
	array('label'=>'View PostulacionesPracticas', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage PostulacionesPracticas', 'url'=>array('admin')),
);
?>

<h1>Update PostulacionesPracticas <?php echo $model->pk; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>