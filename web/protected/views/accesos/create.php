<?php
/* @var $this AccesosController */
/* @var $model Accesos */

$this->breadcrumbs=array(
	'Accesoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Accesos', 'url'=>array('index')),
	array('label'=>'Administrar Accesos', 'url'=>array('admin')),
);
?>
<div class="contenidoPage">
<h1>Crear Acceso</h1>
 <br />
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>