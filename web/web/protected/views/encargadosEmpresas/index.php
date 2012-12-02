<?php
/* @var $this EncargadosEmpresasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Encargados Empresases',
);

$this->menu=array(
	array('label'=>'Create EncargadosEmpresas', 'url'=>array('create')),
	array('label'=>'Manage EncargadosEmpresas', 'url'=>array('admin')),
);
?>

<h1>Encargados Empresases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
