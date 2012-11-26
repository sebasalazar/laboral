<?php
/* @var $this OfertasLaboralesController */
/* @var $model OfertasLaborales */

$this->breadcrumbs=array(
	'Ofertas Laborales'=>array('index'),
	$model->pk,
);
if(Yii::app()->user->getModel(Yii::app()->user->id) != null)
{
    $tipo = Yii::app()->user->getTipoUsuario(Yii::app()->user->name);
    if($tipo == 3){
        $this->menu=array(
                array('label'=>'Lista Ofertas Laborales', 'url'=>array('index')),
                array('label'=>'Create Ofertas Laborales', 'url'=>array('create')),
        );
    }
    elseif ($tipo == 2) 
    {
        $this->menu=array(
                array('label'=>'Lista Ofertas Laborales', 'url'=>array('index')),
                array('label'=>'Create Ofertas Laborales', 'url'=>array('create')),
        );
    }
    elseif($tipo == 1)
    {
        $this->menu=array(
                array('label'=>'Lista Ofertas Laborales', 'url'=>array('index')),
        );
    }
}
?>

<h1>View OfertasLaborales #<?php echo $model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk',
		'empresa_fk',
		'rubro_fk',
		'nivel_estudio_fk',
		'renta',
		'vacantes',
		'plazo',
		'descripcion',
		'ubicacion',
		'cargo',
		'fecha_publicacion',
		'beneficios',
		'jornada_fk',
		'contrato_fk',
		'activo',
	),
)); ?>
