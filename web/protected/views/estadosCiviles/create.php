<?php
/* @var $this EstadosCivilesController */
/* @var $model EstadosCiviles */

$this->breadcrumbs=array(
	'Estados Civiles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EstadosCiviles', 'url'=>array('index')),
	array('label'=>'Manage EstadosCiviles', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Nuevo Estado Civil</h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>