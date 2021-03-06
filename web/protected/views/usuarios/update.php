<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	$model->username=>array('view','id'=>$model->username),
	'Update',
);

$this->menu=array(
        array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
	array('label'=>'Lista de Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('pcreate')),
	array('label'=>'Ver Usuario', 'url'=>array('view', 'id'=>$model->username)),
);
?>
<div class="contenidoPage">
    <h1>Actualizar Usuario: <?php echo Yii::app()->user->getRut($model->username); ?></h1>
    <br/>
    <div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'usuarios-validation',
            'enableAjaxValidation'=>false,
            'htmlOptions' => array('enctype' => 'multipart/form-data')
    )); ?>

     <?php echo $form->errorSummary($model); ?>

        <div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx($model,'Rut: <span class="required">*</span>'); ?>
                    <p class="hint">
                    </p>
                    <?php echo $form->textField($model,'username',array('id'=>'rut_demo_int', 'name'=>'rut_demo_int', 'required'=>'required', 'size'=>50)); ?>
                    <?php echo $form->error($model,'username'); ?>
                </div>
                <div class="columna">
                    <?php echo CHtml::image('images/cruz.gif','Error',array('id'=>'cruz_error')); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx($model,'contraseña: <span class="required">*</span>'); ?>
                    <p class="hint">
                    </p>
                    <?php echo $form->passwordField($model,'password',array('size'=>30, 'maxlength'=>40, 'required'=>'required')); ?>
                    <?php echo $form->error($model,'password'); ?>
                </div>
                <div class="columna">
                </div>
            </div>
        </div>
        <?php 
            if(Yii::app()->user->isAdmin())
            {
        ?>
        <div class="row">
            <div class="contenido">
                <div class="columna">
                    <?php echo $form->labelEx($model,'roles'); ?>
                    <p class="hint">
                    </p>
                    <input type="checkbox" name="admin" <?php if (Yii::app()->user->rutIsAdmin($model->username)) { echo 'checked="checked"'; } ?> />Administrador
                    <input type="checkbox" name="docente" <?php if (Yii::app()->user->rutIsDocente($model->username)) { echo 'checked="checked"'; } ?> />Docente
                    <input type="checkbox" name="empresa" <?php if (Yii::app()->user->rutIsEmpresa($model->username)) { echo 'checked="checked"'; } ?> />Empresa
                    <input type="checkbox" name="estudiante" <?php if (Yii::app()->user->rutIsEstudiante($model->username)) { echo 'checked="checked"'; } ?> />Estudiante
                    <?php echo $form->error($model,'roles'); ?>
                </div>
                <div class="columna">
                </div>
            </div>
        </div>
        <?php
         }
        ?>
        <br/>
        <div class="form-actions">
                <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Enviar')); ?>
                <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Borrar')); ?>
       </div>

    <?php $this->endWidget(); ?>
    </div>
</div>