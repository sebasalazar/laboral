<?php
/* @var $this EstudiantesController */
/* @var $model Estudiantes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estudiantes-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">El formato debe ser PDF</p>

	<?php echo $form->errorSummary($model); ?>
       
	<div class="row">
		<?php echo $form->labelEx($model,'archivo_curriculum'); ?>
		<?php echo $form->fileField($model,'archivo_curriculum',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'archivo_curriculum'); ?>
	</div>
  

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Guardar'); ?>
	</div>


<?php $this->endWidget(); ?>

</div><!-- form -->
