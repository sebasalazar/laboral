<?php
/* @var $this PostulacionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ofertas Laborales',
);

?>


<h1>Ofertas Laborales</h1>
<?php
    /*
        $this->menu=array(
                array('label'=>'Ofertas Laborales', 'url'=>array('ofertasLaborales/index')),
                array('label'=>'Buscar', 'url'=>array('')),
                array('label'=>'Publicar una Oferta Laboral', 'url'=>array('ofertasLaborales/create'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Publicar Practica', 'url'=>array('#'), 'visible'=>!Yii::app()->user->isGuest),
        ); */?>
<div class="grillac">
        <?php 

        
            $this->widget('bootstrap.widgets.TbGridView', array(
                    'type'=>'striped bordered condensed',
                    'dataProvider'=>$model->search2($estudiante_fk),
                    'template'=>"{items}",
                    'filter'=>$model,
                    'columns'=>array(
                     array(
                        'header'=>'Fecha de postulacion',
                        'name'=>'fecha',
                        'filter'=>false,
                        'value'=>'Yii::app()->dateFormatter->format("d MMM y",strtotime($data->fecha))',
                        'htmlOptions'=>array('style'=>'width: 100px'),
                      ),
                /*      array(
                        'header'=>'estudiante',
                        'name' => 'estudiante_fk',
                       
                      ),
                      array(
                          'header'=>'oferta',
                          'name'=>'oferta_laboral_fk',
                      ),*/
                      array(
                        'header'=>'Rubro',
                        'name' => 'oferta_laboral_fk',
                        'filter' => CHtml::listData(Rubros::model()->findAll(), 'pk', 'rubro'),
                        'value' => '$data->ofertaLaboralFk->rubroFk->rubro',
                      ),                        
                     array(
                          'header'=>'Cargo',
                          'name'=>'oferta_laboral_fk',
                         'value'=> '$data->ofertaLaboralFk->cargo',
                      ),
                     array(
                          'header'=>'Nivel de estudios Deseable',
                          'name'=>'oferta_laboral_fk',
                          'filter'=> CHtml::listData(NivelesEstudios::model()->findAll(), 'pk', 'estudios'),
                          'value' => '$data->ofertaLaboralFk->nivelEstudioFk->estudios',
                      ),
                     array(
                        'header'=>'Fecha de publicacion',
                        'name'=>'oferta_laboral_fk',
                        'filter'=>false,
                        'value'=>'Yii::app()->dateFormatter->format("d MMM y",strtotime($data->ofertaLaboralFk->fecha_publicacion))',
                        'htmlOptions'=>array('style'=>'width: 100px'),
                      ),
                      array(
                            'header'=>'Detalle',
                            'class'=>'CButtonColumn',
                            'template'=>'{view}',
                          'buttons'=>array(
                             'view'=>array(
                             'label'=>'Mostrar',
                             'url'=>'Yii::app()->createUrl("ofertasLaborales/view", array("id"=>$data->oferta_laboral_fk))',
                          //   'url'=> "Yii::app()->controller->createUrl('ofertasLaborales/view')",array("id"=>$model->oferta_laboral_fk)
           ),
     ),
                          
                    ),    
                    ),
                ));
        ?>
</div>