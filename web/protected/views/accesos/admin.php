<?php
/* @var $this AccesosController */
/* @var $model Accesos */

$this->breadcrumbs=array(
	'Accesoses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista de Accesos', 'url'=>array('index')),
	array('label'=>'Crear Acceso', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('accesos-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="contenidoPage">
    <h1>Administración Accesos</h1>

    <p>
    Dentro de la busqueda, opcionalmente puede utilizar (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    o <b>=</b>) para filtrar en caso de valores numericos.
    <br/><br/>
    <b>Importante:</b> La busqueda por Rut es sin puntos, sin guion, ni digito verificador.
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
                                 'header'=>'Rut',
                                 'name'=>'rut',
                                 'value'=>'Yii::app()->user->getRut($data->rut)',
                             ),
                            'fecha',
                            'ip',
                         array(
                                'header'=>'Detalle',
                                'class'=>'bootstrap.widgets.TbButtonColumn',
                                'template'=>'{view}{update}{delete}',
                         ),    
                         ),
                    ));
    ?>
</div>