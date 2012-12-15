<?php
/* @var $this EstudiantesController */
/* @var $model Estudiantes */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Estudiantes', 'url'=>array('index')),
	array('label'=>'Create Estudiantes', 'url'=>array('create')),
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
    <h1>Administración Carreras</h1>

    <p>
    Dentro de la busqueda, opcionalmente puede utilizar (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    o <b>=</b>) para filtrar en caso de valores numericos.
    </p>

    <?php
                $this->widget('bootstrap.widgets.TbGridView', array(
                        'type'=>'striped bordered condensed',
                        'dataProvider'=>$model->search(),
                        'template'=>"{items}",
                        'filter'=>$model,
                        'template'=>"{items}\n{pager}",
                        'columns'=>array(
                        'pk',
                        'nombres',
                        'apellidos',
                        'rut',
                        'genero',
                        'email',
                         array(
                                'header'=>'Detalle',
                                'class'=>'bootstrap.widgets.TbButtonColumn',
                                'template'=>'{update}{delete}',
                         ),    
                         ),
                    ));
    ?>
</div>