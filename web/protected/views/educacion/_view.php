<?php
/* @var $this EducacionController */
/* @var $data Educacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pk')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pk), array('view', 'id'=>$data->pk)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('curriculum_fk')); ?>:</b>
	<?php echo CHtml::encode($data->curriculum_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_institucion')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_institucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('carrera')); ?>:</b>
	<?php echo CHtml::encode($data->carrera); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inicio')); ?>:</b>
	<?php echo CHtml::encode($data->inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fin')); ?>:</b>
	<?php echo CHtml::encode($data->fin); ?>
	<br />


</div>