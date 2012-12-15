<?php
/* @var $this EvaluacionesPracticasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Evaluaciones Practicases',
);
/*
$this->menu=array(
	array('label'=>'Create EvaluacionesPracticas', 'url'=>array('create')),
	array('label'=>'Manage EvaluacionesPracticas', 'url'=>array('admin')),
);*/
?>

<h1>Evaluaciones de Practicas</h1>

<?php 
    $this->widget('ext.groupgridview.GroupGridView', array(
      'id' => 'evaluacionPractica',
      'dataProvider'=>$model->search(),
      //'mergeColumns' => array('fecha_publicacion', 'rubro_fk'),
      'filter'=>$model,
      'columns' => array(
          array(
            'header'=>'Practicante',
            'name'=>'estudiant_fk',
            'filter'=> CHtml::listData(Estudiantes::model()->findAll(), 'pk', 'nombres'),
            'value'=> '$data->estudiantes->nombres',
          ),
          array(
            'header'=>'Encargado',
            'name'=>'encar_practicas_fk',
            'filter'=> CHtml::listData(EncargadosPracticas::model()->findAll(), 'pk', 'nombre_encargado'),
            'value'=> '$data->EncargadosPracticas->nombre_encargado',
          ),
          array(
            'header'=>'Cargo',
            'name'=>'cargo_asignado',
            'filter'=> false,
            'value'=> '$data->cargo_asignado',
          ),
        array(
            'header'=>'Detalle',
            'class'=>'CButtonColumn',
            'template'=>'{view}',
    ),    
      ),
    ));
?>