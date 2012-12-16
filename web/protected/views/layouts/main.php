<?php /* @var $this Controller */ ?>
<?php
function formateo_rut($rut_param){ 
     
    $parte4 = substr($rut_param, -1); // seria solo el numero verificador 
    $parte3 = substr($rut_param, -4,3); // la cuenta va de derecha a izq  
    $parte2 = substr($rut_param, -7,3);  
    $parte1 = substr($rut_param, 0,-7);   //de esta manera toma todos los caracteres desde el 8 hacia la izq 

    return $parte1.".".$parte2.".".$parte3."-".$parte4; 
}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/contenido.css" />
</head>

<body>

<div class="container" id="page">

        <?php // En caso de no haber naie logeado muestra las opciones por defecto
        if(Yii::app()->user->getModel(Yii::app()->user->id) == null)
        {
            $this->widget('bootstrap.widgets.TbNavbar', array(
                    'type'=>'inverse', // null or 'inverse'
                    'brand'=>'Bolsa Laboral',
                    'brandUrl'=>array('site/index'),
                    'collapse'=>true, // requires bootstrap-responsive.css
                    'items'=>array(
                        array(
                            'class'=>'bootstrap.widgets.TbMenu',
                            'items'=>array(
                                array('label'=>'Inicio', 'url'=>array('site/index')),
                                array('label'=>'Ofertas Laborales', 'url'=>array('ofertasLaborales/index')),
                                array('label'=>'Registrarse', 'url'=>array('usuarios/pcreate'), 'visible'=>Yii::app()->user->isGuest),
                                array('label'=>'Contacto', 'url'=>array('site/contact')),
                            ),
                        ),
                        array(
                            'class'=>'bootstrap.widgets.TbMenu',
                            'htmlOptions'=>array('class'=>'pull-right'),
                            'items'=>array(
                                '---',
                                array('label'=>'Iniciar Sesion', 'url'=>array('site/login'))
                            ),
                        ),
                    ),
                ));
        }
        ?>

        <?php // en caso de login muestra opciones específicas
        if(Yii::app()->user->getModel(Yii::app()->user->id) != null)
        {
            $tipo = Yii::app()->user->getTipoUsuario(Yii::app()->user->name);
            if($tipo == 2)
            {
                 $rutsinformato=Yii::app()->user->name;
                 $rut=formateo_rut($rutsinformato);
                $this->widget('bootstrap.widgets.TbNavbar', array(
                        'type'=>'inverse', // null or 'inverse'
                        'brand'=>'Bolsa Laboral',
                        'brandUrl'=>array('site/index'),
                        'collapse'=>true, // requires bootstrap-responsive.css
                        'items'=>array(
                            array(
                                'class'=>'bootstrap.widgets.TbMenu',
                                'items'=>array(
                                    array('label'=>'Inicio', 'url'=>array('site/index')),
                                    array('label'=>'Ofertas Laborales', 'url'=>array('/ofertasLaborales/index'), 'items'=>array(
                                        array('label'=>'Lista Ofertas Laborales', 'url'=>array('/ofertasLaborales/index')),
                                        array('label'=>'Publicar una Oferta Laboral', 'url'=>array('/ofertasLaborales/create')),
                                        array('label'=>'Busqueda Avanzada', 'url'=>'#'),
                                    )),
                                    array('label'=>'Encargados', 'items'=>array(
                                        array('label'=>'Crear encargado de Empresa', 'url'=>array('/encargadosEmpresas/create')),
                                        array('label'=>'Crear encargado de Practica', 'url'=>array('/encargadosPracticas/create')),
                                        //array('label'=>'Busqueda Avanzada', 'url'=>'#'),
                                    )),
                                    array('label'=>'Practicas', 'items'=>array(
                                        array('label'=>'Ver Practicas', 'url'=>array('/practicas/index')),
                                        array('label'=>'Crear Practicas', 'url'=>array('/practicas/create')),
                                        //array('label'=>'Modificar Practica', 'url'=>array('/practicas/update')),
                                        //array('label'=>'Eliminar Practica', 'url'=>'#'),
                                        '---',
                                        array('label'=>'Ver Evaluaciones', 'url'=>array('/evaluacionesPracticas/index')),
                                        array('label'=>'Evaluar Practicas', 'url'=>array('/evaluacionesPracticas/create')),
                                        //array('label'=>'Busqueda Avanzada', 'url'=>'#'),
                                    )),
                                    array('label'=>'Contacto', 'url'=>array('site/contact')),
                                ),
                            ),
                            array(
                                'class'=>'bootstrap.widgets.TbMenu',
                                'htmlOptions'=>array('class'=>'pull-right'),
                                'items'=>array(
                                    '---',
                                    array('label'=>'Iniciar Sesion', 'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest),
                                    array('label'=>$rut, 'url'=>'#', 'items'=>array(
                                        array('label'=>'Perfil', 'url'=>array('empresas/perfil', 'id'=>Yii::app()->user->name)),
                                        array('label'=>'Cambiar Rol', 'url'=>'#'),
                                        '---',
                                        array('label'=>'Cerrar Sesión', 'url'=>array('site/logout')),
                                    ), 'visible'=>!Yii::app()->user->isGuest),
                                ),
                            ),
                        ),
                    ));
             }
             elseif($tipo == 3)
             {
                 $rutsinformato=Yii::app()->user->name;
                 $rut=formateo_rut($rutsinformato);
                    $this->widget('bootstrap.widgets.TbNavbar', array(
                        'type'=>'inverse', // null or 'inverse'
                        'brand'=>'Bolsa Laboral',
                        'brandUrl'=>array('site/index'),
                        'collapse'=>true, // requires bootstrap-responsive.css
                        'items'=>array(
                            array(
                                'class'=>'bootstrap.widgets.TbMenu',
                                'items'=>array(
                                    array('label'=>'Inicio', 'url'=>array('site/index')),
                                    array('label'=>'Ofertas Laborales', 'url'=>array('ofertasLaborales/index'), 'items'=>array(
                                        array('label'=>'Lista Ofertas Laborales', 'url'=>array('ofertasLaborales/index')),
                                        array('label'=>'Publicar una Oferta Laboral', 'url'=>array('ofertasLaborales/create')),
                                        array('label'=>'Busqueda Avanzada', 'url'=>'#'),
                                    )),
                                    array('label'=>'Contacto', 'url'=>array('site/contact')),
                                ),
                            ),
                            array(
                                'class'=>'bootstrap.widgets.TbMenu',
                                'htmlOptions'=>array('class'=>'pull-right'),
                                'items'=>array(
                                    '---',
                                    array('label'=>'Iniciar Sesion', 'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest),
                                    array('label'=>$rut, 'url'=>'#', 'items'=>array(
                                        array('label'=>'Perfil', 'url'=>array('docentes/perfil', 'id'=>  Yii::app()->user->name)),
                                        array('label'=>'Cambiar Rol', 'url'=>'#'),
                                        '---',
                                        array('label'=>'Administrar', 'url'=>array('usuarios/paneladmin'), 'visible'=>Yii::app()->user->isAdmin()),
                                        array('label'=>'Cerrar Sesión', 'url'=>array('site/logout')),
                                    ), 'visible'=>!Yii::app()->user->isGuest),
                                ),
                            ),
                        ),
                    ));
             }
             elseif($tipo == 1)
             {
                 $rutsinformato=Yii::app()->user->name;
                 $rut=formateo_rut($rutsinformato);
                    $this->widget('bootstrap.widgets.TbNavbar', array(
                    'type'=>'inverse', // null or 'inverse'
                    'brand'=>'Bolsa Laboral',
                    'brandUrl'=>array('site/index'),
                    'collapse'=>true, // requires bootstrap-responsive.css
                    'items'=>array(
                        array(
                            'class'=>'bootstrap.widgets.TbMenu',
                            'items'=>array(
                                array('label'=>'Inicio', 'url'=>array('site/index')),
                                array('label'=>'Ofertas Laborales', 'url'=>array('ofertasLaborales/index'), 'items'=>array(
                                        array('label'=>'Lista Ofertas Laborales', 'url'=>array('ofertasLaborales/index')),
                                        array('label'=>'Mis Postulaciones', 'url'=>array('postulaciones/mispostulaciones','estudiante_fk'=>Yii::app()->user->getModelUsuarioCompleto(Yii::app()->user->name)->pk)),
                                    )),
                                array('label'=>'Registrarse', 'url'=>array('usuarios/pcreate'), 'visible'=>Yii::app()->user->isGuest),
                                array('label'=>'Contacto', 'url'=>array('site/contact')),
                            ),
                        ),
                        array(
                            'class'=>'bootstrap.widgets.TbMenu',
                            'htmlOptions'=>array('class'=>'pull-right'),
                            'items'=>array(
                                '---',
                                array('label'=>$rut, 'url'=>'#', 'items'=>array(
                                        array('label'=>'Perfil', 'url'=>array('estudiantes/perfil', 'id'=>  Yii::app()->user->name)),
                                        array('label'=>'Cambiar Rol', 'url'=>'#'),
                                        '---',
                                        array('label'=>'Cerrar Sesión', 'url'=>array('site/logout')),
                                    ), 'visible'=>!Yii::app()->user->isGuest),
                            ),
                        ),
                    ),
                ));
             }
        }
        ?>
   
        
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
<?php
    foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
    }
?>
                
                
	<?php echo $content; ?>

	<div class="clear"></div>

</div><!-- page -->
<div class="pfooter">
    <div id="footer">
        <div class="contenido">
                <div class="fila">
                    <div class="columna columna_1">
                        <ul class="uls">
                            <li class="text-left"><?php echo CHtml::link('Inicio',array('site/index')); ?></li>
                            <li class="text-left"><?php echo CHtml::link('Ofertas Laborales',array('ofertasLaborales/index')); ?></li>
                            <li class="text-left"><?php echo CHtml::link('Registrarse',array('usuarios/pcreate')); ?></li>
                            <li class="text-left"><?php echo CHtml::link('Contacto',array('/site/contact', 'view'=>'about')); ?></li>
                        </ul>
                    </div>
                    <div class="columna columna_1">
                        <br />
                                            <p class="text-footer">Derechos de Autor &copy; <?php echo date('Y'); ?> por <?php echo CHtml::link('UTEM','http://www.utem.cl'); ?>.<br/>
                                            Todos los derechos reservados.<br/>
                                            <?php echo CHtml::link('Acerca del Sitio',array('/site/page', 'view'=>'about'));?>
                                            </p>
                    </div>
                    <div class="columna columna_2">
                        <ul class="uls">
                            <li class="text-left"><?php echo CHtml::link('UTEM','http://www.utem.cl'); ?></li>
                            <li class="text-left"><?php echo CHtml::link('Escuela Informática','http://informatica.utem.cl'); ?></li>
                            <li class="text-left"><?php echo CHtml::link('Bienestar UTEM','http://bienestarestudiantil.blogutem.cl/'); ?></li>
                            <li class="text-left"><?php echo CHtml::link('FEUTEM','http://www.feutem.cl'); ?></li>
                        </ul>
                    </div>
                </div>
        </div>
    </div><!-- footer -->
</div>
</body>
</html>
