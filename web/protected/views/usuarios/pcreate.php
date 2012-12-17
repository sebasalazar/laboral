<?php
            $DocenteImagen = CHtml::image('images/ProfesorNegro.png','Docente',array('width'=>179,'height'=>179,'class'=>'registro'));
            $UsuarioImagen = CHtml::image('images/UsuarioNegro.png','Usuario',array('width'=>179,'height'=>179,'class'=>'registro'));
            $EmpresaImagen = CHtml::image('images/EmpresaNegro.png','Empresa',array('width'=>179,'height'=>179,'class'=>'registro'));
?>

<div class="contenido-carrusel">
    <br /><br />
    <?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
        'heading'=>'¡Bienvenido!',
    )); ?>
        <br />
        <p>
            Para ser parte de la bolsa de empleos de la Universidad Tecnlógica Metropolitana, solo deber seguir los siguientes pasos:
        </p>
        
        <p>
            Paso 1: Selecciona que rol cumples en la Universidad.
        </p>
        
        <div class="centrar1">
        <?php echo CHtml::link($UsuarioImagen,array('usuarios/create', 'tipo'=>1),array('rel'=>'tooltip', 'title'=>'Estudiante')); ?>
        <?php echo CHtml::link($EmpresaImagen,array('usuarios/create','tipo'=>2),array('rel'=>'tooltip', 'title'=>'Empresas')); ?>
        <?php echo CHtml::link($DocenteImagen,array('usuarios/create','tipo'=>3),array('rel'=>'tooltip', 'title'=>'Docente')); ?>
        </div>
    <?php $this->endWidget(); ?>
</div>
