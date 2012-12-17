
<?php

class EvaluacionesPracticasController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
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
				'actions'=>array(''),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update','delete','index','create','view','pdf'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','update','create'),
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
            if(Yii::app()->user->isEmpresa() || Yii::app()->user->isDocente()|| Yii::app()->user->isAdmin())
            {
		$this->render('view',array(
			'model'=>$this->loadModel((int) $id),
		));
            }
            else
            {
                throw new CHttpException(403,'No tienes permisos suficientes para ingresar a este perfil.');
            }
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
            if(Yii::app()->user->isEmpresa())
            {
		$model=new EvaluacionesPracticas;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['EvaluacionesPracticas']))
		{
			$model->attributes=$_POST['EvaluacionesPracticas'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->pk));
		}

		$this->render('create',array(
			'model'=>$model,
		));
            }
            else
            {
                throw new CHttpException(403,'No tienes permisos suficientes para ingresar a este perfil.');
            }
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
            if(Yii::app()->user->isEmpresa())
            {
		$model=$this->loadModel((int) $id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['EvaluacionesPracticas']))
		{
			$model->attributes=$_POST['EvaluacionesPracticas'];
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

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
            if(Yii::app()->user->isEmpresa())
            {
                $this->loadModel($id)->delete();
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
            }
            else
            {
                throw new CHttpException(403,'No tienes permisos suficientes para ingresar a este perfil.');
            }
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
            if(Yii::app()->user->isEmpresa() || Yii::app()->user->isDocente() || Yii::app()->user->isAdmin())
            {
                $model=new EvaluacionesPracticas('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['EvaluacionesPracticas']))
			$model->attributes=$_GET['EvaluacionesPracticas'];

		$this->render('index',array(
			'model'=>$model,
		));
            }
            else
            {
                throw new CHttpException(403,'No tienes permisos suficientes para ingresar a este perfil.');
            }
		
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new EvaluacionesPracticas('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['EvaluacionesPracticas']))
			$model->attributes=$_GET['EvaluacionesPracticas'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

        /*
        public function actionGenerarPdf($id)
	{
            if(Yii::app()->user->isEmpresa())
            {
                $this->render('generarPdf',array(
			'model'=>$this->loadModel($id),
		));
            }
            else
            {
                throw new CHttpException(403,'No tienes permisos suficientes para ingresar a este perfil.');
            }
	}*/
        
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=EvaluacionesPracticas::model()->findByPk((int) $id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

        public function actionPdf($id)
        {
            $this->render('pdf',array(
                'model'=>$this->loadModel($id),
            ));
        }


	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='evaluaciones-practicas-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
