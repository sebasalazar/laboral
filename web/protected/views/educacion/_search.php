<?php
/* @var $this EducacionController */
/* @var $model Educacion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pk'); ?>
		<?php echo $form->textField($model,'pk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'curriculum_fk'); ?>
		<?php echo $form->textField($model,'curriculum_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_institucion'); ?>
		<?php echo $form->textField($model,'nombre_institucion',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'carrera'); ?>
		<?php echo $form->textField($model,'carrera',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inicio'); ?>
		<?php echo $form->textField($model,'inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fin'); ?>
		<?php echo $form->textField($model,'fin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->