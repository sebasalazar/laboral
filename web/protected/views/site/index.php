
<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<br /><br />
<div class="carr">
    <?php $this->widget('bootstrap.widgets.TbCarousel', array(
        'items'=>array(
            array('image'=>'images/i1.jpeg','label'=>'Primera Imagen', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
            array('image'=>'images/i2.jpeg', 'label'=>'Segunda Imagen', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
            array('image'=>'images/i3.jpeg', 'label'=>'Tercera Imagen', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
        ),
    )); ?>
</div>