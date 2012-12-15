<?php
/* @var $this PropietarioOfertaController */
/* @var $model PropietarioOferta */
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
		<?php echo $form->label($model,'rut_propietario'); ?>
		<?php echo $form->textField($model,'rut_propietario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->