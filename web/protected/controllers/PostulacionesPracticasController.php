<?php

class PostulacionesPracticasController extends Controller
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

               	public function actionMispostulaciones()
	{
            $estudiante_fk = Yii::app()->user->getModelUsuarioCompleto(Yii::app()->user->name)->pk;
            //foreach($model=new Postulaciones)
         //   $this->layout = 'column1';
            $model=new PostulacionesPracticas('search2');
            $model->unsetAttributes();  // clear any default values
            if(isset($_GET['PostulacionesPracticas']))
                    $model->attributes=$_GET['PostulacionesPracticas'];
            $this->render('mispostulaciones', array('model'=>$model,'estudiante_fk'=>$estudiante_fk));
	}
            
        public function actionRegistrar($practica_fk,$estudiante_fk,$fecha)
	{
            
            $modelEstudiante = new Estudiantes;
            $modelEstudiante->findByAttributes(array('pk'=>$estudiante_fk));
            //Verificamos si efectivamente el estudiante posee todo el cv completo en el sistema
            //sino es asi redirecciono para que realice dicha accion
            if(!$modelEstudiante->curriculum_completo)
            {
                 Yii::app()->user->setFlash('error', "Ustedes debe completar el Curriculum primero"); 
                 $this->redirect(array('estudiantes/update3','id'=>Yii::app()->user->getModelUsuarioCompleto(Yii::app()->user->name)->pk));
            }
            else
            {
                $model=new PostulacionesPracticas;
                $model->practica_fk = $practica_fk;
                $model->estudiante_fk = $estudiante_fk;
                $model->fecha_postulacion = $fecha;  
                $model->estado = 0;
                if(PostulacionesPracticas::model()->findByAttributes(array('estudiante_fk'=>$estudiante_fk,'practica_fk'=>$practica_fk))===null){
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);   
                Yii::app()->user->setFlash('success', "Su postulacion a sido satisfactoria");
                $model->save();
                $this->redirect(array('Practicas/view','id'=>$practica_fk));}
                else{Yii::app()->user->setFlash('notice', "Usted ya postulo a esta practica"); 
                    $this->redirect(array('Practicas/index'));}
            }
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','mispostulaciones','registrar'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
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
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new PostulacionesPracticas;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['PostulacionesPracticas']))
		{
			$model->attributes=$_POST['PostulacionesPracticas'];
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
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['PostulacionesPracticas']))
		{
			$model->attributes=$_POST['PostulacionesPracticas'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->pk));
		}

		$this->render('update',array(
			'model'=>$model,
		));
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
		$dataProvider=new CActiveDataProvider('PostulacionesPracticas');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new PostulacionesPracticas('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['PostulacionesPracticas']))
			$model->attributes=$_GET['PostulacionesPracticas'];

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
		$model=PostulacionesPracticas::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='postulaciones-practicas-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
