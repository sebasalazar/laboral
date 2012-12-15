<?php
/* @var $this CarrerasController */
/* @var $model Carreras */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'carreras-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_carrera'); ?>
		<?php echo $form->textField($model,'cod_carrera'); ?>
		<?php echo $form->error($model,'cod_carrera'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_carrera'); ?>
		<?php echo $form->textField($model,'nombre_carrera',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre_carrera'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'escuela_fk'); ?>
                <?php
                        $datos = CHtml::listData(Escuelas::model()->findAll(),'pk','escuela');
                        echo $form->DropDownList($model,'escuela_fk',$datos, array('empty'=>'Seleccione una escuela', 'required'=>'required'));
                ?>
		<?php echo $form->error($model,'escuela_fk'); ?>
	</div>

        <div class="form-actions">
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Enviar')); ?>
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Limpiar')); ?>
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->