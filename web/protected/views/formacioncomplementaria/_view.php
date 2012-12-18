<?php
/* @var $this FormacioncomplementariaController */
/* @var $data Formacioncomplementaria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pk')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pk), array('view', 'id'=>$data->pk)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_formacion')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_formacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institucion')); ?>:</b>
	<?php echo CHtml::encode($data->institucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anio_formacion_complementaria')); ?>:</b>
	<?php echo CHtml::encode($data->anio_formacion_complementaria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('curriculum_fk')); ?>:</b>
	<?php echo CHtml::encode($data->curriculum_fk); ?>
	<br />


</div>