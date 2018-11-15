<?php 
	require_once('conexion.php');

	$conexion=conectarBD();
		
		$id=$_POST['idupersone'];
		
		echo $res=pg_query($conexion,"SELECT alm.eliminar_usuario('$id');");
 ?>