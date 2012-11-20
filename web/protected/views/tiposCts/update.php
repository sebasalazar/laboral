<?php
/* @var $this TiposCtsController */
/* @var $model TiposCts */

$this->breadcrumbs=array(
	'Tipos Cts'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'List TiposCts', 'url'=>array('index')),
	array('label'=>'Create TiposCts', 'url'=>array('create')),
	array('label'=>'View TiposCts', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage TiposCts', 'url'=>array('admin')),
);
?>

<h1>Update TiposCts <?php echo $model->pk; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>