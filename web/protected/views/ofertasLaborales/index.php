<?php
/* @var $this OfertasLaboralesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ofertas Laborales',
);

if(Yii::app()->user->getModel(Yii::app()->user->id) != null)
{
    $tipo = Yii::app()->user->getTipoUsuario(Yii::app()->user->name);
    if($tipo == 3){
        $this->menu=array(
                array('label'=>'Lista Ofertas Laborales', 'url'=>array('index')),
                array('label'=>'Create Ofertas Laborales', 'url'=>array('create')),
        );
    }
    elseif ($tipo == 2) 
    {
        $this->menu=array(
                array('label'=>'Lista Ofertas Laborales', 'url'=>array('index')),
                array('label'=>'Create Ofertas Laborales', 'url'=>array('create')),
        );
    }
    elseif($tipo == 1)
    {
        $this->menu=array(
                array('label'=>'Lista Ofertas Laborales', 'url'=>array('index')),
        );
    }
}

?>

<h1>Ofertas Laborales</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
