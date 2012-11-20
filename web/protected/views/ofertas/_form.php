<?php
/* @var $this OfertasController */
/* @var $model Ofertas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ofertas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'empresa_fk'); ?>
		<?php echo $form->textField($model,'empresa_fk'); ?>
		<?php echo $form->error($model,'empresa_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rubro_fk'); ?>
		<?php echo $form->textField($model,'rubro_fk'); ?>
		<?php echo $form->error($model,'rubro_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nivel_estudio_fk'); ?>
		<?php echo $form->textField($model,'nivel_estudio_fk'); ?>
		<?php echo $form->error($model,'nivel_estudio_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'renta'); ?>
		<?php echo $form->textField($model,'renta',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'renta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vacantes'); ?>
		<?php echo $form->textField($model,'vacantes'); ?>
		<?php echo $form->error($model,'vacantes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'plazo'); ?>
		<?php echo $form->textField($model,'plazo'); ?>
		<?php echo $form->error($model,'plazo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ubicacion'); ?>
		<?php echo $form->textField($model,'ubicacion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ubicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cargo'); ?>
		<?php echo $form->textField($model,'cargo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_publicacion'); ?>
		<?php echo $form->textField($model,'fecha_publicacion'); ?>
		<?php echo $form->error($model,'fecha_publicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'beneficios'); ?>
		<?php echo $form->textField($model,'beneficios',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'beneficios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nivel_estudios'); ?>
		<?php echo $form->textField($model,'nivel_estudios',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nivel_estudios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jornada_fk'); ?>
		<?php echo $form->textField($model,'jornada_fk'); ?>
		<?php echo $form->error($model,'jornada_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contrato_fk'); ?>
		<?php echo $form->textField($model,'contrato_fk'); ?>
		<?php echo $form->error($model,'contrato_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activo'); ?>
		<?php echo $form->textField($model,'activo'); ?>
		<?php echo $form->error($model,'activo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->