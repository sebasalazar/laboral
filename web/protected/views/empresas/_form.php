<?php
/* @var $this EmpresasController */
/* @var $model Empresas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empresas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rut'); ?>
		<?php echo $form->textField($model,'rut'); ?>
		<?php echo $form->error($model,'rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_represen_legal'); ?>
		<?php echo $form->textField($model,'nombre_represen_legal',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre_represen_legal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comuna_fk'); ?>
		<?php echo $form->textField($model,'comuna_fk'); ?>
		<?php echo $form->error($model,'comuna_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo_postal'); ?>
		<?php echo $form->textField($model,'codigo_postal'); ?>
		<?php echo $form->error($model,'codigo_postal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'actividad'); ?>
		<?php echo $form->textField($model,'actividad',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'actividad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion_negocio'); ?>
		<?php echo $form->textField($model,'descripcion_negocio',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'descripcion_negocio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'web'); ?>
		<?php echo $form->textField($model,'web',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'web'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->