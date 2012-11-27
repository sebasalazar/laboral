<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/assets/7b79631/Rut/jquery.Rut.js'); ?>

<script type="text/javascript">
$(document).ready(function(){
$('#rut_demo_2').Rut({
  on_success: function(){ 
      validation: true;
      $("#rut").hide("fast");
      $("#rut").text("Rut Valido!");
      $("#rut").show("slow");
      $("#rut").css("background","#BCE774");
      $("#rut").css("border","2px solid #60BF60");
  } 
});
$('#rut_demo_2').Rut({ 
  on_error: function(){
      validation: true;
      $("#rut").hide("fast");
      $("#rut").text("Rut Invalido!");
      $("#rut").show("slow");
      $("#rut").css("background","#FEE");
      $("#rut").css("border","2px solid #C00");
      $("#rut_demo_2").val("");
  }
});
$("#content > ul").tabs();
});
</script>

<div class="form">
    
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-validation',
	'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data')
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
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx($model,'Rut: <span class="required">*</span>'); ?>
                    <p class="hint">
                       Nota: Sin puntos ni guion.<br />
                       Ej: 171548928
                    </p>
                    <?php echo $form->textField($model,'username',array('id'=>'rut_demo_2','name'=>'rut_demo_2')); ?>
                    <?php echo $form->error($model,'username'); ?>
                </div>
                <div class="columna">
                    <p id="rut" class="validarRut"></p>
                </div>
            </div>
	</div>

	<div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx($model,'contraseña: <span class="required">*</span>'); ?>
                    <p class="hint">
                       Nota: 5 min, 40 Max.
                    </p>
                    <?php echo $form->passwordField($model,'password',array('size'=>20,'maxlength'=>40)); ?>
                    <?php echo $form->error($model,'password'); ?>
                </div>
                <div class="columna">
                </div>
            </div>
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
                        <?php echo $form->labelEx(Empresas::model(),'telefono: <span class="required">*</span>'); ?>
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
        
	<?php if($tipoUsuario == 1) // usuario "alumno"
              {
        ?>    
                <div class="row">
                        <?php echo $form->labelEx(Estudiantes::model(),'nombres'); ?>
                        <?php echo $form->textField(Estudiantes::model(),'nombres'); ?>
                        <?php echo $form->error(Estudiantes::model(),'nombres'); ?>
                </div>

               <div class="row">
                    <?php echo $form->labelEx(Estudiantes::model(),'apellidos'); ?>
                    <?php echo $form->textField(Estudiantes::model(),'apellidos'); ?>
                    <?php echo $form->error(Estudiantes::model(),'apellidos'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Estudiantes::model(),'fecha_nacimiento'); ?>
                        <?php echo $form->dateField(Estudiantes::model(),'fecha_nacimiento'); ?>
                        <?php echo $form->error(Estudiantes::model(),'fecha_nacimiento'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Estudiantes::model(),'genero'); ?>
                        <?php echo $form->radioButtonList(Estudiantes::model(),'genero',array('F'=>'Femenino','M'=>'Masculino'),array('separator'=>'  ', 'labelOptions'=>array('style'=>'display:inline'))); ?>
                        <?php echo $form->error(Estudiantes::model(),'genero'); ?>x
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Estudiantes::model(),'direccion'); ?>
                        <?php echo $form->textField(Estudiantes::model(),'direccion',array('size'=>35,'maxlength'=>35)); ?>
                        <?php echo $form->error(Estudiantes::model(),'direccion'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Estudiantes::model(),'Comuna'); ?>
                         <?php $datos = CHtml::listData(Comunas::model()->findAll(),'pk','nombre'); ?>
                        <?php echo $form->DropDownList(Estudiantes::model(),'comuna_id',$datos, array('empty'=>'Seleccione...')); ?>
                        
                        <?php echo $form->error(Estudiantes::model(),'comuna_id'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Estudiantes::model(),'Estado Civil'); ?>
                        <?php $datos = CHtml::listData(EstadosCiviles::model()->findAll(),'pk','estado'); ?>
                        <?php echo $form->DropDownList(Estudiantes::model(),'ec_fk',$datos, array('empty'=>'Seleccione...')); ?>
                        <?php echo $form->error(Estudiantes::model(),'ec_fk'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Estudiantes::model(),'telefono: <span class="required">*</span>'); ?>
                        <?php echo $form->textField(Estudiantes::model(),'telefono'); ?>
                        <?php echo $form->error(Estudiantes::model(),'telefono'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Estudiantes::model(),'celular'); ?>
                        <?php echo $form->textField(Estudiantes::model(),'celular'); ?>
                        <?php echo $form->error(Estudiantes::model(),'celular'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Estudiantes::model(),'email'); ?>
                        <?php echo $form->textField(Estudiantes::model(),'email',array('size'=>60,'maxlength'=>255)); ?>
                        <?php echo $form->error(Estudiantes::model(),'email'); ?>
                </div>
                
                <div class="row">
                        <?php echo $form->labelEx(Estudiantes::model(),'Carrera'); ?>
                        <?php $datos = CHtml::listData(Carreras::model()->findAll(),'pk','nombre_carrera'); ?>
                        <?php echo $form->DropDownList(Estudiantes::model(),'carrera_fk',$datos, array('empty'=>'Seleccione...')); ?>
                        <?php echo $form->error(Estudiantes::model(),'carrera_fk'); ?>
                </div>
        
                <div class="row">
                        <?php echo $form->labelEx(Estudiantes::model(),'Estado en UTEM'); ?>
                        <?php $datos = CHtml::listData(Estados::model()->findAll(),'pk','nombre'); ?>
                        <?php echo $form->DropDownList(Estudiantes::model(),'estado',$datos, array('empty'=>'Seleccione...')); ?>
                        <?php echo $form->error(Estudiantes::model(),'estado'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Estudiantes::model(),'¿Buscando trabajo en la actualidad?'); ?>
                         <?php echo $form->checkBox(Estudiantes::model(),'busqueda'); ?>
                            
                        <?php echo $form->error(Estudiantes::model(),'busqueda'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Estudiantes::model(),'archivo_curriculum'); ?>
                        <?php echo $form->fileField(Estudiantes::model(),'archivo_curriculum',array('size'=>60,'maxlength'=>255)); ?>
                        <?php echo $form->error(Estudiantes::model(),'archivo_curriculum'); ?>
                </div>       
        <?php
            }
        ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('id'=>'quitar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->