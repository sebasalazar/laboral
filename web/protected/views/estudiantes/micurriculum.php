<?php
/* @var $this EstudiantesController */
/* @var $model Estudiantes */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'Modificar perfil', 'url'=>array('updateperfil', 'rut'=>$model->rut)),
);
?>

<h1>Mi perfil <?php $rut1=Yii::app()->user->getFormateoRut((Yii::app()->user->name)); //$model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(		
		'nombres',
		'apellidos',
		//'rut',
            array('label'=>'Rut', 'value' =>$rut1,),
		array(
                    'label'=>'Fecha Nacimiento',
                    'value'=>Yii::app()->dateFormatter->format("d MMMM y",strtotime($model->fecha_nacimiento)),
                    
                ),
		'genero',
		'direccion',
                array('label'=>'Comuna',
                    'value'=>$model->comunaFk->nombre,
                 ),
		
                array('label'=>'Estado civil',
                    'value'=>$model->ecFk->estado,
                 ),
		'telefono',
		'celular',
		'email',
                array('label' => 'carrera',
                    'value' => $model->carreraFk->nombre_carrera ), 
            //    array('label'=>'Estado en UTEM',
                //   'value'=>$model->estado0->nombre,
               //  ),
		//'busqueda',
	//	'archivo_curriculum',
           // if()
          
            //Verificamos si efectivamente el estudiante posee todo el cv completo en el sistema
            //sino es asi redirecciono para que realice dicha accion
        //    if(!$modelEstudiante->curriculum_completo)
	),

)
);
?>
<br br>
<?php
$modelEstudiante = Estudiantes::model()->findByAttributes(array('pk'=>Yii::app()->user->getModelUsuarioEstudiante(Yii::app()->user->name)->pk));


if($modelEstudiante->curriculum_completo){$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
            /*array('label'=>'Educacion',
                    'value'=>$model->curriculums->educacions->nombre_institucion),
                            //array('label' => 'carrera',
                  //  'value' => $model->curriculums->presentacion ), */
	//	'nombres',
            ))
        );}

else{
       echo CHtml::button('Terminar Curriculum', array('submit' => array('estudiantes/update3', 'id'=>$modelEstudiante->pk
       )));      
    
    
}
?>