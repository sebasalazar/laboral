<?php
/* @var $this CarrerasController */
/* @var $model Carreras */

$this->breadcrumbs=array(
	'Carrerases'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List Carreras', 'url'=>array('index')),
	array('label'=>'Create Carreras', 'url'=>array('create')),
	array('label'=>'Update Carreras', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete Carreras', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Carreras', 'url'=>array('admin')),
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
            ), 'active'=>true),
            array('label'=>'Empresa', 'items'=>array(
                                        array('label'=>'Rubros', 'url'=>array('rubros/admin')),
                                        array('label'=>'Jornadas', 'url'=>array('jornadas/admin')),
                                        array('label'=>'Tipos Contratos', 'url'=>array('tiposContratos/admin')),
                                        array('label'=>'Empresas', 'url'=>array('empresas/admin')),
                                        array('label'=>'Encargados Empresas', 'url'=>array('encargadosEmpresas/admin')),
                                        array('label'=>'Encargados Practicas', 'url'=>array('encargadosPracticas/admin')),
                                        array('label'=>'Evaluaciones Practicas', 'url'=>array('evaluacionesPracticas/admin')),
            )),
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
    <h1>Carrera: <?php echo $model->nombre_carrera; ?></h1>
    <br />
    <?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
                    'pk',
                    'cod_carrera',
                    'nombre_carrera',
                    array(
                        'label'=>'Escuela',
                        'value'=>$model->escuelaFk->escuela,
                    ),
            ),
    )); ?>
</div>