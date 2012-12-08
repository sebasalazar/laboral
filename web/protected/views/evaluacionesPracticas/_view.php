<?php
/* @var $this EvaluacionesPracticasController */
/* @var $data EvaluacionesPracticas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pk')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pk), array('view', 'id'=>$data->pk)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estudiant_fk')); ?>:</b>
	<?php echo CHtml::encode($data->estudiant_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('encar_practicas_fk')); ?>:</b>
	<?php echo CHtml::encode($data->encar_practicas_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargo_asignado')); ?>:</b>
	<?php echo CHtml::encode($data->cargo_asignado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conocimientos_demostrados')); ?>:</b>
	<?php echo CHtml::encode($data->conocimientos_demostrados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eficacia')); ?>:</b>
	<?php echo CHtml::encode($data->eficacia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grado_cumplimiento')); ?>:</b>
	<?php echo CHtml::encode($data->grado_cumplimiento); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('puntualidad_respeto')); ?>:</b>
	<?php echo CHtml::encode($data->puntualidad_respeto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('integracion_adaptacion')); ?>:</b>
	<?php echo CHtml::encode($data->integracion_adaptacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('responsabilidad_superacion')); ?>:</b>
	<?php echo CHtml::encode($data->responsabilidad_superacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('capacidades_personales')); ?>:</b>
	<?php echo CHtml::encode($data->capacidades_personales); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iniciativa_creativi_improvi')); ?>:</b>
	<?php echo CHtml::encode($data->iniciativa_creativi_improvi); ?>
	<br />

	*/ ?>

</div>