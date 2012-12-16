<?php
/* @var $this EvaluacionesPracticasController */
/* @var $model EvaluacionesPracticas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'evaluaciones-practicas-form',
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
                    <?php echo $form->labelEx(EvaluacionesPracticas::model(),'Practicante: '); ?>
                    <?php
                        $datos = CHtml::listData(Estudiantes::model()->findAll(),'pk','nombres');
                        echo $form->DropDownList(EvaluacionesPracticas::model(),'estudiant_fk',$datos,array('empty'=>'Seleccione un Practicante', 'required'=>'required'));
                    ?>
                    <?php echo $form->error(EvaluacionesPracticas::model(),'estudiant_fk'); ?>
                </div>
            </div>
	</div>

	<div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(EvaluacionesPracticas::model(),'Encargado de Practica: '); ?>
                    <?php
                        $datos = CHtml::listData(EncargadosPracticas::model()->findAll(),'pk','nombre_encargado');
                        echo $form->DropDownList(EvaluacionesPracticas::model(),'encar_practicas_fk',$datos,array('empty'=>'Seleccione un Encargado','required'=>'required'));
                    ?>
                    <?php echo $form->error(EvaluacionesPracticas::model(),'encar_practicas_fk'); ?>
                </div>
            </div>
	</div>

	<div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(EvaluacionesPracticas::model(),'Cargo Asignado: '); ?>
                    <p class="hint">
                        Ejemplo: Desarrollador web.
                    </p>
                    <?php echo $form->textField(EvaluacionesPracticas::model(),'cargo_asignado',array('size'=>60,'maxlength'=>255,'required'=>'required')); ?>
                    <?php echo $form->error(EvaluacionesPracticas::model(),'cargo_asignado'); ?>
                </div>
            </div>
	</div>
           
	<div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(EvaluacionesPracticas::model(),'Conocimientos técnicos demostrados: '); ?>
                    <?php 
                        $datos = array('0','1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16');
                        echo $form->DropDownList(EvaluacionesPracticas::model(),'conocimientos_demostrados',$datos,array('empty'=>'Seleccione un valor','required'=>'required')); 
                    ?>
                    <?php echo $form->error(EvaluacionesPracticas::model(),'conocimientos_demostrados'); ?>
                </div>
            </div>
	</div>

	<div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(EvaluacionesPracticas::model(),'Eficacia para llegar a resultados concretos en su labor: '); ?>
                    <?php
                        $datos = array('0','1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16');
                         echo $form->DropDownList(EvaluacionesPracticas::model(),'eficacia',$datos,array('empty'=>'Seleccione un valor','required'=>'required')); 
                    ?>
                    <?php echo $form->error(EvaluacionesPracticas::model(),'eficacia'); ?>
                </div>
            </div>
	</div>
        
	<div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(EvaluacionesPracticas::model(),'Grado de cumplimiento y dedicación: '); ?>
                    <?php
                        $datos = array('0','1','2','3','4','5','6','7','8','9','10','11','12');
                        echo $form->DropDownList(EvaluacionesPracticas::model(),'grado_cumplimiento',$datos,array('empty'=>'Seleccione un valor','required'=>'required'));
                    ?>
                    <?php echo $form->error(EvaluacionesPracticas::model(),'grado_cumplimiento'); ?>
                </div>
            </div>
	</div>
    </div>
          
       <div class="columna columna_50">
	<div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(EvaluacionesPracticas::model(),'Puntualidad y respeto a las normas establecidas: '); ?>
                    <?php 
                        $datos = array('0','1','2','3','4','5','6','7','8','9','10');
                        echo $form->DropDownList(EvaluacionesPracticas::model(),'puntualidad_respeto',$datos,array('empty'=>'Seleccione un valor','required'=>'required')); 
                    ?>
                    <?php echo $form->error(EvaluacionesPracticas::model(),'puntualidad_respeto'); ?>
                </div>
            </div>
	</div>

	<div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(EvaluacionesPracticas::model(),'Capacidad de integración y/o adaptación: '); ?>
                    <?php
                        $datos = array('0','1','2','3','4','5','6','7','8','9','10');
                        echo $form->DropDownList(EvaluacionesPracticas::model(),'integracion_adaptacion',$datos,array('empty'=>'Seleccione un valor','required'=>'required')); 
                    ?>
                    <?php echo $form->error(EvaluacionesPracticas::model(),'integracion_adaptacion'); ?>
                </div>
            </div>
	</div>

	<div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(EvaluacionesPracticas::model(),'Responsabilidad, autocrítica y superación: '); ?>
                    <?php
                        $datos = array('0','1','2','3','4','5','6','7','8','9','10','11','12','13','14');
                        echo $form->DropDownList(EvaluacionesPracticas::model(),'responsabilidad_superacion',$datos,array('empty'=>'Seleccione un valor','required'=>'required')); 
                    ?>
                    <?php echo $form->error(EvaluacionesPracticas::model(),'responsabilidad_superacion'); ?>
                </div>
            </div>
	</div>

	<div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(EvaluacionesPracticas::model(),'Personalidad, lenguaje, presencia y seguridad: '); ?>
                    <?php
                        $datos = array('0','1','2','3','4','5','6','7','8');
                        echo $form->DropDownList(EvaluacionesPracticas::model(),'capacidades_personales',$datos,array('empty'=>'Seleccione un valor','required'=>'required')); 
                    ?>
                    <?php echo $form->error(EvaluacionesPracticas::model(),'capacidades_personales'); ?>
                </div>
            </div>
	</div>

	<div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx(EvaluacionesPracticas::model(),'Iniciativa, cratividad y capacidad de improvisación: '); ?>
                    <?php
                        $datos = array('0','1','2','3','4','5','6','7','8','9','10','11','12','13','14');
                        echo $form->DropDownList(EvaluacionesPracticas::model(),'iniciativa_creativi_improvi',$datos,array('empty'=>'Seleccione un valor','required'=>'required')); 
                    ?>
                    <?php echo $form->error(EvaluacionesPracticas::model(),'iniciativa_creativi_improvi'); ?>
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