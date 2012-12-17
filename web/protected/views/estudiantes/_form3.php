<?php
/* @var $this EstudiantesController */
/* @var $model Estudiantes */
/* @var $form CActiveForm */
?>

<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/tablaDinamica/estilo.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/css/tablaDinamica/manipulacion.js'); ?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estudiantes-form',
	'enableAjaxValidation'=>false,
)); ?>
    
    
    <div class="titulo">
<h1>Datos Curriculum</h1>
</div>
<br />
<div class="centrar1">
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
                array(
                   'label'=>'Estado Civil:',
                   'value'=>$model->ecFk->descripcion,
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
</div>

<div id="divContenedor">
        <div id="divContenedorTabla">
            <table align="center" width="450">
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
                        <td><input type="text" class="clsAnchoTotal"></td>
                        <td><input type="text" class="clsAnchoTotal"></td>
                        <td><input type="date" class="clsAnchoTotal" style="width:30px" maxlength="4"></td>
                        <td><input type="date" class="clsAnchoTotal" style="width:30px" maxlength="4"></td>
                        <td align="right"><input type="button" value="-" class="clsEliminarFila"></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" align="right">
                            <input type="button" value="Agregar una fila" class="clsAgregarFila">                        
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>


	
    
    <div class="form-actions">
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Guardar')); ?>
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Borrar')); ?>
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
