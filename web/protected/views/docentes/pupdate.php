<?php
$this->menu=array(
	array('label'=>'Actualizar datos personales', 'url'=>array('update', 'id'=>Yii::app()->user->getModelUsuarioCompleto(Yii::app()->user->name)->pk)),
	array('label'=>'Publicar Ofertas de Trabajo', 'url'=>array('ofertasLaborales/create')),
        array('label'=>'Mis Ofertas Laborales', 'url'=>array('docentes/pupdate', 'rut'=>Yii::app()->user->name)),
);
?>
<br />
<div class="grillac">
    <?php
            $this->widget('bootstrap.widgets.TbGridView', array(
                    'type'=>'striped bordered condensed',
                    'dataProvider'=>$ofertas->custom2Search(),
                    'template'=>"{items}",
                    'filter'=>$ofertas,
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
                            'class'=>'bootstrap.widgets.TbButtonColumn',
                            'template'=>'{view}{update}{delete}',
                            'buttons'=>array(
                                    'view' => array(
                                      'url'=>'Yii::app()->controller->createUrl("ofertasLaborales/view", array("id"=>$data->pk))',
                                    ),
                                    'update' => array(
                                      'url'=>'Yii::app()->controller->createUrl("ofertasLaborales/update", array("id"=>$data->pk))',
                                    ),
                                    'delete' => array(
                                      'url'=>'Yii::app()->controller->createUrl("ofertasLaborales/delete", array("id"=>$data->pk,"command"=>"delete"))',
                                    ),
                            ),
                      ),          
                    ),
                ));
        ?>
</div>