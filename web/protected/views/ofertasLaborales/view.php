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

<h1>Trabajo #<?php echo $model->pk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
                'fecha_publicacion',
                 array(
                   'label'=>'Empresa: ',
                   'value'=>$model->empresaFk->nombre,
                 ),
		array(
                   'label'=>'Rubro: ',
                   'value'=>$model->rubroFk->rubro,
                 ),
		array(
                   'label'=>'Nivel Estudios Solicitados: ',
                   'value'=>$model->nivelEstudioFk->estudios,
                 ),
                array(
                   'label'=>'Cierre: ',
                   'value'=>Yii::app()->dateFormatter->format("d MMMM y",strtotime($model->plazo)),
                 ),
		array(
                   'label'=>'Renta: ',
                   'value'=> '$'.$model->renta,
                 ),
		array(
                   'label'=>'Numero de Vacantes: ',
                   'value'=> $model->vacantes,
                 ),
		'descripcion',
		array(
                   'label'=>'Ubicación: ',
                   'value'=> $model->ubicacion,
                 ),
		array(
                   'label'=>'Cargo a Postular: ',
                   'value'=> $model->cargo,
                 ),
		array(
                   'label'=>'Beneficios: ',
                   'value'=> $model->beneficios,
                 ),
		array(
                   'label'=>'Tipo Jornada: ',
                   'value'=> $model->jornadaFk->jornada,
                 ),
		array(
                   'label'=>'Beneficios: ',
                   'value'=> $model->contratoFk->contrato,
                 ),
	),
)); ?>
