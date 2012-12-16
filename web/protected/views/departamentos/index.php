<?php
/* @var $this DepartamentosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Departamentoses',
);

$this->menu=array(
	array('label'=>'Crear Departamento', 'url'=>array('create')),
	array('label'=>'Administrar Departamentos', 'url'=>array('admin')),
);
?>

<h1>Departamentoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
