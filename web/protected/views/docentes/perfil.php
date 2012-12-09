<?php

$this->menu=array(
	array('label'=>'Actualizar datos personales', 'url'=>array('update', 'id'=>Yii::app()->user->getModelUsuarioCompleto(Yii::app()->user->name)->pk)),
	array('label'=>'Publicar Ofertas de Trabajo', 'url'=>array('ofertasLaborales/create')),
        array('label'=>'Ofertas de Trabajo Publicadas', 'url'=>array('')),
);

?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk',
		'nombres',
		'apellidos',
		'rut',
		'fecha_nacimiento',
		'genero',
		'direccion',
		'comuna_id',
		'ec_fk',
		'departamento_fk',
		'telefono',
		'celular',
		'email',
	),
)); ?>