<?php 
	require_once('conexion.php');

	$conexion=conectarBD();
		
		$id=$_POST['idpersone'];
		
		echo $res=pg_query($conexion,"SELECT alm.eliminar_item('$id');");
 ?>