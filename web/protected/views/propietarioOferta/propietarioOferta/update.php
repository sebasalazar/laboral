<?php
/* @var $this PropietarioOfertaController */
/* @var $model PropietarioOferta */

$this->breadcrumbs=array(
	'Propietario Ofertas'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'List PropietarioOferta', 'url'=>array('index')),
	array('label'=>'Create PropietarioOferta', 'url'=>array('create')),
	array('label'=>'View PropietarioOferta', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage PropietarioOferta', 'url'=>array('admin')),
);
?>

<h1>Update PropietarioOferta <?php echo $model->pk; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>