<?php
/* @var $this TipsController */
/* @var $model Tips */

$this->breadcrumbs=array(
	'Tips'=>array('index'),
	$model->pk,
);

if(Yii::app()->user->isAdmin())
{
    $this->menu=array(
            array('label'=>'Lista de Tips', 'url'=>array('index')),
            array('label'=>'Crear Tip', 'url'=>array('create')),
            array('label'=>'Actualizar Tip', 'url'=>array('update', 'id'=>$model->pk)),
            array('label'=>'Borrar Tip', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
            array('label'=>'Administrar Tips', 'url'=>array('admin')),
    );
}

?>

<div class="contenidoPage">
    <h1>Tips: <?php echo $model->titulo; ?></h1>
    <br />
    <?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
		'titulo',
		'contenido',
            ),
    )); ?>
</div>