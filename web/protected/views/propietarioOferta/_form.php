<?php
/* @var $this PropietarioOfertaController */
/* @var $model PropietarioOferta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'propietario-oferta-form',
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
		<?php echo $form->labelEx($model,'rut'); ?>
		<?php echo $form->textField($model,'rut'); ?>
		<?php echo $form->error($model,'rut'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->