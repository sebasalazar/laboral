<?php
/* @var $this PracticasController */
/* @var $model Practicas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'practicas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

        <div class="row">
		<?php echo $form->labelEx(Practicas::model(),'empresa_fk'); ?>
		<?php 
                    $datos = CHtml::listData(Empresas::model()->findAll(),'pk','nombre');
                    echo $form->DropDownList(Practicas::model(),'empresa_fk',$datos,array('empty'=>'Seleccione una Empresa')); 
                ?>
		<?php echo $form->error(Practicas::model(),'empresa_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'area_practica'); ?>
		<?php echo $form->textField($model,'area_practica',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'area_practica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inicio_practica'); ?>
		<?php echo $form->dateField($model,'inicio_practica'); ?>
		<?php echo $form->error($model,'inicio_practica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fin_practica'); ?>
		<?php echo $form->dateField($model,'fin_practica'); ?>
		<?php echo $form->error($model,'fin_practica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remuneracion'); ?>
		<?php echo $form->textField($model,'remuneracion'); ?>
		<?php echo $form->error($model,'remuneracion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
        

<?php $this->endWidget(); ?>

</div><!-- form -->