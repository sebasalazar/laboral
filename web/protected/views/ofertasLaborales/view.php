<?php
/* @var $this OfertasLaboralesController */
/* @var $model OfertasLaborales */

$this->breadcrumbs=array(
	'Ofertas Laborales'=>array('index'),
	$model->pk,
);
$tipo = 0;
if(Yii::app()->user->getModel(Yii::app()->user->id) != null)
{
    $tipo = Yii::app()->user->getTipoUsuario(Yii::app()->user->name);
    if($tipo == 3){
        $this->menu=array(
            array('label'=>'Actualizar datos personales', 'url'=>array('update', 'id'=>Yii::app()->user->getModelUsuarioCompleto(Yii::app()->user->name)->pk)),
            array('label'=>'Publicar Ofertas de Trabajo', 'url'=>array('ofertasLaborales/create')),
            array('label'=>'Ofertas de Trabajo Publicadas', 'url'=>array('')),
        );
    }
    elseif ($tipo == 2) 
    {
        $this->menu=array(
                array('label'=>'Lista Ofertas Laborales', 'url'=>array('index')),
                array('label'=>'Crear Ofertas Laborales', 'url'=>array('create')),
        );
    }
    elseif($tipo == 1)
    {
        $this->menu=array(
                array('label'=>'Lista Ofertas Laborales', 'url'=>array('index')),
                array('label'=>'Mis postulaciones', 'url'=>array('postulaciones/mispostulaciones')),
            
        );

    }
}
?>
<div class="titulo">
<h1>Detalle Oferta Laboral</h1>
</div>
<br />
<div class="centrar1">
<?php 
        $this->widget('bootstrap.widgets.TbDetailView', array(
            'data'=>$model,
            'attributes'=>array(
                array(
                   'label'=>'Fecha Publicación: ',
                   'value'=>Yii::app()->dateFormatter->format("d MMMM y",strtotime($model->fecha_publicacion)),
                 ),
                array(
                   'label'=>'Empresa: ',
                   'value'=>$model->empresaFk->nombre,
                 ),
		array(
                   'label'=>'Rubro: ',
                   'value'=>$model->rubroFk->rubro,
                 ),
		array(
                   'label'=>'Nivel Estudios: ',
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
        ));
?>
</div>
<?php 

if($tipo == 1){
   echo CHtml::button('Postular', array('submit' => array('Postulaciones/registrar','oferta_laboral_fk'=>$model->pk,'estudiante_fk'=>Yii::app()->user->getModelUsuarioCompleto(Yii::app()->user->name)->pk,'fecha'=>date("d-m-Y")),
       'confirm' => '¿Esta seguro que desea postular?'
       ));           
}


?>


