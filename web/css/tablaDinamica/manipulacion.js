$(document).ready(function(){
	//
	$(document).on('click','caption',function(){
		//obtener la tabla que contiene el caption clickeado
		var objTabla=$(this).parent();
			//el cuerpo de la tabla esta visible?
			//lo siguiente es unicamente para cambiar el icono del caption
			if(objTabla.find('tbody').is(':visible')){
				//eliminamos la clase clsContraer
				$(this).removeClass('clsContraer');
				//agregamos la clase clsExpandir
				$(this).addClass('clsExpandir');
			}else{
				//eliminamos la clase clsExpadir
				$(this).removeClass('clsExpandir');
				//agregamos la clase clsContraer
				$(this).addClass('clsContraer');
			}
			//mostramos u ocultamos el cuerpo de la tabla
			objTabla.find('tbody').toggle();
	});

	//evento que se dispara al hacer clic en el boton para agregar una nueva fila
	$(document).on('click','.clsAgregarFila',function(){
		//almacenamos en una variable todo el contenido de la nueva fila que deseamos
		//agregar. pueden incluirse id's, nombres y cualquier tag... sigue siendo html
		var strNueva_Fila='<tr>'+
                                    '<td><input class="clsAnchoTotal" name="Educacion[][nombre_institucion]" id="Educacion_nombre_institucion" type="text" maxlength="60" /></td>' +
                                    '<td><input class="clsAnchoTotal" name="Educacion[][carrera]" id="Educacion_carrera" type="text" maxlength="60" /></td>' +
                                    '<td><input class="clsAnchoTotal" style="width:30px" maxlength="4" name="Educacion[][inicio]" id="Educacion_inicio" type="text" /></td>'+
                                    '<td><input class="clsAnchoTotal" style="width:30px" maxlength="4" name="Educacion[][fin]" id="Educacion_fin" type="text" /></td>'+
                                    '<td align="right"><input type="button" value="-" class="clsEliminarFila"></td>'+
                                    '</tr>';

		/*obtenemos el padre del boton presionado (en este caso queremos la tabla, por eso
		utilizamos get(3)
			table -> padre 3
				tfoot -> padre 2
					tr -> padre 1
						td -> padre 0
		nosotros queremos utilizar el padre 3 para agregarle en la etiqueta
		tbody una nueva fila*/
		var objTabla=$(this).parents().get(3);

		//agregamos la nueva fila a la tabla
		$(objTabla).find('tbody').append(strNueva_Fila);

		//si el cuerpo la tabla esta oculto (al agregar una nueva fila) lo mostramos
		if(!$(objTabla).find('tbody').is(':visible')){
			//le hacemos clic al titulo de la tabla, para mostrar el contenido
			$(objTabla).find('caption').click();
		}
	});
        
        
        //evento que se dispara al hacer clic en el boton para agregar una nueva fila
	$(document).on('click','.clsAgregarFilaExperiencia',function(){
		//almacenamos en una variable todo el contenido de la nueva fila que deseamos
		//agregar. pueden incluirse id's, nombres y cualquier tag... sigue siendo html
		var strNueva_Fila='<tr>'+
                        '<td><input class="clsAnchoTotal" name="Experiencias[][descripcion]" id="Experiencias_descripcion" type="text" maxlength="255" /></td>' +
                        '<td><input class="clsAnchoTotal" name="Experiencias[][referencia]" id="Experiencias_referencia" type="text" maxlength="255" /></td>' +
                        '<td><input class="clsAnchoTotal" name="Experiencias[][email]" id="Experiencias_email" type="text" maxlength="255" /></td>' +
                        '<td><input class="clsAnchoTotal" style="width:30px" maxlength="4" name="Experiencias[][inicio]" id="Experiencias_inicio" type="text" /></td>' +
                        '<td><input class="clsAnchoTotal" style="width:30px" maxlength="4" name="Experiencias[][fin]" id="Experiencias_fin" type="text" /></td>' +
                        '<td align="right"><input type="button" value="-" class="clsEliminarFila"></td>' +
                        '</tr>';

		/*obtenemos el padre del boton presionado (en este caso queremos la tabla, por eso
		utilizamos get(3)
			table -> padre 3
				tfoot -> padre 2
					tr -> padre 1
						td -> padre 0
		nosotros queremos utilizar el padre 3 para agregarle en la etiqueta
		tbody una nueva fila*/
		var objTabla=$(this).parents().get(3);

		//agregamos la nueva fila a la tabla
		$(objTabla).find('tbody').append(strNueva_Fila);

		//si el cuerpo la tabla esta oculto (al agregar una nueva fila) lo mostramos
		if(!$(objTabla).find('tbody').is(':visible')){
			//le hacemos clic al titulo de la tabla, para mostrar el contenido
			$(objTabla).find('caption').click();
		}
	});
        
        
         //evento que se dispara al hacer clic en el boton para agregar una nueva fila
	$(document).on('click','.clsAgregarFilaComplementaria',function(){
		//almacenamos en una variable todo el contenido de la nueva fila que deseamos
		//agregar. pueden incluirse id's, nombres y cualquier tag... sigue siendo html
		var strNueva_Fila='<tr>'+
                        '<td><input class="clsAnchoTotal" name="FormacionComplementaria[][nombre_formacion]" id="FormacionComplementaria_nombre_formacion" type="text" maxlength="60" /></td>'+
                        '<td><input class="clsAnchoTotal" name="FormacionComplementaria[][institucion]" id="FormacionComplementaria_institucion" type="text" maxlength="50" /></td>'+
                        '<td><input class="clsAnchoTotal" style="width:30px" maxlength="4" name="FormacionComplementaria[][anio_formacion_complementaria]" id="FormacionComplementaria_anio_formacion_complementaria" type="text" /></td>'+
                        '<td align="right"><input type="button" value="-" class="clsEliminarFila"></td>'+     
                        '</tr>';

		/*obtenemos el padre del boton presionado (en este caso queremos la tabla, por eso
		utilizamos get(3)
			table -> padre 3
				tfoot -> padre 2
					tr -> padre 1
						td -> padre 0
		nosotros queremos utilizar el padre 3 para agregarle en la etiqueta
		tbody una nueva fila*/
		var objTabla=$(this).parents().get(3);

		//agregamos la nueva fila a la tabla
		$(objTabla).find('tbody').append(strNueva_Fila);

		//si el cuerpo la tabla esta oculto (al agregar una nueva fila) lo mostramos
		if(!$(objTabla).find('tbody').is(':visible')){
			//le hacemos clic al titulo de la tabla, para mostrar el contenido
			$(objTabla).find('caption').click();
		}
	});

	//cuando se haga clic en cualquier clase .clsEliminarFila se dispara el evento
	$(document).on('click','.clsEliminarFila',function(){
		/*obtener el cuerpo de la tabla; contamos cuantas filas (tr) tiene
		si queda solamente una fila le preguntamos al usuario si desea eliminarla*/
		var objCuerpo=$(this).parents().get(2);
			if($(objCuerpo).find('tr').length==1){
				if(!confirm('Esta es el única fila de la lista ¿Desea eliminarla?')){
					return;
				}
			}

		/*obtenemos el padre (tr) del td que contiene a nuestro boton de eliminar
		que quede claro: estamos obteniendo dos padres
					
		el asunto de los padres e hijos funciona exactamente como en la vida real
		es una jergarquia. imagine un arbol genealogico y tendra todo claro ;)
				
			tr	--> padre del td que contiene el boton
				td	--> hijo de tr y padre del boton
					boton --> hijo directo de td (y nieto de tr? si!)
		*/
		var objFila=$(this).parents().get(1);
			/*eliminamos el tr que contiene los datos del contacto (se elimina todo el
			contenido (en este caso los td, los text y logicamente, el boton */
			$(objFila).remove();
	});

	//evento que se produce al hacer clic en el boton que elimina una tabla completamente
	$(document).on('click','.clsEliminarTabla',function(){
		var objTabla=$(this).parents().get(3);
			//bajamos la opacidad de la tabla hasta estar invisible
			$(objTabla).animate({'opacity':0},500,function(){
				//eliminar la tabla
				$(this).remove();
			});
	});

	//boton para clonar cualquiera de las tablas
	$(document).on('click','.clsClonarTabla',function(){
		var objTabla=$(this).parents().get(4);
			//agregamos un clon de la tabla a la capa contenedora
			$('#divContenedor').append($(objTabla).clone());
	});

});