<?php
/* @var $this EstudiantesController */
/* @var $model Estudiantes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estudiantes-form',
	'enableAjaxValidation'=>false,
         'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">El formato debe ser PDF</p>

	<?php echo $form->errorSummary(Estudiantes::model()); ?>
       
	<div class="row">
		<?php echo $form->labelEx(Estudiantes::model(),'Seleccione Curriculum'); ?>
		<?php echo $form->fileField(Estudiantes::model(),'archivo_curriculum',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error(Estudiantes::model(),'archivo_curriculum'); ?>
	</div>
  
         <?php //  CHtml::link(CHtml::encode($model->archivo_curriculum), Yii::app()->baseUrl . '/cv/' . $model->archivo_curriculum); ?>
	<div class="row buttons">
		 <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Enviar')); ?>
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Borrar')); ?>

	</div>


<?php $this->endWidget(); ?>

</div><!-- form -->
