<?php
/* @var $this FormacioncomplementariaController */
/* @var $model Formacioncomplementaria */
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
		<?php echo $form->label($model,'nombre_formacion'); ?>
		<?php echo $form->textField($model,'nombre_formacion',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'institucion'); ?>
		<?php echo $form->textField($model,'institucion',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anio_formacion_complementaria'); ?>
		<?php echo $form->textField($model,'anio_formacion_complementaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'curriculum_fk'); ?>
		<?php echo $form->textField($model,'curriculum_fk'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->