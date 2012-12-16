<?php
/* @var $this EstudiantesController */
/* @var $model Estudiantes */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	$model->pk=>array('perfil','id'=>$model->pk),
	'Update',
);

$this->menu=array(

	array('label'=>'Ver Estudiantes', 'url'=>array('admin')),
	array('label'=>'Crear Estudiantes', 'url'=>array('create')),
);
?>

<h1>Modificando mi perfil <?php //echo $model->pk; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>