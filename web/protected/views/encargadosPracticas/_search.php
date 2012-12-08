<?php
/* @var $this EncargadosPracticasController */
/* @var $model EncargadosPracticas */
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
		<?php echo $form->label($model,'rut_epracti'); ?>
		<?php echo $form->textField($model,'rut_epracti'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_encargado'); ?>
		<?php echo $form->textField($model,'nombre_encargado',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido_encargado'); ?>
		<?php echo $form->textField($model,'apellido_encargado',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'empresa_fk'); ?>
		<?php echo $form->textField($model,'empresa_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'area_practica_fk'); ?>
		<?php echo $form->textField($model,'area_practica_fk'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->