<?php

class OfertasLaboralesController extends Controller
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
				'actions'=>array('view','index'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
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
		$model=new OfertasLaborales;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
		if(isset($_POST['OfertasLaborales']))
		{
                        $propietario = new PropietarioOferta;
                        $valor =$_POST['OfertasLaborales'];
			$model->attributes=$valor;
                        $model->fecha_publicacion = date("Y-m-d H:i:s");
                        $model->activo = 1;
                        WebUser::loguear(__METHOD__ . " Listado: " . count($valor));
                        WebUser::loguear(__METHOD__ . " " . print_r($valor, false));
			if($model->save() && $model->validate()){
                            $propietario->rut = Yii::app()->user->name;
                            $propietario->oferta_laboral_fk = $model->pk;
                            if($propietario->save())
                            {
                                Yii::app()->user->setFlash('sucess', "");
                                $this->redirect(array('view','id'=>$model->pk));
                            }
                        }
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
            $dueño = PropietarioOferta::model()->findByAttributes(array('oferta_laboral_fk'=>$id));
            if(Yii::app()->user->name == $dueño->rut || Yii::app()->user->isAdmin() == true)
            {
                        $model=$this->loadModel((int) $id);
                        if(isset($_POST['ofertasLaborales']))
                        {
                                $model->attributes=$_POST['ofertasLaborales'];
                                if($model->save())
                                        $this->redirect(array('view','id'=>$model->pk));
                        }

                        $this->render('update',array(
                                'model'=>$model,
                        ));
            }
            else
            {
                throw new CHttpException(403,'No tienes permisos para ejecutar está acción.');
            }
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
            $this->layout = 'column1';
            $model=new OfertasLaborales('search');
            $model->unsetAttributes();  // clear any default values
            if(isset($_GET['OfertasLaborales']))
                    $model->attributes=$_GET['OfertasLaborales'];
            $this->render('index', array('model'=>$model));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new OfertasLaborales('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['OfertasLaborales']))
			$model->attributes=$_GET['OfertasLaborales'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=OfertasLaborales::model()->findByPk((int) $id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='ofertas-laborales-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
