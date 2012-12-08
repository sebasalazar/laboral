<?php
/* @var $this EncargadosPracticasController */
/* @var $model EncargadosPracticas */

$this->breadcrumbs=array(
	'Encargados Practicases'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'List EncargadosPracticas', 'url'=>array('index')),
	array('label'=>'Create EncargadosPracticas', 'url'=>array('create')),
	array('label'=>'View EncargadosPracticas', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage EncargadosPracticas', 'url'=>array('admin')),
);
?>

<h1>Update EncargadosPracticas <?php echo $model->pk; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>