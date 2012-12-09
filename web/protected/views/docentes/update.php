<?php
/* @var $this DocentesController */
/* @var $model Docentes */

$this->breadcrumbs=array(
	'Docentes'=>array('index'),
	$model->pk=>array('view','id'=>$model->pk),
	'Update',
);
?>

<?php

$this->menu=array(
	array('label'=>'Actualizar datos personales', 'url'=>array('update', 'id'=>Yii::app()->user->getModelUsuarioCompleto(Yii::app()->user->name)->pk)),
	array('label'=>'Publicar Ofertas de Trabajo', 'url'=>array('ofertasLaborales/create')),
        array('label'=>'Ofertas de Trabajo Publicadas', 'url'=>array('')),
);

?>

<h1>Actualizar Datos Personales</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>