<?php
/* @var $this EstadosCivilesController */
/* @var $model EstadosCiviles */

$this->breadcrumbs=array(
	'Estados Civiles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista Estados Civiles', 'url'=>array('index')),
	array('label'=>'Administrar Estados Civiles', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Nuevo Estado Civil</h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>