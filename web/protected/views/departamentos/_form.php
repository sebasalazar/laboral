<?php
/* @var $this DepartamentosController */
/* @var $model Departamentos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'departamentos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'facultad_fk'); ?>
		<?php echo $form->textField($model,'facultad_fk'); ?>
		<?php echo $form->error($model,'facultad_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'departamento'); ?>
		<?php echo $form->textField($model,'departamento',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'departamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->