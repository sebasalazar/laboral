<?php
/* @var $this EncargadosEmpresasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Encargados Empresases',
);

$this->menu=array(
	array('label'=>'Crear Encargado de Empresas', 'url'=>array('create')),
	//array('label'=>'Manage EncargadosEmpresas', 'url'=>array('admin')),
);
?>

<h1>Encargado de Empresas</h1>
<div id="grillac">
<?php $this->widget('bootstrap.widgets.TbGridView', array(
        'type'=>'striped bordered condensed',
      //'id' => 'EncargadosEmpresas',
        'dataProvider'=>$model->search(),
        'template'=>"{items}",
        'filter'=>$model,
        'template'=>"{items}\n{pager}",
        'columns' => array(
          array(
            'header'=>'Rut',
            'name' => 'rut_encargado',
            'filter' => CHtml::listData(EncargadosEmpresas::model()->findAll(), 'pk', 'rut_encargado'),
            'value' => '$data->rut_encargado',
              'htmlOptions'=>array('style'=>'width: 100px'),
          ),
          array(
            'header'=>'Nombre',
            'name' => 'nombre',
            //'filter' => EncargadosEmpresas::model()->nombre,
            'value' => '$data->nombre',
          ),
          array(
            'header'=>'Apellidos',
            'name' => 'apellidos',
           //'filter' => CHtml::listData(EncargadosEmpresas::model()->findAll(), 'pk', 'apellidos'),
            'value' => '$data->apellidos',
          ),
          array(
            'header'=>'Direccion',
            'name' => 'direccion',
            //'filter' => CHtml::listData(EncargadosEmpresas::model()->findAll(), 'pk', 'direccion'),
            'value' => '$data->direccion',
          ),
          array(
            'header'=>'Correo Electronico',
            'name' => 'email',
            //'filter' => CHtml::listData(EncargadosEmpresas::model()->findAll(), 'pk', 'email'),
            'value' => '$data->email',
           ),
          array(
            'header'=>'Telefono Contacto',
            'name' => 'telefono',
            //'filter' => CHtml::listData(EncargadosEmpresas::model()->findAll(), 'pk', 'telefono'),
            'value' => '$data->telefono',
           ),
           array(
            'header'=>'Detalle',
            'class'=>'CButtonColumn',
            'template'=>'{view}',
          ),
      ),
));

?>
</div>
