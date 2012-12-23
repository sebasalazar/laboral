<?php

class EstudiantesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

    function formateo_rut($rut_param){ 
     
    $parte4 = substr($rut_param, -1); // seria solo el numero verificador 
    $parte3 = substr($rut_param, -4,3); // la cuenta va de derecha a izq  
    $parte2 = substr($rut_param, -7,3);  
    $parte1 = substr($rut_param, 0,-7);   //de esta manera toma todos los caracteres desde el 8 hacia la izq 

    return $parte1.".".$parte2.".".$parte3."-".$parte4; 
}
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
				'actions'=>array('index','view','view3'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update','updateperfil','update3','perfil','micurriculum','archivo','updateperfil4'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','create','update','admin','viewestudiante','updateperfil','updateperfil2'),
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
      public function actionMicurriculum($id)
        {
        
            $model= Estudiantes::model()->findByPk(Yii::app()->user->getModelUsuarioEstudiante(Yii::app()->user->name)->pk);
            if($id == Yii::app()->user->name)
                $this->render('micurriculum', array(
                        'model'=>$model
                ));
            else
                throw new CHttpException(403,'No tienes permisos suficientes para ingresar a este perfil.');
        }
        public function actionPerfil($id)
        {
        
            $model= Estudiantes::model()->findByPk(Yii::app()->user->getModelUsuarioEstudiante(Yii::app()->user->name)->pk);
            if($id == Yii::app()->user->name)
                $this->render('perfil', array(
                        'model'=>$model
                ));
            else
                throw new CHttpException(403,'No tienes permisos suficientes para ingresar a este perfil.');
        }
        
        public function actionView3($id)
	{
		$this->render('view3',array(
			'model'=>$this->loadModel((int) $id),
		));
	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Estudiantes;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Estudiantes']))
		{
			$model->attributes=$_POST['Estudiantes'];
                            $model->carrera_fk = $_POST['carrerafk'] ;
                            $model->comuna_fk = $_POST['comboComuna'];
                            $model->archivo_curriculum = $model->rut;
			if($model->save())

                        $cv = CUploadedFile::getInstance ($model, 'archivo_curriculum');

                        $cv = CUploadedFile::getInstance ($model, 'archivo_curriculum');
                        if(!empty($cv)){

                                        $cv->saveAs('cv/' . $model->rut . '.pdf');
                                    }
                                    
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
		$model=$this->loadModel((int) $id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Estudiantes']))
		{
			$model->attributes=$_POST['Estudiantes'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->pk));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

        public function actionUpdateperfil($rut)
	{
            $id=Yii::app()->user->getModelUsuarioEstudiante(Yii::app()->user->name)->pk;
            if(Yii::app()->user->getModelUsuarioEstudianteId($id)->rut == Yii::app()->user->name)
            {
                    $model=$this->loadModel($id);
                    if(isset($_POST['Estudiantes']))
                    {
                            $model->attributes=$_POST['Estudiantes'];
                            if($model->save())
                                    $this->redirect(array('view','id'=>$model->pk));
                    }

                    $this->render('updateperfil',array(
                            'model'=>$model,
                    ));
            }
            else
            {
                    throw new CHttpException(403,'No tienes permisos suficientes para ingresar a este perfil.');
            }
	}
        
        public function actionUpdateperfil4($rut)
	{             
            $id=Yii::app()->user->getModelUsuarioEstudiante(Yii::app()->user->name)->pk;
            if(Yii::app()->user->getModelUsuarioEstudianteId($id)->rut == Yii::app()->user->name)
            {
                $model = new Estudiantes();
                $model= Estudiantes::model()->findBypk($id);
                   
                if(isset($_POST['Estudiantes']))
                {
                    $model->attributes=$_POST['Estudiantes'];
                        if($model->archivo_curriculum == '')
                        {
                            $model->archivo_curriculum = $rut;
                            $cv = CUploadedFile::getInstance($model, 'archivo_curriculum');
                            if(!empty($cv))
                            {
                                if($model->save()){
                                    $cv->saveAs('cv/' . $rut . '.pdf');
                                    Yii::app()->user->setFlash('success', "Archivo guardado");
                                     $this->render('updateperfil4',array(
                                        'model'=>$model,
                                    ));
                                }
                           }
                       }
                       else
                       {
                                array_map('unlink', glob("cv/" . $rut . 'pdf')); 
                                $cv = CUploadedFile::getInstance ($model, 'archivo_curriculum');
                                if(!empty($cv))
                                {
                                        $cv->saveAs('cv/' . $model->rut . '.pdf');
                                        Yii::app()->user->setFlash('success', "Curriculum actualizado");
                                }
                       }
                            
                }                    
                        $this->render('updateperfil4',array(
                                        'model'=>$model,
                                    ));
                       
            }
            else
            {
                    throw new CHttpException(403,'No tienes permisos suficientes para ingresar a este perfil.');
            }
	}
        
        public function actionUpdateperfil2($id)
	{
                    $model=$this->loadModel($id);
                    if(isset($_POST['Estudiantes']))
                    {
                        
                            $model->attributes=$_POST['Estudiantes'];
                           
                            if($model->save())
                                    $this->redirect(array('view','id'=>$model->pk));
                    }

                    $this->render('updateperfil2',array(
                            'model'=>$model,
                    ));
        }
        
        public function actionUpdate3($id)
	{
		$model= Estudiantes::model()->findBypk($id);
                $model->setAttributes(Estudiantes::model()->findBypk($id));
                $modelCV = new Curriculums();
                $modelConocimientos = new Conocimientos();
                $modelExperiencias = new Experiencias();
                $modelFormacionComplementaria = new FormacionComplementaria;
                $modelEducacion = new Educacion();          
                
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_GET['Educacion'])){
                    $modelCV->presentacion=$_GET['Curriculums']['presentacion'];
                    $modelCV->estudiante_fk=$_GET['id'];
                    if($modelCV->save(false)){
                        foreach($_GET as $nombre_campo => $valor){ 
                                if($nombre_campo == 'Educacion'){
                                    if(isset($_GET['Educacion'])){
                                       $modelEducacion->attributes =  $_GET['Educacion'];
                                       $modelEducacion->curriculum_fk = $modelCV->pk;
                                       $modelEducacion->save(false);
                                    }
                                  
                                }
                                else if($nombre_campo == 'Experiencias'){
                                     if(isset($_GET['Experiencias'])){
                                       $modelExperiencias->attributes =  $_GET['Experiencias'];
                                       $modelExperiencias->curriculum_fk = $modelCV->pk;
                                       $modelExperiencias->save(false);
                                    }
                                }
                                else if($nombre_campo == 'FormacionComplementaria' ){
                                     if(isset($_GET['FormacionComplementaria'])){
                                       $modelFormacionComplementaria->attributes =  $_GET['FormacionComplementaria'];
                                       $modelFormacionComplementaria->curriculum_fk = $modelCV->pk;
                                       $modelFormacionComplementaria->save(false);
                                    }
                                }
                        } 
                        
                       $sql = "update estudiantes set curriculum_completo = true
                                where pk = " . $id . ';';
                       $comando = Yii::app()->db->createCommand($sql);
                       $comando -> execute();
                       $this->redirect(array('estudiantes/micurriculum','id'=>Yii::app()->user->name));
                    }
                    else
                    {
                       
                        Yii::app()->user->setFlash('notice', "Problemas!!!"); 
                        $this->redirect(array('view','id'=>$model->pk));
                    }
                }
		

		$this->render('update3',array(
			'model'=>$model,
                        'modelCV'=>$modelCV,
                        'modelConocimientos'=>$modelConocimientos,
                        'modelExperiencias'=>$modelExperiencias,
                        'modelFormacionComplementaria'=>$modelFormacionComplementaria,
                        'modelEducacion'=>$modelEducacion,
		));
	}
        
         public function actiondeleteArchivo($rut){
           
            // if($_POST['Estudiantes']){
             $id=Yii::app()->user->getModelUsuarioEstudiante(Yii::app()->user->name)->pk;
                   $sql = "update estudiantes set archivo_curriculum = ''
                                where pk = " . $id . ';';
                    $comando = Yii::app()->db->createCommand($sql);
                    $comando -> execute();
                    array_map('unlink', glob("cv/" . $rut . 'pdf')); 
                    $cv = CUploadedFile::getInstance ($model, 'archivo_curriculum');
                 if(!empty($cv)){
                    $cv->saveAs('cv/' . $model->rut . '.pdf');
               //  }
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

        public function actionSubircv($rut){
            
             $model->archivo_curriculum = $model->rut;
                           
                                        $cv = CUploadedFile::getInstance ($model, 'archivo_curriculum');
                                    if(!empty($cv)){
                                        $cv->saveAs('cv/' . $model->rut . '.pdf');
                                    }
            
        }
                            
        
	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Estudiantes');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Estudiantes('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Estudiantes']))
			$model->attributes=$_GET['Estudiantes'];

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
		$model=Estudiantes::model()->findByPk((int) $id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='estudiantes-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
