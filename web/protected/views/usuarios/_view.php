<?php
/* @var $this UsuariosController */
/* @var $data Usuarios */
?>

<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode(Yii::app()->user->getRut($data->username)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('roles')); ?>:</b>
	<?php echo CHtml::encode($data->roles); ?>
	<br />


</div>