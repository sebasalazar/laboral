<?php
/* @var $this EducacionController */
/* @var $model Educacion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'educacion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pk'); ?>
		<?php echo $form->textField($model,'pk'); ?>
		<?php echo $form->error($model,'pk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'curriculum_fk'); ?>
		<?php echo $form->textField($model,'curriculum_fk'); ?>
		<?php echo $form->error($model,'curriculum_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_institucion'); ?>
		<?php echo $form->textField($model,'nombre_institucion',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nombre_institucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'carrera'); ?>
		<?php echo $form->textField($model,'carrera',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'carrera'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inicio'); ?>
		<?php echo $form->textField($model,'inicio'); ?>
		<?php echo $form->error($model,'inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fin'); ?>
		<?php echo $form->textField($model,'fin'); ?>
		<?php echo $form->error($model,'fin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->