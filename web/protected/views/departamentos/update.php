<?php
/* @var $this DepartamentosController */
/* @var $model Departamentos */

$this->breadcrumbs=array(
	'Departamentoses'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista Departamentos', 'url'=>array('index')),
	array('label'=>'Crear Departamento', 'url'=>array('create')),
	array('label'=>'Ver Departamento', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Administrar Departamento', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Departamento: <?php echo $model->departamento; ?></h1>
    
    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>