<?php
/* @var $this PracticasController */
/* @var $data Practicas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pk')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pk), array('view', 'id'=>$data->pk)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empresa_fk')); ?>:</b>
	<?php echo CHtml::encode($data->empresa_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('encargado_fk')); ?>:</b>
	<?php echo CHtml::encode($data->encargado_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area_practica_fk')); ?>:</b>
	<?php echo CHtml::encode($data->area_practica_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inicio_practica')); ?>:</b>
	<?php echo CHtml::encode($data->inicio_practica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fin_practica')); ?>:</b>
	<?php echo CHtml::encode($data->fin_practica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horario_fk')); ?>:</b>
	<?php echo CHtml::encode($data->horario_fk); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('remuneracion')); ?>:</b>
	<?php echo CHtml::encode($data->remuneracion); ?>
	<br />

	*/ ?>

</div>