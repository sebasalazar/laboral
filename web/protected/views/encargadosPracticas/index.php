<?php
/* @var $this EncargadosPracticasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Encargados Practicases',
);

$this->menu=array(
	array('label'=>'Crear Encargados de Practicas', 'url'=>array('create')),
	//array('label'=>'Manage EncargadosPracticas', 'url'=>array('admin')),
);
?>

<h1>Encargados de Practicas</h1>

<?php $this->widget('ext.groupgridview.GroupGridView', array(
      'id' => 'EncargadosEmpresas',
      'dataProvider'=>$model->search(),
      //'mergeColumns' => array('fecha_publicacion', 'rubro_fk'),
      'filter'=>$model,
      'columns' => array(
          array(
            'header'=>'Rut',
            'name' => 'rut_epracti',
            'filter' => CHtml::listData(EncargadosPracticas::model()->findAll(), 'pk', 'rut_epracti'),
            'value' => '$data->rut_epracti',
          ),
          array(
            'header'=>'Nombre',
            'name' => 'nombre_encargado',
            'filter' => CHtml::listData(EncargadosPracticas::model()->findAll(), 'pk', 'nombre_encargado'),
            'value' => '$data->nombre_encargado',
          ),
          array(
            'header'=>'Apellidos',
            'name' => 'apellido_encargado',
            'filter' => CHtml::listData(EncargadosPracticas::model()->findAll(), 'pk', 'apellido_encargado'),
            'value' => '$data->apellido_encargado',
          ),
          array(
            'header'=>'Area de practica',
            'name'=>'area_practica_fk',
            'filter'=>CHtml::listData(Rubros::model()->findAll(), 'pk', 'rubro'),
            'value'=>'$data->actividad->rubro',
          ),
           array(
            'header'=>'Detalle',
            'class'=>'CButtonColumn',
            'template'=>'{view}',
          ),
      ),
));

?>