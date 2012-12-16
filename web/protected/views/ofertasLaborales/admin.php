<?php
/* @var $this OfertasLaboralesController */
/* @var $model OfertasLaborales */

$this->breadcrumbs=array(
	'Ofertas Laborales'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List OfertasLaborales', 'url'=>array('index')),
	array('label'=>'Create OfertasLaborales', 'url'=>array('create')),
);

?>

<div class="contenidoPage">
    <h1>Administración Ofertas Laborales</h1>

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
                        array(
                        'header'=>'Fecha',
                        'name'=>'fecha_publicacion',
                        'filter'=>false,
                        'value'=>'Yii::app()->dateFormatter->format("d MMM y",strtotime($data->fecha_publicacion))',
                        'htmlOptions'=>array('style'=>'width: 100px'),
                        ),
                        array(
                          'header'=>'Rubro',
                          'name' => 'rubro_fk',
                          'filter' => CHtml::listData(Rubros::model()->findAll(), 'pk', 'rubro'),
                          'value' => '$data->rubroFk->rubro',
                        ),
                        array(
                            'header'=>'Cargo',
                            'name'=>'cargo',
                        ),
                        array(
                            'header'=>'Nivel de estudios Deseable',
                            'name'=>'nivel_estudio_fk',
                            'filter'=> CHtml::listData(NivelesEstudios::model()->findAll(), 'pk', 'estudios'),
                            'value' => '$data->nivelEstudioFk->estudios',
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