<?php
/* @var $this EncargadosPracticasController */
/* @var $model EncargadosPracticas */

$this->breadcrumbs=array(
	'Encargados Practicases'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List EncargadosPracticas', 'url'=>array('index')),
);
?>

<div class="contenidoPage">
    <h1>Administración Rubros</h1>

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
                        'rut_epracti',
                        'nombre_encargado',
                        'apellido_encargado',
                        'empresa_fk',
                        'area_practica_fk',
                        array(
                                'header'=>'Detalle',
                                'class'=>'bootstrap.widgets.TbButtonColumn',
                                'template'=>'{view}{delete}',
                         ),    
                         ),
                    ));
    ?>
</div>