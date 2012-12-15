<?php
/* @var $this EncargadosPracticasController */
/* @var $model EncargadosPracticas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'encargados-practicas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(EncargadosPracticas::model(),'Rut: <span class="required">*</span>'); ?>
                    <p class="hint">
                        Nota: sin puntos ni guion, ejemplo: 171234560
                    </p>
                    <?php echo $form->textField(EncargadosPracticas::model(),'rut_epracti'); ?>
                    <?php echo $form->error(EncargadosPracticas::model(),'rut_epracti'); ?>
                </div>
            </div>
	</div>

	<div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(EncargadosPracticas::model(),'Nombre: <span class="required">*</span>'); ?>
                    <p class="hint">
                        Ejemplo: Pablo
                    </p>
                    <?php echo $form->textField(EncargadosPracticas::model(),'nombre_encargado',array('size'=>60,'maxlength'=>255)); ?>
                    <?php echo $form->error(EncargadosPracticas::model(),'nombre_encargado'); ?>
                </div>
            </div>
	</div>

	<div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(EncargadosPracticas::model(),'Apellidos: <span class="required">*</span>'); ?>
                    <p class="hint">
                        Ejemplo: Rosas Pérez
                    </p>
                    <?php echo $form->textField(EncargadosPracticas::model(),'apellido_encargado',array('size'=>60,'maxlength'=>255)); ?>
                    <?php echo $form->error(EncargadosPracticas::model(),'apellido_encargado'); ?>
                </div>
            </div>
	</div>

	<div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(EncargadosPracticas::model(),'Empresa: '); ?>
                    <?php
                        $datos = CHtml::listData(Empresas::model()->findAll(),'pk','nombre');
                        echo $form->DropDownList(EncargadosPracticas::model(),'empresa_fk',$datos,array('empty'=>'Seleccione un Empresa'));
                    ?>
                    <?php echo $form->error(EncargadosPracticas::model(),'empresa_fk'); ?>
                </div>
            </div>
	</div>

	<div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(EncargadosPracticas::model(),'Área de practica: '); ?>
                    <?php
                        $datos = CHtml::listData(Rubros::model()->findAll(),'pk','rubro');
                        echo $form->DropDownList(EncargadosPracticas::model(),'area_practica_fk',$datos,array('empty'=>'Seleccione un Área'));
                    ?>
                    <?php echo $form->error(EncargadosPracticas::model(),'area_practica_fk'); ?>
                </div>
            </div>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->