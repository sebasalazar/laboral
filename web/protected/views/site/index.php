<br><br>

<div class="contenido-carrusel">
    <div class="fila">
        <?php
        $this->widget('bootstrap.widgets.TbCarousel', array(
            'items' => array(
                array('image' => 'images/i1.jpeg', 'label' => '¡Bienvenido!', 'caption' => 'La Bolsa Laboral de la UTEM, está enfocada a facilitar la insercion de nuestros alumnos al mundo laboral, para comenzar ¡Registrate!.'),
                array('image' => 'images/i2.jpeg', 'label' => '¿Por qué inscribirse?', 'caption' => 'Inscribir tu currículo en el Portal de Empleos de tu universidad es el primer paso de tu futuro profesional. ¡Atrevete!'),
                array('image' => 'images/i3.jpeg', 'label' => 'Practicas Profesionales', 'caption' => '¿No tiene donde hacer tu practica?, revisa la sección de Practicas Profesionales, y elige la que más te acomode.'),
            ),
        ));
        ?>
    </div>
</div>

<div class="contenido">
    <div class="fila fila-grande">
        <div class="con5">
            <text class="text-footer"><b>Ultimas Ofertas Laborales</b></text>
        </div>
        <div id="columna_c_1">

            <?php
            $this->widget('bootstrap.widgets.TbGridView', array(
                'type' => 'striped bordered condensed',
                'dataProvider' => $ofertas->customSearch(),
                'template' => "{items}",
                'columns' => array(
                    array('name' => 'cargo', 'header' => 'Cargo'),
                    array('name' => 'jornada_fk', 'header' => 'Jornada', 'value' => '$data->jornadaFk->jornada'),
                    array('name' => 'empresa_fk', 'header' => 'Empresa', 'value' => '$data->empresaFk->nombre'),
                    array(
                        'class' => 'bootstrap.widgets.TbButtonColumn',
                        'template' => '{view}',
                        'buttons' => array(
                            'view' => array(
                                'url' => 'Yii::app()->controller->createUrl("ofertasLaborales/view", array("id"=>$data->pk))',
                            ),
                        ),
                    ),
                ),
            ));
            ?>
        </div>
    </div>
    <div class="fila">
        <div class="con">
            <text class="text-footer"><b>Noticias</b></text>
        </div>
        <div class="con2">
            <MARQUEE behavior="scroll" direction="up" marquee-speed="slower" scrollAmount="3" width="420" hiegth="195" onMouseOver="this.scrollAmount=1" onMouseOut="this.scrollAmount=3">
            <?php
                 $this->renderPartial('feed') ;
            ?>
                </MARQUEE>
        </div>
        <br />
        <div class="con">
            <text class="text-footer"><b>Tips</b></text>
        </div>
        <div class="con3">
            <div class="mar">
                <?php
                foreach ($model as $i) {
                    echo CHtml::link($i->titulo, array('tips/view', 'id' => $i->pk), array('rel' => 'tooltip', 'title' => 'Estudiante'));
                    echo '<hr class="separadosr" />';
                }
                ?>
            </div>
        </div>
    </div>
</div>
