<?php
/* @var $this OfertasLaboralesController */
/* @var $model OfertasLaborales */

$this->breadcrumbs=array(
	'Ofertas Laborales'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'List OfertasLaborales', 'url'=>array('index')),
	array('label'=>'Create OfertasLaborales', 'url'=>array('create')),
	array('label'=>'View OfertasLaborales', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage OfertasLaborales', 'url'=>array('admin')),
);
?>

<h1>Update OfertasLaborales <?php echo $model->pk; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>