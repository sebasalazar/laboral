<?php
/* @var $this DocentesController */
/* @var $model Docentes */

$this->breadcrumbs=array(
	'Docentes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Docentes', 'url'=>array('index')),
	array('label'=>'Create Docentes', 'url'=>array('create')),
);

?>

<div class="contenidoPage">
    <h1>Administración Carreras</h1>

    <p>
    Dentro de la busqueda, opcionalmente puede utilizar (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    o <b>=</b>) para filtrar en caso de valores numericos.
    </p>

    <?php
                $this->widget('bootstrap.widgets.TbGridView', array(
                        'type'=>'striped bordered condensed',
                        'dataProvider'=>$model->search(),
                        'template'=>"{items}",
                        'filter'=>$model,
                        'template'=>"{items}\n{pager}",
                        'columns'=>array(
                        'pk',
                        'nombres',
                        'apellidos',
                        'rut',
                        array(
                            'header'=>'Departamento',
                            'name' => 'departamento_fk',
                            'filter' => CHtml::listData(Departamentos::model()->findAll(), 'pk', 'departamento'),
                            'value' => '$data->departamentoFk->departamento',
                         ),
                        'email',
                         array(
                                'header'=>'Detalle',
                                'class'=>'bootstrap.widgets.TbButtonColumn',
                                'template'=>'{view}{update}{delete}',
                         ),    
                         ),
                    ));
    ?>
</div>