<?php
/* @var $this DepartamentosController */
/* @var $model Departamentos */

$this->breadcrumbs=array(
	'Departamentoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Departamentos', 'url'=>array('index')),
	array('label'=>'Manage Departamentos', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Create Departamentos</h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>