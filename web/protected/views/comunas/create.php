<?php
/* @var $this ComunasController */
/* @var $model Comunas */

$this->breadcrumbs=array(
	'Comunases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Comunas', 'url'=>array('index')),
	array('label'=>'Manage Comunas', 'url'=>array('admin')),
);
?>
<div class="contenidoPage">
    <h1>Nueva Comuna</h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>