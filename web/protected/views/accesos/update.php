<?php
/* @var $this AccesosController */
/* @var $model Accesos */

$this->breadcrumbs=array(
	'Accesoses'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Accesos', 'url'=>array('index')),
	array('label'=>'Crear Acceso', 'url'=>array('create')),
	array('label'=>'Ver Acceso', 'url'=>array('view', 'id'=>$model->pk)),
	array('label'=>'Administrar Accesos', 'url'=>array('admin')),
);
?>
<div class="contenidoPage">

<h1>Actualizar Acceso <?php echo $model->pk; ?></h1>
 <br />
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>