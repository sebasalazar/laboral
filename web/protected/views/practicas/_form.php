<?php
/* @var $this PracticasController */
/* @var $model Practicas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'practicas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>
        
   <div class="contenido2">
          <div class="fila">     
    <div class="columna columna_50">
	<div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(Practicas::model(),'Empresa: <span class="required">*</span>'); ?>
                    <?php
                        $datos = CHtml::listData(Empresas::model()->findAll(),'pk','nombre');
                        echo $form->DropDownList(Practicas::model(),'empresa_fk',$datos,array('empty'=>'Seleccione un Empresa','required'=>'required'));
                    ?>
                    <?php echo $form->error(Practicas::model(),'empresa_fk'); ?>
                </div>
            </div>
	</div>

	<div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(Practicas::model(),'Encargado de Empresa: <span class="required">*</span>'); ?>
                    <?php
                        $datos = CHtml::listData(EncargadosEmpresas::model()->findAll(),'pk','nombre');
                        echo $form->DropDownList(Practicas::model(),'encargado_fk',$datos,array('empty'=>'Seleccione un Encargado de la Empresa','required'=>'required'));
                    ?>
                    <?php echo $form->error(Practicas::model(),'encargado_fk'); ?>
                </div>
            </div>
	</div>

	<div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(Practicas::model(),'Área de Práctica: <span class="required">*</span>'); ?>
                    <?php
                        $datos = CHtml::listData(Rubros::model()->findAll(),'pk','rubro');
                        echo $form->DropDownList(Practicas::model(),'area_practica_fk',$datos,array('empty'=>'Seleccione un Área','required'=>'required'));
                    ?>
                    <?php echo $form->error(Practicas::model(),'area_practica_fk'); ?>
                </div>
            </div>
	</div>
    </div>
        <div class="columna columna_50">
	<div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(Practicas::model(),'Inicio de Prácticas: <span class="required">*</span>'); ?>
                    <?php
                        Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
                                    $this->widget('CJuiDateTimePicker',array(
                                        'model'=>$model, //Model object
                                        'attribute'=>'inicio_practica', //attribute name
                                                'mode'=>'date', //use "time","date" or "datetime" (default)
                                        'options'=>array(
                                            'dateFormat'=>'dd-mm-yy',
                                            'changeYear'=>true,
                                            'changeMonth'=>true,
                                            'yearRange'=>'1920',
                                        ) // jquery plugin options
                                    ));
                                
                    ?>
                    <?php echo $form->error(Practicas::model(),'inicio_practica'); ?>
                </div>
            </div>
	</div>

	<div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(Practicas::model(),'Fin de Prácticas: <span class="required">*</span>'); ?>
                    <?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
                                    $this->widget('CJuiDateTimePicker',array(
                                        'model'=>$model, //Model object
                                        'attribute'=>'fin_practica', //attribute name
                                                'mode'=>'date', //use "time","date" or "datetime" (default)
                                        'options'=>array(
                                            'dateFormat'=>'dd-mm-yy',
                                            'changeYear'=>true,
                                            'changeMonth'=>true,
                                            'yearRange'=>'1920',
                                        ) // jquery plugin options
                                    ));
                                ?>
                    <?php echo $form->error(Practicas::model(),'fin_practica'); ?>
                </div>
            </div>
	</div>

	<div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(Practicas::model(),'Horario: <span class="required">*</span>'); ?>
                    <?php
                        $datos = CHtml::listData(Jornadas::model()->findAll(),'pk','jornada');
                        echo $form->DropDownList(Practicas::model(),'horario_fk',$datos,array('empty'=>'Seleccione un Horario','required'=>'required'));
                    ?>
                    <?php echo $form->error(Practicas::model(),'horario_fk'); ?>
                </div>
            </div>
	</div>
        
	<div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(Practicas::model(),'Remuneración: '); ?>
                    <?php echo $form->textField(Practicas::model(),'remuneracion'); ?>
                    <?php echo $form->error(Practicas::model(),'remuneracion'); ?>
                </div>
            </div>
	</div>
        </div>
          </div>
   </div> 
       
	<div class="form-actions">
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Enviar')); ?>
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Borrar')); ?>
        </div>
       
<?php $this->endWidget(); ?>

</div><!-- form -->