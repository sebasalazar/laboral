<?php
/* @var $this PostulacionesPracticasController */
/* @var $model PostulacionesPracticas */

$this->breadcrumbs=array(
	'Postulaciones Practicases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PostulacionesPracticas', 'url'=>array('index')),
	array('label'=>'Manage PostulacionesPracticas', 'url'=>array('admin')),
);
?>

<h1>Create PostulacionesPracticas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>