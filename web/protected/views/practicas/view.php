<?php
/* @var $this PracticasController */
/* @var $model Practicas */

$this->breadcrumbs=array(
	'Practicas'=>array('index'),
	$model->pk,
);
    if(Yii::app()->user->isEstudiante()){
        $this->menu=array(
	//array('label'=>'List Practicas', 'url'=>array('index')),
	array('label'=>'Ver Practicas', 'url'=>array('index')),
	array('label'=>'Mis Postulaciones', 'url'=>array('postulacionesPracticas/mispostulaciones')),
	//array('label'=>'Manage Practicas', 'url'=>array('admin')),
);
    }
    else{
$this->menu=array(
	//array('label'=>'List Practicas', 'url'=>array('index')),
	array('label'=>'Crear Practica', 'url'=>array('create')),
	array('label'=>'Modificiar Practica', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Eliminar Practica', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'¿Está seguro que quiere eliminar esta practica?')),
	//array('label'=>'Manage Practicas', 'url'=>array('admin')),
);}
?>

<h1>Practica<?php // echo $model->pk; ?></h1>

<?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
                    array(
                        'label'=>'Empresa',
                        'value'=>$model->empresaFk->nombre,
                    ),
                    array(
                        'label'=>'Rubro',
                        'value'=>$model->rubroFk->rubro,
                    ),
                    array(
                        'label'=>'Jornada',
                        'value'=>$model->jornadaFk->jornada,
                    ),
                    'remuneracion',
            ),
  ));
    if(Yii::app()->user->isEstudiante()){
   echo CHtml::button('Postular', array('submit' => array('PostulacionesPracticas/registrar','practica_fk'=>$model->pk,'estudiante_fk'=>Yii::app()->user->getModelUsuarioCompleto(Yii::app()->user->name)->pk,'fecha'=>date("d-m-Y")),
       'confirm' => '¿Esta seguro que desea postular?'
       ));           
}
?>