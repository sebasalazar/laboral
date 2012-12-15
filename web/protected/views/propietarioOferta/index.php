<?php
/* @var $this PropietarioOfertaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Propietario Ofertas',
);

$this->menu=array(
	array('label'=>'Create PropietarioOferta', 'url'=>array('create')),
	array('label'=>'Manage PropietarioOferta', 'url'=>array('admin')),
);
?>

<h1>Propietario Ofertas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
