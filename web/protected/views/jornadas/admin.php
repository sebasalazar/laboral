<?php
/* @var $this JornadasController */
/* @var $model Jornadas */

$this->breadcrumbs=array(
	'Jornadases'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Jornadas', 'url'=>array('index')),
	array('label'=>'Create Jornadas', 'url'=>array('create')),
);

?>

<div class="contenidoPage">
    <h1>Administración Jornadas</h1>

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
                        'jornada',
                        'descripcion',
                        array(
                                'header'=>'Detalle',
                                'class'=>'bootstrap.widgets.TbButtonColumn',
                                'template'=>'{view}{update}{delete}',
                         ),    
                         ),
                    ));
    ?>
</div>