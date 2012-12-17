<?php
/* @var $this PostulacionesPracticasController */
/* @var $data PostulacionesPracticas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pk')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pk), array('view', 'id'=>$data->pk)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_postulacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_postulacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('practica_fk')); ?>:</b>
	<?php echo CHtml::encode($data->practica_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estudiante_fk')); ?>:</b>
	<?php echo CHtml::encode($data->estudiante_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('motivo')); ?>:</b>
	<?php echo CHtml::encode($data->motivo); ?>
	<br />


</div>