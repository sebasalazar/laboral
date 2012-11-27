<?php
/* @var $this EmpresasController */
/* @var $data Empresas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pk')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pk), array('view', 'id'=>$data->pk)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rut')); ?>:</b>
	<?php echo CHtml::encode($data->rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_represen_legal')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_represen_legal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comuna_fk')); ?>:</b>
	<?php echo CHtml::encode($data->comuna_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_postal')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_postal); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actividad')); ?>:</b>
	<?php echo CHtml::encode($data->actividad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_negocio')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_negocio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('web')); ?>:</b>
	<?php echo CHtml::encode($data->web); ?>
	<br />

	*/ ?>

</div>