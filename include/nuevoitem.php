<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body> -->
	
	<?php 
	require_once('conexion.php');
	$conexion=conectarBD();
	
		$codigo=$_POST['codigo'];
		$descripcion=$_POST['descripcion'];
		$cantidad=$_POST['cantidad'];
		$unidad=$_POST['unidad'];
		$ubicacion=$_POST['ubicacion'];
		$partida_p=$_POST['partida'];

		/*if ($codigo==true) {
			echo 'ingrese un codigo diferente';
			exit();
		}else{*/
		$res=pg_query($conexion,"SELECT alm.insertar_item('$descripcion','$codigo','$cantidad','$partida_p','$unidad','$ubicacion');");
		/*
			}*/
?>

<!-- 
</body>
</html>
 -->