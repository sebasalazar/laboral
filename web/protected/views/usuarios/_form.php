<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/assets/7b79631/Rut/jquery.Rut.js'); ?>

<!-- si van a implementar jquery haganlo con registerScriptFile y que los script de los demás. -->
<!--
<script type="text/javascript">
$(document).ready(function(){
$('#rut_demo_int').Rut({ 
  on_error: function(){ 
      $('#cruz_error').show("fast");
      $('#rut_demo_int').val("");
  },
  on_success: function(){ 
      $('#cruz_error').hide();
  }
});
$("#content > ul").tabs();
});
</script>
-->    

<div class="form">
    
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-validation',
	'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data')
)); ?>

    <div class="titulo"><p class="note">Los campos con <span class="required">*</span> son obligatorios.</p></div>

        
        <?php
            if($tipoUsuario == 3)
                echo $form->errorSummary(array($model,$model1));
            elseif ($tipoUsuario == 2)
                echo $form->errorSummary(array($model,$model2));
            elseif($tipoUsuario == 1)
                echo $form->errorSummary(array($model,$model3)); 
        ?>
        <div class="contenido2">
          <div class="fila">
              <div class="columna columna_50">

                <div class="row">
                    <div class="contenido">
                        <div class="columna">
                            <?php echo $form->labelEx($model,'Rut: <span class="required">*</span>'); ?>
                            <p class="hint">
                            </p>
                            <?php echo $form->textField($model,'username',array('id'=>'rut_demo_int', 'name'=>'rut_demo_int', 'required'=>'required', 'size'=>50)); ?>
                            <?php echo $form->error($model,'username'); ?>
                        </div>
                        <div class="columna">
                            <?php echo CHtml::image('images/cruz.gif','Error',array('id'=>'cruz_error')); ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="contenido">
                        <div class="columna">
                            <?php echo $form->labelEx($model,'contraseña: <span class="required">*</span>'); ?>
                            <p class="hint">
                            </p>
                            <?php echo $form->passwordField($model,'password',array('size'=>30, 'maxlength'=>40, 'required'=>'required')); ?>
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
                            <div class="contenido">
                                <div class="columna">
                                    <?php echo $form->labelEx(Docentes::model(),'Nombres: <span class="required">*</span>'); ?>
                                    <p class="hint">
                                    </p>
                                    <?php echo $form->textField(Docentes::model(),'nombres', array('required'=>'required')); ?>
                                    <?php echo $form->error(Docentes::model(),'nombres'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="contenido">
                                <div class="columna">
                                    <?php echo $form->labelEx(Docentes::model(),'Apellidos: <span class="required">*</span>'); ?>
                                    <p class="hint">
                                    </p>
                                    <?php echo $form->textField(Docentes::model(),'apellidos', array('required'=>'required')); ?>
                                    <?php echo $form->error(Docentes::model(),'apellidos'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="contenido">
                                <div class="columna">
                                    <?php echo $form->labelEx(Docentes::model(),'Fecha de Nacimiento: <span class="required">*</span>'); ?>
                                    <p class="hint">
                                    </p>
                                    <?php echo $form->dateField(Docentes::model(),'fecha_nacimiento', array('required'=>'required')); ?>
                                    <?php echo $form->error(Docentes::model(),'fecha_nacimiento'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="contenido">
                                <div class="columna">
                                    <?php echo $form->labelEx(Docentes::model(),'Genero: '); ?>
                                    <?php echo $form->radioButtonList(Docentes::model(),'genero',array('F'=>'Femenino','M'=>'Masculino'),array('separator'=>'  ', 'labelOptions'=>array('style'=>'display:inline'))); ?>
                                    <?php echo $form->error(Docentes::model(),'genero'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="contenido">
                                <div class="columna">
                                    <?php echo $form->labelEx(Docentes::model(),'Direccion: <span class="required">*</span>'); ?>
                                    <?php echo $form->textField(Docentes::model(),'direccion',array('size'=>255,'maxlength'=>255, 'required'=>'required')); ?>
                                    <?php echo $form->error(Docentes::model(),'direccion'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="columna columna_50">
                        <div class="row">
                            <div class="contenido">
                                <div class="columna">
                                    <?php echo $form->labelEx(Docentes::model(),'Comuna: <span class="required">*</span>'); ?>
                                    <?php 
                                          $datos = CHtml::listData(Comunas::model()->findAll(),'pk','nombre');
                                          echo $form->DropDownList(Docentes::model(),'comuna_fk',$datos, array('empty'=>'Seleccione una Comuna', 'required'=>'required'));
                                    ?>
                                    <?php echo $form->error(Docentes::model(),'comunaco_fk'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="contenido">
                                <div class="columna">
                                    <?php echo $form->labelEx(Docentes::model(),'Departamentos: <span class="required">*</span>'); ?>
                                    <?php 
                                          $datos = CHtml::listData(Departamentos::model()->findAll(),'pk','departamento');
                                          echo $form->DropDownList(Docentes::model(),'departamento_fk',$datos, array('empty'=>'Seleccione un Departamento', 'required'=>'required'));
                                    ?>
                                    <?php echo $form->error(Docentes::model(),'departamento_fk'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="contenido">
                                <div class="columna">
                                    <?php echo $form->labelEx(Docentes::model(),'Estado Civil: <span class="required">*</span>'); ?>
                                    <?php 
                                          $datos = CHtml::listData(EstadosCiviles::model()->findAll(),'pk','estado');
                                          echo $form->DropDownList(Docentes::model(),'ec_fk',$datos, array('empty'=>'Seleccione un Estado Civil', 'required'=>'required'));
                                    ?>
                                    <?php echo $form->error(Docentes::model(),'ec_fk'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="contenido">
                                <div class="columna">
                                    <?php echo $form->labelEx(Docentes::model(),'Celular: <span class="required">*</span>'); ?>
                                    <p class="hint">
                                    </p>
                                    <?php echo $form->textField(Docentes::model(), 'celular', array('required'=>'required')); ?>
                                    <?php echo $form->error(Docentes::model(),'celular'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="contenido">
                                <div class="columna">
                                    <?php echo $form->labelEx(Docentes::model(),'Telefono: <span class="required">*</span>'); ?>
                                    <p class="hint">
                                    </p>
                                    <?php echo $form->textField(Docentes::model(), 'telefono', array('required'=>'required')); ?>
                                    <?php echo $form->error(Docentes::model(),'telefono'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="contenido">
                                <div class="columna">
                                    <?php echo $form->labelEx(Docentes::model(),'Email: <span class="required">*</span>'); ?>
                                    <p class="hint">
                                    </p>
                                    <?php echo $form->textField(Docentes::model(), 'email', array('required'=>'required')); ?>
                                    <?php echo $form->error(Docentes::model(),'email'); ?>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        <?php
            }
        ?>
        
        
        <?php if($tipoUsuario == 2) // usuario "empresa"
              {
        ?>
               <div class="row">
                    <div class="contenido">
                        <div clasee="columna">
                            <?php echo $form->labelEx(Empresas::model(),'Nombre de Empresa: <span class="required">*</span>'); ?>
                            <p class="hint">
                                Ejemplo: Chilectra S.A.
                            </p>
                            <?php echo $form->textField(Empresas::model(),'nombre',array('size'=>60,'maxlength'=>255, 'required'=>'required')); ?>
                            <?php echo $form->error(Empresas::model(),'nombre'); ?>
                        </div>
                    </div>     
                </div>


                <div class="row">
                    <div class="contenido">
                        <div class="columna">
                            <?php echo $form->labelEx(Empresas::model(),'Direccion: <span class="required">*</span>'); ?>
                            <?php echo $form->textField(Empresas::model(),'direccion',array('size'=>60,'maxlength'=>255)); ?>
                            <?php echo $form->error(Empresas::model(),'direccion'); ?>
                        </div>
                    </div>    
                </div>

                <div class="row">
                    <div class="contenido">
                        <div class="columna">
                            <?php echo $form->labelEx(Empresas::model(),'Comuna: <span class="required">*</span>'); ?>
                            <?php
                                $datos = CHtml::listData(Comunas::model()->findAll(),'pk','nombre');
                                echo $form->DropDownList(Empresas::model(),'comuna_fk',$datos,array('empty'=>'Seleccione una Comuna'));
                            ?>
                            <?php echo $form->error(Empresas::model(),'comuna_fk'); ?>
                        </div>
                    </div>
                                       </div>
                 </div>
                    <div class="columna columna_50">                       
                <div class="row">
                    <div class="contenido">
                        <div class="columna">
                            <?php echo $form->labelEx(Empresas::model(),'Código Postal: <span class="required">*</span>'); ?>
                            <?php echo $form->textField(Empresas::model(),'codigo_postal'); ?>
                            <?php echo $form->error(Empresas::model(),'codigo_postal'); ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="contenido">
                        <div class="columna">
                            <?php echo $form->labelEx(Empresas::model(),'Teléfono: <span class="required">*</span>'); ?>
                            <p class="hint">
                                Nota: Teléfono fijo de la Empresa.
                            </p>
                            <?php echo $form->textField(Empresas::model(),'telefono',array('size'=>50,'maxlength'=>50)); ?>
                            <?php echo $form->error(Empresas::model(),'telefono'); ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="contenido">
                        <div class="columna">
                            <?php echo $form->labelEx(Empresas::model(),'E-mail: '); ?>
                            <p class="hint">
                                Ejemplo: empresa@empresa.cl
                            </p>
                            <?php echo $form->textField(Empresas::model(),'email',array('size'=>60,'maxlength'=>255)); ?>
                            <?php echo $form->error(Empresas::model(),'email'); ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="contenido">
                        <div class="columna">
                            <?php echo $form->labelEx(Empresas::model(),'Actividad de la Empresa: <span class="required">*</span>'); ?>
                            <?php
                                $datos = CHtml::listData(Rubros::model()->findAll(),'pk','rubro');
                                 echo $form->DropDownList(Empresas::model(),'actividad_fk',$datos,array('empty'=>'Seleccione un área'));
                            ?>
                            <?php echo $form->error(Empresas::model(),'actividad_fk'); ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="contenido">
                        <div class="columna">
                            <?php echo $form->labelEx(Empresas::model(),'Descripción de Negocio: <span class="required">*</span>'); ?>
                            <p class="hint">
                                Ejemplo: Empresa dedicada a la venta de dispositivos electrónicos.
                            </p>
                            <?php echo $form->textArea(Empresas::model(),'descripcion_negocio',array('size'=>60,'maxlength'=>255)); ?>
                            <?php echo $form->error(Empresas::model(),'descripcion_negocio'); ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="contenido">
                        <div class="columna">
                            <?php echo $form->labelEx(Empresas::model(),'Web: <span class="required">*</span>'); ?>
                            <p class="hint">
                                Ejemplo: www.empresa1.cl
                            </p>
                            <?php echo $form->textField(Empresas::model(),'web',array('size'=>60,'maxlength'=>255)); ?>
                            <?php echo $form->error(Empresas::model(),'web'); ?>
                        </div>
                    </div>
                </div>
        </div>
                </div>
            </div>
        <?php
            }
        ?>
        
       
	<?php if($tipoUsuario == 1) // usuario "alumno"
              {
        ?>   
                <div class="row">
                        <?php echo $form->labelEx(Estudiantes::model(),'nombres <span class="required">*</span> '); ?>
                        <?php echo $form->textField(Estudiantes::model(),'nombres',array('required'=>'required')); ?>
                        <?php echo $form->error(Estudiantes::model(),'nombres'); ?>
                </div>

               <div class="row">
                    <?php echo $form->labelEx(Estudiantes::model(),'apellidos <span class="required">*</span>'); ?>
                   
                    <?php echo $form->textField(Estudiantes::model(),'apellidos',array('required'=>'required')); ?>
                    <?php echo $form->error(Estudiantes::model(),'apellidos'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Estudiantes::model(),'fecha_nacimiento <span class="required">*</span>'); ?>
                        <?php echo $form->dateField(Estudiantes::model(),'fecha_nacimiento',array('required'=>'required')); ?>
                        <?php echo $form->error(Estudiantes::model(),'fecha_nacimiento'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Estudiantes::model(),'genero <span class="required">*</span>'); ?>
                        <?php echo $form->radioButtonList(Estudiantes::model(),'genero',array('F'=>'Femenino','M'=>'Masculino'),array('separator'=>'  ', 'labelOptions'=>array('style'=>'display:inline'))); ?>
                        <?php echo $form->error(Estudiantes::model(),'genero'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Estudiantes::model(),'direccion <span class="required">*</span>'); ?>
                        <?php echo $form->textField(Estudiantes::model(),'direccion',array('size'=>35,'maxlength'=>35, 'required'=>'required')); ?>
                        <?php echo $form->error(Estudiantes::model(),'direccion'); ?>
                </div>
        
                 <div class="row">
                        <?php echo $form->labelEx(Regiones::model(), 'Region') ?>                    
                             <?php  echo $form->dropdownList(Regiones::model(),'pk', 
        
                                        CHtml::listData(Regiones::model()->findAll(), 'pk', 'nombre'),
                                        array(
                                        'empty'=>'Seleccione...',
                                        'ajax'=>array(
                                        'type'=>'POST',
                                        'url'=>CController::createurl('Provincias/selectProvincias'),
                                        'update'=>'#provinciaCombo',
                                )));  ?>  
                        <?php echo $form->error(Regiones::model(),'pk'); ?>
                </div>
        
                <div class="row">
                     <?php echo $form->labelEx(Provincias::model(),'Provincia'); ?>
                       <?php echo $form->DropDownList(Provincias::model(),'pk',array(),array('id'=> 'provinciaCombo', 
                                                                                             'name'=>'provinciaCombo',
                                                                                                    'ajax'=>array(
                                                                                                    'type'=>'POST',
                                                                                                    'url'=>CController::createurl('Comunas/selectComuna'),
                                                                                                    'update'=>'#comboComuna',
                                                                                                     ),
                                                                                                'prompt' => 'Seleccione...')); ?>
                       <?php echo $form->error(Provincias::model(),'pk'); ?>
                    
                </div>
        
               

                <div class="row">
                        <?php echo $form->labelEx(Estudiantes::model(),'Comuna <span class="required">*</span>'); ?>
                       
                        <?php echo $form->DropDownList(Estudiantes::model(),'comuna_fk',array(), array('id' => 'comboComuna', 'name'=>'comboComuna','required'=>'required', 'prompt' => 'Selecione...')); ?>
                        
                        <?php echo $form->error(Estudiantes::model(),'comuna_fk'); ?>
                </div>
                </div>
                    <div class="columna columna_50">
                <div class="row">
                        <?php echo $form->labelEx(Estudiantes::model(),'Estado Civil <span class="required">*</span>'); ?>
                        <?php $datos = CHtml::listData(EstadosCiviles::model()->findAll(),'pk','estado'); ?>
                        <?php echo $form->DropDownList(Estudiantes::model(),'ec_fk',$datos, array('empty'=>'Seleccione...', 'required'=>'required')); ?>
                        <?php echo $form->error(Estudiantes::model(),'ec_fk'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Estudiantes::model(),'telefono: <span class="required">*</span>'); ?>
                        <?php echo $form->textField(Estudiantes::model(),'telefono',array('required'=>'required')); ?>
                        <?php echo $form->error(Estudiantes::model(),'telefono'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Estudiantes::model(),'celular'); ?>
                        <?php echo $form->textField(Estudiantes::model(),'celular'); ?>
                        <?php echo $form->error(Estudiantes::model(),'celular'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Estudiantes::model(),'email <span class="required">*</span>'); ?>
                        <?php echo $form->textField(Estudiantes::model(),'email',array('size'=>60,'maxlength'=>255, 'required'=>'required')); ?>
                        <?php echo $form->error(Estudiantes::model(),'email'); ?>
                </div>
        
                <div class="row">
                        <?php echo $form->labelEx(Escuelas::model(),'Escuela'); ?>
                        <?php $datos = CHtml::listData(Escuelas::model()->findAll(),'pk','escuela'); ?>
                        <?php echo $form->DropDownList(Escuelas::model(),'pk',$datos, array('ajax'=>array(
                                                                                                    'type'=>'POST',
                                                                                                    'url'=>CController::createurl('Carreras/SelectCarrera'),
                                                                                                    'update'=>'#escuelaCombo',
                                                                                                     ),'prompt' => 'Selecione...')); ?>
                        <?php echo $form->error(Facultades::model(),'pk'); ?>
                </div>
                
                <div class="row">
                        <?php echo $form->labelEx(Estudiantes::model(),'Carrera <span class="required">*</span>'); ?>
                        <?php //$datos = CHtml::listData(Carreras::model()->findAll(),'pk','nombre_carrera'); ?>
                        <?php echo $form->DropDownList(Estudiantes::model(),'carrera_fk',array(), array('id'=>'escuelaCombo', 'name' => 'escuelaCombo','empty'=>'Seleccione...', 'required'=>'required')); ?>
                        <?php echo $form->error(Estudiantes::model(),'carrera_fk'); ?>
                </div>
        
                <div class="row">
                        <?php echo $form->labelEx(Estudiantes::model(),'Estado en UTEM <span class="required">*</span>'); ?>
                       
                        <?php $datos = CHtml::listData(Estados::model()->findAll(),'pk','nombre'); ?>
                        <?php echo $form->DropDownList(Estudiantes::model(),'estado',$datos, array('empty'=>'Seleccione...', 'required'=>'required')); ?>
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
                </div> 
                </div> 
                </div> 
        <?php
            }
        ?>

	<div class="form-actions">
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Enviar')); ?>
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Borrar')); ?>
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->