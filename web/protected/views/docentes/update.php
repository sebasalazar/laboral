<?php
/* @var $this DocentesController */
/* @var $model Docentes */

    $this->menu=array(
        array('label'=>'Perfil', 'url'=>array('docentes/perfil', 'id'=>Yii::app()->user->name), 'active'=>true),
	array('label'=>'Actualizar Datos', 'url'=>array('update', 'id'=>Yii::app()->user->getModelUsuarioCompleto(Yii::app()->user->name)->pk)),
	array('label'=>'Publicar Oferta Laboral', 'url'=>array('ofertasLaborales/create'), 'linkOptions'=>array('confirm'=>'Estás a punto de Salir de tu Perfil, ¿Estás Seguro que deseas salir?')),
        array('label'=>'Mis Ofertas Laborales', 'url'=>array('docentes/pupdate', 'rut'=>Yii::app()->user->name)),
    );
?>


<div class="contenidoPage">
    <h1>Actualizar Datos Personales</h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>