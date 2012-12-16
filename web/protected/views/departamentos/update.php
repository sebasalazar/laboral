<?php
/* @var $this DepartamentosController */
/* @var $model Departamentos */

$this->breadcrumbs=array(
	'Departamentoses'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'List Departamentos', 'url'=>array('index')),
	array('label'=>'Create Departamentos', 'url'=>array('create')),
	array('label'=>'View Departamentos', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage Departamentos', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Departamento: <?php echo $model->departamento; ?></h1>
    
    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>