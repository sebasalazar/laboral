<?php
/* @var $this OfertasLaboralesController */
/* @var $model OfertasLaborales */

$this->breadcrumbs=array(
	'Ofertas Laborales'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OfertasLaborales', 'url'=>array('index')),
	array('label'=>'Manage OfertasLaborales', 'url'=>array('admin')),
);
?>

<h1>Create OfertasLaborales</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>