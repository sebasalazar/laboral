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
<?php echo $form->errorSummary($model); ?>
        <div class="contenido2">
          <div class="fila">
              <div class="columna columna_50">

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
		<?php echo $form->labelEx($model,'rut'); ?>
		<?php echo $form->textField($model,'rut'); ?>
		<?php echo $form->error($model,'rut'); ?>
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
                                                                                                    'update'=>'#carrerafk',
                                                                                                     ),'prompt' => 'Selecione...')); ?>
                        <?php echo $form->error(Facultades::model(),'pk'); ?>
                </div>
                
                <div class="row">
                        <?php echo $form->labelEx(Estudiantes::model(),'Carrera <span class="required">*</span>'); ?>
                        <?php //$datos = CHtml::listData(Carreras::model()->findAll(),'pk','nombre_carrera'); ?>
                        <?php echo $form->DropDownList(Estudiantes::model(),'carrera_fk',array(), array('id'=>'carrerafk', 'name' => 'carrerafk', 'required'=>'required', 'prompt'=>'Seleccione...')); ?>
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
                        <?php // echo $form->labelEx(Estudiantes::model(),'archivo_curriculum'); ?>
                        <?php // echo $form->fileField(Estudiantes::model(),'archivo_curriculum',array('size'=>60,'maxlength'=>255)); ?>
                        <?php // echo $form->error(Estudiantes::model(),'archivo_curriculum'); ?>
                </div>      
                </div> 
                </div> 
                </div> 


	<div class="form-actions">
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Enviar')); ?>
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Borrar')); ?>
        </div>

<?php $this->endWidget(); ?>