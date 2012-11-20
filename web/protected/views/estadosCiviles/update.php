<?php
/* @var $this EstadosCivilesController */
/* @var $model EstadosCiviles */

$this->breadcrumbs=array(
	'Estados Civiles'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'List EstadosCiviles', 'url'=>array('index')),
	array('label'=>'Create EstadosCiviles', 'url'=>array('create')),
	array('label'=>'View EstadosCiviles', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage EstadosCiviles', 'url'=>array('admin')),
);
?>

<h1>Update EstadosCiviles <?php echo $model->pk; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>