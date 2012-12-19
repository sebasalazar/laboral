<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'UTEM - Bolsa de Trabajo',
    'sourceLanguage' => 'es',
    'language' => 'es',
    // preloading 'log' component
    'preload' => array('bootstrap',),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
    ),
    'modules' => array(
        // uncomment the following to enable the Gii tool

        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => '123456',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
            'generatorPaths' => array(
                'bootstrap.gii',
            ),
        ),
        'generatorPaths' => array(
            'bootstrap.gii',
        ),
    ),
    // application components
    'components' => array(
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
            'class' => 'WebUser',
        ),
        //mails mails mails
        /* 'swiftMailer' => array(
          'class' => 'ext.swiftMailer.lib.classes.Swift.Mailer',
          ), */
        //************************//
        // uncomment the following to enable URLs in path-format
        /*
          'urlManager'=>array(
          'urlFormat'=>'path',
          'rules'=>array(
          '<controller:\w+>/<id:\d+>'=>'<controller>/view',
          '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
          '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
          ),
          ),
         */
        /*
          'db'=>array(
          'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
          ),
          // uncomment the following to use a MySQL database
          /*
          'db'=>array(
          'connectionString' => 'mysql:host=localhost;dbname=bollaboral',

          /* */

        /* 'db'=>array(
          'connectionString' => 'mysql:host=localhost;dbname=laboral',
          'emulatePrepare' => true,
          'username' => 'root',
          'password' => '1234',
          'charset' => 'utf8',
          ), */

        //Configuracion para postgresql
        'db' => array(
            'connectionString' => 'pgsql:host=localhost;dbname=laboraldb',
            'username' => 'postgres',
            'password' => 'cris1955',
            'charset' => 'utf8',
        ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            // uncomment the following to show log messages on web pages
            /*
              array(
              'class'=>'CWebLogRoute',
              ),
             */
            ),
        ),
        'bootstrap' => array(
            'class' => 'ext.bootstrap.components.Bootstrap', // assuming you extracted bootstrap under extensions
        ),
        
        'swiftMailer' => array(
            'class' => 'ext.swiftMailer.SwiftMailer',
        ),
        'controllerMap'=>array(
     'YiiFeedWidget' => 'ext.yii-feed-widget.YiiFeedWidgetController'
),
    ),
    
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'contacto@informatica.utem.cl',
    ),
);
