<?php
/* @var $this EncargadoEsController */
/* @var $model EncargadoEs */

$this->breadcrumbs=array(
	'Encargado Es'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'List EncargadoEs', 'url'=>array('index')),
	array('label'=>'Create EncargadoEs', 'url'=>array('create')),
	array('label'=>'View EncargadoEs', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage EncargadoEs', 'url'=>array('admin')),
);
?>

<h1>Update EncargadoEs <?php echo $model->pk; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>