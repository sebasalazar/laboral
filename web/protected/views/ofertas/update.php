<?php
/* @var $this OfertasController */
/* @var $model Ofertas */

$this->breadcrumbs=array(
	'Ofertases'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ofertas', 'url'=>array('index')),
	array('label'=>'Create Ofertas', 'url'=>array('create')),
	array('label'=>'View Ofertas', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage Ofertas', 'url'=>array('admin')),
);
?>

<h1>Update Ofertas <?php echo $model->pk; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>