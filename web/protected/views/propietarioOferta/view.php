<?php
/* @var $this PropietarioOfertaController */
/* @var $model PropietarioOferta */

$this->breadcrumbs=array(
	'Propietario Ofertas'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'Lista de Propietarios Ofertas', 'url'=>array('index')),
	array('label'=>'Crear Propietario Oferta', 'url'=>array('create')),
	array('label'=>'Actualizar Propietario Oferta', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Borrar Propietario Oferta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Propietario Oferta', 'url'=>array('admin')),
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