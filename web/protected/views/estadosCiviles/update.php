<?php
/* @var $this EstadosCivilesController */
/* @var $model EstadosCiviles */

$this->breadcrumbs=array(
	'Estados Civiles'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista Estados Civiles', 'url'=>array('index')),
	array('label'=>'Crear Estado Civil', 'url'=>array('create')),
	array('label'=>'Ver Estado Civil', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Administrar Estados Civiles', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
<h1>Actualizar Estado Civil: <?php echo $model->estado; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>