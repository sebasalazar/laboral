<?php
/* @var $this JornadasController */
/* @var $model Jornadas */

$this->breadcrumbs=array(
	'Jornadases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista Jornadas', 'url'=>array('index')),
	array('label'=>'Administrar Jornadas', 'url'=>array('admin')),
);
?>
<div class="contenidoPage">
    <h1>Nueva Jornada</h1>
    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>