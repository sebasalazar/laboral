<?php
/* @var $this OfertasLaboralesController */
/* @var $model OfertasLaborales */

$this->breadcrumbs=array(
	'Ofertas Laborales'=>array('index'),
	$model->pk,
);

$this->menu=array(
        array('label'=>'Ofertas Laborales', 'url'=>array('ofertasLaborales/index')),
	array('label'=>'Publicar Oferta Laboral', 'url'=>array('ofertasLaborales/create'), 'visible'=>!Yii::app()->user->isGuest && !Yii::app()->user->isEstudiante()),
    array('label'=>'Mis Postulaciones', 'url'=>array('postulaciones/mispostulaciones'), 'visible'=>Yii::app()->user->isEstudiante()),
);
?>


<div class="titulo">
<?php echo '<h2>Empresa <b>'.$model->empresaFk->nombre.'</b> solicita <b>'.$model->cargo.'</b</h2>'?>
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

if(Yii::app()->user->isEstudiante()){
   echo CHtml::button('Postular', array('submit' => array('Postulaciones/registrar','oferta_laboral_fk'=>$model->pk,'estudiante_fk'=>Yii::app()->user->getModelUsuarioCompleto(Yii::app()->user->name)->pk,'fecha'=>date("d-m-Y")),
       'confirm' => '¿Esta seguro que desea postular?'
       ));           
}
else if(Yii::app()->user->isEmpresa() || Yii::app()->user->isDocente() || Yii::app()->user->isAdmin())
{
    echo '<div class="contenidoPage">';
            $this->widget('bootstrap.widgets.TbGridView', array(
                    'type'=>'striped bordered condensed',
                    'dataProvider'=>$model1->searchCustom($id),
                    'template'=>"{items}",
                    'template'=>"{items}\n{pager}",
                    'columns'=>array(
                     array(
                        'header'=>'Rut Estudiante',
                        'name'=>'estudiante_fk',
                        'value'=>'$data->estudianteFk->rut',
                      ),
                     array(
                        'header'=>'Estudiante',
                        'name'=>'estudiante_fk',
                        'value'=>'$data->estudianteFk->nombres',
                     ),
                     array(
                        'header'=>'Fecha',
                        'name' => 'fecha',
                        'value' => '$data->fecha',
                     ),
                    ),
                ));
    echo '</div>';
}


?>


