<?php
/* @var $this DocentesController */
/* @var $model Docentes */

$this->breadcrumbs=array(
	'Docentes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Docentes', 'url'=>array('index')),
	array('label'=>'Create Docentes', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('docentes-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Docentes</h1>

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
	'id'=>'docentes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'pk',
		'nombres',
		'apellidos',
		'rut',
		'fecha_nacimiento',
		'genero',
		/*
		'direccion',
		'comuna_fk',
		'ec_fk',
		'departamento_fk',
		'telefono',
		'celular',
		'email',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
