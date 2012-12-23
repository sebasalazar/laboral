<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */



$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/assets/7b79631/Rut/jquery.Rut.js'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/modernizr.js'); ?>

<script type="text/javascript">
$(document).ready(function(){
      $('#rut_demo_int').blur(function() {
            $('#rut_demo_int').val($.Rut.formatear($('#rut_demo_int').val())+'-'+$.Rut.getDigito( $('#rut_demo_int').val()));
      });
});
</script>
<div class="contenidoPage">
<h1>Inicio de Sesión</h1>

<p>Por favor rellene el siguiente formulario para Iniciar Sesión:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'Rut: <span class="required">*</span>'); ?>
                <p class="hint">
                    <b>Sin</b> digito verificador, sin puntos ni guión.<br />
                    <b>Ejemplo</b>: 17456302                  
                </p>
		<?php echo $form->textField($model,'username',array('id'=>'rut_demo_int', 'name'=>'rut_demo_int')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Contraseña: <span class="required">*</span>'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'Recordarme'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
</div>
