<?php

$this->menu=array(
	array('label'=>'Actualizar datos personales', 'url'=>array('update', 'id'=>Yii::app()->user->getModelUsuarioCompleto(Yii::app()->user->name)->pk)),
	array('label'=>'Publicar Ofertas de Trabajo', 'url'=>array('create')),
        array('label'=>'Ofertas de Trabajo Publicadas', 'url'=>array('create')),
);

?>
