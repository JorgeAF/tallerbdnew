<?php 
	require_once('conexion.php');

	$conexion=conectarBD();
		
		$id=$_POST['idupersone'];
		$usuario=$_POST['usuarioe'];
		$clave=$_POST['clavee'];
		$nombres=$_POST['nombrese'];
		$paterno=$_POST['paternoe'];
		$materno=$_POST['maternoe'];
		$observacion=$_POST['observacione'];

		echo $res=pg_query($conexion,"SELECT alm.editar_usuarios('$id','$usuario','$clave','$nombres','$paterno',
			'$materno','$observacion');");

 ?>
