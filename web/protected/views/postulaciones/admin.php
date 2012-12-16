<?php
/* @var $this PostulacionesController */
/* @var $model Postulaciones */

$this->breadcrumbs=array(
	'Postulaciones'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista Postulaciones', 'url'=>array('index')),
        array('label'=>'Crear Postulacion', 'url'=>array('create')),
);

?>

<div class="contenidoPage">
    <h1>Administración Postulaciones</h1>

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
                                'header'=>'Cargo Laboral',
                                'name' => 'oferta_laboral_fk',
                                'value' => '$data->ofertaLaboralFk->cargo',
                             ),
                            array(
                                'header'=>'Estudiante',
                                'name' => 'estudiante_fk',
                                'value' => '$data->estudianteFk->nombres',
                             ),
                            'fecha',
                            array(
                                'header'=>'Detalle',
                                'class'=>'bootstrap.widgets.TbButtonColumn',
                                'template'=>'{view}{delete}',
                            ),    
                         ),
                    ));
    ?>
</div>
