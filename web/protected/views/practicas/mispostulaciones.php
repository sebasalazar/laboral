<?php
/* @var $this PracticasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Practicas',
);
/*
$this->menu=array(
	array('label'=>'Create Practicas', 'url'=>array('create')),
	array('label'=>'Manage Practicas', 'url'=>array('admin')),
);*/
?>

<h1>Practicas</h1>

<?php 
    $this->widget('ext.groupgridview.GroupGridView', array(
      'id' => 'practica',
      'dataProvider'=>$model->search(),
      //'mergeColumns' => array('fecha_publicacion', 'rubro_fk'),
      'filter'=>$model,
      'columns' => array(
          array(
            'header'=>'Empresa',
            'name'=>'empresa_fk',
            'filter'=> CHtml::listData(Empresas::model()->findAll(), 'pk', 'nombre'),
            'value'=> '$data->empresaFk->nombre',
          ),
          array(
            'header'=>'Área',
            'name' => 'area_practica_fk',
            'filter' => CHtml::listData(Rubros::model()->findAll(), 'pk', 'rubro'),
            'value' => '$data->rubroFk->rubro',
          ),
          array(
            'header'=>'Horario',
            'name' => 'horario_fk',
            'filter' => CHtml::listData(Jornadas::model()->findAll(), 'pk', 'jornada'),
            'value' => '$data->jornadaFk->jornada',
          ),
          array(
            'header'=>'Fecha Inicio',
            'name'=>'inicio_practica',
            'filter'=>false,
            'value'=>'Yii::app()->dateFormatter->format("d MMM y",strtotime($data->inicio_practica))',
          ),
          array(
            'header'=>'Fecha Termino',
            'name'=>'fin_practica',
            'filter'=>false,
            'value'=>'Yii::app()->dateFormatter->format("d MMM y",strtotime($data->fin_practica))',
          ),
        array(
            'header'=>'Detalle',
            'class'=>'CButtonColumn',
            'template'=>'{view}',
    ),    
      ),
    ));
?>

