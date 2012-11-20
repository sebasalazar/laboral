<?php
/* @var $this OfertasController */
/* @var $model Ofertas */

$this->breadcrumbs=array(
	'Ofertases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ofertas', 'url'=>array('index')),
	array('label'=>'Manage Ofertas', 'url'=>array('admin')),
);
?>

<h1>Create Ofertas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>