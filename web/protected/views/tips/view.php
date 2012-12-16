<?php
/* @var $this TipsController */
/* @var $model Tips */

$this->breadcrumbs=array(
	'Tips'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List Tips', 'url'=>array('index')),
	array('label'=>'Create Tips', 'url'=>array('create')),
	array('label'=>'Update Tips', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete Tips', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tips', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Tips: <?php echo $model->titulo; ?></h1>
    <br />
    <?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
                'pk',
		'titulo',
		'contenido',
            ),
    )); ?>
</div>