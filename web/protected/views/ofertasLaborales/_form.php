<?php
/* @var $this OfertasLaboralesController */
/* @var $model OfertasLaborales */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ofertas-laborales-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span>son olbigatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Empresa: <span class="required">*</span> '); ?>
		<?php 
                        $datos = CHtml::listData(Empresas::model()->findAll(),'pk','nombre');
                        echo $form->DropDownList($model,'empresa_fk',$datos, array('empty'=>'Seleccione una Empresa', 'required'=>'required'));
                ?>
		<?php echo $form->error($model,'empresa_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Rubro: <span class="required">*</span> '); ?>
		<?php 
                        $datos = CHtml::listData(Rubros::model()->findAll(),'pk','rubro');

                        echo $form->DropDownList($model,'rubro_fk',$datos, array('empty'=>'Seleccione un Rubro', 'required'=>'required'));

                ?>
		<?php echo $form->error($model,'rubro_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Niveles de Estudio Requeridos: <span class="required">*</span> '); ?>
		<?php 
                        $datos = CHtml::listData(NivelesEstudios::model()->findAll(),'pk','estudios');
                        echo $form->DropDownList($model,'nivel_estudio_fk',$datos, array('empty'=>'Seleccione un Nivel de Estudio', 'required'=>'required'));
                ?>
		<?php echo $form->error($model,'nivel_estudio_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Renta: <span class="required">*</span> '); ?>
		<?php 
                        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ ";
                        echo $form->textField($model,'renta', array('required'=>'required')); 
                ?>
		<?php echo $form->error($model,'renta'); ?>
	</div>

	<div class="row">

		<?php echo $form->labelEx($model,'Vacantes: <span class="required">*</span> '); ?>
		<?php echo $form->textField($model,'vacantes', array('required'=>'required')); ?>

		<?php echo $form->error($model,'vacantes'); ?>
	</div>

	<div class="row">

		<?php echo $form->labelEx($model,'Plazo: <span class="required">*</span> '); ?>
		<?php echo $form->dateField($model,'plazo', array('required'=>'required')); ?>

		<?php echo $form->error($model,'plazo'); ?>
	</div>

	<div class="row">

		<?php echo $form->labelEx($model,'Descripción: <span class="required">*</span> '); ?>
		<?php echo $form->textArea($model,'descripcion', array('required'=>'required')); ?>

		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">

		<?php echo $form->labelEx($model,'Dirección: <span class="required">*</span> '); ?>
		<?php echo $form->textField($model,'ubicacion',array('size'=>50,'maxlength'=>255,'required'=>'required')); ?>
		<?php echo $form->error($model,'ubicacion'); ?>
	</div>

	<div class="row">

		<?php echo $form->labelEx($model,'Cargo a Postular: <span class="required">*</span> '); ?>
		<?php echo $form->textField($model,'cargo', array('required'=>'required')); ?>

		<?php echo $form->error($model,'cargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Beneficios: <span class="required">*</span> '); ?>
		<?php echo $form->textArea($model,'beneficios', array('required'=>'required')); ?>
		<?php echo $form->error($model,'beneficios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Jornada de la Oferta Laboral: <span class="required">*</span> '); ?>
		<?php 
                        $datos = CHtml::listData(Jornadas::model()->findAll(),'pk','jornada');

                        echo $form->DropDownList($model,'jornada_fk',$datos, array('empty'=>'Seleccione una Jornada', 'required'=>'required'));

                ?>
		<?php echo $form->error($model,'jornada_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Contrato: <span class="required">*</span> '); ?>
		<?php 
                        $datos = CHtml::listData(TiposContratos::model()->findAll(),'pk','contrato');

                        echo $form->DropDownList($model,'contrato_fk',$datos, array('empty'=>'Seleccione Tipo Contrato', 'required'=>'required'));

                ?>
		<?php echo $form->error($model,'contrato_fk'); ?>
	</div>
        <div class="form-actions">
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Enviar')); ?>
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Limpiar')); ?>
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->