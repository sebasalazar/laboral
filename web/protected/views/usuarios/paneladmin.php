<div class="menupanel">
    
    <?php 
        $this->widget('bootstrap.widgets.TbMenu', array(
        'type'=>'tabs', // '', 'tabs', 'pills' (or 'list')
        'stacked'=>false, // whether this is a stacked menu
        'items'=>array(
            array('label'=>'Inicio', 'url'=>'#', 'active'=>true),
            array('label'=>'Datos Personales', 'items'=>array(
                                        array('label'=>'Estados Civiles', 'url'=>'#'),
                                        array('label'=>'Niveles de Estudios', 'url'=>'#'),
                                        array('label'=>'Regiones', 'url'=>array('ofertasLaborales/index')),
                                        array('label'=>'Provincias', 'url'=>array('ofertasLaborales/create')),
                                        array('label'=>'Comunas', 'url'=>'#'),
            )),
            array('label'=>'Universidad', 'items'=>array(
                                        array('label'=>'Facultades', 'url'=>'#'),
                                        array('label'=>'Departamentos', 'url'=>'#'),
                                        array('label'=>'Carreras', 'url'=>array('ofertasLaborales/index')),
                                        array('label'=>'Docentes', 'url'=>array('ofertasLaborales/create')),
                                        array('label'=>'Estudiantes', 'url'=>'#'),
            )),
            array('label'=>'Empresa', 'items'=>array(
                                        array('label'=>'Rubros', 'url'=>array('ofertasLaborales/create')),
                                        array('label'=>'Jornadas', 'url'=>array('ofertasLaborales/create')),
                                        array('label'=>'Tipos Contratos', 'url'=>array('ofertasLaborales/create')),
                                        array('label'=>'Empresas', 'url'=>'#'),
                                        array('label'=>'Encargados Empresas', 'url'=>'#'),
                                        array('label'=>'Encargado Practicas', 'url'=>array('ofertasLaborales/index')),
                                        array('label'=>'Evaluaciones Practicas', 'url'=>array('ofertasLaborales/create')),
            )),
            array('label'=>'Ofertas Laborales', 'items'=>array(
                                        array('label'=>'Ofertas Laborales', 'url'=>'#'),
                                        array('label'=>'Postulaciones', 'url'=>'#'),
                                        array('label'=>'Practicas', 'url'=>array('ofertasLaborales/index')),
                                        array('label'=>'Propietarios Ofertas Laborales', 'url'=>array('ofertasLaborales/create')),
            )),
            
        ),
        )); 
    ?>
    
</div>
<div class="contenidoPage">
    hola mundo
</div>
