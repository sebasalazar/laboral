<?php
/* @var $this OfertasLaboralesController */
/* @var $model OfertasLaborales */

$this->breadcrumbs=array(
	'Ofertas Laborales'=>array('index'),
	'Create',
);

if(Yii::app()->user->getModel(Yii::app()->user->id) != null)
{
    $tipo = Yii::app()->user->getTipoUsuario(Yii::app()->user->name);
    if($tipo == 3){
        $this->menu=array(
                array('label'=>'Ofertas Laborales', 'url'=>array('ofertasLaborales/index')),
                array('label'=>'Buscar', 'url'=>array('')),
                array('label'=>'Publicar una Oferta Laboral', 'url'=>array('ofertasLaborales/create'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Publicar Practica', 'url'=>array('#'), 'visible'=>!Yii::app()->user->isGuest),
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

<h1>Publicar un Oferta Laboral</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>