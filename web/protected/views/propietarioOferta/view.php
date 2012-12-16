<?php
/* @var $this PropietarioOfertaController */
/* @var $model PropietarioOferta */

$this->breadcrumbs=array(
	'Propietario Ofertas'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List PropietarioOferta', 'url'=>array('index')),
	array('label'=>'Create PropietarioOferta', 'url'=>array('create')),
	array('label'=>'Update PropietarioOferta', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete PropietarioOferta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PropietarioOferta', 'url'=>array('admin')),
);
?>

<div class="contenidoPage">
    <h1>Propietario Oferta Laboral: #<?php echo $model->oferta_laboral_fk; ?></h1>
    <br />
    <?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
                    'pk',
                    'oferta_laboral_fk',
                    'rut',
            ),
    )); ?>
</div>