<?php
/* @var $this CarrerasController */
/* @var $model Carreras */
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
		<?php echo $form->label($model,'cod_carrera'); ?>
		<?php echo $form->textField($model,'cod_carrera'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_carrera'); ?>
		<?php echo $form->textField($model,'nombre_carrera',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->