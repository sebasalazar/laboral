<?php
/* @var $this FormacioncomplementariaController */
/* @var $model Formacioncomplementaria */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'formacioncomplementaria-form',
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
		<?php echo $form->labelEx($model,'nombre_formacion'); ?>
		<?php echo $form->textField($model,'nombre_formacion',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nombre_formacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'institucion'); ?>
		<?php echo $form->textField($model,'institucion',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'institucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anio_formacion_complementaria'); ?>
		<?php echo $form->textField($model,'anio_formacion_complementaria'); ?>
		<?php echo $form->error($model,'anio_formacion_complementaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'curriculum_fk'); ?>
		<?php echo $form->textField($model,'curriculum_fk'); ?>
		<?php echo $form->error($model,'curriculum_fk'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->