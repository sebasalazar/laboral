<?php
/* @var $this EncargadosPracticasController */
/* @var $data EncargadosPracticas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pk')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pk), array('view', 'id'=>$data->pk)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rut_epracti')); ?>:</b>
	<?php echo CHtml::encode($data->rut_epracti); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_encargado')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_encargado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido_encargado')); ?>:</b>
	<?php echo CHtml::encode($data->apellido_encargado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empresa_fk')); ?>:</b>
	<?php echo CHtml::encode($data->empresa_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area_practica_fk')); ?>:</b>
	<?php echo CHtml::encode($data->area_practica_fk); ?>
	<br />


</div>