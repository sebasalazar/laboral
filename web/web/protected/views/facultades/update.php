<?php
/* @var $this FacultadesController */
/* @var $model Facultades */

$this->breadcrumbs=array(
	'Facultades'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'List Facultades', 'url'=>array('index')),
	array('label'=>'Create Facultades', 'url'=>array('create')),
	array('label'=>'View Facultades', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage Facultades', 'url'=>array('admin')),
);
?>

<h1>Update Facultades <?php echo $model->pk; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>