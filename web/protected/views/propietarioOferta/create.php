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

<h1>Create PropietarioOferta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>