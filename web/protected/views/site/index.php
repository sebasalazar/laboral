
<br><br>
<div class="contenido">
        <div class="fila">
            <?php $this->widget('bootstrap.widgets.TbCarousel', array(
                'items'=>array(
                    array('image'=>'images/i1.jpeg', 'label'=>'¡Bienvenido!', 'caption'=>'La Bolsa Laboral de la UTEM, está enfocada a facilitar la insercion de nuestros alumnos al mundo laboral, para comenzar ¡Registrate!.'),
                    array('image'=>'images/i2.jpeg', 'label'=>'¿Por qué inscribirse?', 'caption'=>'Inscribir tu currículo en el Portal de Empleos de tu universidad es el primer paso de tu futuro profesional. ¡Atrevete!'),
                    array('image'=>'images/i3.jpeg', 'label'=>'Practicas Profesionales', 'caption'=>'¿No tiene donde hacer tu practica?, revisa la sección de Practicas Profesionales, y elige la que más te acomode.'),
                ),
            )); ?>
        </div>
</div>

<div class="contenido">
        <div class="fila fila-grande">
            <div class="columna_c_1">
                <div class="con">
                    <text class="text-footer">Noticias</text>
                </div>
                <div class="con2">
                    <p>asddasdasdsa</p>
                </div>
            </div>
        </div>
        <div class="fila">
            <div class="con">
                    <text class="text-footer">Tips</text>
            </div>
            <div class="con3">
                <MARQUEE behavior="scroll" direction="up" scrollAmount="3" width="420" hiegth="195" onMouseOver="this.scrollAmount=1" onMouseOut="this.scrollAmount=3">
                    <?php
                        foreach($model as $i){
                            echo '<hr class="separador" />';
                            echo '<b>'.$i->titulo.'</b><br /><br />';
                            echo '<text class="just">'.$i->contenido.'</text>';
                            echo '<hr class="separador" />';
                        }
                    ?>
                </MARQUEE>
            </div>
            <br />
            <div class="con">
                    <text class="text-footer">Agenda</text>
            </div>
            <div class="con3">
            </div>
        </div>
</div>