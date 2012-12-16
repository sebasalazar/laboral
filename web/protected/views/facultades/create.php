<?php
/* @var $this FacultadesController */
/* @var $model Facultades */

$this->breadcrumbs=array(
	'Facultades'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista Facultades', 'url'=>array('index')),
	array('label'=>'Administrar Facultad', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Create Facultades</h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>