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

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>
        <div class="contenido2">
          <div class="fila">
              <div class="columna columna_50">

        
	<div class="row">
                <?php //echo $form->labelEx($model,'Estudiante'); ?>
                <?php  //echo $model->nombres." ".$model->apellidos ?>
		<?php echo $form->labelEx($model,'nombres'); ?>
		<?php echo $form->textField($model,'nombres',array('size'=>60,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nombres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellidos'); ?>
		<?php echo $form->textField($model,'apellidos',array('size'=>60,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'apellidos'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'rut'); ?>
		<?php //echo $form->textField($model,'rut'); ?>
		<?php //echo $form->error($model,'rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_nacimiento'); ?>
		<?php echo $form->textField($model,'fecha_nacimiento'); ?>
		<?php echo $form->error($model,'fecha_nacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'genero'); ?>
		<?php echo $form->radioButtonList($model,'genero',array('F'=>'Femenino','M'=>'Masculino'),array('separator'=>'  ', 'labelOptions'=>array('style'=>'display:inline'))); ?>
		<?php echo $form->error($model,'genero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comuna'); ?>
		<?php 
                                  $datos = CHtml::listData(Comunas::model()->findAll(),'pk','nombre');
                                  echo $form->DropDownList($model,'comuna_fk',$datos, array('empty'=>'Seleccione una Comuna', 'required'=>'required'));
                ?>
		<?php echo $form->error($model,'comuna_fk'); ?>
	</div>
                   </div>
                    <div class="columna columna_50">
	<div class="row">
		<?php echo $form->labelEx($model,'Estado Civil'); ?>
		<?php 
                                  $datos = CHtml::listData(EstadosCiviles::model()->findAll(),'pk','estado');
                                  echo $form->DropDownList($model,'ec_fk',$datos, array('empty'=>'Seleccione un Departamento', 'required'=>'required'));
                ?>
		<?php echo $form->error($model,'ec_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'celular'); ?>
		<?php echo $form->textField($model,'celular',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'celular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
                        
                        	
	<div class="row">
                        <?php echo $form->labelEx(Estudiantes::model(),'¿Buscando trabajo en la actualidad?'); ?>
                        <?php echo $form->checkBox(Estudiantes::model(),'busqueda'); ?>  
                        <?php echo $form->error(Estudiantes::model(),'busqueda'); ?>
	</div>

	<div class="row">
		<?php // echo $form->labelEx($model,'archivo_curriculum'); ?>
		<?php // echo $form->fileField($model,'archivo_curriculum',array('size'=>60,'maxlength'=>255)); ?>
		<?php // echo $form->error($model,'archivo_curriculum'); ?>
	</div>
                                                                </div> 
                </div> 
                </div> 

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Guardar'); ?>
	</div>


<?php $this->endWidget(); ?>

</div><!-- form -->
