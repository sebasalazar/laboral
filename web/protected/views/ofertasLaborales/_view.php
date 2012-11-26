<?php
/* @var $this OfertasLaboralesController */
/* @var $data OfertasLaborales */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pk')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pk), array('view', 'id'=>$data->pk)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empresa_fk')); ?>:</b>
	<?php echo CHtml::encode($data->empresa_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rubro_fk')); ?>:</b>
	<?php echo CHtml::encode($data->rubro_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivel_estudio_fk')); ?>:</b>
	<?php echo CHtml::encode($data->nivel_estudio_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('renta')); ?>:</b>
	<?php echo CHtml::encode($data->renta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vacantes')); ?>:</b>
	<?php echo CHtml::encode($data->vacantes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plazo')); ?>:</b>
	<?php echo CHtml::encode($data->plazo); ?>
	<br />

	<?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ubicacion')); ?>:</b>
	<?php echo CHtml::encode($data->ubicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargo')); ?>:</b>
	<?php echo CHtml::encode($data->cargo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_publicacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_publicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beneficios')); ?>:</b>
	<?php echo CHtml::encode($data->beneficios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jornada_fk')); ?>:</b>
	<?php echo CHtml::encode($data->jornada_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contrato_fk')); ?>:</b>
	<?php echo CHtml::encode($data->contrato_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />

</div>