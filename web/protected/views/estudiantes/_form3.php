<?php
/* @var $this EstudiantesController */
/* @var $model Estudiantes */
/* @var $form CActiveForm */
?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/tablaDinamica/estilo.css');
      Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/css/tablaDinamica/manipulacion.js');
      Yii::app()->clientScript->registerCoreScript('jquery'); 
      Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/tablaDinamica/estilosFormWizard.css');
      Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/css/tablaDinamica/formToWizard.js');
      Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/modernizr.js'); 
?>
    <script src="js/modernizr.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#estudiantes-form").formToWizard({ submitButton: 'yt0' }) 
        });
    </script>
        <script type="text/javascript">
function validateEmail($email) {
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	if( !emailReg.test( $email ) ) {
		return false;
	} else {
		return true;
	}
}
       </script>     
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estudiantes-form',
        'method'=>'GET',
	'enableAjaxValidation'=>false,
)); ?>
    
    
   

<div class="centrar1">
    
     <fieldset>
         <legend>Informaci&oacute;n</legend>
       <?php 
        $this->widget('bootstrap.widgets.TbDetailView', array(
            'data'=>$model,
            'attributes'=>array(
                array(
                   'label'=>'Nombre:',
                   'value'=>$model->nombres . ' ' . $model->apellidos,
                 ),
                array(
                   'label'=>'Rut:',
                   'value'=>$model->rut,
                 ),
                 array(
                   'label'=>'Fecha nacimiento:',
                   'value'=>Yii::app()->dateFormatter->format("d MMMM y",strtotime($model->fecha_nacimiento)),
                 ),
                array(
                   'label'=>'Email:',
                   'value'=>$model->email,
                 ),
                array('label'=>'Estado civil',
                    'value'=>$model->ecFk->estado,
                 ),
		array(
                    'label'=>'Direccion:',
                    'value'=>$model->direccion . ', ' . $model->comunaFk->nombre,
                ),
                array(
                    'label'=>'Carrera:',
                    'value'=>$model->carreraFk->nombre_carrera,
                ),
                 array(
                   'label'=>'Telefono fijo:',
                   'value'=>$model->telefono,
                 ),
                array(
                   'label'=>'Telefono Movil:',
                   'value'=>$model->celular,
                 ),
		
            ),
        ));
?>
    </fieldset>
    

</div>

