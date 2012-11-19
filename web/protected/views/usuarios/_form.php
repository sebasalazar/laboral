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

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>20,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
        <?php
            if($tipoUsuario == 3) //Tipo de usuario "docente"
            {
        ?>
                <div class="row">
                        <?php echo $form->labelEx(Docentes::model(),'Nombres: '); ?>
                        <?php echo $form->textField(Docentes::model(),'nombres'); ?>
                        <?php echo $form->error(Docentes::model(),'nombres'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Docentes::model(),'Apellidos: '); ?>
                        <?php echo $form->textField(Docentes::model(),'apellidos'); ?>
                        <?php echo $form->error(Docentes::model(),'apellidos'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Docentes::model(),'Fecha de Nacimiento: '); ?>
                        <?php echo $form->dateField(Docentes::model(),'fecha_nacimiento'); ?>
                        <?php echo $form->error(Docentes::model(),'fecha_nacimiento'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Docentes::model(),'Genero: '); ?>
                        <?php echo $form->radioButtonList(Docentes::model(),'genero',array('F'=>'Femenino','M'=>'Masculino'),array('separator'=>'  ', 'labelOptions'=>array('style'=>'display:inline'))); ?>
                        <?php echo $form->error(Docentes::model(),'genero'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Docentes::model(),'Direccion: '); ?>
                        <?php echo $form->textArea(Docentes::model(),'direccion',array('size'=>255,'maxlength'=>255)); ?>
                        <?php echo $form->error(Docentes::model(),'direccion'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Docentes::model(),'Comuna: '); ?>
                        <?php 
                              $datos = CHtml::listData(Comunas::model()->findAll(),'pk','nombre');
                              echo $form->DropDownList(Docentes::model(),'comuna_id',$datos, array('empty'=>'Seleccione una Comuna'));
                        ?>
                        <?php echo $form->error(Docentes::model(),'comuna_id'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Docentes::model(),'Departamentos: '); ?>
                        <?php 
                              $datos = CHtml::listData(Departamentos::model()->findAll(),'pk','departamento');
                              echo $form->DropDownList(Docentes::model(),'departamento_fk',$datos, array('empty'=>'Seleccione un Departamento'));
                        ?>
                        <?php echo $form->error(Docentes::model(),'departamento_fk'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Docentes::model(),'Estado Civil: '); ?>
                        <?php 
                              $datos = CHtml::listData(EstadosCiviles::model()->findAll(),'pk','estado');
                              echo $form->DropDownList(Docentes::model(),'ec_fk',$datos, array('empty'=>'Seleccione un Estado Civil'));
                        ?>
                        <?php echo $form->error(Docentes::model(),'ec_fk'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Docentes::model(),'Celular: '); ?>
                        <?php echo $form->textField(Docentes::model(),'celular'); ?>
                        <?php echo $form->error(Docentes::model(),'celular'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Docentes::model(),'Telefono: '); ?>
                        <?php echo $form->textField(Docentes::model(),'telefono'); ?>
                        <?php echo $form->error(Docentes::model(),'telefono'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx(Docentes::model(),'Email: '); ?>
                        <?php echo $form->textField(Docentes::model(),'email'); ?>
                        <?php echo $form->error(Docentes::model(),'email'); ?>
                </div>
        <?php
            }
        ?>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->