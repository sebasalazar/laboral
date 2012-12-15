<?php

$this->menu=array(
	array('label'=>'Modificar datos', 'url'=>array('update', 
            'id'=>Yii::app()->user->getModelUsuarioCompleto(Yii::app()->user->name)->pk)),
        array('label'=>'Eliminar Empresa', 'url'=>'/site/index', 
            'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),
                'confirm'=>'¿Está seguro que quiere eliminar esta empresa?')),
);

?>
<br /> <br />
<div class="centrar1">
<?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'nombre',
		'direccion',
		array(
                    'label'=>'Comuna',
                    'value'=>$model->comuna->nombre,
                ),
		'codigo_postal',
		'telefono',
                'email',
		array(
                    'label'=>'Actividad',
                    'value'=>$model->actividad->rubro,
                ),
		'descripcion_negocio',
		'web',
    ),
));

?>

</div>