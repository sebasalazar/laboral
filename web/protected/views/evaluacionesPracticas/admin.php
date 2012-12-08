<?php
/* @var $this EvaluacionesPracticasController */
/* @var $model EvaluacionesPracticas */

$this->breadcrumbs=array(
	'Evaluaciones Practicases'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List EvaluacionesPracticas', 'url'=>array('index')),
	array('label'=>'Create EvaluacionesPracticas', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('evaluaciones-practicas-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Evaluaciones Practicases</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'evaluaciones-practicas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'pk',
		'estudiant_fk',
		'encar_practicas_fk',
		'cargo_asignado',
		'conocimientos_demostrados',
		'eficacia',
		/*
		'grado_cumplimiento',
		'puntualidad_respeto',
		'integracion_adaptacion',
		'responsabilidad_superacion',
		'capacidades_personales',
		'iniciativa_creativi_improvi',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
