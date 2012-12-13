<?php
/* @var $this CarrerasController */
/* @var $model Carreras */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'carreras-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_carrera'); ?>
		<?php echo $form->textField($model,'cod_carrera'); ?>
		<?php echo $form->error($model,'cod_carrera'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_carrera'); ?>
		<?php echo $form->textField($model,'nombre_carrera',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre_carrera'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'escuela_fk'); ?>
		<?php echo $form->textField($model,'escuela_fk'); ?>
		<?php echo $form->error($model,'escuela_fk'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->