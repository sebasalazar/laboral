<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html class="js canvas canvastext geolocation rgba hsla no-multiplebgs borderimage borderradius boxshadow opacity no-cssanimations csscolumns no-cssgradients no-cssreflections csstransforms no-csstransforms3d no-csstransitions  video audio cufon-active fontface cufon-ready" xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="es" />
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

        <?php // en caso de login muestra opciones específicas
                $rutsinformato=Yii::app()->user->name;
                $rut=Yii::app()->user->getRut($rutsinformato);
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
                                        array('label'=>'Publicar una Oferta Laboral', 'url'=>array('/ofertasLaborales/create'), 'visible'=>Yii::app()->user->isDocente() || Yii::app()->user->isEmpresa()),
                                        array('label'=>'Mis Postulaciones', 'url'=>array('postulaciones/mispostulaciones'), 'visible'=>Yii::app()->user->isEstudiante()),
                                    ), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Ofertas Laborales', 'url'=>array('/ofertasLaborales/index'), 'visible'=>Yii::app()->user->isGuest),
                                    array('label'=>'Encargados', 'items'=>array(
                                        array('label'=>'Encargados de Empresas', 'url'=>array('/encargadosEmpresas/index')),
                                        array('label'=>'Encargados de Practicas', 'url'=>array('/encargadosPracticas/index')),
                                    ), 'visible'=>Yii::app()->user->isEmpresa()),
                                    array('label'=>'Practicas', 'items'=>array(
                                        array('label'=>'Ver Practicas Creadas', 'url'=>array('/practicas/index')),
                                        array('label'=>'Ver Postulaciones a Practicas', 'url'=>array('/postulacionesPracticas/index')),
                                        array('label'=>'Crear Practicas', 'url'=>array('/practicas/create'), 'visible'=>Yii::app()->user->isEmpresa()),
                                        '---',
                                        array('label'=>'Ver Evaluaciones', 'url'=>array('/evaluacionesPracticas/index'), 'visible'=>Yii::app()->user->isDocente() || Yii::app()->user->isEmpresa()),
                                        array('label'=>'Evaluar Practicas', 'url'=>array('/evaluacionesPracticas/create'), 'visible'=>Yii::app()->user->isEmpresa()),
                                    ), 'visible'=>!Yii::app()->user->isGuest && !Yii::app()->user->isEstudiante()),
                                    array('label'=>'CV','items'=>array(
                                        array('label'=>'Actualizar Mis Datos','url'=>array('/estudiantes/updateperfil4','rut'=>Yii::app()->user->name),'visible'=>Yii::app()->user->isEstudiante()),
                                        array('label'=>'Subir Mi Curriculum','url'=>array('/site/index')/*/estudiantes/archivo','rut'=>Yii::app()->user->name)*/,'visible'=>Yii::app()->user->isEstudiante(),),)),
                                     array('label'=>'Practicas', 'items'=>array(
                                        array('label'=>'Ver Practicas', 'url'=>array('/practicas/index')),
                                        array('label'=>'Mis Postulaciones', 'url'=>array('/postulacionesPracticas/mispostulaciones'), 'visible'=>Yii::app()->user->isEstudiante()),
                                    ), 'visible'=>Yii::app()->user->isEstudiante()),
                                    array('label'=>'Registrarse', 'url'=>array('usuarios/pcreate'), 'visible'=>Yii::app()->user->isGuest),
                                    array('label'=>'Contacto', 'url'=>array('site/contact')),
                                    /////////////////////////////////////////////////////////////////////////////////////////////////
                                    //array('label'=>'TesteoMails', 'url'=>array('site/viewTest')), ///////BORRAR UNA VEZ TERMINADO EL MAIL
                                ),
                            ),
                            array(
                                'class'=>'bootstrap.widgets.TbMenu',
                                'htmlOptions'=>array('class'=>'pull-right'),
                                'items'=>array(
                                    '---',
                                    array('label'=>'Iniciar Sesion', 'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest),
                                    array('label'=>$rut, 'url'=>'#', 'items'=>array(
                                        array('label'=>'Datos Empresa', 'url'=>array('empresas/perfil', 'id'=>Yii::app()->user->name), 'visible'=>Yii::app()->user->isEmpresa()),
                                        array('label'=>'Perfil Docente', 'url'=>array('docentes/perfil'), 'visible'=>Yii::app()->user->isDocente()),
                                        array('label'=>'Mis datos', 'url'=>array('estudiantes/perfil', 'id'=>Yii::app()->user->name), 'visible'=>Yii::app()->user->isEstudiante()),
                                        array('label'=>'Mi Curriculum', 'url'=>array('estudiantes/micurriculum', 'id'=>Yii::app()->user->name), 'visible'=>Yii::app()->user->isEstudiante()),
                                        '---',
                                        array('label'=>'Administrar', 'url'=>array('usuarios/paneladmin'), 'visible'=>Yii::app()->user->isAdmin()),
                                        array('label'=>'Cerrar Sesión', 'url'=>array('site/logout')),
                                    ), 'visible'=>!Yii::app()->user->isGuest),
                                ),
                            ),
                        ),
                    ));
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
