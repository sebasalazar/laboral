<?php
/* @var $this EstudiantesController */
/* @var $model Estudiantes */
/* @var $form CActiveForm */
?>

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


	
    
    <div class="form-actions">
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Guardar')); ?>
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Borrar')); ?>
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
