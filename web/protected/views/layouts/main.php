<?php /* @var $this Controller */ ?>
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
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/contenido.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

</head>

<body>

<div class="container" id="page">

        <?php // En caso de no haber naie logeado muestra las opciones por defecto
        if(Yii::app()->user->getModel(Yii::app()->user->id) == null)
        {
            $this->widget('bootstrap.widgets.TbNavbar', array(
            'type'=>'null', // null or 'inverse'
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
                        array('label'=>'Registrarse', 'url'=>array('usuarios/pcreate'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'Contacto', 'url'=>array('site/contact'), 'visible'=>Yii::app()->user->isGuest),
                    ),
                ),
                array(
                    'class'=>'bootstrap.widgets.TbMenu',
                    'htmlOptions'=>array('class'=>'pull-right'),
                    'items'=>array(
                        array('label'=>'Acerca de', 'url'=>array('/site/page', 'view'=>'about')),
                        '---',
                        array('label'=>'Iniciar Sesion', 'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest),
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
                echo "<div id='btn-toolbar'>";
                        $this->widget('bootstrap.widgets.TbButton', array(
                            'label'=>'Inicio','url'=>array('site/index','visible'=>!Yii::app()->user->isGuest),
                            'type'=>'info', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
                            'size'=>'null', // null, 'large', 'small' or 'mini'
                        ));
                        $this->widget('bootstrap.widgets.TbButton', array(
                            'label'=>'Ofertas de Trabajo','url'=>array('/ofertasLaborales/index'),
                            'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
                            'size'=>'null', // null, 'large', 'small' or 'mini'
                        ));
                        $this->widget('bootstrap.widgets.TbButton', array(
                            'label'=>'Encargado de Empresa','url'=>array('/encargadosEmpresas/create'),
                            'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
                            'size'=>'null', // null, 'large', 'small' or 'mini'
                        ));
                        $this->widget('bootstrap.widgets.TbButton', array(
                            'label'=>'Encargado de Practica','url'=>array('/encargadosPracticas/create'),
                            'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
                            'size'=>'null', // null, 'large', 'small' or 'mini'
                        ));
                        $this->widget('bootstrap.widgets.TbButtonGroup', array(
                            'type'=>'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
                                'buttons'=>array(
                                    array('label'=>'Practicas', 'items'=>array(
                                        array('label'=>'Ver Practica', 'url'=>array('/practicas/index')),
                                        array('label'=>'Crear Practica', 'url'=>array('/practicas/create')),
                                        array('label'=>'Modificar Practica', 'url'=>'#'),
                                        array('label'=>'Eliminar Practica', 'url'=>'#'),
                                        '---',
                                        array('label'=>'Evaluar Practica', 'url'=>array('/evaluacionesPracticas/create')),
                                    )),
                                ),
                            ));
                        $this->widget('bootstrap.widgets.TbButton', array(
                            'label'=>'Log Out','url'=>array('/site/logout', 'visible'=>!Yii::app()->user->isGuest),
                            'type'=>'warning', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
                            'size'=>'null', // null, 'large', 'small' or 'mini'
                        ));
                echo '</div><!-- mainmenu -->';
             }
             elseif($tipo == 3)
             {
                    $this->widget('bootstrap.widgets.TbNavbar', array(
                        'type'=>'null', // null or 'inverse'
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
                                    array('label'=>'Contacto', 'url'=>array('site/contact'), 'visible'=>Yii::app()->user->isGuest),
                                ),
                            ),
                            array(
                                'class'=>'bootstrap.widgets.TbMenu',
                                'htmlOptions'=>array('class'=>'pull-right'),
                                'items'=>array(
                                    array('label'=>'Acerca de', 'url'=>array('/site/page', 'view'=>'about')),
                                    '---',
                                    array('label'=>'Iniciar Sesion', 'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest),
                                    array('label'=>Yii::app()->user->name, 'url'=>'#', 'items'=>array(
                                        array('label'=>'Perfil', 'url'=>array('docentes/perfil', 'id'=>  Yii::app()->user->name)),
                                        array('label'=>'Cambiar Rol', 'url'=>'#'),
                                        '---',
                                        array('label'=>'Logout', 'url'=>array('site/logout')),
                                    ), 'visible'=>!Yii::app()->user->isGuest),
                                ),
                            ),
                        ),
                    ));
             }
             elseif($tipo == 1)
             {
                  echo '<div id="mainmenu">';
                    $this->widget('zii.widgets.CMenu',array(
                           'items'=>array(
                                            array('label'=>'Inicio', 'url'=>array('/site/index', 'visible'=>!Yii::app()->user->isGuest)),
                                            array('label'=>'Ofertas de Trabajo', 'url'=>array('/ofertasLaborales/index')),
                                            array('label'=>'Acerca de', 'url'=>array('/site/page', 'view'=>'about', 'visible'=>!Yii::app()->user->isGuest)),
                                            array('label'=>'Contacto', 'url'=>array('/site/contact', 'visible'=>!Yii::app()->user->isGuest)),                                                              
                                            array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                                            array('label'=>'Logout', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                          ),
                    )              
             );
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

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by UTEM.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
