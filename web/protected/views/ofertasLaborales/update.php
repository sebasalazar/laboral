<?php
/* @var $this OfertasLaboralesController */
/* @var $model OfertasLaborales */

$this->breadcrumbs=array(
	'Ofertas Laborales'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista Ofertas Laborales', 'url'=>array('index')),
	array('label'=>'Crear Oferta Laboral', 'url'=>array('create')),
	array('label'=>'Ver Oferta Laboral', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Administrar Ofertas Laborales', 'url'=>array('admin')),
);
?>


<div class="contenidoPage">
    <h1>Actualizar Oferta Laboral: <?php echo $model->pk; ?></h1>
    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>