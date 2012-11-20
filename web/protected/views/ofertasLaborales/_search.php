<?php
/* @var $this OfertasLaboralesController */
/* @var $model OfertasLaborales */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pk'); ?>
		<?php echo $form->textField($model,'pk',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'empresa_fk'); ?>
		<?php echo $form->textField($model,'empresa_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rubro_fk'); ?>
		<?php echo $form->textField($model,'rubro_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nivel_estudio_fk'); ?>
		<?php echo $form->textField($model,'nivel_estudio_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'renta'); ?>
		<?php echo $form->textField($model,'renta',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vacantes'); ?>
		<?php echo $form->textField($model,'vacantes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'plazo'); ?>
		<?php echo $form->textField($model,'plazo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ubicacion'); ?>
		<?php echo $form->textField($model,'ubicacion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cargo'); ?>
		<?php echo $form->textField($model,'cargo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_publicacion'); ?>
		<?php echo $form->textField($model,'fecha_publicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'beneficios'); ?>
		<?php echo $form->textField($model,'beneficios',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nivel_estudios'); ?>
		<?php echo $form->textField($model,'nivel_estudios',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jornada_fk'); ?>
		<?php echo $form->textField($model,'jornada_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contrato_fk'); ?>
		<?php echo $form->textField($model,'contrato_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'activo'); ?>
		<?php echo $form->textField($model,'activo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->