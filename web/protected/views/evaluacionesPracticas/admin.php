<?php
/* @var $this EvaluacionesPracticasController */
/* @var $model EvaluacionesPracticas */

$this->breadcrumbs=array(
	'Evaluaciones Practicases'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar Evaluaciones de Practicas', 'url'=>array('index')),
);

?>

<div class="contenidoPage">
    <h1>Administración Rubros</h1>

    <p>
    Dentro de la busqueda, opcionalmente puede utilizar (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    o <b>=</b>) para filtrar en caso de valores numericos.
    </p>

    <?php
         array(
                'class'=>'CButtonColumn',
                'template' => '{view} {update} {delete} {pdf}',
                'buttons'=>array(
                        'pdf' => array(
                        'label'=>'Generar PDF',
                        'url'=>"CHtml::normalizeUrl(array('pdf', 'id'=>\$data->id
                        ))",
                        'imageUrl'=>Yii::app()->request->baseUrl.'/images/pdf_icon.png',
                        'options' => array('class'=>'pdf'),
                        ),
                ),
        )

    ?>
</div>