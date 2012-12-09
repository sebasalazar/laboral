<?php
/* @var $this PostulacionesController */
/* @var $model Postulaciones */
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
		<?php echo $form->label($model,'oferta_laboral_fk'); ?>
		<?php echo $form->textField($model,'oferta_laboral_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estudiante_fk'); ?>
		<?php echo $form->textField($model,'estudiante_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->