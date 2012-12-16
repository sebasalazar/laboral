<?php
/* @var $this PropietarioOfertaController */
/* @var $model PropietarioOferta */

$this->breadcrumbs=array(
	'Propietario Ofertas'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista Propietarios Ofertas', 'url'=>array('index')),
	array('label'=>'Crear Propietario Oferta', 'url'=>array('create')),
	array('label'=>'Ver Propietario Oferta', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Administrar Propietarios Ofertas', 'url'=>array('admin')),
);
?>

<h1>Update PropietarioOferta <?php echo $model->pk; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>