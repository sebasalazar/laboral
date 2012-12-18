<?php
/* @var $this CurriculumsController */
/* @var $model Curriculums */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'curriculums-form',
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
		<?php echo $form->labelEx($model,'estudiante_fk'); ?>
		<?php echo $form->textField($model,'estudiante_fk'); ?>
		<?php echo $form->error($model,'estudiante_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'presentacion'); ?>
		<?php echo $form->textField($model,'presentacion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'presentacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->