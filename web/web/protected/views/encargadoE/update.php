<?php
/* @var $this EncargadoEController */
/* @var $model EncargadoE */

$this->breadcrumbs=array(
	'Encargado Es'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'List EncargadoE', 'url'=>array('index')),
	array('label'=>'Create EncargadoE', 'url'=>array('create')),
	array('label'=>'View EncargadoE', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage EncargadoE', 'url'=>array('admin')),
);
?>

<h1>Update EncargadoE <?php echo $model->pk; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>