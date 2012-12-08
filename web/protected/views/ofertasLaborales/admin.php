<?php
/* @var $this OfertasLaboralesController */
/* @var $model OfertasLaborales */

$this->breadcrumbs=array(
	'Ofertas Laborales'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List OfertasLaborales', 'url'=>array('index')),
	array('label'=>'Create OfertasLaborales', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('ofertas-laborales-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Ofertas Laborales</h1>

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
	'id'=>'ofertas-laborales-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'pk',
		'empresa_fk',
		array(
                    'header'=>'Rubro',
                    'name'=>'rubro_fk',
                    'value' => '$data->rubroFk->rubro',
                ),
		'nivel_estudio_fk',
		'renta',
		'vacantes',
		/*
		'plazo',
		'descripcion',
		'ubicacion',
		'cargo',
		'fecha_publicacion',
		'beneficios',
		'nivel_estudios',
		'jornada_fk',
		'contrato_fk',
		'activo',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
