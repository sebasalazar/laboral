<?php
/* @var $this EncargadosEmpresasController */
/* @var $model EncargadosEmpresas */

$this->breadcrumbs=array(
	'Encargados Empresases'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar Encargados de Empresas', 'url'=>array('index')),
);
?>

<div class="contenidoPage">
    <h1>Administración de Encargados Empresas</h1>

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
                        'empresa_fk',
                        array(
                            'header'=>'Rut',
                            'name'=>'rut_encargado',
                        ),
                        'nombre',
                        'apellidos',
                        'email',
                        array(
                                'header'=>'Detalle',
                                'class'=>'bootstrap.widgets.TbButtonColumn',
                                'template'=>'{view}{delete}',
                         ),    
                         ),
                    ));
    ?>
</div>