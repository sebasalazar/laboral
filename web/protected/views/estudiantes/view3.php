<?php
/* @var $this EstudiantesController */
/* @var $model Estudiantes */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'Modificar', 'url'=>array('update3', 'id'=>$model->pk)),
);
?>

<h1>Estudiante <?php $model->pk; ?></h1>
 <?php if($model->genero == 'F'){
        $gen = 'Femenino';
    }
    else {
        $gen = 'Masculino';
    } ?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(		
		'nombres',
		'apellidos',
		array(
                    'label'=>'Rut',
                    'value'=>Yii::app()->user->getRut($model->rut),
                ),
		'fecha_nacimiento',
		array(
                    'label'=>'Genero',
                    'value'=>$gen,
                ),
		'direccion',
                array('label'=>'Comuna',
                    'value'=>$model->comuna->nombre,
                 ),
		
                array('label'=>'Estado civil',
                    'value'=>$model->ecFk->estado,
                 ),
		'telefono',
		'celular',
		'email',
                            array('label' => 'carrera',
                    'value' => $model->carreraFk->nombre_carrera ),
                array('label'=>'Estado en UTEM',
                   'value'=>$model->estado0->nombre,
                 ),
		'busqueda',
		'archivo_curriculum',
	),
)); ?>
