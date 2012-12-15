<?php
/* @var $this PracticasController */
/* @var $model Practicas */

$this->breadcrumbs=array(
	'Practicas'=>array('index'),
	$model->pk,
);

$this->menu=array(
	array('label'=>'List Practicas', 'url'=>array('index')),
	array('label'=>'Create Practicas', 'url'=>array('create')),
	array('label'=>'Update Practicas', 'url'=>array('update', 'id'=>$model->pk)),
	array('label'=>'Delete Practicas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Practicas', 'url'=>array('admin')),
);
?>

<h1>Practica: #<?php echo $model->pk; ?></h1>

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
  )); ?>