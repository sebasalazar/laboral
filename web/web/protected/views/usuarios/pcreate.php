

<div class="centrar1">
<br /><br />
<?php
    $DocenteImagen = CHtml::image('images/ProfesorNegro.png','Bolsa de Trabajo',array('width'=>179,'height'=>179,'class'=>'registro'));
    $UsuarioImagen = CHtml::image('images/UsuarioNegro.png','Bolsa de Trabajo',array('width'=>179,'height'=>179,'class'=>'registro'));
    $EmpresaImagen = CHtml::image('images/EmpresaNegro.png','Bolsa de Trabajo',array('width'=>179,'height'=>179,'class'=>'registro'));
?>

<?php   //Tipo 1: Alumno
        //Tipo 2: Empresa 
        //Tipo 3: Docente 
?>
<?php echo CHtml::link($UsuarioImagen,array('usuarios/create', 'tipo'=>1)); ?>
<?php echo CHtml::link($EmpresaImagen,array('usuarios/create','tipo'=>2));; ?>
<?php echo CHtml::link($DocenteImagen,array('usuarios/create','tipo'=>3));; ?>
<br /><br />
</div>