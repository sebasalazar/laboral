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
        array(
            'label'=>'Cargo Asignado',
            'value'=>$model->cargo_asignado,
         ),
        array(
            'label'=>'Conocimientos técnicos',
            'value'=>$model->conocimientos_demostrados,
         ),
        array(
            'label'=>'Eficacia en su labor',
            'value'=>$model->eficacia,
         ),
        array(
            'label'=>'Grado de cumplimiento',
            'value'=>$model->grado_cumplimiento,
         ),
        array(
            'label'=>'Puntualidad y respeto',
            'value'=>$model->puntualidad_respeto,
         ),
        array(
            'label'=>'Capacidad de integración',
            'value'=>$model->integracion_adaptacion,
         ),
        array(
            'label'=>'Responsabilidad y superación',
            'value'=>$model->responsabilidad_superacion,
         ),
        array(
            'label'=>'Capacidades interpersonales',
            'value'=>$model->capacidades_personales,
         ),
        array(
            'label'=>'Iniciativa, creatividad e improvisación',
            'value'=>$model->iniciativa_creativi_improvi,
         ),
    ),
        
));
?>
