<?php
/* @var $this EstadosCivilesController */
/* @var $model EstadosCiviles */

$this->breadcrumbs=array(
	'Estados Civiles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EstadosCiviles', 'url'=>array('index')),
	array('label'=>'Manage EstadosCiviles', 'url'=>array('admin')),
);
?>

<h1>Create EstadosCiviles</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>