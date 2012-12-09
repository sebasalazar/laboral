<?php
/* @var $this PostulacionesController */
/* @var $data Postulaciones */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pk')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pk), array('view', 'id'=>$data->pk)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oferta_laboral_fk')); ?>:</b>
	<?php echo CHtml::encode($data->oferta_laboral_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estudiante_fk')); ?>:</b>
	<?php echo CHtml::encode($data->estudiante_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />


</div>