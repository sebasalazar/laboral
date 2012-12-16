<?php

class UsuariosController extends Controller
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
				'actions'=>array('create','pcreate'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','paneladmin','index','view'),
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
	public function actionCreate($tipo)
	{
                $this->layout = 'column1';
		$model= new Usuarios;
                $model1 = new Docentes;
                $model2 = new Empresas;
                $model3 = new Estudiantes;
		// Uncomment the following line if AJAX validation is needed
		//$this->performAjaxValidation($model);
		if(isset($_POST['Usuarios']))
		{
			$model->attributes=$_POST['Usuarios'];
                        $model->username = intval(preg_replace("/[^0-9]/", "", $_POST['rut_demo_int']));
                        if(isset($_POST['Docentes']))
			{
                                $model1->attributes=$_POST['Docentes'];
                                $model1->rut = $model->username;
                                    if($model->validate() && $model1->validate() && $model1->save() && $model->save()){
                                            $this->redirect(array('site/index'));
                                    }
                                    else
                                    {
                                            $model->deleteByPk($model1->pk);
                                            $model1->deleteByPk($model->username);
                                    }
			}
			if(isset($_POST['Empresas']))
			{
				if($model->save()){
                                	$model2->attributes=$_POST['Empresas'];
                                	$model2->rut = $model->username;
                            		if($model2->save())
						$this->redirect(array('site/index'));
                        	}
                                else
                                {
                                        $model1->deleteByPk($model2->pk);
                                        $model1->deleteByPk($model->username);
                                }
			}
			if(isset($_POST['Estudiantes']))
			{
                            $model3->attributes=$_POST['Estudiantes'];
                            $model3->rut = $model->username;  
                            $model3->carrera_fk = $_POST['carrerafk'] ;
                            $model3->comuna_fk = $_POST['comboComuna'];
                            $model3->archivo_curriculum = $model3->rut;
                            if($model->validate() && $model3->validate()){
                                if($model->save()){                                       
                                    if($model3->save())
                                        $cv = CUploadedFile::getInstance ($model3, 'archivo_curriculum');
                                    if(!empty($cv)){
                                        $cv->saveAs('cv/' . $model3->rut . '.pdf');
                                    }
                                        $this->redirect(array('site/index'));   
                                }
                            }
                        } 
                }
                $this->render('create',array('model'=>$model,'model1'=>$model1,'model2'=>$model2,'model3'=>$model3,'tipo'=>$tipo));
	}
	

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{   
                if($id == Yii::app()->user->name || Yii::app()->user->isAdmin()){
                    $model=$this->loadModel((int) $id);

                    if(isset($_POST['Usuarios']))
                    {
                            $model->attributes=$_POST['Usuarios'];
                            if($model->save())
                                    $this->redirect(array('view','id'=>$model->username));
                    }

                    $this->render('update',array(
                            'model'=>$model,
                    ));
                }
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel((int) $id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Usuarios');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Usuarios('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Usuarios']))
			$model->attributes=$_GET['Usuarios'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
        
        public function actionPaneladmin(){
            $this->layout = 'column1';
            $this->render('paneladmin');
        }
        
        public function actionPcreate()
        {
            $this->layout = 'column1';
            $this->render('pcreate');
        }

        /**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Usuarios::model()->findByPk((int) $id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='usuarios-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
