<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Bienvenido a <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<br />
<div class="contenido">
   <div class="columna columna_1">
       <div class="fila">
            <h3>Misión</h3>
            <p align="justify">La Universidad Tecnológica Metropolitana, es una Institución de Educación superior estatal y autónoma socialmente responsable, ubicada en la Región Metropolitana, y tiene como Misión:
            Formar personas con altas capacidades académicas y profesionales, en el ámbito preferentemente tecnológico, apoyada en la generación, transferencia, aplicación y difusión del conocimiento en las áreas del saber que le son propias, para contribuir al desarrollo sustentable del país y de la sociedad de la que forma parte.</p>
       </div>
       <br />
       <div class="fila">
            <h3>Visión</h3>
            <p align="justify">La Universidad Tecnológica Metropolitana, será reconocida por
            la formación de sus egresados, la calidad de su educación continua,
            por la construcción de capacidades de investigación y creación,
            innovación y transferencia en algunas áreas del saber, por
            la equidad social en su acceso, su tolerancia y pluralismo, por su
            cuerpo académico de excelencia y por una gestión institucional
            que asegura su sustentabilidad y la práctica de mecanismos de
            aseguramiento de la calidad en todo su quehacer.</p>
       </div>
   </div>

   <div class="columna columna_2">
       <div class="fila">
            <br /><br />
            <?php echo CHtml::image('images/bolsaempleo.jpg','Bolsa de Trabajo',array('width'=>300,'height'=>230,'class'=>'centrar')); ?>
       </div>
   </div>
   </div>
</div>