<?php

class DocentesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
        
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
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations// we only allow deletion via POST request
                        'postOnly + delete',
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('captcha'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('perfil','pupdate','contacto'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','index','view','create','update'),
				'users'=>array(Yii::app()->user->getAdmin()),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel((int) $id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Docentes;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Docentes']))
		{
			$model->attributes=$_POST['Docentes'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->pk));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
            if(Yii::app()->user->rutDocente($id) == Yii::app()->user->name)
            {
                    $model=$this->loadModel((int) $id);
                    if(isset($_POST['Docentes']))
                    {
                            $model->attributes=$_POST['Docentes'];
                            if($model->save())
                                    $this->redirect(array('view','id'=>$model->pk));
                    }

                    $this->render('update',array(
                            'model'=>$model,
                    ));
            }
            else
            {
                    throw new CHttpException(403,'No tienes permisos suficientes para ingresar a este perfil.');
            }
	}

	public function actionDelete($id)
	{
                $usuarios = Usuarios::model()->deleteByPk(Yii::app()->user->rutDocente($id));
		$this->loadModel($id)->delete();
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));

	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Docentes');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
        
        public function actionContacto(){
                $model = new ContactForm;
                if (isset($_POST['ContactForm'])) {
                    $docente = Docentes::model()->findByAttributes(array('rut'=>Yii::app()->user->name));
                    $estudiantes = Estudiantes::model()->findAllByAttributes(array('carreraFk'=>array('escuelaFk'=>array('departamentoFk'=>$docente->departamento_fk))));
                    $model->attributes = $_POST['ContactForm'];
                    if ($model->validate()) {

                        $nombre = "Admin Portal Laboral";
                        
                        $asunto = trim("[Contacto] {$model->subject}");
                        $mensaje = trim("{$model->name} <{$model->email}>\r\n Consulta \r\n {$model->body}");
                        foreach($estudiantes as $i)
                        {
                            $correo = trim($i->email);
                            $salida = Yii::app()->user->enviarEmail($nombre, $correo, $asunto, $mensaje);
                        }
                        if ($salida) {
                            Yii::app()->user->setFlash('contact', 'Gracias por contactarse con nosotros, le contestaremos a la brevedad.');
                        } else {
                            Yii::app()->user->setFlash('contact', 'Lo sentimos ocurrió un problema al enviar su email, por favor intentelo nuevamente.');
                        }
                        $this->refresh();
                    }
                }
                $this->render('contacto', array('model' => $model));
        }

	public function actionAdmin()
	{
		$model=new Docentes('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Docentes']))
			$model->attributes=$_GET['Docentes'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
        
        public function actionPupdate($rut){
            if($rut == Yii::app()->user->name)
            {
                $ofertas = new OfertasLaborales('Search');
                $ofertas->unsetAttributes();  // clear any default values
		if(isset($_GET['OfertasLaborales']))
			$ofertas->attributes=$_GET['OfertasLaborales'];
                $this->render('pupdate', array('ofertas'=>$ofertas));
            }
            else
            {
                throw new CHttpException(403,'No tienes permisos suficientes para efectuar esta accion');
            }
        }


        /**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Docentes::model()->findByPk((int) $id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
        
        public function actionPerfil()
        {
            if(Yii::app()->user->isDocente()){
                $model= Docentes::model()->findByPk(Yii::app()->user->idDocente(Yii::app()->user->name));
                if($model != null)
                    $this->render('perfil', array(
                                'model'=>$model
                    ));
                else
                    throw new CHttpException(404,'Tu Perfil de docente no existe.');
                    
            }
            else
            {
                    throw new CHttpException(403,'No tienes permisos suficientes para ingresar a este perfil.');
            }
        }
        
        
	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='docentes-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
