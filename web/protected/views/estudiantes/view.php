<?php
/* @var $this EstudiantesController */
/* @var $model Estudiantes */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'Modificar perfil', 'url'=>array('updateperfil', 'id'=>Yii::app()->user->getModelUsuarioCompleto(Yii::app()->user->name)->pk)),
);
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
                array('label'=>'Estado en UTEM',
                   'value'=>$model->estado0->nombre,
                 ),
		'busqueda',
		'archivo_curriculum',
	),
)); ?>
