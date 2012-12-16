<?php
/* @var $this PracticasController */
/* @var $model Practicas */

$this->breadcrumbs=array(
	'Practicas'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista Practicas', 'url'=>array('index')),
	array('label'=>'Crear Practica', 'url'=>array('create')),
	array('label'=>'Ver Practica', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Administrar Practica', 'url'=>array('admin')),
);
?>

<h1>Actualizar Practica: <?php echo $model->pk; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>