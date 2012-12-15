<?php
/* @var $this ProvinciasController */
/* @var $model Provincias */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'provincias-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'region_fk'); ?>
                <?php
                        $datos = CHtml::listData(Regiones::model()->findAll(),'pk','nombre');
                        echo $form->DropDownList($model,'region_fk',$datos, array('empty'=>'Seleccione una region', 'required'=>'required'));
                ?>
		<?php echo $form->error($model,'region_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

        <div class="form-actions">
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Enviar')); ?>
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Limpiar')); ?>
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->