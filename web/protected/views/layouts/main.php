<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/contenido.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header" class="contenido">
		<div id="logo" class="columna columna_1"><?php echo CHtml::encode(Yii::app()->name); ?></div>
                    <?php
                        if(Yii::app()->user->getModel(Yii::app()->user->id) != null)
                        {
                            echo "<br /><div class='panelAdmin'>";
                            echo "<u> &nbsp;&nbsp;&nbsp;Panel de Administración &nbsp;&nbsp;&nbsp;</u><br /><br />";
                            
                            $tipo = Yii::app()->user->getTipoUsuario(Yii::app()->user->name);
                            if($tipo == 3) // Docente
                            {
                                $usuario_nombre = Yii::app()->user->getModelUsuarioCompleto(Yii::app()->user->name)->nombres;
                                if($usuario_nombre != null)
                                echo "Bienvenido, <b>".$usuario_nombre."</b><br >";
                                echo CHtml::link('Perfil', array('/docentes/perfil', 'id'=>Yii::app()->user->name))." - ".CHtml::link('Salir',array('/site/logout'));
                                echo "</div>";
                            }
                            elseif($tipo == 2) //Empresa
                            {
                                $usuario_nombre = Yii::app()->user->getModelUsuarioCompleto(Yii::app()->user->name)->nombre;
                                if($usuario_nombre != null)
                                echo "Bienvenido, <b>".$usuario_nombre."</b><br >";
                                echo CHtml::link('Perfil', array('/empresas/perfil', 'id'=>Yii::app()->user->name))." - ".CHtml::link('Salir',array('/site/logout'));
                                echo "</div>";
                            }
                            elseif($tipo == 1) //Estudiante
                            {
                                $usuario_nombre = Yii::app()->user->getModelUsuarioCompleto(Yii::app()->user->name)->nombres;
                                if($usuario_nombre != null)
                                echo "Bienvenido, <b>".$usuario_nombre."</b><br >";
                                echo CHtml::link('Perfil', array('/estudiantes/perfil', 'id'=>Yii::app()->user->name))." - ".CHtml::link('Salir',array('/site/logout'));
                                echo "</div>";
                            }
                            if(Yii::app()->user->getModel(Yii::app()->user->id)->roles == 1){
                                echo CHtml::link('Administrar')." - ";
                            }
                        }
                        else
                        {
                            echo "<br /><div class='panelAdmin'>";
                            echo "<u> &nbsp;&nbsp;&nbsp;Panel de Administración &nbsp;&nbsp;&nbsp;</u><br /><br />";
                            echo "Bienvenido, <b>".Yii::app()->user->name."</b><br >";
                            if(Yii::app()->user->getModel(Yii::app()->user->id) != null && Yii::app()->user->getModel(Yii::app()->user->id)->roles == 1){
                                echo CHtml::link('Administrar')." - ";
                            }
                            echo CHtml::link('Iniciar Sesión',array('/site/login'));
                            echo "</div>";
                        }
                    ?>
	</div><!-- header -->

        
        
        <?php // En caso de no haber naie logeado muestra las opciones por defecto
        if(Yii::app()->user->getModel(Yii::app()->user->id) == null)
        {
            echo '<div id="mainmenu">';
            $this->widget('zii.widgets.CMenu',array(
                'items'=>array(
                    array('label'=>'Inicio', 'url'=>array('/site/index', 'visible'=>!Yii::app()->user->isGuest)),
                    array('label'=>'Ofertas de Trabajo', 'url'=>array('/ofertasLaborales/index')),
                    array('label'=>'Acerca de', 'url'=>array('/site/page', 'view'=>'about', 'visible'=>!Yii::app()->user->isGuest)),
                    array('label'=>'Contacto', 'url'=>array('/site/contact', 'visible'=>!Yii::app()->user->isGuest)),                                
                    array('label'=>'Registrarse', 'url'=>array('/usuarios/pcreate', 'visible'=>!Yii::app()->user->isGuest)),                                
                    array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                    array('label'=>'Logout', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                               ),
                    )              
             );
             echo '</div><!-- mainmenu -->';
        }
        ?>

        <?php // en caso de login muestra opciones específicas
        if(Yii::app()->user->getModel(Yii::app()->user->id) != null)
        {
            $tipo = Yii::app()->user->getTipoUsuario(Yii::app()->user->name);
            if($tipo == 2)
            {
                echo "<div id='mainmenu'>";
                    $this->widget('zii.widgets.CMenu',array(
                            'items'=>array(
                                            array('label'=>'Inicio', 'url'=>array('/site/index', 'visible'=>!Yii::app()->user->isGuest)),
                                            array('label'=>'Encargado de Empresa', 'url'=>array('/encargadosEmpresas/create')),
                                            array('label'=>'Encargado de Practicas', 'url'=>array('/encargadosPracticas/create')),
                                            array('label'=>'Practicas', 'url'=>array('/practicas/create')),
                                            array('label'=>'Evaluar Practica', 'url'=>array('/evaluacionesPracticas/create')),
                                            //array('label'=>'Ver Practicas', 'url'=>array('/practicas/index')),
                                            //array('label'=>'Acerca de', 'url'=>array('/site/page', 'view'=>'about', 'visible'=>!Yii::app()->user->isGuest)),
                                            //array('label'=>'Contacto', 'url'=>array('/site/contact', 'visible'=>!Yii::app()->user->isGuest)),                                
                                            //array('label'=>'Registrarse', 'url'=>array('/usuarios/pcreate', 'visible'=>!Yii::app()->user->isGuest)),                                
                                            //array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                                            array('label'=>'Logout', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                          ),
                    )             
                 );
                 echo '</div><!-- mainmenu -->';
             }
             elseif($tipo == 3)
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
             echo '</div><!-- mainmenu -->';
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
