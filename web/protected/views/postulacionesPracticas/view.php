<?php
/* @var $this PostulacionesPracticasController */
/* @var $model PostulacionesPracticas */

$this->breadcrumbs=array(
	'Postulaciones Practicases'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List PostulacionesPracticas', 'url'=>array('index')),
	array('label'=>'Create PostulacionesPracticas', 'url'=>array('create')),
	array('label'=>'Update PostulacionesPracticas', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete PostulacionesPracticas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PostulacionesPracticas', 'url'=>array('admin')),
);
?>

<h1>Detalle de Postulación a Practica :<?php echo Estudiantes::model()->nombres; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'pk',
		'fecha_postulacion',
		'practica_fk',
		'estudiante_fk',
		'estado',
		'motivo',
	),
)); 

if(Yii::app()->user->isEmpresa()){
   echo CHtml::button('Contratar', array('submit' => array('PostulacionesPracticas/registrar','practica_fk'=>$model->pk,'estudiante_fk'=>Yii::app()->user->getModelUsuarioCompleto(Yii::app()->user->name)->pk,'fecha'=>date("d-m-Y")),
       'confirm' => '¿Esta seguro que desea aceptar este postulanter?'
       ));
   echo CHtml::button('Rechazar', array('submit' => array('PostulacionesPracticas/update','practica_fk'=>$model->pk,'estudiante_fk'=>Yii::app()->user->getModelUsuarioCompleto(Yii::app()->user->name)->pk,'fecha'=>date("d-m-Y"))
       ));
}

?>