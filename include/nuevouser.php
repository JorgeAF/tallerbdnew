<?php 
	require_once('conexion.php');

	$conexion=conectarBD();
	
		$usuario=$_POST['usuario'];
		$clave=$_POST['clave'];
		$nombres=$_POST['nombre'];
		$paterno=$_POST['paterno'];
		$materno=$_POST['materno'];
		$observacion=$_POST['observacion'];

		$res=pg_query($conexion,"SELECT alm.insertar_usuario('$usuario','$clave','$nombres','$paterno','$materno','$observacion');");
		header('location:../vistas/usuario.php');
		
?>