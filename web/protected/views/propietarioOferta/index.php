<?php
/* @var $this PropietarioOfertaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Propietario Ofertas',
);

$this->menu=array(
	array('label'=>'Crear Propietario Oferta', 'url'=>array('create')),
	array('label'=>'Administrar Propietarios Ofertas', 'url'=>array('admin')),
);
?>

<h1>Propietario Ofertas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
