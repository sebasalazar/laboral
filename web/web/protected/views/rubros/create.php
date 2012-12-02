<?php
/* @var $this RubrosController */
/* @var $model Rubros */

$this->breadcrumbs=array(
	'Rubroses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Rubros', 'url'=>array('index')),
	array('label'=>'Manage Rubros', 'url'=>array('admin')),
);
?>

<h1>Create Rubros</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>