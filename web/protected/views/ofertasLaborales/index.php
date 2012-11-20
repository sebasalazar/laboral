<?php
/* @var $this OfertasLaboralesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ofertas Laborales',
);

$this->menu=array(
	array('label'=>'Create OfertasLaborales', 'url'=>array('create')),
	array('label'=>'Manage OfertasLaborales', 'url'=>array('admin')),
);
?>

<h1>Ofertas Laborales</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
