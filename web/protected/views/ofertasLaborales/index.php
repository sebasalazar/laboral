<?php
/* @var $this OfertasLaboralesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ofertas Laborales',
);

?>

<h1>Ofertas Laborales</h1>

<?php 
    $this->widget('ext.groupgridview.GroupGridView', array(
      'id' => 'grid1',
      'dataProvider' => $dp,
      'mergeColumns' => array('fecha_publicacion', 'rubro_fk'),
      'columns' => array(
          'fecha_publicacion',
          array(
              'header'=>'Rubro',
              'name'=>'rubro_fk',
              'value' => '$data->rubroFk->rubro',
          ),
          'cargo',
          array(
              'header'=>'Nivel de estudios Deseable',
              'name'=>'nivel_estudio_fk',
              'value' => '$data->nivelEstudioFk->estudios',
          ),
        array(
        'class'=>'CButtonColumn',
        'template'=>'{view}',
    ),    
      ),
    ));
?>
