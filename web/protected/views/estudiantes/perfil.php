<?php
/* @var $this EstudiantesController */
/* @var $model Estudiantes */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'Modificar', 'url'=>array('update2', 'id'=>$model->pk)),
);
?>

<h1>Estudiante <?php $model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(		
		'nombres',
		'apellidos',
		'rut',
		'fecha_nacimiento',
		'genero',
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
                array('label'=>'Estado en UTEM',
                   'value'=>$model->estado0->nombre,
                 ),
		'busqueda',
		'archivo_curriculum',
	),
)); ?>
