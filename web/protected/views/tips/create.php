<?php
/* @var $this TipsController */
/* @var $model Tips */

$this->breadcrumbs=array(
	'Tips'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Tips', 'url'=>array('index')),
	array('label'=>'Administrar Tips', 'url'=>array('admin')),
);
?>
<div class="contenidoPage">
    <h1>Crear Tip</h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>