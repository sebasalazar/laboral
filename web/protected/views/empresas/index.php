<?php
/* @var $this EmpresasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Empresases',
);

$this->menu=array(
	array('label'=>'Crear Empresas', 'url'=>array('create')),
	array('label'=>'Administrar Empresas', 'url'=>array('admin')),
);
?>

<h1>Empresas</h1>

<?php 
    $this->widget('ext.groupgridview.GroupGridView', array(
      'id' => 'empresa',
      'dataProvider'=>$model->search(),
      //'mergeColumns' => array('fecha_publicacion', 'rubro_fk'),
      'filter'=>$model,
      'columns' => array(
          array(
            'header'=>'Rut Empresa',
            'name'=>'rut',
            'filter'=> CHtml::listData(Empresas::model()->findAll(), 'pk', 'rut'),
            'value'=> '$data->rut',
          ),
          array(
            'header'=>'Nombre Empresa',
            'name' => 'nombre',
            'filter' => CHtml::listData(Empresas::model()->findAll(), 'pk', 'nombre'),
            'value' => '$data->nombre',
          ),
          array(
            'header'=>'Dirección',
            'name' => 'direccion',
            'filter' => CHtml::listData(Empresas::model()->findAll(), 'pk', 'direccion'),
            'value' => '$data->direccion',
          ),/*
          array(
            'header'=>'Comuna',
            'name'=>'comuna_fk',
            'filter'=> CHtml::listData(Comunas::model()->findAll(), 'pk', 'nombre'),
            'value'=>'$data->comuna->nombre',
          ),
          array(
            'header'=>'Codigo Postal',
            'name'=>'codigo_postal',
            'filter'=>CHtml::listData(Empresas::model()->findAll(), 'pk', 'codigo_postal'),
            'value'=>'$data->codigo_postal',
          ),
          array(
            'header'=>'Telefono',
            'name'=>'telefono',
            'filter'=>CHtml::listData(Empresas::model()->findAll(), 'pk', 'telefono'),
            'value'=>'$data->telefono',
          ),
          array(
            'header'=>'Email',
            'name'=>'email',
            'filter'=>CHtml::listData(Empresas::model()->findAll(), 'pk', 'email'),
            'value'=>'$data->email',
          ),*/
          array(
            'header'=>'Actividad de la Empresa',
            'name'=>'actividad_fk',
            'filter'=>CHtml::listData(Rubros::model()->findAll(), 'pk', 'rubro'),
            'value'=>'$data->actividad->rubro',
          ),/*
          array(
            'header'=>'Descripción de Negocio',
            'name'=>'descripcion_negocio',
            'filter'=>CHtml::listData(Empresas::model()->findAll(), 'pk', 'descripcion_negocio'),
            'value'=>'$data->descripcion_negocio',
          ),
          array(
            'header'=>'Web',
            'name'=>'web',
            'filter'=>CHtml::listData(Empresas::model()->findAll(), 'pk', 'web'),
            'value'=>'$data->web',
          ),*/
        array(
            'header'=>'Detalle',
            'class'=>'CButtonColumn',
            'template'=>'{view}',
    ),    
      ),
    ));
?>
