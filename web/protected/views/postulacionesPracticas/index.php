<?php
/* @var $this PostulacionesPracticasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Postulaciones Practicases',
);

?>

<h1 class="titulo">Postulaciones a Practicas</h1>
<br/>
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
                          'header'=>'Fecha',
                          'name'=>'fecha_postulacion',
                          'filter'=> false,
                          'value'=> 'Yii::app()->dateFormatter->format("d MMM y",strtotime($data->fecha_publicacion))',
                        ),
                        /*array(
                          'header'=>'Practica',
                          'name' => 'practica_fk',
                          'filter' => CHtml::listData(Practicas::model()->findAll(), 'pk', 'nombre'),
                          'value' => '$data->practicaFk->nombre',

                        ),*/
                        array(
                          'header'=>'Postulante',
                          'name' => 'estudiante_fk',
                          'filter' => CHtml::listData(Estudiantes::model()->findAll(), 'pk', 'nombres'),
                          'value' => '$data->estudianteFk->nombres',
                            'htmlOptions'=>array('style'=>'width: 100px'),
                        ),
                        array(
                          'header'=>'Estado',
                          'name'=>'estado',
                          'filter'=>false,
                          'value'=>'$data->estado',
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

