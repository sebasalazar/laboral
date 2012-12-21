<?php
/* @var $this EstudiantesController */
/* @var $model Estudiantes */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	$model->pk=>array('perfil','id'=>$model->pk),
	'Update',
);

/*$this->menu=array(
	array('label'=>'List Estudiantes', 'url'=>array('index')),
	array('label'=>'Create Estudiantes', 'url'=>array('create')),
	array('label'=>'View Estudiantes', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage Estudiantes', 'url'=>array('admin')),
);*/
?>

<h1>Modificando mi perfil <?php //echo $model->pk; ?></h1>

<?php echo $this->renderPartial('_formperfilcv', array('model'=>$model)); ?>