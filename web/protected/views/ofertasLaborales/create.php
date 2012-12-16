<?php
/* @var $this OfertasLaboralesController */
/* @var $model OfertasLaborales */

$this->breadcrumbs=array(
	'Ofertas Laborales'=>array('index'),
	'Create',
);

$this->menu=array(
        array('label'=>'Ofertas Laborales', 'url'=>array('ofertasLaborales/index')),
	array('label'=>'Publicar Oferta Laboral', 'url'=>array('ofertasLaborales/create'), 'active'=>true),
);


?>



<div class="contenidoPage">
    <h1>Publicar un Oferta Laboral</h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>