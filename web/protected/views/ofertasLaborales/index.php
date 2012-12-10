<?php
/* @var $this OfertasLaboralesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ofertas Laborales',
);

?>
<?php
$this->menu=array(
                array('label'=>'Ofertas Laborales', 'url'=>array('ofertasLaborales/index')),
                array('label'=>'Buscar', 'url'=>array('')),
                array('label'=>'Publicar una Oferta Laboral', 'url'=>array('ofertasLaborales/create'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Publicar Practica', 'url'=>array('#'), 'visible'=>!Yii::app()->user->isGuest),
);
?>

<h1>Ofertas Laborales</h1>

<?php 
    $this->widget('ext.groupgridview.GroupGridView', array(
      'id' => 'ofertas',
      'dataProvider' => $model->search(),
      //'mergeColumns' => array('fecha_publicacion', 'rubro_fk'),
      'filter'=>$model,
      'columns' => array(
          array(
            'header'=>'Fecha Publicación',
            'name'=>'fecha_publicacion',
            'filter'=>false,
            'value'=>'Yii::app()->dateFormatter->format("d MMM y",strtotime($data->fecha_publicacion))',
          ),
          array(
            'header'=>'Rubro',
            'name' => 'rubro_fk',
            'filter' => CHtml::listData(Rubros::model()->findAll(), 'pk', 'rubro'),
            'value' => '$data->rubroFk->rubro',
          ),
          'cargo',
          array(
              'header'=>'Nivel de estudios Deseable',
              'name'=>'nivel_estudio_fk',
              'filter'=> CHtml::listData(NivelesEstudios::model()->findAll(), 'pk', 'estudios'),
              'value' => '$data->nivelEstudioFk->estudios',
          ),
        array(
            'header'=>'Detalle',
            'class'=>'CButtonColumn',
            'template'=>'{view}',
    ),    
      ),
    ));
?>
