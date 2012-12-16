<?php
/* @var $this EstudiantesController */
/* @var $model Estudiantes */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Ver Estudiantes', 'url'=>array('admin')),
	array('label'=>'Crear Estudiantes', 'url'=>array('create')),
);
?>

<div class="contenidoPage">
    <h1>Administración Estudiantes</h1>
    <p>
    Dentro de la busqueda, opcionalmente puede utilizar (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    o <b>=</b>) para filtrar en caso de valores numericos.
    </p>


    <?php
                $this->widget('bootstrap.widgets.TbGridView', array(
                        'type'=>'striped bordered condensed',
                        'dataProvider'=>$model->search(),
                        'template'=>"{items}",
                        'filter'=>$model,
                        'template'=>"{items}\n{pager}",
                        'columns'=>array(
                        'pk',
                        'nombres',
                        'apellidos',
                        'rut',
                        'genero',
                        'email',
                         array(
                                'header'=>'Detalle',
                                'class'=>'bootstrap.widgets.TbButtonColumn',
                                'template'=>'{view}{update}{delete}',
                                                       'buttons'=>array(
                             'update'=>array(
                             'label'=>'Update',
                             'url'=>'Yii::app()->createUrl("estudiantes/updateperfil2", array("id"=>$data->pk))',
                          //   'url'=> "Yii::app()->controller->createUrl('ofertasLaborales/view')",array("id"=>$model->oferta_laboral_fk)
           ),
     ),
                         ),    
                         ),
                    ));
    ?>
</div>