<?php
/* @var $this FacultadesController */
/* @var $model Facultades */

$this->breadcrumbs=array(
	'Facultades'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Facultades', 'url'=>array('index')),
	array('label'=>'Manage Facultades', 'url'=>array('admin')),
);
?>

<h1>Create Facultades</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>