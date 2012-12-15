<?php
/* @var $this EmpresasController */
/* @var $model Empresas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empresas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(Empresas::model(),'Rut: <span class="required">*</span>'); ?>
                    <?php echo $form->textField(Empresas::model(),'rut'); ?>
                    <?php echo $form->error(Empresas::model(),'rut'); ?>
                </div>
            </div>
	</div>

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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->