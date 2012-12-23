<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
if(Yii::app()->user->isAdmin())
{
$this->menu=array(
        array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
	array('label'=>'Lista de Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('pcreate')),
	array('label'=>'Actualizar Usuario', 'url'=>array('update', 'id'=>$model->username)),
	array('label'=>'Borrar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->username),'confirm'=>'Are you sure you want to delete this item?')),
);
}
?>


<div class="contenidoPage">
    <h1>Usuario: <?php echo Yii::app()->user->getRut($model->username); ?></h1>
    <br />
    <?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
                    array(
                        'label'=>'Usuario',
                        'value'=>Yii::app()->user->getRut($model->username)
                    ),
                    'roles',
            ),
    )); ?>
</div>