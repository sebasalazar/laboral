<?php
/* @var $this PracticasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Practicas',
);
/*
$this->menu=array(
	array('label'=>'Create Practicas', 'url'=>array('create')),
	array('label'=>'Manage Practicas', 'url'=>array('admin')),
);*/
?>

<h1 class="titulo">Practicas</h1>

<div id="grillac">
    <?php 
            $this->widget('bootstrap.widgets.TbGridView', array(
                    'type'=>'striped bordered condensed',
                    //'id' => 'practica',
                    'dataProvider'=>$model->search(),
                    'template'=>"{items}",
                    'filter'=>$model,
                    'template'=>"{items}\n{pager}",
                    'columns' => array(
                        array(
                          'header'=>'Empresa',
                          'name'=>'empresa_fk',
                          'filter'=> CHtml::listData(Empresas::model()->findAll(), 'pk', 'nombre'),
                          'value'=> '$data->empresaFk->nombre',
                        ),
                        array(
                          'header'=>'Área',
                          'name' => 'area_practica_fk',
                          'filter' => CHtml::listData(Rubros::model()->findAll(), 'pk', 'rubro'),
                          'value' => '$data->rubroFk->rubro',

                        ),
                        array(
                          'header'=>'Horario',
                          'name' => 'horario_fk',
                          'filter' => CHtml::listData(Jornadas::model()->findAll(), 'pk', 'jornada'),
                          'value' => '$data->jornadaFk->jornada',
                            'htmlOptions'=>array('style'=>'width: 100px'),
                        ),
                        array(
                          'header'=>'Fecha Inicio',
                          'name'=>'inicio_practica',
                          'filter'=>false,
                          'value'=>'Yii::app()->dateFormatter->format("d MMM y",strtotime($data->inicio_practica))',
                            'htmlOptions'=>array('style'=>'width: 100px'),
                        ),
                        array(
                          'header'=>'Fecha Termino',
                          'name'=>'fin_practica',
                          'filter'=>false,
                          'value'=>'Yii::app()->dateFormatter->format("d MMM y",strtotime($data->fin_practica))',
                            'htmlOptions'=>array('style'=>'width: 100px'),
                        ),
                        array(
                          'header'=>'Detalle',
                          'class'=>'CButtonColumn',
                          'template'=>'{view}',
                  ),    
              ),
            ));

    ?>
</div>

