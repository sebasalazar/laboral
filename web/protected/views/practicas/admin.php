<?php
/* @var $this PracticasController */
/* @var $model Practicas */

$this->breadcrumbs=array(
	'Practicas'=>array('index'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'Lista de Practicas', 'url'=>array('index')),
	array('label'=>'Crear Practicas', 'url'=>array('create')),
);

?>

<div class="contenidoPage">
    <h1>Administración Practicas</h1>

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
                            'header'=>'Empresa',
                            'name'=>'empresa_fk',
                            'filter'=> CHtml::listData(Empresas::model()->findAll(), 'pk', 'nombre'),
                            'value' => '$data->empresaFk->nombre',
                        ),
                        array(
                            'header'=>'Rubro',
                            'name'=>'area_practica_fk',
                            'filter'=> CHtml::listData(Rubros::model()->findAll(), 'pk', 'rubro'),
                            'value' => '$data->rubroFk->rubro',
                        ),
                        'inicio_practica',
                        'fin_practica',
                         array(
                                'header'=>'Detalle',
                                'class'=>'bootstrap.widgets.TbButtonColumn',
                                'template'=>'{view}{update}{delete}',
                         ),   
                         ),
                         
                    ));
    ?>
</div>