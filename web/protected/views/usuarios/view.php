<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->menu=array(
	array('label'=>'List Usuarios', 'url'=>array('index')),
	array('label'=>'Create Usuarios', 'url'=>array('create')),
	array('label'=>'Update Usuarios', 'url'=>array('update', 'id'=>$model->username)),
	array('label'=>'Delete Usuarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->username),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Usuarios', 'url'=>array('admin')),
);
?>

<div class="menupanel">
    
    <?php 
        $this->widget('bootstrap.widgets.TbMenu', array(
        'type'=>'tabs', // '', 'tabs', 'pills' (or 'list')
        'stacked'=>false, // whether this is a stacked menu
        'items'=>array(
            array('label'=>'Inicio', 'url'=>array('usuarios/paneladmin')),
            array('label'=>'Datos Personales', 'items'=>array(
                                        array('label'=>'Estados Civiles', 'url'=>array('estadosCiviles/admin')),
                                        array('label'=>'Niveles de Estudios', 'url'=>array('nivelesEstudios/admin')),
                                        array('label'=>'Regiones', 'url'=>array('regiones/admin')),
                                        array('label'=>'Provincias', 'url'=>array('provincias/admin')),
                                        array('label'=>'Comunas', 'url'=>array('comunas/admin')),
            )),
            array('label'=>'Universidad', 'items'=>array(
                                        array('label'=>'Facultades', 'url'=>array('facultades/admin')),
                                        array('label'=>'Departamentos', 'url'=>array('departamentos/admin')),
                                        array('label'=>'Carreras', 'url'=>array('carreras/admin')),
                                        array('label'=>'Docentes', 'url'=>array('docentes/admin')),
                                        array('label'=>'Estudiantes', 'url'=>array('estudiantes/admin')),
            )),
            array('label'=>'Empresa', 'items'=>array(
                                        array('label'=>'Rubros', 'url'=>array('rubros/admin')),
                                        array('label'=>'Jornadas', 'url'=>array('jornadas/admin')),
                                        array('label'=>'Tipos Contratos', 'url'=>array('tiposContratos/admin')),
                                        array('label'=>'Empresas', 'url'=>array('empresas/admin')),
                                        array('label'=>'Encargados Empresas', 'url'=>array('encargadosEmpresas/admin')),
                                        array('label'=>'Encargados Practicas', 'url'=>array('encargadosPracticas/admin')),
                                        array('label'=>'Evaluaciones Practicas', 'url'=>array('evaluacionesPracticas/admin')),
            ), 'active'=>true),
            array('label'=>'Ofertas Laborales', 'items'=>array(
                                        array('label'=>'Ofertas Laborales', 'url'=>array('ofertasLaborales/admin')),
                                        array('label'=>'Postulaciones', 'url'=>array('postulaciones/admin')),
                                        array('label'=>'Practicas', 'url'=>array('practicas/admin')),
                                        array('label'=>'Propietarios Ofertas Laborales', 'url'=>array('propietarioOferta/admin')),
            )),
            
        ),
        )); 
    ?>
    
</div>

<div class="contenidoPage">
    <h1>Usuarios: <?php echo $model->username; ?></h1>
    <br />
    <?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
                    'username',
                    'password',
                    'salt',
                    'roles',
            ),
    )); ?>
</div>