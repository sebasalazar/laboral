<?php
/* @var $this EstudiantesController */
/* @var $model Estudiantes */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	$model->pk=>array('view3','id'=>$model->pk),
	'Update',
);

/*$this->menu=array(
	array('label'=>'List Estudiantes', 'url'=>array('index')),
	array('label'=>'Create Estudiantes', 'url'=>array('create')),
	array('label'=>'View Estudiantes', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Manage Estudiantes', 'url'=>array('admin')),
);*/
?>



<?php echo $this->renderPartial('_form3', array('model'=>$model,
                                                'modelCV'=>$modelCV,
                                                'modelConocimientos'=>$modelConocimientos,
                                                'modelExperiencias'=>$modelExperiencias,
                                                'modelFormacionComplementaria'=>$modelFormacionComplementaria,
                                                'modelEducacion'=>$modelEducacion,)); 
?>