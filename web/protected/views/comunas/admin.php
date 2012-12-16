<?php
/* @var $this ComunasController */
/* @var $model Comunas */

$this->breadcrumbs=array(
	'Comunases'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista Comunas', 'url'=>array('index')),
	array('label'=>'Crear Comuna', 'url'=>array('create')),
);
?>

<div class="contenidoPage">
    <h1>Administración Comunas</h1>

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
                         array(
                            'header'=>'Provincia',
                            'name' => 'provincia_fk',
                            'filter' => CHtml::listData(Provincias::model()->findAll(), 'pk', 'nombre'),
                            'value' => '$data->provinciaFk->nombre',
                         ),
                         'nombre',
                         array(
                                'header'=>'Detalle',
                                'class'=>'bootstrap.widgets.TbButtonColumn',
                                'template'=>'{view}{update}{delete}',
                         ),    
                         ),
                    ));
    ?>
</div>