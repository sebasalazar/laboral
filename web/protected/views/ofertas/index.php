<?php
/* @var $this OfertasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ofertases',
);

$this->menu=array(
	array('label'=>'Create Ofertas', 'url'=>array('create')),
	array('label'=>'Manage Ofertas', 'url'=>array('admin')),
);
?>

<h1>Ofertases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
