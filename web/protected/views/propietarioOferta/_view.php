<?php
/* @var $this PropietarioOfertaController */
/* @var $data PropietarioOferta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pk')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pk), array('view', 'id'=>$data->pk)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oferta_laboral_fk')); ?>:</b>
	<?php echo CHtml::encode($data->oferta_laboral_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rut_propietario')); ?>:</b>
	<?php echo CHtml::encode($data->rut_propietario); ?>
	<br />


</div>