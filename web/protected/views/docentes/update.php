<?php
/* @var $this DocentesController */
/* @var $model Docentes */
    if(!Yii::app()->user->isAdmin())
    {
        $this->menu=array(
            array('label'=>'Perfil', 'url'=>array('docentes/perfil', 'id'=>Yii::app()->user->name), 'active'=>true),
            array('label'=>'Actualizar Datos', 'url'=>array('update', 'id'=>Yii::app()->user->getModelUsuarioCompleto(Yii::app()->user->name)->pk)),
            array('label'=>'Publicar Oferta Laboral', 'url'=>array('ofertasLaborales/create'), 'linkOptions'=>array('confirm'=>'Estás a punto de Salir de tu Perfil, ¿Estás Seguro que deseas salir?')),
            array('label'=>'Mis Ofertas Laborales', 'url'=>array('docentes/pupdate', 'rut'=>Yii::app()->user->name)),
        );
    }
    else {
        $this->menu=array(
                array('label'=>'Lista Docentes', 'url'=>array('index')),
                array('label'=>'Crear Docente', 'url'=>array('create')),
                array('label'=>'Ver Docente', 'url'=>array('view', 'id'=>$model->pk)),
                array('label'=>'Administrar Docentes', 'url'=>array('admin')),
        );
    }
?>


<div class="contenidoPage">
    <h1>Actualizar Datos Personales</h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>