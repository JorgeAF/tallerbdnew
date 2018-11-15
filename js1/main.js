/*llenado de datos al formulario de editar Usuarios*/

function agregaform(datos) {

	d=datos.split('||');


	$('#idpersone').val(d[0]);
	$('#descripcione').val(d[1]);
	$('#codigoe').val(d[2]);
	$('#unidade').val(d[3]);
	$('#ubicacione').val(d[4]);
	$('#partidae').val(d[5]);
	
}
/*Fin de llenado de datos al formulario de editar Usuarios*/
 

/*actualizacion de datos d Items*/

function actualizaDatos() {
	
	id=$('#idpersone').val();
	descripcion=$('#descripcione').val();
	codigo=$('#codigoe').val();
	unidad=$('#unidade').val();
	ubicacion=$('#ubicacione').val();
	partida=$('#partidae').val();

	cadena =	"idpersone=" + id +
				"&descripcione=" + descripcion +
				"&codigoe=" + codigo +
				"&unidade=" + unidad +
				"&ubicacione=" + ubicacion +
				"&partidae=" + partida ;

				$.ajax({
					type: "POST",
					url: "include/actualizaDatos.php",
					data: cadena,
				success: function(r) {
					if (r==1) {
						alertify.error("No se actualizaron los datos");
					}else {
						$('#tabla').load('include/tabla.php');	
						alertify.success("Datos actualizados ");
					}
				}
				});
}
/*Fin actualizacion de datos de items*/

/*eliminar items*/

function preguntarSiNo(id){
	alertify.confirm('Eliminar Datos', 'Esta seguro de eliminar este registro?', 
		function(){ eliminarDatos (id) },
		  function(){ alertify.error('Eliminacion Cancelada')});
}

function eliminarDatos (id) {
	cadena =	"idpersone=" + id ;
	$.ajax({
		type: "POST",
		url: "include/eliminarDatos.php",
		data: cadena,
		success: function(r) {
			if (r==1) {
				alertify.error("Fallo en Eliminacion");
			}else {
				$('#tabla').load('include/tabla.php');
				alertify.success("Eliminacion Exitosa");
			}
		}
	});
}
/*Fin de eliminar items*/




/*llenado de datos al formulario de editar Usuarios*/
function agregaformUsuarios(datosUsuario) {

	d=datosUsuario.split('||');


	$('#idupersone').val(d[0]);
	$('#usuarioe').val(d[1]);
	$('#clavee').val(d[2]);
	$('#nombrese').val(d[3]);
	$('#paternoe').val(d[4]);
	$('#maternoe').val(d[5]);
	$('#observacione').val(d[6]);
		
}

/* fin del llenado Usuarios*/




/*actualizacion de datos del Usuarios*/

function actualizaDatosUsuarios() {
	
	id=$('#idupersone').val();
	usuario=$('#usuarioe').val();
	clave=$('#clavee').val();
	nombres=$('#nombrese').val();
	paterno=$('#paternoe').val();
	materno=$('#maternoe').val();
	observacion=$('#observacione').val();

	cadena =	"idupersone=" + id +
				"&usuarioe=" + usuario +
				"&clavee=" + clave +
				"&nombrese=" + nombres +
				"&paternoe=" + paterno +
				"&maternoe=" + materno +
				"&observacione=" + observacion;

				$.ajax({
					type: "POST",
					url: "../include/actualizaDatosUsuarios.php",
					data: cadena,

				success: function(r) {
					if (r==1) {
						alertify.error("No se actualizaron los datos");
					}else {
						$('#tablaUsuarios').load('../vistas/usuario.php');	
						alertify.success("Datos actualizados ");
					}
				}
				});

}
/*Fin de actualizacion de datos Usuarios */

/*eliminar usuarios*/

function preguntarSiNoUsuario(id){
	alertify.confirm('Eliminar Datos', 'Esta seguro de eliminar este registro?', 
		function(){ eliminarDatosUsuario (id) },
		  function(){ alertify.error('Eliminacion Cancelada')});
}

function eliminarDatosUsuario(id) {
	cadena =	"idupersone=" + id ;
	$.ajax({
		type: "POST",
		url: "../include/eliminarDatosUsuario.php",
		data: cadena,
		success: function(r) {
			if (r==1) {
				alertify.error("Fallo en Eliminacion");
			}else {
				$('#tablaUsuarios').load('../include/tablaUsuarios.php');
				alertify.success("Eliminacion Exitosa");
			}
		}
	});
}

/*Fin de eliminar usuarios*/



