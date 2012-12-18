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

<<<<<<< HEAD
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
=======
<?php echo $this->renderPartial('_form', array('model'=>$model,
                                                'modelCV'=>$modelCV,
                                                'modelConocimientos'=>$modelConocimientos,
                                                'modelExperiencias'=>$modelExperiencias,
                                                'modelFormacionComplementaria'=>$modelFormacionComplementaria,
                                                'modelEducacion'=>$modelEducacion,));?>
>>>>>>> 82f91b6a1b5250962adca44eb9a690b1660dfff3
