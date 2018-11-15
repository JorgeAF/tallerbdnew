<?php 
	require_once('conexion.php');

	$conexion=conectarBD();
		
		$id=$_POST['idpersone'];
		$descripcion=$_POST['descripcione'];
		$codigo=$_POST['codigoe'];
		$unidad=$_POST['unidade'];
		$ubicacion=$_POST['ubicacione'];
		$partida_p=$_POST['partidae'];

		echo $res=pg_query($conexion,"SELECT alm.editar_item('$id',upper('$descripcion'),upper('$codigo'),
			upper('$unidad'),upper('$ubicacion'),'$partida_p');");
		
 ?>