<div id="divContenedor">
        <div id="divContenedorTabla">
    <fieldset>
        <legend>Educación Estudiante</legend>
            <table align="center" width="450" name="tablaEducacion" id="tablaEducacion">
                <caption>Educaci&oacute;n</caption>
                <thead>
                    <tr>
                        <th>Nombre Instituci&oacute;n</th>
                        <th>Carrera</th>
                        <th>Año inicio</th>
                        <th>Año fin</th>
                        <th width="22">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $form->textField(Educacion::model(), '[]nombre_institucion', array('class'=>'clsAnchoTotal','required'=>'required','value'=>'Nombre Instuticion')); ?></td>
                        <td><?php echo $form->textField(Educacion::model(), '[]carrera', array('class'=>'clsAnchoTotal','required'=>'required','value'=>'Estudio')); ?></td>
                         <td><?php echo $form->textField(Educacion::model(), '[]inicio', array('class'=>'clsAnchoTotal','style'=>'width:30px','maxlength'=>"4",'required'=>'required','value'=>'Año')); ?></td>
                        <td><?php echo $form->textField(Educacion::model(), '[]fin', array('class'=>'clsAnchoTotal','style'=>'width:30px','maxlength'=>"4",'required'=>'required','value'=>'Año')); ?></td>
                        <td align="right"><input type="button" value="-" class="clsEliminarFila"></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                 <td colspan="4" align="center">   
                   <div class="clsAgregarFila">
                            <?php $this->widget('bootstrap.widgets.TbButton', array(
                                                                                    'label'=>'Agregar educación',
                                                                                    'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
                                                                                    'size'=>'null', // null, 'large', 'small' or 'mini'
                                                                                          
                                                                                )); ?>
                                </div>
                </td>
                    </tr>
                </tfoot>
            </table>
    </fieldset>

    <fieldset>
        <legend>Experiencias Laborales</legend>
         <table align="center" width="450">
                <caption>Experiencia(s) Laborale(s)</caption>
                <thead>
                    <tr>
                        <th>Descripci&oacute;n</th>
                        <th>Referencias</th>
                        <th>Email</th>
                        <th>Año inicio</th>
                        <th>Año fin</th>
                        <th width="22">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $form->textField(Experiencias::model(), '[]descripcion', array('class'=>'clsAnchoTotal','value'=>'Sin experiencia')); ?></td>
                        <td><?php echo $form->textField(Experiencias::model(), '[]referencia', array('class'=>'clsAnchoTotal')); ?></td>
                        <td><?php echo $form->textField(Experiencias::model(), '[]email', array('class'=>'clsAnchoTotal')); ?></td>
                        <td><?php echo $form->textField(Experiencias::model(), '[]inicio', array('class'=>'clsAnchoTotal','style'=>'width:30px','maxlength'=>"4")); ?></td>
                        <td><?php echo $form->textField(Experiencias::model(), '[]fin', array('class'=>'clsAnchoTotal','style'=>'width:30px','maxlength'=>"4")); ?></td>
                        <td align="right"><input type="button" value="-" class="clsEliminarFila"></td>
                    </tr>
                </tbody>
                <tfoot>
                      <tr>
                 <td colspan="4" align="center">   
                   <div class="clsAgregarFilaExperiencia">
                            <?php $this->widget('bootstrap.widgets.TbButton', array(
                                                                                    'label'=>'Agregar nueva experiencia',
                                                                                    'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
                                                                                    'size'=>'null', // null, 'large', 'small' or 'mini'
                                                                                          
                                                                                )); ?>
                                </div>
                </td>
                </tfoot>
            </table>
        </fieldset>
    <fieldset>
        <legend>Formaci&oacute;n complementaria</legend>
            <table align="center" width="450">
                <caption>Formaci&oacute;n complementaria</caption>
                <thead>
                    <tr>
                        <th>Nombre Curso y/o formaci&oacute;n</th>
                        <th>Instituci&oacute;n</th>
                        <th>Año formaci&oacute;n</th>
                        <th>Año fin</th>
                        <th width="22">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $form->textField(FormacionComplementaria::model(), '[]nombre_formacion', array('class'=>'clsAnchoTotal','value'=>'-')); ?></td>
                        <td><?php echo $form->textField(FormacionComplementaria::model(), '[]institucion', array('class'=>'clsAnchoTotal')); ?></td>
                        <td><?php echo $form->textField(FormacionComplementaria::model(), '[]anio_formacion_complementaria', array('class'=>'clsAnchoTotal','style'=>'width:30px','maxlength'=>"4")); ?></td>
                        <td align="right"><input type="button" value="-" class="clsEliminarFila"></td>     
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                           <td colspan="4" align="center">   
                                <div class="clsAgregarFilaComplementaria">
                                    <?php $this->widget('bootstrap.widgets.TbButton', array(
                                                                                    'label'=>'Agregar formación complementaria',
                                                                                    'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
                                                                                    'size'=>'null', // null, 'large', 'small' or 'mini'
                                                                                          
                                                                                )); ?>
                                </div>
                            </td>
                    </tr>
                </tfoot>
            </table>
    </fieldset>
    <fieldset>
        <legend>Sobre mi...</legend>
            <?php echo $form->labelEx(Curriculums::model(),'Presentación'); ?>
            <?php echo $form->textArea(Curriculums::model(), 'presentacion', array('class'=>'span8', 'rows'=>5, 'maxlength'=>'250','required'=>'required')); ?>
    </fieldset>
        </div>
    </div>	
    
    <div class="form-actions">
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Guardar','htmlOptions'=>array('id'=>'yt0'),)); ?>
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
