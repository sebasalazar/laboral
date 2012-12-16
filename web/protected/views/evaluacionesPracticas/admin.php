<?php
/* @var $this EvaluacionesPracticasController */
/* @var $model EvaluacionesPracticas */

$this->breadcrumbs=array(
	'Evaluaciones Practicases'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List EvaluacionesPracticas', 'url'=>array('index')),
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
                        array(
                            'header'=>'Estudiante',
                            'name'=>'estudiant_fk',
                        ),
                        array(
                            'header'=>'Encargado',
                            'name'=>'encar_practicas_fk',
                        ),
                        'cargo_asignado',
                        array(
                            'header'=>'Conocimientos',
                            'name'=>'conocimientos_demostrados',
                        ),
                        array(
                            'header'=>'Eficacia',
                            'name'=>'eficacia',
                        ),
                        array(
                                'header'=>'Detalle',
                                'class'=>'bootstrap.widgets.TbButtonColumn',
                                'template'=>'{view}{delete}',
                         ),    
                         ),
                    ));
    ?>
</div>