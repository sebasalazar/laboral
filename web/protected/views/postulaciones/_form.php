<?php
/* @var $this PostulacionesController */
/* @var $model Postulaciones */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'postulaciones-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'oferta_laboral_fk'); ?>
		<?php echo $form->textField($model,'oferta_laboral_fk'); ?>
		<?php echo $form->error($model,'oferta_laboral_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estudiante_fk'); ?>
		<?php echo $form->textField($model,'estudiante_fk'); ?>
		<?php echo $form->error($model,'estudiante_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->