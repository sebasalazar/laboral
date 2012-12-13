<br><br>

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
