<?php
/* @var $this TiposCtsController */
/* @var $model TiposCts */

$this->breadcrumbs=array(
	'Tipos Cts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TiposCts', 'url'=>array('index')),
	array('label'=>'Manage TiposCts', 'url'=>array('admin')),
);
?>

<h1>Create TiposCts</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>