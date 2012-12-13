<?php
/* @var $this CarrerasController */
/* @var $data Carreras */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pk')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pk), array('view', 'id'=>$data->pk)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_carrera')); ?>:</b>
	<?php echo CHtml::encode($data->cod_carrera); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_carrera')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_carrera); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('escuela_fk')); ?>:</b>
	<?php echo CHtml::encode($data->escuela_fk); ?>
	<br />


</div>