<?php
/* @var $this ComunasController */
/* @var $model Comunas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comunas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'provincia_fk'); ?>
                <?php
                        $datos = CHtml::listData(Provincias::model()->findAll(),'pk','nombre');
                        echo $form->DropDownList($model,'provincia_fk',$datos, array('empty'=>'Seleccione una provincia', 'required'=>'required'));
                ?>
		<?php echo $form->error($model,'provincia_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->