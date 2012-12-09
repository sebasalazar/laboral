<?php
/* @var $this EncargadosEmpresasController */
/* @var $model EncargadosEmpresas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'encargados-empresas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(EncargadosEmpresas::model(),'Empresa: <span class="required">*</span>'); ?>
                    <?php
                        $datos = CHtml::listData(Empresas::model()->findAll(),'pk','nombre');
                        echo $form->DropDownList(EncargadosEmpresas::model(),'empresa_fk',$datos,array('empty'=>'Seleccione un Empresa'));
                    ?>
                    <?php echo $form->error(EncargadosEmpresas::model(),'empresa_fk'); ?>
                </div>
            </div>
	</div>
        
        <div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(EncargadosEmpresas::model(),'Rut: <span class="required">*</span>'); ?>
                    <p class="hint">
                        Ejemplo: 6.080.693-9
                    </p>
                    <?php echo $form->textField(EncargadosEmpresas::model(),'rut_encargado',array('size'=>60,'maxlength'=>255)); ?>
                    <?php echo $form->error(EncargadosEmpresas::model(),'rut_encargado'); ?>
                </div>
            </div>
	</div>

	<div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(EncargadosEmpresas::model(),'Nombre: <span class="required">*</span>'); ?>
                    <p class="hint">
                        Ejemplo: Juan
                    </p>
                    <?php echo $form->textField(EncargadosEmpresas::model(),'nombre',array('size'=>60,'maxlength'=>255)); ?>
                    <?php echo $form->error(EncargadosEmpresas::model(),'nombre'); ?>
                </div>
            </div>
	</div>

	<div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(EncargadosEmpresas::model(),'Apellidos: <span class="required">*</span>'); ?>
                    <p class="hint">
                        Ejemplo: Soto Castilla
                    </p>
                    <?php echo $form->textField(EncargadosEmpresas::model(),'apellidos',array('size'=>60,'maxlength'=>255)); ?>
                    <?php echo $form->error(EncargadosEmpresas::model(),'apellidos'); ?>
                </div>
            </div>
	</div>

	<div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(EncargadosEmpresas::model(),'Genero: <span class="required">*</span>'); ?>
                    <p class="hint">
                        Nota: M o F
                    </p>
                    <?php echo $form->textField(EncargadosEmpresas::model(),'genero',array('size'=>1,'maxlength'=>1)); ?>
                    <?php echo $form->error(EncargadosEmpresas::model(),'genero'); ?>
                </div>
            </div>
	</div>

        <div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(EncargadosEmpresas::model(),'Dirección: <span class="required">*</span>'); ?>
                    <p class="hint">
                        Ejemplo: Av. Macul 1265
                    </p>
                    <?php echo $form->textField(EncargadosEmpresas::model(),'direccion',array('size'=>60,'maxlength'=>255)); ?>
                    <?php echo $form->error(EncargadosEmpresas::model(),'direccion'); ?>
                </div>
            </div>
	</div>
        
        <div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(EncargadosEmpresas::model(),'Comuna: <span class="required">*</span>'); ?>
                    <?php
                        $datos = CHtml::listData(Comunas::model()->findAll(),'pk','nombre');
                        echo $form->DropDownList(EncargadosEmpresas::model(),'comun_fk',$datos,array('empty'=>'Seleccione una Comuna'));
                    ?>
                    <?php echo $form->error(EncargadosEmpresas::model(),'comun_fk'); ?>
                </div>
            </div>
	</div>
        
	<div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(EncargadosEmpresas::model(),'E-mail: '); ?>
                    <p class="hint">
                        Ejemplo: ejemplo@ejemplo.com
                    </p>
                    <?php echo $form->textField(EncargadosEmpresas::model(),'email',array('size'=>60,'maxlength'=>255)); ?>
                    <?php echo $form->error(EncargadosEmpresas::model(),'email'); ?>
                </div>
            </div>
	</div>

	<div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(EncargadosEmpresas::model(),'Teléfono: <span class="required">*</span>'); ?>
                    <p class="hint">
                        Nota: Red fija o movil
                    </p>
                    <?php echo $form->textField(EncargadosEmpresas::model(),'telefono',array('size'=>50,'maxlength'=>50)); ?>
                    <?php echo $form->error(EncargadosEmpresas::model(),'telefono'); ?>
                </div>
            </div>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->