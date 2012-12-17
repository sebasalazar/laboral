<?php
/* @var $this PracticasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'PostulacionesPracticas',
);
/*
$this->menu=array(
	array('label'=>'Create Practicas', 'url'=>array('create')),
	array('label'=>'Manage Practicas', 'url'=>array('admin')),
);*/
?>

<h1>Mis Practicas</h1>

<?php 
    $this->widget('ext.groupgridview.GroupGridView', array(
      'id' => 'practica',
      'dataProvider'=>$model->search2($estudiante_fk),
      //'mergeColumns' => array('fecha_publicacion', 'rubro_fk'),
      'filter'=>$model,
      'columns' => array(
          array(
            'header'=>'Empresa',
            'name'=>'practica_fk',
            'filter'=> CHtml::listData(Empresas::model()->findAll(), 'pk', 'nombre'),
            'value'=> '$data->practicaFk->empresaFk->nombre',
          ),
          array(
            'header'=>'Área',
            'name' => 'practica_fk',
            'filter' => CHtml::listData(Rubros::model()->findAll(), 'pk', 'rubro'),
            'value' => '$data->practicaFk->rubroFk->rubro',
          ),
         array(
            'header'=>'Horario',
            'name' => 'practica_fk',
            'filter' => CHtml::listData(Jornadas::model()->findAll(), 'pk', 'jornada'),
            'value' => '$data->practicaFk->jornadaFk->jornada',
          ),
          array(
            'header'=>'Fecha Inicio',
            'name'=>'inicio_practica',
            'filter'=>false,
            'value'=>'Yii::app()->dateFormatter->format("d MMM y",strtotime($data->practicaFk->inicio_practica))',
          ),
          array(
            'header'=>'Fecha Termino',
            'name'=>'fin_practica',
            'filter'=>false,
            'value'=>'Yii::app()->dateFormatter->format("d MMM y",strtotime($data->practicaFk->fin_practica))',
          ),
                      array(
                            'header'=>'Detalle',
                            'class'=>'CButtonColumn',
                            'template'=>'{view}',
                          'buttons'=>array(
                             'view'=>array(
                             'label'=>'Mostrar',
                             'url'=>'Yii::app()->createUrl("practicas/view", array("id"=>$data->practica_fk))',
                          //   'url'=> "Yii::app()->controller->createUrl('ofertasLaborales/view')",array("id"=>$model->oferta_laboral_fk)
           ),
     ),
                          
                    ), 
      ),
    ));
?>

