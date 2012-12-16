<?php
/* @var $this PropietarioOfertaController */
/* @var $model PropietarioOferta */

$this->breadcrumbs=array(
	'Propietario Ofertas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista Propietarios Ofertas', 'url'=>array('index')),
	array('label'=>'Administrar Propietarios Ofertas', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
<h1>Nuevo Propietario Oferta Laboral</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>