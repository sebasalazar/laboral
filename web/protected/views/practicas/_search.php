<?php
/* @var $this PracticasController */
/* @var $model Practicas */
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
		<?php echo $form->label($model,'area_practica'); ?>
		<?php echo $form->textField($model,'area_practica',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inicio_practica'); ?>
		<?php echo $form->textField($model,'inicio_practica'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fin_practica'); ?>
		<?php echo $form->textField($model,'fin_practica'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'remuneracion'); ?>
		<?php echo $form->textField($model,'remuneracion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->