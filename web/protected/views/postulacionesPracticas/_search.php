<?php
/* @var $this PostulacionesPracticasController */
/* @var $model PostulacionesPracticas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pk'); ?>
		<?php echo $form->textField($model,'pk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_postulacion'); ?>
		<?php echo $form->textField($model,'fecha_postulacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'practica_fk'); ?>
		<?php echo $form->textField($model,'practica_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estudiante_fk'); ?>
		<?php echo $form->textField($model,'estudiante_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'motivo'); ?>
		<?php echo $form->textArea($model,'motivo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->