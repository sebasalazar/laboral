<?php
/* @var $this DocentesController */
/* @var $model Docentes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'docentes-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombres'); ?>
		<?php echo $form->textField($model,'nombres', array('required'=>'required')); ?>
		<?php echo $form->error($model,'nombres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellidos'); ?>
		<?php echo $form->textField($model,'apellidos', array('required'=>'required')); ?>
		<?php echo $form->error($model,'apellidos'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'rut'); ?>
		<?php echo $form->textField($model,'rut', array('required'=>'required')); ?>
		<?php echo $form->error($model,'rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_nacimiento'); ?>
		<?php echo $form->dateField($model,'fecha_nacimiento', array('required'=>'required')); ?>
		<?php echo $form->error($model,'fecha_nacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'genero'); ?>
		<?php echo $form->radioButtonList($model,'genero',array('F'=>'Femenino','M'=>'Masculino'),array('separator'=>'  ', 'labelOptions'=>array('style'=>'display:inline'))); ?>
		<?php echo $form->error($model,'genero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion', array('required'=>'required')); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comuna_fk'); ?>
		<?php 
                                  $datos = CHtml::listData(Comunas::model()->findAll(),'pk','nombre');
                                  echo $form->DropDownList($model,'comuna_fk',$datos, array('empty'=>'Seleccione una Comuna', 'required'=>'required'));
                ?>
		<?php echo $form->error($model,'comuna_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Estado Civil'); ?>
		<?php 
                                  $datos = CHtml::listData(EstadosCiviles::model()->findAll(),'pk','estado');
                                  echo $form->DropDownList($model,'ec_fk',$datos, array('empty'=>'Seleccione un Departamento', 'required'=>'required'));
                ?>
		<?php echo $form->error($model,'ec_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'departamento_fk'); ?>
                <?php 
                                  $datos = CHtml::listData(Departamentos::model()->findAll(),'pk','departamento');
                                  echo $form->DropDownList($model,'departamento_fk',$datos, array('empty'=>'Seleccione un Departamento', 'required'=>'required'));
                ?>
		<?php echo $form->error($model,'departamento_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono', array('required'=>'required')); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'celular'); ?>
		<?php echo $form->textField($model,'celular', array('required'=>'required')); ?>
		<?php echo $form->error($model,'celular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email', array('required'=>'required')); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

        <div class="form-actions">
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Enviar')); ?>
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Limpiar')); ?>
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->