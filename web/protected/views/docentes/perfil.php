<?php

$this->menu=array(
        array('label'=>'Perfil', 'url'=>array('docentes/perfil', 'id'=>Yii::app()->user->name), 'active'=>true),
	array('label'=>'Actualizar Datos', 'url'=>array('update', 'id'=>Yii::app()->user->getModelUsuarioCompleto(Yii::app()->user->name)->pk)),
	array('label'=>'Publicar Oferta Laboral', 'url'=>array('ofertasLaborales/create'), 'linkOptions'=>array('confirm'=>'Estás a punto de Salir de tu Perfil, ¿Estás Seguro que deseas salir?')),
        array('label'=>'Mis Ofertas Laborales', 'url'=>array('docentes/pupdate', 'rut'=>Yii::app()->user->name)),
);

?>
<br /> <br />
<div class="centrar1">
<h1>Perfil Docente</h1>
<br/>
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