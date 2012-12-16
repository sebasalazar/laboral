<?php
/* @var $this EvaluacionesPracticasController */
/* @var $model EvaluacionesPracticas */

$this->breadcrumbs=array(
	'Evaluaciones Practicases'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'Listar Evaluaciones de practicas', 'url'=>array('index')),
	//array('label'=>'Crear EvaluacionesPracticas', 'url'=>array('create')),
	array('label'=>'Modificar la Evaluacion de practica', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Eliminar la  Evaluacion de practicas', 'url'=>'practicas/index', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'¿Está seguro que quiere eliminar esta evaluación?')),
	//array('label'=>'Manage EvaluacionesPracticas', 'url'=>array('admin')),
        array('label'=>'Crear PDF', 'url'=>array('pdf','id'=>$model->pk)),
    )

?>

<h1>Evaluación de Practica de: <?php echo $model->estudiantes->nombres; ?></h1>


<?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        array(
            'label'=>'Estudiante',
            'value'=>$model->estudiantes->nombres,
         ),
        array(
            'label'=>'Apellidos',
            'value'=>$model->estudiantes->apellidos,
         ),
        array(
            'label'=>'Encargado de Practica',
            'value'=>$model->EncargadosPracticas->nombre_encargado,
         ),
        'cargo_asignado',
        'conocimientos_demostrados',
        'eficacia',
        'grado_cumplimiento',
        'puntualidad_respeto',
        'integracion_adaptacion',
        'responsabilidad_superacion',
        'capacidades_personales',
        'iniciativa_creativi_improvi',
    ),
        
));
?>
