<?php
/* @var $this PostulacionesPracticasController */
/* @var $model PostulacionesPracticas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'postulaciones-practicas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_postulacion'); ?>
		<?php echo $form->textField($model,'fecha_postulacion'); ?>
		<?php echo $form->error($model,'fecha_postulacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'practica_fk'); ?>
		<?php echo $form->textField($model,'practica_fk'); ?>
		<?php echo $form->error($model,'practica_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estudiante_fk'); ?>
		<?php echo $form->textField($model,'estudiante_fk'); ?>
		<?php echo $form->error($model,'estudiante_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'motivo'); ?>
		<?php echo $form->textArea($model,'motivo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'motivo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->