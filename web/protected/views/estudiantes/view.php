<?php
/* @var $this EstudiantesController */
/* @var $model Estudiantes */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	$model->pk,
);
$tipoUsuario=Yii::app()->user->getTipoUsuario((Yii::app()->user->name));
            if($tipoUsuario == 1){

        
$this->menu=array(
	array('label'=>'Modificar perfil', 'url'=>array('updateperfil', 'rut'=>$model->rut)),);}
        else{
            $this->menu=array(

	array('label'=>'Ver Estudiantes', 'url'=>array('admin')),
	array('label'=>'Crear Estudiantes', 'url'=>array('create')),
);
            
        }

?>

<h1>Mi perfil <?php //$model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(		
		'nombres',
		'apellidos',
		'rut',
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
                array('label'=>'Estado en UTEM',
                   'value'=>$model->estado0->nombre,
                 ),
		//'busqueda',
		'archivo_curriculum',
	),
)); ?>
