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

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Empresa: '); ?>
		<?php 
                        $datos = CHtml::listData(Empresas::model()->findAll(),'pk','nombre');
                        echo $form->DropDownList(OfertasLaborales::model(),'empresa_fk',$datos, array('empty'=>'Seleccione una Empresa'));
                ?>
		<?php echo $form->error($model,'empresa_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Rubro: '); ?>
		<?php 
                        $datos = CHtml::listData(Rubros::model()->findAll(),'pk','rubro');
                        echo $form->DropDownList(OfertasLaborales::model(),'rubro_fk',$datos, array('empty'=>'Seleccione un Rubro'));
                ?>
		<?php echo $form->error($model,'rubro_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Niveles de Estudio Requeridos: '); ?>
		<?php 
                        $datos = CHtml::listData(NivelesEstudios::model()->findAll(),'pk','estudios');
                        echo $form->DropDownList(OfertasLaborales::model(),'nivel_estudio_fk',$datos, array('empty'=>'Seleccione un Nivel de Estudio'));
                ?>
		<?php echo $form->error($model,'nivel_estudio_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Renta: '); ?>
		<?php 
                        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ ";
                        echo $form->textField($model,'renta',array('size'=>10,'maxlength'=>10)); 
                ?>
		<?php echo $form->error($model,'renta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Vacantes: '); ?>
		<?php echo $form->textField($model,'vacantes'); ?>
		<?php echo $form->error($model,'vacantes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Plazo: '); ?>
		<?php echo $form->dateField(OfertasLaborales::model(),'plazo'); ?>
		<?php echo $form->error($model,'plazo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Descripción: '); ?>
		<?php echo $form->textArea(OfertasLaborales::model(),'descripcion',array('size'=>255,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Dirección: '); ?>
		<?php echo $form->textField($model,'ubicacion',array('size'=>50,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ubicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cargo a Postular: '); ?>
		<?php echo $form->textField($model,'cargo',array('size'=>40,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha Publicación: '); ?>
		<?php echo $form->dateField(OfertasLaborales::model(),'fecha_publicacion'); ?>
		<?php echo $form->error($model,'fecha_publicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Beneficios: '); ?>
		<?php echo $form->textArea(OfertasLaborales::model(),'beneficios',array('size'=>255,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'beneficios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Jornada de la Oferta Laboral: '); ?>
		<?php 
                        $datos = CHtml::listData(Jornadas::model()->findAll(),'pk','jornada');
                        echo $form->DropDownList(OfertasLaborales::model(),'jornada_fk',$datos, array('empty'=>'Seleccione una Jornada'));
                ?>
		<?php echo $form->error($model,'jornada_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contrato_fk'); ?>
		<?php 
                        $datos = CHtml::listData(TiposContratos::model()->findAll(),'pk','contrato');
                        echo $form->DropDownList(OfertasLaborales::model(),'contrato_fk',$datos, array('empty'=>'Seleccione Tipo Contrato'));
                ?>
		<?php echo $form->error($model,'contrato_fk'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->