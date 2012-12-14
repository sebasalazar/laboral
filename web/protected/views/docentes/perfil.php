<?php

$this->menu=array(
	array('label'=>'Actualizar datos personales', 'url'=>array('update', 'id'=>Yii::app()->user->getModelUsuarioCompleto(Yii::app()->user->name)->pk)),
	array('label'=>'Publicar Ofertas de Trabajo', 'url'=>array('ofertasLaborales/create')),
);

?>
<br /> <br />
<div class="centrar1">
<?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'nombres',
		'apellidos',
		'rut',
		array(
                    'label'=>'Fecha Nacimiento',
                    'value'=>Yii::app()->dateFormatter->format("d MMMM y",strtotime($model->fecha_nacimiento)),
                    
                ),
		'genero',
		'direccion',
		array(
                    'label'=>'Comuna',
                    'value'=>$model->comuna->nombre,
                ),
		array(
                    'label'=>'Estado Civil',
                    'value'=>$model->ecFk->estado,
                ),
		array(
                    'label'=>'Departamento',
                    'value'=>$model->departamentoFk->departamento,
                ),
		'telefono',
		'celular',
		'email',
    ),
));

?>

</div>