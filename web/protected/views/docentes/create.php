<?php
/* @var $this DocentesController */
/* @var $model Docentes */

$this->breadcrumbs=array(
	'Docentes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista Docentes', 'url'=>array('index')),
	array('label'=>'Administrar Docentes', 'url'=>array('admin')),
);
?>
<div class="contenidoPage">
    <h1>Create Docentes</h1>
    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>