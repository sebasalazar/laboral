<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
        
        <?php
            if($tipoUsuario == 3)
                echo $form->errorSummary($model1);
            elseif ($tipoUsuario == 2)
                echo $form->errorSummary($model2);
            elseif($tipoUsuario == 1)
                echo $form->errorSummary($model3); 
        ?>
        
        <?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Rut: <span class="required">*</span>'); ?>
                <p class="hint">
                   Ej: 11.111.111-3
                </p>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contraseña: <span class="required">*</span>'); ?>
                <p class="hint">
                   Nota: 5 Caracteres como minimo, 40 Caracteres como máximo.
                </p>
		<?php echo $form->passwordField($model,'password',array('size'=>20,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
        
        <?php
            if($tipoUsuario == 3) //Tipo de usuario "docente"
            {
        ?>
                <div class="row">
                        <?php echo $form->labelEx(Docentes::model(),'Nombres: <span class="required">*</span>'); ?>
                        <p class="hint">
                            Ej: Marcelo Fernando.
                        </p>
                        <?php echo $form->textField(Docentes::model(),'nombres'); ?>
                        <?php echo $form->error(Docentes::model(),'nombres'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Docentes::model(),'Apellidos: <span class="required">*</span>'); ?>
                        <p class="hint">
                            Ej: Perez Gonzales.
                        </p>
                        <?php echo $form->textField(Docentes::model(),'apellidos'); ?>
                        <?php echo $form->error(Docentes::model(),'apellidos'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Docentes::model(),'Fecha de Nacimiento: <span class="required">*</span>'); ?>
                        <p class="hint">
                            Ej: dd/mm/aa.
                        </p>
                        <?php echo $form->dateField(Docentes::model(),'fecha_nacimiento'); ?>
                        <?php echo $form->error(Docentes::model(),'fecha_nacimiento'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Docentes::model(),'Genero: '); ?>
                        <?php echo $form->radioButtonList(Docentes::model(),'genero',array('F'=>'Femenino','M'=>'Masculino'),array('separator'=>'  ', 'labelOptions'=>array('style'=>'display:inline'))); ?>
                        <?php echo $form->error(Docentes::model(),'genero'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Docentes::model(),'Direccion: <span class="required">*</span>'); ?>
                        <?php echo $form->textArea(Docentes::model(),'direccion',array('size'=>255,'maxlength'=>255)); ?>
                        <?php echo $form->error(Docentes::model(),'direccion'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Docentes::model(),'Comuna: <span class="required">*</span>'); ?>
                        <?php 
                              $datos = CHtml::listData(Comunas::model()->findAll(),'pk','nombre');
                              echo $form->DropDownList(Docentes::model(),'comuna_id',$datos, array('empty'=>'Seleccione una Comuna'));
                        ?>
                        <?php echo $form->error(Docentes::model(),'comuna_id'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Docentes::model(),'Departamentos: <span class="required">*</span>'); ?>
                        <?php 
                              $datos = CHtml::listData(Departamentos::model()->findAll(),'pk','departamento');
                              echo $form->DropDownList(Docentes::model(),'departamento_fk',$datos, array('empty'=>'Seleccione un Departamento'));
                        ?>
                        <?php echo $form->error(Docentes::model(),'departamento_fk'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Docentes::model(),'Estado Civil: <span class="required">*</span>'); ?>
                        <?php 
                              $datos = CHtml::listData(EstadosCiviles::model()->findAll(),'pk','estado');
                              echo $form->DropDownList(Docentes::model(),'ec_fk',$datos, array('empty'=>'Seleccione un Estado Civil'));
                        ?>
                        <?php echo $form->error(Docentes::model(),'ec_fk'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Docentes::model(),'Celular: <span class="required">*</span>'); ?>
                        <p class="hint">
                            Nota: Celular de contacto del alumno.
                        </p>
                        <?php echo $form->textField(Docentes::model(),'celular'); ?>
                        <?php echo $form->error(Docentes::model(),'celular'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Docentes::model(),'Telefono: <span class="required">*</span>'); ?>
                        <p class="hint">
                            Nota: Telefono fijo de contacto.
                        </p>
                        <?php echo $form->textField(Docentes::model(),'telefono'); ?>
                        <?php echo $form->error(Docentes::model(),'telefono'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Docentes::model(),'Email: <span class="required">*</span>'); ?>
                        <p class="hint">
                            Nota: E-mail de Contacto.
                        </p>
                        <?php echo $form->textField(Docentes::model(),'email'); ?>
                        <?php echo $form->error(Docentes::model(),'email'); ?>
                </div>
        <?php
            }
        ?>
        
        
        <?php if($tipoUsuario == 2) // usuario "empresa"
              {
        ?>
                <div class="row">
                        <?php echo $form->labelEx(Empresas::model(),'nombre'); ?>
                        <?php echo $form->textField(Empresas::model(),'nombre',array('size'=>60,'maxlength'=>255)); ?>
                        <?php echo $form->error(Empresas::model(),'nombre'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Empresas::model(),'nombre_represen_legal'); ?>
                        <?php echo $form->textField(Empresas::model(),'nombre_represen_legal',array('size'=>60,'maxlength'=>255)); ?>
                        <?php echo $form->error(Empresas::model(),'nombre_represen_legal'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Empresas::model(),'direccion'); ?>
                        <?php echo $form->textField(Empresas::model(),'direccion',array('size'=>60,'maxlength'=>255)); ?>
                        <?php echo $form->error(Empresas::model(),'direccion'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Empresas::model(),'comuna_fk'); ?>
                        <?php echo $form->textField(Empresas::model(),'comuna_fk'); ?>
                        <?php echo $form->error(Empresas::model(),'comuna_fk'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Empresas::model(),'codigo_postal'); ?>
                        <?php echo $form->textField(Empresas::model(),'codigo_postal'); ?>
                        <?php echo $form->error(Empresas::model(),'codigo_postal'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Empresas::model(),'telefono'); ?>
                        <?php echo $form->textField(Empresas::model(),'telefono',array('size'=>50,'maxlength'=>50)); ?>
                        <?php echo $form->error(Empresas::model(),'telefono'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Empresas::model(),'email'); ?>
                        <?php echo $form->textField(Empresas::model(),'email',array('size'=>60,'maxlength'=>255)); ?>
                        <?php echo $form->error(Empresas::model(),'email'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Empresas::model(),'actividad'); ?>
                        <?php echo $form->textField(Empresas::model(),'actividad',array('size'=>60,'maxlength'=>255)); ?>
                        <?php echo $form->error(Empresas::model(),'actividad'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Empresas::model(),'descripcion_negocio'); ?>
                        <?php echo $form->textField(Empresas::model(),'descripcion_negocio',array('size'=>60,'maxlength'=>255)); ?>
                        <?php echo $form->error(Empresas::model(),'descripcion_negocio'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Empresas::model(),'web'); ?>
                        <?php echo $form->textField(Empresas::model(),'web',array('size'=>60,'maxlength'=>255)); ?>
                        <?php echo $form->error(Empresas::model(),'web'); ?>
                </div>
        
        <?php
            }
        ?>
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->