<?php
/* @var $this CurriculumsController */
/* @var $model Curriculums */

$this->breadcrumbs=array(
	'Curriculums'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Curriculums', 'url'=>array('index')),
	array('label'=>'Manage Curriculums', 'url'=>array('admin')),
);
?>

<h1>Create Curriculums</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,
                                                'modelCV'=>$modelCV,
                                                'modelConocimientos'=>$modelConocimientos,
                                                'modelExperiencias'=>$modelExperiencias,
                                                'modelFormacionComplementaria'=>$modelFormacionComplementaria,
                                                'modelEducacion'=>$modelEducacion,));?>