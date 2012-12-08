<?php
/* @var $this EvaluacionesPracticasController */
/* @var $model EvaluacionesPracticas */
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
		<?php echo $form->label($model,'estudiant_fk'); ?>
		<?php echo $form->textField($model,'estudiant_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'encar_practicas_fk'); ?>
		<?php echo $form->textField($model,'encar_practicas_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cargo_asignado'); ?>
		<?php echo $form->textField($model,'cargo_asignado',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conocimientos_demostrados'); ?>
		<?php echo $form->textField($model,'conocimientos_demostrados'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eficacia'); ?>
		<?php echo $form->textField($model,'eficacia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grado_cumplimiento'); ?>
		<?php echo $form->textField($model,'grado_cumplimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'puntualidad_respeto'); ?>
		<?php echo $form->textField($model,'puntualidad_respeto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'integracion_adaptacion'); ?>
		<?php echo $form->textField($model,'integracion_adaptacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'responsabilidad_superacion'); ?>
		<?php echo $form->textField($model,'responsabilidad_superacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'capacidades_personales'); ?>
		<?php echo $form->textField($model,'capacidades_personales'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iniciativa_creativi_improvi'); ?>
		<?php echo $form->textField($model,'iniciativa_creativi_improvi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->