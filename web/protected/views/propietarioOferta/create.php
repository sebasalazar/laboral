<?php
/* @var $this PropietarioOfertaController */
/* @var $model PropietarioOferta */

$this->breadcrumbs=array(
	'Propietario Ofertas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PropietarioOferta', 'url'=>array('index')),
	array('label'=>'Manage PropietarioOferta', 'url'=>array('admin')),
);
?>

<h1>Nuevo Propietario Oferta Laboral</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>