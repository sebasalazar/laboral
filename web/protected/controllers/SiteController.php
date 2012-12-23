<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $model = Tips::model()->findAll();
        /*
          $ofertas=new OfertasLaborales();
          $ofertas->unsetAttributes();  // clear any default values
          if(isset($_GET['OfertasLaborales']))
          $ofertas->attributes=$_GET['OfertasLaborales']; */
        $ofertas = new OfertasLaborales;
        $this->render('index', array('model' => $model, 'ofertas' => $ofertas));
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                
                $nombre = "Admin Portal Laboral";
                $correo = trim(Yii::app()->params['adminEmail']);
                $asunto = trim("[Contacto] {$model->subject}");
                $mensaje = trim("{$model->name} <{$model->email}>\r\n Consulta \r\n {$model->body}");
                
                $salida = Yii::app()->user->enviarEmail($nombre, $correo, $asunto, $mensaje);
                if ($salida) {
                    Yii::app()->user->setFlash('contact', 'Gracias por contactarse con nosotros, le contestaremos a la brevedad.');
                } else {
                    Yii::app()->user->setFlash('contact', 'Lo sentimos ocurrió un problema al enviar su email, por favor intentelo nuevamente.');
                }
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $model = new LoginForm;
        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            $prerutsinformato = substr($_POST['rut_demo_int'], 0, -1);
            $rutsinformatostring = preg_replace("/[^0-9]/", "", $prerutsinformato);
            $rutsinformato= intval($rutsinformatostring);
            $model->username = $rutsinformato;
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
            {
                $this->redirect(Yii::app()->user->returnUrl);
            }
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }
	public function actionFeed()
	{
		$this->render('feed');
	}
    ////FUNCION DEL MAIL
    /*
      public function actionViewTest() {

      // Render view and get content
      // Notice the last argument being `true` on render()
      $content = $this->render('viewTest', array(
      'Test' => 'TestText 123',
      ), true);

      // Plain text content
      $plainTextContent = "This is my Plain Text Content for those with cheap emailclients ;-)\nThis is my second row of text";

      // Get mailer
      $SM = Yii::app()->swiftMailer;

      // Get config
      $mailHost = 'sabmus8@gmail.com';
      $mailPort = 25; // Optional

      // New transport
      $Transport = $SM->smtpTransport($mailHost, $mailPort);

      // Mailer
      $Mailer = $SM->mailer($Transport);

      // New message
      $Message = $SM
      ->newMessage('My subject')
      ->setFrom(array('sabmus8@gmail.com' => 'Example Name'))
      ->setTo(array('toruk21@hotmail.com' => 'Recipient Name'))
      ->addPart($content, 'text/html')
      ->setBody($plainTextContent);

      // Send mail
      $result = $Mailer->send($Message);
      } */
}